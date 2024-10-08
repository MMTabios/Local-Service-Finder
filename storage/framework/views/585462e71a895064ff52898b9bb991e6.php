<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Local Service Finder</title>
	<style>
        *{
            padding: 0;
            margin: 0;
        }

        .wrapper{
            background: linear-gradient(10deg, pink, teal);
            background-size: cover;
            height: 100vh;
        }

        .navbar{
            position: fixed;
            height: 100px;
            width: 100%;
            top: 0;
            left: 0;
            background: rgba(0,0,0,0.4);
        }
        .navbar .logo{
            width: 140px;
            height: auto;
            padding: 20px 100px;
        }

        .navbar ul{
            float: right;
            margin-right: 20px;
        }

        .navbar ul li{
            list-style: none;
            margin: 0 8px;
            display: inline-block;
            line-height: 80px;
            margin-top: 5px;
        }

        .navbar ul li a{
            font-size: 20px;
            font-family: 'Roboto', sans-serif;
            color: white;
            padding: 6px 13px;
            text-decoration: none;
            transition: .4s;
        }

        .navbar ul li a.active,
        .navbar ul li a:hover{
            background: #f5cfd5;
            border-radius: 2px;
        }

        .wrapper .center{
            position: absolute;
            left: 50%;
            top: 55%;
            transform: translate(-50%, -50%);
            font-family: sans-serif;
            user-select: none;
        }

        .center h1{
            color: white;
            font-size: 70px;
            width: 900px;
            font-weight: bold;
            text-align: center;
        }

        .center h2{
            color: white;
            font-size: 70px;
            font-weight: bold;
            margin-top: 10px;
            width: 885px;
            text-align: center;
        }

        .center .buttons{
            margin: 35px 280px;
        }

        .buttons button{
            height: 50px;
            width: 250px;
            margin-left: 30px;
            font-size: 18px;
            font-weight: 600;
            color: #c95c5c;
            background: plum;
            outline: none;
            cursor: pointer;
            border: 1px solid rgb(56, 43, 50);
            border-radius: 25px;
            transition: .4s;
        }

        .buttons .btn2{
            margin-left: 25px;
        }
        
        .buttons button:hover{
            background: rgb(214, 67, 67);
        }
    </style>
</head>
<body>
	<div class="wrapper">
			<nav class="navbar">
				<img class="logo" src="logo.png">
				<ul>
					<li><a class="active" href="#">Home</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Services</a></li>
					<li><a href="<?php echo e(route('contactus')); ?>" class="contactus-link">Contact</a></li>
					<li><a href="<?php echo e(route('admindashboard')); ?>">Admin</a></li>
				</ul>
			</nav>
			<div class="center">
			<h1>Welcome To</h1>
			<h2>Local Service Finder</h2>
			<div class="buttons">
			<button><a href="<?php echo e(route('dashboard')); ?>">GO TO DASHBOARD</a></button>
		</div>
	</div>
</body>
</html><?php /**PATH C:\Users\user\New_Project\resources\views/livewire/auth/auth-homepage.blade.php ENDPATH**/ ?>