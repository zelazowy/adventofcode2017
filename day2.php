<?php
$handle = fopen("./day2/data.csv", "r");

$checksum = 0;
while (false !== ($row = fgetcsv($handle, 0, "\t")) ) {
    sort($row);

    $checksum += (array_pop($row) - array_shift($row));
}
fclose($handle);

echo $checksum;
