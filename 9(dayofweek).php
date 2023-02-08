<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>What is the Day!</title>
    <style>
        p{
        color : red;
        font-size: larger;
        }
    </style>
</head>
<body>
    <?php
$dayOfWeek = date("w");
switch($dayOfWeek)
{
    case 1:
        echo "<p>The day is Monday</p>";
        break;
    case 2:
        echo "<p>The day is Tuesday</p>";
        break;
    case 3:
        echo "<p>The day is Wednesday</p>";
        break;
    case 4:
        echo "<p>The day is Thursday</p>";
        break;
    case 5:
        echo "<p>The day is Friday</p>";
        break;  
    case 6:
        echo "<p>The day is Satuarday</p>";
        break;  
    case 0:
        echo "<p>The day is Sunday</p>";
        break;
    }
    ?>
</body>
</html>
