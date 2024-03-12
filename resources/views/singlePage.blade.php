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
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!--

Tooplate 2125 ArtXibition

https://www.tooplate.com/view/2125-artxibition

-->
</head>

<body>



    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav flex justify-between">

                        <!-- ***** Logo Start ***** -->
                        <a href="#" class="logo">Ev<em>ento</em></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->



                        <!-- Settings Dropdown -->
                        <div class="hidden sm:flex sm:items-center sm:ms-6">
                            <a href="/home" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">Home</a>

                            <x-dropdown align="right" width="48">
                                <x-slot name="trigger">
                                    <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                        <div>{{ Auth::user()->name }}</div>

                                        <div class="ms-1">
                                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                    </button>
                                </x-slot>

                                <x-slot name="content">


                                    <x-dropdown-link :href="route('profile.edit')">
                                        {{ __('Profile') }}
                                    </x-dropdown-link>

                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </x-dropdown-link>
                                    </form>
                                </x-slot>
                            </x-dropdown>

                        </div>

                        <!-- Hamburger -->
                        <div class="-me-2 flex items-center sm:hidden">
                            <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                    <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                    <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                </div>
            </div>
            <!-- ***** Menu End ***** -->
            </nav>
        </div>
        </div>
        </div>
    </header>
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
        @if(session('success'))
        <p class="bg-green py-2 w-full text-black rounded-md mr-10">{{session('success')}}</p>
        @endif
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
                                    <div class="place"><span> Event Description : <b>{{$event->description}}</b></span></div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="place"><span>Event Organizer : <b>{{$event->users->name}}</b></span></div>
                                    <form action="{{ route('reservation.store', $event) }}" method="post">
                                        @csrf
                                        @method('POST')
                                        <input type="hidden" name="clientID" value="{{ Auth::user()->clients->id }}">
                                        <input type="hidden" name="eventID" value="{{ $event->id }}">
                                        <button class="bg-gray-500 active:bg-purple-600 uppercase text-black font-bold hover:shadow-md shadow text-xs px-4 py-2 rounded outline-none focus:outline-none sm:mr-2 mb-1 ease-linear transition-all duration-150">
                                            Reserve
                                        </button>
                                    </form>
                                </div>

                            </div>
                        </li>
                        <li> <button class="bg-gray-500 active:bg-purple-600 uppercase text-black font-bold hover:shadow-md shadow text-xs px-4 py-2 rounded outline-none focus:outline-none sm:mr-2 mb-0 ease-linear transition-all duration-150 ">
                                <a href="/ticket">view my tickets </a> </button></li>
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













<div id="results"></div>