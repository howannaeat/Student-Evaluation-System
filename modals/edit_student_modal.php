<!-- Add New -->
<div class="modal fade" id="edit_student_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Edit Student Details</h4>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form method="POST" action="">

                            <!-- NAME -->
                            <div class="row form-group">
                                <div class="col-lg-1">
                                    <label class="control-label modal-label">Name: </label>
                                </div>
                                <div class="col-lg-3">
                                    <input type="text" class="form-control" maxlength="255" name="fname" pattern="^[a-zA-Z\s]+$" data-bv-regexp-message="Please follow format" placeholder="Enter first name" required>
                                </div>

                                <div class="col-lg-3">
                                    <input type="text" class="form-control" maxlength="255" placeholder="Enter middle name" name="mname" pattern="^[a-zA-Z\s]+$" data-bv-regexp-message="Please follow format">
                                </div>

                                <div class="col-lg-3">
                                    <input type="text" class="form-control" maxlength="255" placeholder="Enter last name" name="lname" pattern="^[a-zA-Z\s]+$" data-bv-regexp-message="Please follow format" required>
                                </div>

                                <div class="col-lg-2">
                                    <input type="text" class="form-control" maxlength="255" placeholder="Enter suffix name" name="suffix" pattern="^[a-zA-Z\s]+$" data-bv-regexp-message="Please follow format">
                                </div>
                            </div>

                            <div class="row form-group">
                                <!-- Student ID -->
                                <div class="col-lg-2">
                                    <label class="control-label modal-label">Student ID No.: </label>
                                </div>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" maxlength="20" name="studentid" pattern="^[\d]{4}[-][\d]{4}[-][A-Z]{2}$" data-bv-regexp-message="Please follow Student ID No. format" placeholder="Enter Student ID No. (Example: 2022-1234-AB)" required>
                                </div>
                                
                                <!-- ADDRESS  -->
                                <div class="col-lg-2">
                                    <label class="control-label modal-label">Address </label>
                                </div>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" maxlength="20" name="address" placeholder="Enter Address (Barangay, Municipality, Province/City)" required>
                                </div>
                            </div>

                            <div class="row form-group">
                                <!-- sex -->
                                <div class="col-lg-2">
                                    <label class="control-label modal-label">Sex: </label>
                                </div>
                                <div class="col-lg-4">
                                    <select class="form-control" id="sex" name="sex" placeholder="Choose" class="form-control" required>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>

                                <!-- date of birth -->
                                <div class="col-lg-2">
                                    <label class="control-label modal-label">Date of birth: </label>
                                </div>
                                <div class="col-lg-4">
                                    <input type="date" id="birthdate" name="birthdate" placeholder="MM-DD-YYYY" class="form-control" required>
                                </div>
                            </div>

                            <div class="row form-group">
                                <!-- year level -->
                                <div class="col-lg-2">
                                    <label class="control-label modal-label">Year Level: </label>
                                </div>
                                <div class="col-lg-4">
                                    <!--begin option-->
                                    <select class="form-control" name="yearlevel" placeholder="Select Year Level" required>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                    </select>
                                    <!--end-->
                                </div>

                                <!-- academic year -->
                                <div class="col-lg-2">
                                    <label class="control-label modal-label">Academic Year: </label>
                                </div>
                                <div class="col-lg-4">
                                    <!--begin option-->
                                    <select class="form-control" name="academicyear" placeholder="Select Academic Year" required>
                                        <option value="2020-2021">2020-2021</option>
                                        <option value="2021-2022">2021-2022</option>
                                        <option value="2022-2023">2022-2023</option>
                                        <option value="2023-2024">2023-2024</option>
                                        <option value="2024-2025">2024-2025</option>
                                        <option value="2025-2026">2025-2026</option>
                                        <option value="2027-2028">2027-2028</option>
                                    </select>
                                    <!--end-->
                                </div>
                            </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="fas fa-ban"></span> Cancel</button>
                <button type="submit" name="add" class="btn btn-success"><span class="fas fa-save"></span> Update</a>
            </div>
            </form>
            <script>
                $(document).ready(function() {
                    $('#addNewStudent_Modal').bootstrapValidator();
                });
            </script>
        </div>
    </div>
</div>