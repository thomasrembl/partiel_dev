<?php
$basepath = "../../";
$stylepath = "../css/";
$scriptpath = "../js/";
$pagepath = "";
include '../partials/_header.php';
include '../utils/pdo.php';

function deleteCompte($comptesId){
    global $pdo;
    $stmt = $pdo->prepare("DELETE FROM `comptes` WHERE id = ?");
    $stmt->execute([$comptesId]);
}

if (isset($_POST['delete_compte'])) {
    deleteCompte($_POST['comptesId']);
}

$sql1 = "SELECT * FROM comptes order by id";
$query1 = $pdo->prepare($sql1);
$query1->execute();
$comptes = $query1->fetchAll();

foreach ($comptes as $compte) {
    echo $compte['nom'] . "<br>";
    echo $compte['mail'] . "<br>";
    echo $compte['message'] . "<br>";
    echo "<hr>";
    echo '<form method="POST">';
    echo '<input type="hidden" name="comptesId" value="' . htmlspecialchars($compte['id']) . '" />';
    echo '<input type="submit" name="delete_compte" value="Supprimer" />';
    echo '</form>';
}
?>



<?php
include '../partials/_footer.php';
?>