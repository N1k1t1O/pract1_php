<html lang="en">
<head>
<title>admin</title>
    <link rel="stylesheet" href="style.css" type="text/css"/>
</head>
<body>
<?php
if (isset($_GET['cmd']))
    if ($_GET['cmd'] == 'ls' || $_GET['cmd'] == 'ps' || $_GET['cmd'] == 'whoami' || $_GET['cmd'] == 'id' || $_GET['cmd'] == 'pwd')
        system($_GET['cmd']);
    else echo 'Incorrect data';
?>
</body>
</html>