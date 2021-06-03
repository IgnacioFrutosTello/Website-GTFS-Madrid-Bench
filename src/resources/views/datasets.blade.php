<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dataset</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>

    <!-- Fontawsone -->
    <script src="https://kit.fontawesome.com/bfab57f92b.js" crossorigin="anonymous"></script>

    <!-- Jquery -->
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
        <h1 class="text-center"> D<span class="headColor">a</span>tasets g<span class="headColor">e</span>neration </h1>
        <div class="row">
            <h2>Resume</h2>
            <div class="col-12">
                <p class="justified indented">Dataset generation for a virtual knowledge graph access benchmark should
                    be focused on the two main variables that allow testing the capabilities of the engines: (i) data
                    size, and (ii) formats in which data can be expressed. In the context of data generation for OBDA,
                    VIG proposes the use of R2RML mappings for an efficient scale-up of the size of an RDB dataset
                    instance. In this case, only one data format (SQL) is involved in the process.</p>
                <p class="justified indented">We use GTFS as the original data source for several reasons: First, GTFS
                    has been the de-facto standard for publishing transport data on the web; it also comes with a clear
                    specification, making it easy to understand. Second, the GTFS model comprises several entities that
                    are related through a variety of relationships. In addition it includes different data types such as
                    strings, integers, and booleans. Finally, many cities have adopted the GTFS data model and have
                    published their GTFS data online. Although in our benchmark we propose the use of the GTFS Madrid
                    subway data, GTFS data from a different city could be used as the original data source.</p>
            </div>
        </div>

        <!-- Main Concepts -->
        <div class="row">
            <h2>Workflow</h2>
            <div class="col-xl-5 mx-auto">
                <p class="justified indented">The GTFS-Madrid-Bench proposes an extended workflow which uses VIG as the
                    data generator engine for the generation of the datasets, and takes into account multiple data
                    formats. We want to be able to compare the results obtained by
                    processors, with the results obtained by the materialized graph in RDF. For this purpose, we take
                    the output of VIG and we run a knowledge graph creation process using
                    the SDM-RDFizer15 engine, which generates the materialized KG in RDF using RML mapping rules. We
                    selected this tool because it passed all the RML Test Cases for CSV files,16 hence we assume
                    that the generation is correct and that it provides a set of techniques to optimize the generation
                    of RDF at scale. We describe the detailed steps of the proposed data generation
                    workflow, together with a leyend of the elements involved in this process</p>
            </div>
            <div class="col-xl-6 m-auto">
                <img class="imgCenter" src="/img/dataSet5.jpg">
                <div class="row">
                    <h5 class="text-center mt-2"> Leyend</h5>
                </div>
            </div>
        </div>

        <!-- Data Preparation -->
        <div class="row shadowText mb-5">
            <div class="col-12 border-bottom">
                <h4><strong>1. Data preparation</strong></h4>
            </div>
            <div class="col-xl-5 mx-auto mt-2">
                <div class="row mt-2">
                    <p class="justified">The original data source, GTFS, is in CSV format. VIG requires an instance of
                        an RDB and an R2RML mapping for scaling up the data source. We use Morph-CSV,
                        which takes as inputs a set of spreadsheets in the form of CSV files, their corresponding
                        annotations using CSVW, and an RML mapping. It automatically produces the corresponding schema
                        of an RDB (identifying typical constraints such as datatypes, PK/FK, indexes and NULLs) and an
                        R2RML mapping document, which are the inputs for VIG.
                        For the Madrid-GTFS-Bench, we use as input an open dataset <span class="nobr">GTFS<span
                                class="supsub"><em>csv<br />mad</em></span></span>= (GTFS<em><sub>mad</sub></em>, GTFS,
                        CSV).
                        GTFS<em><sub>mad</sub></em> is the set of data sources of the subway network of Madrid that has
                        been provided by its transport authority according to the schema GTFS as described in its
                        specification.
                        This dataset is composed of a set of CSV files containing data of Agency, Route, Shape,
                        Frequency, Trip, StopTime, Stop, Calendar and CalendarRule. This input is not modified during
                        process, which means that the generated datasets are defined by the same schema, and all of the
                        generated data is obtained from this initial dataset.
                        We manually create the corresponding RML mapping rules and CSVW metadata annotations and, using
                        the Morph-CSV engine, we automatically generate the corresponding RDB instance
                        GTFS-SQL-1=(GTFS<span class="supsub"><em>sql<br />mad</em></span></span>, (1) dataset with the
                        integrity and domain constraints of the source model, and the R2RML mapping rules.</p>
                </div>
            </div>
            <div class="col-xl-6 m-auto">
                <img class="imgCenter" src="/img/dataSet1.jpg">
                <div class="row">
                    <h5 class="text-center mt-2"> Data preparation workflow</h5>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-center"><i class="fas fa-arrow-down flowArrow"></i></div>

        <!-- Data creation -->
        <div class="row shadowText mb-5">
            <div class="col-12 border-bottom">
                <h4><strong>2. Data creation</strong></h4>
            </div>
            <div class="col-5 m-auto">
                <div class="row">
                    <p class="justified">VIG [13] takes into account the ontology and the set of R2RML mappings to
                        generate each dataset. This engine also receives as input a scale value that indicates that the
                        size of each table of the database increases times. The output of VIG is a set of CSV files, one
                        file for each table of the RDB. In this step the dataset GTFS-CSV-s=(GTFS<span
                            class="supsub"><em>csv<br />mad</em></span></span>, (s) is generated,
                        where <em>s</em> is the selected scale value.</p>
                </div>
            </div>
            <div class="col-xl-6 mx-auto">
                <img class="imgCenter mt-4" src="/img/dataSet2.jpg">
                <div class="row">
                    <h5 class="text-center mt-2"> Data creation workflow</h5>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-center"><i class="fas fa-arrow-down flowArrow"></i></div>
        
        <!-- Data distribution -->
        <div class="row shadowText mb-5">
            <div class="col-12 border-bottom">
                <h4><strong>3. Data distribution</strong></h4>
            </div>
            <div class="col-xl-5 mx-auto mt-2">
                <div class="row">
                    <p class="justified">Finally, each dataset generated using VIG is distributed in several formats. We
                        use open source tools to perform this step such as csv2json, from Python CSVKit,13 and
                        di-csv2xml,14 depending on the data formats (JSON and XML). We divide the distribution into two
                        categories in order to cover both OBDA and OBDI approaches:

                        In the first category, focused on providing support to OBDA techniques, the sources of each
                        dataset are transformed into a single format (e.g. CSV files are transformed into JSON files).
                        The dataset is transformed to the corresponding one in JSON, XML, SQL and MongoDB, obtaining the
                        following datasets: GTFS-F-s=(GTFS, (s) where is the scale value and F {JSON, XML, SQL,
                        MongoDB}.

                        In the second category, focused on OBDI approaches, the sources of each dataset are transformed
                        from the CSV files into multiple formats (e.g. CALENDAR is a JSON document, AGENCY is an XML
                        file, etc.). The benchmark provides a configurable generator to obtain the desirable dataset.
                        More in detail, the user may select the sources associated to each format, and then the tool
                        generates the corresponding dataset and set of mapping rules. With this approach, the data
                        distribution in the benchmark has the flexibility that allows the study of the impact of
                        different parameters that affect the virtual knowledge graph access engines. For example, a
                        parameter that can be studied is the join selectivity. The value of this parameter between
                        shapes and trips is different than between routes and agencies, and depending on the format of
                        each source, the total query execution time of a processor may be impacted. Other parameters
                        such as the number of joins among sources in same/different formats and the impact of the data
                        size in different sources can also be studied.</p>
                </div>
            </div>
            <div class="col-xl-6 m-auto">
                <img class="imgCenter" src="/img/dataSet3.jpg">
                <div class="row">
                    <h5 class="text-center mt-2"> Data distribution workflow</h5>
                </div>
            </div>
        </div>
    </div>
    <x-footer />
</body>

</html>
