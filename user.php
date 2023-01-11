<?php

class User
{
    public $credenziali;
    public $email;
    public $member;
    public $sconto;
    public $carta;

    public function __construct($credenziali, $email, $member, $carta)
    {
        $this->credenziali = $credenziali;

        $this->email = $email;

        $this->member = $member;

        $this->carta = $carta;
    }

    public function setSconto()
    {
        if ($this->member) {
            $this->sconto = 20;
        }
        return $this;
    }

    public function getSconto()
    {
        return $this->sconto;
    }
}
