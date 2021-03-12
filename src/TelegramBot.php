<?php
    declare(strict_types=1);

    namespace Stolfam\Telegram;

    /**
     * Class TelegramBot
     * @package Stolfam\Telegram
     */
    class TelegramBot
    {
        private string $botToken;

        /**
         * TelegramBot constructor.
         * @param string $botToken
         */
        public function __construct(string $botToken)
        {
            $this->botToken = $botToken;
        }

        /**
         * Sends plain text.
         *
         * @param string $message
         * @param string $chatId
         */
        public function sendMessage(string $message, string $chatId): void
        {
            $bot_url = "https://api.telegram.org/bot$this->botToken/";
            $url = $bot_url . "sendMessage?chat_id=" . $chatId . "&text=" . urlencode($message);
            file_get_contents($url);
        }
    }