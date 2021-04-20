<!DOCTYPE html>
<html>
    <head>
        <title>Wyniki z bazy danych</title>
        <meta charset="UTF-8">
        <meta name="author" content="Filip Szempruch">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <section class="article" style="color:white; font-family: verdana;">
            <header class="article-header" style="margin-bottom:30px;">Wyniki z bazy danych</header>
            <?php
                $servername = "localhost";
                $username = "test1";
                $password ="test1";
                $db = "dbprojekt";

                $connection = new mysqli($servername,$username,$password,$db);

                if($connection -> connect_error){
                die("Connect failed: ".$connection->connect_error);
                }

                $querySelect = "SELECT id, firstname, lastname, email, tel, dataZapisu, godzinaZapisu, cel FROM zapisy";

                $result = $connection->query($querySelect);

                if($result !== false && $result->num_rows > 0){
                    print('<table class="table-wyniki">');
                    print("<tr><th>ID</th><th>Imię</th><th>Nazwisko</th><th>E-mail</th><th>Telefon</th><th>Data wizyty</th><th>Godz wizyty</th><th>Cel</th></tr>");
                    while($row = $result->fetch_assoc()){
                        print("<tr><td>" . $row['id'] . "</td><td>" . $row['firstname'] . "</td><td>" . $row['lastname'] . "</td>
                            <td>" . $row['email'] . "</td><td>" . $row['tel'] . "</td><td>" . $row['dataZapisu'] . "</td>
                            <td>" . $row['godzinaZapisu'] . "</td><td>" . $row['cel'] . "</td></tr>");
                    }
                    print("</table>");
                }else{
                    print("Nic nie znaleziono :(");
                }
                $connection->close();
            ?>
        </section>
        <a href="index.php"><button class="nav-button" type="button" style="margin:auto; margin-top:30px">Powrót</button></a>
    </body>
</html>