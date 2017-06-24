  <?php include 'function2.php'; ?>
<!DOCTYPE html,>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style2.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
        <title>Over de RHEIN | Akram</title>
    </head>
    <body>
        <div class="top">
            <div class="logo">Over de <br>RHEIN</div>
            <div class="title">Kabelchecklisten_3</div>
            <button class="button" type="button" name="button">Bestand</button>
            <button class="button" type="button" name="button">Info</button>
        </div>
        <div class="content">

            <form class="" action="index.html" method="post">
              <fieldset>
                <legend>Hijskraan</legend>
                Fabrikaat: <input type="text" name="Fabrikaat"><br><br>
                ModelType: <input type="text" name="ModelType:"><br><br>
                Serienummer: <input type="text" name="Serienummer"><br><br>
                Bedrijsnummer: <input type="text" name="Bedrijsnummer"><br><br>
                Bouwjaar: <input type="text" name="Bouwjaar"><br><br>
                <input type="submit" name="submit" value="submit">
              </fieldset>
            </form>
            <?php
            if (isset($_POST['submit'])) {
                insert("83.82.240.2","akram","kaan","over_de_rhein_akram_kaan","INSERT INTO Hijskraan_5 (Hijskraan_fabrikaat, Hijskraan_model_type, Hijskraan_serienummer,	Hijskraan_bedrijfsnummer, Hijskraan_bouwjaar) VALUES ($_POST[Fabrikaat], $_POST[ModelType],
                  $_POST[Serienummer],$_POST[Bedrijsnummer],$_POST[Bouwjaar]);");
              }
            ?>
        </div>
        </div>
        <button class="exit">exit</button>
    </body>
</html>
