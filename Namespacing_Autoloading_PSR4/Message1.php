<?php

use Acme\Users\Person;
use Acme\Business;
use Acme\Staff;



$jeffrey = new Person('Jeffrey Way');

$staff = new Staff([$jeffrey]);

$laracasts = new Business($staff);

//$laracasts->hire($jeffrey);

$laracasts->hire(new Person('Jane Doe'));

//var_dump($staff);

var_dump($laracasts->getStaffMembers());