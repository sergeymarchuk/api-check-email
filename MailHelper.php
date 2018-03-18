<?php

class MailHelper {
    private $key = 'a9e4c00f396a8d4da45ea2fdd479ef51';
    private $email;
    private $text;
    private $response; //json string

    public function __construct($address = null, $mail = null) {
        $this->email = $address;
        $this->text = $mail;
    }

    
    
    public function checkEmail() {
        $requestString = "http://apilayer.net/api/check?access_key={$this->key}&email={$this->email}&smtp=1&format=1";

        $this->response = file_get_contents($requestString);
    }

    public function writeMail() {

    }

}