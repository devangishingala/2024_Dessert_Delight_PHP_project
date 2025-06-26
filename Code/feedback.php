<!--header start-->
<?php
include("header.php");
include("conn.php");
?>
<!--header end-->

<?php
// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process form submission
    $name = $_POST["Name"];
    $email = $_POST["Email"];
    $phoneNumber = $_POST["PhoneNumber"];
    $message = $_POST["message"];

    // Insert data into the database
    $query = "INSERT INTO feedback (Name, Email, phone_no, Message) VALUES ('$name', '$email', '$phoneNumber', '$message')";

   $result = mysqli_query($con, $query);
    
    if ($result) {
        echo "<script>windows.location='feedbackview.php'</script>";
    } else {
        echo "Error adding feedback: " . mysqli_error($con);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Feedback Form</title>
</head>
<body style="background-color: #050505;">
 <table class="table table-bordered table-sm" style=" background-color: #050505; color: #f2f2f2; border: 5px dashed rgb(74, 204, 255); width: 100%;">


<!-- Wrap the form in a table -->
    <tr>
        <td colspan="2">
            <h3>Feedback Form</h3>
        </td>
    </tr>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <tr>
            <td><label for="Name">Name:</label></td>
            <td><input type="text" name="Name" required></td>
        </tr>
        <tr>
            <td><label for="Email">Email:</label></td>
            <td><input type="email" name="Email" required></td>
        </tr>
        <tr>
            <td><label for="PhoneNumber">Phone Number:</label></td>
            <td><input type="text" name="PhoneNumber" maxlength="10" required></td>
        </tr>
        <tr>
            <td><label for="message">Message:</label></td>
            <td><textarea name="message" rows="4" cols="50" required></textarea></td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input type="submit" name="submit" value="Submit">
            </td>
        </tr>
    </form>
</table>

</body>
</html>
<!--footer Start-->
<?php
include("footer.php");
?>
<!--Footer end-->
