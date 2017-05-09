<?php


$connect = mysqli_connect("localhost","root","","ticket_booking_db");  
$data = json_decode(file_get_contents("php://input"));
if(count($data) > 0){
    $movie_name = mysqli_real_escape_string($connect, $data->movie_name);
    $theater = mysqli_real_escape_string($connect, $data->theater);
    $screen_date = mysqli_real_escape_string($connect, $data->screen_date);
    $running_time = mysqli_real_escape_string($connect, $data->running_time);
    $director_name = mysqli_real_escape_string($connect, $data->director_name);
  

    $query = "insert into add_movie_details(movie_name,theater,screen_date,runtime,director_name) values ('$movie_name','$theater','$screen_date','$running_time','$director_name')";

    if(mysqli_query($connect, $query))
    {
        alert("Hello World");
    }
    else
    {
        echo 'Error';
    }
}
?>