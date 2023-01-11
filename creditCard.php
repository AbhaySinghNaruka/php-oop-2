<?php

class creditCard
{
    public $number;
    public $cc_cvc;
    public $cc_exp;
    public $validation;

    public function __construct($numero, $cc_cvc, $cc_exp)
    {
        $this->number = $numero;
        $this->cc_cvc = $cc_cvc;
        $this->cc_exp = $cc_exp;
    }

    public function setValidation()
    {
        if ($this->cc_exp = 'ciao') {
            $this->validation = true;
        }
        return $this;
    }

    function correctCvc()
    {
        if (!is_numeric($this->cc_cvc)) {
            throw new Exception('Is not a number');
        }
        return $this;
    }

    public function getValidation()
    {
        return $this->validation;
    }
}
