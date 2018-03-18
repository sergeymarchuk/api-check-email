<?php

class Mail() {
    private $key = 'a9e4c00f396a8d4da45ea2fdd479ef51';
    private $email = null;
    private $text = null;

    public function __constract($email, $text) {
        $this->email = $email;
        $this->text = $text;
    }

    public function checkEmail() {
        $requestString = "http://apilayer.net/api/check?access_key={$this->key}&email={$this->email}&smtp=1&format=1";

        //$response = file_get_contents($requestString);
    }

    public function send() {

    }

}