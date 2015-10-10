<?php
/**
*
* @package cronstatus
* @copyright (c) 2014 John Peskens (http://ForumHulp.com) and Igor Lavrov (https://github.com/LavIgor)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ACP_CRON_STATUS_TITLE'				=> 'Cron Durumu',
	'ACP_CRON_STATUS_CONFIG_TITLE'		=> 'Cron Durumunu denetle',
	'LOG_CORE_INSTALLED'				=> 'Files succesfully changed',
	'LOG_CORE_DEINSTALLED'				=> 'Files succesfully changed back',
	'LOG_CORE_NOT_REPLACED'				=> 'Could not replaced file(s)<br />» %s',
	'LOG_CORE_NOT_UPDATED'				=> 'Could not update file(s)<br />» %s'
));