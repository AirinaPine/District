<?php 
    define("DB_SERVER", "localhost");
    define("DB_USER", "root");
    define("DB_PASSWORD", "root");
    define("DB_NAME", "Contact_form");

    $mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
        if ($mysqli->connect_error) {
            echo "Sorry, but there is a problem with our website \n";
            echo 'Mistake: ' . $mysqli->connect_error . '\n';
        }

    mysqli_query($mysqli, "INSERT INTO clients (name, email, message)VALUES('$_POST[name]', '$_POST[email]', '$_POST[message]')");

    // $sql = "SELECT * FROM clients";
    // $result = $mysqli->query($sql);
    // $array = $result->fetch_assoc();
    // var_dump($array);