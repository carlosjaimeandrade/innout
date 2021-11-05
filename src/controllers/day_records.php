<?php
session_start();
requireValidSession();

$date = (new DateTime('now'))->getTimestamp();
$today = strftime("%d de %B de %Y", $date);

loadTemplateView('day_records',['today'=>$today]);