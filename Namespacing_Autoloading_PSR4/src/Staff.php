<?php
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