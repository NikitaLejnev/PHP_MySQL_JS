// Overriding a method and using the parent operator
<?php
$object = new Son;
$object = text();
$object = text2();

class Dad
{
  function test()
  {
    echo "[Class Dad] I am your Father<br>";
  }
}

class Son extends Dad
{
  function test()
  {
    echo "[Class Son] I am Luke<br>";
  }

  function test2()
  {
    parent::test();
  }
}
