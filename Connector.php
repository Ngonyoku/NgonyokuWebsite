<?php
/**
 * This Class is resposible for establishing our connection
 * 
 */
class Connector
{
    public $connection = null;

    public function __construct()
    {
        $this->connection = mysqli_connect('localhost', 'root', '', 'ngonyokuwebsite');
        if($this->connection->connect_error) {
            return false; //Return false if there is an error
        }

        return true; //Return true if no error is made during connection
    }
}