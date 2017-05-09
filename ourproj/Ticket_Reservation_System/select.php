<?php
echo "DOne";
echo "DOne";
alert("");
$connect = mysqli_connect("localhost","root","","ourdb");
$output = array();

$query = "select * from tbl_user";

//$result = mysqli_query($connect, $query);
$result = mysql_query($query,$connect) or die("Query Not Executed " . mysql_error($connect));
echo "DOne";
if(mysqli_num_rows($result) > 0 ){
    while($row = mysql_fetch_assoc($result))
    {
        $output[]=$row;
        
    }

}
echo "DOne";
for(int i=0;i<$output.length();i++){
echo $output[i];
    //echo "json_encode($output)";
}
   // return json_encode($output);



?>