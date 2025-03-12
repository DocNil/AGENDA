<?php
$host = 'ep-autumn-art-a8fpgtva-pooler.eastus2.azure.neon.tech';
$db = 'neondb';
$user = 'neondb_owner';
$password = 'npg_lxT9dREQLF0y';

$conn = new PDO("pgsql:host=$host;dbname=$db", $user, $password, [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
    PDO::ATTR_PERSISTENT => true,
    PDO::MYSQL_ATTR_SSL_CA => '/path/to/cacert.pem', // Certificado SSL se necessário
    PDO::MYSQL_ATTR_SSL_VERIFY_SERVER_CERT => false
]);
?>