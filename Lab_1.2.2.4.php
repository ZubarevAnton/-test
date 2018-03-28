<?php

echo 'Current line number is:' . __LINE__, "\n";
echo 'File name is: ' . __FILE__, "\n";
echo 'Folder is :' . __DIR__, "\n";
echo 'Current line number is:' . __LINE__, "\n";


$myName = 'Anton';
echo "My Name is {$myName}", "\n";
echo 'My Name is {$myName}', "\n";


echo <<<SQL
SELECT * FROM students WHERE name = '$myName';

SQL;



echo <<<'SQL'
SELECT * FROM students WHERE name = '$myName';

SQL;

