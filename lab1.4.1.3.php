<?php

$students = [
    'ned' => [
        'name' => 'Ned Flanders',
        'age' => 42,
        'gender' => 'm',
        'lessons' => ['PHP', 'CSS', 'HTML'],
    ],
    'homer' => [
        'name' => 'Homer Simpson',
        'age' => 40,
        'gender' => 'm',
    'lessons' => ['PHP'],
    ],
    'marge' => [
        'name' => 'Marge Simpson',
        'age' => 35,
        'gender' => 'f',
    'lessons' => ['PHP'],
    ]
];



function findStudents(string $nickName)
{
    global $students;
    if (isset($students[$nickName])){
        echo 'Name: ', $students[$nickName]['name'], "\n";
        echo 'Age: ', $students[$nickName]['age'], "\n";
        echo 'Gender: ',$students[$nickName]['gender'], "\n";
        echo 'Lessons: ', implode('; ', $students[$nickName]['lessons']), "\n";
    } else {
        echo "unknow nickname\n";
    }
}


//findStudents('homer');
findStudents($argv[1]);