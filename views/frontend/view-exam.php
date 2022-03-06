<?php session_start();
    // if(!isset($_SESSION['user'])){
    //     header("Location:index.php");
    // }
    include '../../controllers/includes/connectDB.php';
    $sql = "SELECT * FROM `exams` 
            INNER JOIN test ON exams.test_id = test.test_id
            WHERE exams.exam_id = '$_GET[examID]'";
    $query = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>Argon Dashboard - Free Dashboard for Bootstrap 4</title>
    <!-- Favicon -->
    <link href="../../assets/img/brand/favicon.png" rel="icon" type="image/png">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Icons -->
    <link href="../../assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
    <link href="../../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <!-- Argon CSS -->
    <link type="text/css" href="../../assets/css/argon.css?v=1.0.0" rel="stylesheet">
    <link href="/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <style>
        article>p {
            font-size: 1em;
            height: 3em;
            padding-top: 4%;
            /* border: 3px solid #00ACEE; */
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            width: 25em;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
        <div class="container-fluid">
            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
            <!-- Brand -->
            <a class="navbar-brand pt-0" href="home.php">E-LERNING</a>
            <!-- User -->
            <ul class="nav align-items-center d-md-none">
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="media align-items-center">
                            <?php echo $_SESSION['student'][1]."".$_SESSION['student'][2]." ".$_SESSION['student'][3];?>
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
                        <a href="../../controllers/authenticationsFunctions.php?logoutf=true" class="dropdown-item">
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
                            <?php echo $_SESSION['student'][1]."".$_SESSION['student'][2]." ".$_SESSION['student'][3];?>
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
                        <a class="nav-link" href="home.php">
                            <i class="ni ni-chart-pie-35 text-green"></i> หน่วยการเรียนรู้
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
                <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="unit-test.php">Unit / Test Data Informations : <?php echo $row['test_name']; ?></a>

                <!-- User -->
                <ul class="navbar-nav align-items-center d-none d-md-flex">
                    <li class="nav-item dropdown">
                        <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="media align-items-center">
                                <div class="media-body ml-2 d-none d-lg-block">
                                    <?php echo $_SESSION['student'][1]."".$_SESSION['student'][2]." ".$_SESSION['student'][3];?>
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
                            <a href="../../controllers/authenticationsFunctions.php?logoutf=true" class="dropdown-item">
                                <i class="ni ni-user-run"></i>
                                <span>Logout</span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- Header -->
        <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8" style="padding-top: 5rem !important;">
        </div>
        <!-- Page content -->
        <div class="container-fluid mt--7">
            <!-- Table -->
            <div class="row">
                <div class="col ">
                    <div class="card-header border-0">
                        <form action="../../controllers/backend/check_result.php" method="POST">
                            <input type="hidden" name="unitID" value="<?php echo $_GET['unitID']; ?>">
                            <div class="row">
                                <div class="col">
                                    <label class="h3">คำถาม</label>
                                    <?php echo $row['exam_name']; ?>
                                    <hr>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="answer" value="A" checked>
                                        <label class="form-check-label">
                                        ตัวเลือก A
                                    </label>
                                    </div>
                                    <?php echo $row['exam_ans1']; ?>
                                    <hr>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="answer" value="B">
                                        <label class="form-check-label">
                                        ตัวเลือก B
                                    </label>
                                    </div>
                                    <?php echo $row['exam_ans2']; ?>
                                    <hr>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="answer" value="C">
                                        <label class="form-check-label">
                                        ตัวเลือก C
                                    </label>
                                    </div>
                                    <?php echo $row['exam_ans3']; ?>
                                    <hr>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="answer" value="D">
                                        <label class="form-check-label">
                                        ตัวเลือก D
                                    </label>
                                    </div>
                                    <?php echo $row['exam_ans4']; ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-10"></div>
                                <div class="col-2">
                                    <button type="submit" class="btn btn-success" name="examID" value="<?php echo $_GET['examID']; ?>">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <?php include '../../templates/backend/footer.php';?>
        </div>
    </div>
    <!-- Argon Scripts -->
    <?php include '../../modals/mediaModal.php'; ?>
    <!-- Core -->
    <script src="../../assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="../../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Argon JS -->
    <script src="../../assets/js/argon.js?v=1.0.0"></script>
</body>
<script>
    $('.insert').click(function() {
        var id = $(this).attr('data-id');

        $("#id").val(id);

        $('#add-media').modal('show');
    })
</script>

</html>