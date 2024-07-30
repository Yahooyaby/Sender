<?php

require_once 'MessageSenderInterface.php';
require_once 'ManySenderTrait.php';
require_once 'Recipient.php';

class EmailSender implements MessageSenderInterface {
    use ManySenderTrait;

    public function send(Recipient $recipient, string $message): void {
        echo "Отправка email по адресу {$recipient->getEmail()}: $message\n";
    }
}