<?php
require '../functions.php';
require '../Model/Contacts.php';

ob_start();
//$idUser = $_SESSION['idUser'];
$idUser = 1;

$query = $db->prepare('SELECT * FROM contacts WHERE idUser = :idUser');
$contacts = pdoToContact($query, [':idUser' => $idUser]);
?>
<table id="contacts" class="table table-stripped table-bordered">
    <thead>
        <tr>
            <th>Last name</th>
            <th>First name</th>
            <th>Surname</th>
            <th>Mail addresse(s)</th>
            <th>Birthday</th>
            <th>Birthyear</th>
            <th>Sex</th>
            <th>Mail has to be sent ?</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    <?php
        foreach ($contacts as $contact){
            ?>
                <tr>
                    <td><?=$contact->getFirstName()?></td>
                    <td><?=$contact->getLastName()?></td>
                    <td><?=$contact->getSurName()?></td>
                    <td><?=$contact->getMail()?></td>
                    <td><?=date('d M', strtotime($contact->getBirthday()))?></td>
                    <td><?=date('Y', strtotime($contact->getBirthday()))?></td>
                    <td><?=($contact->getSex() == 1) ? 'Homme' : 'Femme'?></td>
                    <td><?=($contact->getActive() == 1) ? 'Oui' : 'Non'?></td>
                    <td>
                        <a id="contact-edit" href="<?=url('contact-edit/' . $contact->getId())?>">Editer</a> ||
                        <a id="contact-remove" href="<?=url('contact-remove/' . $contact->getId(), 'action')?>">Supprimer</a>
                    </td>
                </tr>
            <?php
        }
    ?>
    </tbody>
</table>

<?php
$content=ob_get_clean();
require '../template.php';
?>