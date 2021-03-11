<?php require_once('inic/header.php'); ?>
<?php $post_id =0; ?>
<?php if (!isset($_GET['post_id']) && empty($_GET['post_id'])) { ?>
   <script>location.replace('404.html');</script>
       
   
<?php } else { ?>
    <?php $post_id = strip_tags(base64_decode($_GET['post_id']));; ?>
    <?php if(isset($_GET['post_id']) && !empty($_GET['post_id'])){ ?>
        <?php if (filter_var($_GET['post_id'], FILTER_VALIDATE_URL)) { ?>
            <?php $post_id = $_GET['post_id'];?>
<?php } ?>


<!-- MOBILE MENU -->
<section>
    <div class="ed-mob-menu">
        <div class="ed-mob-menu-con">
            <div class="ed-mm-left">
                <div class="wed-logo">
                    <a href="index-2.php"><img src="images/logo.png" alt="" />
                    </a>
                </div>
            </div>
            <div class="ed-mm-right">
                <div class="ed-mm-menu">
                    <a href="#!" class="ed-micon"><i class="fa fa-bars"></i></a>
                    <div class="ed-mm-inn">
                        <a href="#!" class="ed-mi-close"><i class="fa fa-times"></i></a>
                        <h4>Admin Users</h4>
                        <ul>
                            <li><a href="course-details.php">Accounting/Finance</a></li>
                            <li><a href="course-details.php">civil engineering</a></li>
                            <li><a href="course-details.php">Art/Design</a></li>
                            <li><a href="course-details.php">Marine Engineering</a></li>
                            <li><a href="course-details.php">Business Management</a></li>
                            <li><a href="course-details.php">Journalism/Writing</a></li>
                            <li><a href="course-details.php">Physical Education</a></li>
                            <li><a href="course-details.php">Political Science</a></li>
                            <li><a href="course-details.php">Sciences</a></li>
                            <li><a href="course-details.php">Statistics</a></li>
                            <li><a href="course-details.php">Web Design/Development</a></li>
                            <li><a href="course-details.php">SEO</a></li>
                            <li><a href="course-details.php">Google Business</a></li>
                            <li><a href="course-details.php">Graphics Design</a></li>
                            <li><a href="course-details.php">Networking Courses</a></li>
                            <li><a href="course-details.php">Information technology</a></li>
                        </ul>
                        <h4>User Account</h4>
                        <ul>
                            <li><a href="#!" data-toggle="modal" data-target="#modal1">Sign in</a></li>
                            <li><a href="#!" data-toggle="modal" data-target="#modal2">Register</a></li>
                        </ul>
                        <h4>All Pages</h4>
                        <ul>
                           
                            <li><a href="about.php">About us</a></li>
                            <li><a href="admission.html">Admission</a></li>
                            <li><a href="all-courses.html">Admin Users</a></li>
                            <li><a href="course-details.php">Course details</a></li>
                            <li><a href="awards.html">Awards</a></li>
                            <li><a href="seminar.html">Seminar</a></li>
                            <li><a href="events.php">Events</a></li>
                            <li><a href="event-details.html">Event details</a></li>
                            <li><a href="event-register.html">Event register</a></li>
                            <li><a href="contact-us.php">Contact us</a></li>
                        </ul>
                        <h4>User Profile</h4>
                        <ul>
                            <li><a href="studentDashboard.php">User profile</a></li>
                            <li><a href="db-courses.html">Courses</a></li>
                            <li><a href="db-exams.html">Exams</a></li>
                            <li><a href="db-profile.html">Prfile</a></li>
                            <li><a href="db-time-line.html">Time line</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--HEADER SECTION-->
<section>
    <!-- TOP BAR -->
    <div class="ed-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="ed-com-t1-left">
                        <ul>
                            <li><a href="#">Contact: Lake Road, Suite 180 Farmington Hills, U.S.A.</a>
                            </li>
                            <li><a href="#">Phone: +101-1231-1231</a>
                            </li>
                        </ul>
                    </div>
                    <div class="ed-com-t1-right">
                        <ul>
                            <!-- <li><a href="#!" data-toggle="modal" data-target="#modal1">Sign in</a> -->
                            <li><a href="login/login.php">Sign in</a></li>
                            </li>
                            <li><a href="#!" data-toggle="modal" data-target="#modal2">Sign Up</a>
                            </li>
                        </ul>
                    </div>
                    <div class="ed-com-t1-social">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- LOGO AND MENU SECTION -->
    <div class="top-logo" data-spy="affix" data-offset-top="250">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wed-logo">
                        <a href="/"><img src="images/logo.png" alt="" />
                        </a>
                    </div>
                    <div class="main-menu">
                        <ul>
                            <li><a href="/">Home</a>
                            </li>
                            <li class="about-menu">
                                <a href="about.php" class="mm-arr">About us</a>
                                <!-- MEGA MENU 1 -->
                                
                            </li>
                         
                            <!--<li><a class='dropdown-button ed-sub-menu' href='#' data-activates='dropdown1'>Courses</a></li>-->
                            
                           
                            <?php if(isset($_SESSION['email']) == null
                                        && empty($_SESSION['email'])
                                     
                                    ) {?>
                                   
                            <?php }else{ ?>
                                <li class="cour-menu">
                                <a href="#!" class="mm-arr">All Pages</a>
                                <!-- MEGA MENU 1 -->
                                <div class="mm-pos">
                                    <div class="cour-mm m-menu">
                                        <div class="m-menu-inn">
                                            <div class="mm1-com mm1-cour-com mm1-s3">
                                                <h4>Frontend pages:1</h4>
                                                <ul>
                                                    <li><a href="index-2.php">Home</a></li>
                                                    <li><a href="index-1.html">Home - 1</a></li>
                                                    <li><a href="all-courses.html">Admin Users</a></li>
                                                    <li><a href="course-details.php">Course Details</a></li>
                                                    <li><a href="about.php">About us</a></li>
                                                    <li><a href="admission.html">admission</a></li>
                                                    <li><a href="awards.html">awards</a></li>
                                                    <li><a href="blog.html">blog</a></li>
                                                    <li><a href="blog-details.html">blog details</a></li>
                                                    <li><a href="contact-us.php">contact us</a></li>
                                                    <li><a href="departments.html">Departments</a></li>
                                                    <li><a href="events.php">events</a></li>
                                                    <li><a href="event-details.html">event details</a></li>
                                                    <li><a href="event-register.html">event register</a></li>
                                                </ul>
                                            </div>
                                            <div class="mm1-com mm1-cour-com mm1-s3">
                                                <h4>Frontend pages:2</h4>
                                                <ul>
                                                    <li><a href="facilities.html">facilities</a></li>
                                                    <li><a href="facilities-detail.html">facilities detail</a></li>
                                                    <li><a href="research.html">research</a></li>
                                                    <li><a href="seminar.html">seminar</a></li>
                                                    <li><a href="gallery-photo.html">gallery photo</a></li>
                                                </ul>
                                                <h4 class="ed-dr-men-mar-top">User Dashboard</h4>
                                                <ul>
                                                    <li><a href="studentDashboard.php">Student profile</a></li>
                                                    <li><a href="db-courses.html">Dashboard courses</a></li>
                                                    <li><a href="db-exams.html">Dashboard exams</a></li>
                                                    <li><a href="db-profile.html">Dashboard profile</a></li>
                                                    <li><a href="db-time-line.html">Dashboard timeline</a></li>
                                                </ul>
                                            </div>
                                            <div class="mm1-com mm1-cour-com mm1-s3">
                                                <h4>Admin panel:1</h4>
                                                <ul>
                                                    <li><a href="admin.php">admin</a></li>
                                                    <li><a href="admin-add-courses.php">Add new course</a></li>
                                                    <li><a href="users.php">Admin Users</a></li>
                                                    <li><a href="admin-student-details.html">Student details</a></li>
                                                    <li><a href="admin-user-add.php">Add new user</a></li>
                                                    <li><a href="admin-user-all.php">All users</a></li>
                                                    <li><a href="admin-panel-setting.php">Admin setting</a></li>
                                                    <li><a href="admin-event-add.html">event add</a></li>
                                                    <li><a href="admin-event-all.php">event all</a></li>
                                                    <li><a href="admin-setting.php">Admin Setting</a></li>
                                                    <li><a href="admin-slider.php">Slider setting</a></li>
                                                    <li><a href="admin-slider-edit.html">Slider edit</a></li>
                                                    <li><a href="admin-course-details.php">course details</a></li>
                                                    <li><a href="admin-login.html">admin login</a></li>
                                                </ul>
                                            </div>
                                            <div class="mm1-com mm1-cour-com mm1-s3">
                                                <h4>Admin panel:2</h4>
                                                <ul>
                                                    <li><a href="admin-event-edit.html">event edit</a></li>
                                                    <li><a href="admin-exam-add.html">exam add</a></li>
                                                    <li><a href="admin-exam-all.html">exam all</a></li>
                                                    <li><a href="admin-exam-edit.html">exam edit</a></li>
                                                    <li><a href="admin-export-data.php">export data</a></li>
                                                    <li><a href="admin-import-data.html">import data</a></li>
                                                    <li><a href="admin-job-add.html">Add new jobs</a></li>
                                                    <li><a href="admin-job-all.html">All jobs</a></li>
                                                    <li><a href="admin-job-edit.html">Edit job</a></li>
                                                    <li><a href="admin-main-menu.php">main menu</a></li>
                                                    <li><a href="admin-page-add.php">Add new page</a></li>
                                                    <li><a href="admin-page-all.php">All pages</a></li>
                                                    <li><a href="admin-page-edit.php">Edit page</a></li>
                                                    <li><a href="admin-forgot.html">forgot password</a></li>
                                                </ul>
                                            </div>
                                            <div class="mm1-com mm1-cour-com mm1-s4">
                                                <h4>Admin panel:3</h4>
                                                <ul>
                                                    <li><a href="admin-quick-link.php">quick link</a></li>
                                                    <li><a href="admin-seminar-add.html">Add new seminar</a></li>
                                                    <li><a href="admin-seminar-all.html">All seminar</a></li>
                                                    <li><a href="admin-seminar-edit.html">Edit seminar</a></li>
                                                    <li><a href="admin-seminar-enquiry.html">Semester enquiry</a></li>
                                                    <li><a href="admin-all-enquiry.php">All enquiry</a></li>
                                                    <li><a href="admin-view-enquiry.html">All enquiry view</a></li>
                                                    <li><a href="admin-event-enquiry.html">event enquiry</a></li>
                                                    <li><a href="admin-admission-enquiry.php">Admission enquiry</a></li>
                                                    <li><a href="admin-common-enquiry.html">common enquiry</a></li>
                                                    <li><a href="admin-course-enquiry.html">course enquiry</a></li>
                                                    <li><a href="admin-all-menu.html">menu all</a></li>
                                                    <li><a href="admin-about-menu.php">Menu - About</a></li>
                                                    <li><a href="admin-admission-menu.php">Menu - admission</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <?php } ?>
                            
                            <li><a href="events.php">Events</a>
                            </li>
                            
                            </li>
                            <li><a href="contact-us.php">Contact us</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="all-drop-down-menu">

                </div>

            </div>
        </div>
    </div>
    <div class="search-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="search-form">
                        <form>
                            <div class="sf-type">
                                <div class="sf-input">
                                    <input type="text" id="sf-box" placeholder="Search course and discount courses">
                                </div>
                                <div class="sf-list">
                                    <ul>
                                        <li><a href="course-details.php">Accounting/Finance</a></li>
                                        <li><a href="course-details.php">civil engineering</a></li>
                                        <li><a href="course-details.php">Art/Design</a></li>
                                        <li><a href="course-details.php">Marine Engineering</a></li>
                                        <li><a href="course-details.php">Business Management</a></li>
                                        <li><a href="course-details.php">Journalism/Writing</a></li>
                                        <li><a href="course-details.php">Physical Education</a></li>
                                        <li><a href="course-details.php">Political Science</a></li>
                                        <li><a href="course-details.php">Sciences</a></li>
                                        <li><a href="course-details.php">Statistics</a></li>
                                        <li><a href="course-details.php">Web Design/Development</a></li>
                                        <li><a href="course-details.php">SEO</a></li>
                                        <li><a href="course-details.php">Google Business</a></li>
                                        <li><a href="course-details.php">Graphics Design</a></li>
                                        <li><a href="course-details.php">Networking Courses</a></li>
                                        <li><a href="course-details.php">Information technology</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sf-submit">
                                <input type="submit" value="Search Course">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--END HEADER SECTION-->

<!--SECTION START-->
<section>
    <div class="container com-sp pad-bot-70 pg-inn">
        <div class="row">
            <div class="cor">
                <div class="col-md-3">
                    <div class="cor-top-deta cor-side-com">
                        <div class="cor-top-deta">
                            <div class="ho-st-login cor-apply field-com">
                                <div class="col s12">
                                    <form class="col s12">
                                        <div class="cor-left-app-tit">
                                            <h4>Apply This Course</h4>
                                            <p>Nulla at velit convallis lectus.</p>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input type="text" class="validate">
                                                <label>Full Name</label>
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
                                                <input type="text" class="validate">
                                                <label>Phone</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <select>
                                                    <option value="" disabled selected>Select Course</option>
                                                    <option value="1">Option 1</option>
                                                    <option value="2">Option 2</option>
                                                    <option value="3">Option 3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input type="submit" value="APPLY NOW" class="waves-effect waves-light light-btn">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cor-side-com">
                        <div class="">
                            <div class="de-left-tit">
                                <h4>Upcoming Event</h4>
                            </div>
                        </div>
                        <div class="ho-event">
                            <ul>
                                <li>
                                    <div class="ho-ev-link ho-ev-link-full">
                                        <a href="#">
                                            <h4>Workshop PHP</h4>
                                        </a>
                                        <p>Nulla at velit convallis venenatis.</p>
                                        <span>9:15 am – 5:00 pm</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="ho-ev-link ho-ev-link-full">
                                        <a href="#">
                                            <h4>Workshop PHP</h4>
                                        </a>
                                        <p>Nulla at velit convallis venenatis.</p>
                                        <span>9:15 am – 5:00 pm</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="ho-ev-link ho-ev-link-full">
                                        <a href="#">
                                            <h4>Workshop PHP</h4>
                                        </a>
                                        <p>Nulla at velit convallis venenatis.</p>
                                        <span>9:15 am – 5:00 pm</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="ho-ev-link ho-ev-link-full">
                                        <a href="#">
                                            <h4>Workshop PHP</h4>
                                        </a>
                                        <p>Nulla at velit convallis venenatis.</p>
                                        <span>9:15 am – 5:00 pm</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <!-- start php code -->
                    <div class="cor-mid-img">
                        <img src="images/course.jpg" alt="">
                    </div>
                    <?php $sql = 'SELECT title, body FROM posts WHERE id = "' . $post_id . '"   LIMIT 1 '; ?>
                    <?php $post = $db->link->query($sql); ?>
                    <?php if (mysqli_num_rows($post) > 0) { ?>
                        <?php while ($rows = $post->fetch_assoc()) { ?>
                            <!-- <div class="cor-mid-img">
                        <img src="images/course.jpg" alt="">
                    </div> -->
                            <div class="cor-con-mid">
                                <div class="cor-p1">
                                    <h2>Biological Sciences</h2>
                                    <span>Category: Software Testing</span>
                                    <div class="share-btn">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook fb1"></i> Share On Facebook</a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-twitter tw1"></i> Share On Twitter</a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-google-plus gp1"></i> Share On Google Plus</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="cor-p4">
                                    <h3 style="line-height: 1.8;"><?php echo $rows['title']; ?></h3>
                                    <p><?php echo $rows['body']; ?></p>
                                </div>

                                <div class="cor-p5">
                                    <h3>Course Syllabus</h3>
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a data-toggle="tab" href="#home">
                                                <img src="images/icon/cor4.png" alt=""> <span>Requirements</span></a>
                                        </li>
                                        <li><a data-toggle="tab" href="#menu1"><img src="images/icon/cor3.png" alt=""><span>Fees</span></a></li>
                                        <li><a data-toggle="tab" href="#menu2"><img src="images/icon/cor1.png" alt=""><span>Student Profile</span></a></li>
                                        <li><a data-toggle="tab" href="#menu2"><img src="images/icon/cor5.png" alt=""><span>How to Apply</span></a></li>
                                    </ul>

                                    <div class="tab-content">
                                        <div id="home" class="tab-pane fade in active">
                                            <h4>Home</h4>
                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                            <p> It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        </div>
                                        <div id="menu1" class="tab-pane fade">
                                            <h4>Menu 1</h4>
                                            <p>Some content in menu 1.</p>
                                        </div>
                                        <div id="menu2" class="tab-pane fade">
                                            <h4>Menu 2</h4>
                                            <p>Some content in menu 2.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="cor-p4">
                                    <h3>A typical weekly timetable:</h3>
                                    <p> It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    <ul class="collapsible" data-collapsible="accordion">
                                        <li>
                                            <div class="collapsible-header active">1st year</div>
                                            <div class="collapsible-body cor-tim-tab">
                                                <h4>First Year Courses</h4>
                                                <ul>
                                                    <li>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</li>
                                                    <li>Anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary</li>
                                                    <li>Combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem</li>
                                                    <li>Nullam tincidunt urna non porttitor luctus. Suspendisse sem urna, auctor ac commodo eu, bibendum sed nulla.</li>
                                                </ul>
                                                <h4>Assessment</h4>
                                                <ul>
                                                    <li>Three written papers form the First University Examination, together with a submitted portfolio of two exam essays of 2,000 words for Introduction to English Language and Literature.</li>
                                                    <li>All exams must be passed, but marks do not count towards the final degree.</li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="collapsible-header">2st year</div>
                                            <div class="collapsible-body cor-tim-tab">
                                                <h4>Second Year Courses</h4>
                                                <ul>
                                                    <li>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</li>
                                                    <li>Anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary</li>
                                                    <li>Combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem</li>
                                                </ul>
                                                <h4>Assessment</h4>
                                                <ul>
                                                    <li>Three written papers form the First University Examination, together with a submitted portfolio of two exam essays of 2,000 words for Introduction to English Language and Literature.</li>
                                                    <li>All exams must be passed, but marks do not count towards the final degree.</li>
                                                    <li>Combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem</li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="collapsible-header">3st year</div>
                                            <div class="collapsible-body cor-tim-tab">
                                                <h4>Third Year Courses</h4>
                                                <ul>
                                                    <li>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</li>
                                                    <li>Anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary</li>
                                                </ul>
                                                <h4>Assessment</h4>
                                                <ul>
                                                    <li>Three written papers form the First University Examination, together with a submitted portfolio of two exam essays of 2,000 words for Introduction to English Language and Literature.</li>
                                                    <li>All exams must be passed, but marks do not count towards the final degree.</li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="cor-p6">
                                    <h3>Student Reviews</h3>
                                    <div class="cor-p6-revi">
                                        <div class="cor-p6-revi-left">
                                            <img src="images/4.jpg" alt="">
                                        </div>
                                        <div class="cor-p6-revi-right">
                                            <h4>Rachel Britain</h4>
                                            <span>Date: 12may, 2017</span>
                                            <p>Mauris elementum et libero ac pharetra. Proin tristique dapibus tellus, lacinia blandit mi tincidunt at. Vivamus vitae interdum felis. Pellentesque congue mollis erat in imperdiet.</p>
                                        </div>
                                    </div>

                                </div>
                                <div class="cor-p6">
                                    <h3>Write Reviews</h3>
                                    <div class="cor-p7-revi">
                                        <form class="col s12">
                                            <div class="row">
                                                <div class="input-field col s6">
                                                    <input type="text" class="validate">
                                                    <label>Name</label>
                                                </div>
                                                <div class="input-field col s6">
                                                    <input type="text" class="validate">
                                                    <label>Email id</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <textarea class="materialize-textarea"></textarea>
                                                    <label>Message</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input type="submit" value="Submit" class="waves-effect waves-light btn-book">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- end php code -->
                        <?php } ?>
                    <?php } else { ?>
                        <div class="con-title">
                            <h2>No <span>Courses</span> announced yet!</h2>
                        </div>
                    <?php } ?>
                </div>
                <div class="col-md-3">
                    
                    <div class="cor-side-com">
                        
                       
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!--SECTION LOGIN, REGISTER AND FORGOT PASSWORD-->
<section>
    <!-- LOGIN SECTION -->
    <div id="modal1" class="modal fade" role="dialog">
        <div class="log-in-pop">
            <div class="log-in-pop-left">
                <h1>Hello...</h1>
                <p>Don't have an account? Create your account. It's take less then a minutes</p>
                <h4>Login with social media</h4>
                <ul>
                    <li><a href="#"><i class="fa fa-facebook"></i> Facebook</a>
                    </li>
                    <li><a href="#"><i class="fa fa-google"></i> Google+</a>
                    </li>
                    <li><a href="#"><i class="fa fa-twitter"></i> Twitter</a>
                    </li>
                </ul>
            </div>
            <div class="log-in-pop-right">
                <a href="#" class="pop-close" data-dismiss="modal"><img src="images/cancel.png" alt="" />
                </a>
                <h4>Login</h4>
                <p>Don't have an account? Create your account. It's take less then a minutes</p>
                <form class="s12">
                    <div>
                        <div class="input-field s12">
                            <input type="text" data-ng-model="name" class="validate">
                            <label>User name</label>
                        </div>
                    </div>
                    <div>
                        <div class="input-field s12">
                            <input type="password" class="validate">
                            <label>Password</label>
                        </div>
                    </div>
                    <div>
                        <div class="s12 log-ch-bx">
                            <p>
                                <input type="checkbox" id="test5" />
                                <label for="test5">Remember me</label>
                            </p>
                        </div>
                    </div>
                    <div>
                        <div class="input-field s4">
                            <input type="submit" value="Login" class="waves-effect waves-light log-in-btn">
                        </div>
                    </div>
                    <div>
                        <div class="input-field s12"> <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal3">Forgot password</a> | <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal2">Create a new account</a> </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- REGISTER SECTION -->
    <div id="modal2" class="modal fade" role="dialog">
        <div class="log-in-pop">
            <div class="log-in-pop-left">
                <h1>Hello...</h1>
                <p>Don't have an account? Create your account. It's take less then a minutes</p>
                <h4>Login with social media</h4>
                <ul>
                    <li><a href="#"><i class="fa fa-facebook"></i> Facebook</a>
                    </li>
                    <li><a href="#"><i class="fa fa-google"></i> Google+</a>
                    </li>
                    <li><a href="#"><i class="fa fa-twitter"></i> Twitter</a>
                    </li>
                </ul>
            </div>
            <div class="log-in-pop-right">
                <a href="#" class="pop-close" data-dismiss="modal"><img src="images/cancel.png" alt="" />
                </a>
                <h4>Create an Account</h4>
                <p>Don't have an account? Create your account. It's take less then a minutes</p>
                <form class="s12">
                    <div>
                        <div class="input-field s12">
                            <input type="text" data-ng-model="name1" class="validate">
                            <label>User name</label>
                        </div>
                    </div>
                    <div>
                        <div class="input-field s12">
                            <input type="email" class="validate">
                            <label>Email id</label>
                        </div>
                    </div>
                    <div>
                        <div class="input-field s12">
                            <input type="password" class="validate">
                            <label>Password</label>
                        </div>
                    </div>
                    <div>
                        <div class="input-field s12">
                            <input type="password" class="validate">
                            <label>Confirm password</label>
                        </div>
                    </div>
                    <div>
                        <div class="input-field s4">
                            <input type="submit" value="Register" class="waves-effect waves-light log-in-btn">
                        </div>
                    </div>
                    <div>
                        <div class="input-field s12"> <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal1">Are you a already member ? Login</a> </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- FORGOT SECTION -->
    <div id="modal3" class="modal fade" role="dialog">
        <div class="log-in-pop">
            <div class="log-in-pop-left">
                <h1>Hello... </h1>
                <p>Don't have an account? Create your account. It's take less then a minutes</p>
                <h4>Login with social media</h4>
                <ul>
                    <li><a href="#"><i class="fa fa-facebook"></i> Facebook</a>
                    </li>
                    <li><a href="#"><i class="fa fa-google"></i> Google+</a>
                    </li>
                    <li><a href="#"><i class="fa fa-twitter"></i> Twitter</a>
                    </li>
                </ul>
            </div>
            <div class="log-in-pop-right">
                <a href="#" class="pop-close" data-dismiss="modal"><img src="images/cancel.png" alt="" />
                </a>
                <h4>Forgot password</h4>
                <p>Don't have an account? Create your account. It's take less then a minutes</p>
                <form class="s12">
                    <div>
                        <div class="input-field s12">
                            <input type="text" data-ng-model="name3" class="validate">
                            <label>User name or email id</label>
                        </div>
                    </div>
                    <div>
                        <div class="input-field s4">
                            <input type="submit" value="Submit" class="waves-effect waves-light log-in-btn">
                        </div>
                    </div>
                    <div>
                        <div class="input-field s12"> <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal1">Are you a already member ? Login</a> | <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal2">Create a new account</a> </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="icon-float">
        <ul>
            <li><a href="#" class="sh">1k <br> Share</a> </li>
            <li><a href="#" class="fb1"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
            <li><a href="#" class="gp1"><i class="fa fa-google-plus" aria-hidden="true"></i></a> </li>
            <li><a href="#" class="tw1"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
            <li><a href="#" class="li1"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
            <li><a href="#" class="wa1"><i class="fa fa-whatsapp" aria-hidden="true"></i></a> </li>
            <li><a href="#" class="sh1"><i class="fa fa-envelope-o" aria-hidden="true"></i></a> </li>
        </ul>
    </div>
</section>

  
<?php }else{?>
    <script>location.replace('404.html');</script>
<?php } } ?>
<?php require_once('inic/footer.php'); ?>