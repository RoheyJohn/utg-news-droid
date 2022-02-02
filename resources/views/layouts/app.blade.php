<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
    <div id="app">
        <header class="bg-indigo-800 bg- sticky py-6 ">
            <div class="container mx-auto flex justify-between items-center px-6">
                <div>
                    <a href="{{ url('/') }}" class="text-xl font-semibold text-gray-100 no-underline">
                        <p class="text-white font-extrabold text-2xl md:text-4xl">UTG NEWS DROID</p>
                        {{-- {{'UTG NEWS DROID'}} --}}
                        {{-- <img src="/images/logo.jpeg" alt="" class="h-20 w-30 m-auto object-cover"> --}}
                        {{-- {{ config('app.name', 'UTG NEWS DROID') }} --}}
                    </a>
                </div>
                <nav class="space-x-4 text-gray-100 text-m text-lg lg:text-base">
                    <a class="no-underline hover:underline" href="/">Home</a>
                    <a class="no-underline hover:underline" href="/dashboard">Dashboard</a>
                    <a class="no-underline hover:underline" href="/associations/show">Associations</a>
                    {{-- <a class="no-underline hover:underline" href="/schools">Profile</a> --}}
                    {{-- @if(Auth::user()->role == '6') --}}
                    {{-- @if(auth()->user()->role == '2')
                    <a class="no-underline hover:underline" href="/schools">Profile</a>
                    @endif --}}
                    
                    @guest
                        <a class="no-underline hover:underline" href="{{ route('login') }}">{{ __('Login') }}</a>
                        @if (Route::has('register'))
                            <a class="no-underline hover:underline" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                    @else
                        <span>{{ Auth::user()->name }}</span>

                        <a href="{{ route('logout') }}"
                           class="no-underline hover:underline"
                           onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            {{ csrf_field() }}
                        </form>
                    @endguest
                    {{-- @endif --}}
                    
                </nav>
            </div>
        </header>
        {{-- <nav class="bg-white px-8 pt-2 shadow-md">
            <div class="-mb-px flex justify-left">
                <a class="no-underline text-teal-dark border-b-2 border-indigo-dark uppercase tracking-wide font-bold text-xs py-3 mr-8" href="#">
                    Academics
                </a>
                <a class="no-underline text-grey-dark border-b-2 border-transparent uppercase tracking-wide font-bold text-xs py-3 mr-8" href="#">
                    Exams
                </a>
                <a class="no-underline text-grey-dark border-b-2 border-transparent uppercase tracking-wide font-bold text-xs py-3 mr-8" href="#">
                    Lecturers
                </a>
                <a class="no-underline text-grey-dark border-b-2 border-transparent uppercase tracking-wide font-bold text-xs py-3" href="#">
                    Sports
                </a>
            </div>
       </nav> --}}

        <div>
            @yield('content')
        </div>
        <div>
            {{-- @include('layouts.footer') --}}
        </div>
    </div>
    @yield('scripts')

</body>
</html>
