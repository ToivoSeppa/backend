<?php include "init.php" ?>
<?php include "head.php" ?>

<article>
    <h1>Hämta data</h1>
    <?php include "fetch.php" ?>
</article>

<!-- $("namn").show(); -->

<article>
    <h1>Logga in</h1>
    <p>Var god logga in eller registrera dig!</p>
    <input type="button" value="Logga in">
    <input type="button" value="Registrera dig">

    
</article>
<article name="login">
    <!-- Loginformulär -->
    <form action="index.php" metod="post">
        Användarnamn<br> <input type="text" name="loginusr"><br>
        Lösenord<br> <input type="password" name="loginpsw"><br>
        <input type="submit" value="Logga in">
    </form>
</article>
<article name="register">
    <form action="index.php" metod="post">
        Användarnamn<br> <input type="text" name="registerusr"><br>
        Lösenord<br> <input type="password" name="registerpsw"><br>
        För- och Efternamn<br> <input type="text" name="realname"><br>
        Email<br> <input type="text" name="email"><br>
        Postnummer<br> <input type="text" name="zip"><br>
        <input type="submit" value="Logga in">
    </form>

</article>
<?php include "register.php"?>



<?php include "footer.php" ?>