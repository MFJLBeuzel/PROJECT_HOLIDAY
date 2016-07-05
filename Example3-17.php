<?php
$i = 1;
print '<select name="people">';
while ($i <= 10) {
    print "<option>$i</option>\n";
    $i++;
}
print '</select>';
?>

//mooier

<?php
print '<select name="people">';
for ($i = 1; $i <= 10 ; $i++) {
    print "<option>$i</option>\n";
}
print '</select>';
 ?>
