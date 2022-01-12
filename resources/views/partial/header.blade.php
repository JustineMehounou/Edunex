<!DOCTYPE html>
<html lang="={{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="../public/fontend/css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Fonts -->
     <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

     <!--font awesome-->
     <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">

     <!--style-->
     <link href="../public/fontend/css/style.css" rel="stylesheet" type="text/css">
     <link href="../public/fontend/css/font_awesome.css" rel="stylesheet" type="text/css">
     <link href="../public/fontend/css/font-awesome.css" rel="stylesheet" type="text/css">


     {{-- <link href="../public/fontend/css/animate.css" rel="stylesheet" type="text/css"> --}}

     {{-- script --}}
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
     <script src="../public/fontend/js/script.js"></script>


     <title>@yield('title')</title>


</head>
<body>
{{-- <!--Header_section-->
    <header id="header_wrapper fixed-top">

        <div class="container-fluid">
            <div class="header_box">
                <div class="row">
                        <div class="col-lg-4 header_head">
                            <div class="logo">
                                <a href="index"><img src="../public/fontend/image/edunexlogob.jpeg" alt="logo" width="80px" class="rounded-circle"></a>
                            </div>

                           {{--  <form>
                                <div class="form-group search-group">
                                    <input type="text" class="form-control search" name="search" id="search" aria-describedby="helpId" placeholder="Search">
                                    <i class="fas fa-search " id="search_icon"></i>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-5 NavBar">
                            <nav class="navbar navbar-reverse" role="navigation">

                                <div class="navbar-header">

                                    <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>

                                </div>
                                <div id="main-nav" class="collapse navbar-collapse navStyle">
                                    <ul class="nav justify-content-center navStyle" id="mainNav">
                                        <li  class="nav-item"><a href="freecourse" class=" scroll-link">Free Courses</a></li>
                                        <li  class="nav-item"><a href="paidcourse" class=" scroll-link">Paid Courses</a></li>
                                        <li  class="nav-item"><a href="aboutus" class=" scroll-link">About us</a></li>
                                    </ul>
                                </div>

                            </nav>

                        </div>

                    <div class="col-lg-3 LogSign">
                        <div id="LogSign">
                            <a href="login" id="logIn">Log in</a>
                            <a href="signup" id="logUp">Get started</a>
                            {{-- <button class="btn" type="button" id="logIn">Log in</button>
                            <button class="btn" type="button" id="logUp">Get started</button>
                            <i class="fa fa-globe icons " id="globe" style="color: #555; font-size: 2em; margin-right:5px"></i>
                            <i class="fas fa-search  icons  " id="search_bar"  style="font-size: 1.5em;"></i>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </header>
<!--Header_section end-->
 --}}
 <!--Header_section-->
<section id="header_wrapper">
    <div class="container">
      <div class="header_box">
            <div class="rounded logo"><a href="#"><img src="../public/fontend/image/logo.png" alt="" width="80px" ></a></div>
            <nav class="navbar navbar-inverse" role="navigation">
                <div class="navbar-header">
                    <button class="navbar-toggle" type="button" id="nav-toggle" data-toggle="collapse" data-target="#main-nav" aria-expanded="false"
                        aria-controls="main-nav">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <div class="collapse navbar-collapse navStyle" id="main-nav">
                    <ul {{-- class="nav navbar-nav" --}} id="mainNav">
                        <li><a href="#hero_section">Free Courses</a></li>
                        <li><a href="#aboutUs">Paid Courses</a></li>
                        <li><a href="#service">About us</a></li>
                        <li><a href="#Portfolio" id="logIn">Log in</a></li>
                        <li><a href="#clients" id="logUp">Get started</a></li>
                        <li><i class="fa fa-globe icons" id="globe" style="color: #555; font-size: 2em; margin-right:5px"></i></li>
                        <li><i class="fas fa-search icons" id="search_bar"  style="font-size: 1.5em;"></i></li>
                    </ul>
                </div>

            </nav>
        </div>
    </div>
  </section>
  <!--Header_section-->
