<?php include '../../controllers/includes/connectDB.php'; 
    $sql = "SELECT * FROM `majors`";
    $query = mysqli_query($conn,$sql);

    $sql2 = "SELECT * FROM `student_levels`";
    $query2 = mysqli_query($conn,$sql2);
?>
<div class="modal fade" id="add-student" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Student</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
            </div>
            <div class="modal-body">
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
                                    <input type="number" name="student_tel"  class="form-control form-control-alternative" placeholder="ตัวอย่าง : 0987654321" required>
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
                                    <input type="text" name="student_fname"  class="form-control form-control-alternative" placeholder="ตัวอย่าง : สมคิด" required>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-last-name">นามสกุล</label>
                                    <input type="text" name="student_lname"  class="form-control form-control-alternative" placeholder="ตัวอย่าง : จิตใจดี" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                        <?php if($_SESSION['user'][4]=='Y'){ ?>
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
                        <?php } ?>
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
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" name="insert" value="<?php echo $_SESSION['user'][4];?>">Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include '../../controllers/includes/connectDB.php'; 
    $sql = "SELECT * FROM `majors`";
    $query = mysqli_query($conn,$sql);

    $sql2 = "SELECT * FROM `student_levels`";
    $query2 = mysqli_query($conn,$sql2);
?>
<div class="modal fade" id="edit-student" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Student</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
            </div>
            <div class="modal-body">
                <form action="../../controllers/backend/studentsFunctions.php" method="POST">
                <input type="hidden" name="id" id="student_id2">
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-username">หมายเลขประจำตัวประชาชน</label>
                                    <input type="number" name="student_id" id="student_id" class="form-control form-control-alternative" placeholder="ตัวอย่าง : 3404156237891" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-last-name">เบอร์โทร</label>
                                    <input type="number" name="student_tel" id="student_tel"  class="form-control form-control-alternative" placeholder="ตัวอย่าง : 0987654321" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-email">คำนำหน้า</label>
                                    <select class="form-control form-control-alternative" name="student_prefix" id="student_prefix">
                                            <option value="นาย">นาย</option>
                                            <option value="นาง">นาง</option>
                                            <option value="นางสาว">นางสาว</option>
                                          </select>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-first-name">ชื่อ</label>
                                    <input type="text" name="student_fname" id="student_fname"  class="form-control form-control-alternative" placeholder="ตัวอย่าง : สมคิด" required>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-last-name">นามสกุล</label>
                                    <input type="text" name="student_lname" id="student_lname" class="form-control form-control-alternative" placeholder="ตัวอย่าง : จิตใจดี" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <?php if($_SESSION['user'][4]=='Y'){ ?>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-username">แผนก / คณะ</label>
                                    <select class="form-control form-control-alternative" name="major_id" id="major_id">
                                        <?php while($row1 = mysqli_fetch_array($query)){ ?>
                                            <option value="<?php echo $row1['major_id']; ?>">
                                                <?php echo $row1['major_name']; ?>
                                            </option>
                                        <?php }?>
                                    </select>
                                </div>
                            </div>
                            <?php } ?>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-username">ระดับการศึกษา / ระดับชั้นปี</label>
                                    <select class="form-control form-control-alternative" name="level_id" id="level_id">
                                        <?php while($row2 = mysqli_fetch_array($query2)){ ?>
                                            <option value="<?php echo $row2['level_id']; ?>">
                                                <?php echo $row2['level_name']; ?>
                                            </option>
                                        <?php }?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" name="edit">Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>