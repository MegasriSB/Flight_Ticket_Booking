<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AviaBook</title>
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
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
      color: rgb(24, 163, 218);
    }

    .text{
      position: absolute;
      top: 30%;
      left: 60%;
      font-size: 60px;
    }

    .text span{
      color: rgb(24, 163, 218);
      font-weight: 800;
    }

    .text1{
      position: absolute;
      top: 60%;
      left: 60%;
      color: rgb(58, 56, 56);
      line-height: 1.5;
      word-spacing: 10px;
      font-family: Brush Script MT, Brush Script Std, cursive;
      font-size: 22px;
    }

    .btn{
      position: absolute;
      top: 75%;
      left: 60%;
      padding: 0.7em 1.5em;
      border-radius: 2em;
      letter-spacing: 1px;
      font-size: 0.9em;
      margin: 1em 0;
      display: inline-block;
      background-color: rgb(24, 163, 218);
      text-decoration: none;
      color: black;
    }

    .btn:hover{
      background-color: aliceblue;
    }

    .text2{
      font-family:"Sofia", sans-serif;
      font-size: 70px;
      text-shadow: 3px 3px 3px #ababab;
      text-align: center;
      margin: 0;
    }
    </style>
</head>
<body>
  <img src="imgs/flight1.jpg">
  <ul>
    <li style="float:right"><a class="active" href="login.php">Login</a></li>
    <li style="float:right"><a class="active" href="adminlogin.php">Admin</a></li>
  </ul>
  <h1 class = text2>AviaBook</h1>
    <h1 class = "text">FLY WITH <span>CARE</span><br>FLY WITH <span>DIGNITY</span></h1>
    <h3 class = "text1"><i>"Streamline Your Travel Experience with our Seamless Airline Reservation System"</i></h3>
    <a href = "signup.php" class = "btn">Sign Up</a>
</body>
</html>