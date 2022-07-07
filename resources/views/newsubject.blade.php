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
    <div class="w3-bar" style="background-color: #6E85B7;">
      
      <header class="w3-center w3-padding" style="background-color: #6E85B7;">
        <h2>My Tutor</h2>
      </header>
    </div>
    <div class="w3-padding">
        <form method="post" action="{{route('savesubject')}}">
            {{csrf_field()}}
            <p><input class="w3-input w3-round w3-border" type="text" name="title" placeholder="Subject Title"></p>
            <p><input class="w3-input w3-round w3-border" type="number" name="price" placeholder="Subject Price"></p>
            <p><input class="w3-input w3-round w3-border" type="text" name="hours" placeholder="Learning Hours"></p>
            <p><textarea class="w3-input w3-border w3-round" name="description" rows="4" cols="50" placeholder="Subject description"></textarea></p>
            <button class="w3-button w3-round" type="submit" style="background-color: #F8F9D7;">Save</button>
        </form>
    </div>
    <footer class="w3-footer w3-center" style="background-color: #6E85B7;">My Tutor App</footer>
</div>
</body>
</html>