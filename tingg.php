<?php
$Nilai = [72, 65, 73, 78, 75, 74, 90, 81, 87, 65, 55, 69, 72, 78, 79, 91, 100, 40, 67, 77, 86];
//Fungsi SORT & array_alice
asort($Nilai, SORT_NUMERIC);
print_r(array_slice($Nilai, -7, 7, true));