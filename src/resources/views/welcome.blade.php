<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>

    <!-- Fontawsone -->
    <script src="https://kit.fontawesome.com/bfab57f92b.js" crossorigin="anonymous"></script>

    <!-- Styles Jquery -->
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
        <!-- INFO -->
        <div class="row">
            <span>
                <h1> G<span class="headColor">T</span>FS-Madrid-Bench </h1>
            </span>
            <p class="justified">GTFS-Madrid-Bench, a benchmark to evaluate OBDI engines that can be used for the
                provision of access mechanisms to virtual knowledge graphs. Our proposal introduces several scenarios
                that aim at measuring the query capabilities, performance and scalability of all these engines,
                considering their heterogeneity. The data sources used in our benchmark are derived from the GTFS data
                files of the subway network of Madrid. They have been transformed into several formats (CSV, JSON, SQL
                and XML) and scaled up. The query set aims at addressing a representative number of SPARQL 1.1 features
                while covering usual queries that data consumers may be interested in.</p>
        </div>
        <div class="row">
            <div class="d-flex justify-content-center">
                <div>
                    <h2> Highlights </h1>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-5 mt-2 mb-2 m-auto shadowText">
                <p class="justified text-center my-auto px-3">A comprehensive benchmark for virtual knowledge graph
                    access, which considers
                    multiple data formats and different data scales.</p>
            </div>
            <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-5 mt-2 mb-2 m-auto shadowText">
                <p class="justified text-center my-auto px-3">Several OBDI and OBDA engines evaluated with a single
                    benchmark so as to assess the
                    current status of virtual knowledge graph access.</p>
            </div>
            <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-5 mt-2 mb-2 m-auto shadowText">
                <p class="justified text-center my-auto px-3">All code, datasets and queries are available, following
                    Open Science principles, to
                    facilitate reproducibility and further extensions.</p>
            </div>
        </div>

        <!-- GOALS -->
        <div class="row">
            <div class="d-flex justify-content-center mt-4">
                <div>
                    <h2 class="mb-2"> GOALS </h1>
                </div>
            </div>
            <div class="col-xxl-3  col-md-5 mt-2 mb-2 m-auto">
                <h4 class="text-center">C1</h4>
                <hr>
                <p class="justified">The proposal of a comprehensive and representative benchmark that includes a
                    set of data sources, queries and mappings to be able to evaluate and comparing multiple OBDA and
                    OBDI engines for virtual knowledge graph access.</p>
            </div>
            <div class="col-xxl-3  col-md-5 mt-2 mb-2 m-auto ">
                <h4 class="text-center">C2</h4>
                <hr>
                <p class="justified">The extension of existing OBDA benchmark requirements to take into account (i)
                    metrics that are commonly used in federated query-processing benchmarks; and (ii) steps defined in
                    the new generation of OBDA and OBDI engines.</p>
            </div>
            <div class="col-xxl-3  col-md-5 mt-2 mb-2 m-auto ">
                <h4 class="text-center">C3</h4>
                <hr>
                <p class="justified">A data generation process where single and mixed data formats are scaled-up based
                    on the features of the original data model, integrating state of the art data-generator proposals
                    for benchmark OBDA engines.</p>
            </div>
            <div class="col-xxl-3  col-md-5 mt-2 mb-2  m-auto ">
                <h4 class="text-center">C4</h4>
                <hr>
                <p class="justified">Evaluation of the proposed benchmark over five different engines, discussion of the
                    obtained results, and identification of the current limitations in the state of the art and future
                    lines of work..</p>
            </div>
        </div>

        <!-- WHERE TO FIND US -->
        <span>
            <h1 class="mt-2">W<span class="headColor">h</span>ere T<span class="headColor">o</span> F<span
                    class="headColor">i</span>nd U<span class="headColor">s</span></h1>
        </span>
        <div class="row shadowText mb-5">
            <div class="col-12 border-bottom text-center">
                <h4><strong>You can access t all the information paper and code in the following links</strong></h4>
            </div>
            <div class="row mt-4 mb-3">
                <div class="col-sm-5 mx-auto pt-2 px-3 shadowText benchNav">
                    <a id="Paper" class="nav-link"
                        href="https://www.sciencedirect.com/science/article/pii/S1570826820300354?via%3Dihub#tbl5"
                        target="_blank">
                        <div class="col-12">
                            <h2 class="pt-2 mx-auto text-center">P<span class="headColor">a</span>per
                                <i class="fas fa-book-open benchNavIcon"></i>
                            </h2>
                        </div>
                    </a>
                </div>
                <div class="col-sm-5 mx-auto pt-2 px-3 shadowText benchNav">
                    <a id="GitHubCode" class="nav-link" href="https://github.com/oeg-upm/gtfs-bench" target="_blank">
                        <div class="col-12">
                            <h2 class="pt-2 mx-auto text-center">G<span class="headColor">i</span>tHub C<span
                                    class="headColor">o</span>de <i class="fab fa-github benchNavIcon"></i></h2>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <!-- HOW TO USE -->
        <span>
            <h1 class="mt-2">U<span class="headColor">s</span>ing G<span class="headColor">T</span>FS-Madrid-Bench</h1>
        </span>

        <div class="row shadowText mb-5">
            <div class="col-12 border-bottom">
                <h3><strong>Requirements</strong></h3>
            </div>
            <p class="justified my-auto pt-4 px-5">To have locally installed docker.</p>
            <p class="justified my-auto px-5 mt-2">Decide the distributions to be used for your testing. They
                can be:</p>
            <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-5 mt-2 mb-3 mx-auto shadowText">
                <p class="justified text-center mt-3 my-auto px-3">Standard distributions: data sources are represented
                    in
                    one format (e.g., GTFS-CSV, GTFS-JSON or GTFS-SQL).</p>
            </div>
            <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-5 mt-2 mb-3 mx-auto shadowText">
                <p class="justified text-center my-auto px-3">Custom distributions: each data source is represented in
                    the format selected by the user (e.g., SHAPES in JSON, CALENDAR in CSV, etc.)</p>
            </div>
        </div>

        <div class="row shadowText mb-5">
            <div class="col-12 border-bottom">
                <h3><strong>Instructions</strong></h3>
            </div>
            <p class="justified my-auto pt-4 px-5">1.Download and run the docker image (run it always to ensure you are
                using the last version of the docker image).</p>
            <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 mt-2 mb-2 m-auto shadowText">
                <p class="justified text-center  my-auto px-3">Docker v20.10 or later: docker run --pull always -itv
                    "$(pwd)":/output oegdataintegration/gtfs-bench</p>
            </div>
            <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 mt-2 mb-2 m-auto shadowText">
                <p class="justified text-center my-auto px-3">Custom distributions: each data source is represented in
                    the format selected by the user (e.g., SHAPES in JSON, CALENDAR in CSV, etc.)</p>
            </div>
            <p class="justified my-auto px-5 mt-4">2. Choose data scales and formats to obtain the distributions you
                want to test. You have to provide: first the data scales (in one line, separated by a comma), then,
                select the standard distributions (from none to all) and if is needed, the configuration for one custom
                distribution. If you want to generate several custom distributions, you will have to run the generator
                several times.</p>
            <p class="justified my-auto px-5 mt-4">3. Result will be available as result.zip in the current working
                directory. The folders structure are: one folder for datasets and other for the queries (for virtual
                KG). Inside the datasets folder will be one folder for each distribution (e.g., csv, sql, custom), and
                in each distribution folder we provide the required sizes (each size in one folder), the corresponding
                mapping associated to the distribution, and the SQL schemes if they are needed. Consider that for not
                repeating resources at scale level, the mappings and SQL paths to the data are define at distribution
                level (e.g, "data/AGENCY.csv") and their management for performing a correct evaluation has to be done
                by the user (with an script, for example). You can visit the
                <a class="noSubLink" href="https://github.com/oeg-upm/gtfs-bench/tree/master/utils"
                    target="_blank">utils</a> folder where we provide some ideas on
                how to manage it. See the following example:
            </p>
        </div>

        <!-- TEAM -->
        <span>
            <h1> T<span class="headColor">h</span>e T<span class="headColor">e</span>am </h1>
        </span>

        <div class="row text-center">
            <!-- 1 -->
            <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-5 mt-2 mb-2 mx-auto">
                <div class="card-wrapper a">
                    <div class="content">
                        <div class="card face-front z-depth-2">
                            <img src="/img/dChaves.jpg" alt="teamMember" class="rounded-circle m-2" width="150px"
                                height="150px">
                            <div class="card-body">
                                <h4 class="fw-bold">David Chaves-Fraga</h4>
                                <hr>
                                <p class="font-weight-bold justified"> David Chaves-Fraga is a researcher and PhD
                                    student of the Ontology Engineering Group - Universidad Politécnica de Madrid since
                                    2016, his work is currently focused on the generation of virtual knowldge graph from
                                    CSV on the Web using mapping languages.</p>
                            </div>
                        </div>

                        <div class="card face-back z-depth-2">
                            <div class="card-body my-5">
                                <p><strong>Role:</strong> Researcher and PhD student</p>
                                <p><strong>Email:</strong>
                                    <a property="http://schema.org/url" href="mailto:dchaves@fi.upm.es">
                                        <span property="http://schema.org/email">dchaves@fi.upm.es</span></a>
                                </p>
                                <p><strong>Website:</strong>
                                    <a property="http://schema.org/url" href="https://dchaves.oeg-upm.net/">
                                        <span property="http://schema.org/url">https://dchaves.oeg-upm.net/</span></a>
                                </p>
                                <p><strong>Publications:</strong> 11 <i class="fas fa-book-open cardIcon"></i></p>
                                <p><strong>Awards:</strong> 2 <i class="fas fa-award cardIcon"></i></p>
                                <p><strong>Tools:</strong> 3 <i class="fas fa-cog cardIcon"></i></p>
                                <hr>
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <span><strong>Visit</strong></span>
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="fas fa-share-square visit"></i>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="http://twitter.com/dachafra" target="_blank" class="fa-lg"><i
                                                class="fab fa-twitter"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="https://github.com/dchavesf" target="_blank" class="fa-lg"><i
                                                class="fab fa-github"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="http://www.linkedin.com/in/david-chaves-fraga/" target="_blank"
                                            class="fa-lg"><i class="fab fa-linkedin"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- 2 -->
            <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-5 mt-2 mb-2 mx-auto">
                <div class="card-wrapper">
                    <div class="content">
                        <div class="card face-front z-depth-2">
                            <img src="/img/oCorcho.jpg" alt="teamMember" class="rounded-circle m-2" width="150px"
                                height="150px">
                            <div class="card-body">
                                <h4 class="fw-bold">Oscar Corcho</h4>
                                <hr>
                                <p class="font-weight-bold justified"> Oscar Corcho is a full professor at Universidad
                                    Politécnica de Madrid and one of the leaders of the Ontology Engineering Group. He
                                    also leads the Data Integration area of the group and he been working and teaching
                                    Data Integration, OBDA, and Linked Data since 2004. </p>
                            </div>
                            <div class="card face-back z-depth-2">
                                <div class="card-body">
                                    <p><strong>Role:</strong> Full Profesor</p>
                                    <p><strong>Email:</strong>
                                        <a property="http://schema.org/url" href="mailto:ocorcho@fi.upm.es">
                                            <span property="http://schema.org/email">ocorcho@fi.upm.es</span></a>
                                    </p>
                                    <p><strong>Website:</strong><span> - </span></p>
                                    <p><strong>Publications:</strong> 12 <i class="fas fa-book-open cardIcon"></i></p>
                                    <p><strong>Awards:</strong> 2 <i class="fas fa-award cardIcon"></i></p>
                                    <p><strong>Tools:</strong> 0 <i class="fas fa-cog cardIcon"></i></p>
                                    <hr>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <span><strong>Visit</strong></span>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fas fa-share-square visit"></i>
                                        </li>
                                        <li class="list-inline-item">
                                            <a property="http://schema.org/url" target="_blank"
                                                href="http://twitter.com/ocorcho" class="fa-lg">
                                                <span><i class="fab fa-twitter"></i></span></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a property="http://schema.org/url" target="_blank"
                                                href="http://github.com/ocorcho" class="fa-lg"><i
                                                    class="fab fa-github"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a property="http://schema.org/url" target="_blank"
                                                href="http://www.linkedin.com/in/ocorcho/" class="fa-lg"><i
                                                    class="fab fa-linkedin"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- 3 -->
            <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-5 mt-2 mb-2  mx-auto">
                <div class="card-wrapper">
                    <div class="content">
                        <div class="card face-front z-depth-2">
                            <img src="/img/jToledo.jpg" alt="teamMember" class="rounded-circle m-2" width="150px"
                                height="150px">
                            <div class="card-body">
                                <h4 class="fw-bold">Jhon Toledo</h4>
                                <hr>
                                <p class="font-weight-bold justified"> Jhon Toledo is a research assistant at the
                                    Ontology Engineering Group - Universidad Politécnica de Madrid.
                            </div>
                            <div class="card face-back z-depth-2">
                                <div class="card-body">
                                    <p><strong>Role:</strong> Research assistant</p>
                                    <p><strong>Email:</strong>
                                        <a property="http://schema.org/url" href="mailto:Ja.toledo@upm.es">
                                            <span property="http://schema.org/email">Ja.toledo@upm.es</span></a>
                                    </p>
                                    <p><strong>Website:</strong><span> - </span></p>
                                    <p><strong>Publications:</strong> 1 <i class="fas fa-book-open cardIcon"></i></p>
                                    <p><strong>Awards:</strong> - <i class="fas fa-award cardIcon"></i></p>
                                    <p><strong>Tools:</strong> - <i class="fas fa-cog cardIcon"></i></p>
                                    <hr>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <span><strong>Visit</strong></span>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fas fa-share-square visit"></i>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="https://twitter.com/jhon_anibal" target="_blank" class="fa-lg"><i
                                                    class="fab fa-twitter"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="https://github.com/jatoledo" target="_blank" class="fa-lg"><i
                                                    class="fab fa-github"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- 4 -->
            <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-5 mt-2 mb-2 mx-auto">
                <div class="card-wrapper">
                    <div class="content">
                        <div class="card face-front z-depth-2">
                            <img src="/img/ednaRuckhaus.png" alt="teamMember" class="rounded-circle m-2" width="150px"
                                height="150px">
                            <div class="card-body">
                                <h4 class="fw-bold">Edna Ruckhaus</h4>
                                <hr>
                                <p class="font-weight-bold justified"> Edna Ruckhaus is a Postdoctoral researcher and
                                    she is an investigador in the Ontology Engineering Group - Universidad Politécnica
                                    de
                                    Madrid.
                            </div>
                            <div class="card face-back z-depth-2">
                                <div class="card-body">
                                    <p><strong>Role:</strong> Postdoctoral researcher</p>
                                    <p><strong>Email:</strong>
                                        <a property="http://schema.org/url" href="mailto:eruckhaus@fi.upm.es">
                                            <span property="http://schema.org/email">eruckhaus@fi.upm.es</span></a>
                                    </p>
                                    <p><strong>Website:</strong><span> - </span></p>
                                    </p>
                                    <p><strong>Publications:</strong> 3 <i class="fas fa-book-open cardIcon"></i></p>
                                    <p><strong>Awards:</strong> 0 <i class="fas fa-award cardIcon"></i></p>
                                    <p><strong>Tools:</strong> 0 <i class="fas fa-cog cardIcon"></i></p>
                                    <hr>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <span><strong>Visit</strong></span>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fas fa-share-square visit"></i>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="http://twitter.com/eruckhaus" target="_blank" class="fa-lg"><i
                                                    class="fab fa-twitter"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="https://github.com/ednaru" target="_blank" class="fa-lg"><i
                                                    class="fab fa-github"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="https://es.linkedin.com/in/ednaruckhaus" target="_blank"
                                                class="fa-lg"><i class="fab fa-linkedin"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <x-footer />
    <script src="{{ asset('/js/main.js') }}" type="text/javascript"></script>

</body>

</html>
