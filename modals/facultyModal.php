<div class="modal fade" id="add-faculty" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Faculty</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
            </div>
            <div class="modal-body">
                <form action="../../controllers/backend/facultyFunctions.php" method="POST">
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-username">รหัสแผนก / รหัสคณะ</label>
                                    <input type="text" name="major_id" class="form-control form-control-alternative" placeholder="ตัวอย่าง : 00001" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-last-name">ชื่อแผนก / ชื่อคณะ</label>
                                    <input type="text" name="major_name" class="form-control form-control-alternative" placeholder="ตัวอย่าง : เทคโนโลยีสารสนเทศ" required>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" name="insert">Save</button>
                            <button type="reset" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php   include '../../controllers/includes/connectDB.php';
        $sql2 = "SELECT header_major_id FROM majors";
        $query2 = mysqli_query($conn,$sql2);
        $row2 = mysqli_fetch_array($query2);
?>
<div class="modal fade" id="edit-faculty" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Faculty</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
            </div>
            <div class="modal-body">
                <form action="../../controllers/backend/facultyFunctions.php" method="POST">
                    <div class="pl-lg-4">
                        <input type="hidden" name="faculty_id2" id="faculty_id2">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-username">รหัสแผนก / รหัสคณะ</label>
                                    <input type="text" name="major_id" class="form-control form-control-alternative" placeholder="ตัวอย่าง : 00001" id="faculty_id" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-last-name">ชื่อแผนก / ชื่อคณะ</label>
                                    <input type="text" name="major_name" class="form-control form-control-alternative" id="faculty_name" placeholder="ตัวอย่าง : เทคโนโลยีสารสนเทศ" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-username">หัวหน้าแผนก / หัวหน้าคณะ</label>
                                    <select class="form-control form-control-alternative" name="header" id="header"></select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary" name="edit">Save</button>
                                    <button type="reset" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
