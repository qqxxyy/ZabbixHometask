<?php
function categorizeNumbers($objects) {
    $results = [
        'positive' => 0,
        'negative' => 0,
        'odd' => 0,
        'even' => 0
    ];

    foreach ($objects as $number) {
        if ($number > 0) {
            $results['positive']++;
        } elseif ($number < 0) {
            $results['negative']++;
        }

        if ($number % 2 === 0) {
            $results['even']++;
        } else {
            $results['odd']++;
        }
    }
    return $results;
}

$objects = [4, 5, -3, 15, -2, 19, 6, -2, -4, 20, -17];
$categorizedNumbers = categorizeNumbers($objects);
$output = "Array has {$categorizedNumbers['negative']} negative, {$categorizedNumbers['positive']} positive, {$categorizedNumbers['odd']} odd and {$categorizedNumbers['even']} even numbers";
print_r($output);