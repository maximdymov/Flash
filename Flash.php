<?php

class Flash
{
    private $type;
    private $message;

    const INFO = 1;
    const SUCCESS = 2;
    const WARNING = 3;
    const DANGER = 4;

    public function __construct($type, $message)
    {
        $this->setType($type);
        $this->message = $message;
        $this->setFlashInSession($this->type, $message);
    }

    public function display()
    {
        echo $_SESSION["Flash-$this->type"] . "<br>";
    }

    private function setFlashInSession($type, $message)
    {
        if (!array_key_exists("Flash-$type", $_SESSION)) {
            $_SESSION["Flash-$type"] = $message;
            return true;
        }
        return false;
    }

    private function setType($type) {
        if ($type == self::INFO) $this->type = 'info';
        if ($type == self::SUCCESS) $this->type = 'success';
        if ($type == self::WARNING) $this->type = 'warning';
        if ($type == self::DANGER) $this->type = 'danger';
    }
}