<?php

interface Logger{

}

class LogToFile{
    public function execute($message){
        var_dump('log the message to a file'.$message);
    }
}

class LogToDatabase{
    public function execute($message){
        var_dump('log the message to a database');
    }
}

//...


class UserController{
    protected $logger;

    /**
     * UserController constructor.
     * @param $logger
     */
    public function __construct($logger)
    {
        $this->logger = $logger;
    }

    public function show()
    {
        $user='JohnDoe';

        $this->logger->execute($user);
    }

}

$controller =new UserController(new LogToFile());

$controller->show();