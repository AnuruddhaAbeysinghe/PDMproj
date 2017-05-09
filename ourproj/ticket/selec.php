<?php


$connect = mysqli_connect("localhost","root","","buy_ticekt");  
$data = json_decode(file_get_contents("php://input"));
if(count($data) > 0){
    $Name= mysqli_real_escape_string($connect, $data->Name);
    // $date= mysqli_real_escape_string($connect, $data->date);
    $Event = mysqli_real_escape_string($connect, $data->Event);
    $Place = mysqli_real_escape_string($connect, $data->Place);
    // $ShowTime = mysqli_real_escape_string($connect, $data->$ShowTime);
    $SelectCatagory = mysqli_real_escape_string($connect, $data->SelectCatagory);
    $Full = mysqli_real_escape_string($connect, $data->Full);
    $Half = mysqli_real_escape_string($connect, $data->Half);

    $query = "insert into reservation(Event_type,Event,Place,Category,Full,Half) values ('$Name','$Event','$Place','$SelectCatagory','$Full','$Half')";

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