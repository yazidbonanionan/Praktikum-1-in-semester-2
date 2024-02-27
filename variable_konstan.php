<?php
// definisikan konstansta
define('PHI',3.14);
define('DBNAME','inventori');
define('DBSERVER','localhost');
6
7 $jari = 8;
8 $luas = PHI * $jari * $jari;
9 $kll = 2 * PHI * $jari;
10
11 echo 'Luas Lingkaran dengan Jari '.$jari.' : '.$luas;
12 echo '<br/>Kelilingnya : '.$kll;
13 ?>
14 <hr/>
15 <?php
16 echo 'Nama databasenya : '.DBNAME;
17 echo '<br/>Lokasi databasenya ada di '.DBSERVER;
18 ?>