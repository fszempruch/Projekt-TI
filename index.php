<!DOCTYPE html>
<html>
    <head>
        <title>Męski zakład fryzjerski</title>
        <meta charset="UTF-8">
        <meta name="author" content="Filip Szempruch">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap">
    </head>
    <body>
        <header id="header">MĘSKI ZAKŁAD FRYZJERSKI</header>
        
        <nav id="nav">
            <button class="nav-button" onclick="scrollujDo('o-nas');">O nas</button>
            <button class="nav-button" onclick="scrollujDo('oferta');">Oferta</button>
            <button class="nav-button" onclick="scrollujDo('cennik');">Cennik</button>
            <button class="nav-button" onclick="scrollujDo('zapisy');">Zapisy</button>
            <button class="nav-button" onclick="scrollujDo('footer');">Kontakt</button>
        </nav>

        <section class="article" id = "o-nas">
            <header class="article-header">O nas</header>
            <p class="article-text" style="text-align: justify;">Nasz zakład to miejsce dla prawdziwych facetów. Jesteśmy zespołem fryzjerów 
                                    i barberów, których łączy pasja i wyobraźnia. Odwiedzając nasz zakład możesz być pewny, że profesjonalista poświęci Ci 
                                    odpowiednią ilość czasu na zrozumienie Twoich potrzeb i wspólnie dobierzecie najlepsze dla Ciebie rozwiązanie. U nas 
                                    tradycja i klasyka spotykają się z najnowszymi trendami w sztuce fryzjerskiej. Nasza praca to nie tylko codzienne wyzwania,
                                    ale przede wszystkim przyjemność. Nie da się opisać satysfakcji, gdy zadowoleni klienci wracają do nas.</p>
        </section>

        <section class="article" id="oferta">
            <header class="article-header">Oferta</header>
            <p class="article-text" style="text-align: center;">Stylizacja włosów<br>
                                                                Farbowanie włosów<br>
                                                                Pielęgnacyjne mycie głowy z masażem<br>
                                                                Usługa strzyżenia (nożyczki + maszynka)<br>
                                                                Konsultacja ze stylistą z doborem kształtu strzyżenia
            </p>
        </section>

        <section class="article" id = "cennik">
            <header class="article-header">Cennik</header>
            <table  class="table-cennik">
                <tr>
                    <td>Strzyżenie włosów</td>
                    <td>45 zł</td>
                </tr>
                <tr>
                    <td>Strzyżenie włosów długich</td>
                    <td>55 zł</td>
                </tr>
                <tr>
                    <td>Strzyżenie dziecka</td>
                    <td>35 zł</td>
                </tr>
                <tr>
                    <td>Tata + Syn</td>
                    <td>70 zł</td>
                </tr>
                <tr>
                    <td>Stylizacja fryzury</td>
                    <td>20 zł</td>
                </tr>
                <tr>
                    <td>Konsultacja ze stylistą</td>
                    <td>15 zł</td>
                </tr>
                <tr>
                    <td>Farbowanie włosów</td>
                    <td>40 zł</td>
                </tr>
            </table>
        </section>

        <section class="article" id = "zapisy">
            <header class="article-header">Zapisz się na wizytę</header>
            <form method= "get" id="form" action="<?php print($_SERVER['PHP_SELF']);?>">
                <table class="table-zapisy">
                    <tr>
                        <td><label>Imię: </label></td>
                        <td><input type="text" id="name" name="name" placeholder="Imię"/></td>
                        <td><label>Nazwisko: </label></td>
                        <td><input type="text" id="lastName" name="lastName" placeholder="Nazwisko"/></td>
                    </tr>
                    <tr>
                        <td><label>E-mail: </label></td>
                        <td><input type="email" id="email" name="email" placeholder="E-mail"/></td>
                        <td><label>Telefon: </label></td>
                        <td><input type="tel" id="phone" name="phone" placeholder="Telefon"></td>
                    </tr>
                    <tr>
                        <td><label>Data: </label></td>
                        <td><input type="date" id="date" name="date"></td>
                        <td><label>Godzina: </label></td>
                        <td><select style="width: 204.2px;" id="hour" name="hour">
                            <option selected hidden>Wybierz godzinę wizyty</option>
                            <option value="10:00">10:00</option>
                            <option value="10:30">10:30</option>
                            <option value="11:00">11:00</option>
                            <option value="11:30">11:30</option>
                            <option value="12:00">12:00</option>
                            <option value="12:30">12:30</option>
                            <option value="13:00">13:00</option>
                            <option value="13:30">13:30</option>
                            <option value="14:00">14:00</option>
                            <option value="14:30">14:30</option>
                            <option value="15:00">15:00</option>
                            <option value="15:30">15:30</option>
                            <option value="16:00">16:00</option>

                    </tr>
                    <tr>
                        <td>Cel wizyty: </td>
                        <td colspan="3"><select style="width: 485px;"id="cel" name="cel">
                            <option selected hidden>Wybierz cel wizyty</option>
                            <option value="1">Strzyżenie włosów - 45 zł</option>
                            <option value="2">Strzyżenie włosów długich - 55 zł</option>
                            <option value="3">Strzyżenie dziecka - 35 zł</option>
                            <option value="4">Tata + Syn - 70 zł</option>
                            <option value="5">Stylizacja fryzury - 20 zł</option>
                            <option value="6">Konsultacja ze stylistą - 15 zł</option>
                            <option value="7">Farbowanie włosów - 40 zł</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4" style="text-align: center;"><input type="submit" id="przycisk" class="submit-disabled" name="submit" value="Zapisz się" disabled></td>
                    </tr>
                    </table>
            </form>
        </section>
        
        <footer id="footer">
            <div class="footer-container">
                <section class="kontakt">
                    <table class="table-footer">
                        <tr>
                          <th colspan="2" class="table-footer-header">Godziny otwarcia:</th>
                        </tr>
                        <tr>
                            <td>Poniedziałek - Piątek</td>
                            <td>10.00-16.00</td>
                        </tr>
                        <tr>
                            <td>Sobota</td>
                            <td>10.00-16.00</td>
                        </tr>
                        <tr>
                            <td>Niedziela</td>
                            <td>Nieczynne</td>
                        </tr>
                        <tr>
                            <td style="line-height:40px;" colspan=3>&nbsp;</td>
                        </tr> 
                        <tr>
                          <th colspan="2" class="table-footer-header">Kontakt:</th>
                        </tr>
                        <tr>
                            <td>Telefon:</td>
                            <td>555 333 111</td>
                        </tr>
                        <tr>
                            <td>E-mail:</td>
                            <td>meskifryzjer@email.pl</td>
                        </tr>
                        <tr>
                            <td>Adres:</td>
                            <td>Antoniego Gramatyka 10 30-067 Kraków</td>
                        </tr>
                      </table>
                      <a href="wyniki.php"><button class="nav-button" type="button" style="margin: 10px 0px 0px 80px;";>Wyniki BD</button></a>

                </section>

                <section class="mapa">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2560.850158885713!2d
                    19.904291815601216!3d50.07036777942479!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!
                    1s0x47165bba48eede47%3A0xa161dce32fa7b552!2sWydzia%C5%82%20Zarz%C4%85dzania%20AGH!5e0!3
                    m2!1spl!2spl!4v1618239249861!5m2!1spl!2spl" width="400" height="300" style="border:0;" 
                    allowfullscreen="" loading="lazy"></iframe>
                </section>
            </div>
        </footer>
        <?php
            if(isset($_GET['submit'])){
                $name = $_GET['name'];
                $lastName = $_GET['lastName'];
                $email = $_GET['email'];
                $phone = $_GET['phone'];
                $date = $_GET['date'];
                $hour = $_GET['hour'];
                $cel = $_GET['cel'];

                $servername = "localhost";
                $username = "test1";
                $password ="test1";
                $db = "dbprojekt";

                $connection = new mysqli($servername,$username,$password,$db);

                if($connection -> connect_error){
                    die("Connect failed: ".$connection->connect_error);
                }

                $myQuery = "CREATE TABLE zapisy(
                    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                    firstname VARCHAR(30) NOT NULL,
                    lastname VARCHAR(30) NOT NULL,
                    email VARCHAR(100),
                    tel VARCHAR(15),
                    dataZapisu DATE,
                    godzinaZapisu TIME,
                    cel INT(1)
                )";

                if($connection -> query($myQuery)){
                    print("Tabela zostala stworzona pomyślnie");
                }else{
                    print("Błąd tworzenia tabeli: ".$connection->error);
                }

                $myMultiQuery = "INSERT INTO Zapisy (firstname, lastname, email, tel, dataZapisu, godzinaZapisu, cel)
                                        VALUE ('$name', '$lastName', '$email', '$phone',STR_TO_DATE('$date','%Y-%m-%d'), '$hour', '$cel' );";

                $connection -> multi_query($myMultiQuery);
        
                $connection->close();
            }
        ?>
        <script type="text/javascript" src="codejs.js"></script>
    </body>
</html>