<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gtfs Model</title>

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
        <h1 class="text-center"> G<span class="headColor">T</span>FS M<span class="headColor">O</span>DEL</h1>
        <div class="row">
            <h2>Resume</h2>
            <div class="col-12">
                <p class="justified indented">The General Transit Feed Specification (<strong>GTFS</strong>) is a data
                    specification that allows public transit agencies to publish their transit data in a format that can
                    be consumed by a wide variety of software applications. Today, the GTFS data format is used by
                    thousands of public transport providers. GTFS is split into a static component that contains
                    schedule, fare, and geographic transit information and a real-time component that contains arrival
                    predictions, vehicle positions and service advisories.</p>
                <p class="justified indented">As a result of developer innovation, GTFS data is now being used by a
                    variety of third-party software applications for many different purposes, including trip planning,
                    timetable creation, mobile data, data visualization, accessibility, analysis tools for planning, and
                    real-time information systems. In 2010, the GTFS format name was changed to the General Transit Feed
                    Specification to accurately represent its use in many different applications outside of Google
                    products.</p>
            </div>
        </div>
        <div class="row">
            <h2>Specifications</h2>
            <div class="col-xxl-7 ml-auto mr-auto">
                <p class="justified indented">Among public transportation data formats, GTFS stands out because it was
                    conceived to meet specific, practical needs in communicating service information to passengers, not
                    as an exhaustive vocabulary for managing operational details. It is designed to be relatively simple
                    to create and read for both people and machines. Even organizations that work with highly detailed
                    data internally using standards like NeTEx find GTFS useful as a way to publish data for wider
                    consumption in consumer applications.</p>
                <p class="justified indented">A GTFS feed is a collection of at least six, and up to 13 CSV files (with
                    extension .txt) contained within a .zip file. Preferred character encoding is UTF-8. Together, the
                    related CSV tables describe a transit system's scheduled operations as visible to riders.</p>
                <p class="justified indented">The specification is designed to be sufficient to provide trip planning
                    functionality, but is also useful for other applications such as analysis of service levels and some
                    general performance measures. In contrast to European transit industry exchange standards such as
                    Transmodel or VDV-45X, GTFS only includes scheduled operations that are meant to be distributed to
                    riders. It is also limited to scheduled information and does not include real-time information.</p>
                <p class="justified indented">However, real-time information can be related to GTFS schedules according
                    to the related GTFS-realtime specification. Following are descriptions of the tables required for a
                    valid GTFS data feed. Each table is literally a text CSV file whose filename is the name of the
                    table, suffixed by '.txt'. So for the 'agency' table below, a CSV file called 'agency.txt' would be
                    included in a valid GTFS feed.</p>
            </div>
            <div class="col-xxl-5 ml-auto mr-auto text-center">
                <img src="/img/gtfsModel2.png">
            </div>
        </div>
        <h2 class="mt-4"> Dataset files</h1>
            <div class="mb-4">
                <table class="table table-responsive">
                    <thead class="text">
                        <tr>
                            <th scope="col">Filename</th>
                            <th scope="col">Required</th>
                            <th scope="col">Defines</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="modelItem"> 
                                <a class="noSubLink" href="https://developers.google.com/transit/gtfs/reference#agencytxt"
                                    target="_blank">agency.txt</a></td>
                            <td>Required</td>
                            <td>Transit agencies with service represented in this dataset.</td>
                        </tr>
                        <tr>
                            <td class="modelItem"><a class="noSubLink" href="https://developers.google.com/transit/gtfs/reference#stopstxt"
                                target="_blank">stops.txt</a></td>
                            <td>Required</td>
                            <td>Stops where vehicles pick up or drop off riders. Also defines stations and station
                                entrances.</td>
                        </tr>
                        <tr>
                            <td class="modelItem"><a class="noSubLink" href="https://developers.google.com/transit/gtfs/reference#routestxt"
                                target="_blank">routes.txt</a></td>
                            <td>Required</td>
                            <td>Transit routes. A route is a group of trips that are displayed to riders as a single
                                service.</td>
                        </tr>
                        <tr>
                            <td class="modelItem"><a class="noSubLink" href="https://developers.google.com/transit/gtfs/reference#tripstxt"
                                target="_blank">trips.txt</a></td>
                            <td>Required</td>
                            <td>Trips for each route. A trip is a sequence of two or more stops that occur during a
                                specific time period.</td>
                        </tr>
                        <tr>
                            <td class="modelItem"><a class="noSubLink" href="https://developers.google.com/transit/gtfs/reference#stop_timestxt"
                                target="_blank">stop_times.txt</a></td>
                            <td>Required</td>
                            <td>Times that a vehicle arrives at and departs from stops for each trip.</td>
                        </tr>
                        <tr>
                            <td class="modelItem"><a class="noSubLink" href="https://developers.google.com/transit/gtfs/reference#calendartxt"
                                target="_blank">calendar.txt</a></td>
                            <td>Conditionally required</td>
                            <td>Service dates specified using a weekly schedule with start and end dates. This file is
                                required unless all dates of service are defined in calendar_dates.txt.</td>
                        </tr>
                        <tr>
                            <td class="modelItem"><a class="noSubLink" href="https://developers.google.com/transit/gtfs/reference#calendar_datestxt"
                                target="_blank">calendar_dates.txt</a></td>
                            <td>Conditionally required</td>
                            <td>Exceptions for the services defined in the calendar.txt. If calendar.txt is omitted,
                                then calendar_dates.txt is required and must contain all dates of service.</td>
                        </tr>
                        <tr>
                            <td class="modelItem"><a class="noSubLink" href="https://developers.google.com/transit/gtfs/reference#fare_attributestxt"
                                target="_blank">fare_attributes.txt</a></td>
                            <td>Optional</td>
                            <td>Fare information for a transit agency's routes.</td>
                        </tr>
                        <tr>
                            <td class="modelItem"><a class="noSubLink" href="https://developers.google.com/transit/gtfs/reference#fare_rulestxt"
                                target="_blank">fare_rules.txt</a></td>
                            <td>Optional</td>
                            <td>Rules to apply fares for itineraries.</td>
                        </tr>
                        <tr>
                            <td class="modelItem"><a class="noSubLink" href="https://developers.google.com/transit/gtfs/reference#shapestxt"
                                target="_blank">shapes.txt</a></td>
                            <td>Optional</td>
                            <td>Rules for mapping vehicle travel paths, sometimes referred to as route alignments.</td>
                        </tr>
                        <tr>
                            <td class="modelItem"><a class="noSubLink" href="https://developers.google.com/transit/gtfs/reference#frequenciestxt"
                                target="_blank">frequencies.txt</a></td>
                            <td>Optional</td>
                            <td>Headway (time between trips) for headway-based service or a compressed representation of
                                fixed-schedule service.</td>
                        </tr>
                        <tr>
                            <td class="modelItem"><a class="noSubLink" href="https://developers.google.com/transit/gtfs/reference#transferstxt"
                                target="_blank">transfers.txt</a></td>
                            <td>Optional</td>
                            <td>Rules for making connections at transfer points between routes.</td>
                        </tr>
                        <tr>
                            <td class="modelItem"><a class="noSubLink" href="https://developers.google.com/transit/gtfs/reference#pathwaystxt"
                                target="_blank">pathways.txt</a></td>
                            <td>Optional</td>
                            <td>Pathways linking together locations within stations.</td>
                        </tr>
                        <tr>
                            <td class="modelItem"><a class="noSubLink" href="https://developers.google.com/transit/gtfs/reference#levelstxt"
                                target="_blank">levels.txt</a></td>
                            <td>Optional</td>
                            <td>Levels within stations.</td>
                        </tr>
                        <tr>
                            <td class="modelItem"><a class="noSubLink" href="https://developers.google.com/transit/gtfs/reference#feed_infotxt"
                                target="_blank">feed_info.txt</a></td>
                            <td>Conditionally required</td>
                            <td>Dataset metadata, including publisher, version, and expiration information.</td>
                        </tr>
                        <tr>
                            <td class="modelItem"><a class="noSubLink" href="https://developers.google.com/transit/gtfs/reference#translationstxt"
                                target="_blank">translations.txt</a></td>
                            <td>Optional</td>
                            <td>Translated information of a transit agency.</td>
                        </tr>
                        <tr>
                            <td class="modelItem"><a class="noSubLink" href="https://developers.google.com/transit/gtfs/reference#attributionstxt"
                                target="_blank">attributions.txt</a></td>
                            <td>Optional</td>
                            <td>Specifies the attributions that are applied to the dataset.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
    </div>
    <x-footer />
</body>

</html>
