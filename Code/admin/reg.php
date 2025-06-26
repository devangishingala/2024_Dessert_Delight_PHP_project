<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Registration Form</title>
  <!-- Bootstrap CSS link -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <style>
    .custom-card {
      width: 200%; /* Adjust the width as needed */
      height: 50%; /* Adjust the height as needed (fixed to 400px) */
      margin-top: 50px;
    }

    .custom-card .card-body {
      height: 270px; /* Adjust the height of the card body as needed (fixed to 270px) */
      overflow-y: auto; /* Add scrollbars if content overflows */
    }..                       
  </style>
</head>
<body style="background-color: #34eb80;">
  <div class="container">
    <div class="row justify-content-center mt-3">
      <div class="col-md-6">
        <div class="card">
         <div class="card-header">
 
  <h3 class="text-center mt-3">Registration Form</h3>
</div>

          <div class="card-body">
            <!-- Registration form -->
            <form>
              <div class="form-group">
                <label for="fullname">Full Name</label>
                <input type="text" class="form-control" id="fullname" placeholder="Enter your full name" required>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Enter your password" required>
              </div>
              <div class="form-group">
                <label for="confirmPassword">Confirm Password</label>
                <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm your password" required>
              </div>
              <button type="submit" class="btn btn-primary btn-block">Register</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
