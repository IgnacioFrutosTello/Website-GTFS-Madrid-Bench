<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SETUP</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>

    <!-- Fontawsone -->
    <script src="https://kit.fontawesome.com/bfab57f92b.js" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('/js/main.js') }}" type="text/javascript"></script>
    <!-- Styles -->
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
        <h1 class="text-center">S<span class="headColor">e</span>tup</h1>

        <!-- Resume -->
        <div class="row">
            <h2>Resume</h2>
            <div class="col-12">
                <p class="justified indented">In this section we describe how we use our benchmark to evaluate
                    several processors/engines along with this processor/engines description. We have several experiment
                    configurations
                    for evaluating the selected processors. These experiment configurations have a fixed set of
                    mappings with routes and agencies. The processor used to evaluate his query depends on the
                    dataset.

                    All the experiment configurations are loaded into a machine with the following characteristics:
                    2 GHz CPU with 15 cores, 32 RAM, 200 GB HDD with Ubuntu 18.04 as its operating system. The
                    machine contains a docker image for each of the processors: Morph-RDB v3.12.5, Ontop v3.0.0,
                    Morph-CSV v0.1, Ontario v0.3, Morph-xR2RML-1.1-RC2. All the engines are configured with the
                    recommended settings provided in the corresponding online repository: <a
                        href="https://github.com/oeg-upm/gtfs-bench" class="fa-lg noLinked ml-1">
                        <i class="fab fa-github textIcon "></i></a>
                </p>
            </div>


        </div>

        <!-- Table -->
        <div class="mb-4">
            <div class="row">
                <div class="col-12">
                    <p class="justified indented">As an example, the experiment configurations for query can be seen in
                        the next table. Click the processor to access the engine description.</p>
                </div>
            </div>
            <table class="table table-responsive">
                <thead class="text">
                    <tr>
                        <th scope="col">Query <em>q</em></th>
                        <th scope="col">Dataset <em>D</em></th>
                        <th scope="col">TriplesMap <em>M</em></th>
                        <th scope="col">Processor <em>φ</em></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>q4</td>
                        <td><span class="nobr">GTFS<span class="supsub"><em>csv<br />mad</em></span></span><em>-s</em>
                        </td>
                        <td>{routes,agency}<em><sub>RML</sub></em></td>
                        <td><button type="button" class="btn btn-linkCust" data-toggle="modal"
                                data-target="#toolMorph-CSV">Morph-CSV</button></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>{routes,agency}<em><sub>R2RML</sub></em></td>
                        <td><button type="button" class="btn btn-linkCust" data-toggle="modal"
                                data-target="#toolMorph-RDB">Morph-RDB</button></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>{routes,agency}<em><sub>RML</sub></em></td>
                        <td><button type="button" class="btn btn-linkCust" data-toggle="modal"
                                data-target="#toolOntario">Ontario</button></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><span class="nobr">GTFS<span class="supsub"><em>sql<br />mad</em></span></span><em>-s</em>
                        </td>
                        <td>{routes,agency}<em><sub>R2RML</sub></em></td>
                        <td><button type="button" class="btn btn-linkCust" data-toggle="modal"
                                data-target="#toolMorph-RDB">Morph-RDB</button></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>{routes,agency}<em><sub>RML</sub></em></td>
                        <td><button type="button" class="btn btn-linkCust" data-toggle="modal"
                                data-target="#toolOntario">Ontario</button></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>{routes,agency}<em><sub>OBDA</sub></em></td>
                        <td><button type="button" class="btn btn-linkCust" data-toggle="modal"
                                data-target="#toolOntop">Ontop</button></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><span class="nobr">GTFS<span
                                    class="supsub"><em>mongodb<br />mad</em></span></span><em>-s</em>
                        </td>
                        <td>{routes,agency}<em><sub>xR2RML</sub></em></td>
                        <td><button type="button" class="btn btn-linkCust" data-toggle="modal"
                                data-target="#toolMorph-xR2RML">Morph-xR2RML</button></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><span class="nobr">GTFS<span class="supsub"><em>xml<br />mad</em></span></span><em>-s</em>
                        </td>
                        <td>{routes,agency}<em><sub>RML</sub></em></td>
                        <td><button type="button" class="btn btn-linkCust" data-toggle="modal"
                                data-target="#toolOntario">Ontario</button></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><span class="nobr">GTFS<span class="supsub"><em>json<br />mad</em></span></span><em>-s</em>
                        </td>
                        <td>{routes,agency}<em><sub>RML</sub></em></td>
                        <td><button type="button" class="btn btn-linkCust" data-toggle="modal"
                                data-target="#toolOntario">Ontario</button></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><span class="nobr">GTFS<span class="supsub"><em>json<br />mad</em></span></span><em>-s</em>
                        </td>
                        <td>{routes,agency}<em><sub>RML</sub></em></td>
                        <td><button type="button" class="btn btn-linkCust" data-toggle="modal"
                                data-target="#toolOntario">Ontario</button></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- More Info -->
        <div class="row mt-4">
            <div class="col-12">
                <p class="justified indented">In terms of data size, we decided to evaluate the engines over the scale
                    values (5, 10, 50, 100 and 500). After some preliminary tests, we observed that these values provide
                    a good overview of the current state of the engines in terms of query evaluation performance. For
                    each SQL dataset size, we create two docker images where the data is loaded, one as an instance of
                    the MySQL Database Server v5.5 and another as an instance of the MySQL Community Server v8.0.
                    Similarly, for each MongoDB dataset size, we create a docker image of an instance of the MongoDB
                    Community Server v3.4 where the dataset is loaded. The rest of the datasets, which correspond to raw
                    data (CSV, XML and JSON), are loaded into the machine and are accessible to all the processors. To
                    test OBDI engines and to demonstrate the capabilities of the benchmark resources covering multiple
                    scenarios, we chose to analyze the impact of the number of joins among different formats. The main
                    reason to test this parameters is because Ontario is focused on improving the performance of these
                    kind of queries. The dataset were created taking into account the selected formats (JSON, CSV, XML,
                    SQL and MongoDB) and varying the number of relations (joins) among different formats. More
                    specifically, the dataset distributions are the following:
                </p>
            </div>
        </div>

        <!-- Data Preparation -->
        <div class="row shadowText mb-5">
            <div class="col-12 border-bottom">
                <h4 class="text-center"><strong>MINEXTJ dataset</strong></h4>
            </div>
            <div class="col-xl-5 mx-auto mt-2">
                <div class="row mt-2">
                    <p class="justified">The number of joins among sources in different formats is minimized but
                        ensuring that all of the formats are covered. The aim of this configuration is to study the
                        behavior of the engines when they have to deal with different data sources but where most of the
                        joins are done between sources in the same format. Hence they may delegate their treatment to
                        the underlying data source manager (e.g. MySQL in RDB) and apply common optimization techniques
                        in query translation approaches. To meet this requirement and, having 5 possible formats
                        for the data sources, the proposed groups for this dataset are: trips, shapes, calendar and
                        calendar_dates sources in one group, routes and agency in another, frequencies in the third
                        group, stop and stop_times in the fourth one and feed_info in the last one. This composition
                        generates the GTFS<span class="supsub"><em>MIN-EXTJ<br />mad</em></span></span> dataset.</p>
                </div>
            </div>
            <div class="col-xl-6 m-auto">
                <img class="imgCenter my-2" src="/img/minExtj.jpg">
            </div>
        </div>

        <div class="row shadowText mb-5">
            <div class="col-12 border-bottom">
                <h4 class="text-center"><strong>MAXEXTJ dataset</strong></h4>
            </div>
            <div class="col-xl-5 mx-auto mt-2">
                <div class="row mt-5">
                    <p class="justified">The number of joins among sources in different formats is maximized and the
                        five formats are covered. In this distribution, all the possible joins are among sources in
                        different formats. This means that the OBDI engine may be enforced to perform the joins after
                        the execution of the translated queries over the original data sources. In the same manner as
                        the minimized dataset, the groups of sources are: shapes and stops in one group, trips and
                        feed_info in another, calendar and agency in the third group, routes and stop_times in the
                        fourth and calendar_dates and frequencies in the last one. This composition generates the
                        GTFS<span class="supsub"><em>MAX-EXTJ<br />mad</em></span></span> dataset.</p>
                </div>
            </div>
            <div class="col-xl-6 m-auto">
                <img class="imgCenter my-2" src="/img/maxExtj.jpg">
            </div>
        </div>

    </div>

    <!-- Ontario Modal -->
    <div class="modal fade" id="toolOntario" tabindex="-1" role="dialog" aria-labelledby="toolOntario"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modalWidth" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title col-11 mx-auto text-center" id="toolOntarioLabel">Ontario</h5>
                    <button type="button" class="btn circleButton" data-dismiss="modal">X</button>
                </div>
                <div class="modal-body">
                    <div class="col-12">
                        <p class="justified indented"> Ontario is an OBDI engine that is based on the concept of
                            RDF molecule templates (RDF-MT). Ontario exploits the information provided by the
                            mapping rules for creating the corresponding RDF-MT over the data sources. After the source
                            selection and sub-query generation processes, Ontario translates the SPARQL query into the
                            corresponding query language of the original data source. It supports the following formats:
                            RDF, MySQL, CSV, TSV, JSON, XML, MongoDB and Neo4j.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Morph-CSV Modal -->
    <div class="modal fade" id="toolMorph-CSV" tabindex="-1" role="dialog" aria-labelledby="toolMorph-CSV"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modalWidth" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title col-11 mx-auto text-center" id="toolMorph-CSVLabel">Morph-CSV</h5>
                    <button type="button" class="btn circleButton" data-dismiss="modal">X</button>
                </div>
                <div class="modal-body">
                    <div class="col-12">
                        <p class="justified indented">Morph-CSV exploits the information of CSVW annotations and
                            RML mappings to enforce implicit constraints over tabular data. It can be integrated on top
                            of any existing SPARQL-to-SQL engine in order to enhance query completeness and performance.

                            We also intended to include other OBDI engines such as Squerall or Polyweb. In both
                            cases, either the code is not available as open source or it was not feasible to run the
                            engine due to lack of documentation or mapping or SPARQL operators features coverage (e.g.,
                            Squerall does not support POM with join conditions or SPARQL queries with OPTIONAL). Issues
                            have been reported in their corresponding repositories, with the intention of alerting the
                            authors and maintainers about the current limitations.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Morph-RDB Modal -->
    <div class="modal fade" id="toolMorph-RDB" tabindex="-1" role="dialog" aria-labelledby="toolMorph-RDB"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modalWidth" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title col-11 mx-auto text-center" id="toolMorph-RDBLabel">Morph-RDB</h5>
                    <button type="button" class="btn circleButton" data-dismiss="modal">X</button>
                </div>
                <div class="modal-body">
                    <div class="col-12">
                        <p class="justified indented">Morph-RDB is an R2RML engine that also includes
                            materialization and virtualization techniques. The formalization of its query translation
                            technique is based on the R2RML-based extension of SPARQL-to-SQL query translation algorithm
                            proposed by Chebotko et al, originally designed to work with RDB-backed triples store.
                            Similar to Ontop, several optimization techniques are also incorporated in order to generate
                            more efficient SQL queries. It supports SQL and CSV files.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Ontop Modal -->
    <div class="modal fade" id="toolOntop" tabindex="-1" role="dialog" aria-labelledby="toolOntop" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modalWidth" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title col-11 mx-auto text-center" id="toolOntopLabel">Ontop</h5>
                    <button type="button" class="btn circleButton" data-dismiss="modal">X</button>
                </div>
                <div class="modal-body">
                    <div class="col-12">
                        <p class="justified indented">Ontop is an OBDA system that includes both materialization
                            and virtualization techniques. Ontop translates R2RML mappings into its own mapping
                            language, called “OBDA mappings”. These mappings, and a SPARQL query if available, are
                            transformed into datalog rules, allowing semantic optimization techniques to be applied, and
                            generating efficient SQL queries (e.g., self-join elimination). It only supports the SQL
                            format.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Morph-xR2RML Modal -->
    <div class="modal fade" id="toolMorph-xR2RML" tabindex="-1" role="dialog" aria-labelledby="toolMorph-xR2RML"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modalWidth" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title col-11 mx-auto text-center" id="toolMorph-xR2RMLLabel">Morph-xR2RML</h5>
                    <button type="button" class="btn circleButton" data-dismiss="modal">X</button>
                </div>
                <div class="modal-body">
                    <div class="col-12">
                        <p class="justified indented">Morph-xR2RML uses the xR2RML mappings to support the
                            generation of RDF lists, and to query data stored in NoSQL databases such as MongoDB.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-footer />
</body>

</html>
