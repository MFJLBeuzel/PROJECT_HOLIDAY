<?php
if ($logged_in) {
    print "Welkom aan boord, vertrouwde gebruiker!";
}
 ?>

<?php
if ($logged_in) {
    print "Welkom aan boord, vertrouwde gebruiker";
} else {
    print "Welkom, vreemdeling!";
}
 ?>

<?php
if ($logged_in) {
    print "Welkom aan boord, vertrouwde gebruiker!";
} elseif ($new_messages) {
    print "Welkom vreemdeling, er zijn nieuwe berichten!";
} elseif ($emergency) {
    print "Vreemdeling, er zijn geen nieuwe berichten, maar er is wel een
    noodgeval!";
} else {
    print "Ik ken u niet, u heeft geen nieuwe berichten. En er is geen noodgeval.";
}
 ?>
