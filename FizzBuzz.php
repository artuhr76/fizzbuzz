<?php

declare(strict_types = 1);

class FizzBuzz
{

    public static $words = [];
    

    /*

     * render the game

     */
    
    public static function render() : void
    {
        for($i=0; $i<100; $i++) {
            self::$words[$i] = self::convert($i);
        }
    }
    

    /*
      
     * determine the word
     
     */
    
    public static function convert(int $i) : string
    {
        $i++;
        
        if($i % 3 == 0 && $i % 5 == 0) {
            return "FizzBuzz";
        }
        
        if($i % 3 == 0) {
            return "Fizz";
        }
        
        if($i % 5 == 0) {
            return "Buzz";
        }

        return (string)$i;
    }

    
    /*

     * run the game
     
     */
    
    public static function play() : void
    {
        self::render();
        self::output();
    }

    
    /*

     * output generated content

     */
    
    public static function output() : void
    {
        
        $br = self::isCli() ? "\n" : "<br />";
        
        foreach(self::$words as $word) {
            echo $word.$br;
        }
    }

    
    /*

     * determine the type of interface

     */
    
    private static function isCli() : bool
    {
        return (bool)(php_sapi_name() == 'cli');
    }

}

FizzBuzz::play();

?>