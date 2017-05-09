<?php


$connect = mysqli_connect("localhost","root","","finaldb");
$data = json_decode(file_get_contents("php://input"));
if(count($data) > 0){
    $first_name = mysqli_real_escape_string($connect, $data->firstname);
    $last_name = mysqli_real_escape_string($connect, $data->lastname);
    $password = mysqli_real_escape_string($connect, $data->password);
    //$dob = mysqli_real_escape_string($connect, $data->dob);
    $email = mysqli_real_escape_string($connect, $data->email);
    $user_name = mysqli_real_escape_string($connect, $data->username);
    $phone_No = mysqli_real_escape_string($connect, $data->phoneNo);

    $query = "insert into normal_customer(fname,lname,nc_password,nc_email,user_name,phone) values ('$first_name','$last_name','$password','$email','$user_name','$phone_No')";

    if(mysqli_query($connect, $query))
    {
        echo(console.log('Angular js 3'));
        // echo '<script type="text/javascript">alert("' SUccessful '")</script>'
        $alert = ' <script type=text/javascript>
      alert("Successfully added")
          </script>';
          print $alert;
    }
    else
    {
        echo 'Error';
    }
}
?>
