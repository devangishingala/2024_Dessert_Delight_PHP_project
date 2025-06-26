<!DOCTYPE html>
<html>
<head>
  <title>Login Form with Snowfall</title>
  <link rel="stylesheet" href="style.css">
  <style type="text/css">
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      overflow: hidden; /* Prevent scrollbars due to snowfall */
      background-color: #2c3e50; /* Background color of the page */
    }

    .snowfall-container {
      position: relative;
      width: 100%;
      height: 100%;
      pointer-events: none; /* Prevent snowflakes from capturing mouse events */
      z-index: 0; /* Lower z-index to ensure snowflakes are below the login form */
    }

    .login-box {
      width: 300px;
      border: 2px solid #ccc;
      margin: 100px auto;
      padding: 160px;
      background-color: rgba(255, 255, 255, 0.9); /* Background color with transparency */
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      position: relative;
      z-index: 1; /* Ensure the login form is above snowflakes */
    }

    .login-box h1 {
      text-align: center;
      margin-bottom: 20px;
    }

    .user-box {
      position: relative;
      margin-bottom: 20px;
    }

    .user-box input {
      width: 100%;
      padding: 15px 0; /* Increase the padding for a taller input field */
      font-size: 16px;
      border: none;
      border-bottom: 1px solid #ccc;
      outline: none;
      background: transparent;
    }

    .user-box label {
      position: absolute;
      top: 0;
      left: 0;
      padding: 8px 0;
      font-size: 16px;
      color: #666;
      pointer-events: none;
      transition: 0.2s;
    }

    .user-box input:focus ~ label,
    .user-box input:valid ~ label {
      top: -20px;
      font-size: 12px;
      color: #FF4081;
    }

    .login-image {
      text-align: center;
    }

    .login-image img {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      border: 3px solid #FF4081;
      background-color: #fff;
      padding: 5px;
    }

    /* Snowflake styles */
    .snowflake {
      position: absolute;
      width: 10px;
      height: 10px;
      background: #fff;
      border-radius: 50%;
      pointer-events: none;
      user-select: none;
      animation: snowfall linear infinite;
    }

    @keyframes snowfall {
      0% {
        transform: translateY(-10px) rotate(0deg);
      }
      100% {
        transform: translateY(100vh) rotate(360deg);
      }
    }

    
  </style>
</head>
<body>
  <div class="snowfall-container"></div>
  <div class="login-box">
    <center><h1>forgot Password</h1></center>
    <form method="post" action="login1.php" onsubmit="return validateForm()">
      <div class="user-box">
        <input type="password" name="password" required="">
        <label>Password</label>
      </div>
      <div class="user-box">
        <input type="password" name="confirm password" required="">
        <label>Confirm Password</label>
      </div>
      <button class="login-button" type="submit" style="width: 300px; height: 40px; background-color: #ed7399; border-radius: 20px;">Set</button>
    </form>
  </div>
  <script>
    function createSnowflake() {
      const snowflake = document.createElement('div');
      snowflake.className = 'snowflake';
      snowflake.style.left = Math.random() * window.innerWidth + 'px';
      snowflake.style.animationDuration = (Math.random() * 5 + 5) + 's'; // Randomize snowflake falling speed
      document.querySelector('.snowfall-container').appendChild(snowflake);

      // Remove snowflake after falling off screen
      snowflake.addEventListener('animationend', () => {
        snowflake.remove();
        createSnowflake(); // Recreate the snowflake when it falls off the screen
      });
    }

    // Create snowflakes when the page loads
    window.onload = function() {
      for (let i = 0; i < 25; i++) { // Adjust the number of initial snowflakes
        createSnowflake();
      }
    };
  </script>
</body>
</html>
