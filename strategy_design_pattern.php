<?php


// encapsulate and make them interchangeable

// as u know interface functions are without body
//we can say logger is a behavior interface
interface LoggerBehavior
{
    public function log($data);
}


// define a family of algorithms that implement from logger interface
class LogTOFile implements LoggerBehavior
{

    public function log($data)
    {
        var_dump($data, 'log to a file');
    }

}

class LogToDataBase implements LoggerBehavior
{
    public function log($data)
    {
        var_dump($data, 'log to a database');
    }
}

class LogToXWebService implements LoggerBehavior
{

    public function log($data)
    {
        var_dump($data, 'log to a aws');
    }

}


//context or super class

class app
{
    public function log($data, LoggerBehavior $loggerBehavior)
    {
        $loggerBehavior->log($data);
    }
}


$app = new app;

$app->log('some information', new LogToDataBase());




