<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Bookings</title>
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

    .container{
      position: absolute;
      width: 40%;
      height: 55%;
      left: 55%;
      top: 17%;
      border-radius: 10px;
      background: rgb(190,210,236);
      background: radial-gradient(circle, rgba(190,210,236,1) 15%, rgba(255,255,255,1) 83%);
      -webkit-box-shadow: 9px 13px 11px -6px rgba(0,0,0,0.23);
      -moz-box-shadow: 9px 13px 11px -6px rgba(0,0,0,0.23);
      box-shadow: 9px 13px 11px -6px rgba(0,0,0,0.23);
    }

      .text1{
      position: relative;
      top: 4%;
      text-align: center;
    }

    .inputBx{
      position: relative;
      top: 35px;
      left: 85px;
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
      left: 60px;
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
            <li><a href="add.php">Add</a></li>
            <li><a href="remove.php">Remove</a></li>
            <li><a href="bookings.php">Bookings</a></li>
            <li style="float:right"><a class="active" href="adminlogout.php">Logout</a></li>
        </ul>
        <div class = "container">
    <h2 class = "text1">View Flight</h2>
        <form action="adminbooking.php" method = "post">
          <div class="formgroup">
            <div class="inputBx">
              <p>Enter Flight Number: </p>
              <div class="input-group flex-nowrap">
                <input type="text" class="form-control" aria-label="flightnumber" aria-describedby="addon-wrapping" name="rflightnumber" id="flightnumber" formControlName="flightnumber">
              </div><br>
              <p>Time </p>
              <div class="input-group flex-nowrap">
                <input type="time" class="form-control" aria-label="time" aria-describedby="addon-wrapping" name="rtime">
              </div>
              <button class="btn" type="submit">Go</button>
            </div>
        </div>
        </form>
</div>
</body>
</html>
