<?php
if (!@include __DIR__ . '/../vendor/autoload.php') {
    die('You must set up the project dependencies, run the following commands:
        wget http://getcomposer.org/composer.phar
        php composer.phar install');
require_once "php/index.php";

class indexTest extends PHPUnit_Framework_TestCase
{
    // test the talk method
    public function testTalk() {
        // make an instance of the user
        $user = new User();

        // use assertEquals to ensure the greeting is what you
        $expected = "Hello world!";
        $actual = $user -> talk();
        $this -> assertEquals($expected, $actual);
    }
}
