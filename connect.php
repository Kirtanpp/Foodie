<?php
    $firstName = $_POST['firstName'];
    $foodName = $_POST['foodName'];
    $orderdetail $_POST['orderdetail'];
    $address = $_POST['address'];
    $number $_POST['number'];
    $want = $_POST['want'];
    $date = $_POST['date'];
//Database connection

    $conn = new mysqli('localhost', 'root', '', 'table');
    if($conn->connect_error) {
        die('Connection Failed : '.$conn->connect_error); 
    }else{
        $stmt = $conn->prepare("insert into booking(firstName, foodName, orderdetail, address, number, want, date)
        values(?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssiii",$firstName, $foodName, $orderdetail, $address, $number, $want, $date);
        $stmt->execute();
        echo "Your order taken Successfully...";
        $stmt->close();
        $conn->close();
    }
?>