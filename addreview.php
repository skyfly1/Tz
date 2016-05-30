<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title></title>
  </head>
  <body>Wish List of <?php echo htmlentities($_POST["name"]) . "<br/>"; ?>
      <?php
      $con = mysqli_connect("localhost", "phpuser", "phpuserpw", "reviews");
      if (!$con) {
          exit('Connect Error (' . mysqli_connect_errno() . ') '
                  . mysqli_connect_error());
      }

      $name = $_POST['name'];
      $email = $_POST['email'];
      $position = $_POST['position'];
      $review = $_POST['review'];

      $query = "INSERT INTO reviews (name, email, position, review)
VALUES ('$name', '$email', '$position', '$review');";

      if (mysqli_query($con, $query)) {
          echo "New record created successfully";
      } else {
          echo "Error: " . $query . "<br>" . mysqli_error($con);
      }

      mysqli_close($con);
      ?>
  </body>
</html>