<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="GET">
        <input type="text" name="person">
        <Button>SUBMIT</Button>
    </form>
    <?php

    $name = "Aashraya"; //variable
    echo $name." is a handsome boy. ";
    // . is a seperator

    $secondName = $_GET['person'];
    echo $secondName. " is a handsome boy";
    //here is imported from form tag and then used it
    ?>
</body>
</html>