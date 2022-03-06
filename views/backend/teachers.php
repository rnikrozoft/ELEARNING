<?php session_start();

    if(!isset($_SESSION['user'])){
        header("Location:index.php");
    }

    include '../../controllers/includes/connectDB.php';
    if($_SESSION['user'][4]=='Y'){
        $sql = "SELECT * FROM `teachers` 
                INNER JOIN majors ON teachers.major_id = majors.major_id
                ORDER BY teachers.teacher_id ASC";
        $query = mysqli_query($conn,$sql);
    }else{
        $major = $_SESSION['user'][5];
        $sql = "SELECT * FROM `teachers` 
                INNER JOIN majors ON teachers.major_id = majors.major_id
                WHERE teachers.major_id = '$major'
                ORDER BY teachers.teacher_id ASC";
        $query = mysqli_query($conn,$sql);
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
                <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="teachers.php">Teachers Data Informations</a>
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
                                    <h3>ข้อมูลครู - อาจารย์</h3>
                                </div>
                                <div class="col text-right">
                                    <a href="" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#add-teacher">ADD DATA</a>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table align-items-center table-flush" id="myTable">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">Teacher ID</th>
                                        <th scope="col">Teacher Fullname</th>
                                        <th scope="col">Tel</th>
                                        <th scope="col">Factulty</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while($row = mysqli_fetch_array($query)) {
                                        if($row['teacher_id']!=0){    
                                    ?>
                                    <tr>
                                        <th>
                                            <?php echo $row['teacher_id']; ?>
                                        </th>
                                        <th>
                                            <?php echo $row['teacher_prefix']." ".$row['teacher_fname']." ".$row['teacher_lname']; ?>
                                        </th>
                                        <td>
                                            <?php echo $row['teacher_tel']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['major_name']; ?>
                                        </td>
                                        <?php if($_SESSION['user'][4]=='Y' || $_SESSION['user'][0]==$row['header_major_id']){?>
                                        <td class="text-right">
                                            <div class="dropdown">
                                                <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                    <a class="dropdown-item edit" data-id="<?php echo $row['teacher_id']; ?>" data-prefix="<?php echo $row['teacher_prefix']?>" data-fname="<?php echo $row['teacher_fname']; ?>" data-lname="<?php echo $row['teacher_lname']; ?>" data-tel="<?php echo $row['teacher_tel']; ?>"
                                                        data-major="<?php echo $row['major_id']; ?>">Edit</a>
                                                    <a class="dropdown-item" href="../../controllers/backend/teachersFunctions.php?del=true&teacherID=<?php echo $row['teacher_id']; ?>" onclick="return confirm('ยืนยันการลบข้อมูล')">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                        <?php } ?>
                                    </tr>
                                    <?php } } $conn = null; ?>
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
    <?php include '../../modals/teachersModal.php'; ?>
    <!-- Core -->
    <script src="../../assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="../../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Argon JS -->
    <script src="../../assets/js/argon.js?v=1.0.0"></script>
    <script src="../../assets/js/app.js"></script>

</body>
<script>
    $('.edit').click(function() {
        var teacher_id = $(this).attr('data-id');
        var teacher_id2 = $(this).attr('data-id');
        var teacher_prefix = $(this).attr('data-prefix');
        var teacher_fname = $(this).attr('data-fname');
        var teacher_lname = $(this).attr('data-lname');
        var teacher_tel = $(this).attr('data-tel');
        var major_id = $(this).attr('data-major');


        $("#teacher_id").val(teacher_id);
        $("#teacher_id2").val(teacher_id2);

        $("#teacher_prefix").val(teacher_prefix);
        $("#teacher_fname").val(teacher_fname);
        $("#teacher_lname").val(teacher_lname);
        $("#teacher_tel").val(teacher_tel);
        $("#major_id").val(major_id);

        $('#edit-teacher').modal('show');
    })
</script>

</html>