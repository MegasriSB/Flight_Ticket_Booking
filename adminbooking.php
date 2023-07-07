<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Booking</title>
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

        .book td, .book th {
        border: 1px solid #ddd;
        padding: 8px;
        }

        .book tr{
        background-color: #f2f2f2;
        }

        .book tr:hover{
        background-color: #ddd;
        }

        .book th {
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
            <li><a href="add.php">Add</a></li>
            <li><a href="remove.php">Remove</a></li>
            <li><a href="bookings.php">Bookings</a></li>
            <li style="float:right"><a class="active" href="adminlogout.php">Logout</a></li>
        </ul>
        <?php
        include 'db.php';
session_start();

$adminemail = $_SESSION["adminemail"];
$flight_number = $_REQUEST["rflightnumber"];
$time = $_REQUEST["rtime"];

try {
    $query = "SELECT * FROM booking WHERE flight_number = ? AND flight_time = ?";
    $stmt = $conn->prepare($query);
    $stmt->execute([$flight_number, $time]);

    echo "<center><h1>All Bookings</h1></center><br>";
    echo "<table class='book'>";
    echo "<tr>
            <th>Name</th>
            <th>Email</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Flight Number</th>
            <th>Airline</th>
            <th>Seat Number</th>
            <th>Source</th>
            <th>Destination</th>
            <th>Date</th>
            <th>Time</th>
            <th>Fare</th>
          </tr>";

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $name = $row["name"];
        $email = $row["email"];
        $age = $row["age"];
        $gender = $row["gender"];
        $flight_number = $row["flight_number"];
        $airline = $row["airline"];
        $seatnum = $row["seatnum"];
        $source = $row["source"];
        $destination = $row["destination"];
        $flight_date = $row["flight_date"];
        $time = $row["flight_time"];
        $fare = $row["fare"];

        echo "<tr>
                <td>$name</td>
                <td>$email</td>
                <td>$age</td>
                <td>$gender</td>
                <td>$flight_number</td>
                <td>$airline</td>
                <td>$seatnum</td>
                <td>$source</td>
                <td>$destination</td>
                <td>$flight_date</td>
                <td>$time</td>
                <td>$fare</td>
              </tr>";
    }

    echo "</table>";
} catch (Exception $e) {
    echo $e;
}
?>
</body>
</html>