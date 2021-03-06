<?php

class MailHelper {
    const KEY = 'a9e4c00f396a8d4da45ea2fdd479ef51';
    private $email;
    private $text;
    private $response;

    public function __construct($address = null, $mail = null) {
        $this->email = $address;
        $this->text = $mail;
    }

    public function writeMail() {
        $file = __DIR__ . DIRECTORY_SEPARATOR . uniqid() . "_" . time() . ".txt";

        file_put_contents($file, $this->text . PHP_EOL);
    }
    
    private function getResponse() {
        $requestString = "http://apilayer.net/api/check?access_key=" . self::KEY . "&email={$this->email}&smtp=1&format=1";

        $this->response = json_decode(file_get_contents($requestString), true);
    } 

    public function checkEmail() {
        $this->getResponse();

        if ($this->response['format_valid'] && $this->response['mx_found'] && $this->response['smtp_check']) {
            $this->writeMail();
            return true;
        } else {
            return false;
        }
    }

}