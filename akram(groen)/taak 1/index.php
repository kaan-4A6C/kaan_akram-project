<<<<<<< HEAD
<!DOCTYPE html,>
=======
<<<<<<< HEAD
<?php include 'kabel.php'; ?>
=======
>>>>>>> 3103268f1607a88e5a744c1680870823fa68728b
<!DOCTYPE html>
>>>>>>> ef9e8ca67086ef20e4c46b938e9604095c6ff3d7
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
        <title>Over de Rhein | Akram</title>
        <link rel="stylesheet" href="master.php">
    </head>
    <body>
        <div class="top">
            <div class="logo"><br>RHEIN</div>
            <button type="button" name="button">bestand</button>
            <button type="button" name="button">info</button>
<<<<<<< HEAD
            <div class="title">Hijstabel</div>
=======
            <div class="title">Kabelchecklisten</div>
<<<<<<< HEAD
=======
>>>>>>> 3103268f1607a88e5a744c1680870823fa68728b
            <nav>
                <ul>
                    <a href="#"><li></li></a>
                    <a href="#"><li></li></a>
                </ul>
            </nav>
>>>>>>> ef9e8ca67086ef20e4c46b938e9604095c6ff3d7
        </div>
        <main class="content">

          <select class="select" name="">
            <option value="">1</option>
            <option value="">2</option>
            <option value="">3</option>
            <option value="">4</option>
          </select>

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

              $sql = "SELECT * FROM Kabelchecklisten_3";
              $result = mysqli_query($conn, $sql);

              echo "<table border='1' width='100%'";
              if (mysqli_num_rows($result) > 0) {
              // output data of each row
<<<<<<< HEAD
              echo "<th></th><th>opdrachtnummer</th><th>volgnummer</th><th>Datum_Opgesteld</th><th>Hoofdgiek_Lengte</th><th>Mecht_Sectie_Gieklengte</th><th>Hulpgiek_Giekhoek</th><th>Zwenkhoek</th><th>Eigen_Massa_Ballast</th><th>Toelaatbare_Bedrijfslast</th><th>LMB_In_Werking</th><th>Proeflast</th><th>Akoord<th>";
              while($row = mysqli_fetch_assoc($result)) {
                  echo "<tr><td> " . $row["opdrachtnummer"]. "</td><td> " . $row["KabelID"]. "</td><td>" . $row["Breuk_6D"]."</td><td>". $row["Breuk_30D"]."</td><td> ". $row["Beschadiging_Buitenzijde"]."</td><td>". $row["Beschadiging_Roest_Corrosie"]."</td><td>". $row["Verminderde_Kabeldiameter"].
                  "</td><td>". $row["Positie_Meetpunten"]."</td><td>". $row["Beschadiging_Totaal"]."</td><td>". $row["Type_Beschadiging_Roestvorming"];
=======
              echo "<th></th><th>opdrachtnummer</th><th>KabelID</th><th>Breuk_6D</th><th>Breuk_30D</th><th>Beschadiging_Buitenzijde</th><th>Beschadiging_Roest_Corrosie</th><th>Verminderde_Kabeldiameter</th><th>Positie_Meetpunten</th><th>Beschadiging_Totaal</th><th>Type_Beschadiging_Roestvorming</th>";
              while($row = mysqli_fetch_assoc($result)) {
                  echo "<tr><td>" . $row["Opdrachtnummer"] . "</td><td>" . $row["KabelID"] . "</td><td>" . $row["Breuk_6D"] . "</td><td>" . $row["Breuk_30D"] . "</td><td>" . $row["Beschadiging_Buitenzijde"] . "</td><td>" . $row["Beschadiging_Roest_Corrosie"]."</td><td>"
                  . $row["Verminderde_Kabeldiameter"]. "</td><td>". $row["Positie_Meetpunten"] . "</td><td>". $row["Beschadiging_Totaal"]."</td><td>". $row["Type_Beschadiging_Roestvorming"]."</td></tr>";
>>>>>>> 3103268f1607a88e5a744c1680870823fa68728b
              }
              } else {
                  echo "0 results";
              }
              echo "</table>";
              mysqli_close($conn);
          ?>
        </main>
        <button type="button" class="exit" name="exit">exit</button>
    </body>
</html>
