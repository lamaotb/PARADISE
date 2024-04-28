<?php
    include 'db_connection.php';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $time = $_POST['time'];

    $sql = "INSERT INTO booking (id, name, email, phone, date, time) VALUES (NULL, '$name', '$email', '$phone', '$date', '$time')";
    mysqli_query($conn, $sql);
    header("Location: index.html");
?>