<?php
    require_once "connection.php";

    $From= $_POST["From"];
    $To= $_POST["To"];
    $Date_of_Journey= $_POST["Date of Journey"];
    $Date_of_Return= $_POST["Date of Return"];


    $sql = "INSERT INTO reserve ( From, To, Date_of_Journey, Date_of_Return)
VALUES ('$From', '$To', '$Date_of_Journey', '$Date_of_Return')";
if (mysqli_query($conn, $sql)) {
echo "New record created successfully";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
 ?>
