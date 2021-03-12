# telegram-simple-message-php
Simple sending a telegram message via bot.

```
$telegramBot = new TelegramBot($botToken);
$telegramBot->sendMessage("Your message here", "your_chat_id");
```