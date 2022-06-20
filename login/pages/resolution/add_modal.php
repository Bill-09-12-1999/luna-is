<!-- ========================= MODAL ======================= -->
            <div id="addModal" class="modal fade">
            <form method="post" enctype="multipart/form-data">
              <div class="modal-dialog modal-sm" style="width:300px !important;">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Add file</h4>
                    </div>
                    <div class="modal-body">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Title:</label>
                                    <textarea name="txt_doc" class="form-control input-sm" type="date" placeholder="Title"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Year:</label>
                                    <input name="txt_act" class="form-control input-sm" type="text" placeholder="Series of ..."/>
                                </div>
                                <div class="form-group">
                                    <label>Resolution No.:</label>
                                    <input name="txt_desc" class="form-control input-sm" placeholder="Res. No.">
                                </div>
                                <!--<div class="form-group">-->
                                <!--    <label class="control-label">Image:</label>-->
                                <!--    <input name="files" class="form-control input-sm" type="file" multiple/>-->
                                <!--</div>-->
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default btn-sm" data-dismiss="modal" value="Cancel"/>
                        <input type="submit" class="btn btn-primary btn-sm" name="btn_add" value="Add Resolution"/>
                    </div>
                </div>
              </div>
              </form>
            </div>
