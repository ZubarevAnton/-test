<pre>
<?php



$employees = [
    [
        'name' => 'Clark Kent',
        'age' => 22,
        'skills' => ['PHP', 'Java', 'C#']
    ],
    [
        'name' => 'Steve Stifler',
        'age' => 21,
        'skills' => ['PHP', 'JS', 'CSS', 'HTML']
    ],
    [
        'name' => 'Bruce Wayne',
        'age' => 35,
        'skills' => ['PHP', 'PHP Unit', 'XDebug', 'JS']
    ],
    [
        'name' => 'Peter Parker',
        'age' => 18,
        'skills' => ['PHP', 'C', 'Pascal']
    ]
];


$skill = $_GET['skill'];

foreach ($employees as $employee){
    if(in_array($skill, $employee['skills'])){
        echo "The employee {$employee['name']} has $skill." . PHP_EOL;
        echo "He is {$employee['age']} years old." . PHP_EOL;
        echo "He has " . implode(', ', $employee['skills']) . " skills." . PHP_EOL;
        break;
    }

}