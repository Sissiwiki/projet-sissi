<?php require_once 'config.php';

// isset = existe et empty = vide


$query = $pdo->prepare("SELECT * FROM courses"); //[2] cette requete permet de recupérer des info dans la bdd=> PDO , SELECTION TOUT DANS COURSES
$query->execute();

$course = $query->fetchAll(PDO::FETCH_ASSOC); //fetchALL est une fonction PHP, qui permet de recuperer TOUTES info contenu dans la requete. Elle prend un parametre, qui peut permet de convertir les donné en tableau ou object ou autre.


if(!empty($_POST)){// (empty=vide) " si diférent de vide de la variable $_POST, ALOR tu fais qqchose" /

  $query = $pdo->prepare("INSERT INTO courses SET objet = ?"); //[1]requete preparer, permet dêtre plus sécuriser => variable pdo(qui contien les info bdd) tu te prepare a inserer dans la table qqchose(?)

    $query->execute([$_POST['aliment']]); // ensuite on exexute la requete, on lui dis voila mtn tu insert $_POST['aliment'] a la place du "?" que je t'ai donné plus haut MERCI

}
// salut sihame voila github

?>