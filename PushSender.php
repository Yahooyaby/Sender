<?php

require_once 'MessageSenderInterface.php';
require_once 'ManySenderTrait.php';
require_once 'Recipient.php';

class PushSender implements MessageSenderInterface {
    use ManySenderTrait;

    public function send(Recipient $recipient, string $message): void {
        echo "Отправка push на устройство {$recipient->getDeviceId()}: $message\n";
    }
}