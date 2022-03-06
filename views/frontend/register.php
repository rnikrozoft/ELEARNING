<?php include '../../controllers/includes/connectDB.php'; 
    $sql = "SELECT * FROM `majors`";
    $query = mysqli_query($conn,$sql);

    $sql2 = "SELECT * FROM `student_levels`";
    $query2 = mysqli_query($conn,$sql2);
?>
<!DOCTYPE html>
<html>


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>Register</title>
    <!-- Favicon -->
    <link href="./assets/img/brand/favicon.png" rel="icon" type="image/png">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Icons -->
    <link href="../../assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
    <link href="../../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <!-- Argon CSS -->
    <link type="text/css" href="../../assets/css/argon.css?v=1.0.0" rel="stylesheet">
</head>

<body class="bg-default">
    <div class="main-content">
        <!-- Header -->
        <div class="header bg-gradient-primary py-7 py-lg-8">
            <div class="separator separator-bottom separator-skew zindex-100">
                <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
            </div>
        </div>
        <!-- Page content -->
        <div class="container mt--9 pb-5">
            <div class="row justify-content-center">
                <div class="col-lg-8 ">
                    <div class="card bg-secondary shadow border-0">
                        <div class="card-body px-lg-5 py-lg-5">
                            <form action="../../controllers/backend/studentsFunctions.php" method="POST">
                                <div class="pl-lg-4">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-username">หมายเลขประจำตัวประชาชน</label>
                                                <input type="number" name="student_id" class="form-control form-control-alternative" placeholder="ตัวอย่าง : 3404156237891" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-last-name">เบอร์โทร</label>
                                                <input type="number" name="student_tel" class="form-control form-control-alternative" placeholder="ตัวอย่าง : 0987654321" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-email">คำนำหน้า</label>
                                                <select class="form-control form-control-alternative" name="student_prefix">
                                                    <option value="นาย">นาย</option>
                                                    <option value="นาง">นาง</option>
                                                    <option value="นางสาว">นางสาว</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-first-name">ชื่อ</label>
                                                <input type="text" name="student_fname" class="form-control form-control-alternative" placeholder="ตัวอย่าง : สมคิด" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-last-name">นามสกุล</label>
                                                <input type="text" name="student_lname" class="form-control form-control-alternative" placeholder="ตัวอย่าง : จิตใจดี" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-username">แผนก / คณะ</label>
                                                <select class="form-control form-control-alternative" name="major_id">
                                                    <?php while($row1 = mysqli_fetch_array($query)){ ?>
                                                        <option value="<?php echo $row1['major_id']; ?>">
                                                            <?php echo $row1['major_name']; ?>
                                                        </option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-username">ระดับการศึกษา / ระดับชั้นปี</label>
                                                <select class="form-control form-control-alternative" name="level_id">
                                                    <?php while($row2 = mysqli_fetch_array($query2)){ ?>
                                                        <option value="<?php echo $row2['level_id']; ?>">
                                                            <?php echo $row2['level_name']; ?>
                                                        </option>
                                                    <?php }?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-last-name">รหัสผ่าน</label>
                                                <input type="password" name="student_password" class="form-control form-control-alternative" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary" name="register">Save</button>
                                                <a href="index.php" class="btn btn-danger">Close</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Core -->
    <script src="../../assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="../../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Optional JS -->
    <script src="../../assets/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="../../assets/vendor/chart.js/dist/Chart.extension.js"></script>
    <!-- Argon JS -->
    <script src="../../assets/js/argon.js?v=1.0.0"></script>
</body>

</html>