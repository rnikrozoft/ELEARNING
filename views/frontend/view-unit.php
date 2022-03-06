<?php session_start();
    // if(!isset($_SESSION['user'])){
    //     header("Location:index.php");
    // }
    include '../../controllers/includes/connectDB.php';
    $sql = "SELECT * FROM `test` WHERE test_id = '$_GET[unitID]'";
    $query = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($query);

    $sql2 = "SELECT * FROM `medias` WHERE test_id = '$_GET[unitID]'";
    $query2 = mysqli_query($conn,$sql2);

    $sql3 = "SELECT * FROM `exams` WHERE test_id = '$_GET[unitID]'";
    $query3 = mysqli_query($conn,$sql3);

    $student_id = $_SESSION['student'][0];
    $sql4 = "SELECT student_id FROM `score` WHERE test_id = '$_GET[unitID]' AND student_id = '$student_id' ";
    $query4 = mysqli_query($conn,$sql4);

    $sql5 = "SELECT * FROM `exams` WHERE test_id = '$_GET[unitID]'";
    $query5 = mysqli_query($conn,$sql5);

    $sql6 = "SELECT point FROM `score` WHERE test_id = '$_GET[unitID]' AND student_id = '$student_id'";
    $query6 = mysqli_query($conn,$sql6);

    $row6 = mysqli_fetch_array($query6);

    
    
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>E-LEARNING</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="../../assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
    <link href="../../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link type="text/css" href="../../assets/css/argon.css?v=1.0.0" rel="stylesheet">
    <link href="/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <style>
        article>p {
            font-size: 1em;
            height: 3em;
            padding-top: 4%;
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
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
            <a class="navbar-brand pt-0" href="home.php">E-LERNING</a>
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
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
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
    <div class="main-content">
        <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
            <div class="container-fluid">
                <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="unit-test.php">Unit / Test Data Informations : <?php echo $row['test_name']; ?></a>
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
        <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8" style="padding-top: 5rem !important;"></div>
        <div class="container-fluid mt--7">
            <div class="row">
                <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
                    <div class="card card-profile shadow">
                        <div class="card-body pt-0 pt-md-4">
                            <div class="text-center">
                                <div class="h5 mt-4">
                                    หน่วยการเรียนรู้ที่
                                    <?php echo $row['test_id']; ?>
                                </div>
                                <div>
                                    <?php echo $row['test_name']; ?>
                                </div>
                                <hr class="my-4" />
                                <?php echo $row['test_details']; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 order-xl-1">
                    <div class="card bg-secondary shadow">
                        <div class="card-header bg-white border-0">
                            <div class="row align-items-center">
                                <div class="col">
                                    <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link btn-sm active" id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true">
                                                Media
                                            </a>
                                        </li>
                                        <?php if(mysqli_num_rows($query4)<=0){?>
                                            <li class="nav-item">
                                                <a class="nav-link btn-sm" href="exam.php?unitID=<?php echo $_GET['unitID'] ?>" target="_blank">
                                                    Exam
                                                </a>
                                            </li> 
                                        <?php }else{ ?>
                                            <li class="nav-item">
                                                <a class="nav-link btn-sm" href="javascript:void(0)">
                                                    สรุปผล = จำนวนข้อทดสอบ :  <?php echo $num_test = mysqli_num_rows($query5); ?> | คะแนนที่คุณได้ : <?php echo $row6['point']; echo ($row6['point']>=($num_test/2)) ? " (ผ่าน)" : " (ไม่ผ่าน)"; ?> 
                                                </a>
                                            </li> 
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card table-responsive shadow">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
                                    <table class="table align-items-center table-flush">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>No.</th>
                                                <th>File name</th>
                                                <th>Type</th>
                                                <th>Uploaded at</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i=1; foreach($query2 as $row){ ?>
                                            <tr>
                                                <th>
                                                    <?php echo $i;?>
                                                </th>
                                                <td>
                                                    <a href="<?php echo$row['media_path']; ?>" target="_blank">
                                                        <?php echo $row['media_name'];?>
                                                    </a>
                                                </td>
                                                <td>
                                                    <?php echo $row['media_type'];?>
                                                </td>
                                                <td>
                                                    <?php echo $row['media_create_at'];?>
                                                </td>
                                            </tr>
                                            <?php $i++; } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php include '../../templates/backend/footer.php';?>
        </div>
    </div>
    <?php include '../../modals/mediaModal.php'; ?>
    <script src="../../assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="../../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../assets/js/argon.js?v=1.0.0"></script>
</body>
</html>