<?php

use App\FirstTask\User;

$user = new User();

$user->setFirstName('John')
    ->setLastName('Doe')
    ->setEmail('john.doe@example.com')
;

echo $user;
