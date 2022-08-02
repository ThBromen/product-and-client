<!DOCTYPE html>
<?php

require("connect.php");

if(isset($_POST['submit'])){
    // $id =$_REQUEST['id'];
    // $fname =$_REQUEST['fname'];
    // $lname =$_REQUEST['lname'];
    // $address =$_REQUEST['address'];
    $id =mysqli_real_escape_string($con,$_POST['id']);
    $fname =mysqli_real_escape_string($con,$_POST['fname']);
    $lname =mysqli_real_escape_string($con,$_POST['lname']);
    $address =mysqli_real_escape_string($con,$_POST['address']);

    $rs = mysqli_query($con, "INSERT  INTO customer(cus_id,cus_fname,cus_lname,cus_address) VALUES($id,'$fname','$lname','$address')");
    if($rs){
        echo "byamaze kujyamo";
    }
    else{
        echo "hari ikibazo cyavutse".mysqli_error($con);
        }
}
// if(isset($_post['upload'])){
//     $query = "select * from customer";
//     $re= mysqli_query($id,$fname,$lname,$address);
//     if($re){
//         while($row = mysqli_fetch_array($re)){
// echo $row = mysqli['id',];

//         }
//     }

// }

?>

<html>
    <body>

<form method="post" action="">
id<input type="text" name="id"><br>
fname<input type="text" name="fname"><br>
lname<input type="text" name="lname"><br>
address<input type="text" name="address"><br>
<input type="button" value="Submit" name="submit">
<input type="button" value="upload" name="upload">
</form>
</body>
</html>