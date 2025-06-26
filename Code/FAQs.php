<?php
include("header.php");
include("conn.php");

// Check if the user question form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit_user_question'])) {
    // Process user question form submission
    $user_question = $_POST["user_question"];

    // Insert data into the database
    $query = "INSERT INTO faqs (user_question) VALUES ('$user_question')";
    $result = mysqli_query($con, $query);

    if ($result) {
        echo "<script>window.location='FAQs.php'</script>";
    } else {
        echo "Error adding user question: " . mysqli_error($con);
    }
}

// Check if the admin reply form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit_admin_reply'])) {
    // Process admin reply form submission
    $faq_id = $_POST["faq_id"];
    $admin_reply = $_POST["admin_reply"];

    // Update the database with the admin's reply
    $update_query = "UPDATE faqs SET admin_reply = '$admin_reply' WHERE id = $faq_id";
    $update_result = mysqli_query($con, $update_query);

    if (!$update_result) {
        echo "Error updating admin reply: " . mysqli_error($con);
    }
}

// Fetch FAQs with user questions
$query = "SELECT * FROM faqs";
$result_res = mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Feedback Form</title>
</head>
<body style="background-color: #050505;">
    <table class="table table-bordered table-sm" style="background-color: #050505; color: #f2f2f2; border: 5px dashed rgb(74, 204, 255); width: 100%;">
        <!-- Form Header for User Question -->
        <tr>
            <td colspan="2">
                <h3>User Question Form</h3>
            </td>
        </tr>

        <!-- User Question Form -->
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <tr>
                <td><label for="user_question">User Question:</label></td>
                <td><textarea name="user_question" rows="4" cols="50" required></textarea></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" name="submit_user_question" value="Submit User Question">
                </td>
            </tr>
        </form>

        <!-- Display Admin Replies -->
        <?php
        if ($result_res) {
            while ($row = mysqli_fetch_array($result_res)) {
                echo "<tr>";
                echo "<td>User Question:</td>";
                echo "<td>{$row['user_question']}</td>";
                echo "</tr>";

                if (empty($row['admin_reply'])) {
                    echo "<tr>";
                    echo "<td><label for='admin_reply'>Admin Reply:</label></td>";
                    echo "<td>";
                    echo "<form method='post' action='{$_SERVER['PHP_SELF']}'>";
                    echo "<input type='hidden' name='faq_id' value='" . $row['id'] . "'>";
                    echo "<textarea name='admin_reply' rows='4' cols='50' required></textarea>";
                    echo "<input type='submit' name='submit_admin_reply' value='Submit Admin Reply'>";
                    echo "</form>";
                    echo "</td>";
                    echo "</tr>";
                } else {
                    echo "<tr>";
                    echo "<td>Admin Reply:</td>";
                    echo "<td>{$row['admin_reply']}</td>";
                    echo "</tr>";
                }
            }
        } else {
            echo "Error fetching FAQs: " . mysqli_error($con);
        }
        ?>
    </table>

    <!--footer Start-->
    <?php include("footer.php"); ?>
    <!--Footer end-->
</body>
</html>