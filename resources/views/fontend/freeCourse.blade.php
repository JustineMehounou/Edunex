@include('partial.header')
@section('title')
    Free Courses
@endsection
<link rel="stylesheet" href="../public/fontend/css/header.css">

<div class="container-fluid">
    <div class="container free_course">
        <h1>Free Courses</h1>
        <div class="course">

            <div class="course_item">
                <img src="../public/fontend/image/the-basics-of-illustrator.png" alt="image" width="260px" height="146px"  style="float: left; border:1px solid #05043d">
                <div class="course_content">
                    <h4>Design</h4>
                    <span>Abode Illustrator </span>
                    <p style="margin-top: 0px">Create a beautiful vector art with illustrator. Learn how to drawn and make a beautiful icons, logo and more vectors art.</p>
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
                <img src="../public/fontend/image/programmation.jpg" alt="image" width="260px" height="146px"  style="float: left; border:1px solid #05043d">
                <div class="course_content">
                    <h4>Programmation</h4>
                    <span>HTML & CSS</span>
                    <p style="margin-top: 0px">learn the basics of html and css to create a awesome website, blog and more. Learn this course to give life to your ideas.</p>
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
                <img src="../public/fontend/image/robotics1.jpg" alt="image" width="260px" height="146px"  style="float: left; border:1px solid #05043d">
                <div class="course_content">
                    <h4>Robotic</h4>
                    <span>Robotics for kids</span>
                    <p style="margin-top: 0px">Build and pilot  your first robot. You will learn in this course the fundamentals of a robot and build your own robot.</p>
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
                <img src="../public/fontend/image//robotics2.jpg" alt="image" width="260px" height="146px"  style="float: left; border:1px solid #05043d ">
                <div class="course_content">
                    <h4>Robotic</h4>
                    <span>Arduino for kids</span>
                    <p style="margin-top: 0px">Learn how to pilot a robot with arduino language programmation. Build and pilot your first robot.</p>
                    <div class="course_level" style="float: right">
                        <span>Medium</span>
                        <i class="fas fa-clock">4h of reading</i>
                    </div>

                </div>

            </div>
            <div style="clear: both"></div>

        </div>
    </div>
    <div class="container icons_defilement" style="text-align: center; font-size:20px; font-weight: bold">
        <i class="fa fa-angle-left icons_defil_item" aria-hidden="true"></i>
        <span class="active">1</span><span>2</span><span>3</span><span>4</span>
        <i class="fa fa-angle-right icons_defil_item" aria-hidden="true"></i>
    </div>
</div>

@include('partial.footer')
