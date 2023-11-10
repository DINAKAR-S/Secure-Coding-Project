<?php     include("../common/header.php");   ?>

<!-- from https://pentesterlab.com/exercises/php_include_and_post_exploitation/course -->
<?php hint("will include the arg specified in the GET parameter \"page\""); ?>

<form action="/LFI-1/index.php" method="GET">
    <input type="text" name="page">
</form>

<?php
include($_GET["page"]);
?>

<!-- <?php
  // Insecure PHP code vulnerable to Local File Inclusion (LFI)

  // Get the 'page' parameter from the URL
  $page = $_GET['page'];

  // Include the requested page without proper validation
  include($page . '.php');
?>
 -->
