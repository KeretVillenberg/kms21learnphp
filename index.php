<?php

class Job {
        public function __construct($logger)
        {
            $this-> logger  = $logger;
        }
    public function work(){
        $logger = new ConsoleLogger();
        for($i=0; $i<10; $i++){
            $logger->log($i);
        }
    }
}

class ConsoleLogger implements Logger{
    public function log($message){
        echo $message . "\n";
    }
}

interface Logger {
    public function log($message);
}


///////////////////////


class NothingLogger{
    public function log ($message){

    }
}


$consolelogger = new ConsoleLogger();
$nothinlogger = new NothingLogger();
$job = new Job($consoleLogger);
$job->work();