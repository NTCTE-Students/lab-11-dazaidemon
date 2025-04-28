<?php
$htmlText = "<p>ПримерParagraph</p><div>Тестовый текст</div>";
$htmlTagPattern = "/<[^>]+>/";
preg_match_all($htmlTagPattern, $htmlText, $htmlTags);
echo 'Найденные HTML-теги: ' . implode(', ', $htmlTags[0]) . '<br>';
?>