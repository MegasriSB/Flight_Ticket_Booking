<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
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
      position: absolute;
      left: 2%;
    }

    .text span{
      color: rgb(14, 97, 129);
    }

    .text1{
      position: relative;
      top: 5%;
      text-align: center;
    }

    .text2{
      position: relative;
      top: 10%;
      left: 37%;
      line-height: 1.8em;
    }
    a{
        color: black;
    }

    .searchbox{
      position: absolute;
      top: 23%;
      right: 2%;
      width: 50%;
      height: 50%;
      border-radius: 10px;
      background: rgb(190,210,236);
      background: radial-gradient(circle, rgba(190,210,236,1) 15%, rgba(255,255,255,1) 83%);
      -webkit-box-shadow: 9px 13px 11px -6px rgba(0,0,0,0.23);
      -moz-box-shadow: 9px 13px 11px -6px rgba(0,0,0,0.23);
      box-shadow: 9px 13px 11px -6px rgba(0,0,0,0.23);
    }

    </style>
</head>
<body>
<img src="imgs/flight1.jpg">
  <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="adminloginsuccess.php">Edit</a></li>
    <li><a href="bookings.php">Bookings</a></li>
    <li style="float:right"><a class="active" href="adminlogout.php">Logout</a></li>
  </ul>
    <h1 class = "text">Welcome <span>Admin!</span></h1>
    <div class = "searchbox">
    <br>
        <h1 class = "text1">What do you want to do?</h1>
        <a href = "add.php"><h3 class = "text2">Add Flights</h3></a><br>
        <a href = "remove.php"><h3 class = "text2">Remove Flights</h3></a>
    </div>
</body>
</html>