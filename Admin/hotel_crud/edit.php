<?php

$conn = mysqli_connect("localhost","root","","explore_plus");

if(!$conn){
    echo "Connection Error" . mysqli_connect_error() . '<br>';
}

$hotel_id = $_GET['hotel_id'];

$type = $name = $price = $avai_room = $place = $map = $photo = "";

$error = array('type' =>'', 'name' =>'', 'price' =>'', 'avai_room' =>'', 'place' =>'', 'map' =>'', 'photo'=>'');
if(isset($_GET['submit'])){
    if(empty($_GET['type'])){
        $error['type'] = "Type is required";
    }
    else{
        $type = $_GET['type'];
    }

    if(empty($_GET['name'])){
        $error['name'] = "Name is required";
    }
    else{
        $name = $_GET['name'];
    }

    if(empty($_GET['price'])){
        $error['price'] = "Price is required";
    }
    else{
        $price = $_GET['price'];
    }

    if(empty($_GET['avai_room'])){
        $error['avai_room'] = "Available Room is required";
    }
    else{
        $avai_room = $_GET['avai_room'];
    }

    if(empty($_GET['place'])){
        $error['place'] = "Place is required";
    }
    else{
        $place = $_GET['place'];
    }

    if(empty($_GET['map'])){
        $error['map'] = "Map is required";
    }
    else{
        $map = $_GET['map'];
    }

    $photo = $_GET['photo'];


    if(array_filter($error)){

    }
    else {
        $type = mysqli_real_escape_string($conn, $_GET['type']);
        $name = mysqli_real_escape_string($conn, $_GET['name']);
        $price = mysqli_real_escape_string($conn, $_GET['price']);
        $avai_room = mysqli_real_escape_string($conn, $_GET['avai_room']);
        $place = mysqli_real_escape_string($conn, $_GET['place']);
        $map = mysqli_real_escape_string($conn, $_GET['map']);
        $photo = mysqli_real_escape_string($conn, $_GET['photo']);


        $sql2 = "UPDATE hotel
                SET type = '{$type}', name = '{$name}' , price = '{$price}' , available_room = '{$avai_room}' , place = '{$place}' , map = '{$map}', photo = '{$photo}'
                WHERE hotel_id = {$hotel_id}";

        if (mysqli_query($conn, $sql2)) {
            header('Location: http://localhost/explore_plus/Admin/hotel_info.php');
        } else {
            echo "Query error" . mysqli_error($conn);
        }

    }
}

mysqli_close($conn);

?>