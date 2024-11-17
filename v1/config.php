<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mariadb';
$CFG->dblibrary = 'native';
$CFG->dbhost    = '127.0.0.1';
$CFG->dbname    = 'u837965232_N1vss';
$CFG->dbuser    = 'u837965232_melEG';
$CFG->dbpass    = 'dLH2Nndh8z';
$CFG->prefix    = 'ekcd_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => 3306,
  'dbsocket' => '0',
  'dbcollation' => 'utf8mb4_unicode_ci',
);

$CFG->wwwroot   = 'https://v1.vskuul.com';
$CFG->dataroot  = '/home/u837965232/domains/vskuul.com/public_html/v1/.htvwtiymoyoqix.data/';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
