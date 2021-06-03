<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Matrics</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"
        integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"
        integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous">
    </script>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
</head>

<body>
    <x-navbar />
    <div class="container mt-4">
        <h1 class="text-center"> M<span class="headColor">e</span>trics</h1>

        <!-- Resume -->
        <div class="row">
            <h2>Resume</h2>
            <div class="col-12">
                <p class="justified indented">In this section we define the metrics that are used to evaluate the
                    performance of Virtual Knowledge Graph access engines. The metrics consider the workflow followed by
                    Virtual Knowledge Graph systems, and for each of the steps identified in the workflow we introduce a
                    set of metrics to be measured and reported. </p>
                <p class="justified indented">The workflow extends the OBDA phases identified by Mora and Corcho, and
                    Lanti et al. In addition, it includes some of the steps that are defined by
                    proposals that federate queries. General metrics to be captured are overall execution time,
                    completeness of answers and initial delay. Other metrics may be considered when the engine
                    generates answers following a continuous behavior, such as dief@k or dief@t.
                    Additionally, for each phase of a workflow, a virtual knowledge access engine may capture
                    specific metrics that allow the identification of bottlenecks in the implementations. This
                    relevant set of metrics for each phase are: </p>
            </div>

            <!-- Highligths Concepts -->
            <div>
                <div class="row mt-2">
                    <div class="col-4 shadowText m-auto pt-2 px-3">
                        <p class="mb-1 text-center borderBot">1: Loading Time</p>
                        <p class="m-auto text-center">One R2RML mapping document for accessing SQL datasets.</p>
                    </div>
                    <div class="col-4 shadowText m-auto pt-2 px-3">
                        <p class="mb-1 text-center borderBot">2: Total requests & source selection time</p>
                        <p class="m-auto text-center">During the source selection phase, the engine identifies the
                            sources that can be used to answer the query.</p>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-4 shadowText m-auto pt-2 px-3">
                        <p class="mb-1 text-center borderBot">3: Query generation time</p>
                        <p class="m-auto text-center">When the set of sub-queries to be evaluated over each data source
                            is created, and the query plan is generated.</p>
                    </div>
                    <div class="col-4 shadowText m-auto pt-2 px-3">
                        <p class="mb-1 text-center borderBot">4: Mapping translation time</p>
                        <p class="m-auto text-center">When the engine must translate a provided mapping into another one
                            in a different language, maintaining a set of properties between them.</p>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-4 shadowText m-auto pt-2 px-3">
                        <p class="m-auto mb-1 text-center borderBot">5: Query rewriting time</p>
                        <p class="m-auto text-center">When the generated sub-queries are rewritten to other
                            queries, taking into account potential inferences from the ontology and information in the
                            mapping.</p>
                    </div>
                    <div class="col-4 shadowText m-auto pt-2 px-3">
                        <p class="m-auto mb-1 text-center borderBot">6: Query translation time</p>
                        <p class="m-auto text-center">When the engine, taking the mapping into account, translates each
                            sub-query to another one in the query language, supported by the underlying data sources
                            such as SPARQL-to-SQL.</p>
                    </div>
                </div>

                <div class="row mt-4 mb-2">
                    <div class="col-4 shadowText m-auto pt-2 px-3">
                        <p class="m-auto mb-1 text-center borderBot">7: Query execution time</p>
                        <p class="m-auto text-center">When the translated queries are evaluated against the underlying
                            data sources and the results are translated to RDF or as SPARQL bindings using the rules
                            provided in the mappings.</p>
                    </div>
                    <div class="col-4 shadowText m-auto pt-2 px-3">
                        <p class="m-auto mb-1 text-center borderBot">8: Query aggregation time</p>
                        <p class="m-auto text-center">When the results obtained for each sub-query are aggregated,
                            including the removal of duplicates and the linking of resources.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Table -->
        <div class="my-5">
            <div class="row">
                <h2>Relation between metrics</h2>
                <div class="col-12">
                    <p class="justified indented">Variables that have an impact on the metrics have been grouped into
                        three dimensions: Query, Data, and Mappings. The relation between each metric considered and the
                        dimensions that can impact over that metric is shown in the next table. </p>
                </div>
            </div>
            <table class="table table-responsive">
                <thead class="text">
                    <tr>
                        <th scope="col">Metrics</th>
                        <th scope="col">Type or phase</th>
                        <th scope="col">Dimension</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="specialHeader"></td>
                        <td class="specialHeader text-center">General Metrics</td>
                        <td class="specialHeader"></td>
                    </tr>
                    <tr>
                        <td>Total execution Time</td>
                        <td>General</td>
                        <td><button type="button" class="btn btn-linkCust" data-toggle="modal"
                                data-target="#dataFeatures">Data</button>,
                            <button type="button" class="btn btn-linkCust" data-toggle="modal"
                                data-target="#queryFeatures">Query</button>,
                            <button type="button" class="btn btn-linkCust" data-toggle="modal"
                                data-target="#mappingFeatures">Mapping</button>
                        </td>
                    </tr>
                    <tr>
                        <td># answers</td>
                        <td>General</td>
                        <td><button type="button" class="btn btn-linkCust" data-toggle="modal"
                                data-target="#dataFeatures">Data</button>,
                            <button type="button" class="btn btn-linkCust" data-toggle="modal"
                                data-target="#queryFeatures">Query</button>,
                            <button type="button" class="btn btn-linkCust" data-toggle="modal"
                                data-target="#mappingFeatures">Mapping</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Initial delay</td>
                        <td>General</td>
                        <td><button type="button" class="btn btn-linkCust" data-toggle="modal"
                                data-target="#dataFeatures">Data</button>,
                            <button type="button" class="btn btn-linkCust" data-toggle="modal"
                                data-target="#queryFeatures">Query</button>,
                            <button type="button" class="btn btn-linkCust" data-toggle="modal"
                                data-target="#mappingFeatures">Mapping</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Dief@k</td>
                        <td>C. Behavior</td>
                        <td><button type="button" class="btn btn-linkCust" data-toggle="modal"
                                data-target="#dataFeatures">Data</button>,
                            <button type="button" class="btn btn-linkCust" data-toggle="modal"
                                data-target="#queryFeatures">Query</button>,
                            <button type="button" class="btn btn-linkCust" data-toggle="modal"
                                data-target="#mappingFeatures">Mapping</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Dief@t</td>
                        <td>C. Behavior</td>
                        <td><button type="button" class="btn btn-linkCust" data-toggle="modal"
                                data-target="#dataFeatures">Data</button>,
                            <button type="button" class="btn btn-linkCust" data-toggle="modal"
                                data-target="#queryFeatures">Query</button>,
                            <button type="button" class="btn btn-linkCust" data-toggle="modal"
                                data-target="#mappingFeatures">Mapping</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="specialHeader"></td>
                        <td class="specialHeader text-center">Specific Metrics(Phases)</td>
                        <td class="specialHeader"></td>
                    </tr>
                    <tr>
                        <td>Loading time</td>
                        <td>Starting</td>
                        <td><button type="button" class="btn btn-linkCust" data-toggle="modal"
                                data-target="#queryFeatures">Query</button>,
                            <button type="button" class="btn btn-linkCust" data-toggle="modal"
                                data-target="#mappingFeatures">Mapping</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Mapping trans. time</td>
                        <td>Starting</td>
                        <td><button type="button" class="btn btn-linkCust" data-toggle="modal"
                                data-target="#mappingFeatures">Mapping</button></td>
                    </tr>
                    <tr>
                        <td># requests</td>
                        <td>Distribution</td>
                        <td><button type="button" class="btn btn-linkCust" data-toggle="modal"
                                data-target="#queryFeatures">Query</button></td>
                    </tr>
                    <tr>
                        <td>Source selec. time</td>
                        <td>Distribution</td>
                        <td><button type="button" class="btn btn-linkCust" data-toggle="modal"
                                data-target="#queryFeatures">Query</button>,
                            <button type="button" class="btn btn-linkCust" data-toggle="modal"
                                data-target="#mappingFeatures">Mapping</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Query gen. time</td>
                        <td>Distribution</td>
                        <td><button type="button" class="btn btn-linkCust" data-toggle="modal"
                                data-target="#queryFeatures">Query</button></td>
                    </tr>
                    <tr>
                        <td>Query rewrit. time</td>
                        <td>Rewriting</td>
                        <td><button type="button" class="btn btn-linkCust" data-toggle="modal"
                                data-target="#queryFeatures">Query</button></td>
                    </tr>
                    <tr>
                        <td>Query trans. time</td>
                        <td>Translation</td>
                        <td><button type="button" class="btn btn-linkCust" data-toggle="modal"
                                data-target="#queryFeatures">Query</button>,
                            <button type="button" class="btn btn-linkCust" data-toggle="modal"
                                data-target="#mappingFeatures">Mapping</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Query exec. time</td>
                        <td>Execution</td>
                        <td><button type="button" class="btn btn-linkCust" data-toggle="modal"
                                data-target="#queryFeatures">Query</button>,
                            <button type="button" class="btn btn-linkCust" data-toggle="modal"
                                data-target="#dataFeatures">Data</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Query aggreg. time</td>
                        <td>Finishing</td>
                        <td><button type="button" class="btn btn-linkCust" data-toggle="modal"
                                data-target="#queryFeatures">Query</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Data Modal -->
    <div class="modal fade" id="dataFeatures" tabindex="-1" role="dialog" aria-labelledby="dataFeatures"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modalWidth" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title col-11 mx-auto text-center" id="dataFeaturesLabel">DataSets Variables</h5>
                    <button type="button" class="btn circleButton" data-dismiss="modal">X</button>
                </div>
                <div class="modal-body">
                    <div class="col-12">
                        <p class="justified indented">Variables in this dimension include dataset size and the formats
                            of its
                            sources. As already mentioned datasets section, datasets with different scale factors are
                            generated in GTFS-Madrid-Bench. Size has an impact on the overall execution time, on the
                            initial delay and, specifically, on query execution time because of the larger number of
                            intermediate results.
                            It also influences query aggregation time because in the benchmark, queries against larger
                            datasets generate a larger number of answers.
                        </p>
                        <p class="justified indented"> The format variable may take a single value for datasets in only
                            one
                            format (RDB, CSV, XML, MongoDB,
                            JSON) or multiple formats (configurable by the user) This variable has an impact on the
                            overall
                            execution time, specifically on the query translation and query execution times, as well as
                            on the
                            number of answers because different formats have different access methods and different
                            underlying
                            query languages.</p>
                        <p class="justified indented"> Related work presents partitioning and data distribution in
                            this dimension. In GTFS-Bench-Madrid there are fixed values for these variables: the
                            partitioning is vertical and datasets and databases are loaded in local machines.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mapping Modal -->
    <div class="modal fade" id="mappingFeatures" tabindex="-1" role="dialog" aria-labelledby="mappingFeatures"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modalWidth" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title col-11 mx-auto text-center" id="mappingFeaturesLabel">Mapping features</h5>
                    <button type="button" class="btn circleButton" data-dismiss="modal">X</button>
                </div>
                <div class="modal-body">
                    <div class="col-12">
                        <p class="justified indented">Features of mappings are relevant because they may impact the
                            performance of the engines. Previous work evaluates different mapping variables that
                            impact in the construction of a knowledge graph. Similarly, we consider that the following
                            mapping variables influence overall query execution time and, specifically, query
                            translation
                            and query rewriting times. Regarding structure, we have considered the variables #Classes,
                            #PredicateObjectMaps, #Predicates, #Objects, and #RefObjectMap that are presented in the
                            next table.
                            Another variable is relation type; the mappings of the Madrid-GTFS-Bench include 1–1, 1–N,
                            N–1
                            and N–M relation types. In general, mappings for sources that represent N–M relationships
                            (e.g.
                            stop_times) are more complex and thus time consuming for query execution. Additionally, the
                            variable rr:termtype of the rr:objectMap may also have an effect because the cost of
                            generating
                            a constant, a reference or a template is not the same. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Query Modal -->
    <div class="modal fade" id="queryFeatures" tabindex="-1" role="dialog" aria-labelledby="queryFeatures"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modalWidth" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title col-11 mx-auto text-center" id="queryFeaturesLabel">Queries variables</h5>
                    <button type="button" class="btn circleButton" data-dismiss="modal">X</button>
                </div>
                <div class="modal-body">
                    <div class="col-12 mt-4">
                        <p class="justified indented">The Query dimension variables refer to the structure of the
                            queries, e.g.
                            #triple patterns, #sources, and #star-shaped groups. A Star-shaped group is a group of
                            triple
                            patterns that are “joined” over the same subject or object variable. The most common
                            case in
                            real-world scenarios are subject star-shaped groups that represent properties of one source.
                            The
                            benchmark considers an increasing number of triple patterns, from 3 to 15, also, the number
                            of
                            sources vary from 1 to 5. In particular we have several queries on 1 source with a varying
                            number of
                            triple patterns, and queries that have a large number of triple patterns combined with 4 and
                            5
                            sources. With respect to these two variables, our aim is to balance real-life use cases,
                            where
                            several properties in the specification need to be combined and retrieved, and query
                            complexity.
                            Furthermore, a large number of sources or triple patterns combined with a large number of
                            non-instantiated star-shaped groups should impact overall execution time and also
                            specifically
                            impact query generation, query rewriting, query translation, and query execution times. </p>
                        <p class="justified indented">In general, queries in GTFS-Bench-Madrid combine those that
                            contain single
                            star-shaped groups (, , , ) with those that contain chains of star-shaped groups, that is,
                            where the
                            object of a pattern in a group is the subject in the next group (with joins across different
                            sources): , , , , , , , , , , . According to the ontology structure shown in Fig. 1,
                            gtfs:StopTime
                            relates to stops and trips and may lead to hybrid shapes such as and . There is also the
                            case of
                            query , which refers to one source, and contains a self-join that relates an access to a
                            station to
                            its “parent” station.

                            Besides, as mentioned in [7], query plans generated by query evaluation systems during the
                            subquery
                            generation phase may be affected by the structural properties of a query. If the sources in
                            the
                            dataset are all represented in the same format (OBDA), then query plans will be generated by
                            the
                            underlying engine (either an RDB engine or a NoSQL engine), and execution time will be
                            affected by
                            the number of joins within star-shaped groups and among these groups. When the sources of
                            the
                            dataset are not in the same format (OBDI), the engine has to create the query plan. The
                            performance
                            will be affected by the plan proposed by the OBDI engine. Different combinations of these
                            variables
                            are considered in GTFS-Madrid-Bench queries: on the one hand we have a large number of
                            triple
                            patterns, sources and star-shaped groups in and , and on the other hand queries like combine
                            a large
                            number of sources and star-shaped groups with a medium-sized query (8 triple patterns).

                            Complexity of SPARQL queries is presented in [27], considering the SPARQL fragment with only
                            AND and
                            FILTER operators. Complexity is linear on the product of the dataset size and the size of
                            the query
                            (# triple patterns), and evaluation is NP-complete for queries constructed with AND, FILTER
                            and
                            UNION operators. Several queries in GTFS-Madrid-Bench have FILTER clauses and, specifically,
                            contains a UNION of two triple patterns.

                            The evaluation problem becomes harder when the OPTIONAL operator is added [27]. The work
                            described
                            in [28] presents optimization techniques applied in an OBDA setting specifically for queries
                            that
                            have to deal with OPTIONAL triple patterns, claiming that the underlying database systems do
                            not
                            optimize adequately these class of queries. Similar problems may be expected for querying
                            CSV, XML
                            and JSON data sources. We have designed eight queries that use OPTIONAL graph patterns
                            (according to
                            the corresponding non-mandatory attributes in the specification).

                            Constants in triple patterns together with FILTER with equality operators increase the
                            selectivity
                            of queries and are likely to reduce the cost of evaluating the query. According to [7],
                            instantiated
                            triple patterns have an important impact on the potential number of join intermediate
                            results that
                            may be generated throughout query execution. However, using a FILTER relational operator
                            specially
                            in the case of open ranges, e.g. a FILTER with a operator, may generate a large number of
                            answers.
                            We have considered several combinations of number of star-shaped groups with and without
                            constants;
                            has no constants, whereas in both star-shaped groups in the query have bindings. An example
                            of an
                            intermediate case occurs in with 1 out of 4 instantiated star-shaped groups.

                            Three queries contain the aggregated COUNT function, and one of these queries contains
                            additionally
                            the GROUP BY modifier. Other queries use language features like DISTINCT and ORDER, that
                            will impact
                            on the query execution time metric because all of them require an ordering of the
                            tuples/entries of
                            the underlying sources. We cover the impact of these variables in and with DISTINCT, and and
                            with
                            GROUP BY and ORDER BY respectively. Finally, having unbounded predicates in a query ()
                            increases its
                            complexity, because the search space during query evaluation may be large.

                            The work in [29] studies the impact of negation in the computational complexity of SPARQL
                            queries,
                            it distinguishes four types of negation: negation of filter constraints, negation as
                            failure,
                            negation by MINUS, and negation by NOT EXISTS. The use of NOT EXISTS introduces similar
                            issues to
                            sub-query evaluation because of the presence of correlated variables and the use of a nested
                            iteration method to evaluate queries that contain this type of negation. Hence, contains
                            negation
                            with NOT EXISTS. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-footer />
</body>

</html>
