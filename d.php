<?php
    $fname='Preferences.txt';
    header('Content-Disposition: attachment; filename='.basename($fname));
    readfile($fname);
    echo "Download Success";

?>