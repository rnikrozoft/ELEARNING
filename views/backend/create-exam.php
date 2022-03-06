<?php session_start();
    if(!isset($_SESSION['user'])){
        header("Location:index.php");
    }
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>E-learning</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Icons -->
    <link href="../../assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
    <link href="../../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <!-- Argon CSS -->
    <link type="text/css" href="../../assets/css/argon.css?v=1.0.0" rel="stylesheet">
    <script type="text/javascript" src="../../tinymce/tinymce.min.js"></script>
    <script>
        tinymce.init({
            selector: ".editor",
            plugins: [
                "advlist autolink link image lists charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
                "table contextmenu directionality emoticons paste textcolor responsivefilemanager code"
            ],
            toolbar1: " bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist sizeselect | fontsizeselect | forecolor | image media responsivefilemanager | link unlink",
            image_advtab: true,

            external_filemanager_path: "../../filemanager/", //แก้ตรงนี้
            filemanager_title: "Responsive Filemanager",
            external_plugins: {
                "filemanager": "../filemanager/plugin.min.js"
            },
            relative_urls: false,
            remove_script_host: false,
            fontsize_formats: "8pt 10pt 12pt 14pt 18pt 24pt 36pt",
            document_base_url: "http://localhost/ELEARNING/"
        });
    </script>
</head>

<body>
    <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
        <div class="container-fluid">
            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
            <!-- Brand -->
            <a class="navbar-brand pt-0" href="students-score.php">E-LERNING</a>
            <!-- User -->
            <ul class="nav align-items-center d-md-none">
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="media align-items-center">
                            <?php echo $_SESSION['user'][1]."".$_SESSION['user'][2]." ".$_SESSION['user'][3];?>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                        <div class=" dropdown-header noti-title">
                            <h6 class="text-overflow m-0">Welcome!</h6>
                        </div>
                        <a href="profile.php" class="dropdown-item">
                            <i class="ni ni-single-02"></i>
                            <span>My profile</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="../../controllers/authenticationsFunctions.php?logout=true" class="dropdown-item">
                            <i class="ni ni-user-run"></i>
                            <span>Logout</span>
                        </a>
                    </div>
                </li>
            </ul>
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <!-- Collapse header -->
                <div class="navbar-collapse-header d-md-none">
                    <div class="row">
                        <div class="col-6 collapse-brand">
                            <?php echo $_SESSION['user'][1]."".$_SESSION['user'][2]." ".$_SESSION['user'][3];?>
                        </div>
                        <div class="col-6 collapse-close">
                            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Navigation -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="students-score.php">
                            <i class="ni ni-chart-pie-35 text-green"></i> คะแนนนักศึกษา
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="unit-test.php">
                            <i class="ni ni-folder-17 text-purple"></i> ข้อมูลหน่วยการเรียนรู้
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="students.php">
                            <i class="ni ni-hat-3 text-yellow"></i> ข้อมูลนักเรียน - นักศึกษา
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="teachers.php">
                            <i class="ni ni-single-02 text-primary"></i> ข้อมูลครู - อาจารย์
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="faculty.php">
                            <i class="ni ni-building text-pink"></i> ข้อมูลแผนก / คณะ
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Main content -->
    <div class="main-content">
        <!-- Top navbar -->
        <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
            <div class="container-fluid">
                <!-- Brand -->
                <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="">Create Exam</a>
                <!-- User -->
                <ul class="navbar-nav align-items-center d-none d-md-flex">
                    <li class="nav-item dropdown">
                        <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="media align-items-center">
                                <div class="media-body ml-2 d-none d-lg-block">
                                    <?php echo $_SESSION['user'][1]."".$_SESSION['user'][2]." ".$_SESSION['user'][3];?>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                            <div class=" dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Welcome!</h6>
                            </div>
                            <a href="profile.php" class="dropdown-item">
                                <i class="ni ni-single-02"></i>
                                <span>My profile</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="../../controllers/authenticationsFunctions.php?logout=true" class="dropdown-item">
                                <i class="ni ni-user-run"></i>
                                <span>Logout</span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- Header -->
        <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8" style="padding-top: 5rem !important;"></div>
        <!-- Page content -->
        <div class="container-fluid mt--7">
            <!-- Table -->
            <div class="row">
                <div class="col">
                    <div class="card shadow">
                        <div class="card-header border-0">
                            <form action="../../controllers/backend/examFunctions.php" enctype="multipart/form-data" method="POST">
                                <div class="row">
                                    <div class="col">
                                        <h3 class="mb-0">โจทย์ / หัวข้อ / คำถาม</h3>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col">
                                        <textarea class="editor" name="exam_name" cols="30" rows="15"></textarea>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col">
                                        <h3 class="mb-0">ตัวเลือก A</h3>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col">
                                        <textarea class="editor" name="exam_ans1" cols="30" rows="15"></textarea>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col">
                                        <h3 class="mb-0">ตัวเลือก B</h3>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col">
                                        <textarea class="editor" name="exam_ans2" cols="30" rows="15"></textarea>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col">
                                        <h3 class="mb-0">ตัวเลือก C</h3>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col">
                                        <textarea class="editor" name="exam_ans3" cols="30" rows="15"></textarea>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col">
                                        <h3 class="mb-0">ตัวเลือก D</h3>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col">
                                        <textarea class="editor" name="exam_ans4" cols="30" rows="15"></textarea>
                                    </div>
                                </div>
                                <br>
                                <div class="row align-items-center">
                                    <div class="col">
                                        <label class="h3">คำตอบที่ถูกต้อง</label>
                                        <br>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="answer" value="A" checked>
                                            <label class="form-check-label">ตัวเลือก A</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="answer" value="B">
                                            <label class="form-check-label">ตัวเลือก B</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="answer" value="C">
                                            <label class="form-check-label">ตัวเลือก C</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="answer" value="D">
                                            <label class="form-check-label">ตัวเลือก D</label>
                                        </div>
                                    </div>
                                    <div class="col text-right">
                                        <button type="submit" class="btn  btn-primary" name="insert" value="<?php echo $_GET['unitID'];?>">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php include '../../templates/backend/footer.php';?>
        </div>
    </div>
    <!-- Argon Scripts -->
    <?php include '../../modals/studentsModal.php'; ?>
    <!-- Core -->
    <script src="../../assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="../../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Argon JS -->
    <script src="../../assets/js/argon.js?v=1.0.0"></script>
</body>

</html>