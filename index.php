<?php
session_start();
include "functions.php" 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Toivo PHP Demo</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Containern har max bredd 800px -->
    <div id="container">
        <?php
include "navbar.php"
?>

        <!-- Artiklar placerar sig snyggt efter varann -->
        <article>
            <h1>Projekt1</h1>
            <h2>Uppg 1</h2>
            <p>Jag ändrar samma paragraf som thesourmango</p>
        </article>

        <?php
print(3 + 6);
// Uppg 1 - Superglobals
// phpinfo(); // Sök här efter uppg 1 info
print($_SERVER['REMOTE_USER']);
$serverPort = $_SERVER['SERVER_PORT'];
// Konkatenering med punkt, märk att PHP kod producerar HTML resurser
print("<p>Servern snurrar på port :" . $serverPort . "</p>");
?>

        <article>
            <h2>Uppg 2</h2>
            <?php
// Uppg 2 - Tid och Datum
print("<p>Det är den " . date("d") . "nde dagen idag</p>");
print("<p>Klockan är " . date("h:i:s") . " just nu</p>");
print("<p>Det är den " . date("m") . "nde månaden idag</p>");
// TODO: Skapa en array av månaderna och välj den nuvarande
$manader = array("Januari", "Februari", "Mars", "April", "Maj", "Juni", "Juli", "Augusti", "September", "Oktober", "November", "December");
$manad = date("m");
$manadInt = (int) $manad;
print("<p>På svenska heter den månaden: " . $manader[$manadInt - 1]);
?>
        </article>

        <article>
            <h2>Uppg 3</h2>
            <form action="index.php" method="get">
                Dag: <input type="text" name="dag"><br>
                Månad: <input type="text" name="manad"><br>
                <input type="submit">
            </form>
            <?php
if (isset($_REQUEST["dag"]) && isset($_REQUEST["manad"])) {
    $dag = $_GET["dag"];
    $manad = $_GET["manad"];
    print("Du vill veta hur länge det är till " . $dag);
}

?>

        </article>

        <article>
            <h2>Uppg 4 - Signup formulär</h2>
            <form action="index.php" method="get">
                Användarnamn: <input type="text" name="username"><br>
                E-mail: <input type="text" name="email"><br>
                <input type="submit" value="Registrera dig!">
            </form>
            <?php
if (isset($_REQUEST['username']) && isset($_REQUEST['email'])) {
    $username = test_input($_GET['username']);
    $email = $_GET['email'];
    print($username . "<br>");
    print($email);
}
?>
        </article>

        <article>
            <h2>Uppg 5 - Cookie</h2>
            <?php
$cookie_name = "username";
$cookie_value = "toope";
setcookie($cookie_name, $cookie_value, time() + (86400 * 2), "/");

if (isset($_COOKIE["username"])) {
    print("<p>Välkommen " . $cookie_value . "!</p>");
}

?>
        </article>

        <article>
            <h2>Uppg 6 - PHP-Session</h2>
            <?php
        $_SESSION['user'] = "toivo";
        print("<p>Endast Toivo har tillgång till Dark Web</p>");
        print("<a href='darkweb.php'>DARK WEB</a><p></p>");
        ?>
        </article>

    </div>
</body>

<!-- Script kan köras efter att sidan laddats in -->
<script src="script.js"></script>

</html>