<?php

class Recipient {
    private string $email;
    private string $phone;
    private string $deviceId;

    public function __construct(string $email, string $phone, string $deviceId) {
        $this->email = $email;
        $this->phone = $phone;
        $this->deviceId = $deviceId;
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function getPhone(): string {
        return $this->phone;
    }

    public function getDeviceId(): string {
        return $this->deviceId;
    }
}