<?php

require_once 'MessageSenderInterface.php';
require_once 'ManySenderTrait.php';
require_once 'Recipient.php';

class SmsSender implements MessageSenderInterface {
    use ManySenderTrait;

    public function send(Recipient $recipient, string $message): void {
        echo "Отправка SMS по номеру {$recipient->getPhone()}: $message\n";
    }
}