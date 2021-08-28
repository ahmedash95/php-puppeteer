<?php

require(__DIR__.'/vendor/autoload.php');

use Nesk\Puphpeteer\Puppeteer;

$puppeteer = new Puppeteer();
$browser = $puppeteer->launch();

$page = $browser->newPage();
$page->goto('http://localhost:8005/view.php');
$page->pdf(['path' => 'example.pdf']);

$browser->close();
