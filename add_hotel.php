<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add hotel</title>
    <link rel="stylesheet" href="add_hotel.css">
</head>
<body>
    <div class="header">
        <div class="item"></div>
        <div class="item1">
            <img src="W.png" alt="">
        </div>
        <div class="item">
            <a href="add_place.html">Add Place</a>
            <a href="add_hotel.html">Add Hotel</a>
            <a href="add_mall.html">Add Mall</a>
        </div>
    </div>
    <div class="main">
        <div class="body">
            <h1>Add Hotel</h1>
            <form action="">
                <input type="text" name="name" placeholder="Name">
                <input type="text" name="image_path" placeholder="Image Path">
                <input type="text" name="location" placeholder="Location">
                <input type="text" name="rating" placeholder="Rating">
                <button>Submit</button>
            </form>
        </div>
    </div>
</body>
</html>
<?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $db_name = 'Cityaddis';

    $con = mysqli_connect($servername, $username, $password, $db_name);
    if(!$con) {
        die ('cant connect' . mysqli_connect_error());
    } 
    if ($_SERVER["REQUEST_METHOD"] == 'POST') {
        $name = $_POST["name"];
        $image_path = $_POST["image_path"];
        $location = $POST["location"];
        $rating = $_POST["rating"];

        $sql = "INSERT INTO hotel(hotelname, imagepath, location , rating) VALUES ('$name', '$image_path', '$location', '$rating')";
        if (!mysqli_query($con, $sql)) {
            echo "Failed to insert Data";
        }
    }
    mysqli_close($con);

    ?>