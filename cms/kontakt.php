<?php
session_start();

if (!(isset($_SESSION['korisnicko_ime']))) {
  header("Location: admin.php");
  exit();
}
require "../bazaPodataka.php";

$id = 1;
$stmt = $mysqli->prepare("SELECT * FROM kontakt WHERE id = ? ");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);


if (isset($_POST["Izmjeni"])) {
  if (strlen($_POST["adresaU"]) > 0 && strlen($_POST["telefonU"]) > 0 && strlen($_POST["emailU"]) > 0) {
    $adresa = $_POST['adresaU'];
    $telefon = $_POST['telefonU'];
    $email = $_POST['emailU'];
    $fb = $_POST['fbU'];
    $insta = $_POST['instaU'];
    $karta = $_POST['kartaU'];
    $stmt = $mysqli->prepare("UPDATE kontakt set adresa = ?, telefon = ?, email = ?, karta = ?, facebook = ?, instagram = ? WHERE id = ?");
    $stmt->bind_param("ssssssi", $adresa, $telefon,$email,$fb, $insta, $karta, $id);

    $stmt->execute();

    header("Location: adminHome.php");
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
  <title>Kontakt</title>
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
  <h1>Uredi kontakt</h1>

  <form action="kontakt.php?id=<?php echo $id ?>" method="post" id="usrform">
    <label>Adresa:</label><br>
    <input type="text" name="adresaU" value="<?php printf($row['adresa']) ?>"><br>
    <label>Telefon:</label><br>
    <input type="text" name="telefonU" value="<?php echo $row['telefon'] ?>"><br>
    <label>Email:</label><br>
    <input type="text" name="emailU" value="<?php echo $row['email'] ?>"><br>
    <label>Facebook:</label><br>
    <input type="text" name="fbU" value="<?php echo $row['facebook'] ?>"><br>
    <label>Instagram:</label><br>
    <input type="text" name="instaU" value="<?php echo $row['instagram'] ?>"><br>
    <label>Karta:</label><br>
    <input type="text" name="kartaU" value="<?php echo $row['karta'] ?>"><br>

    <input type="submit" name="Izmjeni" value="Izmjeni">
  </form>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>