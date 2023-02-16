<?php

require __DIR__ . '/app/controller/video.php';
require __DIR__ . '/app/helper/video.php';

//use App\Helper\Video;
use App\Helper\Video as CtlVideo;

$controllerVideo = new App\Controller\Video();
$heloerVideo = new CtlVideo();