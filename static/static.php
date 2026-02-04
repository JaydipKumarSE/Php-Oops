<?php

class Record
{
    public static function rec1()
    {
        echo "Success";
    }

    public static function rec2()
    {
        echo "failed";
    }
}

Record::rec1();
Record::rec2();
