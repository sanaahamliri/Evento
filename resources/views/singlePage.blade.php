<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Tooplate">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title>Evento - Event Detail Page</title>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min') }}">

    <link rel="stylesheet" href="{{ asset ('assets/css/font-awesome.css')}}">

    <link rel="stylesheet" href="{{ asset ('assets/css/owl-carousel.css')}}">

    <link rel="stylesheet" href="{{ asset ('assets/css/tooplate-artxibition.css')}}">

    <!--

Tooplate 2125 ArtXibition

https://www.tooplate.com/view/2125-artxibition

-->
</head>

<body>





    <!-- ***** Pre HEader ***** -->


    <!-- ***** Header Area Start ***** -->

    <!-- ***** Header Area End ***** -->

    <!-- ***** About Us Page ***** -->
    <div class="page-heading-rent-venue">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Event Details</h2>
                    <span>Check out our latest Shows & Events and be part of us.</span>
                </div>
            </div>
        </div>
    </div>

    <div class="shows-events-schedule">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul>
                        <li>
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="title">
                                        <h4>{{$event->title}}</h4>
                                        <span>{{$event->place_number}} Tickets Available</span>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="time"><span><i class="fa fa-clock-o"></i> {{$event->date}}</span></div>
                                    <div class="place"><span><i class="fa fa-map-marker"></i>{{$event->place}}</span></div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="place"><span> Event Category : <b>{{$event->categories->categorieName}}</b></span></div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="place"><span>Event Organisator : <b>{{$event->users->name}}</b></span></div>
                                    <div class="main-dark-button">
                                        <a href="ticket-details.html">Purchase Tickets</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>



    <!-- *** Subscribe *** -->


    <!-- *** Footer *** -->




    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script>
    <script src="assets/js/mixitup.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/owl-carousel.js"></script>

    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

</body>

</html>