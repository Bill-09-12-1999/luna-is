<?php
                            if(isset($_POST['export'])){

                                include "connection.php";

                            $SQL1 = "SELECT count(*) as NumberofResident, round(monthlyincome,-1) as Income FROM tblresident group by monthlyincome ASC";
                            $SQL2 = "SELECT count(*) as NumberofResident,Zone FROM tblresident r group by r.zone ASC";
                            $SQL3 = "SELECT COUNT( * ) as NumberofResident , Age FROM tblresident GROUP BY age ASC";
                            $SQL4 = "SELECT count(*) as NumberofResident,HighestEducationalAttainment from tblresident group by highesteducationalattainment ASC";
                            // $SQL5 = "SELECT count(*) as NumberofResident,HighestEducationalAttainment from tblresident group by highesteducationalattainment ASC";

$arrsql = array($SQL1,$SQL2,$SQL3,$SQL4);
$arrhead = array("Resident Income Level \n Number of Residents \t Income","Population per Zone \n Number of Residents \t Zone Number","Age \n Number of Residents \t Age","Resident Educational Attainment \n Number of Residents \t Educational Attainment");
foreach(array_combine($arrsql,$arrhead) as $value => $headers)
{

$header = "$headers\n";
$result ='';
$exportData = mysqli_query($conn,$value) or die ( "error");

$fields = mysqli_num_fields( $exportData );

while( $row = mysqli_fetch_row( $exportData ) )
{
    $line = '';
    foreach( $row as $value )
    {
        if ( ( !isset( $value ) ) || ( $value == "" ) )
        {
            $value = "\t";
        }
        else
        {
            $value = str_replace( '"' , '""' , $value );
            $value = '"' . $value . '"' . "\t";
        }
        $line .= $value;
    }
    $result .= trim( $line ) . "\n";
}
$result = str_replace( "\r" , "" , $result );

if ( $result == "" )
{
    $result = "\nNo Record(s) Found!\n";
}

header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=Alisdan.xls");
header("Pragma: no-cache");
header("Expires: 0");
print "$header\n$result\n\n";

                            }}
                            ?>
