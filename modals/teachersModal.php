<?php 
    include '../../controllers/includes/connectDB.php'; 
    $sql = "SELECT * FROM `majors`";
    $query = mysqli_query($conn,$sql);
?>
<div class="modal fade" id="add-teacher" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Teacher</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
            </div>
            <div class="modal-body">
                <form action="../../controllers/backend/teachersFunctions.php" method="POST">
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-username">หมายเลขประจำตัวประชาชน</label>
                                    <input type="number" name="teacher_id" class="form-control form-control-alternative" placeholder="ตัวอย่าง : 3404501678219" required>
                                </div>
                            </div>
                            <?php if($_SESSION['user'][4]=='Y') {?>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-username">แผนก / คณะ</label>
                                    <select class="form-control form-control-alternative" name="major_id">
                                        <?php while($row1 = mysqli_fetch_array($query)){ ?>
                                            <option value="<?php echo $row1['major_id']; ?>">
                                                <?php echo $row1['major_name']; ?>
                                            </option>
                                        <?php } $conn = null;?>
                                    </select>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="row">
                            <div class="col-lg-2">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-email">คำนำหน้า</label>
                                    <select class="form-control form-control-alternative" name="teacher_prefix">
                                            <option value="นาย">นาย</option>
                                            <option value="นาง">นาง</option>
                                            <option value="นางสาว">นางสาว</option>
                                          </select>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-first-name">ชื่อ</label>
                                    <input type="text" name="teacher_fname" class="form-control form-control-alternative" placeholder="ตัวอย่าง : ประกาษิศ" required>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-last-name">นามสกุล</label>
                                    <input type="text" name="teacher_lname" class="form-control form-control-alternative" placeholder="ตัวอย่าง : นิติโรชภานิชย์" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-last-name">เบอร์โทร</label>
                                    <input type="number" name="teacher_tel" class="form-control form-control-alternative" placeholder="ตัวอย่าง : 0987654321" required>
                                </div>
                            </div>
                            <?php if($_SESSION['user'][4] == 'Y') {?>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">ตำแหน่ง</label>
                                    <div class="custom-control custom-checkbox mb-3">
                                        <input class="custom-control-input form-control-alternative" id="customCheck1" name="header_faculty" value="Y" type="checkbox">
                                        <label class="custom-control-label" for="customCheck1">หัวหน้าแผนก / หัวหน้าคณะ</label>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" name="insert" value="<?php echo $_SESSION['user'][4]; ?>">Save </button>
                            <button type="reset" class="btn btn-danger" data-dismiss="modal">Close</button>
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

?>
<div class="modal fade" id="edit-teacher" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Teacher</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
            </div>
            <div class="modal-body">
                <form action="../../controllers/backend/teachersFunctions.php" method="POST">
                    <input type="hidden" id="teacher_id2" name="id">
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-username">หมายเลขประจำตัวประชาชน</label>
                                    <input type="number" name="teacher_id" id="teacher_id" class="form-control form-control-alternative" placeholder="ตัวอย่าง : 3404501678219" required>
                                </div>
                            </div>
                            <?php if($_SESSION['user'][4]=='Y'){?>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-username">แผนก / คณะ</label>
                                    <select class="form-control form-control-alternative" name="major_id" id="major_id">
                                        <?php while($row1 = mysqli_fetch_array($query)){ ?>
                                            <option value="<?php echo $row1['major_id']; ?>">
                                                <?php echo $row1['major_name']; ?>
                                            </option>
                                        <?php } $conn = null;?>
                                    </select>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="row">
                            <div class="col-lg-2">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-email">คำนำหน้า</label>
                                    <select class="form-control form-control-alternative" name="teacher_prefix" id="teacher_prefix">
                                            <option value="นาย">นาย</option>
                                            <option value="นาง">นาง</option>
                                            <option value="นางสาว">นางสาว</option>
                                          </select>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-first-name">ชื่อ</label>
                                    <input type="text" name="teacher_fname" class="form-control form-control-alternative" id="teacher_fname" placeholder="ตัวอย่าง : ประกาษิศ" required>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-last-name">นามสกุล</label>
                                    <input type="text" name="teacher_lname" class="form-control form-control-alternative" id="teacher_lname" placeholder="ตัวอย่าง : นิติโรชภานิชย์" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-last-name">เบอร์โทร</label>
                                    <input type="number" name="teacher_tel" class="form-control form-control-alternative" id="teacher_tel" placeholder="ตัวอย่าง : 0987654321" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary" name="edit">Save </button>
                                    <button type="reset" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>