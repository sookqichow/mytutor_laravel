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
      <div class="w3-card w3-round">
        <header class="w3-padding"style="background-color:#B2C8DF;">
          <h3>Registration Form</h3>
        </header>
      <div class="w3-padding ">
      <form action=" {{ route('register.post') }}" method="post">
         {{csrf_field()}}
           <label for="email">Name</label>
           <p><input id="email" class="w3-input w3-round w3-border" type=
              "name" name="name" required></p>
           @if ($errors->has('name'))
             <span class="text-danger">{{ $errors->first('name') }}</span>
           @endif
           <label for="email">Email</label>
           <p><input id="email" class="w3-input w3-round w3-border" type=
             "email" name="email" required></p>
           @if ($errors->has('email'))
             <span class="text-danger">{{ $errors->first('email') }}</span>
           @endif
           <label for="password">Password</label>
           <p><input id="password" class="w3-input w3-round w3-border" type=
              "password" name="password" required></p>
           @if ($errors->has('password'))
             <span class="text-danger">{{ $errors->first('password') }}</span>
           @endif
           <label for="phone">Phone No</label>
           <p><input id="phone" class="w3-input w3-round w3-border" type=
              "phone" name="phone" required></p>
           @if ($errors->has('phone'))
             <span class="text-danger">{{ $errors->first('phone') }}</span>
           @endif
           <label for="adddress">Address</label>
           <p><textarea id="address" class="w3-input w3-round w3-border" type=
              "address" name="address" required></textarea></p>
           @if ($errors->has('address'))
             <span class="text-danger">{{ $errors->first('address') }}</span>
           @endif
           <label for="state">State</label>
           <p><input id="state" class="w3-input w3-round w3-border" type=
              "state" name="state" required></p>
           @if ($errors->has('state'))
             <span class="text-danger">{{ $errors->first('state') }}</span>
           @endif
           <div class="w3-row">
              <a class="w3-left" href="{{ url('login') }}" style="color: #6E85B7;"> 
              Already with an account? Login</a>
            <button class="w3-button w3-round w3-right" style="background-color: #F8F9D7;">Register</button>
            </div>
      </form>
      </div>
    </div>
    </div>
  <footer class="w3-footer w3-center "style="background-color: #6E85B7;">My Tutor App</footer>
</div>
</body>
</html>