<?php

namespace App;

class Sending
{

    protected $hello;
    protected $phone = '967770263836';
    protected $url = 'https://api.whatsapp.com/send';

    public function __construct()
    {
        $this->hello = __('messages.welcome');
        $this->intro = __('messages.intro');
    }
    public function url(array $field)
    {
        $text = urlencode("$this->hello\n$this->intro" . $field['title'] . "\nمعرف: " . $field['id']);
        return $this->url . '?phone=' . $this->phone . '&text=' . $text;
    }
}
