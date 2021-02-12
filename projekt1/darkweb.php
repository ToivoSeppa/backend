<?php
session_start();
?>
<!DOCTYPE html>
<html>

<body>

    <?php
print("<p>Här är innehållet av din session:</p>");
//print_r($_SESSION);
print("<br>Användaren: " . $_SESSION['user']);

//TODO1: Visa en text endast om $_SESSION['user'] == "toivo"
if ($_SESSION['user'] == "toivo") {
    print("<p>Mitt lösenord är superhemlis</p>");
} else {
    header("Location: index.php");
}

//TODO2: Annars, styr användaren till loginsidan (index.php)
//print("<p>Gå bort! Försök int!</p>");
?>


</body>

</html>