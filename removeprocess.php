<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remove Flight</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
      crossorigin="anonymous"
    />
    <script
      src="https://kit.fontawesome.com/d70c1f6414.js"
      crossorigin="anonymous"
    ></script>
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap"
      rel="stylesheet"
    />
    <style> 
    body{
      overflow-y: scroll;
      font-family: 'Poppins';
      font-weight: 400;
    }

    body::-webkit-scrollbar {
      display: none;
    }

    body {
      -ms-overflow-style: none;  
      scrollbar-width: none;  
    }

    img{
      position: absolute;
      left: 0px;
      top: 0px;
      width: 100%;
      background-position: center;
      z-index: -1;
    }

    ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
    }

    li {
      float: left;
    }

    li a {
      display: block;
      color: black;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }

    li a:hover {
      color: rgb(14, 97, 129);
    }

    .text{
        position:relative;
        top: 12%;
        left: 10%;
    }

    </style>
</head>
<body>
<img src="imgs/flight1.jpg">
  <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="add.php">Add</a></li>
    <li><a href="remove.php">Remove</a></li>
    <li><a href="bookings.php">Bookings</a></li>
    <li style="float:right"><a class="active" href="adminlogout.php">Logout</a></li>
  </ul>
  <?php
  include 'db.php';
$flight_number = $_REQUEST["rflightnumber"];
$airline = $_REQUEST["rairline"];
$date = $_REQUEST["rdate"];
$time = $_REQUEST["rtime"];

try {
    $query = "DELETE FROM flights WHERE flight_number = ? AND airline = ? AND flight_date = ? AND flight_time = ?";
    $stmt = $conn->prepare($query);
    $stmt->execute([$flight_number, $airline, $date, $time]);

    $rowsAffected = $stmt->rowCount();
    if ($rowsAffected > 0) {
        echo "<h1 class='text'>Flight removed Successfully!</h1>";
    }
} catch (Exception $e) {
    echo $e;
}
?>
</body>
</html>