<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Reviews</title>
  </head>
  <body>
    <h1>Reviews</h1>
    <?php
    $con = mysqli_connect("localhost", "phpuser", "phpuserpw", "reviews");
    if (!$con) {
        exit('Connect Error (' . mysqli_connect_errno() . ') '
                . mysqli_connect_error());
    }

    $query = "SELECT * FROM reviews";
    $result = mysqli_query($con, $query);
    $num = mysqli_num_rows($result);
    mysqli_close($con);

    echo "<table border='1'>
    <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Position</th>
    <th>Review</th>
    </tr>";
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['position'] . "</td>";
        echo "<td>" . $row['review'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    ?>
  </body>
</html>