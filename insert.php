<?php


include 'connection.php';

$shop_name = $_POST['shop_name'];
$shop_type = $_POST['shop_type'];
$pin_code= $_POST['pin_code'];

$location = $_POST['location'];
$phone_no = $_POST['phone_no'];
$address = $_POST['address'];


$sql = "INSERT INTO users (shop_name,shop_type,phone_no,pin_code,address,location)
VALUES ('$shop_name', '$shop_type','$phone_no', '$pin_code', '$address', '$location');";


if ($conn->multi_query($sql) === TRUE) {



    echo "<script>window.location='index.php'</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
