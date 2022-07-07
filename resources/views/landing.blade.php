<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>My Tutor</title>
    <style>
        @media screen and (max-width: 768px) {
            .w3-container {
                width: 100%;
            }
        }
        @media screen and (min-width: 768px) {
            .w3-container {
                width: 700px;
                margin: 0 auto;
            }
        }
    </style>

</head>
<body>
<div class="w3-container">
    <header class="w3-center w3-padding-large "style="background-color: #6E85B7;">
      <h2>My Tutor</h2>
    </header>
    <div class="container" style="display: flex; height: 500px;">
        <div style="width: 100%; background-color: #B2C8DF; padding: 20px; ">
            <h2>My Tutor</h2>
            <p>Lorem ipsum dolor sit amet. Est alias perspiciatis non accusamus 
            accusantium ut facilis assumenda et illum tempora ex omnis maxime 
            eos maxime adipisci qui dolor corrupti! Ea possimus odit et quis 
            soluta qui illum consequatur aut Quis quasi. </p>
            <div class="w3-button" style="background-color: #F8F9D7;width:100%">
                <a href="{{ url('login') }}">  Login</a>
            </div>
            <p> </p>
            <div class="w3-button" style="background-color: #F8F9D7;width:100%">
                <a href="{{ url('registration') }}"> Register</a>
            </div>
        </div>
        <div class="w3-hide-small w3-hide-medium"style="flex-grow: 1; background-color: #B2C8DF;">
            <img src="assets/images/mytutor.png" alt="mytutor" width="425" height="500">
        </div>
    </div>
    <footer class="w3-footer w3-center "style="background-color: #6E85B7;">My Tutor App</footer>
</div>
</body>
</html>