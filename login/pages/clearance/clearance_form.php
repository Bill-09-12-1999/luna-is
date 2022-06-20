<!DOCTYPE html>
<html id="clearance">
<style>
    @media print {
        .noprint {
        visibility: hidden;
         }
    }
    @page { size: auto;  margin: 4mm; }
</style>
    <?php
    session_start();
    if(!isset($_SESSION['role']))
    {
        header("Location: ../../login.php"); 
    }
    else
    {
    ob_start();
    $_SESSION['clr'] = $_GET['clearance'];
    include('../head_css.php'); ?>
    <body class="skin-black" >
        <!-- header logo: style can be found in header.less -->
        <?php 
        
        include "../connection.php";
        ?>
       <br><br>
        <div class="col-xs-12 col-sm-6 col-md-8" style="" >
            <div style=" background: black;" >
                <div class="col-xs-4 col-sm-6 col-md-3" style="background: white; margin-right:10px; border: 1px solid black;">
                    <center><image src="../../img/logo.png" style="width:77%;height:164px;"/></center>
                    <div style="margin-top:20px; text-align: center; word-wrap: break-word;">
                        <?php
                            $qry = mysqli_query($con,"SELECT * from tblofficial");
                            while($row=mysqli_fetch_array($qry)){
                                if($row['sPosition'] == "Barangay Captain"){
                                    echo '
                                    <p>
                                    <b>'.strtoupper($row['completeName']).'</b><br>
                                    <span style="font-size:12px;">PUNONG BARANGAY</span>
                                    </p>
                                    ';
                                }elseif($row['sPosition'] == "Kagawad (Appropriaation)"){
                                    echo '
                                    <p>
                                    KAG. '.strtoupper($row['completeName']).'<br>
                                    <span style="font-size:12px;">Committee chair on Appropriaation</span>
                                    </p>
                                    ';
                                }elseif($row['sPosition'] == "Kagawad (Infrastructure)"){
                                    echo '
                                    <p>
                                    KAG. '.strtoupper($row['completeName']).'<br>
                                    <span style="font-size:12px;">Committee chair on Infrastructure</span>
                                    </p>
                                    ';
                                }elseif($row['sPosition'] == "Kagawad (Means and Ways)"){
                                    echo '
                                    <p>
                                    KAG. '.strtoupper($row['completeName']).'<br>
                                    <span style="font-size:12px;">Committee chair on Means and Ways</span>
                                    </p>
                                    ';
                                }elseif($row['sPosition'] == "Kagawad (Agriculture)"){
                                    echo '
                                    <p>
                                    KAG. '.strtoupper($row['completeName']).'<br>
                                    <span style="font-size:12px;">Committee chair on Agriculture</span>
                                    </p>
                                    ';
                                }elseif($row['sPosition'] == "Kagawad (Women, Children and Family)"){
                                    echo '
                                    <p>
                                    KAG. '.strtoupper($row['completeName']).'<br>
                                    <span style="font-size:12px;">Committee chair on Women, Children and Family</span>
                                    </p>
                                    ';
                                }elseif($row['sPosition'] == "Kagawad (Health and Education)"){
                                    echo '
                                    <p>
                                    KAG. '.strtoupper($row['completeName']).'<br>
                                    <span style="font-size:12px;">Committee chair on Health and Education</span>
                                    </p>
                                    ';
                                }elseif($row['sPosition'] == "Kagawad (Transportation)"){
                                    echo '
                                    <p>
                                    KAG. '.strtoupper($row['completeName']).'<br>
                                    <span style="font-size:12px;">Committee chair on Transportation</span>
                                    </p>
                                    ';
                            }elseif($row['sPosition'] == "Kagawad (Peace and Order)"){
                                    echo '
                                    <p>
                                    KAG. '.strtoupper($row['completeName']).'<br>
                                    <span style="font-size:12px;">Committee chair on Peace and Order</span>
                                    </p>
                                    ';
                                }
                            }
                        ?>
                    </div>
                </div>
                </div>
                <div class="col-xs-7 col-sm-5 col-md-8" style="background: white;  ">
                    <div class="pull-left" style="font-size: 15px;"><b><br>
                        Republic of the Philippines<br>
                        Municipality of Burgos<br>
                        Province of Ilocos Sur<br>
                        BARANGAY LUNA<br></b>
                    </div>
                    <div class="pull-right" style="border: 2px solid black;">
                       <?php $qry1=mysqli_query($con,"SELECT * from tblresident r left join tblclearance c on c.residentid = r.id where residentid = '".$_GET['resident']."' and clearanceNo = '".$_GET['clearance']."' ");
                            while($row1 = mysqli_fetch_array($qry1)){
                        echo '<image src="../resident/image/'.basename($row1['image']).'" style="width:130px;height:130px;"/>';
                        }
                        ?>
                    </div><br><br><br><br><br><br><br>
                    <div class="col-xs-12 col-md-12">
                        <p class="text-center" style="font-size: 20px; font-size:bold;">OFFICE OF THE BARANGAY CAPTAIN<br><b style="font-size: 28px;">BARANGAY CLEARANCE</b></p>
                        <p style="font-size: 18px;">TO WHOM IT MAY CONCERN:</p>
                        <p style="text-indent:40px;text-align: justify;">This is to certify that the person whose photo, signature and right thumb mark appear herein, is a resident of Barangay luna, Burgos, Ilocos Sur and that the person had requested a criminal check from this office following is/are our findings.</p>

                        <?php
                            $qry=mysqli_query($con,"SELECT * from tblresident r left join tblclearance c on c.residentid = r.id where residentid = '".$_GET['resident']."' and clearanceNo = '".$_GET['clearance']."' ");
                            while($row = mysqli_fetch_array($qry)){
                                $bdate = date_create($row['bdate']);
                                $date = date_create($row['dateRecorded']);
                                echo '
                                <p>
                                    Surname: <b><u>'.strtoupper($row['lname']).'</u></b><br>
                                    First Name: <b><u>'.strtoupper($row['fname']).'</u></b><br>
                                    Middle Name: <b><u>'.strtoupper($row['mname']).'</u></b><br>
                                    Address: <b><u>'.strtoupper($row['formerAddress']).'</u></b><br>
                                    Birthdate and Place: <b><u>'.strtoupper(date_format($bdate,"m-d-Y")) .'/'.strtoupper($row['bplace']).'</u></b><br>
                                    Gender and Civil status: <b><u>'.strtoupper($row['gender']) .'/SINGLE</u></b><br>
                                    Nationality: <b><u>'.strtoupper($row['nationality']).'</u></b><br>
                                    Religion: <b><u>'.strtoupper($row['religion']).'</u></b><br>
                                    Purpose: <b><u>'.strtoupper($row['purpose']).'</u></b><br>
                                    Findings: <b><u>NO DEROGATORY RECORD</u></b><br>
                                </p>
                                
                                <p><b>
                                    RES. CERT. NO.: <u>'.strtoupper($row['clearanceNo']).'</u><br>
                                    ISSUED ON: <u>'.strtoupper(date_format($date,"F j, o")).'</u><br>
                                    ISSUED AT: <u>BARANGAY LUNA OFFICE</u><br>
                                    OR. NO.: <u>'.strtoupper($row['orNo']).'</u><br>
                                    ISSUED ON: <u>'.strtoupper(date_format($date,"F j, o")).'</u><br>
                                </b></p>
                                ';
                            }
                        ?>
                    </div>  
                    
                    <div class="col-md-5 col-xs-4" style="float:right;margin-top: -100px;">
                        <div style="height:100px; width:140px; border: 1px solid black;">
                            <center><span style="text-align: center; line-height: 160px;">Right Thumb Mark</span></center>
                        </div><br><br>
                        <p>Tax Payer's Signature</p>
                    </div>
                </div>
               
                <div class="col-xs-offset-6 col-xs-5 col-md-offset-6 col-md-4" ><br><br><br>
                    <?php
                    $qry = mysqli_query($con,"SELECT * from tblofficial");
                    while($row=mysqli_fetch_array($qry)){
                        if($row['sPosition'] == "Barangay Captain"){
                            echo '
                            <p>
                            <b style="font-size:18px;">'.strtoupper($row['completeName']).'<br>
                            <span style=" text-align: center;font-size:15px;">Punong Barangay</span></b>
                            </p>
                            ';
                        }
                    }
                    ?>
                </div>
                <div class="col-xs-8 col-md-4">
                    <?php
                    $qry = mysqli_query($con,"SELECT * from tblofficial");
                    while($row=mysqli_fetch_array($qry)){
                        if($row['sPosition'] == "Captain"){
                            echo '
                            <p>
                            <b style="font-size:18px; ">'.strtoupper($row['completeName']).'<br>
                            <span style=" text-align: center;">OFFICER OF THE DAY</span></b>
                            </p>
                            ';
                        }
                    }
                    ?>
                </div>
                <div class="col-xs-3 pull-right" style="margin-bottom:40px;">
                    <!--<img class=" pull-right" src="barcode.php?clr=<?php echo base64_decode($_GET['val']);?>" style="width:170px; height: 60px; " />-->

                    <!--<span class="pull-right"><?php echo substr_replace($_GET['clearance'],'****',0,3);?> </span>-->
               
                </div>
            </div>
        </div>
    <button class="btn btn-primary noprint" id="printpagebutton" onclick="PrintElem('#clearance')">Print</button>
    </body>
    <?php
    }
    ?>


    <script>
         function PrintElem(elem)
    {
        window.print();
    }

    function Popup(data) 
    {
        var mywindow = window.open('', 'my div', 'height=400,width=600');
        //mywindow.document.write('<html><head><title>my div</title>');
        /*optional stylesheet*/ //mywindow.document.write('<link rel="stylesheet" href="main.css" type="text/css" />');
        //mywindow.document.write('</head><body class="skin-black" >');
         var printButton = document.getElementById("printpagebutton");
        //Set the print button visibility to 'hidden' 
        printButton.style.visibility = 'hidden';
        mywindow.document.write(data);
        //mywindow.document.write('</body></html>');

        mywindow.document.close(); // necessary for IE >= 10
        mywindow.focus(); // necessary for IE >= 10

        mywindow.print();

        printButton.style.visibility = 'visible';
        mywindow.close();

        return true;
    }
    </script>
</html>