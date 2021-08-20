<?php

$adsArr= [2, 3, 2, 5, 6, 1, -2, 3, 14, 12];
$count = count($adsArr);

for ($i = 0; $i < $count; $i++) {
    for($j = 0; $j < $count - $i - 1; $j++) {
        if($adsArr[$j] > $adsArr[$j + 1]) {
            $temp = $adsArr[$j + 1];
            $adsArr[$j + 1] = $adsArr[$j];
            $adsArr[$j] = $temp;
        }
    }
}
for($i= 0;$i <$count; $i++) {
    echo $adsArr[$i]. " ";
}
?>