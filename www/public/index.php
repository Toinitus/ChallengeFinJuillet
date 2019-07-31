<?php
$basePath = dirname(__dir__) . DIRECTORY_SEPARATOR;

require_once $basePath . 'vendor/autoload.php';

$app = App\App::getInstance();
$app->setStartTime();
$app::load();

$app->getRouter($basePath)
//Route en get
    ->get('/home', 'index#all', 'index')
    ->get('/mentionlegales', 'mentionLegales#all', 'mentionLegales')
    ->get('/givegift', 'giveGift#all', 'giveGift')

//Route en get post 'match'    
    ->match('/subscribe', 'user#subscribe', 'subscribe')
    ->match('/login', 'user#login', 'login')
    ->match('/contact', 'contact#all', 'contact')
    ->match('/findteam', 'findTeam#all', 'findTeam')
    ->run();
