<?php

const DB_HOST = '127.0.0.1';
const DB_NAME = 'remindme';
const DB_USER = 'root';
const DB_PASS = '';
const ROOT_URL = 'http://127.0.0.1/auto-birthday-mail-sender/';

/**
 * @return PDO
 */
function getPdo() {
    try {
        $db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
        return $db;
        // set names utf8 is super important in order not to have encoding problems w/ foreign languages :)
    } catch (PDOException $e) {
        echo "The connection to the database failed.";
        die();
    }
}
$db = getPdo();

/**
 * @param $pdoQuery
 * @param array $params
 * @return array
 */
function pdoToContact($pdoQuery = null, $params = array()) {
    if (!is_null($pdoQuery)) {
        $pdoQuery->execute($params);
        $result = $pdoQuery->fetchAll(PDO::FETCH_ASSOC);
    } else {
        $result[] = $params;
    }
    $contactObjects = [];
    foreach ($result as $r) {
        $contact = new Contacts();
        $keys = array_keys($r);
        foreach ($keys as $key) {
            switch ($key) {
                case 'id' :
                    $contact->setId($r[$key]);
                    break;
                case 'last_name' :
                    $contact->setLastName($r[$key]);
                    break;
                case 'first_name' :
                    $contact->setFirstName($r[$key]);
                    break;
                case 'surname' :
                    $contact->setSurname($r[$key]);
                    break;
                case 'birthday' :
                    $contact->setBirthday($r[$key]);
                    break;
                case 'sex' :
                    $contact->setSex($r[$key]);
                    break;
                case 'mail' :
                    $contact->setMail($r[$key]);
                    break;
                case 'active' :
                    $contact->setActive($r[$key]);
                    break;
            }
        }
        $contactObjects[] = $contact;
    }
    return $contactObjects;
}

/**
 * @param $uri
 * @return string
 */
function url($uri) {
    return ROOT_URL . $uri;
}

function getPost() {
    $post = filter_input_array(INPUT_POST);
    return $post;
}