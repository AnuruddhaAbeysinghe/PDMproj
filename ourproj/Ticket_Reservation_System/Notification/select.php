<?php

  $con=mysqli_connect("localhost","root","","finaldb");

  // Check connection
  if (mysqli_connect_errno())
  {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  $query = "SELECT o.offer_type,o.discount FROM offers o,normal_customer n WHERE o.nc_id=n.nc_id";


  $result = mysqli_query($con,$query);
  
    if (!$result) {
    printf("Error: %s\n", mysqli_error($con));
    exit();
}

  $rows = array();
  
  while($r = mysqli_fetch_array($result)) {
    $rows[] = $r;
  }
  //var_dump($rows)
  print '{"records":' .json_encode($rows) ."}";

 
?>