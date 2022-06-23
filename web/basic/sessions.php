<?php
  // Start the session
  session_start();
?>

<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
  $_SESSION["favcolor"] = "Green";
  $_SESSION["favanimal"] = "Giraffe";
  echo "Session variables are set.";

  var_dump($_SESSION);
//  session_destroy();

?>


</body>
</html>
