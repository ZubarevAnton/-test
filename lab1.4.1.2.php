<?php



$students = [
    'ned' => [
        'name' => 'Ned Flanders',
        'age' => 42,
        'gender' => 'm'
    ],
    'homer' => [
        'name' => 'Homer Simpson',
        'age' => 40,
        'gender' => 'm'
    ],
    'marge' => [
        'name' => 'Marge Simpson',
        'age' => 35,
        'gender' => 'f'
    ]
];



function findStudents(string $nickName)
{
    global $students;
    if (isset($students[$nickName])){
        echo 'Name: ', $students[$nickName]['name'], "\n";
        echo 'Age: ', $students[$nickName]['age'], "\n";
        echo 'Gender: ',$students[$nickName]['gender'], "\n";
    } else {
        echo "unknow nickname\n";
    }
}


findStudents('homer');
findStudents($argv[1]);