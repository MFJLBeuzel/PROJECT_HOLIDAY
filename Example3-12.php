<?php
$x = strcmp("x54321","x5678");
if ($x > 0) {
    print 'The string "x54321" is greater than the string "x5678"';
} elseif ($x < 0) {
    print 'The string "x54321" is less than the string "x5678"';
}
?>

<?php
$a = 1 <=> 12.7;
$b = "charlie" <=> "bob";
$x = '6 pack' <=> '55 card stud';
if ($x > 0) {
    print 'The string "6 pack" is greater than the string "55 card stud".';
} elseif ($x < 0) {
    print 'The string "6 pack" is less than the string "55 card stud".';
}
?>
