<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Keyword</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Tangerine&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Allura&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Parisienne&display=swap" rel="stylesheet">
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
        <h1 class="text-center"> K<span class="headColor">E</span>YWORDS </h1>
        <!-- Info -->
        <div class="row">
            <h2>Resume</h2>
            <div class="col-12">
                <p class="justified indented">In this section, we will give some generall information and introduce the
                    main concepts and definitions that are later used to explain our work. Besides this, well-known
                    concepts from the literature such as SPARQL queries and result sets, or ontologies, will be used
                    throughout the site.</p>
            </div>
        </div>

        <!-- Requirements -->
        <div class="row">
            <h2>Requirements</h2>
            <div class="col-12">
                <span>
                    <p class="justified indented">Our virtual knowledge graph access benchmark consist in he following
                        resources. All this resources are available online:
                        <a href="https://github.com/oeg-upm/gtfs-bench" class="fa-lg noLinked ml-1"><i
                                class="fab fa-github textIcon "></i></a>
                    </p>
            </div>
        </div>
        <div class="mb-4">
            <table class="table table-responsive">
                <thead class="text">
                    <tr>
                        <th scope="col">Variable</th>
                        <th scope="col">Requirement</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="modelItem"> Ontology</td>
                        <td>The ontology should include classes with data and object properties.</td>
                    </tr>
                    <tr>
                        <td class="modelItem">Dataset</td>
                        <td>The virtual instance should maintain the constraints defined in the original datase.</td>
                    </tr>
                    <tr>
                        <td class="modelItem">Dataset</td>
                        <td>The virtual instance should be based on real world data.</td>
                    </tr>
                    <tr>
                        <td class="modelItem">Dataset</td>
                        <td>The virtual instance should be distributed in different data formats.</td>
                    </tr>
                    <tr>
                        <td class="modelItem">Mappings</td>
                        <td>The mappings should be able to indicate the format of the source.</td>
                    </tr>
                    <tr>
                        <td class="modelItem">Mappings</td>
                        <td>The mappings should be expressed using well known mapping languages.</td>
                    </tr>
                    <tr>
                        <td class="modelItem">Queries</td>
                        <td>The query set should be based on actual user queries.</td>
                    </tr>
                    <tr>
                        <td class="modelItem">Queries</td>
                        <td>The query set should be complex enough with relations among same but also different data
                            sources.</td>
                    </tr>
                    <tr>
                        <td class="modelItem">Metrics</td>
                        <td>The metrics should provide relevant general information but also specific measures for each
                            defined phase.</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Main Concepts -->
        <div class="row">
            <h2>Main concepts</h2>
            <div class="col-12">
                <p class="justified indented">In this section, we introduce the main concepts and definitions that are
                    later used to explain our work. Besides this, well-known concepts from the literature such as SPARQL
                    queries and result sets, or ontologies, will be used throughout the site.</p>
            </div>
        </div>

        <!-- Source & Datasets -->
        <div class="row shadowText mb-5">
            <div class="col-12 border-bottom">
                <h4><strong>Sources & dataset</strong></h4>
            </div>
            <div class="col-5 mx-auto mt-2">
                <div class="row text-center">
                    <h6><b><em>Definiton</em></b></h6>
                </div>
                <div class="row">
                    <p class="justified indented">We define a source as a tuple
                        <strong><span class="MJX_Assistive_MathML" role="presentation"><math
                                    xmlns="http://www.w3.org/1998/Math/MathML">
                                    <mrow is="true">
                                        <mi is="true">γ</mi>
                                        <mo linebreak="goodbreak" linebreakstyle="after" is="true">=</mo>
                                        <mrow is="true">
                                            <mo is="true">(</mo>
                                            <mi is="true">φ</mi>
                                            <mo is="true">,</mo>
                                            <mi is="true">Σ</mi>
                                            <mo is="true">,</mo>
                                            <mi is="true">f</mi>
                                            <mo is="true">)</mo>
                                        </mrow>
                                    </mrow>
                                </math></span></span>
                            <script type="math/mml" id="MathJax-Element-2">
                                <math><mrow is="true"><mi is="true">γ</mi><mo linebreak="goodbreak" linebreakstyle="after" is="true">=</mo><mrow is="true"><mo is="true">(</mo><mi is="true">φ</mi><mo is="true">,</mo><mi is="true">Σ</mi><mo is="true">,</mo><mi is="true">f</mi><mo is="true">)</mo></mrow></mrow></math>
                            </script></span>
                        </strong>,
                        where <strong><span class="MJX_Assistive_MathML" role="presentation"><math
                                    xmlns="http://www.w3.org/1998/Math/MathML">
                                    <mi is="true">φ</mi>
                                </math></span></strong> is the data of any entity from our domain,
                        <strong><span class="MJX_Assistive_MathML" role="presentation"><math
                                    xmlns="http://www.w3.org/1998/Math/MathML">
                                    <mi is="true">Σ</mi>
                                </math></span></strong> is the model of the data, e.g. the columns of a CSV or the
                        schema of a database table for SQL, and
                        <b><span class="MJX_Assistive_MathML" role="presentation"><math
                                    xmlns="http://www.w3.org/1998/Math/MathML">
                                    <mi is="true">f</mi>
                                </math></span></b> is a specific data format such as CSV, JSON, XML, or SQL, among
                        others.
                        We define a dataset as a set of Sources, i.e., <strong><span class="MJX_Assistive_MathML"
                                role="presentation"><math xmlns="http://www.w3.org/1998/Math/MathML">
                                    <mrow is="true">
                                        <mi mathvariant="script" is="true">D</mi>
                                        <mo linebreak="goodbreak" linebreakstyle="after" is="true">=</mo>
                                        <mrow is="true">
                                            <mo is="true">{</mo>
                                            <msub is="true">
                                                <mrow is="true">
                                                    <mi is="true">γ</mi>
                                                </mrow>
                                                <mrow is="true">
                                                    <mn is="true">1</mn>
                                                </mrow>
                                            </msub>
                                            <mo is="true">,</mo>
                                            <msub is="true">
                                                <mrow is="true">
                                                    <mi is="true">γ</mi>
                                                </mrow>
                                                <mrow is="true">
                                                    <mn is="true">2</mn>
                                                </mrow>
                                            </msub>
                                            <mo is="true">,</mo>
                                            <mo is="true">…</mo>
                                            <mo is="true">,</mo>
                                            <msub is="true">
                                                <mrow is="true">
                                                    <mi is="true">γ</mi>
                                                </mrow>
                                                <mrow is="true">
                                                    <mi is="true">n</mi>
                                                </mrow>
                                            </msub>
                                            <mo is="true">}</mo>
                                        </mrow>
                                    </mrow>
                                </math></span></strong>.
                    </p>
                </div>
            </div>
            <div class="col-5 mx-auto mt-2">
                <div class="row text-center">
                    <h6><b><em>Example</em></b></h6>
                </div>
                <div class="row">
                    <p class="justified indented">We define the following dataset <b><em>D1={(Routes,Σ<sub>1</sub>,SQL),
                                (Stops,Σ<sub>2</sub>,JSON)}</em></b> that involves the data of the metro routes (13
                        instances) and metro stops (1262 instances) in SQL and JSON formats, respectively. Both sources
                        rely on different schemata
                        <b><em>Σ<sub>1</sub></em></b> and <b><em>Σ<sub>2</sub></em></b>, the first specifies the columns
                        of a table, and the second the JSON keys.
                    </p>
                </div>
            </div>
        </div>

        <!-- Datasets Generator -->
        <div class="row shadowText mb-5">
            <div class="col-12 border-bottom">
                <h4><strong>Dataset generator</strong></h4>
            </div>
            <div class="col-5 mx-auto mt-2">
                <div class="row text-center">
                    <h6><b><em>Definiton</em></b></h6>
                </div>
                <div class="row">
                    <p class="justified indented mt-2">We define a dataset generator as a function <b><em>δ</em></b>
                        that
                        takes as input a tuple <b><em>(D,s)</em></b>, where <b><em>D</em></b> is a dataset and
                        <b><em>s</em></b> is a non-negative number that specifies a scale factor.
                        The output of <b><em>δ</em></b> is a dataset <b><em>D<sup>'</sup></em></b> containing enlarged
                        versions, according to <b><em>s</em></b>, of the data (<b><em>φ</em></b>) within the sources of
                        <b><em>D</em></b>.
                    </p>
                </div>
            </div>
            <div class="col-5 mx-auto mt-2">
                <div class="row text-center">
                    <h6><b><em>Example</em></b></h6>
                </div>
                <div class="row">
                    <p class="justified indented">Assuming <b><em>D<sub>1</sub></em></b> from the first example and a
                        scale factor <b><em>s</em></b> of 2.5, a dataset generator may produce the following,
                        <b><em>D<sup>'</sup>={(Routes-2.5, Σ<sub>1</sub>, SQL), (Stos-2.5, Σ<sub>2</sub>,
                                JSON)}.</em></b>
                        The schemata and the formats are the same, but the data of <b><em>Routes 2.5</em></b> and
                        <b><em>Stops 2.5</em></b> has been scaled up from their versions in
                        <b><em>D<sub>1</sub></em></b>, containing 189 and 3536 instances respectively.
                    </p>
                </div>
            </div>
        </div>

        <!-- Mapping -->
        <div class="row shadowText mb-5">
            <div class="col-12 border-bottom">
                <h4><strong>Mapping</strong></h4>
            </div>
            <div class="col-5 mx-auto mt-2">
                <div class="row text-center">
                    <h6><b><em>Definiton</em></b></h6>
                </div>
                <div class="row">
                    <p class="justified indented">A mapping <b><em>m</em></b> is a set of rules that specify the
                        relationship between an ontology and the model of one or more sources. A mapping rule relates
                        the elements within the schema of a source, with elements from an ontology, including constants.
                        In other words, a mapping rule <b><em>r</em></b> contains the correspondences between an element
                        <b><em>e</em></b> within a schema of a source <b><em>Σ</em></b> and an element
                        <b><em>e<sub>*</sub></em></b> of an ontology <b><em>Σ<sub>*</sub></em></b>. The ontology is
                        known as a unified view, since it is the output of
                        translating heterogeneous sources into the same model.
                    </p>
                </div>
            </div>
            <div class="col-5 mx-auto mt-2">
                <div class="row text-center">
                    <h6><b><em>Example</em></b></h6>
                </div>
                <div class="row mx-auto mt-4">
                    <p class=" justified indented">Given the Linked GTFS ontology and a CSV file with the columns “id”
                        and “route”, a mapping may state that each row generates a subject that includes the value of
                        the column “id’, the predicate <em>foaf:name</em>, and its object with the corresponding value
                        in the
                        column “route”.
                    </p>
                </div>
            </div>
        </div>

        <!-- Experiment configuration -->
        <div class="row shadowText mb-5">
            <div class="col-12 border-bottom">
                <h4><strong>Experiment configuration</strong></h4>
            </div>
            <div class="col-5 mx-auto mt-2">
                <div class="row text-center">
                    <h6><b><em>Definiton</em></b></h6>
                </div>
                <div class="row">
                    <p class="justified indented mt-4">We define an experiment configuration <b><em>c</em></b> as
                        <b><em>(D, q, M)</em></b> where <b><em>D</em></b> is a dataset, <b><em>q</em></b> is an
                        SPARQL query and <b><em>M</em></b> is a set of mappings.
                    </p>
                </div>
            </div>
            <div class="col-5 mx-auto mt-2">
                <div class="row text-center">
                    <h6><b><em>Example</em></b></h6>
                </div>
                <div class="row">
                    <p class="justified indented">We can specify the following experiment configuration
                        <b><em>(D<sub>1</sub>, q<sub>1</sub>, {shapes,trips})</em></b>, where
                        <b><em>D<sub>1</sub></em></b> is the dataset specified in the first example,
                        <b><em>q<sub>1</sub></em></b> is the SPARQL query reported in the queries section,
                        and <b><em>M</em></b> is the set of mappings <b><em>{shapes,trips}</em></b>
                        reported in the mapping section.
                    </p>
                </div>
            </div>
        </div>

        <!-- Processor -->
        <div class="row shadowText mb-5">
            <div class="col-12 border-bottom">
                <h4><strong>Processor</strong></h4>
            </div>
            <div class="col-11 mx-auto mt-2">
                <div class="row text-center">
                    <h6><b><em>Definiton</em></b></h6>
                </div>
                <div class="row">
                    <p class="justified indented">Given an experiment configuration <b><em>c</em></b> and an ontology
                        <b><em>Σ<sub>*</sub></em></b>, a processor represents a software component that encodes the
                        function <b><em>ϕ</em></b> that takes as input a pair (<b><em>c,Σ<sub>*</sub></em></b>), and
                        outputs a SPARQL result set <b><em>R</em></b>.
                    </p>
                    <p class="justified indented">Internally, the processor translates the SPARQL query into one or more
                        queries expressed in different languages, depending on the formats within the dataset of
                        <b><em>c</em></b>, using the mappings <b><em>M</em></b>. Then, the processor distributes
                        and evaluates the queries and gathers the results. Consequently, a unified result set is
                        provided as output. This task is known as Virtual Knowledge Graph Access. We distinguish two
                        kinds of processors: OBDA and OBDI. The former are able to handle only experiment configurations
                        where all the data sources have the same data format, while the latter are able to handle any
                        experiment configuration.
                    </p>
                </div>
            </div>
        </div>

        <!-- Trial -->
        <!--
        <div class="row shadowText mb-5">
            <div class="row border-bottom">
                <h4><strong>Trial</strong></h4>
            </div>
            <div class="row m-auto">
                <div class="col-5 mx-auto">
                    <div class="row">
                        <h6><b><em>Definiton</em></b></h6>
                    </div>
                    <div class="row">
                        <p class="justified indented">A mapping is a set of rules that specify the relationship between
                            an
                            ontology and the model of one or more sources. A mapping rule relates the elements within
                            the
                            schema of a source, with elements from an ontology, including constants. In other words, a
                            mapping rule contains the correspondences between an element within a schema of a source and
                            an
                            element of an ontology . The ontology is known as a unified view, since it is the output of
                            translating heterogeneous sources into the same model..</p>
                    </div>
                </div>
                <div class="col-5 mx-auto">
                    <div class="row text-center">
                        <h6><b><em>Example</em></b></h6>
                    </div>
                    <div class="row">
                        <p class="d-flex align-items-center">
                        <p class=" justified indented">We define the following dataset
                            <b><em>D1={(Routes,Σ<sub>1</sub>,SQL),
                                    (Stops,Σ<sub>2</sub>,JSON)}</b></em> that involves the data of the metro routes (13
                            instances) and metro stops (1262 instances) in SQL and JSON formats, respectively. Both
                            sources
                            rely on different schemata
                            <b><em>Σ<sub>1</sub></em></b> and <b><em>Σ<sub>2</sub></em></b>, the first specifies the
                            columns
                            of a table, and the second the JSON keys.
                        </p>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        -->
    </div>

    <x-footer />
</body>

</html>
