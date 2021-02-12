<?php
$conn = create_conn();
//Kolla att man klickat submit!
if(isset($_REQUEST['usr']) && isset($_REQUEST['psw'])){
    //Hämta data från formuläret
    //KOM IHÅG XSS PROTECTION
    $username = test_input($_REQUEST['registerusr']);
    $password = test_input($_REQUEST['registerpsw']);
    $password = hash("sha256", $password);
    // sup3rHemlsi => asd123 - en envägsalgoritm
    print($username);
    $sql = "SELECT * FROM users";
    $takenusername = 0;
    if($result = $conn->query($sql)){

        //Skapa en while loop för att hämta varje rad
        while($row = $result->fetch_assoc()){
            //Skriv ut endast ett värde (en kolumn en rad -- en cell)
            if($row['username'] == $username){
                print("Användarnamnet är taget");
                $takenusername = 1;
                break;
            }
        }
    } 
    if($takenusername = 0){
        $realname = "asd"; 
        $email = "aasd"; 
        $zip = 00710; 
        $bio = "bäst"; 
        $salary = 100; 
        $preference = 2;


        // Prepared statements går snabbare att köra och skyddar mot SQL Injection!
        $statement = $conn->prepare("INSERT INTO users (username, realname, password, email, zipcode, bio, salary, preference) VALUES (?,?,?,?,?,?,?,?)");
        $statement->bind_param("ssssisii", $username, $realname, $password, $email, $zip, $bio, $salary, $preference);
        // De flesta metoderna returnerar ett objekt (sant) om de lyckas & false ifall de misslyckas.
        if ($statement->execute()) {
            print("Du har registrerats!");
        }
    }
    //Kom ihåg att error handling - här ska finnas en else sats
    
}