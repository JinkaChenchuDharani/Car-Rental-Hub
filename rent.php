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
               background-image: url('car3.jpeg'); /* Replace with your image URL */
               background-size: cover; /* Scale image to cover the entire background */
               background-position: center; /* Center the image */
               background-repeat: no-repeat; /* Prevent image repetition */
               background-attachment: fixed; /* Keep the background fixed while scrolling */
               font-family: Arial, sans-serif; /* Optional: Choose a font family */
               color: #fff; /* Optional: Set text color */
           }
       </style>
</head>

<body>
<nav class="navbar fixed-top navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="home.php"><b class="fs-3">RentalHub</b></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="home.php"><b class="fs-4">Home</b></a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="about.php"><b class="fs-4">about</b></a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="contact.php"><b class="fs-4">contactUs</b></a>
              </li>
             
            </ul>
           <form><a class="btn btn-info" href="book.php"><b class="fs-5">Book Now</b></a></form>
          </div>
        </div>
      </nav><br>
    <br><br><div align="center" >
    <b class="fs-3" style="color:blue;">Fill the Details To Rent a car</b></div>
    <div class="row">
        <div class="col">
        </div>
        <div class="col">
            <form action="renty.php" method="post" onsubmit="return validateForm()" enctype="multipart/form-data">
                <label for="one" class="form-label" required><b>Name:</b></label>
                <input type="text" name="uname" id="one" class="form-control bg-light">
                <label for="two" class="form-label" required><b>phone:</b></label>
                <input type="text" name="phone" id="two" class="form-control  bg-light">
                <label for="six" class="form-label" required><b>Start date:</b></label>
                <input type="date" min="2023-08-16" name="date" id="six" class="form-control  bg-light">
                <label for="three" class="form-label" ><b>No.of days:</b></label>
                <input type="text" name="day" id="three" class="form-control  bg-light">
                <label for="four" class="form-label" required><b>Please upload license:</b></label>
                <input type="file" name="image" id="four" class="form-control  bg-light">
                <label for="five" class="form-label" required><b>code:</b></label>
                <input type="text" name="code" id="five" class="form-control bg-light"><br>
                <input type="submit">
            </form>
        </div>
        <div class="col">
        </div>
    </div>
    

    <script>
        function validateForm() {
            const name = document.getElementById("one").value;
            const date = document.getElementById("six").value;
            const days = document.getElementById("three").value;
            const code = document.getElementById("five").value;
            const phoneNumber = document.getElementById("two").value;
            const file = document.getElementById("four").value;

            if (name === "") {
                alert("please enter name");
                return false;
            }
             // Validate phone number format
             const phoneNumberRegex = /^[0-9]{10}$/;
            if (!phoneNumberRegex.test(phoneNumber)) {
                alert("Invalid phone number. Please enter 10 digits.");
                return false;
            }
            if (date === "") {
                alert("Please select date");
                return false;
            }
            if (days === "") {
                alert("Please enter no. of days.");
                return false;
            }
             // Validate file upload (optional)
             if (file === "") {
                alert("Please upload a profile license.");
                return false;
            }
            if (code === "") {
                alert("Please enter code provided in booking car page");
                return false;
            }
           

           

            return true; // Form is valid, can be submitted
        }
    </script>

</body>

</html>