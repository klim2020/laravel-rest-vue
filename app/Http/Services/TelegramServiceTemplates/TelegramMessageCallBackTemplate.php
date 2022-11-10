<?php

namespace App\Http\Services\TelegramServiceTemplates;

class TelegramMessageCallBackTemplate extends TelegramMessage
{

    /**
     * @inheritDoc
     */
    public function initTemplate()
    {

    return "ℹ️ %header_text% ℹ️

🙋‍♂️ %name_text%:%name_val%

📞 %phone_text%:%phone_val%
";
    }
}
