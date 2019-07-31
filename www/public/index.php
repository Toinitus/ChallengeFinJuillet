<?php
$basePath = dirname(__dir__) . DIRECTORY_SEPARATOR;

require_once $basePath . 'vendor/autoload.php';

$app = App\App::getInstance();
$app->setStartTime();
$app::load();

$app->getRouter($basePath)
//Route en get
    ->get('/home', 'index#all', 'index')
    ->get('/mentionlegales', 'index#legales', 'mentionLegales')
    ->get('/givegift', 'index#gift', 'giveGift')

//Route en get post 'match'    
    ->match('/subscribe', 'user#subscribe', 'subscribe')
    ->match('/login', 'user#login', 'login')
    ->match('/contact', 'user#contact', 'contact')
    ->match('/findteam', 'FindTeam#rechercheequipe', 'findTeam')
    ->match('/team', 'FindTeam#equipe', 'team')
    ->run();
