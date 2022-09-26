<html lang="en">
<head>
<title>sort</title>
    <link rel="stylesheet" href="style.css" type="text/css"/>
</head>
<body>
<?php
function mergeSort(array $arr) {
    $count = count($arr);
    if ($count <= 1) {
        return $arr;
    }
 
    $left  = array_slice($arr, 0, (int)($count/2));
    $right = array_slice($arr, (int)($count/2));
 
    $left = mergeSort($left);
    $right = mergeSort($right);
 
    return merge($left, $right);
}
 
function merge(array $left, array $right) {
    $ret = array();
    while (count($left) > 0 && count($right) > 0) {
        if ($left[0] < $right[0]) {
            array_push($ret, array_shift($left));
        } else {
            array_push($ret, array_shift($right));
        }
    }
 
    array_splice($ret, count($ret), 0, $left);
    array_splice($ret, count($ret), 0, $right);
 
    return $ret;
}

if (isset($_GET['array'])) {
    $array_str = $_GET['array'];
    $array = explode(",", $array_str);

    if ($array[0] == 0) {
        echo 'Incorrect data';
        exit(0);
    }
    for ($i = 0; $i < count($array); $i++) {
        $array[$i] = (int)$array[$i];
    }

    echo implode(',', mergeSort($array));
} else echo "Incorrect data"
?>
</body>
</html>
