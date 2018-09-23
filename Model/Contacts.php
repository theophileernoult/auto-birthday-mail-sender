<?php

/**
 * Class Contacts
 */
class Contacts
{
    /**
     * @var
     */
    protected $id;
    /**
     * @var
     */
    protected $lastName;
    /**
     * @var
     */
    protected $firstName;
    /**
     * @var
     */
    protected $surname;
    /**
     * @var
     */
    protected $birthday;
    /**
     * @var
     */
    protected $sex;
    /**
     * @var
     */
    protected $mail;

    /**
     * @var
     */
    protected $active;

    /**
     * Contacts constructor.
     * @param $id
     * @param $lastName
     * @param $firstName
     * @param $surname
     * @param $birthday
     * @param $sex
     * @param $mail
     * @param $active
     */

    public function __construct($id = null, $lastName = null, $firstName = null, $surname = null, $birthday = null, $sex = null, $mail = null, $active = null)
    {
        $this->id = $id;
        $this->lastName = $lastName;
        $this->firstName = $firstName;
        $this->surname = $surname;
        $this->birthday = $birthday;
        $this->sex = $sex;
        $this->mail = $mail;
        $this->active = $active;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return mixed
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * @param mixed $surname
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;
    }

    /**
     * @return mixed
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * @param mixed $birthday
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
    }

    /**
     * @return mixed
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * @param mixed $sex
     */
    public function setSex($sex)
    {
        $this->sex = $sex;
    }

    /**
     * @return mixed
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * @param mixed $mail
     */
    public function setMail($mail)
    {
        $this->mail = $mail;
    }

    /**
     * @return mixed
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * @param mixed $active
     */
    public function setActive($active)
    {
        $this->active = $active;
    }
}