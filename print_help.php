<?php 
require_once('config/config.php');
include('help/header.php');
include('help/'.$cfg['language'].'/index.php');
include('help/'.$cfg['language'].'/introduction.php');
include('help/'.$cfg['language'].'/conditions.php');
include('help/'.$cfg['language'].'/installation.php');
include('help/'.$cfg['language'].'/handling.php');
include('help/'.$cfg['language'].'/views.php');
include('help/'.$cfg['language'].'/infos.php');
include('help/'.$cfg['language'].'/display.php');
include('help/'.$cfg['language'].'/buttons.php');
include('help/'.$cfg['language'].'/filter.php');
include('help/'.$cfg['language'].'/navigate.php');
include('help/'.$cfg['language'].'/search.php');
include('help/'.$cfg['language'].'/selection.php');
include('help/'.$cfg['language'].'/edit.php');
include('help/'.$cfg['language'].'/admin.php');
include('help/'.$cfg['language'].'/problems.php');
include('help/en/copyright.php');
include('help/en/license.php');
include('help/'.$cfg['language'].'/api.php');
include('help/footer.php');
?>