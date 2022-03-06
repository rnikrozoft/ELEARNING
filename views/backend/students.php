<?php session_start();
    if(!isset($_SESSION['user'])){
        header("Location:index.php");
    }
    
    include '../../controllers/includes/connectDB.php';

    if($_SESSION['user'][4]=='Y'){
        $sql = "SELECT * FROM `students` 
            INNER JOIN majors ON students.major_id = majors.major_id
            INNER JOIN student_levels ON students.level_id = student_levels.level_id
            ORDER BY students.student_id ASC";
        $query = mysqli_query($conn,$sql);
    }else{
        $major = $_SESSION['user'][5];
        $sql = "SELECT * FROM `students` 
            INNER JOIN majors ON students.major_id = majors.major_id
            INNER JOIN student_levels ON students.level_id = student_levels.level_id
            WHERE students.major_id = '$major'
            ORDER BY students.student_id ASC";
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
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
            <a class="navbar-brand pt-0" href="students-score.php">E-LERNING</a>
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
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
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
                <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="students.php">Students Data Informations</a>
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
                                    <h3>ข้อมูลนักเรียน - นักศึกษา</h3>
                                </div>
                                <div class="col text-right">
                                    <a href="" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#add-student">ADD DATA</a>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table align-items-center table-flush" id="myTable">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">Student ID</th>
                                        <th scope="col">Student Fullname</th>
                                        <th scope="col">Factulty</th>
                                        <th scope="col">Student Level</th>
                                        <th scope="col">Tel</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while($row = mysqli_fetch_array($query)){?>
                                    <tr>
                                        <th>
                                            <?php echo $row['student_id']; ?>
                                        </th>
                                        <th>
                                            <?php echo $row['student_prefix']." ".$row['student_fname']." ".$row['student_lname']; ?>
                                        </th>
                                        <td>
                                            <?php echo $row['major_name']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['level_name']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['student_tel']; ?>
                                        </td>
                                        <td class="text-right">
                                            <div class="dropdown">
                                                <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                    <a class="dropdown-item edit" data-id="<?php echo $row['student_id']; ?>" data-prefix="<?php echo $row['student_prefix']; ?>" data-fname="<?php echo $row['student_fname']; ?>" data-lname="<?php echo $row['student_lname']; ?>" data-major="<?php echo $row['major_id']; ?>"
                                                        data-level="<?php echo $row['level_id']; ?>" data-tel="<?php echo $row['student_tel']; ?>">
                                                            Edit
                                                    </a>
                                                    <a class="dropdown-item" href="../../controllers/backend/studentsFunctions.php?del=true&studentID=<?php echo $row['student_id']; ?>" onclick="return confirm('ยืนยันการลบข้อมูล')">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php } $conn = null; ?>
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
    <?php include '../../modals/studentsModal.php'; ?>
    <!-- Core -->
    <script src="../../assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="../../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Argon JS -->
    <script src="../../assets/js/argon.js?v=1.0.0"></script>
    <script src="../../assets/js/app.js"></script>

</body>
<script>
    $('.edit').click(function() {
        var student_id = $(this).attr('data-id');
        var student_id2 = $(this).attr('data-id');
        var student_prefix = $(this).attr('data-prefix');
        var student_fname = $(this).attr('data-fname');
        var student_lname = $(this).attr('data-lname');
        var student_tel = $(this).attr('data-tel');
        var major_id = $(this).attr('data-major');
        var level_id = $(this).attr('data-level');


        $("#student_id").val(student_id);
        $("#student_id2").val(student_id2);

        $("#student_prefix").val(student_prefix);
        $("#student_fname").val(student_fname);
        $("#student_lname").val(student_lname);
        $("#student_tel").val(student_tel);
        $("#major_id").val(major_id);
        $("#level_id").val(level_id);


        $('#edit-student').modal('show');
    })
</script>

</html>