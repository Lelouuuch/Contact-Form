<style>
    body {
        background-color: beige;
    }

    .my-div {
        text-align: center;
        align-items: center;
        justify-content: center;
        border:  1px solid black;
        padding: 30px;
        margin: 0 auto;
        margin-top: 10vh;
        width: fit-content;
        border-radius: 10px;
    }

    button {
        border-radius: 3px;
        margin-left: 865px;
        margin-top: 20px;
        background-color: green;
        border: none;
        color: white;
        padding: 10px;

        
    }


    a {
        text-decoration: none;
        color: black;
        
    }

    a:hover {
        color: white;
    }
</style>


<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fname = htmlspecialchars($_POST['first_name']);
    $lname = htmlspecialchars($_POST['last_name']);
    $age = htmlspecialchars($_POST['age']);
    $contact = htmlspecialchars($_POST['contact']);
    $address = htmlspecialchars($_POST['address']);


    echo '<div class="my-div">';
    echo "<h2>Submitted Data</h2>";
    echo "<p><strong>First Name:</strong> " . $fname . "</p>";
    echo "<p><strong>Last Name:</strong> " . $lname . "</p>";
    echo "<p><strong>Age:</strong> " . $age . "</p>";
    echo "<p><strong>Contact:</strong> " . $contact . "</p>";
    echo "<p><strong>Address:</strong> " . $address . "</p>";
    echo '</div>';

} else {
    echo "Form not submitted correctly.";
}
    echo '<button><a href="index.html" target="_self">Go back to the form</a></button>';


?>
