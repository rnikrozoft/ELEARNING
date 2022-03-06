<?php session_start();
    if(!isset($_SESSION['user'])){
        header("Location:index.php");
    }
    include '../../controllers/includes/connectDB.php';
    $sql = "SELECT * FROM `test` inner join teachers on test.teacher_id = teachers.teacher_id
            ORDER BY test.test_create_at ASC";
    $query = mysqli_query($conn,$sql);
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
    <link href="/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <style>
        article>p {
            font-size: 1em;
            height: 3em;
            padding-top: 5%;
            /* border: 3px solid #00ACEE; */
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            width: 15em;
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
                <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="unit-test.php">Unit / Test Data Informations</a>
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
                            <div class="row">
                                <div class="col">
                                    <h3>ข้อมูลหน่วยการเรียนรู้</h3>
                                </div>
                                <div class="col text-right">
                                    <a href="" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#add-unit-test">ADD DATA</a>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">Unit ID / Test ID</th>
                                        <th scope="col">Unit name / Test name</th>
                                        <th>Details</th>
                                        <th scope="col">Create at</th>
                                        <th scope="col">Create By</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($query as $row) { ?>
                                    <tr>
                                        <th>
                                            <?php echo $row['test_id']; ?>
                                        </th>
                                        <th>
                                            <?php echo $row['test_name']; ?>
                                        </th>
                                        <td>
                                            <article>
                                                <p>
                                                    <?php echo $row['test_details']; ?>
                                                </p>
                                            </article>
                                        </td>
                                        <td>
                                            <?php echo $row['test_create_at']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['teacher_prefix']."".$row['teacher_fname']." ".$row['teacher_lname']; ?>
                                        </td>
                                        <td class="text-right">
                                            <div class="dropdown">
                                                <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                    <a class="dropdown-item" href="view-unit.php?unitID=<?php echo $row['test_id']; ?>">View Details</a>
                                                    <?php $sessionName = $_SESSION['user'][1]."".$_SESSION['user'][2]." ".$_SESSION['user'][3]; $resultName = $row['teacher_prefix']."".$row['teacher_fname']." ".$row['teacher_lname']; if($resultName == $sessionName) {?>
                                                    <a class="dropdown-item edit" href="#" data-id="<?php echo $row['test_id']; ?>" data-name="<?php echo $row['test_name']; ?>" data-detail="<?php echo $row['test_details']; ?>">
                                                        Edit
                                                    </a>
                                                    <a class="dropdown-item" href="../../controllers/backend/testsFunctions.php?del=true&testID=<?php echo $row['test_id']; ?>" onclick="return confirm('ยืนยันการลบข้อมูล')">Delete</a>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <?php include '../../templates/backend/footer.php';?>
        </div>
    </div>
    <!-- Argon Scripts -->
    <?php include '../../modals/unitModal.php'; ?>
    <!-- Core -->
    <script src="../../assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="../../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Argon JS -->
    <script src="../../assets/js/argon.js?v=1.0.0"></script>
</body>
<script>
    $('.edit').click(function() {
        var id = $(this).attr('data-id');
        var id2 = $(this).attr('data-id');

        var name = $(this).attr('data-name');
        var details = $(this).attr('data-detail');

        $("#id").val(id);
        $("#id2").val(id2);
        $("#name").val(name);
        $("#details").val(details);

        $('#edit-unit').modal('show');
    })
</script>

</html>