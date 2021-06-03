<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Analysis</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>

    
    <!-- Styles -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"
        integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"
        integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous">
    </script>

    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
</head>

<body>
    <x-navbar />
    <div class="container mt-4">
        <h1 class="text-center">A<span class="headColor">n</span>alysis</h1>
        <div class="row">
            <h2>Resume</h2>
            <div class="col-12">
                <p class="justified indented">In this section, we provide a general analysis of the design,
                    implementation and execution of Madrid-GTFS-Bench. It should be pointed out that our aim is to have
                    a proposal that follows the benchmark requirements and gives a general overview of the results and
                    problems we observed during the development of the GTFS-Madrid-Bench. We do not intend to rank the
                    performance of the evaluated engines, but rather to identify current limitations in the state of the
                    art in terms of the capabilities of the engines, so as to provide useful information to the
                    developers of each engine as well as to general practitioners.

                    We also describe the process of creating a benchmark for virtual knowledge graph access, and depict
                    the problems and limitations of the tools employed for creating its resources. This analysis can be
                    used to solve open issues, propose improvements and identify future work in the field. </p>
            </div>
        </div>

        <div class="row">
            <h3>Data Formats</h3>
            <div class="col-12">
                <p class="justified indented">In terms of the comparison among different data formats, we can observe
                    that CSV and SQL data formats are the ones best supported by the available engines. In these cases,
                    most of the engines are able to answer a significant number of queries. As to the effect of cache,
                    as expected, evaluation in the warm mode needed less time, yet, the difference is insignificant due
                    to the relatively small size of the datasets.

                    We can also see that in general, it takes more time to evaluate queries over CSV datasets than over
                    SQL datasets. This is expected because available engines need to first load the CSV dataset in a SQL
                    database server in order to be able to query the dataset.

                    This is not the case of other data formats such as JSON and MongoDB, where the engines are only able
                    to answer one or two queries. This is even worse in the case of the XML format, where the only
                    engine that supports it is not able to answer any query. Similarly, in the distributed format, the
                    only query that can be answered by the OBDI engine is a query that is evaluated against a JSON
                    dataset.

                    This trend holds in the other scale factors up to 100. In the scale factor 500, only those engines
                    that use SQL datasets are able to answer queries. In the next chart you can check the % of successed
                    queries for a size scale of 1.
                </p>
            </div>
            <div class="col-11 mx-auto mt-1 mb-4 shadowText">
                <canvas id="totalSuccessQueriesChart"></canvas>
            </div>
            <div class="col-12">
                <p class="justified indented">
                    Analyzing the results in general, the errors obtained in the execution of the queries (E in the
                    tables) over the tested engines may be due to two main reasons: (i) the engine does not support a
                    SPARQL operator in the original query (ii) the engine is not able to manage large (intermediate)
                    results, for example, maintaining them in memory. Additionally, the differences obtained in terms of
                    query completeness (W in the tables) may be because: (i) the engine supports the SPARQL operator,
                    but it does not translate it correctly to an operator of the underlying database, hence, the query
                    is executed but the number of results obtained are different; (ii) the interpretation of the mapping
                    rules is not performing correctly, hence, the semantics of the original query is not preserved in
                    the translated query. </p>
            </div>
            <div class="row">
                <h3>Engine</h3>
                <div class="col-12">
                    <p class="justified indented">In terms of the capabilities of OBDA/OBDI engines, the main issue we
                        observe is that many of them do not support some of the commonly used SPARQL operators, such as
                        UNION, ORDER BY and NOT EXISTS. The engines that cover a wider range of SPARQL operators are the
                        ones that execute a SPARQL-to-SQL query translation, due to the fact that this technique has
                        been widely studied in the state of the art [32], [35]. The engines that perform query
                        translation over raw data (e.g. CSV, JSON) or over a NoSQL database (MongoDB in this case),
                        produce a lot of errors in the query translation and evaluation processes. For example, in the
                        case of Ontario, the engine is more focused on the generation of an efficient query plan (i.e.,
                        distributing star-shaped groups (SSG) taking into account the molecule templates), than
                        performing a correct translation and execution of each SSG over the raw data. The engine does
                        not give support to most of the SPARQL operators, and that is the main reason why it is not able
                        to answer most of the queries. The same happens in terms of query evaluation time; some
                        SPARQL-to-SQL approaches include several optimization techniques [28] so that they can evaluate
                        the translated queries efficiently, while the other translation techniques that target non SQL
                        query languages are not as efficient. These observations point out the need for a deeper
                        analysis of the techniques that perform efficient query translation from SPARQL to non SQL query
                        languages and raw data (CSV, JSON, XML). Our main conclusions regarding the obtained results
                        are: </p>
                </div>
            </div>
            <!-- Highligths Conclusions -->
            <div class="row mt-1">
                <div class="col-lg-5 col-sm-12 shadowText m-auto pt-2 px-3">
                    <p class="m-auto text-center">Only the SPARQL-to-SQL engines provide an acceptable support for
                        SPARQL operators, although there are still some operators that are not included (e.g., FILTER
                        NOT EXIST in Morph-RDB).</p>
                </div>
                <div class="col-lg-5 col-sm-12 shadowText m-auto pt-2 px-3">
                    <p class="m-auto text-center">OBDA/OBDI proposals beyond relational databases are not mature enough,
                        and more research is needed in order to, for example, provide wider support of SPARQL operators
                        or generate efficient query plans that take into account parameters such as data format or join
                        selectivity.</p>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-lg-5 col-sm-12 shadowText m-auto pt-2 px-3">
                    <p class="m-auto text-center">The problem of translating SPARQL queries for querying raw data (CSV,
                        JSON, XML) should not be understood as a technical case of SPARQL-to-SQL where the management of
                        the data is delegated to RDB wrappers such as Presto, Spark and Apache Drill. Techniques and
                        optimizations, and the analysis of features uniquely associated to these data sources have to be
                        proposed.</p>
                </div>
                <div class="col-lg-5 col-sm-12 shadowText m-auto pt-2 px-3">
                    <p class="m-auto text-center">The distribution of SPARQL queries over heterogeneous sources
                        exploiting mapping rules, and their translation and execution over different query languages,
                        are the two main points for developing robust OBDI engines. Although the adaptation of current
                        techniques proposed by federated SPARQL engines to OBDI has been successfully proved in [8],
                        [9], they do not support the majority of the SPARQL operators and they do not correctly execute
                        the queries when the data source is beyond RDB instances. New investigation should be performed
                        to address these issues.</p>
                </div>
                <div class="col-12 mt-4">
                    <p class="justified indented">
                        Additionally, in our evaluation we only have the possibility of obtaining the total execution
                        time of each engine. Other metrics are proposed in the benchmark, such as initial delay, loading
                        time or query translation time. However, they are only available in some of the engines. We
                        point out the importance of providing all these metrics to identify possible bottlenecks in the
                        evaluation process. </p>
                </div>
            </div>
            <div class="row">
                <h3>Mapping</h3>
                <div class="col-12">
                    <p class="justified indented">We have also found possible improvements in terms of data and mapping
                        generation in the process of creating the resources in this benchmark. In the data generation
                        process, one of the main improvements may be the incorporation of semantics. For example, in our
                        benchmark we have a file that represents the calendar of the trips, which has a start and an end
                        date. The data generator should validate that the start date must be earlier than the end date,
                        so that queries can be created to exploit this constraint. Another example that would improve
                        with the inclusion of semantics is the scaling of dataset sources that are related and may be
                        “joined”. Currently, even if each dataset is scaled, the number of tuples per join-attribute
                        value does not change. Ideally, this should be scaled only in certain cases. Additionally, the
                        inclusion of a set of constraints or validation rules may improve this process (e.g. define a
                        range of possible values for a column).</p>
                    <p class="justified indented">With respect to the mapping generation process, we find two main
                        issues. First, as mappings need to relate the ontology with the data source, the raw data need
                        some changes in a pre-processing step in order to be aligned with the features of the ontology
                        (e.g classes or properties). There are some proposals to include these transformation functions
                        in mappings, such as the Function Ontology [36] or R2RML-F [37], but at the moment of writing
                        only Squerall and Morph-CSV are able to parse RML mappings with functions(RML+FnO) Finally, we
                        have to create manually the mapping documents required to test the engines. Following the
                        proposal in [2], an improvement will be to be able to define the mappings conceptually,
                        independently of the language, and then, have techniques to translate them to a specific
                        language. With this approach we will ensure the correctness of the mappings.</p>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('/js/analisysData.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/js/analisysCharts.js') }}" type="text/javascript"></script>
<x-footer />
</body>

</html>
