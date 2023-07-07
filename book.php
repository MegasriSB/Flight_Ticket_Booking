<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Flight</title>
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
        html,body{
            background: rgb(24,163,218);
            background: linear-gradient(194deg, rgba(24,163,218,1) 15%, rgba(255,255,255,1) 83%);
            height: 120%;
            background-repeat: no-repeat;
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

        .btn{
            color: rgb(50, 49, 49);
            font-size: 23px;
            background:  rgb(24, 163, 218);
            padding: 5px 10px 5px 10px;
            text-decoration: none;
            border: none;
            width: 100%;
        }

        .container{
            position: absolute;
            width: 50%;
            height: 110%;
            overflow-y: scroll;
            left: 25%;
            border-radius: 10px;
            background: rgb(190,210,236);
            background: radial-gradient(circle, rgba(190,210,236,1) 15%, rgba(255,255,255,1) 83%);
            -webkit-box-shadow: 9px 13px 11px -6px rgba(0,0,0,0.23);
            -moz-box-shadow: 9px 13px 11px -6px rgba(0,0,0,0.23);
            box-shadow: 9px 13px 11px -6px rgba(0,0,0,0.23);
        }

        .container::-webkit-scrollbar {
        display: none;
        }

        .container {
        -ms-overflow-style: none;  
        scrollbar-width: none;  
        }

        .text1{
      position: relative;
      top: 5%;
      text-align: center;
    }

    .inputBx{
      position: relative;
      top: 35px;
      left: 100px;
    }

    p{
      font-family: 'Poppins';
      color: black;
      text-align: left;
      font-weight: bold;
      margin-bottom: 1%;
    }

    .form-control{
      position: relative;
      border: none ;
      border-bottom: grey solid 2px;
      top:5px;
    }

    .flex-nowrap{
      width: 70%;
    }

    .btn {
      -webkit-border-radius: 24;
      -moz-border-radius: 24;
      border-radius: 15px;
      font-family: Arial;
      color: rgb(50, 49, 49);
      font-size: 23px;
      background:  rgb(24, 163, 218);
      padding: 10px 20px 10px 20px;
      text-decoration: none;
      border: none;
      width: 50%;
      position: relative;
      left: 65px;
      top: 30px;
      font-family: 'Poppins';
      cursor: pointer;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      -webkit-transition-duration: 0.3s;
      transition-duration: 0.3s;
      -webkit-transition-property: box-shadow, tranform;
      transition-property: box-shadow, tranform;
    }

    .btn:hover {
      background: rgb(21, 154, 207);
      text-decoration: none;
      color: #ffffff;
      -webkit-transform: scale(1.1);
      transform: scale(1.1);
    }
    </style>
</head>
<body>
  <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="loginsuccess.php">Search Flight</a></li>
    <li><a href="mybookings.php">My Bookings</a></li>
    <li style="float:right"><a class="active" href="logout.php">Logout</a></li>
  </ul>
  <br>
  <?php
  include 'db.php';
  $flight_number = $_REQUEST["rflightnumber"];
  $date = $_REQUEST["rdate"];
  $time = $_REQUEST["rtime"];
    try{
        $stmt = $conn->prepare("SELECT * FROM flights WHERE flight_number = ? AND flight_date = ? AND flight_time = ?"); 
        $stmt->bindParam(1, $flight_number);
        $stmt->bindParam(2, $date);
        $stmt->bindParam(3, $time);
        $stmt->execute();
        if($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            $airline = $row["airline"];
            $flight_date = $row["flight_date"];
            $flight_time = $row["flight_time"];
            $source = $row["source"];
            $destination = $row["destination"];
            $duration = $row["duration"];
            $capacity = $row["capacity"];
            $available_seats = $row["available_seats"];
            $fare = $row["fare"];
  ?>
  <div class="container">
    <h1 class="text1">Book Your Flight</h1>
    <form action="bookprocess.php" method="post">
      <div class="formgroup">
        <div class="inputBx">
          <p>Name</p>
          <div class="input-group flex-nowrap">
            <input type="text" class="form-control" aria-label="name" aria-describedby="addon-wrapping" name="rname">
          </div><br>
          <p>Email</p>
          <div class="input-group flex-nowrap">
            <input type="email" class="form-control" aria-label="email" aria-describedby="addon-wrapping" name="remail">
          </div><br>
          <p>Age</p>
          <div class="input-group flex-nowrap">
            <input type="number" class="form-control" aria-label="age" aria-describedby="addon-wrapping" name="rage">
          </div><br>
          <p>Gender</p>
          <div class="input-group flex-nowrap">
            <input type="text" class="form-control" aria-label="gender" aria-describedby="addon-wrapping" name="rgender">
          </div><br>
          <p>Flight Number</p>
          <div class="input-group flex-nowrap">
            <input type="text" class="form-control" value="<?php echo $flight_number; ?>" aria-label="flightnumber" aria-describedby="addon-wrapping" name="rflightnumber">
          </div><br>
          <p>Airline</p>
          <div class="input-group flex-nowrap">
            <input type="text" class="form-control" value="<?php echo $airline; ?>" aria-label="airline" aria-describedby="addon-wrapping" name="rairline">
          </div><br>
          <p>Source</p>
          <div class="input-group flex-nowrap">
            <input type="text" class="form-control" value="<?php echo $source; ?>" aria-label="source" aria-describedby="addon-wrapping" name="rsource">
          </div><br>
          <p>Destination</p>
          <div class="input-group flex-nowrap">
            <input type="text" class="form-control" value="<?php echo $destination; ?>" aria-label="destination" aria-describedby="addon-wrapping" name="rdestination">
          </div><br>
          <p>Date</p>
          <div class="input-group flex-nowrap">
            <input type="text" class="form-control" value="<?php echo $flight_date; ?>" aria-label="date" aria-describedby="addon-wrapping" name="rdate">
          </div><br>
          <p>Time</p>
          <div class="input-group flex-nowrap">
            <input type="text" class="form-control" value="<?php echo $flight_time; ?>" aria-label="time" aria-describedby="addon-wrapping" name="rtime">
          </div><br>
          <p>Fare</p>
          <div class="input-group flex-nowrap">
            <input type="number" class="form-control" value="<?php echo $fare; ?>" aria-label="fare" aria-describedby="addon-wrapping" name="rfare">
          </div><br>
          <button class="btn" type="submit">Book</button><br>
        </div>
      </div>
    </form>
  </div>
  <?php 
    }}
    catch(Exception $e){
        echo $e->getMessage();
    }
  ?>
</body>
</html>
