<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('styles')
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="container py-4">
            <div class="row">
                @if(Auth::check())
                <div class="col-lg-2">
                    
                <ul class="nav flex-lg-column flex-row" style="list-style-type: none;">

                    <li class="p-1">
                      <a href="{{ route('home') }}">Home</a>
                    </li>

                    @if(Auth::user()->admin)

                    <li class="p-1">
                      <a data-toggle="collapse" href="#formsExamples" aria-expanded="true" class="">Users</a>
                      <div class="collapse in" id="formsExamples" aria-expanded="true" style="">
                          <ul >
                            <li><a href="{{ route('users') }}">All Users</a>
                            </li>
                                                                                           
                          </ul>
                      </div>
                    </li>
                    

                    <li class="p-1">
                      <a data-toggle="collapse" href="#formsExamples1" aria-expanded="true" class="">Categories</a>
                      <div class="collapse in" id="formsExamples1" aria-expanded="true" style="">
                          <ul >
                            <li><a data-toggle="collapse" href="#formsExamples1a" aria-expanded="true" class="">Credit</a>
                            <div class="collapse in" id="formsExamples1a" aria-expanded="true" style="">
                              <ul>
                                <li><a href="{{ route('credits.index') }}">All Credit</a></li>
                                <li><a href="{{ route('credits.create') }}">Create New Credit</a></li>
                              </ul>
                            </li>
                            <li><a data-toggle="collapse" href="#formsExamples1b" aria-expanded="true" class="">Debit</a>
                            <div class="collapse in" id="formsExamples1b" aria-expanded="true" style="">
                              <ul>
                                <li><a href="{{ route('debits.index') }}">All Debit</a></li>
                                <li><a href="{{ route('debits.create') }}">Create New Debit</a></li>
                              </ul>
                            </li>
                                                                                           
                          </ul>
                      </div>
                    </li>
                    

                    <li class="p-1">
                      <a data-toggle="collapse" href="#formsExamples2" aria-expanded="true" class="">Transaction</a>
                      <div class="collapse in" id="formsExamples2" aria-expanded="true" style="">
                          <ul >
                            <li><a href="{{ route('transactions.index') }}">All Transaction</a>
                            </li>
                            <li><a href="{{ route('transactions.create') }}">Create New Transaction</a>
                            </li>
                                                                                           
                          </ul>
                      </div>
                    </li>
                    
                    @endif
                                
                    
                  </ul>
                    

                </div>
                @endif

                <div class="col-lg-10">
                    @if(Session::has('success'))
                    <div class="alert alert-success alert-dismissible fade show mb-2" role="alert">
                        {{ Session::get('success') }}
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                    </div>
                    @endif
                    
                    @if(Session::has('info'))
               
                    <div class="alert alert-info alert-dismissible fade show mb-2" role="alert">
                      {{ Session::get('info') }}
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    
                    @endif


                    @yield('content')

                </div>

            </div>
        </main>
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    @yield('scripts')
</body>
</html>
