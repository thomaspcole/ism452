<?php
setcookie("user", "", time()+3600, "/");
echo '<script type="text/javascript">window.location.href="../index.php"</script>';
?>
