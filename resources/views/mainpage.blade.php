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
<body class="antialiased">
  @if (session('save'))
  <script>
      alert("Success");
  </script> @endif
  @if (session('error'))
  <script>
      alert("Failed");
  </script> 
  @endif

<div class="w3-container">
    <div class="w3-bar" style="background-color: #6E85B7;">
      <a class="w3-bar-item w3-button w3-right" href="{{ url('newsubject') }}"> 
        New Subject</a>
      <header class="w3-center w3-padding" style="background-color: #6E85B7;">
        <h2>My Tutor</h2>
      </header>
    </div>
    <div class="w3-padding">
        <table class="w3-table w3-striped w3-bordered">
            <thead>
                <th>No</th>
                <th>Items</th>
                <th>Description</th>
                <th>Operations</th>
            </thead>
        </table>
    </div>
    <footer class="w3-footer w3-center" style="background-color: #6E85B7;">My Tutor App</footer>
</div>
</body>
</html>