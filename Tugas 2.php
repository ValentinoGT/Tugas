<!-- Kasus 1 -->
 <?php
$data = [150, 170, 155, 160, 145];
$n = count($data);

for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $n-$i-1; $j++) {
        if ($data[$j] > $data[$j+1]) {
            $temp = $data[$j];
            $data[$j] = $data[$j+1];
            $data[$j+1] = $temp;
        }
    }
}

print_r($data);
?>

<!-- Kasus 2 -->
 <?php
$data = [405, 102, 308, 215, 110, 502, 333, 111, 201, 444];
$n = count($data);

for ($i = 0; $i < $n; $i++) {
    $min = $i;

    for ($j = $i+1; $j < $n; $j++) {
        if ($data[$j] < $data[$min]) {
            $min = $j;
        }
    }

    $temp = $data[$i];
    $data[$i] = $data[$min];
    $data[$min] = $temp;
}

print_r($data);
?>

<!-- Kasus 3 -->
 <?php
$data = [10,11,12,13,14,15,16,17,19,18];
$n = count($data);

for ($i = 0; $i < $n; $i++) {
    $tukar = false;

    for ($j = 0; $j < $n-$i-1; $j++) {
        if ($data[$j] > $data[$j+1]) {
            $temp = $data[$j];
            $data[$j] = $data[$j+1];
            $data[$j+1] = $temp;
            $tukar = true;
        }
    }

    if (!$tukar) {
        break;
    }
}

print_r($data);
?>

<!-- Kasus 4 -->
 <?php
$data = [50000,15000,80000,35000,20000];
$n = count($data);

for ($i = 0; $i < $n; $i++) {
    $min = $i;

    for ($j = $i+1; $j < $n; $j++) {
        if ($data[$j] < $data[$min]) {
            $min = $j;
        }
    }

    $temp = $data[$i];
    $data[$i] = $data[$min];
    $data[$min] = $temp;
}

print_r($data);
?>

<!-- Kasus 5 -->
 <?php
$data = [32,28,30,25,31];
$n = count($data);

for ($i = 0; $i < $n; $i++) {
    $min = $i;

    for ($j = $i+1; $j < $n; $j++) {
        if ($data[$j] < $data[$min]) {
            $min = $j;
        }
    }

    $temp = $data[$i];
    $data[$i] = $data[$min];
    $data[$min] = $temp;
}

print_r($data);
?>