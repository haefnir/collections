<?php
/** Connects to database
 *
 * @param string $databaseName Name of the database you are connecting to
 * @return PDO
 */
function connectToDB(string $databaseName): PDO {
    $db = new PDO("mysql:host=db; dbname=$databaseName", 'root', 'password');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db;
}
