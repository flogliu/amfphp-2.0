<?php
/**
 *  This file is part of amfPHP
 *
 * LICENSE
 *
 * This source file is subject to the license that is bundled
 * with this package in the file license.txt.
 * @package Amfphp_Services
 */


/**
 * This is a test/example service. 
 *
 * @package Amfphp_Services
 * @author Ariel Sommeria-klein
 */
class TestService {

    public function returnOneParam($param){
        return $param;
    }

    public function returnSum($number1, $number2){
        return $number1 + $number2;
    }

    public function returnNull(){
        return null;
    }

    public function returnBla(){
        return "bla";
    }
    
    public function throwException(){
        throw new Exception("test exception", 123);
    }


}
?>
