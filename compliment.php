<!DOCTYPE html>
<html>
  <head>
    <title>Output Form</title>
  </head>
  <body>
    <h2>Input Values:</h2>
    <?php
      $name = $_GET['name'];
      $sex = $_GET['sex'];
      $age = $_GET['age'];
      $interests = $_GET['interests'];

      echo "<p>Name: $name</p>";
      echo "<p>Sex: $sex</p>";
      echo "<p>Age: $age</p>";
      echo "<p>Interests: $interests</p>";
    ?>
  </body>
</html>