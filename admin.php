<?php $id = 0; ?>
<?php require_once('app/admin_inic/header.php'); ?>
<?php
if (isset($_SESSION['email']) == null) {
    header('Location: login/login.php');
    // echo 'Login first';
} else { ?>
    <?php $id = $_SESSION['email']; ?>

    <body>
        <!--== MAIN CONTRAINER ==-->
        <div class="container-fluid sb1">
            <div class="row">
                <!--== LOGO ==-->
                <div class="col-md-2 col-sm-3 col-xs-6 sb1-1">
                    <a href="#" class="btn-close-menu"><i class="fa fa-times" aria-hidden="true"></i></a>
                    <a href="#" class="atab-menu"><i class="fa fa-bars tab-menu" aria-hidden="true"></i></a>
                    <a href="admin.php" class="logo"><img src="images/logo1.png" alt="" height="20px" /></a>
                </div>
                <!--== SEARCH ==-->
                <div class="col-md-6 col-sm-6 mob-hide">
                    <form class="app-search">
                        <input type="text" placeholder="Search..." class="form-control">
                        <a href="#"><i class="fa fa-search"></i></a>
                    </form>
                </div>
                <!--== NOTIFICATION ==-->
                <div class="col-md-2 tab-hide">
                    <div class="top-not-cen">
                        <a class='waves-effect btn-noti' href="admin-all-enquiry.php" title="all enquiry messages"><i class="fa fa-commenting-o" aria-hidden="true"></i><span>5</span></a>
                        <a class='waves-effect btn-noti' href="admin-course-enquiry.html" title="course booking messages"><i class="fa fa-envelope-o" aria-hidden="true"></i><span>5</span></a>
                        <a class='waves-effect btn-noti' href="admin-admission-enquiry.php" title="admission enquiry"><i class="fa fa-tag" aria-hidden="true"></i><span>5</span></a>
                    </div>
                </div>
                <!--== MY ACCCOUNT ==-->
                <div class="col-md-2 col-sm-3 col-xs-6">
                    <!-- Dropdown Trigger -->
                        <a class='waves-effect dropdown-button top-user-pro' href='#' data-activates='top-menu'><img src="images/user/6.png" alt="" />My Account <i class="fa fa-angle-down" aria-hidden="true"></i>
                    </a>

                    <!-- Dropdown Structure -->
                    <ul id='top-menu' class='dropdown-content top-menu-sty'>
                        <li><a href="admin-panel-setting.php" class="waves-effect"><i class="fa fa-cogs" aria-hidden="true"></i>Admin Setting</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="app/logout/logout.php" class="ho-dr-con-last waves-effect">
                                <i class="fas fa-sign-out-alt"></i> Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!--== BODY CONTNAINER ==-->
        <div class="container-fluid sb2">
            <div class="row">
                <div class="sb2-1">
                    <!--== USER INFO ==-->
                    <div class="">
                        <?php $profileSql = 'SELECT admin.id, name, lastname, email, admin_id, profile_image FROM admin
                                LEFT JOIN profile ON admin.id=profile.admin_id WHERE profile.admin_id =  "' . $user_id . '"'; ?>
                        <?php $profileResult = $db->link->query($profileSql); ?>
                        <?php if (mysqli_num_rows($profileResult) <= 0) { ?>
                            <?php $adminDetails = 'SELECT id, name,
                                 lastname, email FROM admin WHERE id = "' . $user_id . '"'; ?>
                            <?php $adminResult = $db->link->query($adminDetails); ?>
                            <?php while ($adminRow =  $adminResult->fetch_assoc()) { ?>
                                <h4><?php echo $adminRow['email']; ?></h4>
                                <h4><?php echo $adminRow['name']; ?></h4>
                            <?php } ?>
                        <?php } else { ?>
                            <?php while ($profileRows =  $profileResult->fetch_assoc()) { ?>
                                <div class="card" style="background-color: #e66030;">
                                    <img style="width: 100%; " src="public/profile_image/<?php echo $profileRows['profile_image']; ?>" alt="">
                                    <h4 style="padding: 5px;"><?php echo $profileRows['email']; ?></h4>
                                    <h4 style="padding: 5px;"><?php echo $profileRows['name']; ?></h4>
                                <?php } ?>
                                </div>
                            <?php } ?>
                    </div>
                    <!--== LEFT MENU ==-->
                    <div class="sb2-13">
                        <ul class="collapsible" data-collapsible="accordion">
                            <li><a href="admin.php" class="menu-active"><i class="fa fa-bar-chart" aria-hidden="true"></i> Dashboard</a>
                            </li>
                            <li><a href="admin-setting.php"><i class="fas fa-plus-circle"></i>Make Post</a>
                            </li>
                            <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-book" aria-hidden="true"></i> Admin Users</a>
                                <div class="collapsible-body left-sub-menu">
                                    <ul>
                                        <li><a href="users.php">Admin User</a>
                                        </li>
                                        <li><a href="admin-add-courses.php">Add New Course</a>
                                        </li>
                                        <li><a href="admin-trash-courses.html">Trash Course</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-user" aria-hidden="true"></i> Users</a>
                                <div class="collapsible-body left-sub-menu">
                                    <ul>
                                        <li><a href="admin-user-all.php">All Users</a>
                                        </li>
                                        <li><a href="admin-user-add.php">Add New user</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-bookmark-o" aria-hidden="true"></i>All Pages</a>
                                <div class="collapsible-body left-sub-menu">
                                    <ul>
                                        <li><a href="admin-page-all.php">Pages</a>
                                        </li>
                                        <li><a href="admin-page-add.php">Create New Page</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-bars" aria-hidden="true"></i> Menu</a>
                                <div class="collapsible-body left-sub-menu">
                                    <ul>
                                        <li><a href="admin-main-menu.php">Main menu</a></li>
                                        <li><a href="admin-about-menu.php">About menu</a></li>
                                        <li><a href="admin-admission-menu.php">Admission menu</a></li>
                                        <li><a href="admin-all-menu.html">All page menu</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="admin-slider.php"><i class="fa fa-image" aria-hidden="true"></i> Slider</a>
                            </li>
                            <li><a href="admin-quick-link.php"><i class="fa fa-external-link-square" aria-hidden="true"></i> Slider quick link</a>
                            </li>
                            <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-calendar" aria-hidden="true"></i> Events</a>
                                <div class="collapsible-body left-sub-menu">
                                    <ul>
                                        <li><a href="admin-event-all.php">All Events</a>
                                        </li>
                                        <li><a href="admin-event-add.html">Create New Events</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-bullhorn" aria-hidden="true"></i> Seminar</a>
                                <div class="collapsible-body left-sub-menu">
                                    <ul>
                                        <li><a href="admin-seminar-all.html">All Seminar</a>
                                        </li>
                                        <li><a href="admin-seminar-add.html">Create New Seminar</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Job Vacants</a>
                                <div class="collapsible-body left-sub-menu">
                                    <ul>
                                        <li><a href="admin-job-all.html">All Jobs</a>
                                        </li>
                                        <li><a href="admin-job-add.html">Create New Job</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-pencil" aria-hidden="true"></i> Exam time table</a>
                                <div class="collapsible-body left-sub-menu">
                                    <ul>
                                        <li><a href="admin-exam-all.html">All Exams</a></li>
                                        <li><a href="admin-exam-add.html">Add New Exam</a></li>
                                        <li><a href="admin-exam-group-all.html">All Groups</a></li>
                                        <li><a href="admin-exam-group-add.html">Create New Groups</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-users" aria-hidden="true"></i> Students</a>
                                <div class="collapsible-body left-sub-menu">
                                    <ul>
                                        <li><a href="admin-user-all.php">All Students</a>
                                        </li>
                                        <li><a href="admin-user-add.php">Add New Students</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-commenting-o" aria-hidden="true"></i> Enquiry</a>
                                <div class="collapsible-body left-sub-menu">
                                    <ul>
                                        <li><a href="admin-all-enquiry.php">All Enquiry</a></li>
                                        <li><a href="admin-course-enquiry.html">Course Enquiry</a></li>
                                        <li><a href="admin-admission-enquiry.php">Admission Enquiry</a></li>
                                        <li><a href="admin-seminar-enquiry.html">Seminar Enquiry</a></li>
                                        <li><a href="admin-event-enquiry.html">Event Enquiry</a></li>
                                        <li><a href="admin-common-enquiry.html">Common Enquiry</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-cloud-download" aria-hidden="true"></i> Import & Export</a>
                                <div class="collapsible-body left-sub-menu">
                                    <ul>
                                        <li><a href="admin-export-data.php">Export all datas</a>
                                        </li>
                                        <li><a href="admin-import-data.html">Import all datas</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!--== BODY INNER CONTAINER ==-->
                <div class="sb2-2">
                    <!--== breadcrumbs ==-->
                    <div class="sb2-2-2">
                        <ul>
                            <li><a href="admin.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                            </li>
                            <li class="active-bre"><a href="#"> Dashboard</a>
                            </li>
                            <li class="page-back"><a href="admin.php"><i class="fa fa-backward" aria-hidden="true"></i>Back</a>
                            </li>
                        </ul>
                    </div>
                    <!--== DASHBOARD INFO ==-->
                    <div class="sb2-2-1">
                        <h2>Admin Dashboard</h2>
                        <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>
                        <div class="db-2">
                            <ul>
                                <li>
                                    <!-- count courses -->
                                    <div class="dash-book dash-b-1">
                                        <h5>Admin Users</h5>
                                        <?php $posts = $post->counts('posts'); ?>
                                        <?php foreach ($posts as $data) { ?>
                                            <?php if (count($data) <= 0) { ?>
                                                <h4>0</h4>
                                            <?php } else { ?>
                                                <h4><?php echo $data['countCourses'] ?></h4>
                                            <?php } ?>
                                            <a href="#">View more</a>
                                        <?php } ?>
                                    </div>
                                    <!-- end count courses -->
                                </li>
                                <li>
                                    <div class="dash-book dash-b-2">
                                        <h5>Teachers</h5>
                                        <?php $posts = $post->counts('teacher'); ?>
                                        <?php foreach ($posts as $data) { ?>
                                            <?php if (count($data) <= 0) { ?>
                                                <h4>0</h4>
                                            <?php } else { ?>
                                                <h4><?php echo $data['countCourses'] ?></h4>
                                            <?php } ?>
                                            <a href="#">View more</a>
                                        <?php } ?>
                                    </div>
                                </li>
                                <li>
                                    <div class="dash-book dash-b-3">
                                        <h5>Students</h5>
                                        <?php $posts = $post->counts('student'); ?>
                                        <?php foreach ($posts as $data) { ?>
                                            <?php if (count($data) <= 0) { ?>
                                                <h4>0</h4>
                                            <?php } else { ?>
                                                <h4><?php echo $data['countCourses'] ?></h4>
                                            <?php } ?>
                                            <a href="#">View more</a>
                                        <?php } ?>
                                    </div>
                                </li>
                                <li>
                                    <div class="dash-book dash-b-4">
                                        <h5>Enquiry</h5>
                                        <h4>24</h4>
                                        <a href="#">View more</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!--== User Details ==-->
                    <div class="sb2-2-3">
                        <div class="row scroll">
                            <div class="col-md-12">
                                <div class="box-inn-sp">
                                    <div class="inn-title">
                                        <h4>Posts Details</h4>
                                    </div>
                                    <div class="tab-inn ">
                                        <div class="table-responsive table-desi">
                                            <table class="table  ">
                                                <thead>
                                                    <tr>
                                                        <th>NO</th>
                                                        <th>Images</th>
                                                        <th>Titles</th>
                                                        <th>Posts</th>
                                                        <th>Insert</th>
                                                        <th>Update</th>
                                                        <th>Delete</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $allPosts = $select->selectData('posts'); ?>
                                                    <?php foreach ($allPosts as $allItem) { ?>
                                                        <tr>
                                                            <td><?php echo $helper->getIncrement(); ?></td>
                                                            <td>
                                                                <span class="list-img"><img src="images/user/1.png" alt=""></span>
                                                            </td>
                                                            <td>
                                                                <a href="#"><span class="list-enq-name"><?php echo $allItem['title']; ?></span></a>
                                                            </td>
                                                            <td>
                                                                <span class="list-eng-name">
                                                                    <?php echo $helper->loadMore($allItem['body'], 50); ?>
                                                                </span>
                                                            </td>
                                                            <td>
                                                                <a href="admin-setting.php" style="border-radius: 50%;"><i class="fas fa-plus-circle"></i></a>
                                                            </td>
                                                            <td>
                                                                <a id="<?php echo $allItem['id']; ?>" class="fetchUpdatePost" data-toggle="modal" data-target="#postUpdateModale"><i class="fas fa-pen-square"></i>
                                                            </td>
                                                            <td>
                                                                <a href="admin-setting.php" style="border-radius: 50%;"><i class="fas fa-trash-alt"></i></a>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--== User Details ==-->
                    <div class="sb2-2-3">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="box-inn-sp">
                                    <div class="inn-title">
                                        <h4>Course Details</h4>
                                        <p>All about courses, program structure, fees, best course lists (ranking), syllabus, teaching techniques and other details.</p>
                                    </div>
                                    <div class="tab-inn">
                                        <div class="table-responsive table-desi">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Image</th>
                                                        <th>Course Name</th>
                                                        <th>Category</th>
                                                        <th>Durations</th>
                                                        <th>Start Date</th>
                                                        <th>End Date</th>
                                                        <th>Total Seats</th>
                                                        <th>Status</th>
                                                        <th>View</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="sb2-2-3">
                        <div class="row">
                            <!--== Country Campaigns ==-->
                            <div class="col-md-6">
                                <div class="box-inn-sp">
                                    <div class="inn-title">
                                        <h4>Job Openings</h4>
                                        <p>Randomised words which don't look even slightly believable. If you are going to use a passage</p>
                                    </div>
                                    <div class="tab-inn">
                                        <div class="table-responsive table-desi">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Company</th>
                                                        <th>Openings</th>
                                                        <th>Date</th>
                                                        <th>Location</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><span class="txt-dark weight-500">Samsing</span>
                                                        </td>
                                                        <td>50</td>
                                                        <td>15 April 2018</td>
                                                        <td>New york, United States</td>
                                                        <td>
                                                            <span class="label label-success">Active</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="txt-dark weight-500">Microsofts</span>
                                                        </td>
                                                        <td>75</td>
                                                        <td>21 Jun 2018</td>
                                                        <td>New york, United States</td>
                                                        <td>
                                                            <span class="label label-success">Active</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="txt-dark weight-500">Samsing</span>
                                                        </td>
                                                        <td>50</td>
                                                        <td>15 April 2018</td>
                                                        <td>United States</td>
                                                        <td>
                                                            <span class="label label-success">Active</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="txt-dark weight-500">Microsofts</span>
                                                        </td>
                                                        <td>75</td>
                                                        <td>21 Jun 2018</td>
                                                        <td>United States</td>
                                                        <td>
                                                            <span class="label label-success">Active</span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--== Country Campaigns ==-->
                            <div class="col-md-6">
                                <div class="box-inn-sp">
                                    <div class="inn-title">
                                        <h4>Event Details</h4>
                                        <p>Education is about teaching, learning skills and knowledge.</p>
                                    </div>
                                    <div class="tab-inn">
                                        <div class="table-responsive table-desi">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>State</th>
                                                        <th>Client</th>
                                                        <th>Changes</th>
                                                        <th>Budget</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><span class="txt-dark weight-500">California</span>
                                                        </td>
                                                        <td>Beavis</td>
                                                        <td><span class="txt-success"><i class="fa fa-angle-up" aria-hidden="true"></i><span>2.43%</span></span>
                                                        </td>
                                                        <td>
                                                            <span class="txt-dark weight-500">$1478</span>
                                                        </td>
                                                        <td>
                                                            <span class="label label-success">Active</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="txt-dark weight-500">Florida</span>
                                                        </td>
                                                        <td>Felix</td>
                                                        <td><span class="txt-success"><i class="fa fa-angle-up" aria-hidden="true"></i><span>1.43%</span></span>
                                                        </td>
                                                        <td>
                                                            <span class="txt-dark weight-500">$951</span>
                                                        </td>
                                                        <td>
                                                            <span class="label label-danger">Closed</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="txt-dark weight-500">Hawaii</span>
                                                        </td>
                                                        <td>Cannibus</td>
                                                        <td><span class="txt-danger"><i class="fa fa-angle-up" aria-hidden="true"></i><span>-8.43%</span></span>
                                                        </td>
                                                        <td>
                                                            <span class="txt-dark weight-500">$632</span>
                                                        </td>
                                                        <td>
                                                            <span class="label label-default">Hold</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="txt-dark weight-500">Alaska</span>
                                                        </td>
                                                        <td>Neosoft</td>
                                                        <td><span class="txt-success"><i class="fa fa-angle-up" aria-hidden="true"></i><span>7.43%</span></span>
                                                        </td>
                                                        <td>
                                                            <span class="txt-dark weight-500">$325</span>
                                                        </td>
                                                        <td>
                                                            <span class="label label-default">Hold</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="txt-dark weight-500">New Jersey</span>
                                                        </td>
                                                        <td>Hencework</td>
                                                        <td><span class="txt-success"><i class="fa fa-angle-up" aria-hidden="true"></i><span>9.43%</span></span>
                                                        </td>
                                                        <td>
                                                            <span>$258</span>
                                                        </td>
                                                        <td>
                                                            <span class="label label-success">Active</span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="sb2-2-3">
                        <div class="row">
                            <!--== Listing Enquiry ==-->
                            <div class="col-md-12">
                                <div class="box-inn-sp">
                                    <div class="inn-title">
                                        <h4>Exam Time Tables</h4>
                                        <p>Education is about teaching, learning skills and knowledge.</p>
                                    </div>
                                    <div class="tab-inn">
                                        <div class="table-responsive table-desi">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Select</th>
                                                        <th>Degree</th>
                                                        <th>Exam Name</th>
                                                        <th>Start Date</th>
                                                        <th>End Date</th>
                                                        <th>Timing</th>
                                                        <th>View</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox" class="filled-in" id="filled-in-box-1" checked="checked" />
                                                            <label for="filled-in-box-1"></label>
                                                        </td>
                                                        <td>MBA</td>
                                                        <td><span class="list-enq-name">Civil engineering</span><span class="list-enq-city">Illunois, United States</span>
                                                        </td>
                                                        <td>10:00am</td>
                                                        <td>01:00pm</td>
                                                        <td>03:00Hrs</td>
                                                        <td>
                                                            <a href="admin-exam.html" class="ad-st-view">View</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox" class="filled-in" id="filled-in-box-2" />
                                                            <label for="filled-in-box-2"></label>
                                                        </td>
                                                        <td>MBA</td>
                                                        <td><span class="list-enq-name">Google Business</span><span class="list-enq-city">Illunois, United States</span>
                                                        </td>
                                                        <td>10:00am</td>
                                                        <td>01:00pm</td>
                                                        <td>03:00Hrs</td>
                                                        <td>
                                                            <a href="admin-exam.html" class="ad-st-view">View</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox" class="filled-in" id="filled-in-box-3" />
                                                            <label for="filled-in-box-3"></label>
                                                        </td>
                                                        <td>MBA</td>
                                                        <td><span class="list-enq-name">Statistics</span><span class="list-enq-city">Illunois, United States</span>
                                                        </td>
                                                        <td>10:00am</td>
                                                        <td>01:00pm</td>
                                                        <td>03:00Hrs</td>
                                                        <td>
                                                            <a href="admin-exam.html" class="ad-st-view">View</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox" class="filled-in" id="filled-in-box-4" />
                                                            <label for="filled-in-box-4"></label>
                                                        </td>
                                                        <td>MBA</td>
                                                        <td><span class="list-enq-name">Business Management</span><span class="list-enq-city">Illunois, United States</span>
                                                        </td>
                                                        <td>10:00am</td>
                                                        <td>01:00pm</td>
                                                        <td>03:00Hrs</td>
                                                        <td>
                                                            <a href="admin-exam.html" class="ad-st-view">View</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox" class="filled-in" id="filled-in-box-5" />
                                                            <label for="filled-in-box-5"></label>
                                                        </td>
                                                        <td>MBA</td>
                                                        <td><span class="list-enq-name">Art/Design</span><span class="list-enq-city">Illunois, United States</span>
                                                        </td>
                                                        <td>10:00am</td>
                                                        <td>01:00pm</td>
                                                        <td>03:00Hrs</td>
                                                        <td>
                                                            <a href="admin-exam.html" class="ad-st-view">View</a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--== Latest Activity ==-->
                    <div class="sb2-2-3">
                        <div class="row">
                            <!--== Latest Activity ==-->
                            <div class="col-md-6">
                                <div class="box-inn-sp">
                                    <div class="inn-title">
                                        <h4>Latest Activity</h4>
                                        <p>Education is about teaching, learning skills and knowledge.</p>
                                    </div>
                                    <div class="tab-inn list-act-hom">
                                        <ul>
                                            <li class="list-act-hom-con">
                                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                                                <h4><span>12 may, 2017</span> Welcome to Academy</h4>
                                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                                            </li>
                                            <li class="list-act-hom-con">
                                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                                                <h4><span>08 Jun, 2017</span> Academy Leadership</h4>
                                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                                            </li>
                                            <li class="list-act-hom-con">
                                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                                                <h4><span>27 July, 2017</span> Awards and Achievement</h4>
                                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                                            </li>
                                            <li class="list-act-hom-con">
                                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                                                <h4><span>14 Aug, 2017</span> Facilities and Management</h4>
                                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                                            </li>
                                            <li class="list-act-hom-con">
                                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                                                <h4><span>24 Sep, 2017</span> Nation award winning 2017</h4>
                                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--== Social Media ==-->
                            <div class="col-md-6">
                                <div class="box-inn-sp">
                                    <div class="inn-title">
                                        <h4>Social Media</h4>
                                        <p>Education is about teaching, learning skills and knowledge.</p>
                                    </div>
                                    <div class="tab-inn">
                                        <div class="table-responsive table-desi">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Media</th>
                                                        <th>Name</th>
                                                        <th>Share</th>
                                                        <th>Like</th>
                                                        <th>Members</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><span class="list-img"><img src="images/sm/1.png" alt=""></span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--== User Details ==-->
                    <div class="sb2-2-3">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="box-inn-sp">
                                    <div class="inn-title">
                                        <h4>Google Map</h4>
                                        <p>Education is about teaching, learning skills and knowledge.</p>
                                    </div>
                                    <div class="tab-inn">
                                        <div class="table-responsive table-desi tab-map">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6290413.804893654!2d-93.99620524741552!3d39.66116578737809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880b2d386f6e2619%3A0x7f15825064115956!2sIllinois%2C+USA!5e0!3m2!1sen!2sin!4v1469954001005" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    <?php } ?>
    <?php require_once('app/admin_inic/footer.php'); ?>