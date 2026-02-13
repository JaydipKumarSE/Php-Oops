<!-- using the taits -->


<?php

trait paymessage
{
    public function sms()
    {
        echo "This time network issue <br>";
    }
}
class bank
{
    use paymessage;
}

class office
{
    use paymessage;
}

class application
{
    use paymessage;
}

$bank = new bank();
$bank->sms();

$office = new office();
$office->sms();

$application = new application();
$application->sms();
