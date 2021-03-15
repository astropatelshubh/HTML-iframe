<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>Student Record</title>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
  </head>
  <body>
    <form name="student" action="studentrecord.html">
      <div class="container">
        <?php
          $error_msg = "";
          $x = 0;
          if (empty($_POST['fname'])) {
            $error_msg .= "<p>You must enter your full name.</p>\n";
          }
          else {
            echo "<p>Student Full Name: " . $_POST['fname'] . "</p>\n";
          }
          if (empty($_POST['id'])) {
            $error_msg .= "<p>You must enter your student id.</p>\n";
          }
          else {
            echo "<p>Student ID: " . $_POST['id'] . "</p>\n";
          }
          if (empty($_POST['gender'])) {
            $error_msg .= "<p>You must enter your gender.</p>\n";
          }
          else {
            echo "<p>Gender: " . $_POST['gender'] . "</p>\n";
            echo "<p>Completed Assignments:</p>\n";
          }
          if (empty($_POST['assignment1'])) {
            $x++;
          }
          else {
            echo "<p>" . $_POST['assignment1'] . "</p>\n";
          }
          if (empty($_POST['assignment2'])) {
            $x++;
          }
          else {
            echo "<p>" . $_POST['assignment2'] . "</p>\n";
          }
          if (empty($_POST['assignment3'])) {
            $x++;
          }
          else {
            echo "<p>" . $_POST['assignment3'] . "</p>\n";
          }
          if (empty($_POST['assignment4'])) {
            $x++;
          }
          else {
            echo "<p>" . $_POST['assignment4'] . "</p>\n";
          }
          if (empty($_POST['assignment5'])) {
            $x++;
          }
          else {
            echo "<p>" . $_POST['Assignment5'] . "</p>\n";
          }
          if (empty($_POST['assignment6'])) {
            $x++;
          }
          else {
            echo "<p>" . $_POST['assignment6'] . "</p>\n";
          }
          if ($x = 0) {
            echo "<p>None</p>\n";
          }
          if (empty($_POST['list'])) {
            echo "<p>Topic Not Understand: BASIC XHTML</p>\n";
          }
          else {
            echo "<p>Topic Not Understand: " . $_POST['list'] . "</p>\n";
          }
          if (empty($_POST['message'])) {
            $error_msg .= "<p>You must the message.</p>\n";
          }
          else {
            echo "<p>Message: " . $_POST['message'] . "</p>\n";
          }
          if (empty($_POST['pass'])) {
            $error_msg .= "<p>You must enter your password.</p>\n";
          }
          else {
            echo "<p>Password: " . $_POST['pass'] . "</p>\n";
          }
          if (strlen($error_msg) > 0) {
            echo $error_msg;
            echo "<p>Click on the button below to return at Student Record form and fix these errors.</p>\n";
          }
        ?>
        <hr>
        <div class="clearfix">
          <button onclick="studentrecord.html" class="cancelbtn">Close</button>
        </div>
      </div>
    </form>
  </body>
</html>
