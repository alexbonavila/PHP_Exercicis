<?php

namespace Acme;

class RegisaterUser{

    public function execute(array $data, RespondsToUserRegistration $listener)
    {
        var_dump('Registering the user.');

        $listener->userRegisteredFailed();

    }

}