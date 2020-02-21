 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Madlibs - Er heerst paniek...</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
// define variables and set to empty values
$valid = false;
$paniek1Err = $paniek2Err = $paniek3Err = $paniek4Err = $paniek5Err = $paniek6Err = $paniek7Err = $paniek8Err = "";
$paniek1 = $paniek2 = $paniek3 = $paniek4 = $paniek5 = $paniek6 = $paniek7 = $paniek8 = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["paniek1"])) {
        $paniek1Err = "Answer required";
      } else {
        $paniek1 = test_input($_POST["paniek1"]);
      }
    if (empty($_POST["paniek2"])) {
        $paniek2Err = "Answer required";
      } else {
        $paniek2 = test_input($_POST["paniek2"]);
      }
    if (empty($_POST["paniek3"])) {
        $paniek3Err = "Answer required";
      } else {
        $paniek3 = test_input($_POST["paniek3"]);
      }
    if (empty($_POST["paniek4"])) {
        $paniek4Err = "Answer required";
      } else {
        $paniek4 = test_input($_POST["paniek4"]);
      }
    if (empty($_POST["paniek5"])) {
        $paniek5Err = "Answer required";
      } else {
        $paniek5 = test_input($_POST["paniek5"]);
      }
    if (empty($_POST["paniek6"])) {
        $paniek6Err = "Answer required";
      } else {
        $paniek6 = test_input($_POST["paniek6"]);
      }
    if (empty($_POST["paniek7"])) {
        $paniek7Err = "Answer required";
      } else {
        $paniek7 = test_input($_POST["paniek7"]);
      }
    if (empty($_POST["paniek8"])) {
        $paniek8Err = "Answer required";
      } else {
        $paniek8 = test_input($_POST["paniek8"]);
      }
}
if(empty($_POST["paniek1"]) || empty($_POST["paniek2"]) || empty($_POST["paniek3"]) || empty($_POST["paniek4"]) || empty($_POST["paniek5"]) || empty($_POST["paniek6"]) || empty($_POST["paniek7"]) || empty($_POST["paniek8"])){
    $valid = false;
}
else{
    $valid = true;
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
    <div id='container'>
        <h1 id='title'>Mad libs</h1>
        <div id='menu'>
            <ul>
                <li><a href='paniek.php'>Er heerst paniek...</a></li>
                <li><a href='onkunde.php'>Onkunde</a></li>
            </ul>
        </div>
        <div id='page'>
            <h1>Er heerst paniek...</h1>
            <?php
            if($valid == false){
            ?>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            Welk dier zou je nooit als huisdier willen hebben? <input type='text' name='paniek1'>
            <span class="error">* <?php echo $paniek1Err;?></span>
            <br><br>
            Wie is de belangrijkste persoon in je leven? <input type='text' name='paniek2'>
            <span class="error">* <?php echo $paniek2Err;?></span>
            <br><br>
            In welk land zou je graag willen wonen? <input type='text' name='paniek3'>
            <span class="error">* <?php echo $paniek3Err;?></span>
            <br><br>
            Wat doe je als je je verveelt? <input type='text' name='paniek4'>
            <span class="error">* <?php echo $paniek4Err;?></span>
            <br><br>
            Met welk speelgoed speelde je als kind het meest? <input type='text' name='paniek5'>
            <span class="error">* <?php echo $paniek5Err;?></span>
            <br><br>
            Bij welke docent spijbel je het liefts? <input type='text' name='paniek6'>
            <span class="error">* <?php echo $paniek6Err;?></span>
            <br><br>
            Als je €100.00,- had, wat zou je dan kopen? <input type='text' name='paniek7'>
            <span class="error">* <?php echo $paniek7Err;?></span>
            <br><br>
            Wat is je favoriete bezigheid? <input type='text'  name='paniek8'>
            <span class="error">* <?php echo $paniek8Err;?></span>
            <br><br>
            <input type='submit' id='submit'>
            </form>
            <?php
            }
            else{
            ?>

            <p>
                Er heerst paniek in het koningkrijk <?php echo $paniek3; ?>. Koning <?php echo $paniek6; ?> is ten einde raad en als koning<br>
                <?php echo $paniek6; ?> ten einde raad is, dan roept hij zijn ten-einde-raadsheer <?php echo $paniek2; ?>.<br><br>
                "<?php echo $paniek2; ?>! Het is een ramp! Het is een schande!"<br><br>
                "Sire, Majesteit, Uwe luidruchtigheid, wat is er aan de hand?"<br><br>
                "Mijn <?php echo $paniek1; ?> is verdwenen! Zo maar, zonder waarschuwing. En ik had net <?php echo $paniek5; ?> voor hem gekocht!"<br><br>
                "Majesteit, uw <?php echo $paniek1; ?> komt vast vanzelf weer terug?"<br><br>
                "Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd <?php echo $paniek8; ?> leren?"<br><br>
                "maar Sire, daar kunt u toch uw <?php echo $paniek7; ?> voor gebruiken."<br><br>
                "<?php echo $paniek2; ?>, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had"<br><br>
                "<?php echo $paniek4; ?>, Sire."
            </p>
            <?php
            }
            ?>
        </div>
        <div id='footer'>
            <p>© 2020 Sander Boom</p>
        </div>
    </div>
</body>
</html>