<?php

require_once 'Recipient.php';

trait ManySenderTrait {
    public function sendMany(array $recipients, string $message): void {
        foreach ($recipients as $recipient) {
            if ($recipient instanceof Recipient) {
                $this->send($recipient, $message);
            }
        }
    }
}