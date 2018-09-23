<?php
require '../functions.php';
require '../Model/Contacts.php';
require '../Actions/Contact.php';

ob_start();
$idUser = 1;
$idContact = $_GET['contact-id'];
switch (saveContact($db, $idUser)) {
    case 1 :
        ?>
        <div class="alert alert-success" role="alert">
            Contact Sauvegardé avec succès.
        </div>
        <hr>
        <?php
        break;
    case 2 :
        ?>
        <div class="alert alert-success" role="alert">
            Erreur lors de la sauvegarde.
        </div>
        <hr>
        <?php
        break;
}
//$idUser = $_SESSION['idUser'];

$query = $db->prepare('SELECT * FROM contacts WHERE idUser = :idUser AND id = :id');
$contact = pdoToContact($query, [':idUser' => $idUser, ':id' => $idContact])[0];
?>
<form method="POST">
    <input name="id" type="hidden" value="<?=$contact->getId()?>" required class="form-control">
    <table>
        <tr>
            <td>Last name <font color="crimson"><b>*</b></font></td>
            <td><input name="last_name" type="text" value="<?=$contact->getLastName()?>" required class="form-control"></td>
        </tr>
        <tr>
            <td>First name <font color="crimson"><b>*</b></font></td>
            <td><input name="first_name" type="text" value="<?=$contact->getFirstName()?>" required class="form-control"></td>
        </tr>
        <tr>
            <td>Surname</td>
            <td><input name="surname" type="text" value="<?=$contact->getSurName()?>" class="form-control"></td>
        </tr>
        <tr>
            <td>Mail adresses(s) <font color="crimson"><b>*</b></font></td>
            <td><input name="mail" type="text" value="<?=$contact->getMail()?>" required class="form-control"></td>
        </tr>
        <tr>
            <td>Birthday <font color="crimson"><b>*</b></font></td>
            <td><input name="birthday" type="date" value="<?=date('Y-m-d', strtotime($contact->getBirthday()))?>" required class="form-control"></td>
        </tr>
        <tr>
            <td style="padding: 7px 0px;">Sex <font color="crimson"><b>*</b></font></td>
            <td>
                <input name="sex" type="radio" value="1" <?=($contact->getSex() == 1) ? 'checked' : ''?>> Homme
                <input name="sex" type="radio" value="2" <?=($contact->getSex() == 2) ? 'checked' : ''?>> Femme
            </td>
        </tr>
        <tr>
            <td style="padding: 7px 0px;">Mail has to be sent? <font color="crimson"><b>*</b></font></td>
            <td>
                <input name="active" type="radio" value="1" <?=($contact->getActive() == 1) ? 'checked' : ''?>> Oui
                <input name="active" type="radio" value="0" <?=($contact->getActive() == 0) ? 'checked' : ''?>> Non
            </td>
        </tr>
        <tr>
            <td style="padding: 7px 0px;"><input type="submit" value="Save" class="btn btn-success"></td>
            <td></td>
        </tr>
    </table>
</form>
<?php
$content=ob_get_clean();
require '../template.php';
?>