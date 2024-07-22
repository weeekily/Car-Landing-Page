<?php
include("database.php");

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['fullname'];
    $age = $_POST['age'];
    $experience = $_POST['experience'];
    $email = $_POST['email'];
    $car_model = $_POST['car_model'];

    $sql = "INSERT INTO letsrace (fullname, age, experience, email, car_model) VALUES ('$fullname', '$age', '$experience', '$email', '$car_model')";

    if ($connection->query($sql) === TRUE) {
        $_SESSION['message'] = "Submitted successfully";

        // Determine the redirection URL based on car model
        switch ($car_model) {
            case 'Mercedes AMG ONE':
                $redirect_url = 'mercedes.php';
                break;
            case 'Audi R8':
                $redirect_url = 'audi.php';
                break;
            case 'BMW i8':
                $redirect_url = 'bmw.php';
                break;
            case 'Ford GT':
                $redirect_url = 'ford.php';
                break;
            default:
                $redirect_url = 'index.php'; // Default redirection if car model doesn't match
                break;
        }

        header("Location: $redirect_url");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $connection->error;
    }

    $connection->close();
}
?>
