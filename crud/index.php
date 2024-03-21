<?php

	if(isset($_POST['login']))
	{



		$con=mysqli_connect("localhost","root","","crud");
	
		$e=$_POST['e'];
		$p=$_POST['p'];

		$sql="select * from userdetail where email='$e' && password='$p'";

		$res=mysqli_query($con,$sql);

		$row=mysqli_fetch_row($res);

		if($row>0){
			echo"Login Successfully!!";
		}
		else{
			echo"Credential Wrong!!";
		}

	}



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login Form</title>
    <style>
        .menu {
            height: 50px;
            width: 100%;
            background-color: #007c9d;
        }
        .menu ul {
            margin: auto;
            height: 100%;
            width: 30%;
            display:flex;
            justify-content: space-around;
            align-items: center;
        }
        .menu ul li {
            height: 100%;
            width: 100%;
            text-align: center;
            list-style-type: none;
        }
        .menu ul li a {
            line-height: 50px;
            margin: auto;
            text-decoration: none;
            color: #fff;
        }
        .menu ul li:hover {
            color: #007c9d;
            background-color: #fff;
        }
        .menu ul li:hover a {
            color: #007c9d;
        }
        
        form {
            height: 500px;
            width: 500px;
            margin: auto;
            margin-top: 100px;
            border: 2px solid black;
            background-color: aliceblue;
            border-radius: 5px;
        }
        form h1 {
            text-align: center;
            text-decoration: underline;
        }
        form input {
            height: 30px;
            width: 300px;
            margin-left: 50px;
            margin-bottom: 10px;
        }
        form label {
            font-size: 18px;
            font-weight: 600;
            margin-left: 20px;
            margin-top: 20px;
            margin-bottom: 20px;
        }
        #button {
            height: 50px;
            width: 200px;
            background-color: rgb(0, 183, 255);
            margin-left: 150px;
            margin-top: 20px;
            border-radius: 10px;
            color: #f5f5f5;
            font-size: 20px;
            margin-bottom: 30px;
        }
        #button:hover {
            cursor: pointer;
            background-color: #00a1ff;
        }
        a{
            font-size: 20px;
            text-decoration: none;
            margin-left: 100px;
            color: #000;
        }
        a:hover {
            text-decoration: underline;
            color: #007c9d;
        }
    </style>
</head>
<body>
    <div class="menu">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="index.php">Login</a></li>
            <li><a href="signup.php">Signup</a></li>
        </ul>
    </div>
    <form action="index.php" method="post">
        <h1>Login Form</h1>
        <label for="nameinput">Email : </label><br>
        <input type="email" placeholder="Name" class="form" id="nameinput" name="e"><br>
        <label for="grandmother">Password : </label><br>
        <input type="password" placeholder="Password" class="form" id="grandmother" name="p"><br>
        <input type="submit" value="submit" id="button" name="login" /><br>
        <a href="signup.php">Not yet Registered ? Signup here</a>
    </form>
</body>
</html>