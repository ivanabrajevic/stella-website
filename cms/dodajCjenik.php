<?php

session_start();

if (!(isset($_SESSION['korisnicko_ime']))) {
  header("Location: admin.php");
  exit();
}
require "../bazaPodataka.php";

if (isset($_POST["Dodaj"])) {

  if (
    strlen($_POST["naziv"]) > 0  && strlen($_POST["tip"]) > 0 && strlen($_POST["cijena"]) > 0) {
    $naziv = $_POST['naziv'];
    $tip = $_POST['tip'];
    $cijena = $_POST['cijena'];
    $stmt = $mysqli->prepare("INSERT INTO cjenik (naziv ,tip,cijena) VALUES(?,?,?)");
    $stmt->bind_param("sss", $naziv, $tip, $cijena);
    $stmt->execute();

    header("Location: cjenik.php");
  } else {
    echo '<script>alert("Popunite sva polja!")</script>';
  }
}
$mysqli->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Cjenik</title>
</head>

<body>
  <section>

    <nav class="navbar navbar-dark bg-primary">
      <div class="container-fluid">
        <a class="navbar-brand" href="adminHome.php">Admin home</a>
        <a class="navbar-brand" href="logout.php">Log out</a>
      </div>

    </nav>
  </section>
  <style>
    form input {
      width: 50%;
    }

    textarea {
      width: 50%;
      height: 150px;
      padding: 12px 20px;
      box-sizing: border-box;
      border: 2px solid #ccc;
      border-radius: 4px;
      background-color: #ffffff;
      resize: none;
    }

    input[type=text] {
      background-color: #ffffff;
      color: black;
    }

    input[type=submit] {
      background-color: #999999;
      border: none;
      color: black;
      padding: 13px 29px;
      text-decoration: none;
      margin: 4px 2px;
      cursor: pointer;
    }
  </style>
  <h1>Dodaj novu uslugu</h1>

  <form action="dodajCjenik.php" method="post" id="usrform">
    <label>Naziv: </label><br>
    <input type="text" name="naziv"><br>
    <label>Tip:</label><br>
    <select class="form-select" aria-label="Odaberite tip usluge" name="tip">
    <option selected>Odaberite tip usluge</option>
      <option value="lice">lice</option>
      <option value="tijelo">tijelo</option>
      <option value="masaža">masaža</option>
    </select><br>
    <label>Cijena:</label><br>
    <input type="text" name="cijena"> <br>

    <input type="submit" name="Dodaj" value="Dodaj">
  </form>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>