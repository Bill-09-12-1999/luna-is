<?php echo '<div id="viewModal'.$row['id'].'" class="modal fade">
<form method="post"  enctype="multipart/form-data">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Resolution No.'.$row['resno'].' files</h4>
        </div>
        <div class="modal-body">
        <input type="hidden" name="hidden_id" value="'.$row['id'].'">

        <div class="row" >';
        
            $p = mysqli_query($con,"SELECT * from tbldocs where activityid = '".$row['id']."' ");
            while($row1 = mysqli_fetch_array($p)){
              
                echo '<div style="display:flex; margin:5px;">
                    <input type="checkbox" name="chk_deletephoto[]"  class="chk_deletephoto" value="'.$row1['id'].'" />
                    <a style="background:linear-gradient(to right,#194A40,#4D7850); width:100%; border-radius:10px; color:#EFB34C;" href="photo/'.basename($row1['filename']).'" style="color:#EFB34C;"/>'.basename($row1['filename']).'<img src="../../assets/dlfolder.png" style="width:130px;height:130px; float:right;color:#EFB34C;"></a>
                </div>';
            }
        

        echo '
        </div>
        </div>
        <div class="modal-footer">
            <div class="col-md-6"><input name="photos[]" class="form-control input-sm" type="file" multiple/></div>
            <input type="submit" class="btn btn-primary btn-sm" name="btn_addimage" value="Add"/>
            <input type="submit" class="btn btn-danger btn-sm" name="btn_remove" value="Remove Selected"/>
            <input type="button" class="btn btn-default btn-sm" data-dismiss="modal" value="Close"/>
        </div>
    </div>
  </div>
</form>
</div>';?>
