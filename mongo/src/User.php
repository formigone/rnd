<?php

namespace Rk;

class User
{
    protected $id;
    protected $firstName;
    protected $lastName;
    protected $email;
    protected $avatar;

    public function __construct($email, $firstName = '', $lastName = '', $avatar = '')
    {
        $this->email = $email;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
    }

    public function setId(\MongoId $id)
    {
        $this->id = $id;
    }

    public function toArray()
    {
        return [
            'email' => $this->email,
            'firstName' => $this->firstName,
            'lastName' => $this->lastName,
            'avatar' => $this->avatar
        ];
    }
}
