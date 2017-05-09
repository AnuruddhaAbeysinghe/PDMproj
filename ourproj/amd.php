<?php

 $connect = mysqli_connect("localhost","root","","abc");  
$data = json_decode(file_get_contents("php://input"));
if(count($data) > 0){
    $name = mysqli_real_escape_string($connect, $data->moviename);
   $film = mysqli_real_escape_string($connect, $data->theater1);
 $screen_date = mysqli_real_escape_string($connect, $data->screendate1);
    $running_time = mysqli_real_escape_string($connect, $data->running_time);
    $full_ticket = mysqli_real_escape_string($connect, $data->full);
    $half_ticket = mysqli_real_escape_string($connect, $data->half);
    $vip_ticket = mysqli_real_escape_string($connect, $data->vip);
    $director = mysqli_real_escape_string($connect, $data->directorname1);
   $description = mysqli_real_escape_string($connect, $data->description);             
    
    $query = "insert into table1(movie_name,theater,screen_date,running_time,full_ticket,half_ticket,vip_ticket,director,discription) values ('$name','$film','$screen_date','$running_time','$full_ticket','$half_ticket','$vip_ticket','$director','$description')";

    if(mysqli_query($connect, $query))
    {
        echo "Data inserted..";
    }
    else
    {
        echo "Error";
    }
}
?>