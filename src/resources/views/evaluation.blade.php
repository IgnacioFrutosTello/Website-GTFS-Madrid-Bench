<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Evaluation</title>

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

    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
</head>

<body>
    <x-navbar />
    <div class="container mt-4">
        <h1 class="text-center"> E<span class="headColor">v</span>aluation</h1>
        <div class="row">
            <h2>Resume</h2>
            <div class="col-12">
                <p class="justified indented">In this section we describe the evaluation performed using our benchmark,
                    in more datail, we report the results obtained through our experimental configurations. In the next
                    charts, you can see overall execution time in seconds of the benchmark queries in experiment
                    configurations. To undestand this chart, we give you the next explanations.</p>
                <p class="justified indented"> Not executed query: means that the processor is not able to execute the
                    query. </p>
                <p class="justified indented"> Different number results: it means that the engine obtained a different
                    number of results in comparison to the baseline.</p>
                <p class="justified indented"> Out of time: means that the processor is not able to evaluate the query
                    within the timeout duration, 3600s.</p>
                <p class="justified indented"> The default value for this chart are the datasets with their size. You
                    can check an scaled size (5, 10, 50, 100, 500) with the select label.</p>

            </div>
        </div>

        <!-- GTFS-BUTTONS -->
        <div class="row shadowText mb-5">
            <div class="row border-bottom mx-auto">
                <div id="sqlDisplay" class="col-1 folderLook btnChartDisplayed" onclick="toggleDisplayChart(id)">
                    <h5 class="text-center mt-2-5"><strong>SQL</strong></h5>
                </div>
                <div id="mongoDbDisplay" class="col-2  folderLook" onclick="toggleDisplayChart(id)">
                    <h5 class="text-center mt-2-5"><strong>MongoDB</strong></h5>
                </div>
                <div id="csvDisplay" class="col-1  folderLook" onclick="toggleDisplayChart(id)">
                    <h5 class="text-center mt-2-5"><strong>CSV</strong></h5>
                </div>
                <div id="xmlDisplay" class="col-2  folderLook" onclick="toggleDisplayChart(id)">
                    <h5 class="text-center mt-2-5"><strong>XML</strong></h5>
                </div>
                <div id="jsonDisplay" class="col-2  folderLook" onclick="toggleDisplayChart(id)">
                    <h5 class="text-center mt-2-5"><strong>JSON</strong></h5>
                </div>
                <div id="minextjDisplay" class="col-2  folderLook" onclick="toggleDisplayChart(id)">
                    <h5 class="text-center mt-2-5"><strong>Minextj</strong></h5>
                </div>
                <div id="maxextjDisplay" class="col-2  folderLook" onclick="toggleDisplayChart(id)">
                    <h5 class="text-center mt-2-5"><strong>Maxextj</strong></h5>
                </div>
            </div>
            <!-- GTFS-SQL -->
            <div class="sqlDisplay displayed">
                <div class="row">
                    <div class="col-9">
                        <div class="row my-2">
                            <div class="col-12 text-center">
                                <h4>Engines</h4>
                            </div>
                        </div>
                        <div id="sqlButtons" class="row text-center">
                            <div class="col-md-3 col-6">
                                <button type="button" id="sqlMorphRDBWarm" class="btn btn-primary"
                                    onclick="updateSql1MrdbWrmChart()">Morph-RDB Warm</button>
                            </div>
                            <div class="col-md-3 col-6 ">
                                <button type="button" id="sqlMorphRDBCold" class="btn btn-primary"
                                    onclick="updateSql1MrdbCldChart()">Morph-RDB Cold</button>
                            </div>
                            <div class="col-md-3 col-6 ">
                                <button type="button" id="sqlOntario" class="btn btn-primary"
                                    onclick="updateSql1OntarioCldChart()">Ontario Cold</button>
                            </div>
                            <div class="col-md-3 col-6">
                                <button type="button" id="sqlOntop" class="btn btn-primary"
                                    onclick="updateSql1OntopCldChart()">Ontop Cold</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="row my-2">
                            <div class="col-12 text-center">
                                <h4>Size</h4>
                            </div>
                        </div>
                        <div class="row">
                            <select class="custom-select selectPositon" id="sqlchartSelect"
                                onchange="sqlSizeChange(this)">
                                <option value="1">1</option>
                                <option value="5">5</option>
                                <option value="10">10</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                                <option value="500">500</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-12 mx-auto mt-3">
                    <canvas id="sql1Chart"></canvas>
                </div>
            </div>
            <!-- GTFS-MongoDB -->
            <div class="mongoDbDisplay noDisplayed">
                <div class="row">
                    <div class="col-9">
                        <div class="row my-2">
                            <div class="col-12 text-center">
                                <h4>Engines</h4>
                            </div>
                        </div>
                        <div id="mongoDbButtons" class="row text-center">
                            <div class="col-md-4 mx-auto col-6">
                                <button type="button" id="mongoDbMxR2rWarm" class="btn btn-primary"
                                    onclick="updateMngDb1MxR2rWrmChart()">Morph-xR2RML Warm</button>
                            </div>
                            <div class="col-md-4 mx-auto col-6 ">
                                <button type="button" id="mongoDbMxR2rCold" class="btn btn-primary"
                                    onclick="updateMngDb1MxR2rCldChart()">Morph-xR2RML Cold</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="row my-2">
                            <div class="col-12 text-center">
                                <h4>Size</h4>
                            </div>
                        </div>
                        <div class="row">
                            <select class="custom-select selectPositon" id="mongoChartSelect"
                                onchange="mongoDbSizeChange(this)">
                                <option value="1">1</option>
                                <option value="5">5</option>
                                <option value="10">10</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                                <option value="500">500</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-12 mx-auto mt-2">
                    <canvas id="mngDb1Chart"></canvas>
                </div>
            </div>
            <!-- GTFS-CSV -->
            <div class="csvDisplay noDisplayed">
                <div class="row">
                    <div class="col-9">
                        <div class="row my-2">
                            <div class="col-12 text-center">
                                <h4>Engines</h4>
                            </div>
                        </div>
                        <div id="csvButtons" class="row text-center">
                            <div class="col-md-4 mx-auto col-6">
                                <button type="button" id="csvMorphRDBCold" class="btn btn-primary"
                                    onclick="updateCsv1MrdbCldChart()">Morph-RDB Cold</button>
                            </div>
                            <div class="col-md-4 mx-auto col-6 ">
                                <button type="button" id="csvMorphCsvCold" class="btn btn-primary"
                                    onclick="updateCsv1McsvCldChart()">Morph-CSV Cold</button>
                            </div>
                            <div class="col-md-4 mx-auto col-6 mt-2 mt-sm-0 ">
                                <button type="button" id="csvOntario" class="btn btn-primary"
                                    onclick="updateCsv1OntarioCldChart()">Ontario Cold</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="row my-2">
                            <div class="col-12 text-center">
                                <h4>Size</h4>
                            </div>
                        </div>
                        <div class="row">
                            <select class="custom-select selectPositon" id="csvChartSelect"
                                onchange="csvSizeChange(this)">
                                <option value="1">1</option>
                                <option value="5">5</option>
                                <option value="10">10</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                                <option value="500">500</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-12 mx-auto mt-2">
                    <canvas id="csv1Chart"></canvas>
                </div>
            </div>
            <!-- GTFS-XML -->
            <div class="xmlDisplay noDisplayed">
                <div class="row">
                    <div class="col-9">
                        <div class="row my-2">
                            <div class="col-12 text-center">
                                <h4>Engines</h4>
                            </div>
                        </div>
                        <div id="xmlButtons" class="row text-center">
                            <div class="col-md-12 mx-auto col-6">
                                <button type="button" id="xmlOntario" class="btn btn-primary" onclick="">Ontario
                                    Cold</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="row my-2">
                            <div class="col-12 text-center">
                                <h4>Size</h4>
                            </div>
                        </div>
                        <div class="row">
                            <select class="custom-select selectPositon" id="xmlChartSelect"
                                onchange="xmlSizeChange(this)">
                                <option value="1">1</option>
                                <option value="5">5</option>
                                <option value="10">10</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                                <option value="500">500</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-12 mx-auto mt-2">
                    <canvas id="xml1Chart"></canvas>
                </div>
            </div>
            <!-- GTFS-JSON -->
            <div class="jsonDisplay noDisplayed">
                <div class="row">
                    <div class="col-9">
                        <div class="row my-2">
                            <div class="col-12 text-center">
                                <h4>Engines</h4>
                            </div>
                        </div>
                        <div id="jsonButtons" class="row text-center">
                            <div class="col-md-12 mx-auto col-6">
                                <button type="button" id="jsonOntario" class="btn btn-primary" onclick="">Ontario
                                    Cold</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="row my-2">
                            <div class="col-12 text-center">
                                <h4>Size</h4>
                            </div>
                        </div>
                        <div class="row">
                            <select class="custom-select selectPositon" id="jsonChartSelect"
                                onchange="jsonSizeChange(this)">
                                <option value="1">1</option>
                                <option value="5">5</option>
                                <option value="10">10</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                                <option value="500">500</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-12 mx-auto mt-2">
                    <canvas id="json1Chart"></canvas>
                </div>
            </div>
            <!-- GTFS-MINEXTJ -->
            <div class="minextjDisplay noDisplayed">
                <div class="row">
                    <div class="col-9">
                        <div class="row my-2">
                            <div class="col-12 text-center">
                                <h4>Engines</h4>
                            </div>
                        </div>
                        <div id="minextjButtons" class="row text-center">
                            <div class="col-md-12 mx-auto col-6">
                                <button type="button" id="minextjOntario" class="btn btn-primary" onclick="">Ontario
                                    Cold</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="row my-2">
                            <div class="col-12 text-center">
                                <h4>Size</h4>
                            </div>
                        </div>
                        <div class="row">
                            <select class="custom-select selectPositon" id="minextjChartSelect"
                                onchange="minextjSizeChange(this)">
                                <option value="1">1</option>
                                <option value="5">5</option>
                                <option value="10">10</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                                <option value="500">500</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-12 mx-auto mt-2">
                    <canvas id="minextj1Chart"></canvas>
                </div>
            </div>
            <!-- GTFS-MAXEXTJ -->
            <div class="maxextjDisplay noDisplayed">
                <div class="row">
                    <div class="col-9">
                        <div class="row my-2">
                            <div class="col-12 text-center">
                                <h4>Engines</h4>
                            </div>
                        </div>
                        <div id="maxextjButtons" class="row text-center">
                            <div class="col-md-12 mx-auto col-6">
                                <button type="button" id="maxextjOntario" class="btn btn-primary" onclick="">Ontario
                                    Cold</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="row my-2">
                            <div class="col-12 text-center">
                                <h4>Size</h4>
                            </div>
                        </div>
                        <div class="row">
                            <select class="custom-select selectPositon" id="maxextjChartSelect"
                                onchange="maxextjSizeChange(this)">
                                <option value="1">1</option>
                                <option value="5">5</option>
                                <option value="10">10</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                                <option value="500">500</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-12 mx-auto mt-2">
                    <canvas id="maxextj1Chart"></canvas>
                </div>
            </div>
        </div>

    </div>
    <script src="{{ asset('/js/main.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/js/datasets.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/js/charts.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/js/chartsFunction.js') }}" type="text/javascript"></script>
<x-footer />
</body>

</html>
