<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Tooplate">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;display=swap" rel="stylesheet">

    <title>Evento</title>


    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" type="text/css" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/tooplate-artxibition.css">
    <!--

Tooplate 2125 ArtXibition

https://www.tooplate.com/view/2125-artxibition

-->
</head>

<body>



    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">Ev<em>ento</em></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="index.html">Home</a></li>

                            @if (Route::has('login'))
                            @auth
                            @else

                            <li><a href="{{ route('login') }}">Log in</a></li>
                            @if (Route::has('register'))
                            <li><a href="{{ route('register') }}">Sign Up</a></li>

                            @endif
                            @endauth
                            @endif
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                        <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </x-dropdown-link>
                                </form>
                            </li>
                        </ul>
                        <a class="menu-trigger">
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** About Us Page ***** -->
    <div class="page-heading-about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Lorem ipsum dolor sit amet.</h2>
                    <span>Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>
                </div>
            </div>
        </div>
    </div>

    <div class="about-item">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="left-image">
                        <img src="assets/images/R.jpeg" alt="party time">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="right-content">
                        <div class="about-map-image">
                            <img src="assets/images/about-map-image.jpg" alt="party location">
                        </div>
                        <div class="down-content">
                            <h4>Lorem ipsum dolor sit.</h4>
                            <ul>
                                <li>Lorem ipsum dolor sit.</li>
                            </ul>
                            <span><br></span>

                            <span><i class="fa fa-ticket"></i> Lorem ipsum dolor sit amet.</span>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="also-like">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Available Events ...</h2>
                </div>
                @foreach($events as $ev)
                <div class="col-lg-4">
                    <div class="like-item">
                        <div class="thumb">
                            <a href="{{route('event.show' , $ev)}}"><img src="assets/images/like-01.jpg" alt=""></a>
                            <div class="icons">
                                <ul>
                                    <li><a href="{{route('event.show' , $ev)}}"><i class="fa fa-arrow-right"></i></a></li>
                                    <li><a href="ticket-details.html"><i class="fa fa-ticket"></i></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="down-content">
                            <span>{{$ev->date}}</span>
                            <a href="event-details.html">
                                <h4>{{$ev->title}}</h4>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>


</body>

</html>