<?php

class Person{
    protected $name;

    /**
     * Person constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }


}

class Business{

    protected $staff;

    /**
     * Business constructor.
     * @param $staff
     */
    public function __construct(Staff $staff)
    {
        $this->staff = $staff;
    }


    public function hire(Person $person)
    {
        // add $person to staff collection
        $this->staff->add($person);
    }

    public function getStaffMembers()
    {
        return $this->staff->members();
    }
    
}

class Staff{

    protected $members =[];

    /**
     * Staff constructor.
     * @param array $members
     */
    public function __construct($members=[])
    {
        $this->members = $members;
    }


    public function add(Person $person){

        $this->members[]=$person;

    }

    public function members()
    {
        return $this->members;
    }
}

$jeffrey = new Person('Jeffrey Way');

$staff = new Staff([$jeffrey]);

$laracasts = new Business($staff);

//$laracasts->hire($jeffrey);

$laracasts->hire(new Person('Jane Doe'));

//var_dump($staff);

var_dump($laracasts->getStaffMembers());