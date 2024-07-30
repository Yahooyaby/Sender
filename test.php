<?php

require_once 'Recipient.php';
require_once 'MessageSenderInterface.php';
require_once 'ManySenderTrait.php';
require_once 'EmailSender.php';
require_once 'SmsSender.php';
require_once 'PushSender.php';
require_once 'MessageService.php';

// Создаем получателей
$recipient1 = new Recipient('rayan@gosling.com', '89987631211', 'MKR488451123');
$recipient2 = new Recipient('katty@perry.com', '89937211637', 'MKG76983522');
$recipient3 = new Recipient('vozmite@narabotu.plz', '89777441639', 'MRR92326868');

$messageService = new MessageService(new EmailSender());

// Тест отправки одиночного email
$messageService->sendMessage($recipient1, 'Test message');

// Тест отправки нескольких SMS
$messageService->setSender(new SmsSender());
$messageService->sendManyMessages([$recipient1, $recipient2, $recipient3], 'Test SMS');

// Тест отправки push-уведомлений
$messageService->setSender(new PushSender());
$messageService->sendManyMessages([$recipient1, $recipient2, $recipient3], 'Test Push');





