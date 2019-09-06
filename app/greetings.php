<?php
namespace App;

use SebastianBergmann\Timer\Timer;

class Greetings {
  public static function sayHelloWorld() {
      return "Hello World\n" . Timer::resourceUsage() . "\n";
  }
}