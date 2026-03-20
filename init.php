<?php
// init.php
session_start();

// أولاً: تضمين config.php
include_once 'config.php';

// ثم تحديد المسارات
$tpl = 'includes/templates/';
$func = 'includes/functions/';
$css = BASE_URL . 'lib/css/';
$js = BASE_URL . 'lib/js/';

// تضمين الملفات الأساسية
include $func . 'functions.php';

// تضمين الهيدر
include $tpl . 'header.php';
