<?php
echo "Приветствую вас здесь. Слышал, вы учитесь на PHP-программиста!\n";
echo "Почему бы вам не набрать свое имя для меня:\n";
$name = trim(fgets(STDIN));
echo "\nСпасибо, " . $name . ", очень рад с вами познакомиться.\n\n";
?>
