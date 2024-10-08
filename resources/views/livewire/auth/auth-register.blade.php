<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            font-size: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body{
            display: flex;
            height: 100vh;
            justify-content: center;
            align-items: center;
            background: linear-gradient(145deg, teal, pink);
            background-size: cover;
            background-position: center;
        }

        .container{
            max-width: 700px;
            width: 100%;
            background: transparent;
            border: 2px solid rgba(255, 255, 255, .2);
            backdrop-filter: blur(20px);
            box-shadow: 0 0 10px rgba(0, 0, 0, .2);
            color: #fff;
            border-radius: 5px;
            padding: 25px 30px;
        }

        .container .title{
            font-size: 25px;
            font-weight: 500;
            position: relative;
        }

        .container .title::before{
            content: "";
            position: absolute;
            left: 0;
            bottom: 0;
            height: 3px;
            width: 30px;
            background: linear-gradient(45deg, teal, pink);
        }

        .container form .user-details{
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin: 20px 0 12px 0;
        }

        form .user-details .input-box{
            margin-bottom: 15px;
            width: calc(100% / 2 - 20px);
        }

        .user-details .input-box .details{
            display: block;
            font-weight: 500;
            margin-bottom: 5px;
        }

        .user-details .input-box input{
            height: 45px;
            width: 100%;
            outline: none;
            border-radius: 5px;
            border: 1px solid #ccc;
            padding-left: 15px;
            font-size: 16px;
            border-bottom-width: 2px;
            transition: all 0.3 ease;
        }

        .user-details .input-box input:focus,
        .user-details .input-box input:valid{
            border-color: #9b59b6;
        }

        form .gender-details .gender-title{
            font-size: 20px;
            font-weight: 500;
        }

        form .gender-details .category{
            display: flex;
            width: 80%;
            margin: 14px 0;
            justify-content: space-between;
        }

        .gender-details .category label{
            display: flex;
            align-items: center;
        }

        .gender-details .category .dot{
            height: 18px;
            width: 18px;
            background: #d9d9d9;
            border-radius: 50%;
            margin-right: 10px;
            border: 5px solid transparent;
            transition: all o.3s ease;
        }
        #dot-1:checked ~ .category label .one,
        #dot-2:checked ~ .category label .two,
        #dot-3:checked ~ .category label .three{
            border-color: #d9d9d9;
            background: #9b59b6;
        }

        form input[type="radio"]{
             display: none;
        }

        form .button{
            height: 45px;
            margin: 45px 0;
        }

        .register-button {
            background-color: #4CAF50; /* Green background color */
            color: #fff; /* White text color */
            padding: 10px 20px; /* Add some padding */
            border: none; /* Remove the default border */
            border-radius: 5px; /* Add a rounded corner */
            cursor: pointer; /* Change the cursor to a pointer */
            text-decoration: none; /* Remove the default underline */
        }

        .register-button:hover {
            background-color: #3e8e41; /* Darker green background color on hover */
        }
        
        .button button{
            height: 100%;
            width: 100%;
            outline: none;
            color: #fff;
            border: none;
            font-size: 18px;
            font-weight: 500;
            letter-spacing: 1px;
            border-radius: 5px;
            background: linear-gradient(150deg, teal, pink);
        }

        form .button input:hover{
             background: linear-gradient(-135deg, #f5cfd5, #f3d4d5);
        }

        @media (max-width: 584px) {
            .container{
                max-width: 100%;
            }
            form .user-details .input-box{
                margin-bottom: 15px;
                width: 100%;
            }
            form .gender-details .category{
                width: 100%;
            }
            .container form .user-details{
                max-height: 300px;
                overflow-y: scroll;
            }
            .user-details::-webkit-scrollbar{
                width: 0;
            }
        }
    </style>

</head>
<body>
    <div class="container">
        <div class="title">Registration</div>
        <form action="#">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Full Name</span>
                    <input type="text" placeholder="Enter your name" required>
                </div>
                <div class="input-box">
                    <span class="details">Username</span>
                    <input type="text" placeholder="Enter your username" required>
                </div>
                <div class="input-box">
                    <span class="details">Email</span>
                    <input type="text" placeholder="Enter your email" required>
                </div>
                <div class="input-box">
                    <span class="details">Phone Number</span>
                    <input type="text" placeholder="Enter your number" required>
                </div>
                <div class="input-box">
                    <span class="details">Password</span>
                    <input type="password" placeholder="Enter your password" required>
                    
                </div>
                <div class="input-box">
                    <span class="details">Confirm Password</span>
                    <input type="password" placeholder="Confirm your password" required>
                </div>
            </div>
            <div class="gender-details">
                <input type="radio" name="gender" id="dot-1">
                <input type="radio" name="gender" id="dot-2">
                <input type="radio" name="gender" id="dot-3">
                <span class="gender-title">Gender</span>
                <div class="category">
                    <label for="dot-1">
                        <span class="dot one"></span>
                        <span class="gender">Male</span>
                    </label>
                    <label for="dot-2">
                        <span class="dot two"></span>
                        <span class="gender">Female</span>
                    </label>
                    <label for="dot-3">
                        <span class="dot three"></span>
                        <span class="gender">Prefer not to say</span>
                    </label>
                </div>
            </div>
            <div class="button">
                <button><a href="{{ route('homepage') }}">Register</a></button>
                <br><br>
                <button><a href="{{route('login') }}">Go back</a></button>
            </div>
        </form>
    </div>

    <script>
        document.getElementById('signupForm').addEventListener('submit', function(e) {
            e.preventDefault();

            //Get the input values
            const email = this.email.value;
            const password = this.pswd.value;

            //Store the credentials in localStorage for demo purpose
            localStorage.setItem('userEmail', email);
            localStorage.setItem('userPassword', password);

            //Simulate successful registration
            alert('Registration successful!');
        })

</body>
</html>