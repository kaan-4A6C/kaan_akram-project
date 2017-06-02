<!DOCTYPE html>
<html>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="Taak_2_Groen_FO_basis_lay-out.css">
  <?php
    function getOpdrachten($sql) {
        $servername = "83.82.240.2";
        $username = "akram"; // pas de username aan uw
        $password = "kaan"; // pas de password aan uw
        $dbname = "over_de_rhein_akram_kaan";  // pas de databasenaam aan uw
        $resultaat = [];


        // creërt connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // checkt connection

        if ($conn->connect_error) {
             die("Connection failed: " . $conn->connect_error);
        }
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // uitvoer van data van elke row

            while($row = $result->fetch_assoc()) {
                $resultaat[] = $row;
            };
        } else {
             $resultaat = "wel een connectie, tabel is leeg";
        }

        $conn->close();
        return $resultaat;
    }
    // functie die de table maakt
    function tableFromArray($array) {
        $result = "<table border='1'><thead>";
        $result .= "<tr>";

        // dubbele foreach voor de multidimensional array

        foreach($array[0] as $key1 => $value1) {
            $result .= "<th>$key1</th>";
        }
        $result .= "</tr>";
        $result .= "</thead><tbody>";
        foreach($array as $key => $value) {
            $result .= "<tr>";
            foreach($value as $key1 => $value1) {
                $result .= "<td>$value1</td>";
            }
            $result .= "</tr>";
        }
        $result .= "</tbody></table>";
        return $result;
    }
    // selecteert alles van de table
    $selectedOpdrachten = getOpdrachten("SELECT * FROM Kabelchecklisten_3 ");
    ?>
  <head>
  </head>
  <body>
	  <div class="row">
          <div class="upperContent">
		  <div class="col-2">Rhein
		  </div>
		  <div class="col-8"></div>
			<div class="col-2">Hijstabel
		  </div>
		  <div class="col-12">
			  <nav>
				  <ul>
					  <li><a class="myButton">Bestand </a></li>
					  <li><a class="myButton"> info</a></li>
				</ul>
			  </nav>
		  </div>
      </div>
		  <div class="col-12"></div>
		  <div class="col-2"></div>
		  <div class="col-8 content">
                <div class = "deelformulier kleiner">
            <form action="" method="post">
                opdrachtnummer: <select type="text" name="selectnummer">
                <?php
                // foreach voor elk table met $selectnummer als value
                   foreach ($selectedOpdrachten as $selectnummer) {
                       if($selectnummer==$_POST['selectnummer']){
                          echo "<option value='$selectnummer[Opdrachtnummer]' selected>$selectnummer[Opdrachtnummer]</option>";
                           }else{
                              echo "<option value='$selectnummer[Opdrachtnummer]'>$selectnummer[Opdrachtnummer]</option>";
                            }
                        }
                ?>

                </select>
                <input type="submit" name="selecteerKenteken" value="selecteer">
            </form>
        </div>
        <div class = "deelformulier">
            <?php
            // het retourneren van de table
               if(!empty($_POST["selectnummer"])) {
                   echo tableFromArray(getOpdrachten("SELECT * FROM Kabelchecklisten_3 WHERE Opdrachtnummer = " . $_POST['selectnummer']));
               } else {
                   echo tableFromArray(getOpdrachten("SELECT * FROM Kabelchecklisten_3"));
               }

            ?>
        </div>
          </div>
		  <div class="col-2"></div>
		  <div class="col-12"></div>
		  <div class="col-10"></div>
		  <div class="col-2"><a href="#" class="myButton">Exit</a></div>

	  </div>
  </body>

</html>
