
<?php
session_start();
?>
<!DOCTYPE html>
<header>
<title>33 - Sessions3 - Unset</title>
</header>
<html>
<body>

<?php
// remove all session variables
session_unset(); 

// destroy the session 
session_destroy();

echo "All session variables are now removed, and the session is destroyed." 
?>

</body>
</html>