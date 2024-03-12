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
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">

    <link rel="stylesheet" href="assets/css/tooplate-artxibition.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])

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
                    <nav class="main-nav flex justify-between">

                        <!-- ***** Logo Start ***** -->
                        <a href="#" class="logo">Ev<em>ento</em></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->



                        <!-- Settings Dropdown -->
                        <div class="hidden sm:flex sm:items-center sm:ms-6">
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
                <div class="col-lg-12 mt-5 mb-5">
                    <div class="max-w-lg mx-auto flex">
                        <!-- Partie Catégorie -->
                        <div class="ml-5">
                            <form action="{{ route('event.filter') }}" method="POST">
                                @csrf
                                <input type="hidden" name="IdCategorie" value="all">
                                <button type="submit" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">All</button>
                            </form>

                            @foreach ($categories as $categ)
                            <form action="{{ route('event.filter') }}" method="POST">
                                @csrf
                                <input type="hidden" name="IdCategorie" value="{{ $categ->id }}">
                                <button type="submit" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">{{ $categ->categorieName }}</button>
                            </form>
                            @endforeach
                        </div>

                        <div>
                            @if($events->count() > 0)
                            <ul>
                                @foreach ($events as $event)
                                <li>{{ $event->eventName }}</li>
                                @endforeach
                            </ul>
                            @else
                            <p>Aucun événement trouvé.</p>
                            @endif
                        </div>

                        <!-- Partie Recherche -->
                        <form action="{{ route('event.search') }}" method="GET">
                            <div class="relative w-full ml-4">
                                <label for="search-dropdown" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search by Title</label>
                                <input type="search" name="search" id="search-dropdown" class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-e-lg border-s-gray-50 border-s-2 border border-gray-300 focus:ring-red-500 focus:border-red-500 dark:bg-gray-700 dark:border-s-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-red-500" placeholder="Search Event By title..." required />
                                <button type="submit" class="absolute top-0 end-0 p-2.5 text-sm font-medium h-full text-white bg-red-500 rounded-e-lg border border-red-700 hover:bg-red-500 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                    </svg>
                                    <span class="sr-only">Search</span>
                                </button>
                            </div>
                        </form>

                    </div>
                </div>




                @foreach($events as $ev)
                <div class="col-lg-4">
                    <div class="like-item">
                        <div class="thumb">
                            <a href="{{route('event.show' , $ev)}}"><img src="assets/images/like-01.jpg" alt=""></a>
                            <div class="icons">
                                <ul>
                                    <li><a href="{{route('event.show' , $ev)}}"><i class="fa fa-arrow-right"></i></a></li>
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
            <div class="paginate">
                {{ $events->links() }}
            </div>
        </div>
    </div>
    <script src="https://flowbite.com/application-ui/demo/app.bundle.js"></script>
    <script src="https://flowbite.com/application-ui/demo/app.bundle.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>
<link rel="stylesheet" href="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.min.css" />
<script src="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.bundle.js"></script>