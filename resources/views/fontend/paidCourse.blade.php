@include('partial.header')
@section('title')
    Paid Courses
@endsection
<link rel="stylesheet" href="../public/fontend/css/header.css">

<div class="container-fluid " id="paidCourse_container">

    <div class="aside" style="float: left">
        <h1>Category</h1>
        <div class="category_in_paid_course">
           <ul>
               <li><a href="#">Design</a></li>
               <li><a href="#">Robotique</a></li>
               <li><a href="#">Web Developpement</a></li>
               <li><a href="#">Programmation</a></li>
               <li><a href="#">Entrepeunariat</a></li>
           </ul>

        </div>

    </div>

    <div class="container paid_course" style="float: right">
        <h1>Paid Courses</h1>
        <div class="course">

            <div class="course_item">
               <a href=""><img src="../public/fontend/image/the-basics-of-illustrator.png" alt="image" width="260px" height="146px"  style="float: left; border:1px solid #05043d"></a>
                <div class="course_content">
                    <a href=""><h4>Design</h4></a>
                    <a href=""><span style="float: left;">Abode Illustrator </span></a>
                    <span style="float: right; color:peru; font-weight:bold">105 $US</span>
                    <p>Create a beautiful vector art with illustrator. Learn how to drawn and make a beautiful icons, logo and more vectors art.</p>
                    <div style="clear: both"></div>
                    <div class="course_level" style="float: right">
                        <span>Easy</span>
                        <i class="fas fa-clock">2h of reading</i>
                    </div>

                </div>

            </div>
            <div style="clear: both"></div>

        </div>

        <div class="course">

            <div class="course_item">
                <a href=""><img src="../public/fontend/image/programmation.jpg" alt="image" width="260px" height="146px"  style="float: left; border:1px solid #05043d"></a>
                <div class="course_content">
                    <a href=""><h4>Programmation</h4></a>
                   <a href=""> <span style="float: left;">HTML & CSS</span></a>
                    <span style="float: right; color:peru; font-weight:bold">105 $US</span>
                    <p>learn the basics of html and css to create a awesome website, blog and more. Learn this course to give life to your ideas.</p>
                    <div style="clear: both"></div>
                    <div class="course_level" style="float: right">
                        <span>Easy</span>
                        <i class="fas fa-clock">3h of reading</i>
                    </div>

                </div>

            </div>
            <div style="clear: both"></div>

        </div>

        <div class="course">

            <div class="course_item">
                <a href=""><img src="../public/fontend/image/robotics1.jpg" alt="image" width="260px" height="146px"  style="float: left; border:1px solid #05043d"></a>
                <div class="course_content">
                    <a href=""><h4>Robotic</h4></a>
                    <a href=""><span style="float: left;">Robotics for kids</span></a>
                    <span style="float: right; color:peru; font-weight:bold">105 $US</span>
                    <p>Build and pilot  your first robot. You will learn in this course the fundamentals of a robot and build your own robot.</p>
                    <div style="clear: both"></div>
                    <div class="course_level" style="float: right">
                        <span>Easy</span>
                        <i class="fas fa-clock">6h of reading</i>
                    </div>

                </div>

            </div>
            <div style="clear: both"></div>

        </div>

        <div class="course">

            <div class="course_item">
                <a href=""><img src="../public/fontend/image//robotics2.jpg" alt="image" width="260px" height="146px"  style="float: left; border:1px solid #05043d "></a>
                <div class="course_content">
                    <a href=""><h4>Robotic</h4></a>
                    <a href=""><span style="float: left;">Robotics for kids</span></a>
                    <span style="float: right; color:peru; font-weight:bold">105 $US</span>
                    <p>Learn how to pilot a robot with arduino language programmation. Build and pilot your first robot.</p>
                    <div style="clear: both"></div>
                    <div class="course_level" style="float: right">
                        <span>Medium</span>
                        <i class="fas fa-clock">4h of reading</i>
                    </div>

                </div>

            </div>
            <div style="clear: both"></div>

        </div>
    </div>
    <div  style="clear: both"></div>
    <div class="container icons_defilement" style="text-align: center; font-size:20px; font-weight: bold; margin-left: 20%">
        <i class="fa fa-angle-left icons_defil_item" aria-hidden="true"></i>
        <span class="active">1</span><span>2</span><span>3</span><span>4</span>
        <i class="fa fa-angle-right icons_defil_item" aria-hidden="true"></i>
    </div>

</div>

@include('partial.footer')
