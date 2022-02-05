<?php

require_once('src/RandomQuotes.php');

$random = new RandomQuotes();

print_r($random->generate());