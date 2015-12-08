<?php

$registration = new Acme\RegisaterUser;

$authController= new Acme\AuthController($registration);

$authController->register();