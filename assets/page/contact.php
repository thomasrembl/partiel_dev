<?php
$basepath = "../../";
$stylepath = "../css/";
$scriptpath = "../js/";
$pagepath = "";
include '../partials/_header.php';
include '../utils/pdo.php';

$succes = false;
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $firstname = $_POST['firstname'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $succes = true;
    $sql = "INSERT INTO `comptes` (`nom`, `mail`, `message`) VALUES (:name, :email, :message)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':name', $name);
    $stmt->bindValue(':email', $email);
    $stmt->bindValue(':message', $message);
    $stmt->execute();

}
?>


<?php
    if ($succes === false) { ?>
<form method="POST">
    <input type="text" name="name" id="name" placeholder="Votre nom" value="<?php if (isset($name)) echo $name; ?>">
    <input type="text" name="firstname" id="firstname" placeholder="Votre prénom" value="<?php if (isset($firstname)) echo $firstname; ?>">
    <input type="email" name="email" id="email" placeholder="Votre email" value="<?php if (isset($email)) echo $email; ?>">
    <input type="textarea" name="message" id="message" placeholder="Votre message" value="<?php if (isset($message)) echo $message; ?>">
    <input type="submit" name="submit" value="Envoyer">
</form>
<?php
    } else {
        echo "<div class='alert-success'>Merci $firstname $name votre message dit $message. Envoyer avec $email</div>";
    
    }
?>

<?php
include '../partials/_footer.php';
?>