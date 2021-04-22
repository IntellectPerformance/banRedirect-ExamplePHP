<?php

    /*
    Just a simple clean code for defining true or false.
    If true redirect them to the banned page.
    If false then show them the echo message.

    Code Made By Milan
    */

class BanComponent 
{
    // Function we've devined.
    private static $banIntegration = false; // I made it static so it can be called directly.
    public $redirectComp = 'http://localhost/SatisfactionEntity'; // The full url maybe also the folder where this file is in.
    public $connectMessage = 'You are not banned. So the value we were given is false.'; // Echo message.

    // Main function that will be called when loading the page.
    public function banConnectCheck() 
    {

        if (Self::$banIntegration == true) // Please do not adjust this setting.
        {
            header('Location: ' . $this->redirectComp . '/banned.php'); // You can rename the page that you would be redirection.
            exit;
        }
        else 
        {
            echo $this->connectMessage; // Not banned? Show the echo message;
            exit;
        }
    }
}

    $banCall = new BanComponent(); // Define $banCall as the BanComponent but store it inside a variable.
    $banCall->banConnectCheck(); // $banCall with an arrow to refer the function we want to be executed within the class.