<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Madlibs - Onkunde</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
// define variables and set to empty values
$valid = false;
$onkunde1Err = $onkunde2Err = $onkunde3Err = $onkunde4Err = $onkunde5Err = $onkunde6Err = $onkunde7Err = $onkunde8Err = "";
$onkunde1 = $onkunde2 = $onkunde3 = $onkunde4 = $onkunde5 = $onkunde6 = $onkunde7 = $onkunde8 = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["onkunde1"])) {
        $onkunde1Err = "Answer required";
      } else {
        $onkunde1 = test_input($_POST["onkunde1"]);
      }
    if (empty($_POST["onkunde2"])) {
        $onkunde2Err = "Answer required";
      } else {
        $onkunde2 = test_input($_POST["onkunde2"]);
      }
    if (empty($_POST["onkunde3"])) {
        $onkunde3Err = "Answer required";
      } else {
        $onkunde3 = test_input($_POST["onkunde3"]);
      }
    if (empty($_POST["onkunde4"])) {
        $onkunde4Err = "Answer required";
      } else {
        $onkunde4 = test_input($_POST["onkunde4"]);
      }
    if (empty($_POST["onkunde5"])) {
        $onkunde5Err = "Answer required";
      } else {
        $onkunde5 = test_input($_POST["onkunde5"]);
      }
    if (empty($_POST["onkunde6"])) {
        $onkunde6Err = "Answer required";
      } else {
        $onkunde6 = test_input($_POST["onkunde6"]);
      }
    if (empty($_POST["onkunde7"])) {
        $onkunde7Err = "Answer required";
      } else {
        $onkunde7 = test_input($_POST["onkunde7"]);
      }
}
if(empty($_POST["onkunde1"]) || empty($_POST["onkunde2"]) || empty($_POST["onkunde3"]) || empty($_POST["onkunde4"]) || empty($_POST["onkunde5"]) || empty($_POST["onkunde6"]) || empty($_POST["onkunde7"])){
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
            <h1>Onkunde</h1>
            <?php
            if($valid == false){
            ?>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            Wat zou je graag willen kunnen? <input type='text' name='onkunde1'>
            <span class="error">* <?php echo $onkunde1Err;?></span>
            <br><br>
            Met welke persoon kun je goed opschieten? <input type='text' name='onkunde2'>
            <span class="error">* <?php echo $onkunde2Err;?></span>
            <br><br>
            Wat is je favoriete getal? <input type='text' name='onkunde3'>
            <span class="error">* <?php echo $onkunde3Err;?></span>
            <br><br>
            Wat heb je altijd bij je als je op vakantie gaat? <input type='text' name='onkunde4'>
            <span class="error">* <?php echo $onkunde4Err;?></span>
            <br><br>
            Wat is je beste persoonlijke eigenschap <input type='text' name='onkunde5'>
            <span class="error">* <?php echo $onkunde5Err;?></span>
            <br><br>
            Wat is je slechtste persoonlijke eigenschap? <input type='text' name='onkunde6'>
            <span class="error">* <?php echo $onkunde6Err;?></span>
            <br><br>
            Wat is het ergste dat je kan overkomen? <input type='text' name='onkunde7'>
            <span class="error">* <?php echo $onkunde7Err;?></span>
            <br><br>
            <input type='submit' id='submit'>
            </form>
            <?php
            }
            else{
            ?>
            <p>
                Er zijn veel mensen die niet kunnen <?php echo $onkunde1; ?>. Neem nou <?php echo $onkunde2; ?>. Zelfs met de hulp<br>
                van een <?php echo $onkunde4; ?> of zelfs <?php echo $onkunde3; ?> kan <?php echo $onkunde2; ?> niet <?php echo $onkunde1; ?>. Dat heeft niet te maken met<br>
                een gebrek aan <?php echo $onkunde5; ?>, maar met een te veel aan <?php echo $onkunde5; ?>. Te veel <?php echo $onkunde6; ?><br>
                leidt tot <?php echo $onkunde7; ?> en dat is niet goed als je wilt <?php echo $onkunde1; ?>. Helaas voor <?php echo $onkunde2; ?>.
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