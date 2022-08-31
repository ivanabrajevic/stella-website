<?php
 require "bazaPodataka.php";
 $id = 1;

$stmtF = $mysqli->prepare("SELECT * FROM kontakt WHERE id = ? ");
$stmtF->bind_param("i", $id);
$stmtF->execute();
$resultF = $stmtF->get_result();
$rowF = mysqli_fetch_array($resultF, MYSQLI_ASSOC); ?>
<footer id="footer">
    <section>
        <h2>Kontaktirajte nas</h2>
        <p>Odaberite za više informacija.</p>
        <ul class="actions">
            <li><a href="kontakt.php" class="button">Odaberi</a></li>
        </ul>
    </section>
    <section>
        <h2>Kontakt</h2>
        <dl class="alt">
            <dt>Adresa</dt>
            <dd><?php echo $rowF['adresa'] ?></dd>
            <dt>Telefon</dt>
            <dd><?php echo $rowF['telefon'] ?></dd>
            <dt>Email</dt>
            <dd><a href="mailto:<?php $rowF['email']; ?>"><?php echo $rowF['email']; ?></a></dd>
        </dl>
        <ul class="icons">
            <li><a href="<?php $rowF['facebook']; ?>" class="icon brands fa-facebook-f alt"><span class="label">Facebook</span></a></li>
            <li><a href="<?php $rowF['instagram']; ?>" class="icon brands fa-instagram alt"><span class="label">Instagram</span></a></li>
        </ul>
    </section>
    <p class="copyright">&copy; Untitled. Design: Stella</p>
</footer>
?>

