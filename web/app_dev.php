<?php
//phpinfo();

$dbh = new PDO('mysql:host=mysql', 'root', 'test');
$dbs = $dbh->query( 'SHOW DATABASES' );
while( ( $db = $dbs->fetchColumn( 0 ) ) !== false )
{
    echo $db.'<br>';
}

