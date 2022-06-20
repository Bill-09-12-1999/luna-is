<?php echo '<div id="editModal'.$row['id'].'" class="modal fade">
<form method="post">
  <div class="modal-dialog modal-sm" style="width:300px !important;">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Edit Ordinance</h4>
        </div>
        <div class="modal-body">
        <div class="row">
            <div class="col-md-12">
                <input type="hidden" value="'.$row['id'].'" name="hidden_id" id="hidden_id"/>
                <div class="form-group">
                    <label>Title: </label>
                    <textarea name="txt_edit_desc" class="form-control input-sm">'.$row['title'].'</textarea>
                </div>
                <div class="form-group">
                    <label>Year: </label>
                    <input name="txt_edit_act" class="form-control input-sm" type="text" value="'.$row['series'].'" />
                </div>
                <div class="form-group">
                    <label>Resolution No. : </label>
                    <input name="txt_edit_doc" class="form-control input-sm" type="number" value="'.$row['ordno'].'"/>

                </div>
            </div>
        </div>
        </div>
        <div class="modal-footer">
            <input type="button" class="btn btn-default btn-sm" data-dismiss="modal" value="Cancel"/>
            <input type="submit" class="btn btn-primary btn-sm" name="btn_save" value="Save"/>
        </div>
    </div>
  </div>
</form>
</div>';?>
