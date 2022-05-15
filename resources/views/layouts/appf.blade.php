<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/appv.js') }}" defer></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css"
    rel="stylesheet"  type='text/css'>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
     <link href="{{asset('css/style2.css')}}" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    </head>
    <body>


 <nav class="navbar navbar-expand-lg navbar-light bg-light">
   <div class="container-fluid">
     <a class="navbar-brand" href="#"> Moj Blog</a>
     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarScroll">
       <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
         <li class="nav-item">
           <a class="nav-link active" aria-current="page" href="#">Home</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="#">Link</a>
         </li>
         <li class="nav-item dropdown">
           <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
             Link
           </a>
           <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
             <li><a class="dropdown-item" href="#">Action</a></li>
             <li><a class="dropdown-item" href="#">Another action</a></li>
             <li><hr class="dropdown-divider"></li>
             <li><a class="dropdown-item" href="#">Something else here</a></li>
           </ul>
         </li>
         <li class="nav-item">
           <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Link</a>
         </li>
       </ul>
       <form class="d-flex">
         <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
         <button class="btn btn-outline-success" type="submit">Search</button>
       </form>
     </div>
   </div>

<div class="container">

        <a class="navbar-brand" href="index.html"> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

         <div style="margin-left:60px;" class="collapse navbar-collapse justify-content-end" id="navbarsExampleDefault">
         <ul  class="navbar-nav">

      @if (Auth::user())


       <span style="font-size:15px;font-family:verdana;">
               <li class="nav-item">
                   <a class="nav-link" href="#">
            <i class="fa-fight fa fa-house-window"></i>
            </a>
          </li>
       </span>



<span style="font-family:cursive;">

 <li class="nav-item active">
     </li>
 </span>



  <span style="font-size:11px;">
  <li class="nav-item">
  </li>

</span>


 @else

   <li class="nav-item">
   <a style="font-size:13px;" class="nav-link" href="{{route('login')}}">zaloguj

  </a>
     </li>

    <li class="nav-item">
    <a style="font-size:13px;" class="nav-link" href="{{route('register')}}"> nowe konto</a>
    </li>

  @endif
   </ul>

@if (Auth::user())

<div id="toogles" style="position:relative; right:100px;">


<span class="nav-item dropdown">

           <a class="nav-link" id="profileDropdown" href="#" data-bs-toggle="dropdown">
                <div class="navbar-profile">
            <img src="https://img.myloview.pl/tapety/people-icon-vector-person-icon-vector-user-icon-vector-400-249786085.jpg"
            width="35" height="35">
            <span style="font-size:20px;">
               </span></i>
               <p class="mb-0 d-none d-sm-block navbar-profile-name"> </p>
                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                      </div>
                    </a>
    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">

           <h6 class="p-3 mb-0">   </h6>
           <div class="dropdown-divider"> </div>

               <div class="preview-thumbnail">
               <div class="preview-icon bg-dark rounded-circle">
               <i class="mdi mdi-settings text-success"></i>
                 </div>
                </div>

                   <div class="preview-item-content">

                  </div>
                </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item preview-item" href="#">


     <form id="logout-form" action="{{route('logout')}}" method="POST" class="d-none">
      @csrf
           </form>
                 <a class="dropdown-item preview-item" href="{{route('logout')}}"
                              onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit()";>

                        <div class="preview-thumbnail">
                                        <div class="preview-icon bg-dark rounded-circle">
                                            <i class="mdi mdi-logout text-danger"></i>
                           </div>
                     </div>

             <div class="preview-item-content">

                     <p class="preview-subject mb-1">{{ __('Logout')}}</p>
                   </div>
               </a>

         <a class="dropdown-item preview-item" href="{{route('dashboard')}} ">
          <div class="preview-thumbnail">
             <div class="preview-icon bg-dark rounded-circle">
                 <i class="mdi mdi-logout text-danger"></i>

               </div>
            </div>

           <div class="preview-item-content">
              <p class="preview-subject mb-1">Admin</p>
              </div>
       </a>

 @endif


     </span>
   </nav>
   </div>

   <main class="py-4">
   @yield('content')
         </div>
        </main>
  </nav>
</body>
</html>
