<?php
include 'assets/controller/conn.php';
session_start();

# STUDENTS ALERT 
#IF BOTH FIELD EMPTY
if (isset($_SESSION['empty_both_student'])) {
    $required = 'required';
    $d_none_stud = '';
    $empty_students_field = $_SESSION['empty_both_student'];

    #EMPTY EMAIL
    $required_email = '';
    #EMPTY PASS
    $required_pass = '';

    #forstud
    $deactive = '';
    $no_show_active = '';
    #teacher
    $active = '';
    $show_active = '';
}
#IF EMAIL EMPTY
elseif (isset($_SESSION['empty_email_student'])) {
    $required_email = 'emailrequired';
    $d_none_stud = '';
    $empty_students_field = $_SESSION['empty_email_student'];

    #EMPTY BOTH FIELD
    $required = '';
    #EMPTY PASS
    $required_pass = '';

    #forstud
    $deactive = '';
    $no_show_active = '';
    #teacher
    $active = '';
    $show_active = '';
}
#IF PASSWORD ENPTY
elseif (isset($_SESSION['empty_password_student'])) {
    $required_pass = 'passrequired';
    $d_none_stud = '';
    $empty_students_field = $_SESSION['empty_password_student'];

    #EMPTY BOTH FIELD
    $required = '';
    #EMPTY EMAIL
    $required_email = '';

    #forstud
    $deactive = '';
    $no_show_active = '';
    #teacher
    $active = '';
    $show_active = '';
}
# WRONG CREDS
elseif (isset($_SESSION['wrong_cred_student'])) {
    $required = 'required';
    $d_none_stud = '';
    $empty_students_field = $_SESSION['wrong_cred_student'];

    #EMPTY EMAIL
    $required_email = '';
    #EMPTY PASS
    $required_pass = '';

    #forstud
    $deactive = '';
    $no_show_active = '';
    #teacher
    $active = '';
    $show_active = '';
}
#NOT SESSIONS
else {
    $required = '';
    $d_none_stud = 'd-none';
    $empty_students_field = '';
    #EMPTY EMAIL
    $required_email = '';
    #EMPTY PASS
    $required_pass = '';

    #forstud
    $deactive = '';
    $no_show_active = '';
    #teacher
    $active = '';
    $show_active = '';
}

#UNSET SESSIONS
#BOTH FIELDS
unset($_SESSION['empty_both_student']);
#EMAIL
unset($_SESSION['empty_email_student']);
#PASS
unset($_SESSION['empty_password_student']);
#WRONG CREDS
unset($_SESSION['wrong_cred_student']);


# TEACHER ALERT 
#EMPTY BOTH FIELDS
if (isset($_SESSION['empty_both_teacher'])) {
    $active = 'active';
    $show_active = 'show active';
    $required_teacher = 'required';
    $warning_text = $_SESSION['empty_both_teacher'];
    $d_none_teacher = '';

    #TEACHER EMPTY EMAIL
    $teacher_email_required = '';
    #TEACHER PASS REQUIRED
    $teacher_pass_required = '';


    #forstud
    $deactive = '';
    $no_show_active = '';
}
#EMPT EMAIL 
elseif (isset($_SESSION['empty_email_teacher'])) {
    $active = 'active';
    $show_active = 'show active';
    $teacher_email_required = 'emailrequired';
    $warning_text = $_SESSION['empty_email_teacher'];
    $d_none_teacher = '';

    #TEACHER EMPTY BOTH FIELD
    $required_teacher = '';
    #TEACHER PASS REQUIRED
    $teacher_pass_required = '';

    #forstud
    $deactive = '';
    $no_show_active = '';
}
#EMPTY PASS
elseif (isset($_SESSION['empty_password_teacher'])) {
    $active = 'active';
    $show_active = 'show active';
    $teacher_pass_required = 'passrequired';
    $warning_text = $_SESSION['empty_password_teacher'];
    $d_none_teacher = '';

    #TEACHER EMPTY BOTH FIELD
    $required_teacher = '';
    #TEACHER EMPTY EMAIL
    $teacher_email_required = '';

    #forstud
    $deactive = '';
    $no_show_active = '';

}
#WRONG CREDS
elseif (isset($_SESSION['wrong_creds_teacher'])) {
    $active = 'active';
    $show_active = 'show active';
    $required_teacher = 'required';
    $warning_text = $_SESSION['wrong_creds_teacher'];
    $d_none_teacher = '';

    #TEACHER EMPTY EMAIL
    $teacher_email_required = '';
    #TEACHER PASS REQUIRED
    $teacher_pass_required = '';


    #forstud
    $deactive = '';
    $no_show_active = '';
}
#NOT EMPTY
else {
    #TEACHER TAB
    $required_teacher = '';
    $warning_text = '';
    $d_none_teacher = 'd-none';

    #TEACHER EMPTY BOTH FIELD
    $required_teacher = '';
    #TEACHER EMPTY EMAIL
    $teacher_email_required = '';
    #TEACHER PASS REQUIRED
    $teacher_pass_required = '';


    #forstuds
    $deactive = 'active';
    $no_show_active = 'show active';
}
#UNSET SESSIONS TEACHER
#BOTH FIELDS TEACHER
unset($_SESSION['empty_both_teacher']);
#EMAIL TEACHER
unset($_SESSION['empty_email_teacher']);
#PASSWORD TEACHER
unset($_SESSION['empty_password_teacher']);
#WRONG CREDS TEACHER
unset($_SESSION['wrong_creds_teacher']);
?>




<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Docu Pro Homepage</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/titlelogo.png" rel="icon">
    <link href="assets/img/titlelogo.png" rel="apple-touch-icon">


    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/css/jquery-ui.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">

</head>

<body>
    <!-- ======= Hero Section ======= -->
    <section id="hero">

        <div class="container">

            <div class="row justify-content-between">
                <div class="col-lg-7 pt-5 pt-lg-0 order-1 order-lg-1 d-flex align-items-center ">
                    <div data-aos="zoom-out">
                        <h1>DocuPro <span>Online Processing Documents</span></h1>
                        <h2>Managing school documents</h2>

                    </div>
                </div>

                <div class="col-lg-4 order-2 order-lg-2">

                    <div class="card">
                        <div class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link <?php echo $deactive; ?>" role="tab" data-bs-toggle="tab"
                                    href="#LoginAsStudent" id="studentLogin" aria-selected="true"
                                    aria-controls="LoginAsStudent">Student
                                    Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php echo $active; ?>" role="tab" data-bs-toggle="tab"
                                    href="#LoginAsFaculty" id="facultyLogin" aria-selected="true"
                                    aria-controls="LoginAsFaculty">Teacher
                                    Login</a>
                            </li>
                        </div>

                        <div class="tab-content">

                            <!--STUDENT TAB-->
                            <div class="tab-pane fade <?php echo $no_show_active; ?>" id="LoginAsStudent">
                                <div class="card-body">
                                    <form action="assets/controller/process.php" method="POST">
                                        <div class="forEmail <?php echo $required . "" . $required_email; ?>">
                                            <label class="label"><i class="bi bi-envelope-at-fill"></i> Email</label>
                                            <input type="email" class="form-control" name="email">
                                        </div>

                                        <div class="forPassword <?php echo $required . "" . $required_pass; ?>">
                                            <label class="label"><i class="bi bi-shield-lock-fill"></i> Password</label>
                                            <input type="password" class="form-control" name="password">
                                        </div>
                                        <p class="text-danger <?php echo $d_none_stud; ?>">
                                            <?php
                                            echo
                                                $empty_students_field;
                                            ?>
                                        </p>
                                        <button type="submit" name="LoginAsStudent"
                                            class="btn btn-primary">Login</button>
                                    </form>
                                    <p class="mt-2">Dont have an account ?<button type="button" data-bs-toggle="modal"
                                            data-bs-target="#register_modal" id="register">Register
                                            Here</button></p>
                                </div>

                            </div>
                            <!--END STUDENT TAB-->

                            <!--FACULTY TAB-->
                            <div class="tab-pane fade <?php echo $show_active; ?>" id="LoginAsFaculty">
                                <div class="card-body">
                                    <form action="assets/controller/process.php" method="POST">
                                        <div
                                            class="forEmail <?php echo $required_teacher . "" . $teacher_email_required; ?>">
                                            <label class="label"><i class="bi bi-envelope-at-fill"></i> Email</label>
                                            <input type="email" class="form-control" name="email">
                                        </div>

                                        <div
                                            class="forPassword <?php echo $required_teacher . "" . $teacher_pass_required; ?>">
                                            <label class="label"><i class="bi bi-shield-lock-fill"></i> Password</label>
                                            <input type="password" class="form-control" name="password">
                                        </div>
                                        <p class="text-danger <?php echo $d_none_teacher; ?>">
                                            <?php echo $warning_text; ?>
                                        </p>
                                        <button type="submit" name="LoginFaculty" class="btn btn-primary">Login</button>
                                    </form>
                                </div>
                            </div>
                            <!--END FACULTY TAB-->
                        </div>
                        <!--END TAB CONTENT-->
                    </div>
                    <!--END CARD-->
                </div>
            </div>
        </div>

        <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            viewBox="0 24 150 28 " preserveAspectRatio="none">
            <defs>
                <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
            </defs>
            <g class="wave1">
                <use xlink:href="#wave-path" x="50" y="3" fill="rgba(171, 233, 206, .1)">
            </g>
            <g class="wave2">
                <use xlink:href="#wave-path" x="50" y="0" fill="rgba(171, 233, 206, .2)">
            </g>
            <g class="wave3">
                <use xlink:href="#wave-path" x="50" y="9" fill="rgb(171, 233, 206)">
            </g>
        </svg>

    </section><!-- End Hero -->

    <!--MODAL REGISTER-->

    <div class="modal fade" id="register_modal" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form action="assets/controller/process.php" method="POST">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Registration Form</h5>
                    </div>


                    <div class="modal-body mt-3" id="studentRegistrationForm">
                        <div class="inputs">
                            <label for="name" class="label">First Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>

                        <div class="inputs">
                            <label for="middleName" class="label">Middle Name</label>
                            <input type="text" class="form-control" id="middleName" name="middlename" required>
                        </div>

                        <div class="inputs">
                            <label for="lastName" class="label">Last Name</label>
                            <input type="text" class="form-control" id="lastName" name="lastname" required>
                        </div>

                        <!--row-->
                        <div class="row">
                            <!--COL LG 6 COL MD 6 -->
                            <div class="col-lg-6 col-md-6">
                                <div class="inputs">
                                    <label for="age" class="label">Age</label>
                                    <input type="number" class="form-control" min="0" max="99" id="age" name="age"
                                        required>
                                </div>

                                <div class="inputs">
                                    <label for="studentSection" class="label">Section</label>
                                    <select class="form-select" name="section" required id="studentSection">
                                        <option value=""></option>
                                        <option value="UI-FC1-BSIT3-1">UI-FC1-BSIT3-1</option>
                                        <option value="UI-FC1-BSIT3-2">UI-FC1-BSIT3-2</option>
                                        <option value="UI-FC1-BSIT3-3">UI-FC1-BSIT3-3</option>
                                        <option value="UI-FC1-BSIT3-4">UI-FC1-BSIT3-4</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="inputs">
                                    <label for="studentnumber" class="label">Student Number</label>
                                    <input type="text" class="form-control" id="studentnumber" name="studentnumber"
                                        required>
                                </div>
                            </div>

                        </div>
                        <!--end row-->


                        <div class="inputs">
                            <label for="email" class="label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="inputs">
                            <label for="password" class="label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn register" name="register">Register</button>
                    </div>

                </form>
            </div>
        </div>
    </div>




    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script>
        $('.form-control').on('change keyup',function (event) {
            var label = $(this).siblings('.label');
            if ($(this).val().length > 0) {
                $(label).addClass('focused');
            } else {
                $(label).removeClass('focused');
            }
        });
        $('.form-select').on('change keyup',function (event) {
        var label = $(this).siblings('.label');
        if ($('.form-select').val() !== '') {
            $(label).addClass('focused');
        } else {
            $(label).removeClass('focused');
        }
    });
    </script>
</body>

</html>