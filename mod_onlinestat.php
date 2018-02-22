<?php
use Joomla\CMS\Helper\ModuleHelper;

defined('_JEXEC') or die;
require_once 'helper.php';
$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));
$stat = ModOnlinestatHelper::getStat();

require ModuleHelper::getLayoutPath('mod_onlinestat', $params->get('layout', 'default'));
