<?php
session_start();
requireValidSession();

loadModel('WorkingHours');

$date = (new DateTime('now'))->getTimestamp();
$today = strftime("%d de %B de %Y", $date);

$user = $_SESSION['user'];

$records = WorkingHours::loadFromUserAndDate($user->id, date('Y-m-d'));
var_dump($records);

loadTemplateView('day_records',[
    'today'=>$today,
    'records'=>$records
]);