<?php
    declare(strict_types=1);

    namespace Stolfam\Telegram;

    /**
     * Class ParseMode
     * @package Stolfam\Telegram
     */
    final class ParseMode
    {
        const NO_PARSE = null;
        const HTML = "html";

        /**
         * To have BOLD text use *stars*
         * To have ITALIC text use _underlines_
         */
        const MARKDOWN = "markdown";
        const MARKDOWN_V2 = "MarkdownV2";
    }