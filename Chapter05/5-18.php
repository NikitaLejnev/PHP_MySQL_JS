// Valid and invalid property declarations
<?php
class Test
{
  public $name = "Paul Allen";  // Valid
  public $age = 42;             // Valid
  public $time = time();        // Invalid - calls a function
  public $score = $level * 2;   // Invalid - uses an expression
}
