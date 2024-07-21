<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
     body {
            margin: 0; /* Reset default margin */
            padding: 0; /* Reset default padding */
            background-image: url('car7.jpeg'); /* Replace with your image URL */
            background-size: cover; /* Scale image to cover the entire background */
            background-position: center; /* Center the image */
            background-repeat: no-repeat; /* Prevent image repetition */
            background-attachment: fixed; /* Keep the background fixed while scrolling */
            font-family: Arial, sans-serif; /* Optional: Choose a font family */
            color: #fff; /* Optional: Set text color */
        }
    </style>
</head>

<body >
  
  <h1 align="center" style="color:white;">Welcome to RentalHub</h1>
  <marquee>
    <h2 style="color:white;">we're committed to providing you with exceptional service, top-quality vehicles, and a
      seamless renting experience.</h2>
  </marquee>
<br><br>
  <br><br>
<div class="container">
    <div class="row">
      <div class="col">
</div>
      <div class="col"></div>
      <div class="col">
        <form action="logi.php" method="post">
        <label for="email" class="form-label"style="color:black;"><b>Email</b></label>
        <input type="email" name="email" class="form-control" required id="email" placeholder="abc@gmail.com">
        <label for="pwd" class="form-label"style="color:black;"><b>Password</b></label>
        <input type="password" name="pwd" class="form-control" required id="pwd"><br>
      <input type="submit" value="Login" name="login">
      
    
</form>
    </div>
    
    </div>

      </div>
</body>

</html>