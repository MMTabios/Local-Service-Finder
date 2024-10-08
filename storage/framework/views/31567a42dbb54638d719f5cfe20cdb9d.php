<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title>Contact Us</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body{
            width: 100%;
            min-height: 100vh;
            background-color: #2e2e2e;
            color: white;
        }

        .container{
            width: 100%;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 30px 8%;
        }

        .container .row{
            display: flex;
            justify-content: space-between;
            width: 100%;
            max-width: 1100px;
        }

        .row section.col{
            display: flex;
            flex-direction: column;
        }

        .row section.left{
            flex-basis: 35%;
            min-width: 320px;
            margin-right: 60px;
            
        }

        .row section.right{
            flex-basis: 60%;

        }
        section.left .contactTitle h2{
            position: relative;
            font-size: 28px;
            color: #ddd;
            display: inline-block;
            margin-bottom: 25px;
        }

        section.left .contactTitle h2::before{
            content: '';
            position: absolute;
            width: 50%;
            height: 1px;
            background-color: #888;
            top: 120%;
            left: 0;
        }

        section.left .contactTitle h2::after{
            content: '';
            position: absolute;
            width: 25%;
            height: 3px;
            background-color: dodgerblue;
            top: calc(120% - 1px);
            left: 0;
        }

        section.left .contactTitle p{
            font-size: 17px;
            color: #ccc;
            letter-spacing: 1px;
            line-height: 1.2;
            padding-bottom: 22px;
        }

        section.left .contactInfo{
            margin-bottom: 16px;
        }

        .contactInfo .iconGroup{
            display: flex;
            align-items: center;
            margin: 25px 0px;
        }

        .iconGroup .icon{
            width: 45px;
            height: 45px;
            border: 2px solid dodgerblue;
            border-radius: 50%;
            margin-right: 20px;
            position: relative;
        }

        .iconGroup .icon i{
            font-size: 20px;
            color: #ddd;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .iconGroup .details span{
            display: block;
            color: #888;
            font-size: 18px;
        }

        .iconGroup .details span:nth-child(1){
            text-transform: uppercase;
            color: #ccc;
        }

        section.left .socialMedia{
            display: flex;
            justify-content: flex-start;
            align-items: center;
            flex-wrap: wrap;
            margin: 22px 0px 20px;
        }

        .socialMedia a{
            width: 35px;
            height: 35px;
            text-decoration: none;
            text-align: center;
            margin-right: 15px;
            border-radius: 5px;
            background-color: dodgerblue;
            transition: 0.4s;
        }

        .socialMedia a i{
            color: #ddd;
            font-size: 18px;
            line-height: 35px;
            border: 1px solid transparent;
            transition-delay: 0.4s;
        }

        .socialMedia a:hover{
            transform: translateY(-5ps);
            background-color: #2e2e2e;
            color: dodgerblue;
            border: 1px solid dodgerblue;
        }

        .socialMedia a:hover i{
            color: dodgerblue;
        }

        /* Code for the right section (column) */

        .row section.right .messageForm{
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            padding-top: 30px;
        }

        .row section.right .inputGroup{
            margin: 18px 0px;
            position: relative;
        }

        .messageForm .halfWidth{
            flex-basis: 48%;
        }

        .messageForm .fullWidth{
            flex-basis: 100%;
        }

        .messageForm input, .messageForm textarea{
            width: 100%;
            font-size: 18px;
            padding: 2px 0px;
            background-color: #2e2e2e;
            color: #ddd;
            border: none;
            border-bottom: 2px solid #666;
            outline: none;
        }

        .messageForm textarea{
            resize: none;
            height: 220px;
            display: block;
        }

        textarea::-webkit-scrollbar{
            width: 5px;
        }

        textarea::-webkit-scrollbar-track{ 
            background-color: #1e1e1e;
            border-radius: 15px;
        }

        textarea::-webkit-scrollbar-thumb{
            background-color: dodgerblue;
            border-radius: 15px;
        }

        .inputGroup label{
            position: absolute;
            left: 0;
            bottom: 4px;
            color: #888;
            font-size: 18px;
            transition: 0.4s;
            pointer-events: none;
        }

        .inputGroup:nth-child(4) label{
            top: 2px;
        }

        .inputGroup input:focus ~ label, .inputGroup textarea:focus ~ label,
        .inputGroup input:valid ~ label, .inputGroup textarea:valid ~ label{
            transform: translateY(-30px);
            font-size: 16px;
        }

        .inputGroup button{
            padding: 8px 16px;
            font-size: 18px;
            background-color: dodgerblue;
            color: #ddd;
            border: 1px solid transparent;
            border-radius: 25px;
            outline: none;
            cursor: pointer;
            box-shadow: opx 8px 15px rgba(0, 0, 0, 0.3);
            transition: 0.4s;
        }

        .inputGroup button:hover{
            background-color: #2e2e2e;
            color: dodgerblue;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.3);
            border: 1px solid dodgerblue;
        }

        @media(max-width: 1100px){
            .messageForm .halfWidth{
                flex-basis: 100%;
            }
        }

        @media(max-width: 900px){
            .container .row{
                flex-wrap: wrap;
            }
            .row selection.left, .row selection right{
                flex-basis: 100px;
                margin: 0px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <main class="row">

            <section class="col left">

                <div class="contactTitle">
                    <h2>Get in Touch</h2>
                    <p>Please Contact Us for more info</p>
                </div>

                <div class="contactInfo">

                    <div class="iconGroup">
                        <div class="icon">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div class="details">
                            <span>Phone</span>
                            <span>+00 001 975 05</span>
                        </div>
                    </div>

                    <div class="iconGroup">
                        <div class="icon">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div class="details">
                            <span>Email</span>
                            <span>MarianneTabios@gmail.com</span>
                        </div>
                    </div>

                    <div class="iconGroup">
                        <div class="icon">
                            <i class="fa-solid fa-location"></i>
                        </div>
                        <div class="details">
                            <span>Location</span>
                            <span>Virac</span>
                        </div>
                    </div>

                </div>

                <div class="socialMedia">
                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
    
            </section>

            <section class="col right">

            <form class="messageForm">

                <div class="inputGroup halfWidth">
                    <input type="text" name="" required="required">
                    <label>Your Name</label>
                </div>

                <div class="inputGroup halfWidth">
                    <input type="email" name="" required="required">
                    <label>Email</label>
                </div>

                <div class="inputGroup fullWidth">
                    <input type="text" name="" required="required">
                    <label>Subject</label>
                </div>

                <div class="inputGroup fullWidth">
                    <textarea required="required"></textarea>
                    <label>Say Something</label>
                </div>

                <div class="inputGroup fullWidth">
                    <button>Send Message</button>
                </div>

            </section>
            </form>



        </main>
    </div>
</body>
</html><?php /**PATH C:\Users\user\New_Project\resources\views/livewire/auth/auth-contact-us.blade.php ENDPATH**/ ?>