<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Related Work</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
    
    <!-- Jquery -->
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

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
</head>

<body>
    <x-navbar />
    <div class="container mt-4">
        <h1 class="text-center">R<span class="headColor">e</span>lated w<span class="headColor">o</span>rk
        </h1>
        <!-- Info -->
        <div class="row">
            <h2>Resume</h2>
            <div class="col-12">
                <p class="justified indented">In this section we provide an overview of two groups of benchmark
                    proposals: benchmarks for federated SPARQL engines, and benchmarks for SPARQL OBDA engines.
                    Additionally we present a general description of existing OBDA and OBDI approaches, and the
                    different proposals of mapping languages that are aimed at establishing transformation rules between
                    an ontology and different data representations.</p>
            </div>
        </div>
        <!-- Federated SPARQL benchmarks -->
        <div class="row">
            <h2>Federated SPARQL benchmarks</h2>
            <div class="col-12">
                <p class="justified indented">In the context of federated SPARQL engines, many benchmarks have been
                    proposed to evaluate engines that distribute a SPARQL query over several RDF-based endpoints,
                    applying techniques of query distribution when all of the sources are RDF datasets. Benchmarks that
                    have been proposed are the Fedbench suite and LSLOD.</p>

                <p class="justified indented"> Fedbench provides a framework to evaluate the efficiency and
                    effectiveness of federated SPARQL
                    query strategies over three different datasets: cross-domain, life science, and SPBench which is set
                    in the DBLP context. Evaluation is carried out, and comparisons are done on various setups:
                    centralized, local SPARQL endpoints, and federations of endpoints. Another evaluation setup is the
                    linked data scenario, where sources are retrieved through URI lookup. For the cross domain and
                    life-science queries, the metrics are total execution time and number of requests to endpoints. The
                    metric for the evaluation of SPBench is total execution time, and the Linked Data setting considers
                    execution time and number of dereferenced sources. The focus of Fedbench is on the evaluation of
                    different scenarios of RDF data federation. The purpose of GTFS-Madrid-Bench is to evaluate
                    scenarios where there may be an assortment of data in different formats, not only RDF, that is, a
                    centralized heterogeneous setup (currently denoted as a Data Lake) where the highly dynamic nature
                    of these data require virtualized access. While Fedbench considers both real-world and artificial
                    data federations, GTFS-Madrid-Bench is based on the use of the Madrid subway Linked GTFS feed as a
                    starting point for the generation of scaled instances in the different formats. Both Fedbench and
                    GTFS-Madrid-Bench follow a query design approach in combining SPARQL language coverage and
                    real-world user requirements, where one of the aspects considered is the number of sources that need
                    to be accessed in order to answer the queries.</p>

                <p class="justified indented"> The work <em>Benchmarking federated SPARQL query engines</em> remarks
                    that there are two groups of variables (dependent
                    and independent) in
                    federated benchmark definitions that have not been considered, but which may have an impact on the
                    measurement of engines performance. The independent variables are those that may be specified to
                    ensure the reproducibility of the proposed scenarios; they are grouped into four dimensions: query,
                    data, platform and endpoint. The dependent variables are those that will be measured during the
                    evaluation: endpoint selection time, execution time (divided into (i) time for first answer, (ii)
                    time for the distributed reception of query answers, and (iii) total execution time), and answer
                    completeness. The impact of the dependent variables on the evaluation metrics is analyzed, and then
                    different configurations of variables are applied to the evaluation of FedBench queries. The authors
                    observe that the performance of the federated query engines is indeed affected by the group of
                    independent variables. Similarly, GTFS-Madrid-Bench has also considered in its design and
                    experimental setup some of these query, data and platform independent variables, taking into
                    consideration their impact on the execution time. Some of these are query plan shape, # basic triple
                    patterns, # of instantiations, usage of query language expressivity, dataset size and cache on/off.
                    However, some of the variables are not relevant to GTFS-Madrid-Bench setup, such as those related to
                    the Endpoint dimension and some of the Data dimension variables, such as data endpoint distribution.
                </p>

                <p class="justified indented"> LSLOD [6] provides queries and real-world data from the life-science
                    domain. It is very specific to
                    the context of SPARQL endpoint federation. Several query characteristics are considered in LSLOD
                    such as number of basic graph patterns, number of triple patterns, number of join vertices, and use
                    of different SPARQL clauses. GTFS-Madrid-Bench does not aimed at evaluating federated SPARQL
                    queries, therefore using LSLOD was not an option. Unlike GTFS-Madrid-Bench, LSLOD does not include
                    some SPARQL operators that may impact on the behavior of OBDA/I engines.</p>
            </div>
        </div>
        <!-- OBDA Benchmarks -->
        <div class="row">
            <h2>OBDA Benchmarks</h2>
            <div class="col-12">
                <p class="justified indented">Several benchmarks have been developed to measure the performance of
                    SPARQL to SQL query translation of OBDA engine techniques. The main two proposals in this field are
                    the Berlin SPARQL Benchmark (BSBM) and the Norwegian Petroleum Directorate Benchmark (NPD).
                    The BSBM benchmark sets its context in the e-commerce domain, and provides a configurable data
                    generator and a set of SPARQL queries together with their equivalent SQL queries. This benchmark has
                    been used to compare the query performance of native RDF stores with the performance of OBDA engines
                    that execute virtualized SPARQL access against relational databases.</p>

                <p class="justified indented"> Similar to BSBM, GTFS-Madrid-Bench uses a data generator to scale up the
                    size of the dataset used during experimentation. Unlike BSBM, GTFS-Madrid-Bench is based on real
                    data, using Madrid subway network data to be more specific, and this data is aligned with an
                    established data model. Furthermore, BSBM does not measure specific requirements of OBDA systems, as
                    it has been developed with the aim of comparing OBDA engines with native RDF triple stores. Also, it
                    considers only OBDA engines that access relational data sources. GTFS-Bench-Madrid considers data
                    sources in multiple formats, thus it is tailored to evaluate and compare an assortment of OBDA
                    engines and OBDI engines as well. Specific OBDA requirements have been analyzed by the authors of
                    the NPD benchmark in the setting of a real-world scenario from the oil industry. The nine proposed
                    requirements are related to the datasets, query sets, mappings and query languages. The benchmark
                    includes a data generator, VIG, to generate scaled RDB instances that obtain a number of
                    expected triples from a SPARQL query, using as inputs an ontology, an R2RML mapping document, and
                    the schema of the RDB together with its corresponding instance. In our work we extend the workflow
                    defined in NPD from OBDA to OBDI and hence define the requirements of an OBDI benchmark.
                    Additionally, we extend VIG in order to transform the RDB scaled instances to the different data
                    source representations handled by the engines.</p>

                <p class="justified indented"> Simple queries defined in LSLOD have been used in order to evaluate
                    the performance of the Ontario engine. In this work, all of the original RDF datasets were
                    translated into RDB tables. The idea was to evaluate an heterogeneous setup consisting of RDF and
                    RDB sources, focused on the source selection problem, and the generation of the corresponding
                    optimized query plan. GTFS-Madrid-Bench extends the ideas from this evaluation with the aim of
                    involving a wider assortment of formats that are usually available nowadays in the Web. Also, our
                    proposal differs from LSLOD in the sense that it is supported by an extensible open data model in a
                    smart city context. Additionally, the simple queries from LSLOD are focused on the evaluation of the
                    distribution of star-shaped groups that do not exploit some of the features of the SPARQL language,
                    such as FILTER, ORDER BY, GROUP BY and NOT EXISTS, which are relevant in the context of real-life
                    use cases.</p>
            </div>
        </div>
        <!-- Virtual OBDA and OBDI approaches -->
        <div class="row">
            <h2>Virtual OBDA and OBDI approaches</h2>
            <div class="col-12">
                <p class="justified indented">There are multiple proposals focused on the translation of SPARQL queries
                    to query data in their original format. The concept of OBDA and OBDI is defined in <em>Linking data to ontologies</em>, and the
                    first proposal for translating SPARQL-to-SQL is defined in <em>Semantics preserving SPARQL-to-SQL
                    translation</em>. Based on this idea and with the
                    launch of R2RML as a W3C recommendation, multiple works are proposed in the optimization of
                    this process that take into account this mapping specification, such as Morph-RDB, Ontop
                    or Ultrawrap. Additionally, there are specific studies on how SPARQL operators affect the
                    translation of the query to SQL. Beyond relational databases, Morph-xR2RML formally
                    defines the translation from SPARQL to NoSQL databases. Finally, Morph-CSV is a proposal to
                    enhance the SPARQL-to-SQL process when the data source is a set of tabular data (i.e. CSV files). It
                    exploits information from tabular metadata and mapping rules to explicitly enforce implicit
                    constraints of the original datasets.</p>

                <p class="justified indented">There are two main proposals of OBDI engines: Ontario and Squerall.
                    Ontario is based on the concept of RDF molecule templates which aims to perform efficient
                    source selection in a data lake composed of heterogeneous data sources in their original format. It
                    creates a set of star-shaped sub-queries that match the RDF Molecule Templates (RDF-MT), and applies
                    optimization techniques to define the query plan that will be executed. Similarly, Squerall is a
                    system that implements OBDI for heterogeneous data sources. It takes input data and mappings, and
                    offers a middleware that is able to aggregate the intermediate results in a distributed manner.
                    Although the aforementioned systems are able to evaluate queries against raw tabular data and
                    exploit some information encoded in the query, they do not exploit the constraints declared in
                    annotations or mapping rules to enhance this process. Polyweb is another proposal that is able
                    to translate and distribute queries using RML mappings over relational databases and CSV files.</p>
            </div>
        </div>
        <!-- Mapping languages -->
        <div class="row">
            <h2>Mapping languages</h2>
            <div class="col-12">
                <p class="justified indented">Different mapping languages have been proposed for defining transformation
                    rules between ontology representation languages and data sources in different formats; these include
                    SQL and NoSQL databases, as well as data in plain text such as CSV, XML and JSON. The RDB2RDF W3C
                    Working Group published two recommendations for transforming the content of relational databases
                    into RDF: Direct Mapping and R2RML. The Direct Mapping approach specifies a set of
                    transformation rules that requires no intervention from users. R2RML allows specifying
                    transformation rules, such as how URIs should be generated, in which columns of the database are
                    used for the transformation to RDF triples that represent tuples in the original tables, and so on.
                    After the recommendation was released, new needs and requirements arose in relation to supporting
                    other formats beyond relational databases, and this resulted in the creation of new mapping
                    languages such as RML which considers data sources in CSV, JSON and XML formats, xR2RML
                    for MongoDB databases, KR2RML that considers nested data, CSVW to annotate CSV files on
                    the Web, and D2RML for XML, JSON and REST/SPARQL endpoints, among others. These are declarative
                    proposals that define mapping rules, which have some important features, such as the improving of
                    the maintainability, readability or understandability of the data integration process.
                    Non-declarative mapping languages have also been proposed, for example SPARQL-Generate extends
                    the SPARQL 1.1 by taking as input an RDF dataset and a set of documents in multiple formats, and
                    generating RDF through the SPARQL CONSTRUCT clause.</p>

                <p class="justified indented">Current OBDA benchmarks use mappings defined in a single language
                    according to the underlying format of the engines that are evaluated. The Ontario OBDI engine
                    has conducted their evaluation with an extension of the LSLOD benchmark that defines RML mappings.
                    The Squerall engine has picked the BSBM benchmark and has defined mappings in an extended
                    version of the RML language that uses functions defined with entities from the Function Ontology
                    (FnO).28 The Polyweb tool uses mappings defined RML and R2RML mappings; however the system is
                    not publicly available and thus cannot be reused or extended. GTFS-Madrid-Bench uses mappings
                    defined mappings in all of the state of the art mapping languages: RML, R2RML, xR2RML, and CSVW
                    annotations for tabular data.</p>
            </div>
        </div>
    </div>
</body>
<x-footer />
</body>

</html>
