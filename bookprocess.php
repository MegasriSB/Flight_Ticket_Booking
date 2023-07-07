<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket</title>
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

        .process td, .process th {
        border: 1px solid #ddd;
        padding: 8px;
        }

        .process tr{
        background-color: #f2f2f2;
        }

        .process tr:hover{
        background-color: #ddd;
        }

        .process th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: rgb(24, 163, 218);
        color: white;
        }

        h1{
            position: relative;
            left: 5%;
        }
    </style>
</head>
<body>
    <img src="imgs/flight1.jpg">
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="loginsuccess.php">Search Flight</a></li>
        <li><a href="mybookings.php">My Bookings</a></li>
        <li style="float:right"><a class="active" href="logout.php">Logout</a></li>
    </ul>
    <?php 
    include 'db.php';
    $name = $_REQUEST["rname"];
    $email = $_REQUEST["remail"];
    $age = $_REQUEST["rage"];
    $gender = $_REQUEST["rgender"];
    $flight_number = $_REQUEST["rflightnumber"];
    $airline = $_REQUEST["rairline"];
    $source = $_REQUEST["rsource"];
    $destination = $_REQUEST["rdestination"];
    $date = $_REQUEST["rdate"];
    $time = $_REQUEST["rtime"];
    $fare = $_REQUEST["rfare"];
    $numTickets = 1;

    $checkAvailabilityStmt = null;
    $updateSeatCountStmt = null;
    $saveBookingStmt = null;

    try {
        // $host = 'localhost';
        // $dbname = 'airlines';
        // $conn = new PDO("mysql:host=$host;dbname=$dbname","root","Madurai@123");

        $checkAvailabilityQuery = "SELECT * FROM flights WHERE flight_number = ? and flight_date = ? and flight_time = ?";
        $checkAvailabilityStmt = $conn->prepare($checkAvailabilityQuery);
        $checkAvailabilityStmt->bindParam(1, $flight_number);
        $checkAvailabilityStmt->bindParam(2, $date);
        $checkAvailabilityStmt->bindParam(3, $time);
        $checkAvailabilityStmt->execute();
        $availabilityResult = $checkAvailabilityStmt->fetch(PDO::FETCH_ASSOC);
        $availableSeats = $availabilityResult["available_seats"];

        if ($availableSeats >= $numTickets) {
            $updatedSeats = $availableSeats - $numTickets;

            $updateSeatCountQuery = "UPDATE flights SET available_seats = ? WHERE flight_number = ? and flight_date = ? and flight_time = ?";
            $updateSeatCountStmt = $conn->prepare($updateSeatCountQuery);
            $updateSeatCountStmt->bindParam(1, $updatedSeats);
            $updateSeatCountStmt->bindParam(2, $flight_number);
            $updateSeatCountStmt->bindParam(3, $date);
            $updateSeatCountStmt->bindParam(4, $time);
            $updateSeatCountStmt->execute();
            $seatnum = $updatedSeats + 1;

            $saveBookingStmt = $conn->prepare("INSERT INTO booking (name, email, age, gender, flight_number, airline, seatnum, source, destination, flight_date, flight_time, fare) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $saveBookingStmt->bindParam(1, $name);
            $saveBookingStmt->bindParam(2, $email);
            $saveBookingStmt->bindParam(3, $age);
            $saveBookingStmt->bindParam(4, $gender);
            $saveBookingStmt->bindParam(5, $flight_number);
            $saveBookingStmt->bindParam(6, $airline);
            $saveBookingStmt->bindParam(7, $seatnum);
            $saveBookingStmt->bindParam(8, $source);
            $saveBookingStmt->bindParam(9, $destination);
            $saveBookingStmt->bindParam(10, $date);
            $saveBookingStmt->bindParam(11, $time);
            $saveBookingStmt->bindParam(12, $fare);
            $saveBookingStmt->execute();
    ?>
            <h1>Booking Successful!!</h1><br>
            <table class="process">
                <tr>
                    <th>Name</th>
                    <td><?php echo $name; ?></td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td><?php echo $email; ?></td>
                </tr>
                <tr>
                    <th>Age</th>
                    <td><?php echo $age; ?></td>
                </tr>
                <tr>
                    <th>Gender</th>
                    <td><?php echo $gender; ?></td>
                </tr>
                <tr>
                    <th>Flight Number</th>
                    <td><?php echo $flight_number; ?></td>
                </tr>
                <tr>
                    <th>Airline</th>
                    <td><?php echo $airline; ?></td>
                </tr>
                <tr>
                    <th>Seat Number</th>
                    <td><?php echo $seatnum; ?></td>
                </tr>
                <tr>
                    <th>Source</th>
                    <td><?php echo $source; ?></td>
                </tr>
                <tr>
                    <th>Destination</th>
                    <td><?php echo $destination; ?></td>
                </tr>
                <tr>
                    <th>Date</th>
                    <td><?php echo $date; ?></td>
                </tr>
                <tr>
                    <th>Time</th>
                    <td><?php echo $time; ?></td>
                </tr>
                <tr>
                    <th>Fare</th>
                    <td><?php echo $fare; ?></td>
                </tr>
                </table>
                <?php
    }
    $conn = null;
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>
                    