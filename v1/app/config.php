<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mariadb';
$CFG->dblibrary = 'native';
$CFG->dbhost    = '127.0.0.1';
$CFG->dbname    = 'u837965232_6Kp8l';
$CFG->dbuser    = 'u837965232_Ex2M9';
$CFG->dbpass    = 'yjZM9p4huu';
$CFG->prefix    = 'lej8_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => 3306,
  'dbsocket' => '0',
  'dbcollation' => 'utf8mb4_unicode_ci',
);

$CFG->wwwroot   = 'https://app.vskuul.com';
$CFG->dataroot  = '/home/u837965232/domains/vskuul.com/public_html/app/.htlypo12mtgwmw.data/';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
