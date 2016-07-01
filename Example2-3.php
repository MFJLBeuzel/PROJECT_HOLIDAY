<?php

$zipcode = trim($_POST['zipcode']);
$zip_length = strlen($zipcode);

if ($zip_length != 5) {
    print "Please enter a zip code that is 5 char long.";
}

?>

//improved code

<?php

if (strlen(trim($_POST['zipcode'])) != 5) {
    print "Please enter a zip code that is 5 char long.";
}

?>

<?php

if ($_POST['email'] == 'president@whitehouse.gov') {
    print "Welcome, US President.";
}

?>

//verbeterde code
//maakt niet uit of Hoofdletter is ingevoerd. PrESiDent etc.
<?php

if (strcasecmp($_POST['email'], 'president@whitehouse.gov') == 0) {
    print "Welcome back, US President.";
}

?>
