<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Login Form</title>
</head>
<body>
<script type="text/javascript" language="javascript"> 
$('.message a').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});
</script>
<style>
@import url(https://fonts.googleapis.com/css?family=Roboto:300);

.login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
.form {
  position: relative;
  z-index: 1;
  background:#81e02d;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
  border: 7px groove #fa0748; 
}
.form:hover{
  transform: scale(1.6);
  transition: transform 0.5s ease;
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #AFEEEE;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #4CAF50;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form button:hover,.form button:active,.form button:focus {
  background: #43A047;
}
.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #4CAF50;
  text-decoration: none;
}
.form .register-form {
  display: none;
}
.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}
.container:before, .container:after {
  content: "";
  display: block;
  clear: both;
}
.container .info {
  margin: 50px auto;
  text-align: center;
}
.container .info h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: #1a1a1a;
}
.container .info span {
  color: #00FF7F;
  font-size: 12px;
}
.container .info span a {
  color: #000000;
  text-decoration: none;
}
.container .info span .fa {
  color: #EF3B3A;
}
body {
  background: #93cafa; /* Set background color to black */
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;      
}

.form input:hover {
  background: #e4f5e4; /* Change to the desired hover background color for input fields */
}

/* Add hover effect to the form submit button */
.form button:hover {
  background: #43A047; /* Change to the desired hover background color for the submit button */
}

/* Add hover effect to the "forgot password" link */
.form .form .message a:hover {
  color: #43A047; /* Change to the desired hover color for the link */
}

</style>
<div class="login-page">
  <div class="form">
    <form class="login-form" action="Login_chk.php" method="post">
      <input type="text" placeholder="username" name="unm"/>
      <input type="password" placeholder="password" name="psw"/>
      <div style="float:right"><a href="forgot.php">forgot password</a></div>
      <input type="submit" name="ad_login" value="Login"/>

    </form>
  </div>
</div>
</body>
</html>
