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
                <a href="admin.php" class="logo"><img src="images/logo1.png" alt="" height="20px"/>                </a>
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
                    <li><a href="#" class="ho-dr-con-last waves-effect"><i class="fas fa-sign-out-alt"></i> Logout</a>
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
                <div class="sb2-12">
                    <ul>
                        <li><img src="images/placeholder.jpg" alt="">
                        </li>
                        <li>
            <!-- user name -->
            <h5 class="lead"><?php echo $id; ?></h5>
            <?php $datas = $post->fetch('admin', $id); ?>
            <?php foreach ($datas as $data) { ?>
                <div>
                    <h5 class="lead"> <?php echo $data['name']; ?></h5>
                </div>
            <?php } ?>
        </li>
                        <li></li>
                    </ul>
                </div>
                <!--== LEFT MENU ==-->
                <div class="sb2-13">
                    <ul class="collapsible" data-collapsible="accordion">
                        <li><a href="admin.php" class="menu-active"><i class="fa fa-bar-chart" aria-hidden="true"></i> Dashboard</a>
                        </li>
						<li><a href="makePosts.php"><i class="fa fa-cogs" aria-hidden="true"></i> Make Post</a>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-book" aria-hidden="true"></i> Admin Users</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="users.php">Admin User</a>
                                    </li>
                                    <li><a href="addNewUser.php">Add New User</a>
                                    </li>
                                    <li><a href="admin-trash-courses.html">Trash Course</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-book" ></i> Posts</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="allCourses.php">All Users</a>
                                    </li>
                                    <li><a href="add_new_student.php">Add New user</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-users" aria-hidden="true"></i>Teachers</a>                           <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="teacherDetails.php">Teacher Details</a>
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
                                    <li><a href="allCourses.php">All Students</a>
                                    </li>
                                    <li><a href="add_new_student.php">Add New Students</a>
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
                        <li class="active-bre"><a href="#"> Admission Enquiry</a>
                        </li>
                        <li class="page-back"><a href=""><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
                        </li>
                    </ul>
                </div>

                <!--== User Details ==-->
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Admission Enquiry</h4>
                                    <p>All about students like name, student id, phone, email, country, city and more</p>
                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
													<th>Name</th>
                                                    <th>Email id</th>
													<th>Phone</th>
													<th>View</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>John smith</td>
                                                    <td>johm_smith@gmail.com</td>
													<td>+10 8415 6352</td>
													<td><a href="admin-view-enquiry.html" class="ad-st-view">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>John smith</td>
                                                    <td>johm_smith@gmail.com</td>
													<td>+10 8415 6352</td>
													<td><a href="admin-view-enquiry.html" class="ad-st-view">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>John smith</td>
                                                    <td>johm_smith@gmail.com</td>
													<td>+10 8415 6352</td>
													<td><a href="admin-view-enquiry.html" class="ad-st-view">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>John smith</td>
                                                    <td>johm_smith@gmail.com</td>
													<td>+10 8415 6352</td>
													<td><a href="admin-view-enquiry.html" class="ad-st-view">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>John smith</td>
                                                    <td>johm_smith@gmail.com</td>
													<td>+10 8415 6352</td>
													<td><a href="admin-view-enquiry.html" class="ad-st-view">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>John smith</td>
                                                    <td>johm_smith@gmail.com</td>
													<td>+10 8415 6352</td>
													<td><a href="admin-view-enquiry.html" class="ad-st-view">View</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
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