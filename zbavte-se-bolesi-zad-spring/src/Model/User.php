<?php
/**
 * Created by PhpStorm.
 * User: jencmart
 * Date: 10/23/18
 * Time: 1:25 PM
 */

namespace App\Model;


class User
{
    /** @var int */
    protected $id;

    /** @var string */
    protected $name;

    /** @var string */
    protected $surname;

    /** @var string */
    protected $role;

    /** @var string */
    protected $email;

    /** @var string */
    protected $phone;

    /** @var string */
    protected $webPage;

    /** @var string */
    protected $additional;

    /** @var string */
    protected $sex;

    /**
     * User constructor.
     * @param int $id
     * @param string $name
     * @param string $surname
     * @param string $role
     * @param string $email
     * @param string $phone
     * @param string $webPage
     * @param string $additional
     * @param string $sex
     */
    public function __construct(int $id, string $name, string $surname, string $role, string $email, string $phone, string $webPage, string $additional, string $sex)
    {
        $this->id = $id;
        $this->name = $name;
        $this->surname = $surname;
        $this->role = $role;
        $this->email = $email;
        $this->phone = $phone;
        $this->webPage = $webPage;
        $this->additional = $additional;
        $this->sex = $sex;
    }

    public static function create (int $id, string $name, string $surname, string $role, string $email, string $phone, string $webPage, string $additional, string $sex) : User {
        return new static( $id,  $name,  $surname,  $role,  $email,  $phone,  $webPage,  $additional,  $sex);
    }

    /**
     * @return string
     */
    public function getSex(): string
    {
        return $this->sex;
    }

    /**
     * @param string $sex
     */
    public function setSex(string $sex)
    {
        $this->sex = $sex;
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     */
    public function setPhone(string $phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return string
     */
    public function getWebPage(): string
    {
        return $this->webPage;
    }

    /**
     * @param string $webPage
     */
    public function setWebPage(string $webPage)
    {
        $this->webPage = $webPage;
    }

    /**
     * @return string
     */
    public function getAdditional(): string
    {
        return $this->additional;
    }

    /**
     * @param string $additional
     */
    public function setAdditional(string $additional)
    {
        $this->additional = $additional;
    }



    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getSurname(): string
    {
        return $this->surname;
    }

    /**
     * @param string $surname
     */
    public function setSurname(string $surname)
    {
        $this->surname = $surname;
    }

    /**
     * @return string
     */
    public function getRole(): string
    {
        return $this->role;
    }

    /**
     * @param string $role
     */
    public function setRole(string $role)
    {
        $this->role = $role;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email)
    {
        $this->email = $email;
    }
}

