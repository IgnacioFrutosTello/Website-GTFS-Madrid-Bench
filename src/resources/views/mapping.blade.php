<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Mapping</title>

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
        <h1 class="text-center"> M<span class="headColor">a</span>pping</h1>

        <!-- Resume -->
        <div class="row">
            <h2>Resume</h2>
            <div class="col-12">
                <p class="justified indented">Mappings play one of the most important roles in the benchmark since they
                    are the main element used for the query translation process. In the state of the art there are
                    multiple engines and tools that use different mapping languages. We select a set of the most
                    relevant declarative mapping languages in the state of the art and we generate the corresponding
                    mapping rules. In more detail, the GTFS-Madrid-Bench provides: </p>
            </div>

            <!-- Highligths Concepts -->
            <div>
                <div class="row mt-2">
                    <div class="col-4 shadowText mx-auto pt-2 px-3">
                        <p class="m-auto text-center">One R2RML mapping document for accessing SQL datasets.</p>
                    </div>
                    <div class="col-4 shadowText mx-auto pt-2 px-3">
                        <p class="m-auto text-center">One xR2RML mapping document for accessing MongoDB datasets.</p>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-4 shadowText mx-auto pt-2 px-3">
                        <p class="m-auto text-center">One CSVW metadata file to provide annotations for the CSV
                            datasets.</p>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-4 shadowText m-auto pt-2 px-3">
                        <p class="m-auto text-center">Seven RML mapping documents17 for accessing CSV, JSON, XML, SQL,
                            MongoDB.</p>
                    </div>
                    <div class="col-4 shadowText mx-auto pt-2 px-3">
                        <p class="m-auto text-center">An RML-Generator for obtaining the corresponding mappings of
                            datasets with sources in several formats.</p>
                    </div>
                </div>
            </div>

            <!-- More Info -->
            <div class="row mt-4">
                <div class="col-12">
                    <p class="justified indented">Conceptually, all the mappings represent the same relations among the
                        concepts of the ontology and the concepts of the GTFS model, but each one has been developed
                        according to a specification that handles the characteristics of each data format. The mappings
                        are composed by a set of rules representing the relation of one element in the ontology with the
                        corresponding schema element from a source. These mapping rules are very relevant since
                        they contain many parameters that impact on the performance of virtual knowledge graph access
                        tools. </p>

                    <p class="justified indented"> More in detail, each source of the GTFS feed has one associated
                        TriplesMap, with a rule to
                        associate the generated entities to the class defined in the ontology, and a set of rules for
                        the object and data properties. Additionally, there is a (virtual) entity, Service, in the data
                        model, with no corresponding source, which implies the definition of a set of mapping rules to
                        generate the instances of the corresponding class (gtfs:Service). Following the GTFS
                        specification, the identifier of Service can be found either in calendar or calendar_dates
                        sources. This means that to be aligned with standard declarative mapping specifications (e.g.
                        RML and R2RML only allow one source per TriplesMap), the mapping document needs to define two
                        TriplesMap, one for calendar (service1) and another for calendar_dates (service2). This also
                        implies that the trips TriplesMap has one predicate (gtfs:service) with two associated
                        refObjectMaps, where the parentTriplesMap are service1 and service2; this allows generating all
                        gtfs:Service defined in the original data source. Because the instances of
                        gtfs:WheelchairBoardingStatus class are only objects in gtfs:Trips and gtfs:Stops triples, they
                        are generated using the template property in trips and stops TriplesMap. In summary, here are
                        the instances generated by the mapping
                        rule. </p>
                </div>
            </div>
        </div>

        <!-- Table -->
        <div class="mb-4">
            <div class="row">
                <h2>Mapping features</h2>
                <div class="col-12">
                    <p class="justified indented">Features of mappings are relevant because they may impact the
                        performance of the engines. Previous work evaluates different mapping variables that
                        impact in the construction of a knowledge graph. Similarly, we consider that the following
                        mapping variables influence overall query execution time and, specifically, query translation
                        and query rewriting times. Regarding structure, we have considered the variables #Classes,
                        #PredicateObjectMaps, #Predicates, #Objects, and #RefObjectMap that are presented in the next
                        table.
                        Another variable is relation type; the mappings of the Madrid-GTFS-Bench include 1–1, 1–N, N–1
                        and N–M relation types. In general, mappings for sources that represent N–M relationships (e.g.
                        stop_times) are more complex and thus time consuming for query execution. Additionally, the
                        variable rr:termtype of the rr:objectMap may also have an effect because the cost of generating
                        a constant, a reference or a template is not the same. </p>
                </div>
            </div>
            <table class="table table-responsive">
                <thead class="text">
                    <tr>
                        <th scope="col">TripleMap</th>
                        <th scope="col">Source</th>
                        <th scope="col">Classes</th>
                        <th scope="col">#PredicateObjectMap</th>
                        <th scope="col">#Predicates</th>
                        <th scope="col">#Objects</th>
                        <th scope="col">#RefObjectMap</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><button type="button" class="btn btn-linkCust" data-toggle="modal"
                                data-target="#shapes-TripleMaps">shapes</button></td>
                        <td>shapes</td>
                        <td>gtfs:Shape</td>
                        <td>4</td>
                        <td>4</td>
                        <td>4</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td><button type="button" class="btn btn-linkCust" data-toggle="modal"
                                data-target="#trips-TripleMaps">trips</button></td>
                        <td>trips</td>
                        <td>gtfs:Trip</td>
                        <td>8</td>
                        <td>8</td>
                        <td>5</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td><button type="button" class="btn btn-linkCust" data-toggle="modal"
                                data-target="#calendar_rules-TripleMaps">calendar_rules</button></td>
                        <td>calendar</td>
                        <td>gtfs:CalendarRule</td>
                        <td>9</td>
                        <td>9</td>
                        <td>9</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td><button type="button" class="btn btn-linkCust" data-toggle="modal"
                                data-target="#calendar_date_rules-TripleMaps">calendar_date_rules</button></td>
                        <td>calendar_dates</td>
                        <td>gtfs:CalendarDateRule</td>
                        <td>9</td>
                        <td>9</td>
                        <td>9</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td><button type="button" class="btn btn-linkCust" data-toggle="modal"
                                data-target="#stops-TripleMaps">stops</button></td>
                        <td>stops</td>
                        <td>gtfs:Stop</td>
                        <td>12</td>
                        <td>12</td>
                        <td>11</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td><button type="button" class="btn btn-linkCust" data-toggle="modal"
                                data-target="#stoptimes-TripleMaps">stoptimes</button></td>
                        <td>stop_times</td>
                        <td>gtfs:Stoptime</td>
                        <td>9</td>
                        <td>9</td>
                        <td>7</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td><button type="button" class="btn btn-linkCust" data-toggle="modal"
                                data-target="#route-TripleMaps">routes</button></td>
                        <td>routes</td>
                        <td>gtfs:Route</td>
                        <td>8</td>
                        <td>8</td>
                        <td>7</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td><button type="button" class="btn btn-linkCust" data-toggle="modal"
                                data-target="#agency-TripleMaps">agency</button></td>
                        <td>agency</td>
                        <td>gtfs:Agency</td>
                        <td>6</td>
                        <td>6</td>
                        <td>6</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td><button type="button" class="btn btn-linkCust" data-toggle="modal"
                                data-target="#frequencies-TripleMaps">frequencies</button></td>
                        <td>frequencies</td>
                        <td>gtfs:Frequency</td>
                        <td>5</td>
                        <td>5</td>
                        <td>4</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td><button type="button" class="btn btn-linkCust" data-toggle="modal"
                                data-target="#feed-TripleMaps">feed</button></td>
                        <td>feed_info</td>
                        <td>gtfs:Feed</td>
                        <td>6</td>
                        <td>6</td>
                        <td>6</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td><button type="button" class="btn btn-linkCust" data-toggle="modal"
                                data-target="#service1-TripleMaps">service1</button></td>
                        <td>calendar</td>
                        <td>gtfs:Service</td>
                        <td>1</td>
                        <td>1</td>
                        <td>0</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td><button type="button" class="btn btn-linkCust" data-toggle="modal"
                                data-target="#service2-TripleMaps">service2</button></td>
                        <td>calendar_dates</td>
                        <td>gtfs:Service</td>
                        <td>1</td>
                        <td>1</td>
                        <td>0</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td><b>Total</b></td>
                        <td>10</td>
                        <td>11</td>
                        <td>71</td>
                        <td>71</td>
                        <td>60</td>
                        <td>11</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Shapes Modal -->
    <div class="modal fade" id="shapes-TripleMaps" tabindex="-1" role="dialog" aria-labelledby="shapes-TripleMaps"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modalWidth" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title col-11 mx-auto text-center" id="shapes-TripleMapsLabel">Shapes TripleMap
                    </h5>
                    <button type="button" class="btn circleButton" data-dismiss="modal">X</button>
                </div>
                <div class="modal-body">
                    <img src="/img/mapImg/shapesTripleMaps.jpg" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    <!-- Trips Modal -->
    <div class="modal fade" id="trips-TripleMaps" tabindex="-1" role="dialog" aria-labelledby="trips-TripleMaps"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modalWidth" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title col-11 mx-auto text-center" id="trips-TripleMapsLabel">Trips TripleMap
                    </h5>
                    <button type="button" class="btn circleButton" data-dismiss="modal">X</button>
                </div>
                <div class="modal-body">
                    <img src="/img/mapImg/tripsTripleMaps.jpg" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    <!-- Calendar_Rules Modal -->
    <div class="modal fade" id="calendar_rules-TripleMaps" tabindex="-1" role="dialog"
        aria-labelledby="calendar_rules-TripleMaps" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modalWidth" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title col-11 mx-auto text-center" id="calendar_rules-TripleMapsLabel">
                        Calendar_Rules TripleMap
                    </h5>
                    <button type="button" class="btn circleButton" data-dismiss="modal">X</button>
                </div>
                <div class="modal-body">
                    <img src="/img/mapImg/calendar_rulesTripleMaps.jpg" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    <!-- Calendar_Date_Rules Modal -->
    <div class="modal fade" id="calendar_date_rules-TripleMaps" tabindex="-1" role="dialog"
        aria-labelledby="calendar_date_rules-TripleMaps" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modalWidth" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title col-11 mx-auto text-center" id="calendar_date_rules-TripleMapsLabel">
                        Calendar_Date_Rules TripleMap
                    </h5>
                    <button type="button" class="btn circleButton" data-dismiss="modal">X</button>
                </div>
                <div class="modal-body">
                    <img src="/img/mapImg/calendar_date_rulesTripleMaps.jpg" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    <!-- Stops Modal -->
    <div class="modal fade" id="stops-TripleMaps" tabindex="-1" role="dialog" aria-labelledby="stops-TripleMaps"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modalWidth" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title col-11 mx-auto text-center" id="stops-TripleMapsLabel">Stops TripleMap
                    </h5>
                    <button type="button" class="btn circleButton" data-dismiss="modal">X</button>
                </div>
                <div class="modal-body">
                    <img src="/img/mapImg/stopsTripleMaps.jpg" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    <!-- Stoptimes Modal -->
    <div class="modal fade" id="stoptimes-TripleMaps" tabindex="-1" role="dialog" aria-labelledby="stoptimes-TripleMaps"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modalWidth" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title col-11 mx-auto text-center" id="stoptimes-TripleMapsLabel">Stoptimes
                        TripleMap
                    </h5>
                    <button type="button" class="btn circleButton" data-dismiss="modal">X</button>
                </div>
                <div class="modal-body">
                    <img src="/img/mapImg/stoptimesTripleMaps.jpg" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    <!-- Routes Modal -->
    <div class="modal fade" id="route-TripleMaps" tabindex="-1" role="dialog" aria-labelledby="route-TripleMaps"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modalWidth" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title col-11 mx-auto text-center" id="route-TripleMapsLabel">Route TripleMap</h5>
                    <button type="button" class="btn circleButton" data-dismiss="modal">X</button>
                </div>
                <div class="modal-body">
                    <img src="/img/mapImg/routesTripleMaps.jpg" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    <!-- Agency Modal -->
    <div class="modal fade" id="agency-TripleMaps" tabindex="-1" role="dialog" aria-labelledby="agency-TripleMaps"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modalWidth" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title col-11 mx-auto text-center" id="agency-TripleMapsLabel">Agency TripleMap</h5>
                    <button type="button" class="btn circleButton" data-dismiss="modal">X</button>
                </div>
                <div class="modal-body">
                    <img src="/img/mapImg/agencyTripleMaps.jpg" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    <!-- Frequencies Modal -->
    <div class="modal fade" id="frequencies-TripleMaps" tabindex="-1" role="dialog"
        aria-labelledby="frequencies-TripleMaps" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modalWidth" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title col-11 mx-auto text-center" id="frequencies-TripleMapsLabel">Frequencies
                        TripleMap</h5>
                    <button type="button" class="btn circleButton" data-dismiss="modal">X</button>
                </div>
                <div class="modal-body">
                    <img src="/img/mapImg/frequenciesTripleMaps.jpg" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    <!-- Feed Modal -->
    <div class="modal fade" id="feed-TripleMaps" tabindex="-1" role="dialog" aria-labelledby="feed-TripleMaps"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modalWidth" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title col-11 mx-auto text-center" id="feed-TripleMapsLabel">Feed TripleMap</h5>
                    <button type="button" class="btn circleButton" data-dismiss="modal">X</button>
                </div>
                <div class="modal-body">
                    <img src="/img/mapImg/feedTripleMaps.jpg" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    <!-- Service1 Modal -->
    <div class="modal fade" id="service1-TripleMaps" tabindex="-1" role="dialog" aria-labelledby="service1-TripleMaps"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modalWidth" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title col-11 mx-auto text-center" id="service1-TripleMapsLabel">Service1
                        TripleMap
                    </h5>
                    <button type="button" class="btn circleButton" data-dismiss="modal">X</button>
                </div>
                <div class="modal-body">
                    <img src="/img/mapImg/service1TripleMaps.jpg" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    <!-- Service2 Modal -->
    <div class="modal fade" id="service2-TripleMaps" tabindex="-1" role="dialog" aria-labelledby="service2-TripleMaps"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modalWidth" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title col-11 mx-auto text-center" id="service2-TripleMapsLabel">Service2
                        TripleMap
                    </h5>
                    <button type="button" class="btn circleButton" data-dismiss="modal">X</button>
                </div>
                <div class="modal-body">
                    <img src="/img/mapImg/service2TripleMaps.jpg" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>


    <x-footer />
</body>

</html>
