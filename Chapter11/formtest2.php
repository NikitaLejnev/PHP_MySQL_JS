// Example 11-2. Updated formtest.php
<?php
if (isset($_POST['name'])) $name = $_POST['name'];
else $name = "(Not entered)";

echo <<<_END
<html>
  <head>
    <title>Form Test</title>
  </head>
  <body>
  <form method="post" action="formtest.php">
    What is your name?
    <input type="text" name="name">
    <input type="submit">
  </form>
  </body>
</html>
_END;
