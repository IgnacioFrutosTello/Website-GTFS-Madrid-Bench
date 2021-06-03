<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Conclusions</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
    
    <!-- Styles -->
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
        <h1 class="text-center">C<span class="headColor">o</span>nclusions & F<span class="headColor">u</span>ture
            w<span class="headColor">o</span>rk
        </h1>

        <!-- Info -->
        <div class="row">
            <h2>Resume</h2>
            <div class="col-12">
                <p class="justified indented">In this paper we propose a benchmark for virtual knowledge graph access
                    using real data from the transport domain. The benchmark design considers variables that span all of
                    its resources (queries, mappings and data) in order to test the capabilities and performance of the
                    processors. GTFS-Madrid-Bench satisfies requirements that are an extension of those already
                    identified in existing OBDA benchmarks. Besides, metrics have been established for each step of the
                    workflow of virtualised knowledge graph access.</p>

                <p class="justified indented"> As already discussed, the main objective of this benchmark is not to
                    provide a ranking of engines,
                    but to provide a set of resources that can be useful for: (i) practitioners who choose the engine
                    that best fits their use cases and (ii) developers of virtual knowledge graph access engines to
                    improve their tools and compare their results with other proposals. As such, we expect this
                    benchmark to be a stepping stone in this area where much research and development has been done for
                    decades, but there is a need for more mature applications to be used in real-world environments.
                    Indeed, our experimental study has shown that there are still relevant open issues, such as SPARQL
                    conformance, semantic preservation in the translation from SPARQL queries to the query languages
                    used to query raw data (CSV, JSON, XML), and the application of query evaluation optimization
                    techniques. With the Madrid-GTFS-Bench we intend to contribute to the community by providing not
                    only the baseline that can be used to improve the development of the current engines, but also the
                    possibility to use it to test new approaches and techniques over the next years.</p>

                <p class="justified indented"> The design of this benchmark has been a complex task, since it had to
                    cover all of the identified
                    requirements and, at the same time, work on a very general scenario with a mix of OBDA and OBDI
                    approaches. On the one hand, some of the current OBDA proposals work with SQL datasets and in
                    general conform to most of the features of the SPARQL language. Throughout the experiments we
                    realized that the OBDA proposals that are designed to work with other formats support fewer features
                    of the query language, and in general they have issues in their query translation process. There is
                    a lot of room for improvement in these proposals, such as generating more efficient queries, which
                    has been done in the SQL-based OBDA proposals. On the other hand, we were only able to include in
                    the benchmark the Ontario OBDI proposal, even though other OBDI proposals have been published in the
                    literature since it was not feasible to execute them because of lack of documentation. In all cases,
                    the evaluation of our benchmark queries with the different engines exposed the need for improvements
                    in their current releases, in terms of efficiency and correctness of the results.</p>

                <p class="justified indented"> It is also worth mentioning that the benchmark is easily extensible to be
                    used with other data
                    formats and engines. That is, if in the future there is a requirement to evaluate an engine that
                    supports a different data format, the only need is to create a script that translates the data
                    sources from CSV to the corresponding format.</p>

                <p class="justified indented"> Future work includes the development of mapping translation techniques
                    that involve the different
                    mapping language specifications. In the context of virtualized knowledge graph access it would be
                    very useful to help in the development and maintenance of mappings, so as to avoid inconsistencies
                    among mappings and errors in the evaluation. Another line of work is to improve the data generation
                    process to ensure that scaled data is well aligned with the domain data model.</p>
            </div>
        </div>
        <div class="row">
            <h2>Declaration of Competing Interest</h2>
            <div class="col-12">
                <p class="justified indented">The authors declare that they have no known competing financial interests
                    or personal relationships that could have appeared to influence the work reported in this paper.</p>
            </div>
        </div>
        <div class="row">
            <h2>Acknowledgments</h2>
            <div class="col-12">
                <p class="justified indented">The work presented in this paper is supported by the project Semantics for
                    PerfoRmant and scalable INteroperability of multimodal Transport (SPRINT H2020-826172) and by the
                    Spanish Ministerio de Economía, Industria y Competitividad and EU FEDER funds under the DATOS 4.0:
                    RETOS Y SOLUCIONES - UPM Spanish national project (TIN2016-78011-C4-4-R) and by an FPI grant
                    (BES-2017-082511).</p>
            </div>
        </div>


    </div>
</body>
<x-footer />
</body>

</html>
