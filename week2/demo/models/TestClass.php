<?php

/**
 * Description of TestClass
 *
 * @author User
 */
class TestClass {
    
    // private - can only be accessed by class itself
    private $test;
    
    // build classes for single purpose use
    
    // can be accessed inside and outside of class when you create an instance of the class
    // allows you start the class  constructor
    public function __construct($test) {
        $this->setTest($test);  //function
    }
    
    /**
    * Function getTest.
    *    
    * @return void;
    */ 
    // getter
    public function getTest() {
        return $this->test;
    }

     
    /**
    * Function setTest..
    *    
    * @param {String} [$test]
    */ 
    //setter
    public function setTest($test) {
        if ( !is_string($test) ) {
            throw new Exception('only string allowed for test');
        }
            
        $this->test = $test;  // set the value
        
        
    }

    
   private function functionName($param) {
       
   }

    
}
