<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Results</title>

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
        <h1 class="text-center">R<span class="headColor">e</span>sults</h1>

        <!-- Resume -->
        <div class="row">
            <h2>Resume</h2>
            <div class="col-12">
                <p class="justified indented">In this section you can access detailed information about the peformance
                    of our benchmark. In other to access this data in an orderly way, we provide you a simple navigation
                    menu. We have separated the information in with the following elements: you can check out the incial
                    setup of the benchmark, the evaluation of the peformance of the diferent querys, engines,
                    datasets... and the results obtenied from it, research of other works proposals and a general
                    analysis of the desing and the conclusions of it. 
                </p>
                <p class="justified indented">    If you wanna access to all this resources
                    used in the benchmark, such as queries, data, mappings, running scripts, results and docker images
                    for engines and databases, you can find them publicly available online:
                    <a href="https://github.com/oeg-upm/gtfs-bench" class="fa-lg noLinked ml-1">
                        <i class="fab fa-github textIcon "></i></a>
                </p>
            </div>


            <!-- Navigation Eval -->
            <div class="row mt-5 mb-5">
                <div class="col-sm-5 mx-auto pt-2 px-3 shadowText benchNav">
                    <a id="Setup" class="nav-link" href="/bench/setup">
                        <div class="col-12">
                            <h2 class="pt-2 mx-auto text-center">S<span class="headColor">e</span>tup <i
                                    class="fas fa-tools benchNavIcon"></i></h2>
                        </div>
                    </a>
                </div>

                <div class="col-sm-5 mx-auto pt-2 px-3 shadowText benchNav">
                    <a id="Setup" class="nav-link" href="/bench/evaluation">
                        <div class="col-12">
                            <h2 class="pt-2 mx-auto text-center">E<span class="headColor">v</span>aluation <i
                                    class="fas fa-chart-bar benchNavIcon"></i></h2>
                        </div>
                    </a>
                </div>
            </div>

            <div class="row mt-5 mb-5">
                <div class="col-sm-8 m-auto pt-2 px-3 shadowText benchNav">
                    <a id="Setup" class="nav-link" href="/bench/conclusions">
                        <div class="col-12">
                            <h2 class="pt-2 mx-auto text-center">C<span class="headColor">o</span>nclusions & Future
                                Work
                                <i class="fas fa-balance-scale"></i>
                            </h2>
                        </div>
                    </a>
                </div>
            </div>

            <div class="row mt-5 mb-5">
                <div class="col-sm-5 m-auto pt-2 px-3 shadowText benchNav">
                    <a id="Setup" class="nav-link" href="/bench/relatedwork">
                        <div class="col-12">
                            <h2 class="pt-2 mx-auto text-center">R<span class="headColor">e</span>lated work
                                <i class="fas fa-book-open"></i>
                            </h2>
                        </div>
                    </a>
                </div>

                <div class="col-sm-5 mx-auto pt-2 px-3 shadowText benchNav">
                    <a id="Setup" class="nav-link" href="/bench/analysis">
                        <div class="col-12">
                            <h2 class="pt-2 mx-auto text-center">A<span class="headColor">n</span>alysis
                                <i class="fas fa-file-medical-alt"></i>
                            </h2>
                        </div>
                    </a>
                </div>
            </div>


            <div class="row mt-5 mb-5">
                <div class="col-sm-5 m-auto pt-2 px-3  ">
                </div>

                <div class="col-sm-5 mx-auto pt-2 px-3  ">
                </div>
            </div>


        </div>
    </div>

    <x-footer />
</body>

</html>
