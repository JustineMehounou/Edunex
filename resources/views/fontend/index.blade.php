@include('partial.header')
@section('title')
   Webacademy
@endsection
<!--Banner_Section-->
    <section id="banner">

        <div class="banner_wrapper">

            <div class="container-fluid">
                <div class="container">
                    <div class="banner_section">

                       <div class="row">

                            <div class="col-lg-5 col-sm-7">

                                <div class="banner_text top_left_cont ">
                                    <h2><strong><span class="banner_span_1" style="color: rgb(9, 5, 75)">It is</span>
                                        <span style="color: rgb(218, 6, 6)" id="banner_span_2"> very easy to </span>
                                        <span class="banner_span_1" style="color: rgb(9, 5, 75)">learn from home</span></strong> </h2>
                                    {{-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text  printer took a galley of type and scrambled it to make a type specimen.</p> --}}
                                    <a href="signup" class="get_started"> Get started</a>
                                </div>

                            </div>

                            <div class="col-lg-7 col-sm-5 banner_img">
                                <img src="../public/fontend/image/robotEleph.png" class="zoomIn wow animated" alt="" width="350px" height=auto/>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        </div>

    </section>
<!--Banner_Section end-->

<!--circle_section-->
    <section id="circle_section">

        <div class="container">

            <div class="row">

                <div class="col-lg-4 col-sm-4 circle_item" id="circle_item_1">
                    <div class="circle_img">
                        <img src="../public/fontend/image/circle_item_1.jpg" alt="" id="circle_img_1">
                    </div>
                    <div class="circle_text">
                        <h2>Quality learning</h2>
                    <p><small>Nous vous proposons des formations de qualité personnalisée pour vous aider dans votre apprentissage et améliorer votre connaissance.</small></p>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-4 circle_item" id="circle_item_2">
                    <div class="circle_img">
                        <img src="../public/fontend/image/circle_item_2-1.jpg" alt="" {{-- width="80px" height="80px" --}}>
                    </div>
                    <div class="circle_text">
                        <h2>Discuss with a learner</h2>
                        <p><small>Les formateurs sont là pour vous accompagner danns votre apprentissage. Discuter avec eux lorsque vous avez une préoccupation.</small></p>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-4 circle_item" id="circle_item_3">
                    <div class="circle_img">
                        <img src="../public/fontend/image/circle_item_3.jpg" alt="" {{-- width="80px" height="80px" --}}>
                    </div>

                    <div class="circle_text">
                        <h2>Get a certificate</h2>
                        <p><small>Mettre en pratique tout ce que vous avez appris et d'obtenir à la fin un certificat qui prouve votre savoir-faire.</small></p>
                    </div>

                </div>

            </div>

        </div>

    </section>
<!--End circle_section-->

<!--Courses gallery-->
    <section id="Courses_Gallery" class="OurCourse_content">
      <div class="container-fluid bg-light" >
            <div class="container main_course_grid">
                <h1>Our Courses</h1>
                <div class="row">

                    <div class="col-lg-12">
                        <div class="filter ">
                            <ul>
                                <li class="active" data-filter=".ourSelection"><a href="#">Our Selection</a></li>
                                <li data-filter=".robotic"><a href="#">Robotic</a></li>
                                <li data-filter=".design"><a href="#">Design</a></li>
                                <li data-filter=".development"><a href="#">Development</a></li>
                            </ul>

                        </div>

                        <div class="course_grid">

                                <div class="row">
                                    <div class="col-lg-1">
                                        <i class="fas fa-angle-left cours" style="font-size: 2.5em;margin-left:-50px; margin-top:186px; color:rgb(255, 255, 255)"></i>
                                    </div>
                                    <div class="col-lg-2 item robotic ourSelection">

                                        <div class="course_card" style="margin-left: -105px">
                                            <div class="course-grid_item">
                                                <a href="" style="text-decoration: none; color:black">
                                                    <img src="../public/fontend/image/mbot11-review-remote.jpg" alt="" class="img_fluid course_card_img" width="250px">
                                                    <div class="course_card_grid_item">
                                                        <div class="course_grid-lessons_number">
                                                            <i class="fa fa-video " style="color: blueviolet;  float:left"><small style="color: #444"> 20 Lesson</small></i>
                                                            {{-- <span></span> --}}
                                                            <i class="fa fa-book" aria-hidden="true" style="float: right; color:blueviolet"><small style="color: #444">6h of reading</small></i>
                                                            <div style="clear: both"></div>
                                                        </div>
                                                        <div class="course_grid_text">
                                                            <span>Be a horeos of MBOT by starting to learn this course</span></span>
                                                        </div>
                                                        <div class="course_statut">
                                                            <span style="color: rgb(250, 106, 39)" class="course_price">$110</span>
                                                            <div class="course_star">
                                                                <i class="fa fa-star course_star_icon" aria-hidden="true" style="color: rgb(250, 106, 39); width:8px; height:8px"></i>
                                                                <i class="fa fa-star course_star_icon" aria-hidden="true" style="color: rgb(250, 106, 39); width:8px; height:8px"></i>
                                                                <i class="fa fa-star course_star_icon" aria-hidden="true" style="color: rgb(250, 106, 39); width:8px; height:8px"></i>
                                                                <i class="fa fa-star course_star_icon" aria-hidden="true" style="color: rgb(250, 106, 39); width:8px; height:8px"></i>
                                                                <span class="course_rating">4.6 rating</span>
                                                            </div>
                                                            <div style="clear: both"></div>
                                                        </div>
                                                    {{--  <div class="teacher_name">Soft digital</div> --}}
                                                        <div class="course_grid_icons">
                                                        <i class="fas fa-users course_users_icon" style="float: left"><span>214 Students</span> </i>
                                                            <i class="fas fa-long-arrow-alt-right course_right_icon" style="float: right"></i>
                                                        </div>
                                                        <div style="clear: both"></div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-lg-3 item robotic ourSelection">

                                        <div class="course_card">

                                            <div class="course-grid_item">
                                                <a href="" style="text-decoration: none; color:black">
                                                    <img src="../public/fontend/image/mbotRanger2.jpg" alt="" class="img_fluid course_card_img" width="250px" >
                                                    <div class="course_card_grid_item">
                                                        <div class="course_grid-lessons_number">
                                                            <i class="fa fa-video " style="color: blueviolet;  float:left"><small style="color: #444"> 20 Lesson</small></i>
                                                            {{-- <span></span> --}}
                                                            <i class="fa fa-book" aria-hidden="true" style="float: right; color:blueviolet"><small style="color: #444">6h of reading</small></i>
                                                            <div style="clear: both"></div>
                                                        </div>
                                                        <div class="course_grid_text">
                                                            <span>Be a horeos of MBOT by starting to learn this course</span></span>
                                                        </div>
                                                        <div class="course_statut">
                                                            <span style="color: rgb(250, 106, 39)" class="course_price">$110</span>
                                                            <div class="course_star">
                                                                <i class="fa fa-star course_star_icon" aria-hidden="true" style="color: rgb(250, 106, 39); width:8px; height:8px"></i>
                                                                <i class="fa fa-star course_star_icon" aria-hidden="true" style="color: rgb(250, 106, 39); width:8px; height:8px"></i>
                                                                <i class="fa fa-star course_star_icon" aria-hidden="true" style="color: rgb(250, 106, 39); width:8px; height:8px"></i>
                                                                <i class="fa fa-star course_star_icon" aria-hidden="true" style="color: rgb(250, 106, 39); width:8px; height:8px"></i>
                                                                <span class="course_rating">4.6 rating</span>
                                                            </div>
                                                            <div style="clear: both"></div>
                                                        </div>
                                                        {{--  <div class="teacher_name">Soft digital</div> --}}
                                                        <div class="course_grid_icons">
                                                        <i class="fas fa-users course_users_icon" style="float: left"><span>214 Students</span> </i>
                                                            <i class="fas fa-long-arrow-alt-right course_right_icon" style="float: right"></i>
                                                        </div>
                                                        <div style="clear: both"></div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-lg-3 item design ourSelection">

                                        <div class="course_card">

                                            <div class="course-grid_item">
                                                <a href="" style="text-decoration: none; color:black">
                                                    <img src="../public/fontend/image/illustrator.jpg" alt="" class="img_fluid course_card_img" width="250px" >
                                                    <div class="course_card_grid_item">
                                                        <div class="course_grid-lessons_number">
                                                            <i class="fa fa-video " style="color: blueviolet;  float:left"><small style="color: #444"> 20 Lesson</small></i>
                                                            {{-- <span></span> --}}
                                                            <i class="fa fa-book" aria-hidden="true" style="float: right; color:blueviolet"><small style="color: #444">6h of reading</small></i>
                                                            <div style="clear: both"></div>
                                                        </div>
                                                        <div class="course_grid_text">
                                                            <span>Be a horeos of MBOT by starting to learn this course</span></span>
                                                        </div>
                                                        <div class="course_statut">
                                                            <span style="color: rgb(250, 106, 39)" class="course_price">$110</span>
                                                            <div class="course_star">
                                                                <i class="fa fa-star course_star_icon" aria-hidden="true" style="color: rgb(250, 106, 39); width:8px; height:8px"></i>
                                                                <i class="fa fa-star course_star_icon" aria-hidden="true" style="color: rgb(250, 106, 39); width:8px; height:8px"></i>
                                                                <i class="fa fa-star course_star_icon" aria-hidden="true" style="color: rgb(250, 106, 39); width:8px; height:8px"></i>
                                                                <i class="fa fa-star course_star_icon" aria-hidden="true" style="color: rgb(250, 106, 39); width:8px; height:8px"></i>
                                                                <span class="course_rating">4.6 rating</span>
                                                            </div>
                                                            <div style="clear: both"></div>
                                                        </div>
                                                    {{--  <div class="teacher_name">Soft digital</div> --}}
                                                        <div class="course_grid_icons">
                                                        <i class="fas fa-users course_users_icon" style="float: left"><span>214 Students</span></i>
                                                            <i class="fas fa-long-arrow-alt-right course_right_icon" style="float: right"></i>
                                                        </div>
                                                        <div style="clear: both"></div>
                                                    </div>
                                                </a>    
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-lg-2 item design ourSelection">
                                        <div class="course_card">
                                        
                                            <div class="course-grid_item">
                                                <a href="" style="text-decoration: none; color:black">
                                                    <img src="../public/fontend/image/powerpoint.jpg" alt="" class="img_fluid course_card_img" width="250px" >
                                                    <div class="course_card_grid_item">
                                                        <div class="course_grid-lessons_number">
                                                            <i class="fa fa-video " style="color: blueviolet;  float:left"><small style="color: #444"> 20 Lesson</small></i>
                                                            {{-- <span></span> --}}
                                                            <i class="fa fa-book" aria-hidden="true" style="float: right; color:blueviolet"><small style="color: #444">6h of reading</small></i>
                                                            <div style="clear: both"></div>
                                                        </div>
                                                        <div class="course_grid_text">
                                                            <span>Be a horeos of MBOT by starting to learn this course</span></span>
                                                        </div>
                                                        <div class="course_statut">
                                                            <span style="color: rgb(250, 106, 39)" class="course_price">$110</span>
                                                            <div class="course_star">
                                                                <i class="fa fa-star course_star_icon" aria-hidden="true" style="color: rgb(250, 106, 39); width:8px; height:8px"></i>
                                                                <i class="fa fa-star course_star_icon" aria-hidden="true" style="color: rgb(250, 106, 39); width:8px; height:8px"></i>
                                                                <i class="fa fa-star course_star_icon" aria-hidden="true" style="color: rgb(250, 106, 39); width:8px; height:8px"></i>
                                                                <i class="fa fa-star course_star_icon" aria-hidden="true" style="color: rgb(250, 106, 39); width:8px; height:8px"></i>
                                                                <span class="course_rating">4.6 rating</span>
                                                            </div>
                                                            <div style="clear: both"></div>
                                                        </div>
                                                    {{--  <div class="teacher_name">Soft digital</div> --}}
                                                        <div class="course_grid_icons">
                                                        <i class="fas fa-users course_users_icon" style="float: left"><span>214 Students</span> </i>
                                                            <i class="fas fa-long-arrow-alt-right course_right_icon" style="float: right"></i>
                                                        </div>
                                                        <div style="clear: both"></div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-1">
                                        <i class="fas fa-angle-right cours" style="font-size: 2.5em; margin-left:80px; margin-top:186px; color:rgb(255, 255, 255)"></i>
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-lg-3 item development ourSelection">

                                        <div class="course_card">
                                            <div class="course-grid_item">
                                                <a href="" style="text-decoration: none; color:black">
                                                    <img src="../public/fontend/image/scratch.png" alt="" class="img_fluid course_card_img" width="250px">
                                                    <div class="course_card_grid_item">
                                                        <div class="course_grid-lessons_number">
                                                            <i class="fa fa-video " style="color: blueviolet;  float:left"><small style="color: #444"> 20 Lesson</small></i>
                                                            {{-- <span></span> --}}
                                                            <i class="fa fa-book" aria-hidden="true" style="float: right; color:blueviolet"><small style="color: #444">6h of reading</small></i>
                                                            <div style="clear: both"></div>
                                                        </div>
                                                        <div class="course_grid_text">
                                                            <span>Be a horeos of MBOT by starting to learn this course</span></span>
                                                        </div>
                                                        <div class="course_statut">
                                                            <span style="color: rgb(250, 106, 39)" class="course_price">$110</span>
                                                            <div class="course_star">
                                                                <i class="fa fa-star course_star_icon" aria-hidden="true" style="color: rgb(250, 106, 39); width:8px; height:8px"></i>
                                                                <i class="fa fa-star course_star_icon" aria-hidden="true" style="color: rgb(250, 106, 39); width:8px; height:8px"></i>
                                                                <i class="fa fa-star course_star_icon" aria-hidden="true" style="color: rgb(250, 106, 39); width:8px; height:8px"></i>
                                                                <i class="fa fa-star course_star_icon" aria-hidden="true" style="color: rgb(250, 106, 39); width:8px; height:8px"></i>
                                                                <span class="course_rating">4.6 rating</span>
                                                            </div>
                                                            <div style="clear: both"></div>
                                                        </div>
                                                    {{--  <div class="teacher_name">Soft digital</div> --}}
                                                        <div class="course_grid_icons">
                                                        <i class="fas fa-users course_users_icon" style="float: left"><span> Students</span> </i>
                                                            <i class="fas fa-long-arrow-alt-right course_right_icon" style="float: right"></i>
                                                        </div>
                                                        <div style="clear: both"></div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-lg-3 item design ourSelection">

                                        <div class="course_card">

                                            <div class="course-grid_item">
                                                <a href="" style="text-decoration: none; color:black">
                                                    <img src="../public/fontend/image/UI-UX.jpg" alt="" class="img_fluid course_card_img" width="250px" >
                                                    <div class="course_card_grid_item">
                                                        <div class="course_grid-lessons_number">
                                                            <i class="fa fa-video " style="color: blueviolet;  float:left"><small style="color: #444"> 20 Lesson</small></i>
                                                            {{-- <span></span> --}}
                                                            <i class="fa fa-book" aria-hidden="true" style="float: right; color:blueviolet"><small style="color: #444">6h of reading</small></i>
                                                            <div style="clear: both"></div>
                                                        </div>
                                                        <div class="course_grid_text">
                                                            <span>Be a horeos of MBOT by starting to learn this course</span></span>
                                                        </div>
                                                        <div class="course_statut">
                                                            <span style="color: rgb(250, 106, 39)" class="course_price">$110</span>
                                                            <div class="course_star">
                                                                <i class="fa fa-star course_star_icon" aria-hidden="true" style="color: rgb(250, 106, 39); width:8px; height:8px"></i>
                                                                <i class="fa fa-star course_star_icon" aria-hidden="true" style="color: rgb(250, 106, 39); width:8px; height:8px"></i>
                                                                <i class="fa fa-star course_star_icon" aria-hidden="true" style="color: rgb(250, 106, 39); width:8px; height:8px"></i>
                                                                <i class="fa fa-star course_star_icon" aria-hidden="true" style="color: rgb(250, 106, 39); width:8px; height:8px"></i>
                                                                <span class="course_rating">4.6 rating</span>
                                                            </div>
                                                            <div style="clear: both"></div>
                                                        </div>
                                                    {{--  <div class="teacher_name">Soft digital</div> --}}
                                                        <div class="course_grid_icons">
                                                        <i class="fas fa-users course_users_icon" style="float: left"><span>214 Students</span> </i>
                                                            <i class="fas fa-long-arrow-alt-right course_right_icon" style="float: right"></i>
                                                        </div>
                                                        <div style="clear: both"></div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-lg-3 item development ourSelection">

                                        <div class="course_card">

                                            <div class="course-grid_item">
                                                <a href="" style="text-decoration: none; color:black">
                                                    <img src="../public/fontend/image/Web-Development-Tech-Media-Square.jpeg" alt="" class="img_fluid course_card_img" width="250px" >
                                                    <div class="course_card_grid_item">
                                                        <div class="course_grid-lessons_number">
                                                            <i class="fa fa-video " style="color: blueviolet;  float:left"><small style="color: #444"> 20 Lesson</small></i>
                                                            {{-- <span></span> --}}
                                                            <i class="fa fa-book" aria-hidden="true" style="float: right; color:blueviolet"><small style="color: #444">6h of reading</small></i>
                                                            <div style="clear: both"></div>
                                                        </div>
                                                        <div class="course_grid_text">
                                                            <span>Be a horeos of MBOT by starting to learn this course</span></span>
                                                        </div>
                                                        <div class="course_statut">
                                                            <span style="color: rgb(250, 106, 39)" class="course_price">$110</span>
                                                            <div class="course_star">
                                                                <i class="fa fa-star course_star_icon" aria-hidden="true" style="color: rgb(250, 106, 39); width:8px; height:8px"></i>
                                                                <i class="fa fa-star course_star_icon" aria-hidden="true" style="color: rgb(250, 106, 39); width:8px; height:8px"></i>
                                                                <i class="fa fa-star course_star_icon" aria-hidden="true" style="color: rgb(250, 106, 39); width:8px; height:8px"></i>
                                                                <i class="fa fa-star course_star_icon" aria-hidden="true" style="color: rgb(250, 106, 39); width:8px; height:8px"></i>
                                                                <span class="course_rating">4.6 rating</span>
                                                            </div>
                                                            <div style="clear: both"></div>
                                                        </div>
                                                    {{--  <div class="teacher_name">Soft digital</div> --}}
                                                        <div class="course_grid_icons">
                                                        <i class="fas fa-users course_users_icon" style="float: left"><span>214 Students</span> </i>
                                                            <i class="fas fa-long-arrow-alt-right course_right_icon" style="float: right"></i>
                                                        </div>
                                                        <div style="clear: both"></div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-lg-3 item development ourSelection">

                                        <div class="course_card">

                                            <div class="course-grid_item">
                                                <a href="" style="text-decoration: none; color:black">
                                                    <img src="../public/fontend/image/HTML-and-CSS.jpg" alt="" class="img_fluid course_card_img" width="250px" >
                                                    <div class="course_card_grid_item">
                                                        <div class="course_grid-lessons_number">
                                                            <i class="fa fa-video " style="color: blueviolet;  float:left"><small style="color: #444"> 20 Lesson</small></i>
                                                            {{-- <span></span> --}}
                                                            <i class="fa fa-book" aria-hidden="true" style="float: right; color:blueviolet"><small style="color: #444">6h of reading</small></i>
                                                            <div style="clear: both"></div>
                                                        </div>
                                                        <div class="course_grid_text">
                                                            <span>Be a horeos of MBOT by starting to learn this course</span></span>
                                                        </div>
                                                        <div class="course_statut">
                                                            <span style="color: rgb(250, 106, 39)" class="course_price">$110</span>
                                                            <div class="course_star">
                                                                <i class="fa fa-star course_star_icon" aria-hidden="true" style="color: rgb(250, 106, 39); width:8px; height:8px"></i>
                                                                <i class="fa fa-star course_star_icon" aria-hidden="true" style="color: rgb(250, 106, 39); width:8px; height:8px"></i>
                                                                <i class="fa fa-star course_star_icon" aria-hidden="true" style="color: rgb(250, 106, 39); width:8px; height:8px"></i>
                                                                <i class="fa fa-star course_star_icon" aria-hidden="true" style="color: rgb(250, 106, 39); width:8px; height:8px"></i>
                                                                <span class="course_rating">4.6 rating</span>
                                                            </div>
                                                            <div style="clear: both"></div>
                                                        </div>
                                                    {{--  <div class="teacher_name">Soft digital</div> --}}
                                                        <div class="course_grid_icons">
                                                        <i class="fas fa-users course_users_icon" style="float: left"><span>214 Students</span> </i>
                                                            <i class="fas fa-long-arrow-alt-right course_right_icon" style="float: right"></i>
                                                        </div>
                                                        <div style="clear: both"></div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                        </div>
                    </div>
                </div>
            </div>
      </div> 
    </section>
<!--end course gallery-->

<!--expert-->
    <div class="conatiner-fluid expert">
        <div class="container">
            <div class="ourExpert">
                <h1>Our experts</h1>
                <div class="row">
                    <div class="col-lg-6 ourExpert_content">
                        <div class="ourExpert_name">
                            <h3>Rachael Orumor</h3>
                        </div>
                        <div class="ourExpert_text">
                            <p>Tech entrepreneur, founder and CEO of Sens Orbit Nigeria and Soft Digital Rep. Benin. She is an International Software Development Engineer with reputable records of global Technical and professional experiences...</p>
                        </div>
                        <a href="htpp://rachaelo.com" class="get_started"> Read more</a>
                    </div>

                    <div class="col-lg-6">
                        <img src="../public/fontend/image/rachael_Orumor.jpg" alt="Rachael Orumor" width="250px" height="250px">
                        <i class="fas fa-angle-right exp" ></i>
                    </div>
                </div>
            </div>


        </div>

    </div>
{{-- expert end --}}

<!--comments-->
    <div class="container">
        <div class="comments">
            <h1>Our Students says</h1>
            <div class="row">
                <div class="col-lg-6 comments_img">
                    <img src="../public/fontend/image/justine.jpg" alt="user" width="250px">
                </div>
                <div class="col-lg-6 comments_content">
                    <div class="comments_user_text">
                        <p><i class="fa fa-angle-double-left" aria-hidden="true"></i> Tech entrepreneur, founder and CEO of Sens Orbit Nigeria and Soft Digital Rep. Benin. She is an International Software Development Engineer with reputable records of global Technical and professional experiences. <i class="fa fa-angle-double-right" aria-hidden="true"></i> </p>
                    </div>
                    <div class="comments_user_name">
                        <h3>Justine Mehounou</h3>
                        <span>Developpeuse web junior</span>
                    </div>
                </div>
                <div style="clear: both"></div>
                <div class="col-lg-6 hidden">
                    <div class="comments_img">
                        <img src="../public/fontend/image/user.jpg" alt="user" width="50px">
                    </div>
                    <div class="user_name"> Justine Mehounou</div>
                    <p>Aperiam illum possimus natus perspiciatis ipsam, dolorem corporis mollitia.</p>
                </div>

            </div>
            <div class="container icons_defilement" style="text-align: center; font-size:20px; font-weight: bold">
                <i class="fa fa-angle-left icons_defil_item" aria-hidden="true"></i>
                <span class="active">1</span><span>2</span><span>3</span>
                <i class="fa fa-angle-right icons_defil_item" aria-hidden="true"></i>
            </div>
        </div>

    </div>
<!--comments end-->

<!--writeUs-->
    <div class="container">

        <div class="writeUs">

            <div class="writeUs_text">
                <h2>Write us</h2>
                <p>Let us know your appointment to the plaform.</p>
            </div>

            <form class="d-flex">
                <input type="text" name="writeUs" id="writeUs_input">
                <button type="submit" class="btn btn-dark" id="writeUs_button">Send</button>
            </form>

        </div>

    </div>
<!--writeUs end-->

@include('partial.footer')
