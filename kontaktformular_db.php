<body>      
    <?php
            $server = "localhost:3306";
            $user = "root";
            $pass = "";
            $Anrede = $_POST["Anrede"];
            $Name = $_POST["Name"];
            $Vorname = $_POST["Vorname"];
            $EMail = $_POST["EMail"];
            $Mitteilung = $_POST["Mitteilung"];
            $Newsletter = $_POST["Newsletter"];
            $verbindung = mysqli_connect("$server", "$user", "$pass")
                or die ("Keine Verbindung zum Server");
            mysqli_select_db($verbindung, "haeli_kontaktformular")
                or die ("Felher beim Zugriff auf die Datenbank");
            $sql = "INSERT INTO kontaktformular (Anrede,Name,Vorname,EMail,Mitteilung,Newsletter)";
            $sql .= "VALUES ('$Anrede','$Name','$Vorname','$EMail','$Mitteilung','$Newsletter')";
            $abfrage = mysqli_query($verbindung, $sql);
            mysqli_close($verbindung);
    ?>

</body>  