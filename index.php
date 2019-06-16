<?php
    session_start();
?>

<div id="successDiv"> 
    <?php 
        if (!isset($_SESSION['success'])) {
            echo 'nothing is set';
        } else if ($_SESSION['success']) {
            echo 'EMAIL HAS BEEN SENT';
        } else if ($_SESSION['success'] === false) {
            echo 'EMAIL FAILED TO SEND';
        } 
    ?>
</div>
<br>
<br>
<form action="mailSender.php">
    Username: <input type="text" name="username">
    <br>
    Password: <input type="password" name="password">
    <br>
    Subject: <input type="text" name="subject">
    <br>
    Message: <input type="text-area" name="body">
    <br>
    To Address <input type="text" name ="to_address">
    <br>
    <input type="submit">
</form>

