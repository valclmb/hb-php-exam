<?php
session_start();

if (!empty($_GET['price'])) {//Si la valeur du GET n'est pas vide mettre la valeur price dans la session
    $_SESSION['price'] = $_GET['price'];
}


if (isset($_POST['email'])) {
    if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)==false) {
        echo "<div>Veuillez entrer un email valide</div>";
    }
}

if (isset($_POST['gift']) && !empty($_POST['gift'])) {
    //Créer la variable sum dans la session qui est la somme de price et gift (s'active seulement au clique sur)
        
    $_SESSION['sum'] = $_SESSION['price'] + $_POST['gift'];
    $_SESSION['email'] = $_POST['email'];
}


var_dump($_GET['price'], $_POST['gift'], $_SESSION['sum'], $_SESSION['email']);


?>


<form action="" method="post">
    <div>
        <label for="gift">Ajouter un don</label>
        <input name="gift" type="number" id="gift">
    </div>
    <div>
        <label for="email">Un champ email</label>
        <input name ="email" type="email" id="email">
    </div>
    <div>
    <button type="submit">Envoyer</button>
    </div>
</form>

