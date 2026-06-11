<?php
$users = [" rAHim@gmail.com ", " kArim@outlook.com ", " sUmi@yahoo.com "];

foreach ($users as $user) {
    $trimmed = trim($user);
    $parts = explode('@', $trimmed);
    $name = ucfirst(strtolower($parts[0]));
    $domain = $parts[1];
    echo "Name: $name, Domain: $domain\n";
}

?>
