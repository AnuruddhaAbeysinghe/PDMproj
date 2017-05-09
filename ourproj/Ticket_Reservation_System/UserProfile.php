<?php

  $con=mysqli_connect("localhost","root","","finaldb");

  // Check connection
  if (mysqli_connect_errno())
  {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  $queryOffer = "SELECT o.offer_type,o.discount FROM offers o,normal_customer n WHERE o.nc_id=n.nc_id";
  $queryHistory = "select e.ename,r.res_date,r.seat_no,r.total_amount from event e,reservation r,normal_customer n where r.eid = e.eid and r.nc_id = n.nc_id";


  $resultOffer = mysqli_query($con,$queryOffer);
  $resultHistory = mysqli_query($con,$queryHistory);
  
    if (!$resultOffer) {
    printf("Error: %s\n", mysqli_error($con));
    exit();
}
////Offer details////////////////////////////////
  $rowsOffer = array();
  
  while($r = mysqli_fetch_array($resultOffer)) {
    $rowsOffer[] = $r;
  }
  //var_dump($rows)
  print '{"records":' .json_encode($rowsOffer) ."}";

   if (!$resultOffer) {
    printf("Error: %s\n", mysqli_error($con));
    exit();
}
/////History details//////////////////////////////
  $rowsHistory = array();
  
  while($r = mysqli_fetch_array($resultHistory)) {
    $rowsHistory[] = $r;
  }
  //var_dump($rows)
  print '{"records":' .json_encode($rowsHistory) ."}";

 
?>