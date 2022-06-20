<?php
if(isset($_POST['btn_add'])){
    $ddl_pos = $_POST['ddl_pos'];
    $txt_cname = $_POST['txt_cname'];
    $txt_contact = $_POST['txt_contact'];
    $txt_address = $_POST['txt_address'];
    $txt_sterm = $_POST['txt_sterm'];
    $txt_eterm = $_POST['txt_eterm'];

    if(isset($_SESSION['role'])){
        $action = 'Added Official named '.$txt_cname;
        $iquery = mysqli_query($con,"INSERT INTO tbllogs (user,logdate,action) values ('".$_SESSION['role']."', NOW(), '".$action."')");
    }

    $q = mysqli_query($con,"SELECT * from tblofficial where sPosition = '".$ddl_pos."' and termStart = '".$txt_sterm."' and termEnd = '".$txt_eterm."' ");
    $ct = mysqli_num_rows($q);


    if($ct != 0){
        $query = mysqli_query($con,"INSERT INTO tblofficial (sPosition,completeName,pcontact,paddress,termStart,termEnd,status) 
        values ('$ddl_pos', '$txt_cname', '$txt_contact', '$txt_address', '$txt_sterm', '$txt_eterm', 'Ongoing Term')") or die('Error: ' . mysqli_error($con));
        if($query == true)
        {
            $_SESSION['added'] = 1;
            header ("location: ".$_SERVER['REQUEST_URI']);
        }   
    }
    else{
        $_SESSION['duplicate'] = 1;
        header ("location: ".$_SERVER['REQUEST_URI']);
    }
    
}


if(isset($_POST['btn_save']))
{
    $txt_id = $_POST['hidden_id'];
    $txt_edit_img = $_POST['txt_edit_img'];
    $txt_edit_cname = $_POST['txt_edit_cname'];
    $txt_edit_contact = $_POST['txt_edit_contact'];
    $txt_edit_address = $_POST['txt_edit_address'];
    $txt_edit_sterm = $_POST['txt_edit_sterm'];
    $txt_edit_eterm = $_POST['txt_edit_eterm'];


    if(isset($_SESSION['role'])){
        $action = 'Update Official named '.$txt_edit_cname;
        $iquery = mysqli_query($con,"INSERT INTO tbllogs (user,logdate,action) values ('".$_SESSION['role']."', NOW(), '".$action."')");
    }

    $update_query = mysqli_query($con,"UPDATE tblofficial set filename='".$txt_edit_img."', completeName = '".$txt_edit_cname."', pcontact = '".$txt_edit_contact."', paddress = '".$txt_edit_address."', termStart = '".$txt_edit_sterm."', termEnd = '".$txt_edit_eterm."' where id = '".$txt_id."' ") or die('Error: ' . mysqli_error($con));


$update_query= mysqli_query($con,"INSERT INTO tblofficial (filename) 
        values ('$text_edit_img')") or die('Error: ' . mysqli_error($con));
        




    if($update_query == true){
        $_SESSION['edited'] = 1;
        header("location: ".$_SERVER['REQUEST_URI']);
    }
}

if(isset($_POST['btn_end']))
{

    $txt_id = $_POST['hidden_id'];

    $end_query = mysqli_query($con,"UPDATE tblofficial set status = 'End Term' where id = '$txt_id' ") or die('Error: ' . mysqli_error($con));

    if($end_query == true){
        $_SESSION['end'] = 1;
        header("location: ".$_SERVER['REQUEST_URI']);
    }
}

if(isset($_POST['btn_start']))
{

    $txt_id = $_POST['hidden_id'];

    $start_query = mysqli_query($con,"UPDATE tblofficial set status = 'Ongoing Term' where id = '$txt_id' ") or die('Error: ' . mysqli_error($con));

    if($start_query == true){
        $_SESSION['start'] = 1;
        header("location: ".$_SERVER['REQUEST_URI']);
    }
}

if(isset($_POST['btn_delete']))
{
    if(isset($_POST['chk_delete']))
    {
        foreach($_POST['chk_delete'] as $value)
        {
            $delete_query = mysqli_query($con,"DELETE from tblofficial where id = '$value' ") or die('Error: ' . mysqli_error($con));
                    
            if($delete_query == true)
            {
                $_SESSION['delete'] = 1;
                header("location: ".$_SERVER['REQUEST_URI']);
            }
        }
    }
}


?>
<?php

if(isset($_POST['btn_add'])){
    $txt_doc = $_POST['txt_doc'];
    $txt_act = $_POST['txt_act'];
    $txt_desc = $_POST['txt_desc'];

   // $chkdup = mysqli_query($con, "SELECT * from tblactivity where householdno = ".$txt_householdno." ");
    //$num_rows = mysqli_num_rows($chkdup);

    if(isset($_SESSION['role'])){
        $action = 'Added Activity '.$txt_act;
        $iquery = mysqli_query($con,"INSERT INTO tbllogs (user,logdate,action) values ('".$_SESSION['role']."', NOW(), '".$action."')");
    }


    //if($num_rows == 0){
        $query = mysqli_query($con,"INSERT INTO tblactivity (dateofactivity,activity,description) 
            values ('$txt_doc', '$txt_act', '$txt_desc')") or die('Error: ' . mysqli_error($con));
        $id = mysqli_insert_id($con);
        if(isset($_FILES['files']))
        {
            foreach ($_FILES['files']['tmp_name'] as $key => $tmp_name){

                $target="photo/";
                $milliseconds = round(microtime(true) * 1000);
                $name = $milliseconds.$_FILES['files']['name'][$key];
                $target=$target.$name;

                    if(move_uploaded_file($tmp_name, $target)){
                        mysqli_query($con,"INSERT INTO tblactivityphoto (activityid,filename) 
                    values ('$id', '".$name."')") or die('Error: ' . mysqli_error($con));
                    }
 
                }
        }

        if($query == true)
        {
            $_SESSION['added'] = 1;
            header ("location: ".$_SERVER['REQUEST_URI']);
        }     
    //}
    //else{
    //    $_SESSION['duplicate'] = 1;
    //    header ("location: ".$_SERVER['REQUEST_URI']);
    //}
}


if(isset($_POST['btn_save']))
{
    $txt_id = $_POST['hidden_id'];
    $txt_edit_doc = $_POST['txt_edit_doc'];
    $txt_edit_act = $_POST['txt_edit_act'];
    $txt_edit_desc = $_POST['txt_edit_desc'];

    $update_query = mysqli_query($con,"UPDATE tblactivity set dateofactivity = '".$txt_edit_doc."', activity = '".$txt_edit_act."', description = '".$txt_edit_desc."' where id = '".$txt_id."' ") or die('Error: ' . mysqli_error($con));

    if(isset($_SESSION['role'])){
        $action = 'Update Activity '.$txt_edit_act;
        $iquery = mysqli_query($con,"INSERT INTO tbllogs (user,logdate,action) values ('".$_SESSION['role']."', NOW(), '".$action."')");
    }

    if($update_query == true){
        $_SESSION['edited'] = 1;
        header("location: ".$_SERVER['REQUEST_URI']);
    }
}

?>