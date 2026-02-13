<!--  Using static for memory saving -->



<?php

class servers
{
    public static function message1()
    {
        return "Error : 500";
    }

    public static function message2()
    {
        return "Error : 404";
    }

    public static function message3()
    {
        return "Error : 202";
    }

    public static function message4()
    {
        return "Error : 444";
    }
}


echo servers::message1() . "<br>";
echo servers::message2() . "<br>";
echo servers::message3() . "<br>";
