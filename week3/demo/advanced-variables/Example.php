<?php

/**
 * Description of Example
 *
 * @author Ernesto Murillo
 */
class Example {

    public $var = 'Example class test';

    public function sample($param) {
        echo 'this is a sample function';
    }

}

$egString = 'Example';

$eg = new $egString();  //pulls in function from class
$eg->sample('');


echo "$egString - this is a test <br/>";  //parsing
echo '$egString - this is a test <br/>'; // just a string