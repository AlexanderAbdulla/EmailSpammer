<?php
    session_start();
?>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>

<div class="row">

    <div class="col-sm-3">
        <!-- empty -->
    </div>

    <div class="col-sm-6">
        <h2> Your Email Spammer </h2>
        <br>
        <div id="successDiv" class="alert alert-info"> 
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
        <form action="mailSender.php">
            <div class="form-group">
                <label for="username"> Your Email: </label> 
                <input id="username" type="email" name="username" class="form-control">
            </div>
            <div class="form-group">
                <label for="password"> Your Password: </label>
                <input id="password" type="password" name="password" class="form-control">
            </div>
            <div class="form-group">
                <label for="host">Your Email Provider</label>
                <select class="form-control" id="host" name="host">
                    <option value="smtp.gmail.com">Gmail</option>
                    <option value="smtp.live.com">Hotmail/Outlook</option>
                </select>
            </div>
            <div class="form-group">
                <label for="to_address"> To Address </label> 
                <input type="text" name ="to_address" id="to_address" class="form-control">
                <button type="button" class="btn btn-default btn-sm">
                    + Add More Emails
                </button>
            </div>
            <div class="form-group">
                <label for="subject">Subject:</label>
                <input type="text" name="subject" id="subject" class="form-control">
            </div>
            <div class="form-group">
                <label for="body"> Body: </label>
                <textarea type="text-area" name="body" class="form-control" id="body"></textarea>
            </div>
            <input type="submit" class="btn btn-primary">
        </form>
    </div>

    <div class="col-sm-3">
        <!-- empty -->
    </div>

</div>

</body>
</html>

