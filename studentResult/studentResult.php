<?php
$bangla = 34;
$english = 45;
$math = 67;
$social = 56;
$science = 67;


$studentMarks = ["bangla" => 22, "english" => 56, "math" => 78, "science" => 78, "social" => 85];
$passedSubject = [];
$failedSubject = [];

// foreach ($studentMarks as $subjectName => $marks) {
//     var_dump("$subjectName : $marks");
// }


foreach ($studentMarks as $mark) {
    if ($mark < 33) {
        // echo "failed in " . $mark;
        array_push($failedSubject, $mark);
    } else {
        array_push($passedSubject, $mark);
        // echo " pass in " . $mark;
    }
}

foreach ($passedSubject as $subject => $marks) {
    var_dump("$subject: $marks");
}
// echo $failedSubject . " in subject";
