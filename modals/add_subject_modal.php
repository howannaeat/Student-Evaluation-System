<!-- Add New -->
<div class="modal fade" id="add_subject_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Add New Subject</h4>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form method="POST" action="">

                            <!-- NAME -->
                            <div class="row form-group">
                                <div class="col-lg-3">
                                    <label class="control-label modal-label">Subject Code: </label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" maxlength="255" name="subjectcode" placeholder="Enter subject code" required>
                                </div>
                                </div>


                            <div class="row form-group">

                                <div class="col-lg-3">
                                    <label class="control-label modal-label">Subject Description: </label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" maxlength="255" name="subjectdesc" placeholder="Enter subject description" required>
                                </div>
                            </div>


                            <div class="row form-group">
                                <!-- UNITS -->
                                <div class="col-lg-3">
                                    <label class="control-label modal-label">Units: </label>
                                </div>
                                <div class="col-lg-9">
                                    <select class="form-control" name="subject_units" placeholder="Choose" class="form-control" required>
                                        <option value="Male">2</option>
                                        <option value="Female">3</option>
                                    </select>
                                </div>
                                </div>


                            <div class="row form-group">
                            
                                <!-- PREREQUISITE -->
                                <div class="col-lg-3">
                                    <label class="control-label modal-label">Prerequisite: </label>
                                </div>
                                <div class="col-lg-9">
                                    <!--begin option-->
                                    <select class="form-control" name="prerequisite" placeholder="Select subject" required>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="NONE">NONE</option>
                                    </select>
                                    <!--end-->
                                </div>
                            </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="fas fa-ban"></span> Cancel</button>
                <button type="submit" name="add" class="btn btn-success"><span class="fas fa-save"></span> Add</a>
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