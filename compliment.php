<!DOCTYPE html>
<html>
  <head>
    <title>Output Form</title>
  </head>
  <body>
    <h2>Input Values:</h2>
    <?php
      $name = $_POST['name'];
      $sex = $_POST['sex'];
      $age = $_POST['age'];
      $interests = $_POST['interests'];

      echo "<p>Name: $name</p>";
      echo "<p>Sex: $sex</p>";
      echo "<p>Age: $age</p>";
      echo "<p>Interests: $interests</p>";
    ?>
  </body>
</html>