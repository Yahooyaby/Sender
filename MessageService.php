<?php

require_once 'MessageSenderInterface.php';
require_once 'Recipient.php';

class MessageService {
    private MessageSenderInterface $sender;

    public function __construct(MessageSenderInterface $sender) {
        $this->sender = $sender;
    }

    public function setSender(MessageSenderInterface $sender): void {
        $this->sender = $sender;
    }

    public function sendMessage(Recipient $recipient, string $message): void {
        $this->sender->send($recipient, $message);
    }

    public function sendManyMessages(array $recipients, string $message): void {
        $this->sender->sendMany($recipients, $message);
    }
}