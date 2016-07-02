<?php
$price = 3.95;
$tax_rate = 0.08;
$tax_amount = $price * $tax_rate;
$total_cost = $price + $tax_amount;

$username = 'maarten';
$domain = '@gmail.com';
$email_address = $username . $domain;

print 'De belasting is ' . $tax_amount;
print "\n";
print 'De totale kosten zijn ' .$total_cost;
print "\n";
print $email_address;
?>
