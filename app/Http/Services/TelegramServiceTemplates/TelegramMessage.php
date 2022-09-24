<?php

namespace App\Http\Services\TelegramServiceTemplates;

abstract class TelegramMessage
{
    protected $template;

    public function __construct(){
       $this->template = $this->initTemplate();
    }

    /** Please Provide template string here
     *  inside child class
     * @return mixed - string with template
     */
    public abstract function initTemplate();

    /**
     *
     * @param $opts - replacement array where %key%=>value
     * all keys are replaced inside template with values
     * @return array|string|string[]
     */
    public function getMessage($opts=[]){
        return str_replace(array_keys($opts), array_values($opts),$this->template);
    }
}
