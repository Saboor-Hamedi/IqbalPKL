<?php require_once('inic/header.php'); ?>

<body>

    <!-- mobile menu -->
<?php require_once realpath('inic/mobileMenu.php');?>
<!-- mobile menu end -->
    <section>
        <!-- TOP BAR -->
        <div class="ed-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="ed-com-t1-right">
                            <ul>
                                <!-- <li><a href="#!" data-toggle="modal" data-target="#modal1">Login</a> -->
                                <li><a href="login/login.php">Sign in</a></li>
                                </li>
                                <li>
                                    <a href="#!" data-toggle="modal" data-target="#modal2">Sign Up</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- menu -->
        <div class="top-logo" data-spy="affix" data-offset-top="250">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wed-logo">
                            <a href=""><img src="images/logo.png" alt="" />
                            </a>
                        </div>
                        <div class="main-menu">
                            <ul>
                                <li><a href="/">Home</a> </li>
                                <li><a href="contact-us.php">Contact us</a> </li>
                                <li><a href="about.php" class="mm-arr">About us</a></li>
                                <li><a href="events.php">Events</a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- menu end -->
        <div class="search-top">
            
            </div>
    </section>
    <!--END HEADER SECTION-->

    <!-- SLIDER -->
    <section>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item slider1 active">
                    <img src="images/slider/1.jpg" alt="">
                    <div class="carousel-caption slider-con">
                        <h2>Welcome to <span>University</span></h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                        <a href="#" class="bann-btn-1">Admin Users</a><a href="#" class="bann-btn-2">Read More</a>
                    </div>
                </div>
                <div class="item">
                    <img src="images/slider/2.jpg" alt="">
                    <div class="carousel-caption slider-con">
                        <h2>Admission open <span>2018</span></h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                        <a href="#" class="bann-btn-1">Admission</a><a href="#" class="bann-btn-2">Read More</a>
                    </div>
                </div>
                <div class="item">
                    <img src="images/slider/3.jpg" alt="">
                    <div class="carousel-caption slider-con">
                        <h2>Education <span>Master</span></h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                        <a href="#" class="bann-btn-1">Admin Users</a><a href="#" class="bann-btn-2">Read More</a>
                    </div>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <i class="fa fa-chevron-left slider-arr"></i>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <i class="fa fa-chevron-right slider-arr"></i>
            </a>
        </div>
    </section>

    <!-- QUICK LINKS -->
    <section class="">
        <div class="container">
            <div class="row">
                <div class="wed-hom-ser">
                    <ul>

                        <li>
                            <a href="all-courses.php" class="waves-effect waves-light btn-large wed-pop-ser-btn"><img src="images/icon/h-ic4.png" alt=""> Courses</a>
                        </li>
                        <li>
                            <a href="seminar.html" class="waves-effect waves-light btn-large wed-pop-ser-btn"><img src="images/icon/h-ic3.png" alt=""> Seminar</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- DISCOVER MORE -->
    <section>
        <div class="container com-sp pad-bot-70">
            <div class="row">
                <div class="con-title">
                    <h2>Discover <span>More</span></h2>
                    <p>Fusce id sem at ligula laoreet hendrerit venenatis sed purus. Ut pellentesque maximus lacus, nec pharetra augue.</p>
                </div>
            </div>
            <div class="row">
                <div class="ed-course">
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="ed-course-in">
                            <a class="course-overlay" href="studentDashboard.php">
                                <img src="images/h-cam.jpg" alt="">
                                <span>Students profile</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="ed-course-in">
                            <a class="course-overlay" href="research.html">
                                <img src="images/h-res.jpg" alt="">
                                <span>Research & Education</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="ed-course-in">
                            <a class="course-overlay" href="all-courses.php">
                                <img src="images/h-about1.jpg" alt="">
                                <span>Couse</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="ed-course-in">
                            <a class="course-overlay" href="db-time-line.html">
                                <img src="images/h-adm.jpg" alt="">
                                <span>Exam Time Line</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="ed-course-in">
                            <a class="course-overlay" href="seminar.html">
                                <img src="images/h-cam1.jpg" alt="">
                                <span>Seminar 2018</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="ed-course-in">
                            <a class="course-overlay" href="events.php">
                                <img src="images/h-res1.jpg" alt="">
                                <span>Research & Education</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- POPULAR COURSES -->
    <section class="pop-cour">
        <div class="container com-sp pad-bot-70">
            <div class="row">
                <div class="con-title">
                    <h2>Popular <span>Courses</span></h2>
                    <p>Fusce id sem at ligula laoreet hendrerit venenatis sed purus. Ut pellentesque maximus lacus, nec pharetra augue.</p>
                </div>
            </div>
            <div class="row">
                <?php $sql = 'SELECT * FROM posts ORDER BY RAND() DESC LIMIT 4   '; ?>
                <?php $post = $db->link->query($sql); ?>
                <?php if (mysqli_num_rows($post) > 0) { ?>
                    <?php while ($rows = $post->fetch_assoc()) { ?>
                        <div class="col s6  cusomt-column">
                            <div class="home-top-cour">
                                <div class="col-md-3"> <img src="images/course/sm-1.jpg" alt=""> </div>

                                <div class="col-md-9 home-top-cour-desc">
                                    <a href="course-details.php">
                                        <h5><?php echo $rows['title']; ?></h5>
                                    </a>
                                    <div class="card-content">
                                        <p><?php echo $helper->loadMore($rows['body'], 2) ?></span>
                                    </div>
                                    <div class="hom-list-share ">
                                        <ul>
                                            <li><a href="course-details.php?post_id=<?php echo base64_encode($rows['id']); ?>"><i class="fa fa-bar-chart" aria-hidden="true"></i> Book Now</a> </li>
                                            <li><a href="course-details.php?post_id=<?php echo base64_encode($rows['id']); ?>"><i class="fa fa-eye" aria-hidden="true"></i>10 Aavailable</a> </li>
                                            <li><a href="course-details.php?post_id=<?php echo base64_encode($rows['id']); ?>"><i class="fa fa-share-alt" aria-hidden="true"></i> 570</a> </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                    <?php } ?>
                <?php } else { ?>
                    <div class="con-title">
                        <h2>No <span>Courses</span> announced yet!</h2>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <!-- UPCOMING EVENTS -->
    <section>
        <div class="container com-sp pad-bot-0 ">
            <div class="row">
                <div class="col-md-6">
                    <!--<div class="ho-ex-title">
<h4>Upcoming Event</h4>
</div>-->
                    <div class="ho-ev-latest ho-ev-latest-bg-1">
                        <div class="ho-lat-ev">
                            <h4>Upcoming Event</h4>
                            <p>Nulla at velit convallis, venenatis lacus quis, efficitur lectus.</p>
                        </div>
                    </div>
                    <div class="ho-event ho-event-mob-bot-sp">
                        <ul>
                            <li>
                                <div class="ho-ev-date"><span>07</span><span>jan,2018</span>
                                </div>
                                <div class="ho-ev-link">
                                    <a href="events.php">
                                        <h4>Latinoo College Expo 2018</h4>
                                    </a>
                                    <p>Nulla at velit convallis, venenatis lacus quis, efficitur lectus.</p>
                                    <span>9:15 am – 5:00 pm</span>
                                </div>
                            </li>
                            <li>
                                <div class="ho-ev-date"><span>12</span><span>jan,2018</span>
                                </div>
                                <div class="ho-ev-link">
                                    <a href="events.php">
                                        <h4>Training at Team Fabio Clemente</h4>
                                    </a>
                                    <p>Nulla at velit convallis venenatis.</p>
                                    <span>9:15 am – 5:00 pm</span>
                                </div>
                            </li>
                            <li>
                                <div class="ho-ev-date"><span>26</span><span>jan,2018</span>
                                </div>
                                <div class="ho-ev-link">
                                    <a href="events.php">
                                        <h4>Nulla at velit convallis</h4>
                                    </a>
                                    <p>Nulla at velit convallis, venenatis lacus quis, efficitur lectus.</p>
                                    <span>9:15 am – 5:00 pm</span>
                                </div>
                            </li>
                            <li>
                                <div class="ho-ev-date"><span>18</span><span>jan,2018</span>
                                </div>
                                <div class="ho-ev-link">
                                    <a href="events.php">
                                        <h4>Admissions Information Session and Tour</h4>
                                    </a>
                                    <p>Nulla at velit convallis, venenatis lacus quis, efficitur lectus.</p>
                                    <span>9:15 am – 5:00 pm</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 ">
                    <!--<div class="ho-ex-title">
<h4>Upcoming Event</h4>
</div>-->
                    <div class="ho-ev-latest ho-ev-latest-bg-3">
                        <div class="ho-lat-ev">
                            <h4>Register & Login</h4>
                            <p>Student area velit convallis venenatis lacus quis, efficitur lectus.</p>
                        </div>
                    </div>
                    <div class="ho-st-login">
                        <ul class="tabs tabs-hom-reg">
                            <li class="tab col s6"><a href="#hom-vijay">Register</a>
                            </li>
                            <li class="tab col s6"><a href="#hom_log">Login</a>
                            </li>
                        </ul>
                        <div id="hom-vijay" class="col s12">
                            <form class="col s12">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input type="text" class="validate">
                                        <label>User name</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input type="text" class="validate">
                                        <label>Email id</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input type="password" class="validate">
                                        <label>Password</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input type="password" class="validate">
                                        <label>Confirm password</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input type="submit" value="Register" class="waves-effect waves-light light-btn">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div id="hom_log" class="col s12">
                            <form class="col s12">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input type="text" class="validate">
                                        <label>Student user name</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input type="text" class="validate">
                                        <label>Password</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input type="submit" value="Login" class="waves-effect waves-light light-btn">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- NEWS AND EVENTS -->
    <section>
        <div class="container com-sp">
            <div class="row">
                <div class="con-title">
                    <h2>News and <span>Events</span></h2>
                    <p>Fusce id sem at ligula laoreet hendrerit venenatis sed purus. Ut pellentesque maximus lacus, nec pharetra augue.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="bot-gal h-gal ho-event-mob-bot-sp">
                        <h4>Photo Gallery</h4>
                        <ul>
                            <li><img class="materialboxed" data-caption="Education master image captions" src="images/ami/8.jpg" alt="">
                            </li>
                            <li><img class="materialboxed" data-caption="Education master image captions" src="images/ami/9.jpg" alt="">
                            </li>
                            <li><img class="materialboxed" data-caption="Education master image captions" src="images/ami/10.jpg" alt="">
                            </li>
                            <li><img class="materialboxed" data-caption="Education master image captions" src="images/ami/11.jpg" alt="">
                            </li>
                            <li><img class="materialboxed" data-caption="Education master image captions" src="images/ami/1.jpg" alt="">
                            </li>
                            <li><img class="materialboxed" data-caption="Education master image captions" src="images/ami/2.jpg" alt="">
                            </li>
                            <li><img class="materialboxed" data-caption="Education master image captions" src="images/ami/3.jpg" alt="">
                            </li>
                            <li><img class="materialboxed" data-caption="Education master image captions" src="images/ami/4.jpg" alt="">
                            </li>
                            <li><img class="materialboxed" data-caption="Education master image captions" src="images/ami/5.jpg" alt="">
                            </li>
                            <li><img class="materialboxed" data-caption="Education master image captions" src="images/ami/6.jpg" alt="">
                            </li>
                            <li><img class="materialboxed" data-caption="Education master image captions" src="images/ami/7.jpg" alt="">
                            </li>
                            <li><img class="materialboxed" data-caption="Education master image captions" src="images/ami/8.jpg" alt="">
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="bot-gal h-vid ho-event-mob-bot-sp">
                        <h4>Video Gallery</h4>
                        <iframe src="https://www.youtube.com/embed/2WqFtiR4-F4?autoplay=0&amp;showinfo=0&amp;controls=0" allowfullscreen></iframe>
                        <h5>Maecenas sollicitudin lacinia</h5>
                        <p>Maecenas finibus neque a tellus auctor mattis. Aliquam tempor varius ornare. Maecenas dignissim leo leo, nec posuere purus finibus vitae.</p>
                        <p>Quisque vitae neque at tellus malesuada convallis. Phasellus in lectus vitae ex euismod interdum non a lorem. Nulla bibendum. Curabitur mi odio, tempus quis risus cursus.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="bot-gal h-blog ho-event">
                        <h4>News & Event</h4>
                        <div class="ho-event">
                            <ul>
                                <li>
                                    <div class="ho-ev-date"><span>07</span><span>jan,2018</span>
                                    </div>
                                    <div class="ho-ev-link">
                                        <a href="events.php">
                                            <h4>Latinoo College Expo 2018</h4>
                                        </a>
                                        <p>Nulla at velit convallis, venenatis lacus quis, efficitur lectus.</p>
                                        <span>9:15 am – 5:00 pm</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="ho-ev-date"><span>12</span><span>jan,2018</span>
                                    </div>
                                    <div class="ho-ev-link">
                                        <a href="events.php">
                                            <h4>Training at Team Fabio Clemente</h4>
                                        </a>
                                        <p>Nulla at velit convallis venenatis.</p>
                                        <span>9:15 am – 5:00 pm</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="ho-ev-date"><span>26</span><span>jan,2018</span>
                                    </div>
                                    <div class="ho-ev-link">
                                        <a href="events.php">
                                            <h4>Nulla at velit convallis</h4>
                                        </a>
                                        <p>Nulla at velit convallis, venenatis lacus quis, efficitur lectus.</p>
                                        <span>9:15 am – 5:00 pm</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="ho-ev-date"><span>18</span><span>jan,2018</span>
                                    </div>
                                    <div class="ho-ev-link">
                                        <a href="events.php">
                                            <h4>Admissions Information Session and Tour</h4>
                                        </a>
                                        <p>Nulla at velit convallis, venenatis lacus quis, efficitur lectus.</p>
                                        <span>9:15 am – 5:00 pm</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php require_once('inic/footer.php'); ?>