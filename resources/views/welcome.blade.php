<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>UAS</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->


    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
    @vite('resources/css/app.css')
</head>

<body>

    <header class="bg-cover bg-center bg-fixed bg-no-repeat w-full h-screen"
        style="background-image: url(assets/bg-nav.svg)">
        <section class="container relative px-5 xl:px-0 mx-auto w-full">

            <!-- SEARCH MOBILE START -->
            <div id="mySearch"
                class=" bg-primary w-full h-20 z-50 flex justify-center align-center items-center fixed top-0 left-0  hidden bg-cover">
                <div class="flex justify-center items-center pt-7">
                    <input
                        class="flex justify-center align-center outline-0 items-center text-black border-hidden mt-px w-2/5"
                        type="search" placeholder="Search...">
                    <button onclick="search()">
                        <svg class="close " width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M13.6439 11.9998L18.657 6.99835C18.8765 6.77882 18.9998 6.48107 18.9998 6.17061C18.9998 5.86014 18.8765 5.5624 18.657 5.34286C18.4374 5.12333 18.1397 5 17.8292 5C17.5187 5 17.221 5.12333 17.0015 5.34286L12 10.356L6.99857 5.34286C6.77904 5.12333 6.48129 5 6.17083 5C5.86036 5 5.56261 5.12333 5.34308 5.34286C5.12355 5.5624 5.00022 5.86014 5.00022 6.17061C5.00022 6.48107 5.12355 6.77882 5.34308 6.99835L10.3562 11.9998L5.34308 17.0012C5.23381 17.1096 5.14708 17.2386 5.08789 17.3806C5.0287 17.5227 4.99823 17.6751 4.99823 17.829C4.99823 17.9829 5.0287 18.1353 5.08789 18.2773C5.14708 18.4194 5.23381 18.5484 5.34308 18.6567C5.45146 18.766 5.58041 18.8527 5.72247 18.9119C5.86454 18.9711 6.01692 19.0016 6.17083 19.0016C6.32473 19.0016 6.47711 18.9711 6.61918 18.9119C6.76125 18.8527 6.89019 18.766 6.99857 18.6567L12 13.6436L17.0015 18.6567C17.1098 18.766 17.2388 18.8527 17.3809 18.9119C17.5229 18.9711 17.6753 19.0016 17.8292 19.0016C17.9831 19.0016 18.1355 18.9711 18.2776 18.9119C18.4196 18.8527 18.5486 18.766 18.657 18.6567C18.7662 18.5484 18.853 18.4194 18.9121 18.2773C18.9713 18.1353 19.0018 17.9829 19.0018 17.829C19.0018 17.6751 18.9713 17.5227 18.9121 17.3806C18.853 17.2386 18.7662 17.1096 18.657 17.0012L13.6439 11.9998Z"
                                fill="#fff" />
                        </svg>
                    </button>

                </div>
            </div>
            <!-- END SEARCH MOBILE -->
            <section class="flex justify-start lg:justify-center items-center py-[31px]">

                <div
                    class="nav-fix flex justify-center align-center gap-32 xl:gap-24 md:gap-3 items-center text-white">
                    <div class="flex ">
                        <img src="assets/logo.svg" alt="">
                        <label class="w-40" for="">High School </label>
                    </div>



                    <nav
                        class="flex gap-[42px] fixed w-full h-full top-0 p-10 lg:p-3 lg:relative bg-primary lg:bg-transparent">

                        <ul class="flex flex-col lg:flex-row gap-8 md:gap-6 items-center pt-14 lg:pt-0">
                            <li class="{{ request()->is('/') ? 'active' : '' }}"><a class="active"
                                    href="#">Home</a></li>

                            <li class="has-child">
                                <div class="flex justify-between gap-1 items-center">
                                    <div>
                                        <a href="">Profile</a>
                                    </div>
                                    <div>
                                        <span class="caret">
                                            <svg class="fill-current text-white w-5 h-5"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                stroke-width="1.5">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                            </svg>

                                        </span>
                                    </div>

                                </div>

                                <ul class="submenu">
                                    <li><a href="#">Visi</a></li>
                                    <li><a href="#">Misi</a></li>
                                    <li><a href="#">Fasilitas</a></li>
                                    <li><a href="#">Gallery</a></li>
                                    <li><a href="#">Pendidikan</a></li>
                                </ul>
                            </li>

                            <li class="has-child">
                                <div class="flex justify-between gap-1 items-center">
                                    <div>
                                        <a href="/adminAkademik">Akademik</a>
                                    </div>
                                    <div>
                                        <span class="caret">
                                            <svg class="fill-current text-white w-5 h-5"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                stroke-width="1.5">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                            </svg>

                                        </span>
                                    </div>

                                </div>
                                <ul class="submenu">
                                    <li><a href="#">Data 1</a></li>
                                    <li><a href="#">Data 2</a></li>
                                    <li><a href="#">Data 3</a></li>
                                </ul>
                            </li>

                            <li class="has-child {{ request()->is('artikel') ? 'active' : '' }}">

                                <div class="flex justify-between gap-1 items-center">
                                    <div>
                                        <a href="/artikel">Artikel</a>
                                    </div>
                                    <div>
                                        <span class="caret">
                                            <svg class="fill-current text-white w-5 h-5"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                stroke-width="1.5">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                            </svg>

                                        </span>
                                    </div>

                                </div>


                                <ul class="submenu">
                                    <li><a href="#">Artikel 1</a></li>
                                    <li><a href="#">Artikel 2</a></li>
                                </ul>
                            </li>

                            <li class="has-child">
                                <div class="flex space-x-44 lg:space-x-0 gap-1 items-center">
                                    <div>
                                        <a href="/userPendaftaran">Pendaftaran</a>
                                    </div>
                                    <div>
                                        <span class="caret">
                                            <svg class="fill-current text-white w-5 h-5"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                stroke-width="1.5">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                            </svg>

                                        </span>
                                    </div>

                                </div>
                                <ul class="submenu">
                                    <li><a href="#">Learning 1</a></li>
                                    <li><a href="#">Learning 2</a></li>
                                    <li><a href="#">Learning 3</a></li>
                                </ul>
                            </li>

                            {{-- PC SEARCH --}}
                            <div class="pc-search absolute top-9 lg:top-4 right-10 md:-right-7 xl:-right-24   ">
                                <button onclick="search()">
                                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                                    </svg>
                                    <svg class="close hidden" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13.6439 11.9998L18.657 6.99835C18.8765 6.77882 18.9998 6.48107 18.9998 6.17061C18.9998 5.86014 18.8765 5.5624 18.657 5.34286C18.4374 5.12333 18.1397 5 17.8292 5C17.5187 5 17.221 5.12333 17.0015 5.34286L12 10.356L6.99857 5.34286C6.77904 5.12333 6.48129 5 6.17083 5C5.86036 5 5.56261 5.12333 5.34308 5.34286C5.12355 5.5624 5.00022 5.86014 5.00022 6.17061C5.00022 6.48107 5.12355 6.77882 5.34308 6.99835L10.3562 11.9998L5.34308 17.0012C5.23381 17.1096 5.14708 17.2386 5.08789 17.3806C5.0287 17.5227 4.99823 17.6751 4.99823 17.829C4.99823 17.9829 5.0287 18.1353 5.08789 18.2773C5.14708 18.4194 5.23381 18.5484 5.34308 18.6567C5.45146 18.766 5.58041 18.8527 5.72247 18.9119C5.86454 18.9711 6.01692 19.0016 6.17083 19.0016C6.32473 19.0016 6.47711 18.9711 6.61918 18.9119C6.76125 18.8527 6.89019 18.766 6.99857 18.6567L12 13.6436L17.0015 18.6567C17.1098 18.766 17.2388 18.8527 17.3809 18.9119C17.5229 18.9711 17.6753 19.0016 17.8292 19.0016C17.9831 19.0016 18.1355 18.9711 18.2776 18.9119C18.4196 18.8527 18.5486 18.766 18.657 18.6567C18.7662 18.5484 18.853 18.4194 18.9121 18.2773C18.9713 18.1353 19.0018 17.9829 19.0018 17.829C19.0018 17.6751 18.9713 17.5227 18.9121 17.3806C18.853 17.2386 18.7662 17.1096 18.657 17.0012L13.6439 11.9998Z"
                                            fill="#fff" />
                                    </svg>

                                </button>
                            </div>
                        </ul>


                    </nav>

                    <!--BUTTON PC SEARCH HAMBURGER -->
                    <div class="flex justify-center items-center gap-2">
                        <div class="flex md:items-center -z-10 lg:z-20 ml-[4rem] lg:ml-6">
                            @if (Route::has('login'))
                                <div class="">
                                    @auth
                                        <a href="{{ url('/dashboard') }}" class="text-sm text-white  underline">Dashboard</a>
                                        <div class="flex">
                                        @else
                                            <a href="{{ route('login') }}" class="px-4 py-2 border border-white text-sm leading-4 font-medium rounded-md text-white  dark:bg-gray-800 hover:text-secondary dark:hover:text-gray-300 focus:outline-none">Login</a>
        
                                        @endauth
                                    </div>
        
        
        
                                </div>
                            @endif
                        </div>

                        <button class="mobile-btn fixed right-2 top-9 lg:static lg:hidden z-10">
                            <svg class="bar" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 17H19M5 12H19M5 7H19" stroke="white" stroke-width="2.01562"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <svg class="close " width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M13.6439 11.9998L18.657 6.99835C18.8765 6.77882 18.9998 6.48107 18.9998 6.17061C18.9998 5.86014 18.8765 5.5624 18.657 5.34286C18.4374 5.12333 18.1397 5 17.8292 5C17.5187 5 17.221 5.12333 17.0015 5.34286L12 10.356L6.99857 5.34286C6.77904 5.12333 6.48129 5 6.17083 5C5.86036 5 5.56261 5.12333 5.34308 5.34286C5.12355 5.5624 5.00022 5.86014 5.00022 6.17061C5.00022 6.48107 5.12355 6.77882 5.34308 6.99835L10.3562 11.9998L5.34308 17.0012C5.23381 17.1096 5.14708 17.2386 5.08789 17.3806C5.0287 17.5227 4.99823 17.6751 4.99823 17.829C4.99823 17.9829 5.0287 18.1353 5.08789 18.2773C5.14708 18.4194 5.23381 18.5484 5.34308 18.6567C5.45146 18.766 5.58041 18.8527 5.72247 18.9119C5.86454 18.9711 6.01692 19.0016 6.17083 19.0016C6.32473 19.0016 6.47711 18.9711 6.61918 18.9119C6.76125 18.8527 6.89019 18.766 6.99857 18.6567L12 13.6436L17.0015 18.6567C17.1098 18.766 17.2388 18.8527 17.3809 18.9119C17.5229 18.9711 17.6753 19.0016 17.8292 19.0016C17.9831 19.0016 18.1355 18.9711 18.2776 18.9119C18.4196 18.8527 18.5486 18.766 18.657 18.6567C18.7662 18.5484 18.853 18.4194 18.9121 18.2773C18.9713 18.1353 19.0018 17.9829 19.0018 17.829C19.0018 17.6751 18.9713 17.5227 18.9121 17.3806C18.853 17.2386 18.7662 17.1096 18.657 17.0012L13.6439 11.9998Z"
                                    fill="#fff" />
                            </svg>

                        </button>
                        

                    </div>
                </div>

                



            </section>
        </section>

        <header class="bg-cover bg-center bg-fixed bg-no-repeat w-full"
            style="background-image: url(assets/bg-nav.svg)">
            <section class="container mx-auto flex px-5 flex-col gap-5 mt-[130px]">
                <div class="">
                    <h1 class="text-3xl lg:text-5xl xl:text-5xl w-11/12 lg:w-3/5 font-bold">Buku - Buku yang dapat
                        membuat
                        anda Termotivasi</h1>
                    <p class="my-[24px]">September 6, 2022</p>
                    <p class="w-full lg:w-2/4 mb-[32px]">Lörem ipsum mikrolös dongen infodemi. Terapument anteliga
                        deforen
                        laskapet
                        målagisk. Av euror.
                        Karriärcoach pyjuskap andropatologi. </p>
                </div>
                <div>
                    <button onclick="instagram()"
                        class="pc-btn1 hidden md:block bg-primary w-40 px-6 py-4 text-white rounded-[30px] hover:bg-secondary font-bold text-sm">
                        Hubungi Kami
                    </button>

                </div>
            </section>
        </header>

    </header>

    
    <script src={{ asset('js/web.js') }} type="application/javascript"></script>




</body>

</html>
