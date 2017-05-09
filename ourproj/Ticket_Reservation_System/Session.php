<?php
include('C:\xampp\htdocs\Check1\Ticket_Reservation_System\Config\database.php');

session_start();

$user_check = $_SESSION['login_user'];

$ses_sql = mysql_query("select user_id, role from user where user_name = '".$user_check."' ");

while($row = mysql_fetch_assoc($ses_sql)){
    $login_session = $row['username'];
    $login_role = $row['role'];

}

if(!isset($_SESSION['login_user'])){
    header("location:Login_Details.html");
}
?>