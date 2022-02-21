<?php

echo "<br>Задание - 11  <br>";
$num_languages = 4;
$months = 11;
$days = 16;
$days_in_study = $months * $days;
$day_per_language = $days_in_study / $num_languages;
echo "Days per language = $day_per_language<br>";
// m * d / n_m