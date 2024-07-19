@extends('Main')

@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

    <link rel="stylesheet" href="{{ asset('css/leaflet.css') }}">

    <style>
        .float-right {
            display: flex;
            justify-content: flex-end;
        }

        .mypic {
            width: 20%;
            height: 20%;
            border-radius: 20px;
        }



        .marginoverall {
            
            margin-left: 80px;
            margin-right: 20px;
        }



        .marginprof {
            margin-bottom: 20px;
        }

        #map-container {
            display: flex;
            justify-content: center;
            align-items: center;  
            height: 100vh;
            /* Adjust as needed */
        }

        #map {
            width: 1800px;
            height: 500px;
            align-items: center;
        }

        #carouselExampleControls {
            max-height: 600px;
            /* Set the maximum width of the carousel */
            margin: 0 auto;
            /* Center align the carousel horizontally */
        }
        

        .carousel-item img {
            max-height: 670px;
            /* Adjust as needed */
        }
    </style>

  <div class="body">

    <div class="marginoverall">


        <div id="map-container">
            <div id="map"></div>
        </div>

        <script src="{{ asset('js/leaflet.js') }}"></script>
        <script src="{{ asset('js/maintesting.js') }}"></script>


        <div class="marginprof">

            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('myself/five-31.jpg') }}" class="d-block w-100 h-100 object-fit-cover"
                            alt="Slide 1" draggable="false">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Testing</h5>
                            <p>This is the description</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('myself/five-97.jpg') }}" class="d-block w-100 h-100 object-fit-cover"
                            alt="Slide 2" draggable="false">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('myself/five-104.jpg') }}" class="d-block w-100 h-100 object-fit-cover"
                            alt="Slide 3" draggable="false">
                    </div>
                </div>


                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>

            </div>

            {{-- PROFILE --}}
            <div class="marginprof">
                <strong>MY PROFILE</strong>
                <hr>

                <div class="card" style="width:400px">
                    <img class="card-img-top" src="img_avatar1.png" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">John Doe</h4>
                        <p class="card-text">Some example text.</p>
                        <a href="#" class="btn btn-primary">See Profile</a>
                    </div>
                </div>

                <div class="float-right">
                    <img class="mypic" src="{{ asset('myself/chris1.jpg') }}" alt="Your Logo">
                </div>
            </div>
        </div>
    </div>
  </div>
@endsection
