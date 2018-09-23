<?php

/**
 * @param PDO $db
 * @param null $id
 */
function saveContact($db, $idUser, $id = null) {
    if ($_POST) {
        $post = getPost();
        $id = $post['id'];
        unset($post['id']);
        $arrayKeys = array_keys((array)$post);
        $pdoQuery = 'UPDATE contacts SET ';
        $pdoParams = [];
        foreach ($arrayKeys as $key) {
            $pdoQuery .= $key . ' = :' . $key . ',';
            $pdoParams[':' . $key] = $post[$key];
        }
        $pdoQuery = substr($pdoQuery, 0, -1);

        $pdoQuery .= ' WHERE id = :id AND idUser = :idUser';
        $pdoParams[':id'] = $id;
        $pdoParams[':idUser'] = $idUser;

        $saveQuery = $db->prepare($pdoQuery);
        if (!$saveQuery->execute($pdoParams)) {
            return 2;
        } else {
            return 1;
        }
    } else {
        return 0;
    }
}