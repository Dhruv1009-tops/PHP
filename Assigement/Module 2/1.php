<?php
// Enter marks for five subjects
$physics = 85;
$chemistry = 78;
$biology = 92;
$mathematics = 88;
$computer = 95;

// Calculate total, percentage, and grade
$total = $physics + $chemistry + $biology + $mathematics + $computer;
$percentage = ($total / 500) * 100;

if ($percentage >= 90) 
{
    $grade = "A";
}
elseif ($percentage >= 80)
{
    $grade = "B";
} 
elseif ($percentage >= 70)
{
    $grade = "C";
} 
elseif ($percentage >= 60) 
{
    $grade = "D";
}
else 
{
    $grade = "E";
}


echo "Total Marks: $total/500\n";
echo "Percentage: $percentage%\n";
echo "Grade: $grade\n";


// Day number (1 for Monday, 2 for Tuesday, ..., 7 for Sunday)
$day = 4;

switch ($day) {
    case 1:
        echo "It is Monday!";
        break;
    case 2:
        echo "It is Tuesday!";
        break;
    case 3:
        echo "It is Wednesday!";
        break;
    case 4:
        echo "It is Thursday!";
        break;
    case 5:
        echo "It is Friday!";
        break;
    case 6:
        echo "It is Saturday!";
        break;
    case 7:
        echo "It is Sunday!";
        break;
    default:
        echo "Invalid day number!";
        break;
}


?>
