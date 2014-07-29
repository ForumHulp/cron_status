<?php
/**
*
* @package Cron_status
* @copyright (c) 2014 ForumHulp.com
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
	'CRON_STATUS'					=> 'Cron Locked',
	'ACP_CRON_STATUS_TITLE'			=> 'Cron status',
	'ACP_CRON_STATUS_CONFIG_TITLE'	=> 'Check cron status',
	'ACP_CRON_STATUS_EXPLAIN'		=> 'Cron status is a page of your phpBB Board where you can check if cron tasks are ready to be done. The \'Auto\' last task date means that the task has a specific time control option that couldn\'t be recognized by Cron status extension.',
	'CRON_STATUS_READY_TASKS'		=> 'Ready tasks',
	'CRON_STATUS_NOT_READY_TASKS'	=> 'Not ready tasks',
	'CRON_STATUS_NO_TASKS'			=> 'No available cron tasks',
	'CRON_TASK_NAME'				=> 'Task name',
	'CRON_TASK_DATE'				=> 'Last task date',
	'CRON_TASK_NEVER_STARTED'		=> 'Never started',
	'CRON_TASK_AUTO'				=> 'Auto',
));