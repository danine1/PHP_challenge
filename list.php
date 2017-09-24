<?php


$actors = [
    'John Travolta' => 'Male',
    'Joe Pesci' => 'Male',
    'Meryl Streep' => 'Female',
];

//you're assigning the variables $name and $sex to each column of the $actors array here with the foreach loop
foreach ($actors as $name => $sex) {
echo "$name: $sex<br>";
}