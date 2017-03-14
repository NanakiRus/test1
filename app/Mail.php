<?php

namespace app;

//Тестовый класс для отправки почты
class Mail
{
    protected $to;
    protected $subject;
    protected $message;
    protected $headers;

    public function to(string $to)
    {
        return $this->to = $to;
    }

    public function subject(string $subject)
    {
        return $this->subject = $subject;
    }

    public function message(string $message)
    {
        return $this->message = wordwrap(100, $message);
    }

    public function headers($headers)
    {
        if (is_array($headers)) {
            $headers = implode("\r\n", $headers);
        }
        return $this->headers = $headers;
    }

    protected function mail()
    {
        mail($this->to, $this->subject, $this->message, $this->headers);
    }

    public function send()
    {
        //по хорошему здесь надо делать более серьёзную валидацию
        if (empty($this->to)) {
            throw new \Exception('Не заполнен отправитель');
        }

        if (empty($this->message)) {
            throw new \Exception('Не заполнено сообщение');
        }

        $this->mail();
    }

}