<?php
$db='/adb.accdb';
if(file_exists($db))
{
    die('Could not find database file');
}
else
    echo 'Database loaded successfully';

?>