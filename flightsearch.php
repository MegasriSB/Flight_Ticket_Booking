<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Flight</title>
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

        table {
        font-family: Poppins;
        border-collapse: collapse;
        border-radius: 20%;
        margin-left: auto;
        margin-right: auto;
        width: 75%;
        }

        #searchflight td, #searchflight th {
        border: 1px solid #ddd;
        padding: 8px;
        }

        #searchflight tr{
        background-color: #f2f2f2;
        }

        #searchflight tr:hover{
        background-color: #ddd;
        }

        #searchflight th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: rgb(24, 163, 218);
        color: white;
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
            height: 70%;
            left: 25%;
            border-radius: 10px;
            background: rgb(190,210,236);
            background: radial-gradient(circle, rgba(190,210,236,1) 15%, rgba(255,255,255,1) 83%);
            -webkit-box-shadow: 9px 13px 11px -6px rgba(0,0,0,0.23);
            -moz-box-shadow: 9px 13px 11px -6px rgba(0,0,0,0.23);
            box-shadow: 9px 13px 11px -6px rgba(0,0,0,0.23);
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
<img src="imgs/flight1.jpg">
  <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="book.php">Book</a></li>
    <li><a href="mybookings.php">My Bookings</a></li>
    <li style="float:right"><a class="active" href="logout.php">Logout</a></li>
  </ul>
  <br>
    <center><h1>Flight Search Results</h1></center><br>
    <table id="searchflight">
        <tr>
            <th>Flight Number</th>
            <th>Airline</th>
            <th>Date</th>
            <th>Time</th>
            <th>Source</th>
            <th>Destination</th>
            <th>Duration</th>
            <th>Capacity</th>
            <th>Seat Availability</th>
            <th>Fare</th>
        </tr>
<?php
include 'db.php';
$date = $_REQUEST["rdate"];
$time = $_REQUEST["rtime"];

try {
    $stmt = $conn->prepare("SELECT * FROM flights WHERE flight_date = ? AND flight_time = ?");
    $stmt->bindParam(1, $date);
    $stmt->bindParam(2, $time);
    $stmt->execute();
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $flight_number = $row["flight_number"];
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
        <tr>
            <td><?php echo $flight_number; ?></td>
            <td><?php echo $airline; ?></td>
            <td><?php echo $flight_date; ?></td>
            <td><?php echo $flight_time; ?></td>
            <td><?php echo $source; ?></td>
            <td><?php echo $destination; ?></td>
            <td><?php echo $duration; ?></td>
            <td><?php echo $capacity; ?></td>
            <td><?php echo $available_seats; ?></td>
            <td><?php echo $fare; ?></td>
        </tr>
<?php
    }
    $conn = null;
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>
    </table>
    <br>
<div class="container">
    <h2 class="text1">Flight Number</h2>
    <form action="book.php" method="post">
        <div class="formgroup">
            <div class="inputBx">
                <p>Enter Flight Number:</p>
                <div class="input-group flex-nowrap">
                    <input type="text" class="form-control" aria-label="flightnumber" aria-describedby="addon-wrapping" name="rflightnumber" id="flightnumber" formControlName="flightnumber">
                </div><br>
                <p>Enter Date:</p>
                <div class="input-group flex-nowrap">
                    <input type="date" class="form-control" aria-label="date" aria-describedby="addon-wrapping" name="rdate" id="flightnumber" formControlName="date">
                </div><br>
                <p>Enter Time:</p>
                <div class="input-group flex-nowrap">
                    <input type="time" class="form-control" aria-label="time" aria-describedby="addon-wrapping" name="rtime" id="flightnumber" formControlName="time">
                </div>
                <button class="btn" type="submit">Go</button>
            </div>
        </div>
    </form>
</div>
</body>
</html>
