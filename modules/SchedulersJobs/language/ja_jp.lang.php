<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/******************************************************************************
 * SugarCRM Japanese Language Pack is developed by Masaki Fukuitsu (SugarAndSalt).
 * Copyright (C) 2011-2012 Masaki Fukuitsu (SugarAndSalt).
 * 
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 * 
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 * 
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarUser.jp" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by SugarUser.jp".
*****************************************************************************/
$mod_strings = array (
'LBL_NAME' => 'Job Name',
'LBL_EXECUTE_TIME'			=> '実行時間',
'LBL_SCHEDULER_ID' 	=> 'Scheduler',
'LBL_STATUS' 	=> 'Job Status',
'LBL_RESOLUTION' 	=> 'Result',
'LBL_MESSAGE' 	=> 'Messages',
'LBL_DATA' 	=> 'Job Data',
'LBL_REQUEUE' 	=> 'Retry on failure',
'LBL_RETRY_COUNT' 	=> 'Maximum retries',
'LBL_FAIL_COUNT' 	=> 'Failures',
'LBL_INTERVAL' 	=> 'Minimum interval between tries',
'LBL_CLIENT' 	=> 'Owning client',
'LBL_PERCENT'	=> 'Pecent complete',
// Errors
'ERR_CALL' 	=> "Cannot call function: %s",
'ERR_CURL' => "No CURL - cannot run URL jobs",
'ERR_FAILED' => "Unexpected failure, please check PHP logs and sugarcrm.log",
'ERR_PHP' => "%s [%d]: %s in %s on line %d",
'ERR_NOUSER' => "No User ID specified for the job",
'ERR_NOSUCHUSER' => "User ID %s not found",
'ERR_JOBTYPE' 	=> "Unknown job type: %s",
'ERR_TIMEOUT' => "Forced failure on timeout",
'ERR_JOB_FAILED_VERBOSE' => 'Job %1$s (%2$s) failed in CRON run',
);
