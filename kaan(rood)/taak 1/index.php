<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
        <title>Over de RHEIN</title>
    </head>
    <body>
        <div class="top">
            <div class="logo">Over de <br>RHEIN</div>
            <div class="title">title</div>
            <button class="button" type="button" name="button">Bestand</button>
            <button class="button" type="button" name="button">Info</button>
        </div>
        <div class="content">
            <?php
                $servername = "83.82.240.2";
                $username = "akram";
                $password = "kaan";
                $dbname = "over_de_rhein_akram_kaan";
                // Create connection
                $conn = mysqli_connect($servername, $username, $password, $dbname);
                // Check connection
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                $sql = "SELECT * FROM Hijstesten_2";
                $result = mysqli_query($conn, $sql);

                echo "<table border='1' width='100%'";
                if (mysqli_num_rows($result) > 0) {
                // output data of each row
                echo "<th></th><th>opdrachtnummer</th><th>volgnummer</th><th>Datum_Opgesteld</th><th>Hoofdgiek_Lengte</th><th>Mecht_Sectie_Gieklengte</th><th>Hulpgiek_Giekhoek</th><th>Zwenkhoek</th><th>Eigen_Massa_Ballast</th><th>Toelaatbare_Bedrijfslast</th><th>LMB_In_Werking</th><th>Proeflast</th><th>Akoord<th>";
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<tr><td> " . $row["opdrachtnummer"]. "</td><td> " . $row["volgnummer"]. "</td><td>" . $row["Datum_Opgesteld"]."</td><td>". $row["Hoofdgiek_Lengte"]."</td><td> ". $row["Mecht_Sectie_Gieklengte"]."</td><td>". $row["Hulpgiek_Giekhoek"]."</td><td>". $row["Zwenkhoek"].
                    "</td><td>". $row["Eigen_Massa_Ballast"]."</td><td>". $row["Toelaatbare_Bedrijfslast"]."</td><td>". $row["LMB_In_Werking"]."</td><td>".$row["Proeflast"]."</td><td>". $row["Akkoord"]. "</td></tr>";
                }
                } else {
                    echo "0 results";
                }
                echo "</table>";
                mysqli_close($conn);
            ?>
        </div>
        <div class="exit">exit</div>
    </body>
</html>
