<?php

namespace Acme;

class RegisaterUser{

    public function execute(array $data, $listener)
    {
        var_dump('Registering the user.');

        $listener->userRegisteredSuccessfully();

    }

}