<div class="modal fade" id="add-unit-test" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Unit / Test</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
            </div>
            <div class="modal-body">
                <form action="../../controllers/backend/testsFunctions.php" method="POST">
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-username">รหัสหน่วยการเรียนรู้ / รหัสแบบทดสอบ</label>
                                    <input type="text" name="test_id" class="form-control form-control-alternative" placeholder="ตัวอย่าง : A-123" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-last-name">ชื่อหน่วยการเรียนรู้ / ชื่อแบบทดสอบ</label>
                                    <input type="text" name="test_name" class="form-control form-control-alternative" placeholder="ตัวอย่าง : Basic Programing" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                            <label class="form-control-label" for="input-last-name">คำอธิบายหน่วยการเรียนรู้ / คำอธิบายแบบทดสอบ</label>
                                <textarea class="form-control form-control-alternative"  name="test_details" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" name="insert">Save </button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="edit-unit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Unit / Test</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
            </div>
            <div class="modal-body">
                <form action="../../controllers/backend/testsFunctions.php" method="POST">
                <input type="hidden" name="id" id="id2">
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-username">รหัสหน่วยการเรียนรู้ / รหัสแบบทดสอบ</label>
                                    <input type="text" name="test_id" class="form-control form-control-alternative" placeholder="ตัวอย่าง : A-123" id="id" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-last-name">ชื่อหน่วยการเรียนรู้ / ชื่อแบบทดสอบ</label>
                                    <input type="text" name="test_name" class="form-control form-control-alternative" placeholder="ตัวอย่าง : Basic Programing" id="name" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                            <label class="form-control-label" for="input-last-name">คำอธิบายหน่วยการเรียนรู้ / คำอธิบายแบบทดสอบ</label>
                                <textarea class="form-control form-control-alternative"  name="test_details" cols="30" rows="10" id="details"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" name="edit">Save </button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>