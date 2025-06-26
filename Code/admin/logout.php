<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
<script src="https://cdn.userfront.com/core.js"></script>

<style type="text/css">
#logout-button {
  background-color: red;
  color: white;
  border: none;
  padding: 5px 10px;
}


}
}

</style>
</head>
<body>
<script>
  Userfront.init("demo1234");

// 1. Reference the button
var buttonEl = document.getElementById("logout-button");

// 2. Enable the button if the user is logged in
if (Userfront.accessToken()) {
  buttonEl.disabled = false;
}
// 3. Log out the user
function buttonLogout(e) {
  // Prevent the form's default behavior
  e.preventDefault();
  // Call Userfront.logout()
  Userfront.logout();
}

// 4. Add an event listener for the button click
buttonEl.addEventListener("click", buttonLogout);
</script>
<i class="fab fa-instagram fa-beat" style="color: #fc039d;"><h3>Succesfully logged out Thank you for visiting our website..<a href="login.php">Login</a> </i></h3>
<?php
    session_unset();
    session_destroy();
?>

</body>
</html>
