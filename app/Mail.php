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
        $this->to = $to;

        return $this;
    }

    public function subject(string $subject)
    {
        $this->subject = $subject;

        return $this;
    }

    public function message(string $message)
    {
        $this->message = wordwrap(100, $message);

        return $this;
    }

    public function headers($headers)
    {
        if (is_array($headers)) {
            $headers = implode("\r\n", $headers);
        }
        $this->headers = $headers;

        return $this;
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

    protected function mail()
    {
        mail($this->to, $this->subject, $this->message, $this->headers);
    }

}