<!--
 // **************************************************
 // ******* Name: drora
 // ******* Description: Bootstrap 4 Admin Dashboard
 // ******* Version: 1.0.0
 // ******* Released on 2019-02-08 15:41:24
 // ******* Support Email : quixlab.com@gmail.com
 // ******* Support Skype : sporsho9
 // ******* Author: Quixlab
 // ******* URL: https://quixlab.com
 // ******* Themeforest Profile : https://themeforest.net/user/quixlab
 // ******* License: ISC
 // ***************************************************
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Honesty</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <!-- Form step -->
    <link href="assets/plugins/jquery-steps/css/jquery.steps.css" rel="stylesheet">
    <!-- Dropify -->
    <link rel="stylesheet" href="assets/plugins/dropify/dist/css/dropify.min.css">
    <!-- Tagsinput -->
    <link rel="stylesheet" href="assets/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css">
    <!-- Switchery -->
    <link href="assets/plugins/innoto-switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- Select 2 -->
    <link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">
    <!-- Touchspinner -->
    <link rel="stylesheet" href="assets/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css">
    <!-- Input mask -->
    <link rel="stylesheet" href="assets/plugins/jasny-bootstrap/dist/css/jasny-bootstrap.min.css">
    <!-- x-editable -->
    <link href="assets/plugins/x-editable/dist/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet">
    <!-- Summernote -->
    <link href="assets/plugins/summernote/summernote.css" rel="stylesheet">
    <!-- Daterange picker -->
    <link href="assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- Clockpicker -->
    <link href="assets/plugins/clockpicker/css/bootstrap-clockpicker.min.css" rel="stylesheet">
    <!-- asColorpicker -->
    <link href="assets/plugins/jquery-asColorPicker/css/asColorPicker.min.css" rel="stylesheet">
    <!-- Material color picker -->
    <link href="assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet">
    <!-- Pick date -->
    <link rel="stylesheet" href="assets/plugins/pickadate/themes/default.css">
    <link rel="stylesheet" href="assets/plugins/pickadate/themes/default.date.css">
    <!-- Custom Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <div class="brand-logo">
                <a href="index.html">
                    <b class="logo-abbr">D</b>
                    <span class="brand-title"><b>Honesty</b></span>
                </a>
            </div>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="toggle-icon"><i class="icon-menu"></i></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <?php include 'nava.php' ?>

        </div> 
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
       <?php include 'menu.php' ?>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="breadcrumb-range-picker">
                        <span><i class="icon-calender"></i></span>
                        <span class="ml-1">August 08, 2017 - August 08, 2017</span>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Components</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <form action="" method="post">
            <div class="container-fluid">
                <div class="row justify-content-between mb-3">
                    <div class="col-12 text-left">
                        <h2 class="page-heading">Update</h2>
                        <p class="mb-0">Honety Food Restaurant</p>
                    </div>
                </div>



                <?php
                    if(isset($_REQUEST['submit'])){
                                $firstname = trim(addslashes ($_REQUEST["firstname"]));
                                $email = $_REQUEST["email"];
                                $msg = $_REQUEST["msg"];
    
                                


                                $sql="INSERT INTO cat(firstname, email, msg) VALUES ('$firstname','$email','$msg')";

                                $result = mysqli_query($conn, $sql);
                                if($result){
                                    echo "<script>alert('$fullname successfully updated')
                                    location.href='view.php'</script>";
                                }
                    }
                    ?>


                <div class="row">
                    <div class="col-12">
                    </div>
                    <div class="col-xl-6 col-xxl-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="basic-form">
                                    <form>
                                        <div class="form-group">
                                            <input type="text" name="firstname" class="form-control input-default "  placeholder="first name">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control input-rounded" placeholder="Email">
                                        </div>
                                    </form>
                                </div>
                                
                                <!-- <h4 class="card-title mt-5">Textarea</h4> -->
                                <div class="basic-form">
                                    <form>
                                        <div class="form-group">
                                            <textarea name="msg" class="form-control" rows="4" id="comment"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" name="submit" value="submit">
                                        </div>
                                    </form>
                                </div>
                                

                                        
                                </form>      
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
        
        
        <!--**********************************
            Footer start
        ***********************************-->
       
        <!--**********************************
            Footer end
        ***********************************-->

        
        <!--**********************************
            Right sidebar start
        ***********************************-->
        <div class="sidebar-right">
            <a class="sidebar-right-trigger gradient-5-x" href="javascript:void(0)">
                <span><i class="fa fa-cog fa-spin"></i></span>
            </a>
            <div class="sidebar-right-inner">
                <div class="admin-settings">
                    <h4>Pick your style</h4>
                    <div>
                        <p>Background</p>
                        <select class="form-control" name="theme_version" id="theme_version">
                            <option value="light">Light</option>
                            <option value="dark">Dark</option>
                        </select>
                    </div>
                    <div>
                        <p>Layout</p>
                        <select class="form-control" name="theme_layout" id="theme_layout">
                            <option value="vertical">Vertical</option>
                            <option value="horizontal">Horizontal</option>
                        </select>
                    </div>
                    <div>
                        <p>Sidebar</p>
                        <select class="form-control" name="sidebar_style" id="sidebar_style">
                            <option value="full">Full</option>
                            <option value="mini">Mini</option>
                            <option value="compact">Compact</option>
                            <option value="overlay">Overlay</option>
                        </select>
                    </div>
                    <div>
                        <p>Sidebar position</p>
                        <select class="form-control" name="sidebar_position" id="sidebar_position">
                            <option value="static">Static</option>
                            <option value="fixed">Fixed</option>
                        </select>
                    </div>
                    <div>
                        <p>Header position</p>
                        <select class="form-control" name="header_position" id="header_position">
                            <option value="static">Static</option>
                            <option value="fixed">Fixed</option>
                        </select>
                    </div>
                    <div>
                        <p>Container</p>
                        <select class="form-control" name="container_layout" id="container_layout">
                            <option value="wide">Wide</option>
                            <option value="boxed">Boxed</option>
                            <option value="wide-boxed">Wide Boxed</option>
                        </select>
                    </div>
                    <div>
                        <p>Direction</p>
                        <select class="form-control" name="theme_direction" id="theme_direction">
                            <option value="ltr">LTR</option>
                            <option value="rtl">RTL</option>
                        </select>
                    </div>
                    <div>
                        <p>Navigation Header</p>
                        <div>
                            <span>
                                <input type="radio" name="navigation_header" value="color_1" class="filled-in chk-col-primary" id="nav_header_bg_1">
                                <label for="nav_header_bg_1"></label>
                            </span>
                            <span>
                                <input type="radio" name="navigation_header" value="color_2" class="filled-in chk-col-primary" id="nav_header_bg_2">
                                <label for="nav_header_bg_2"></label>
                            </span>
                            <span>
                                <input type="radio" name="navigation_header" value="color_3" class="filled-in chk-col-primary" id="nav_header_bg_3">
                                <label for="nav_header_bg_3"></label>
                            </span>
                            <span>
                                <input type="radio" name="navigation_header" value="color_4" class="filled-in chk-col-primary" id="nav_header_bg_4">
                                <label for="nav_header_bg_4"></label>
                            </span>
                            <span>
                                <input type="radio" name="navigation_header" value="color_5" class="filled-in chk-col-primary" id="nav_header_bg_5">
                                <label for="nav_header_bg_5"></label>
                            </span>
                            <span>
                                <input type="radio" name="navigation_header" value="color_6" class="filled-in chk-col-primary" id="nav_header_bg_6">
                                <label for="nav_header_bg_6"></label>
                            </span>
                            <span>
                                <input type="radio" name="navigation_header" value="color_7" class="filled-in chk-col-primary" id="nav_header_bg_7">
                                <label for="nav_header_bg_7"></label>
                            </span>
                            <span>
                                <input type="radio" name="navigation_header" value="color_8" class="filled-in chk-col-primary" id="nav_header_bg_8">
                                <label for="nav_header_bg_8"></label>
                            </span>
                            <span>
                                <input type="radio" name="navigation_header" value="color_9" class="filled-in chk-col-primary" id="nav_header_bg_9">
                                <label for="nav_header_bg_9"></label>
                            </span>
                            <span>
                                <input type="radio" name="navigation_header" value="color_10" class="filled-in chk-col-primary" id="nav_header_bg_10">
                                <label for="nav_header_bg_10"></label>
                            </span>
                        </div>
                    </div>
                    <div>
                        <p>Header</p>
                        <div>
                            <span>
                                <input type="radio" name="header_bg" value="color_1" class="filled-in chk-col-primary" id="header_bg_1">
                                <label for="header_bg_1"></label>
                            </span>
                            <span>
                                <input type="radio" name="header_bg" value="color_2" class="filled-in chk-col-primary" id="header_bg_2">
                                <label for="header_bg_2"></label>
                            </span>
                            <span>
                                <input type="radio" name="header_bg" value="color_3" class="filled-in chk-col-primary" id="header_bg_3">
                                <label for="header_bg_3"></label>
                            </span>
                            <span>
                                <input type="radio" name="header_bg" value="color_4" class="filled-in chk-col-primary" id="header_bg_4">
                                <label for="header_bg_4"></label>
                            </span>
                            <span>
                                <input type="radio" name="header_bg" value="color_5" class="filled-in chk-col-primary" id="header_bg_5">
                                <label for="header_bg_5"></label>
                            </span>
                            <span>
                                <input type="radio" name="header_bg" value="color_6" class="filled-in chk-col-primary" id="header_bg_6">
                                <label for="header_bg_6"></label>
                            </span>
                            <span>
                                <input type="radio" name="header_bg" value="color_7" class="filled-in chk-col-primary" id="header_bg_7">
                                <label for="header_bg_7"></label>
                            </span>
                            <span>
                                <input type="radio" name="header_bg" value="color_8" class="filled-in chk-col-primary" id="header_bg_8">
                                <label for="header_bg_8"></label>
                            </span>
                            <span>
                                <input type="radio" name="header_bg" value="color_9" class="filled-in chk-col-primary" id="header_bg_9">
                                <label for="header_bg_9"></label>
                            </span>
                            <span>
                                <input type="radio" name="header_bg" value="color_10" class="filled-in chk-col-primary" id="header_bg_10">
                                <label for="header_bg_10"></label>
                            </span>
                        </div>
                    </div>
                    <div>
                        <p>Sidebar</p>
                        <div>
                            <span>
                                <input type="radio" name="sidebar_bg" value="color_1" class="filled-in chk-col-primary" id="sidebar_bg_1">
                                <label for="sidebar_bg_1"></label>
                            </span>
                            <span>
                                <input type="radio" name="sidebar_bg" value="color_2" class="filled-in chk-col-primary" id="sidebar_bg_2">
                                <label for="sidebar_bg_2"></label>
                            </span>
                            <span>
                                <input type="radio" name="sidebar_bg" value="color_3" class="filled-in chk-col-primary" id="sidebar_bg_3">
                                <label for="sidebar_bg_3"></label>
                            </span>
                            <span>
                                <input type="radio" name="sidebar_bg" value="color_4" class="filled-in chk-col-primary" id="sidebar_bg_4">
                                <label for="sidebar_bg_4"></label>
                            </span>
                            <span>
                                <input type="radio" name="sidebar_bg" value="color_5" class="filled-in chk-col-primary" id="sidebar_bg_5">
                                <label for="sidebar_bg_5"></label>
                            </span>
                            <span>
                                <input type="radio" name="sidebar_bg" value="color_6" class="filled-in chk-col-primary" id="sidebar_bg_6">
                                <label for="sidebar_bg_6"></label>
                            </span>
                            <span>
                                <input type="radio" name="sidebar_bg" value="color_7" class="filled-in chk-col-primary" id="sidebar_bg_7">
                                <label for="sidebar_bg_7"></label>
                            </span>
                            <span>
                                <input type="radio" name="sidebar_bg" value="color_8" class="filled-in chk-col-primary" id="sidebar_bg_8">
                                <label for="sidebar_bg_8"></label>
                            </span>
                            <span>
                                <input type="radio" name="sidebar_bg" value="color_9" class="filled-in chk-col-primary" id="sidebar_bg_9">
                                <label for="sidebar_bg_9"></label>
                            </span>
                            <span>
                                <input type="radio" name="sidebar_bg" value="color_10" class="filled-in chk-col-primary" id="sidebar_bg_10">
                                <label for="sidebar_bg_10"></label>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
            Right sidebar end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="assets/plugins/common/common.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/quixnav.js"></script>
    <script src="js/styleSwitcher.js"></script>
    
    <!-- Jquery Validation -->
    <script src="assets/plugins/jquery-validation/jquery.validate.min.js"></script>
    <!-- Form step -->
    <script src="assets/plugins/jquery-steps/build/jquery.steps.min.js"></script>
    <script src="assets/plugins/jquery-validation/jquery.validate.min.js"></script>
    <!-- Form validate init -->
    <script src="../../main/js/plugins-init/jquery.validate-init.js"></script>
    <!-- Dropify -->
    <script src="assets/plugins/dropify/dist/js/dropify.min.js"></script>
    <!-- Typeahead -->
    <script src="assets/plugins/typeahead.js/dist/typeahead.jquery.min.js"></script>
    <script src="assets/plugins/typeahead.js/dist/typeahead.bundle.min.js"></script>
    <script src="assets/plugins/typeahead.js/dist/bloodhound.min.js"></script>
    <!-- Tagsinput -->
    <script src="assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js"></script>
    <!-- Switchery -->
    <script src="assets/plugins/innoto-switchery/dist/switchery.min.js"></script>
    <!-- Select 2 -->
    <script src="assets/plugins/select2/js/select2.full.min.js"></script>
    <!-- Touchspinner -->
    <script src="assets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js"></script>
    <!-- Input mask -->
    <script src="assets/plugins/jasny-bootstrap/dist/js/jasny-bootstrap.min.js"></script>
    <!-- x-editable -->
    <script src="assets/plugins/moment/moment.min.js"></script>
    <script src="assets/plugins/x-editable/dist/bootstrap3-editable/js/bootstrap-editable.min.js"></script>
    <!-- Summernote -->
    <script src="assets/plugins/summernote/js/summernote.min.js"></script>
    <!-- Daterangepicker -->
    <!-- momment js is must -->
    <!-- <script src="assets/plugins/moment/moment.min.js"></script> -->
    <script src="assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- clockpicker -->
    <script src="assets/plugins/moment/moment.min.js"></script>
    <script src="assets/plugins/clockpicker/js/bootstrap-clockpicker.min.js"></script>
    <!-- asColorPicker -->
    <!-- momment js is must -->
    <!-- <script src="assets/plugins/moment/moment.min.js"></script> -->
    <script src="assets/plugins/jquery-asColor/jquery-asColor.min.js"></script>
    <script src="assets/plugins/jquery-asGradient/jquery-asGradient.min.js"></script>
    <script src="assets/plugins/jquery-asColorPicker/js/jquery-asColorPicker.min.js"></script>
    <!-- Material color picker -->
    <!-- momment js is must -->
    <!-- <script src="assets/plugins/moment/moment.min.js"></script> -->
    <script src="assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
    <!-- pickdate -->
    <script src="assets/plugins/pickadate/picker.js"></script>
    <script src="assets/plugins/pickadate/picker.time.js"></script>
    <script src="assets/plugins/pickadate/picker.date.js"></script>




    <!-- Form step init -->
    <script src="js/plugins-init/jquery-steps-init.js"></script>
    <!-- Dropify init -->
    <script src="js/plugins-init/dropify-init.js"></script>
    <!-- Typeahead init -->
    <script src="../../main/js/plugins-init/typehead.js-init.js"></script>
    <!-- Tagsinput init -->
    <script src="js/plugins-init/bootstrap-tagsinput-init.js"></script>
    <!-- Switchery init -->
    <script src="../../main/js/plugins-init/switchery-init.js"></script>
    <!-- Select 2 init -->
    <script src="js/plugins-init/select2-init.js"></script>
    <!-- Touchspinner init -->
    <script src="js/plugins-init/bootstrap-touchpin-init.js"></script>
    <!-- x-editable init -->
    <script src="../../main/js/plugins-init/bootstrap-editable-init.js"></script>
    <!-- Summernote init -->
    <script src="../../main/js/plugins-init/summernote-init.js"></script>
    <!-- Daterangepicker -->
    <script src="js/plugins-init/bs-daterange-picker-init.js"></script>
    <!-- Clockpicker init -->
    <script src="js/plugins-init/clock-picker-init.js"></script>
    <!-- asColorPicker init -->
    <script src="js/plugins-init/jquery-asColorPicker.init.js"></script>
    <!-- Material color picker init -->
    <script src="js/plugins-init/material-date-picker-init.js"></script>
    <!-- Pickdate -->
    <script src="js/plugins-init/pickadate-init.js"></script>

</body>

</html>