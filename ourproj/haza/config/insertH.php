<?php


$connect = mysqli_connect("localhost","root","","finaldb");  
$data = json_decode(file_get_contents("php://input"));
if(count($data) > 0){
    $first_name = mysqli_real_escape_string($connect, $data->firstname);
    $last_name = mysqli_real_escape_string($connect, $data->lastname);
    $user_name = mysqli_real_escape_string($connect, $data->username);
    $password = mysqli_real_escape_string($connect, $data->password);
    $dob = mysqli_real_escape_string($connect, $data->dob);
    $email = mysqli_real_escape_string($connect, $data->email);
    $phone_No = mysqli_real_escape_string($connect, $data->phoneNo);

    $query = "insert into normalcustomer(company_name,company_code,bc_usename,bc_password,dob,reg_date,bc_contact_no) values ('$first_name','$last_name','$user_name','$password','$dob','$email','$phone_No')";

    if(mysqli_query($connect, $query))
    {
        $alert = ' 
      You are successfully registerd
          ';
          print $alert;
    }
    else
    {
        echo 'Error';
    }
}
?>