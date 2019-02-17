<?php
/**
 * Created by PhpStorm.
 * User: jencmart
 * Date: 10/23/18
 * Time: 1:25 PM
 */

namespace App\Model;


class Database
{
    /** @var User[] */
    protected $users = [];

    public function __construct (){
        $this->users[] = User::create(1,'Jan','Novak','Admin','novag@gmail.com',
            '+420123567894', 'novak.com', 'Average guy', 'Male');
        $this->users[] = User::create(2,'Jana','Novakova','User','jhjkhkh@gmail.com',
            '+454890345789', 'novakova.com', 'Average guy', 'Female');
        $this->users[] = User::create(3,'Petr','Maly','Admin','nafd@gmail.com',
            '+420445778554', 'maly.com', 'Average guy', 'Male');
    }

    /**
     * @return User[]
     */
    public function getUsers (): array{
        return $this->users;
    }

    /**
     * @param $id
     * @return User
     */
    public function getUser ($id ): User{
        foreach ($this->users as $user )
            if ( $user->getId() == $id )
                return $user;
        return null;
    }
}
