<?php

require_once 'Recipient.php';

interface MessageSenderInterface {

    public function send(Recipient $recipient, string $message): void;

    public function sendMany(array $recipients, string $message): void;
}