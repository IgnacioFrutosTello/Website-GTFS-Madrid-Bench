<div class="container-fluid">
    <div class="row">
        <nav class="navbar navbar-expand-md navbar-light bg-light">
            <div class="col-md-1">
            </div>
            <!-- GTFS Logo -->
            <div class="col-md-2">
                <a class="navbar-brand " href="#">
                    <span class="headBlueColor">G<span class="headColor">T</span>FS-Madrid-Bench</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarLinks"
                    aria-controls="navbarLinks" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <!-- Navegation Menu -->
            <div class="col-md-7">
                <div class="collapse navbar-collapse" id="navbarLinks">
                    <ul class="navbar-nav ms-auto tex-center">
                        <li class="nav-item">
                            <a id="home" class="nav-link active" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a id="keywords" class="nav-link" href="/keywords">Keywords</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle drpMnu" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Features
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a id="gtfs" class="dropdown-item drpItm" href="/gtfsmodel">GTFS Model</a>
                                <a id="dsatasets" class="dropdown-item drpItm" href="/datasets">Datasets</a>
                                <a id="mapping" class="dropdown-item drpItm" href="/mapping">Mapping</a>
                                <a id="query" class="dropdown-item drpItm" href="/querys">Queries</a>
                                <a id="metrics" class="dropdown-item drpItm" href="/metrics">Metrics</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a  class="nav-link" href="/bench">Results</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-0"></div>
        </nav>
        
    </div>
</div>

<link rel="stylesheet" href="{{ asset('/css/navbar.css') }}">
