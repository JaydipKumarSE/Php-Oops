<?php
class User {
    private $password;

    public function setPassword($pass) {
        $this->password = $pass;
    }

    public function getPassword() {
        return $this->password;
    }
}

$user = new User();
$user->setPassword("1234");
echo "Encapsulation: " . $user->getPassword();
?>
