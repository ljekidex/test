<?php
/* This will give an error. Note the output
 * above, which is before the header() call */
footer('Location: http://www.example.com/');
exit;
?>
</html>