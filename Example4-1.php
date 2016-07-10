<?php
$vegetables = array('corn' => 'yellow',
                    'beef' => 'red',
                    'carrot' => 'orange');
$dinner = array(0 => 'Sweet Corn and Asparagus',
                1 => 'Lemon Chicken',
                2 => 'Braised Bamboo Fungus');
$computers = array('trs-80' => 'Radio Shack',
                    2600 => 'Atari',
                    'Adam' => 'Coleco');
?>

//verbetering

<?php
$vegetables = ['corn' => 'yellow', 'beet' => 'red', 'carrot' => 'orange'];
$dinner = [0 => 'Sweet Corn and Asparagus', 1 => 'Lemon Chicken', 2 => 'Braised Bamboo Fungus'];
$computers = ['trs-80' => 'Radio Shack', 2600 => 'Atari', 'Adam' => 'Coleco'];
?>

//een andere manier

<?php
// an array called $vegetables with string keys
$vegetables ['corn'] = 'yellow';
$vegetables ['beet'] = 'red';
$vegetables ['carrot'] = 'orange';

//an array called $dinner with numeric keys
$dinner[0] = 'Sweet Corn and Asparagus';
$dinner[1] = 'Lemon Chicken';
$dinner[2] = 'Braised Bamboo Fungus';

//an array called $computers with numeric and string keys
$computers['trs-80'] = 'Radio Shack';
$computers[2600] = 'Atari';
$computers['Adam'] = 'Coleco';
 ?>
