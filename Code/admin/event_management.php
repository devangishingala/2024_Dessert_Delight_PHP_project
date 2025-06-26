<!--header start-->
<?php
session_start();
if(isset($_SESSION["ad_session"]))
{
    include("header.php");
    include("../conn.php");
    $sel_cat=mysqli_query($con,"select * from category");
    ?>
    <!--header end-->
    <!--table start-->
    <div class="container-fluid mt-3" style="background-color: #050505;">
        <?php
        // PHP code for processing the event form submissions
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Add Event form submission
            if (isset($_POST['submit_add_event'])) 
            {
                
                $event_name = $_POST['event_name'];
                $event_date = $_POST['event_date']; // Modified line

                $query = "INSERT INTO event (event_name, event_date) VALUES ('$event_name', '$event_date')";
                $result = mysqli_query($con, $query);
    
                if ($result) 
                {
                    echo "<script>windows.location='viewevent.php'</script>";
                } 
                else 
                {
                    echo "Error adding event: " . mysqli_error($con);
                }		
            }
            // Update Event form submission
            elseif (isset($_POST['submit_update_event'])) 
            {
                $event_id = $_POST['event_id'];
                $new_event_name = $_POST['new_event_name'];
                $new_event_date = $_POST['new_event_date']; // Modified line
                mysqli_query($con, "UPDATE event SET event_name = '$new_event_name', event_date = '$new_event_date' WHERE event_id = '$event_id'");
                // ... Perform any necessary processing, database updates, etc., here ...
                // For demonstration purposes, we'll just display a success message.
                echo "<h4 class='text-warning'>Event updated successfully!</h4>";
            }
            // Delete Event form submission
            elseif (isset($_POST['submit_delete_event'])) 
            {
                $event_id = $_POST['event_id'];
                mysqli_query($con, "DELETE FROM event WHERE event_id = '$event_id'");
                // ... Perform any necessary processing, database deletions, etc., here ...
                // For demonstration purposes, we'll just display a success message.
                echo "<h4 class='text-danger'>Event deleted successfully!</h4>";
            }
        }
        ?>
        <!-- Add event form -->
        <!-- Table with Add, Update, Delete columns and event rows -->
        <div class="container mt-3">
            <h2 class="text-center" style="font-family: 'Candara', cursive; color: #fafafa; font-size: 60px;border: 3px dashed rgb(74, 204, 255);">Event Management</h2>
            <div class="table-responsive d-flex justify-content-center">
                <table class="table table-bordered table-md" style="border: 3px dashed rgb(74, 204, 255); width: 60%; color: #fafafa;">
                    <thead>
                        <tr style="font-family: 'Candara', cursive; color: #fafafa; font-size: 30px; ">
                            <th style="width: 55%;border: 3px dashed rgb(74, 204, 255);">Add Event</th>
                            <th style="width: 55%;border: 3px dashed rgb(74, 204, 255);">Update Event</th>
                            <th style="width: 33%;border: 3px dashed rgb(74, 204, 255);">Delete Event</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="width: 33%;border: 3px dashed rgb(74, 204, 255);">
                                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                    <input type="hidden" name="submit_add_event" value="1">
                                    
                                        <?php
                                        while($cat=mysqli_fetch_array($sel_cat))
                                        {
                                            ?>
                                            <option value="<?php echo $cat[0]; ?>"><?php echo $cat[1]; ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                    <br>
                                    <label for="event_name">Event Name:</label>
                                    <input type="text" name="event_name" required style="border:2px dashed rgb(74, 204, 255); border-radius: 5px;">
                                    <br>
                                    <label for="event_date">Event Date:</label> <!-- Modified line -->
                                    <input type="date" name="event_date" required style="border:2px dashed rgb(74, 204, 255); border-radius: 5px;"> <!-- Modified line -->
                                    <br>
                                    <input type="submit" name="submit" value="Add Event" class="btn btn-primary mt-3">
                                </form>
                            </td>
                            <td style="width: 33%;border: 3px dashed rgb(74, 204, 255);">
                                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                    <input type="hidden" name="submit_update_event" value="1">
                                    <label for="event_id">Event ID:</label>
                                    <input type="text" name="event_id" required style="border:2px dashed rgb(74, 204, 255); border-radius: 5px;">
                                    <br>
                                    <label for="new_event_name">New Event Name:</label>
                                    <input type="text" name="new_event_name" required style="border:2px dashed rgb(74, 204, 255); border-radius: 5px;">
                                    <br>
                                    <label for="new_event_date">New Event Date:</label> <!-- Modified line -->
                                    <input type="date" name="new_event_date" required style="border:2px dashed rgb(74, 204, 255); border-radius: 5px;"> <!-- Modified line -->
                                    <br>
                                    <input type="submit" name="submit" value="Update Event" class="btn btn-primary mt-3">
                                </form>
                            </td>
                            <td style="width: 34%;border: 3px dashed rgb(74, 204, 255);">
                                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                    <input type="hidden" name="submit_delete_event" value="1">
                                    <label for="event_id">Event ID:</label>
                                    <input type="text" name="event_id" required style="border:2px dashed rgb(74, 204, 255); border-radius: 5px;">
                                    <br>
                                    <input type="submit" name="submit" value="Delete Event" class="btn btn-primary mt-3">
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- table end -->
    <!--footer start-->
    <?php
    include("footer.php");
}   
else
    echo "<script>window.location='login.php';</script>";
?>
<!--footer end-->