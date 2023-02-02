<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>



    <header class="bg-cover bg-center bg-fixed bg-no-repeat w-full" style="background-image: url(assets/bg-nav.svg)">
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
                    class="nav-fix flex justify-center align-center gap-32 xl:gap-32 md:gap-10 items-center text-white">
                    <div class="flex ">
                        <img src="assets/logo.svg" alt="">
                        <label class="w-40" for="">High School </label>
                    </div>



                    <nav
                        class="flex flex-col lg:flex-row  fixed w-full h-full top-0 p-10 lg:p-3  lg:relative bg-primary lg:bg-transparent">

                        <!-- Responsive Settings Options -->
                        <div class="block lg:hidden -0ml-0 pt-[5rem] pb-1 text-white w-full">
                            <div class="px-3 py-2 border border-white  items-center text-center">
                                <div class="font-medium text-base text-white ">
                                    {{ Auth::user()->name }}</div>
                                <div class="font-medium text-sm text-white">{{ Auth::user()->email }}</div>
                            </div>

                            <div class="mt-3 space-y-1 text-white">
                                <x-responsive-nav-link :href="route('profile.edit')">
                                    {{ __('Profile') }}
                                </x-responsive-nav-link>

                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-responsive-nav-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-responsive-nav-link>
                                </form>
                            </div>
                        </div>
                    
                        <ul class="flex flex-col lg:flex-row gap-8 md:gap-6 items-center pt-14 lg:pt-0">
                            <li class="{{ request()->is('formUser') ? 'active' : '' }}"><a class="active"
                                    href="/formUser">Home</a></li>

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

                            <li class="has-child {{ request()->is('userAkademik') ? 'active' : '' }}">

                                <div class="flex justify-between gap-1 items-center">
                                    <div>
                                        <a href="/userAkademik">Akademik</a>
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
                                    <li><a href="/mapel">Mapel</a></li>
                                    <li><a href="/nilai">Nilai Siswa</a></li>
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

                            <li class="has-child {{ request()->is('userPendaftaran') ? 'active' : '' }}">
                                <div class="flex justify-between space-x-44 lg:space-x-0 gap-1 items-center">
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
                        <!-- Settings Dropdown (PC PROFILE) -->
                        <div class="hidden lg:flex md:items-center -z-10 lg:z-20 ml-4 lg:ml-6">
                            <x-dropdown align="right" width="48">
                                <x-slot name="trigger">
                                    <button
                                        class="inline-flex items-center px-3 py-2 border border-white text-sm leading-4 font-medium rounded-md text-white  dark:bg-gray-800 hover:text-secondary dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                                        <div>{{ Auth::user()->name }}</div>

                                        <div class="ml-1">
                                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                    clip-rule="evenodd" />
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

                                        <x-dropdown-link :href="route('logout')"
                                            onclick="event.preventDefault();
                                this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </x-dropdown-link>
                                    </form>
                                </x-slot>
                            </x-dropdown>
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

                <div class=" pb-[330px]">
                    <button onclick="instagram()"
                        class="pc-btn1 bg-primary w-40 px-6 py-4 text-white rounded-[30px] hover:bg-secondary font-bold text-sm">
                        Hubungi Kami
                    </button>

                </div>
            </section>
        </header>

    </header>

    <!-- CONTENT 1 START-->
    <section class="container mx-auto px-6">
        <div class="grid grid-cols-1 grid-rows-1 pt-[110px]">
            <div class="flex flex-col lg:flex-row justify-center items-center gap-6 bg-white rounded-lg h-30 py-10">
                <div>
                    <div class="flex justify-center">
                        <img src={{ asset('assets/logo-scholl.svg') }} alt="">
                    </div>

                    <h1 class="text-center font-bold  lg:text-[24px] mt-[24px]">Identitas Sekolah</h1>
                    <p
                        class="mt-[24px] text-[#969696] lg:text-[14px] text-center  w-[350px] xl:w-[350px] md:w-[300px]">
                        High School berdiri sejak
                        tahun 1980 dengan nama High School 1. Sekolah yang akan membimbing
                        muridnya hingga benar</p>
                    <div class="flex justify-center">
                        <button id="btn-identitas">
                            <a class=" text-primary mt-[16px] font-bold lg:text-[14px]">Read more</a>
                        </button>
                    </div>


                </div>

                <div>
                    <div class="flex justify-center">
                        <img src={{ asset('assets/logo-visi.svg') }} alt="">
                    </div>
                    <h1 class="text-center font-bold lg:text-[24px] mt-[24px]">Visi Misi</h1>
                    <p class="mt-[24px] text-[#969696] lg:text-[14px] text-center w-[350px] xl:w-[350px] md:w-[300px]">
                        High School berdiri
                        sejak
                        tahun 1980 dengan nama High School 1. Sekolah yang akan membimbing
                        muridnya hingga benar</p>
                    <div class="flex justify-center">
                        <button id="btn-visi">
                            <a class=" text-primary mt-[16px] font-bold lg:text-[14px]">Read more</a>
                        </button>
                    </div>

                </div>

                <div>
                    <div class="flex justify-center">
                        <img src={{ asset('assets/logo-struktur.svg') }} alt="">
                    </div>
                    <h1 class="text-center font-bold lg:text-[24px] mt-[24px]">Struktur Sekolah</h1>
                    <p class="mt-[24px] text-[#969696] lg:text-[14px] text-center w-[350px] xl:w-[350px] md:w-[300px]">
                        High School berdiri
                        sejak
                        tahun 1980 dengan nama High School 1. Sekolah yang akan membimbing
                        muridnya hingga benar</p>
                    <div class="flex justify-center">
                        <button id="btn-struktur">
                            <a class=" text-primary mt-[16px] font-bold lg:text-[14px]">Read more</a>
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- CONTENT 2 END -->

    <!-- POPUP CONTENT 1 -->
    <div id="popup1"
        class="hidden fixed z-30 pt-[100px] left-0 top-0 w-full h-full overflow-x-hidden bg-black bg-slate-300/50">
        <!-- ISI POPUP  START -->
        <div class="bg-white m-auto max-sm:m-hidden p-20 border-2 w-full lg:w-4/5 border-slate-400">
            <button id="close-identitas" class="close-identitas float-right">
                <svg class="close-identitas" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M13.6439 11.9998L18.657 6.99835C18.8765 6.77882 18.9998 6.48107 18.9998 6.17061C18.9998 5.86014 18.8765 5.5624 18.657 5.34286C18.4374 5.12333 18.1397 5 17.8292 5C17.5187 5 17.221 5.12333 17.0015 5.34286L12 10.356L6.99857 5.34286C6.77904 5.12333 6.48129 5 6.17083 5C5.86036 5 5.56261 5.12333 5.34308 5.34286C5.12355 5.5624 5.00022 5.86014 5.00022 6.17061C5.00022 6.48107 5.12355 6.77882 5.34308 6.99835L10.3562 11.9998L5.34308 17.0012C5.23381 17.1096 5.14708 17.2386 5.08789 17.3806C5.0287 17.5227 4.99823 17.6751 4.99823 17.829C4.99823 17.9829 5.0287 18.1353 5.08789 18.2773C5.14708 18.4194 5.23381 18.5484 5.34308 18.6567C5.45146 18.766 5.58041 18.8527 5.72247 18.9119C5.86454 18.9711 6.01692 19.0016 6.17083 19.0016C6.32473 19.0016 6.47711 18.9711 6.61918 18.9119C6.76125 18.8527 6.89019 18.766 6.99857 18.6567L12 13.6436L17.0015 18.6567C17.1098 18.766 17.2388 18.8527 17.3809 18.9119C17.5229 18.9711 17.6753 19.0016 17.8292 19.0016C17.9831 19.0016 18.1355 18.9711 18.2776 18.9119C18.4196 18.8527 18.5486 18.766 18.657 18.6567C18.7662 18.5484 18.853 18.4194 18.9121 18.2773C18.9713 18.1353 19.0018 17.9829 19.0018 17.829C19.0018 17.6751 18.9713 17.5227 18.9121 17.3806C18.853 17.2386 18.7662 17.1096 18.657 17.0012L13.6439 11.9998Z"
                        fill="#000" />
                </svg>
            </button>
            <!-- ISI -->
            <div>
                <h1 class="text-center font-bold lg:text-3xl mt-[24px] mb-10">Identitas Sekolah</h1>
                <div class="flex justify-center">
                    <img class="w-[300px] lg:w-2/4" src={{ asset('assets/galery-sekolah.jpg') }} alt="">
                </div>


                <div class="flex justify-center">
                    <p class="mt-[40px] lg:mt-[30px] text-[12px] lg:text-[14px] text-justify w-full lg:w-4/5">High
                        School berdiri sejak
                        tahun 1980 dengan nama High School 1. Sekolah yang akan membimbing. Lorem ipsum dolor, sit amet
                        consectetur adipisicing elit. Doloribus eos nisi, sapiente ducimus at dolorem libero rerum rem
                        sed labore, cumque dolores veniam ad necessitatibus adipisci in, sit autem sequi.
                        muridnya hingga benar. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt dolorum
                        iusto neque, animi debitis illo vel facere omnis voluptatum harum ex dolores inventore at
                        expedita minus nihil? Quidem, culpa consequuntur?. Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Nemo dolorem voluptatem quas reprehenderit sit beatae maiores rem vero,
                        officiis optio ullam illo accusamus ratione inventore corrupti ea culpa fugiat iste.</p>

                </div>

                <div class="flex justify-center ">
                    <p class="mt-[40px] lg:mt-[30px] text-[12px] lg:text-[14px] text-justify w-full lg:w-4/5">High
                        School berdiri sejak
                        tahun 1980 dengan nama High School 1. Sekolah yang akan membimbing. Lorem ipsum dolor, sit amet
                        consectetur adipisicing elit. Doloribus eos nisi, sapiente ducimus at dolorem libero rerum rem
                        sed labore, cumque dolores veniam ad necessitatibus adipisci in, sit autem sequi.
                        muridnya hingga benar. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt dolorum
                        iusto neque, animi debitis illo vel facere omnis voluptatum harum ex dolores inventore at
                        expedita minus nihil? Quidem, culpa consequuntur?. Lorem ipsum, dolor sit amet consectetur
                        adipisicing elit. Voluptates omnis neque inventore exercitationem suscipit numquam voluptatem
                        vero saepe. Earum quaerat placeat repellendus aperiam neque illum vitae commodi quibusdam qui
                        cum!</p>

                </div>

                <div class="flex justify-center ">
                    <p class="mt-[40px] lg:mt-[30px] text-[12px] lg:text-[14px] text-justify w-full lg:w-4/5">High
                        School berdiri sejak
                        tahun 1980 dengan nama High School 1. Sekolah yang akan membimbing. Lorem ipsum dolor, sit amet
                        consectetur adipisicing elit. Doloribus eos nisi, sapiente ducimus at dolorem libero rerum rem
                        sed labore, cumque dolores veniam ad necessitatibus adipisci in, sit autem sequi.
                        muridnya hingga benar. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt dolorum
                        iusto neque, animi debitis illo vel facere omnis voluptatum harum ex dolores inventore at
                        expedita minus nihil? Quidem, culpa consequuntur?. Lorem ipsum, dolor sit amet consectetur
                        adipisicing elit. Voluptates omnis neque inventore exercitationem suscipit numquam voluptatem
                        vero saepe. Earum quaerat placeat repellendus aperiam neque illum vitae commodi quibusdam qui
                        cum!</p>

                </div>

            </div>
        </div>
        <!-- ISI POPUP END -->
    </div>
    <!-- POPUP CONTENT 1 -->

    <!-- POPUP CONTENT 2 -->
    <div id="popup2"
        class="hidden fixed z-30 pt-[100px] left-0 top-0 w-full h-full overflow-auto bg-black bg-slate-300/50">
        <!-- ISI POPUP  START -->
        <div class="bg-white m-auto max-sm:m-hidden p-20 border-2 w-full lg:w-4/5 border-slate-400">
            <button id="close-visi" class="close-visi float-right">
                <svg class="close-visi" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M13.6439 11.9998L18.657 6.99835C18.8765 6.77882 18.9998 6.48107 18.9998 6.17061C18.9998 5.86014 18.8765 5.5624 18.657 5.34286C18.4374 5.12333 18.1397 5 17.8292 5C17.5187 5 17.221 5.12333 17.0015 5.34286L12 10.356L6.99857 5.34286C6.77904 5.12333 6.48129 5 6.17083 5C5.86036 5 5.56261 5.12333 5.34308 5.34286C5.12355 5.5624 5.00022 5.86014 5.00022 6.17061C5.00022 6.48107 5.12355 6.77882 5.34308 6.99835L10.3562 11.9998L5.34308 17.0012C5.23381 17.1096 5.14708 17.2386 5.08789 17.3806C5.0287 17.5227 4.99823 17.6751 4.99823 17.829C4.99823 17.9829 5.0287 18.1353 5.08789 18.2773C5.14708 18.4194 5.23381 18.5484 5.34308 18.6567C5.45146 18.766 5.58041 18.8527 5.72247 18.9119C5.86454 18.9711 6.01692 19.0016 6.17083 19.0016C6.32473 19.0016 6.47711 18.9711 6.61918 18.9119C6.76125 18.8527 6.89019 18.766 6.99857 18.6567L12 13.6436L17.0015 18.6567C17.1098 18.766 17.2388 18.8527 17.3809 18.9119C17.5229 18.9711 17.6753 19.0016 17.8292 19.0016C17.9831 19.0016 18.1355 18.9711 18.2776 18.9119C18.4196 18.8527 18.5486 18.766 18.657 18.6567C18.7662 18.5484 18.853 18.4194 18.9121 18.2773C18.9713 18.1353 19.0018 17.9829 19.0018 17.829C19.0018 17.6751 18.9713 17.5227 18.9121 17.3806C18.853 17.2386 18.7662 17.1096 18.657 17.0012L13.6439 11.9998Z"
                        fill="#000" />
                </svg>
            </button>
            <!-- ISI -->
            <div>
                <h1 class="text-center font-bold lg:text-3xl mt-[24px] mb-10">Visi Misi</h1>
                <div class="flex justify-center">
                    <img class="w-[300px] lg:w-2/4" src={{ asset('assets/galery-sekolah.jpg') }} alt="">
                </div>
                <div class="flex justify-center">
                    <p class="mt-[40px] lg:mt-[30px] text-[12px] lg:text-[14px] text-justify w-full lg:w-4/5">High
                        School berdiri sejak
                        tahun 1980 dengan nama High School 1. Sekolah yang akan membimbing. Lorem ipsum dolor, sit amet
                        consectetur adipisicing elit. Doloribus eos nisi, sapiente ducimus at dolorem libero rerum rem
                        sed labore, cumque dolores veniam ad necessitatibus adipisci in, sit autem sequi.
                        muridnya hingga benar. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt dolorum
                        iusto neque, animi debitis illo vel facere omnis voluptatum harum ex dolores inventore at
                        expedita minus nihil? Quidem, culpa consequuntur?. Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Nemo dolorem voluptatem quas reprehenderit sit beatae maiores rem vero,
                        officiis optio ullam illo accusamus ratione inventore corrupti ea culpa fugiat iste.</p>

                </div>

            </div>
        </div>
        <!-- ISI POPUP END -->
    </div>
    <!-- POPUP CONTENT 2 END -->

    <!-- POPUP CONTENT 3 -->
    <div id="popup3"
        class="hidden fixed z-30 pt-[100px] left-0 top-0 w-full h-full overflow-auto bg-black bg-slate-300/50">
        <!-- ISI POPUP  START -->
        <div class="bg-white m-auto max-sm:m-hidden p-20 border-2 w-full lg:w-4/5 border-slate-400">
            <button id="close-struktur" class="close-struktur float-right">
                <svg class="close-struktur" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M13.6439 11.9998L18.657 6.99835C18.8765 6.77882 18.9998 6.48107 18.9998 6.17061C18.9998 5.86014 18.8765 5.5624 18.657 5.34286C18.4374 5.12333 18.1397 5 17.8292 5C17.5187 5 17.221 5.12333 17.0015 5.34286L12 10.356L6.99857 5.34286C6.77904 5.12333 6.48129 5 6.17083 5C5.86036 5 5.56261 5.12333 5.34308 5.34286C5.12355 5.5624 5.00022 5.86014 5.00022 6.17061C5.00022 6.48107 5.12355 6.77882 5.34308 6.99835L10.3562 11.9998L5.34308 17.0012C5.23381 17.1096 5.14708 17.2386 5.08789 17.3806C5.0287 17.5227 4.99823 17.6751 4.99823 17.829C4.99823 17.9829 5.0287 18.1353 5.08789 18.2773C5.14708 18.4194 5.23381 18.5484 5.34308 18.6567C5.45146 18.766 5.58041 18.8527 5.72247 18.9119C5.86454 18.9711 6.01692 19.0016 6.17083 19.0016C6.32473 19.0016 6.47711 18.9711 6.61918 18.9119C6.76125 18.8527 6.89019 18.766 6.99857 18.6567L12 13.6436L17.0015 18.6567C17.1098 18.766 17.2388 18.8527 17.3809 18.9119C17.5229 18.9711 17.6753 19.0016 17.8292 19.0016C17.9831 19.0016 18.1355 18.9711 18.2776 18.9119C18.4196 18.8527 18.5486 18.766 18.657 18.6567C18.7662 18.5484 18.853 18.4194 18.9121 18.2773C18.9713 18.1353 19.0018 17.9829 19.0018 17.829C19.0018 17.6751 18.9713 17.5227 18.9121 17.3806C18.853 17.2386 18.7662 17.1096 18.657 17.0012L13.6439 11.9998Z"
                        fill="#000" />
                </svg>
            </button>
            <!-- ISI -->
            <div>
                <h1 class="text-center font-bold lg:text-3xl mt-[24px] mb-10">Struktur Sekolah</h1>
                <div class="flex justify-center">
                    <img class="w-[300px] lg:w-2/4" src={{ asset('assets/galery-struktur.jpg') }} alt="">
                </div>
                <div class="flex justify-center">
                    <p class="mt-[40px] lg:mt-[30px] text-[12px] lg:text-[14px] text-justify w-full lg:w-4/5">High
                        School berdiri sejak
                        tahun 1980 dengan nama High School 1. Sekolah yang akan membimbing. Lorem ipsum dolor, sit amet
                        consectetur adipisicing elit. Doloribus eos nisi, sapiente ducimus at dolorem libero rerum rem
                        sed labore, cumque dolores veniam ad necessitatibus adipisci in, sit autem sequi.
                        muridnya hingga benar. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt dolorum
                        iusto neque, animi debitis illo vel facere omnis voluptatum harum ex dolores inventore at
                        expedita minus nihil? Quidem, culpa consequuntur?. Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Nemo dolorem voluptatem quas reprehenderit sit beatae maiores rem vero,
                        officiis optio ullam illo accusamus ratione inventore corrupti ea culpa fugiat iste.</p>

                </div>

                <div class="flex justify-center">
                    <p class="mt-[40px] lg:mt-[30px] text-[12px] lg:text-[14px] text-justify w-full lg:w-4/5">High
                        School berdiri sejak
                        tahun 1980 dengan nama High School 1. Sekolah yang akan membimbing. Lorem ipsum dolor, sit amet
                        consectetur adipisicing elit. Doloribus eos nisi, sapiente ducimus at dolorem libero rerum rem
                        sed labore, cumque dolores veniam ad necessitatibus adipisci in, sit autem sequi.
                        muridnya hingga benar. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt dolorum
                        iusto neque, animi debitis illo vel facere omnis voluptatum harum ex dolores inventore at
                        expedita minus nihil? Quidem, culpa consequuntur?. Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Nemo dolorem voluptatem quas reprehenderit sit beatae maiores rem vero,
                        officiis optio ullam illo accusamus ratione inventore corrupti ea culpa fugiat iste.</p>

                </div>

            </div>
        </div>
        <!-- ISI POPUP END -->
    </div>
    <!-- POPUP CONTENT 3 END -->

    <!-- CONTENT 3 START -->
    <section class="container mx-auto mt-[134px] bg-[#F7FBFA]">
        <div class="flex flex-col lg:flex-row">
            <div class="float-left ">
                <img class="logo-ucapan" src={{ asset('assets/logo-ucapan.svg') }} alt="">
            </div>
            <div class="pl-[20px] lg:pl-[40px]">
                <p class="pt-[30px] md:pt-2 xl:pt-[60px] text-[#2F5D62] text-[10px] lg:text-[14px]" for="">
                    Pembukaan
                    Kepala
                    Sekolah</p>
                <h1 class="font-bold text-[20px] md:text-2 xl:text-[32px] lg:w-11/12 mt-[16px]">Ucapan Kepala Sekolah
                    HIGH SCHOOL
                </h1>
                <p class="text-[#5A5A5A] lg:text-[14px] mt-[24px] lg:w-2/3">“ Lörem ipsum mikrolös dongen
                    infodemi. Terapument anteliga deforen laskapet målagisk. Av euror.
                    Karriärcoach pyjuskap andropatologi. “</p>
                <div class="mobile-kepsek  flex mt-[24px] pb-20 lg:pb-0">
                    <img class="lg:mt-0 mt-5" src={{ asset('assets/logo-people1.svg') }} alt="">
                    <div class="flex flex-col ml-[8px] mt-2 lg:mt-0">
                        <h1 class="font-bold text-[12px] lg:-text[14px]">Bpk. Robert stent</h1>
                        <p class="text-[#5A5A5A] text-[12px] lg:text-[14px]">Kepala Sekolah</p>
                    </div>

                </div>

            </div>



        </div>
    </section>
    <!-- CONTENT 3 END -->

    <!-- CONTENT 4 START -->
    <section class="container mx-auto">
        <div class="ml-[20px]">
            <h1 class="pt-[110px] font-bold text-[20px] lg:text-[32px]">Jurusan (Program Study)</h1>
            <p class="text-[#5A5A5A] text-[14px] mt-[24px] lg:w-2/6">Terdapat Beberapa Jurusan atau Program Study di
                SMA
                PGRI CICURUG yang dapat dipilih sesuai dengan minat Siswa
            </p>
            <div class="btn-academic">
                <button
                    class="pc-btn float-right bg-primary w-[164px] px-6 py-3 text-white rounded-[30px] hover:bg-secondary font-bold text-sm">
                    <a href="#">Academic Data</a>
                </button>
            </div>

        </div>


        <div class="btn-academic2 grid grid-cols-1 grid-rows-1 mt-[83px]">
            <div class="flex flex-col lg:flex-row justify-center gap-[24px] rounded-lg h-30">
                <div class="border-2 border-inherit bg-white">
                    <div class="flex justify-center mt-[24px]">
                        <img src="assets/logo-ips.svg" alt="">
                    </div>
                    <h1 class="text-center text-bold text-[24px]">IPS</h1>
                    <p class="text-center lg:w-[480px] text-[#969696] text-[14px] my-[24px] mx-[54px]">Jurusan IPS
                        mempelajari
                        tentang hubungan antar manusia dan hubungan manusia dengan lingkungannya,
                        serta berbagai aspek sosial</p>
                </div>
                <div class="border-2 border-inherit bg-white">
                    <div class="flex justify-center mt-[24px]">
                        <img src={{ asset('assets/logo-ipa.svg') }} alt="">
                    </div>
                    <h1 class="text-center text-bold text-[24px]">IPA</h1>
                    <p class="text-center lg:w-[480px] text-[#969696] text-[14px] my-[24px] mx-[54px]">Selain belajar
                        Ilmu Alam,
                        anak SMA belajar matematika juga. Oleh sebab itu selain disebut dengan
                        jurusan IPA (Ilmu Pengetahuan Alam) jurusan ini punya dua nama lain lagi, yaitu: MIPA , MIA</p>
                </div>
            </div>
        </div>
    </section>
    <!-- CONTENT 4 END -->

    <!-- CONTENT 5 START -->
    <section class="container mx-auto mt-[110px] ">
        <div>
            <h1 class="font-bold text-[20px] text-[20px] lg:text-[32px] ml-[20px] lg:ml-0">Prestasi Siswa - Siswi</h1>
            <div class="btn-presen flex justify-between">
                <div>
                    <p class="text-[#5A5A5A] lg:text-[14px] ml-[20px] lg:ml-0">Prestasi dari Siswa - Siswi SMA PGRI
                        CICURUG</p>
                </div>
                <div class="btn-presen2">
                    <button
                        class="pc-btn2 bg-primary w-[178px] px-6 py-3 text-white rounded-[30px] hover:bg-secondary font-bold text-sm">
                        <a href="#">See all prestation</a>
                    </button>
                </div>
            </div>

            <div class="btn-presen3 grid grid-cols-1 grid-rows-1 mt-[40px]">
                <div class="flex flex-col lg:flex-row justify-center gap-[23px] rounded-lg">

                    <div>
                        <div>
                            <img class="img-pres" src={{ asset('assets/logo-bola.svg') }} alt="">
                        </div>
                    </div>

                    <div class="relative">
                        <div class="">
                            <img class="img-pres" src={{ asset('assets/logo-bulu.svg') }} alt="">
                        </div>
                        <h1 class="absolute left-5 bottom-6 text-[18px] font-bold text-white">Juara 1 Lomba Bulu
                            Tangkis
                        </h1>
                    </div>

                    <div class="relative">
                        <div>
                            <img class="img-pres" src={{ asset('assets/logo-tenis.svg') }} alt="">
                        </div>
                        <h1 class="absolute left-5 bottom-6 text-[18px] font-bold text-white">Juara 3 Lomba Tenis Meja
                        </h1>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- CONTENT 5 END -->

    <!-- CONTENT 6 START -->
    <section class="containet mx-auto pt-[110px] pb-[110px]">
        <div class="">
            <h1 class="text-center font-bold text-[20px] lg:text-[32px]">Artikel</h1>
            <p class=" text-center align-center text-[#5A5A5A] text-[14px] mt-[16px] mb-[40px]">Kami menyediakan
                beberapa artikel dari kegiatan - kegiatan pembelajaran maupun lorem ipsum donot saas</p>
        </div>

        <div class="grid grid-cols-1 grid-rows-1">
            <div class="flex flex-col lg:flex-row justify-center gap-[23px] rounded-lg">
                <div>
                    <div>
                        <img src={{ asset('assets/logo-1.svg') }} alt="">
                    </div>
                </div>

                <div class="ml-0 lg:ml-[24px]">
                    <div class="flex flex-col lg:flex-row mb-[24px]">
                        <img src={{ asset('assets/logo-2.svg') }} alt="">
                        <div class="ml-[20px] lg:ml-[24px]">
                            <p class="text-[#969696] lg:text-[14px]">September 2, 2022</p>
                            <h1 class="font-bold lg:text-[18px] py-[16px] lg:w-56">Belajar dirumah Ketika Covid-19
                                Menyebar</h1>
                            <p class="text-[#5A5A5A] lg:text-[14px] lg:w-64">Lörem ipsum mikrolös dongen infodemi.
                                Terapument anteliga deforen laskapet målagisk. Av
                                euror. </p>
                        </div>

                    </div>
                    <div class="flex flex-col lg:flex-row">
                        <img src={{ asset('assets/logo-3.svg') }} alt="">
                        <div class="ml-[20px] lg:ml-[24px]">
                            <p class="text-[#969696] lg:text-[14px]">September 2, 2022</p>
                            <h1 class="font-bold lg:text-[18px] py-[16px] lg:w-56">Perpaduan antara musik rock dan
                                keroncong</h1>
                            <p class="text-[#5A5A5A] lg:text-[14px] lg:w-64">Lörem ipsum mikrolös dongen infodemi.
                                Terapument anteliga deforen laskapet målagisk. Av euror.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-center mt-[40px]">
            <button class="button-primary"><a href="#">See more</a></button>
        </div>

    </section>
    <!-- CONTENT 6 END -->

    <!-- CONTENT 7 START -->
    <section class="bg-[#F7FBFA] pb-[60px]">
        <div class="container mx-auto">
            <div>
                <h1 class="text-center font-bold text-[20px] lg:text-[32px] pt-[60px] mb-[24px]">Gallery</h1>
                <p class="text-center text-[#5A5A5A] lg:text-[14px] mb-[40px]">Lörem ipsum mikrolös dongen infodemi.
                    Terapument anteliga deforen laskapet</p>
            </div>

            <!-- SLIDESHOW -->
            <div class="relative w-[350px] lg:w-[500px] m-auto ">
                <div class="mySlides hidden fade">
                    <div class="numbertext">1 / 3</div>
                    <img class="w-full" src={{ asset('assets/galery-2.svg') }} alt="">
                    <div class="text">Lapangan</div>
                </div>

                <div class="mySlides hidden fade">
                    <div class="numbertext">2 / 3</div>
                    <img class="w-full" src={{ asset('assets/galery-1.svg') }} alt="">
                    <div class="text">Ruang Kelas</div>
                </div>

                <div class="mySlides hidden fade">
                    <div class="numbertext">3 / 3</div>
                    <img class="w-full" src={{ asset('assets/galery-4.svg') }} alt="">
                    <div class="text">Ruang Kelas</div>
                </div>

                <a class="prev hover:bg-[rgba(0,0,0,0.8)]" onclick="plusSlides(-1)">❮</a>
                <a class="next right-0 rounded-3 hover:bg-[rgba(0,0,0,0.8)]" onclick="plusSlides(1)">❯</a>
            </div>

            <div class="items-center align-center text-center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
            </div>

            <div class="flex justify-center mt-[40px]">
                <button class="button-primary">
                    <a href="#">Read more</a>
                </button>
            </div>
        </div>

    </section>
    <!-- CONTENT 7 END -->

    <!-- CONTENT 8 START -->
    <!-- FOOTER -->

    <footer class="bg-[#0E2123] p-16 max-sm:p-10 ">
        <div class="container mx-auto">
            <div class="  grid grid-cols-1 grid-rows-1 ">
                <div
                    class="bg-[#0E2123] flex flex-col lg:flex-row justify-center gap-6 bg-white text-black rounded-lg h-30">

                    <div>
                        <div class="flex gap-3 align-center items-center mb-10">
                            <img src={{ asset('assets/logo.svg') }} alt="">
                            <h1 class="font-bold text-xl text-white">High School</h1>
                        </div>
                        <p class="font-normal text-sm max-sm:text-xm w-72 text-white">“ Lörem ipsum mikrolös dongen
                            infodemi. Terapument anteliga deforen laskapet målagisk. Av euror. Karriärcoach pyjuskap
                            andropatologi. “
                        </p>
                        <div class="flex gap-8 mt-12">
                            <img src={{ asset('assets/logo-facebook.svg') }} alt="">
                            <img src={{ asset('assets/logo-twiter.svg') }} alt="">
                            <img src={{ asset('assets/logo-in.svg') }} alt="">
                            <img src={{ asset('assets/logo-instagram.svg') }} alt="">
                        </div>

                        <div class="flex justify-center hidden lg:block">
                            <h1 class="text-white mt-20 mb-6 font-normal text-sm">© High School. All right Reserved.
                                Website By mangcoding</h1>
                        </div>

                    </div>

                    <div class="flex flex-row gap-20">
                        <div class="flex flex-row gap-20">
                            <div>
                                <h1 class="font-bold text-sm max-sm:text-lg mb-6 text-white">Jelajah</h1>
                                <ul class="flex flex-col  max-sm:gap-3 max-sm:w-5 text-white list-none max-sm:text-xs">
                                    <li class="w-32"><a class="" href="">Identitas Sekolah</a></li>
                                    <li><a href="">Berita</a></li>
                                    <li><a href="">Gallery</a></li>
                                    <li><a href="">Fasilitas</a></li>
                                    <li class="w-32"><a href="">Kontak Kami</a></li>
                                </ul>

                            </div>

                            <div>
                                <h1 class="font-bold text-sm max-sm:text-lg mb-6 text-white">Data Akademik</h1>
                                <ul class="flex flex-col  max-sm:gap-3 max-sm:w-5 text-white list-none max-sm:text-xs">
                                    <li class="w-32"><a href="">Tenaga Pendidik</a></li>
                                    <li class="w-32"><a href="">Tenaga Kependidikan</a></li>
                                    <li class=""><a href="">Daftar Siswa</a></li>
                                    <li class="w-32"><a href="">Absensi Siswa</a></li>
                                    <li class="w-32"><a href="">Organisasi Sekolah</a></li>
                                    <li class="w-32"><a href="">Jadwal Pelajaran</a></li>
                                    <li class="w-32"><a href="">Jadwal Ujian</a></li>
                                </ul>

                            </div>
                        </div>

                    </div>




                    <div>
                        <h1 class="font-bold text-sm max-sm:text-lg mb-6 text-white">Lokasi</h1>
                        <div class="flex gap-4 items-center mb-4">
                            <div>
                                <img class="" src="assets/logo-lokasi.svg" alt="">

                            </div>
                            <div class="flex flex-col ">
                                <h1 class="text-white">Alamat</h1>
                                <p class="text-white w-3/4">3891 Ranchview Dr. Richardson, California 62639</p>
                            </div>

                        </div>

                        <div class="flex gap-4 items-center">
                            <div>
                                <img class="" src={{ asset('assets/logo-email.svg') }} alt="">

                            </div>
                            <div class="flex flex-col ">
                                <h1 class="text-white">Kontak Kami</h1>
                                <p class="text-white">Telp: (0266) 123456</p>
                                <p class="text-white">Web : www.higntschool.sch.id</p>
                                <p class="text-white">email : info@highschool.sch.id</p>
                            </div>
                        </div>


                    </div>

                </div>
            </div>


        </div>

        <div class="flex justify-center block lg:hidden">
            <h1 class="text-white mt-20 mb-6 text-[10px]">© High School. All right Reserved. Website By mangcoding</h1>
        </div>
    </footer>
    <!-- CONTENT 8 END -->
    <script src={{ asset('js/web.js') }} type="application/javascript"></script>


</body>

</html>
