<?php

namespace app;

class View
{
    use GetTrait;

    protected $data = [];

    public function view($path)
    {
        foreach ($this->data as $key => $value) {
            $$key = $value;
        }
        include $path;
    }

}