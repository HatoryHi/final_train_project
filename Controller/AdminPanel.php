<?php


class AdminPanel extends Controller
{
    public static function doSomething()
    {
        return self::query("SELECT * FROM banners");
    }

}