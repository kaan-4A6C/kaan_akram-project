<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
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
            <?php include 'function.php'; ?>

            <form action="" method="post">
                Opdrachtnummer:
                <select type="text" name="selectnummer">
                <?php
                    // foreach voor elk table met $selectnummer als value
                    foreach ($selectedOpdrachten as $selectnummer) {
                        if($selectnummer == $_POST['selectnummer']){
                            echo "<option value='$selectnummer[Opdrachtnummer]' selected>$selectnummer[Opdrachtnummer]</option>";
                        }else{
                            echo "<option value='$selectnummer[Opdrachtnummer]'>$selectnummer[Opdrachtnummer]</option>";
                        }
                    }
                ?>
                </select>
                <input type="submit" name="selecteerKenteken" value="selecteer">
            </form>
            <div class="">
                <?php
                    if(!empty($_POST["selectnummer"])) {
                        echo tableFromArray(getOpdrachten("SELECT * FROM Kabelchecklisten_3 WHERE Opdrachtnummer = " . $_POST['selectnummer']));
                    } else {
                        echo tableFromArray(getOpdrachten("SELECT * FROM Kabelchecklisten_3 "));
                    }
                ?>
            </div>
        </div>
        <button class="exit">exit</button>
    </body>
</html>
