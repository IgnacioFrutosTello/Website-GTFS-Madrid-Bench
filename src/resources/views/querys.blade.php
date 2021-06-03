<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Query</title>

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
        <h1 class="text-center"> Q<span class="headColor">u</span>eries</h1>

        <div class="row">
            <h2>Resume</h2>
            <div class="col-12">
                <p class="justified indented">We have developed queries that are based on the Linked GTFS ontology, and
                    are aligned with user stories in Madrid’s transport domain, together with different combinations of
                    values for the variables. It should be mentioned that the queries cover all of the data sources that
                    were generated by the Madrid’s transport authority as GTFS data from the metro system. These include
                    agencies, routes, stops, trips, frequencies, shapes, calendar, and calendar dates. Although in the
                    benchmark we have defined mappings to translate queries into the underlying query language of the
                    source, these are independent from the queries. We have used these mappings to generate the
                    materialized knowledge graph in the data generation step.

                    We have defined two sets of 18 queries with identical templates but with differences in the
                    constants that appear in subjects or objects of bounded triple patterns:
                </p>
            </div>

            <!-- Highligths Concepts -->
            <div class="row mt-2">
                <div class="col-4 shadowText m-auto pt-2 px-3">
                    <p class="m-auto text-center">(1) Baseline queries with
                        constants that belong to Madrid’s GTFS Linked Data</p>
                </div>
                <div class="col-4 shadowText m-auto pt-2 px-3">
                    <p class="m-auto text-center">(2) VIG queries with constants that belong
                        to the datasets generated by the tool; these queries are executed in the evaluation
                        described in
                        Section.</p>
                </div>
            </div>

        </div>
        <!-- Table -->
        <div class="my-5">
            <div class="row">
                <h2> GTFS-Madrid-Bench Queries</h2>
                <div class="col-12">
                    <p class="justified indented">In the next table we presents all the variables considered for the
                        18 queries in our benchmark. Rows correspond to the query identifier, its text in natural
                        language and properties. Columns correspond to the query variables that influence most of
                        the benchmark metrics. Each cell contains the value of the variable in the query.
                        Additionally, the column Mapping features describes the rules from the general mapping
                        involved in the query where TM means TriplesMap, PSOM means Predicate Simple Object Map
                        (reference, template or constant) and PROM means Predicate Reference Map (join conditions).
                    </p>
                </div>
            </div>
            <table class="table table-responsive">
                <thead class="text">
                    <tr>
                        <th scope="col">Query</th>
                        <th scope="col" class="descriptionCell">Description</th>
                        <th scope="col">#Triple</th>
                        <th scope="col">#Sources</th>
                        <th scope="col">OPTIONAL</th>
                        <th scope="col">Aggregation</th>
                        <th scope="col">Other features</th>
                        <th scope="col text-center">FILTER</th>
                        <th scope="col"></th>
                        <th scope="col">#Star-shaped groups</th>
                        <th scope="col">#Sources</th>
                        <th scope="col">Mapping features</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="secondHeader">
                        <td></td>
                        <td></td>
                        <td class="specialHeader"></td>
                        <td class="specialHeader"></td>
                        <td class="specialHeader text-center">Patterns</td>
                        <td class="specialHeader"></td>
                        <td class="specialHeader"></td>
                        <td class="specialHeader2 text-center">equal to</td>
                        <td class="specialHeader2 text-center">relational</td>
                        <td class="specialHeader text-center">w/o constants</td>
                        <td class="specialHeader text-center">w/constants</td>
                        <td></td>
                    </tr>
                    <tr class="text-center rq1">
                        <td class="query"><button type="button" class="btn btn-linkCust" data-toggle="modal"
                                data-target="#q1Info">q1</button></td>
                        <td class="description">All Shapes</td>
                        <td class="triple">4</td>
                        <td class="source">1</td>
                        <td class="optional"></td>
                        <td class="aggregation"></td>
                        <td class="otherFeatures"></td>
                        <td class="FilterEQ"></td>
                        <td class="FilterRela"></td>
                        <td class="StarO">1</td>
                        <td class="StarW">0</td>
                        <td class="Map">1TM, 4PSOM</td>
                    </tr>
                    <tr class="text-center rq2">
                        <td class="query"><button type="button" class="btn btn-linkCust" data-toggle="modal"
                                data-target="#q2Info">q2</button></td>
                        <td class="description text-center">All stops where the latitude is larger than a specific
                            value</td>
                        <td class="triple">4</td>
                        <td class="source">1</td>
                        <td class="optional"><i class="fas fa-check text-success"></i></td>
                        <td class="aggregation"></td>
                        <td class="otherFeatures"></td>
                        <td class="FilterEQ"></td>
                        <td class="FilterRela"><i class="fas fa-check text-success"></i></td>
                        <td class="StarO">0</td>
                        <td class="StarW">1</td>
                        <td class="Map">1TM, 5PSOM</td>
                    </tr>
                    <tr class="text-center rq3">
                        <td class="query"><button type="button" class="btn btn-linkCust" data-toggle="modal"
                                data-target="#q3Info">q3</button></td>
                        <td class="description text-center">Accessibility information of all station</td>
                        <td class="triple">5</td>
                        <td class="source">1</td>
                        <td class="optional"><i class="fas fa-check text-success"></i></td>
                        <td class="aggregation"></td>
                        <td class="otherFeatures"></td>
                        <td class="FilterEQ"><i class="fas fa-check text-success"></i></td>
                        <td class="FilterRela"></td>
                        <td class="StarO">0</td>
                        <td class="StarW">1</td>
                        <td class="Map">1TM, 6PSOM</td>
                    </tr>
                    <tr class="text-center rq4">
                        <td class="query"><button type="button" class="btn btn-linkCust" data-toggle="modal"
                                data-target="#q4Info">q4</button></td>
                        <td class="description text-center">All agencies and their routes</td>
                        <td class="triple">9</td>
                        <td class="source">2</td>
                        <td class="optional"><i class="fas fa-check text-success"></i></td>
                        <td class="aggregation"></td>
                        <td class="otherFeatures"></td>
                        <td class="FilterEQ"></td>
                        <td class="FilterRela"></td>
                        <td class="StarO">2</td>
                        <td class="StarW">0</td>
                        <td class="Map">2TM, 8PSOM, 1PROM</td>
                    </tr>
                    <tr class="text-center rq5">
                        <td class="query"><button type="button" class="btn btn-linkCust" data-toggle="modal"
                                data-target="#q5Info">q5</button></td>
                        <td class="description text-center">Services that have been added after a specific date</td>
                        <td class="triple">5</td>
                        <td class="source">2</td>
                        <td class="optional"></td>
                        <td class="aggregation"></td>
                        <td class="otherFeatures"></td>
                        <td class="FilterEQ"></td>
                        <td class="FilterRela"><i class="fas fa-check text-success"></i></td>
                        <td class="StarO">1</td>
                        <td class="StarW">1</td>
                        <td class="Map">3TM, 5PSOM, 2PROM</td>
                    </tr>
                    <tr class="text-center rq6">
                        <td class="query"><button type="button" class="btn btn-linkCust" data-toggle="modal"
                                data-target="#q6Info">q6</button></td>
                        <td class="description text-center">Number of routes covered by a specific agency</td>
                        <td class="triple">3</td>
                        <td class="source">2</td>
                        <td class="optional"></td>
                        <td class="aggregation"><i class="fas fa-check text-success"></i></td>
                        <td class="otherFeatures"></td>
                        <td class="FilterEQ"><i class="fas fa-check text-success"></i></td>
                        <td class="FilterRela"></td>
                        <td class="StarO">0</td>
                        <td class="StarW">2</td>
                        <td class="Map">2TM, 1PSOM, 1PROM</td>
                    </tr>
                    <tr class="text-center rq7">
                        <td class="query"><button type="button" class="btn btn-linkCust" data-toggle="modal"
                                data-target="#q7Info">q7</button></td>
                        <td class="description text-center">All wheelchair-accessible stops in a specific route</td>
                        <td class="triple">15</td>
                        <td class="source">4</td>
                        <td class="optional"><i class="fas fa-check text-success"></i></td>
                        <td class="aggregation"></td>
                        <td class="otherFeatures">DISTINCT</td>
                        <td class="FilterEQ"><i class="fas fa-check text-success"></i></td>
                        <td class="FilterRela"></td>
                        <td class="StarO">1</td>
                        <td class="StarW">3</td>
                        <td class="Map">6TM, 11PSOM, 5PROM</td>
                    </tr>
                    <tr class="text-center rq8">
                        <td class="query"><button type="button" class="btn btn-linkCust" data-toggle="modal"
                                data-target="#q8Info">q8</button></td>
                        <td class="description text-center">All wheelchair-accessible stops in a specific route</td>
                        <td class="triple">14</td>
                        <td class="source">5</td>
                        <td class="optional"><i class="fas fa-check text-success"></i></td>
                        <td class="aggregation"></td>
                        <td class="otherFeatures"></td>
                        <td class="FilterEQ"></td>
                        <td class="FilterRela"></td>
                        <td class="StarO">5</td>
                        <td class="StarW">0</td>
                        <td class="Map">8TM, 10PSOM, 7PROM</td>
                    </tr>
                    <tr class="text-center rq9">
                        <td class="query"><button type="button" class="btn btn-linkCust" data-toggle="modal"
                                data-target="#q9Info">q9</button></td>
                        <td class="description text-center">Trips and associated shapes where latitude is larger
                            than a specific value</td>
                        <td class="triple">7</td>
                        <td class="source">2</td>
                        <td class="optional"><i class="fas fa-check text-success"></i></td>
                        <td class="aggregation"></td>
                        <td class="otherFeatures"></td>
                        <td class="FilterEQ"></td>
                        <td class="FilterRela"><i class="fas fa-check text-success"></i></td>
                        <td class="StarO">1</td>
                        <td class="StarW">1</td>
                        <td class="Map">5TM, 4PSOM, 4PROM</td>
                    </tr>
                    <tr class="text-center rq10">
                        <td class="query"><button type="button" class="btn btn-linkCust" data-toggle="modal"
                                data-target="#q10Info">q10</button></td>
                        <td class="description text-center">Number of trips that have a duration over a number of
                            minutes</td>
                        <td class="triple">4</td>
                        <td class="source">2</td>
                        <td class="optional"></td>
                        <td class="aggregation"><i class="fas fa-check text-success"></i></td>
                        <td class="otherFeatures">DISTINCT</td>
                        <td class="FilterEQ"></td>
                        <td class="FilterRela"><i class="fas fa-check text-success"></i></td>
                        <td class="StarO">1</td>
                        <td class="StarW">1</td>
                        <td class="Map">2TM, 3PSOM, 1PROM</td>
                    </tr>
                    <tr class="text-center rq11">
                        <td class="query"><button type="button" class="btn btn-linkCust" data-toggle="modal"
                                data-target="#q11Info">q11</button></td>
                        <td class="description text-center">Trips that are available on a certain date</td>
                        <td class="triple">12</td>
                        <td class="source">3</td>
                        <td class="optional"></td>
                        <td class="aggregation"></td>
                        <td class="otherFeatures">NOT EXISTS</td>
                        <td class="FilterEQ"></td>
                        <td class="FilterRela"><i class="fas fa-check text-success"></i></td>
                        <td class="StarO">3</td>
                        <td class="StarW">2</td>
                        <td class="Map">5TM, 5PSOM, 4PROM</td>
                    </tr>
                    <tr class="text-center rq12">
                        <td class="query"><button type="button" class="btn btn-linkCust" data-toggle="modal"
                                data-target="#q12Info">q12</button></td>
                        <td class="description text-center">Number of stops that are wheelchair-accessible grouped
                            by route</td>
                        <td class="triple">10</td>
                        <td class="source">4</td>
                        <td class="optional"></td>
                        <td class="aggregation"><i class="fas fa-check text-success"></i></td>
                        <td class="otherFeatures">GROUP BY</td>
                        <td class="FilterEQ"></td>
                        <td class="FilterRela"></td>
                        <td class="StarO">3</td>
                        <td class="StarW">1</td>
                        <td class="Map">5TM, 7PSOM, 3PROM</td>
                    </tr>
                    <tr class="text-center rq13">
                        <td class="query"><button type="button" class="btn btn-linkCust" data-toggle="modal"
                                data-target="#q13Info">q13</button></td>
                        <td class="description text-center">The accesses of all stations</td>
                        <td class="triple">6</td>
                        <td class="source">1</td>
                        <td class="optional"><i class="fas fa-check text-success"></i></td>
                        <td class="aggregation"></td>
                        <td class="otherFeatures">GROUP BY</td>
                        <td class="FilterEQ"></td>
                        <td class="FilterRela"></td>
                        <td class="StarO">0</td>
                        <td class="StarW">1</td>
                        <td class="Map">1TM, 3PSOM, 1PROM</td>
                    </tr>
                    <tr class="text-center rq14">
                        <td class="query"><button type="button" class="btn btn-linkCust" data-toggle="modal"
                                data-target="#q14Info">q14</button></td>
                        <td class="description text-center">All stops times and their related routes and stops
                            ordered by their sequence, in a specific direction and service</td>
                        <td class="triple">8</td>
                        <td class="source">3</td>
                        <td class="optional"></td>
                        <td class="aggregation"></td>
                        <td class="otherFeatures">ORDER BY</td>
                        <td class="FilterEQ"></td>
                        <td class="FilterRela"></td>
                        <td class="StarO">3</td>
                        <td class="StarW">0</td>
                        <td class="Map">2TM, 5PSOM, 3PROM</td>
                    </tr>
                    <tr class="text-center rq15">
                        <td class="query"><button type="button" class="btn btn-linkCust" data-toggle="modal"
                                data-target="#q15Info">q15</button></td>
                        <td class="description text-center">For all properties, triples that contain a specific word
                            in the object placeholder</td>
                        <td class="triple">3</td>
                        <td class="source">1</td>
                        <td class="optional"></td>
                        <td class="aggregation"></td>
                        <td class="otherFeatures"></td>
                        <td class="FilterEQ"><i class="fas fa-check text-success"></i></td>
                        <td class="FilterRela"></td>
                        <td class="StarO">0</td>
                        <td class="StarW">1</td>
                        <td class="Map">1TM, 15PSOM, 1PROM</td>
                    </tr>
                    <tr class="text-center rq16">
                        <td class="query"><button type="button" class="btn btn-linkCust" data-toggle="modal"
                                data-target="#q16Info">q16</button></td>
                        <td class="description text-center">For all routes, all calendar changes in a specific month
                        </td>
                        <td class="triple">8</td>
                        <td class="source">3</td>
                        <td class="optional"></td>
                        <td class="aggregation"></td>
                        <td class="otherFeatures"></td>
                        <td class="FilterEQ"></td>
                        <td class="FilterRela"><i class="fas fa-check text-success"></i></td>
                        <td class="StarO">2</td>
                        <td class="StarW">1</td>
                        <td class="Map">6TM, 6PSOM, 5PROM</td>
                    </tr>
                    <tr class="text-center rq17">
                        <td class="query"><button type="button" class="btn btn-linkCust" data-toggle="modal"
                                data-target="#q17Info">q17</button></td>
                        <td class="description text-center">Trips with their start and end time of the frequencies
                            and associated routes</td>
                        <td class="triple">9</td>
                        <td class="source">3</td>
                        <td class="optional"></td>
                        <td class="aggregation"></td>
                        <td class="otherFeatures"></td>
                        <td class="FilterEQ"></td>
                        <td class="FilterRela"></td>
                        <td class="StarO">3</td>
                        <td class="StarW">0</td>
                        <td class="Map">3TM, 7PSOM, 2PROM</td>
                    </tr>
                    <tr class="text-center rq18">
                        <td class="query"><button type="button" class="btn btn-linkCust" data-toggle="modal"
                                data-target="#q18Info">q18</button></td>
                        <td class="description text-center">All routes that have trips on Sunday</td>
                        <td class="triple">8</td>
                        <td class="source">5</td>
                        <td class="optional"></td>
                        <td class="aggregation"></td>
                        <td class="otherFeatures">UNION</td>
                        <td class="FilterEQ"></td>
                        <td class="FilterRela"></td>
                        <td class="StarO">4</td>
                        <td class="StarW">1</td>
                        <td class="Map">6TM, 6PSOM, 5PROM</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- q1 Modal -->
    <div class="modal fade" id="q1Info" tabindex="-1" role="dialog" aria-labelledby="q1Info" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modalWidth" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title col-11 mx-auto text-center" id="q1InfoLabel">Query 1</h5>
                    <button type="button" class="btn circleButton" data-dismiss="modal">X</button>
                </div>
                <div class="modal-body">
                    <img src="/img/queryImg/query1.jpg" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    <!-- q2 Modal -->
    <div class="modal fade" id="q2Info" tabindex="-1" role="dialog" aria-labelledby="q2Info" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modalWidth" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title col-11 mx-auto text-center" id="q2InfoLabel">Query 2</h5>
                    <button type="button" class="btn circleButton" data-dismiss="modal">X</button>
                </div>
                <div class="modal-body">
                    <img src="/img/queryImg/query2.jpg" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    <!-- q3 Modal -->
    <div class="modal fade" id="q3Info" tabindex="-1" role="dialog" aria-labelledby="q3Info" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modalWidth" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title col-11 mx-auto text-center" id="q3InfoLabel">Query 3</h5>
                    <button type="button" class="btn circleButton" data-dismiss="modal">X</button>
                </div>
                <div class="modal-body">
                    <img src="/img/queryImg/query3.jpg" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    <!-- q4 Modal -->
    <div class="modal fade" id="q4Info" tabindex="-1" role="dialog" aria-labelledby="q4Info" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modalWidth" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title col-11 mx-auto text-center" id="q4InfoLabel">Query 4</h5>
                    <button type="button" class="btn circleButton" data-dismiss="modal">X</button>
                </div>
                <div class="modal-body">
                    <img src="/img/queryImg/query4.jpg" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    <!-- q5 Modal -->
    <div class="modal fade" id="q5Info" tabindex="-1" role="dialog" aria-labelledby="q5Info" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modalWidth" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title col-11 mx-auto text-center" id="q5InfoLabel">Query 5</h5>
                    <button type="button" class="btn circleButton" data-dismiss="modal">X</button>
                </div>
                <div class="modal-body">
                    <img src="/img/queryImg/query5.jpg" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    <!-- q6 Modal -->
    <div class="modal fade" id="q6Info" tabindex="-1" role="dialog" aria-labelledby="q6Info" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modalWidth" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title col-11 mx-auto text-center" id="q6InfoLabel">Query 6</h5>
                    <button type="button" class="btn circleButton" data-dismiss="modal">X</button>
                </div>
                <div class="modal-body">
                    <img src="/img/queryImg/query6.jpg" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    <!-- q7 Modal -->
    <div class="modal fade" id="q7Info" tabindex="-1" role="dialog" aria-labelledby="q7Info" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modalWidth" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title col-11 mx-auto text-center" id="q7InfoLabel">Query 7</h5>
                    <button type="button" class="btn circleButton" data-dismiss="modal">X</button>
                </div>
                <div class="modal-body">
                    <img src="/img/queryImg/query7.jpg" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    <!-- q8 Modal -->
    <div class="modal fade" id="q8Info" tabindex="-1" role="dialog" aria-labelledby="q8Info" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modalWidth" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title col-11 mx-auto text-center" id="q8InfoLabel">Query 8</h5>
                    <button type="button" class="btn circleButton" data-dismiss="modal">X</button>
                </div>
                <div class="modal-body">
                    <img src="/img/queryImg/query8.jpg" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    <!-- q9 Modal -->
    <div class="modal fade" id="q9Info" tabindex="-1" role="dialog" aria-labelledby="q9Info" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modalWidth" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title col-11 mx-auto text-center" id="q9InfoLabel">Query 9</h5>
                    <button type="button" class="btn circleButton" data-dismiss="modal">X</button>
                </div>
                <div class="modal-body">
                    <img src="/img/queryImg/query9.jpg" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    <!-- q10 Modal -->
    <div class="modal fade" id="q10Info" tabindex="-1" role="dialog" aria-labelledby="q10Info" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modalWidth" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title col-11 mx-auto text-center" id="q10InfoLabel">Query 10</h5>
                    <button type="button" class="btn circleButton" data-dismiss="modal">X</button>
                </div>
                <div class="modal-body">
                    <img src="/img/queryImg/query10.jpg" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    <!-- q11 Modal -->
    <div class="modal fade" id="q11Info" tabindex="-1" role="dialog" aria-labelledby="q11Info" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modalWidth" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title col-11 mx-auto text-center" id="q10InfoLabel">Query 11</h5>
                    <button type="button" class="btn circleButton" data-dismiss="modal">X</button>
                </div>
                <div class="modal-body">
                    <img src="/img/queryImg/query11.jpg" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    <!-- q12 Modal -->
    <div class="modal fade" id="q12Info" tabindex="-1" role="dialog" aria-labelledby="q12Info" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modalWidth" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title col-11 mx-auto text-center" id="q12InfoLabel">Query 12</h5>
                    <button type="button" class="btn circleButton" data-dismiss="modal">X</button>
                </div>
                <div class="modal-body">
                    <img src="/img/queryImg/query12.jpg" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    <!-- q13 Modal -->
    <div class="modal fade" id="q13Info" tabindex="-1" role="dialog" aria-labelledby="q13Info" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modalWidth" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title col-11 mx-auto text-center" id="q13InfoLabel">Query 13</h5>
                    <button type="button" class="btn circleButton" data-dismiss="modal">X</button>
                </div>
                <div class="modal-body">
                    <img src="/img/queryImg/query13.jpg" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    <!-- q14 Modal -->
    <div class="modal fade" id="q14Info" tabindex="-1" role="dialog" aria-labelledby="q14Info" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modalWidth" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title col-11 mx-auto text-center" id="q14InfoLabel">Query 14</h5>
                    <button type="button" class="btn circleButton" data-dismiss="modal">X</button>
                </div>
                <div class="modal-body">
                    <img src="/img/queryImg/query14.jpg" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    <!-- q15 Modal -->
    <div class="modal fade" id="q15Info" tabindex="-1" role="dialog" aria-labelledby="q15Info" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modalWidth" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title col-11 mx-auto text-center" id="q15InfoLabel">Query 15</h5>
                    <button type="button" class="btn circleButton" data-dismiss="modal">X</button>
                </div>
                <div class="modal-body">
                    <img src="/img/queryImg/query15.jpg" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    <!-- q16 Modal -->
    <div class="modal fade" id="q16Info" tabindex="-1" role="dialog" aria-labelledby="q16Info" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modalWidth" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title col-11 mx-auto text-center" id="q16InfoLabel">Query 16</h5>
                    <button type="button" class="btn circleButton" data-dismiss="modal">X</button>
                </div>
                <div class="modal-body">
                    <img src="/img/queryImg/query16.jpg" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    <!-- q17 Modal -->
    <div class="modal fade" id="q17Info" tabindex="-1" role="dialog" aria-labelledby="q17Info" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modalWidth" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title col-11 mx-auto text-center" id="q17InfoLabel">Query 17</h5>
                    <button type="button" class="btn circleButton" data-dismiss="modal">X</button>
                </div>
                <div class="modal-body">
                    <img src="/img/queryImg/query17.jpg" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    <!-- q18 Modal -->
    <div class="modal fade" id="q18Info" tabindex="-1" role="dialog" aria-labelledby="q18Info" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modalWidth" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title col-11 mx-auto text-center" id="q18InfoLabel">Query 18</h5>
                    <button type="button" class="btn circleButton" data-dismiss="modal">X</button>
                </div>
                <div class="modal-body">
                    <img src="/img/queryImg/query18.jpg" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    <x-footer />
    <!-- Boton ToolTip <button type="button" class="btn btn-lg btn-danger" data-toggle="popover" title="Popover title"
        data-content="And here's some amazing content. It's very engaging. Right?">Click to toggle popover</button> -->
</body>

</html>