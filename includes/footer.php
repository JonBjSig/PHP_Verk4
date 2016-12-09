<?php
echo '&copy';
$startYear = 2006;
$thisYear = date('Y');
if ($startYear == $thisYear) {
 echo $startYear;
} else {
 echo "{$startYear}&ndash;{$thisYear}";
}
?>