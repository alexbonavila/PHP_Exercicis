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
}

class Staff{

    public function add(Person $person){

        

    }
}