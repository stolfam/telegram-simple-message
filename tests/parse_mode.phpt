<?php
    require_once __DIR__ . "/../src/bootstrap.php";

    $token = "yourBotToken";
    $chatId = "yourChatIde";
    $bot = new \Stolfam\Telegram\TelegramBot($token);
    $bot->sendMessage("*Test* _test_.", $chatId);