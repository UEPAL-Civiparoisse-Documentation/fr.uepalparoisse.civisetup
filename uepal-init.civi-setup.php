<?php

if (!defined('CIVI_SETUP'))
{
  exit("Installation plugin : should only be loaded by setup");
}

\Civi\Setup::dispatcher()
->addListener('civi.setup.init',function(\Civi\Setup\Event\InitEvent $e){
$model=$e->getModel();
$model->mandatorySettings['extensionsDir']='/app/ext';
$model->mandatorySettings['extensionsURL']=$model->cmsBaseUrl.'/libraries/civicrm';
$model->paths['civicrm.private']['path']='/app/private';
}, \Civi\Setup::PRIORITY_END);
