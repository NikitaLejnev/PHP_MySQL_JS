// Using the variable $this in a method
<?php
class User
{
  public $name, $password;

  function get_password()
  {
    return $this->password;
  }
}
