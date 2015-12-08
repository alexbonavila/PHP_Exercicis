<?php

interface CanBeFiltred{
    public function filter();

}

class Favorited implements CanBeFiltred{
    public function filter()
    {

    }
}

class Unwatched implements CanBeFiltred{
    public function filter()
    {

    }
}

class Difficulty implements CanBeFiltred{
    public function filter()
    {

    }
}