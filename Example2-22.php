<?php
$page_title = 'Menu';
$meat = 'pork';
$vegetable = 'bean sprout';
print<<<MENU
<html>
<head>
<title>$page_title</title>
</head>
<body>
<ul>
<li>
Barbecued $meat
</li>
<li>
Sliced $meat
</li>
<li>
Braised $meat with $vegetable
</li>
</ul>
</body>
</html>
MENU;
 ?>
