<?php
$creditCardPattern = "/^(?:\d{4}[- ]?){3}\d{4}$/"; // Формат будет 1111 2222 3333 4444 или 1111-2222-3333-4444
$creditCardNumber = "1234 5678 9012 3456"; // номера карты
$isValidCard = preg_match($creditCardPattern, $creditCardNumber);
echo 'Номер кредитной карты ' . ($isValidCard ? 'правильно' : 'неправильно') . '<br>';
?>