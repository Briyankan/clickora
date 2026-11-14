<?php

class Mic
{
    public $brand;
    public $color;
    public $usb_port;
    public $model;
    public $light;
    public $price;

    public function setLight($light)
    {
        print($light);
        print($this->light);
    }
}
