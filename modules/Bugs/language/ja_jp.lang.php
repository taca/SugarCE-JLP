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
  'LBL_MODULE_NAME' => '不具合管理',
  'LBL_MODULE_TITLE' => '不具合管理: ホーム',
  'LBL_MODULE_ID' => '不具合管理',
  'LBL_SEARCH_FORM_TITLE' => '不具合検索',
  'LBL_LIST_FORM_TITLE' => '不具合一覧',
  'LBL_NEW_FORM_TITLE' => '不具合作成',
  'LBL_CONTACT_BUG_TITLE' => '取引先担当者 - 不具合:',
  'LBL_SUBJECT' => '件名:',
  'LBL_BUG' => '不具合:',
  'LBL_BUG_NUMBER' => '不具合番号:',
  'LBL_NUMBER' => '番号:',
  'LBL_STATUS' => 'ステータス:',
  'LBL_PRIORITY' => '優先度:',
  'LBL_DESCRIPTION' => '詳細:',
  'LBL_CONTACT_NAME' => '取引先担当者:',
  'LBL_BUG_SUBJECT' => '件名:',
  'LBL_CONTACT_ROLE' => '役割:',
  'LBL_LIST_NUMBER' => 'No.',
  'LBL_LIST_SUBJECT' => '件名',
  'LBL_LIST_STATUS' => 'ステータス',
  'LBL_LIST_PRIORITY' => '優先度',
  'LBL_LIST_RELEASE' => 'リリース',
  'LBL_LIST_RESOLUTION' => '解決',
  'LBL_LIST_LAST_MODIFIED' => '更新日',
  'LBL_INVITEE' => '取引先担当者',
  'LBL_TYPE' => 'タイプ:',
  'LBL_LIST_TYPE' => 'タイプ',
  'LBL_RESOLUTION' => '解決:',
  'LBL_RELEASE' => 'リリース:',
  'LNK_NEW_BUG' => '不具合作成',
  'LNK_BUG_LIST' => '不具合管理',
  'NTC_REMOVE_INVITEE' => '本当にこの取引先担当者を不具合から削除して良いですか？',
  'NTC_REMOVE_ACCOUNT_CONFIRMATION' => '本当にこの不具合をこの取引先担当者から削除して良いですか？',
  'ERR_DELETE_RECORD' => '不具合を削除するにはレコード番号を指定する必要があります。',
  'LBL_LIST_MY_BUGS' => '私にアサインされたバグ',
  'LNK_IMPORT_BUGS' => '不具合のインポート',
  'LBL_FOUND_IN_RELEASE' => '発見リリース:',
  'LBL_FIXED_IN_RELEASE' => '修正リリース:',
  'LBL_LIST_FIXED_IN_RELEASE' => '修正リリース',
  'LBL_WORK_LOG' => '作業履歴:',
  'LBL_SOURCE' => 'ソース:',
  'LBL_PRODUCT_CATEGORY' => 'カテゴリ:',

  'LBL_CREATED_BY' => '作成者:',
  'LBL_DATE_CREATED' => '作成日:',
  'LBL_MODIFIED_BY' => '更新者:',
  'LBL_DATE_LAST_MODIFIED' => '更新日:',

  'LBL_LIST_EMAIL_ADDRESS' => '電子メール',
  'LBL_LIST_CONTACT_NAME' => '取引先担当者',
  'LBL_LIST_ACCOUNT_NAME' => '取引先',
  'LBL_LIST_PHONE' => '電話',
  'NTC_DELETE_CONFIRMATION' => '本当にこの取引先をこの不具合から削除して良いですか？',

  'LBL_DEFAULT_SUBPANEL_TITLE' => '不具合',
  'LBL_ACTIVITIES_SUBPANEL_TITLE'=>'活動予定',
  'LBL_HISTORY_SUBPANEL_TITLE'=>'活動履歴',
  'LBL_CONTACTS_SUBPANEL_TITLE' => '取引先担当者',
  'LBL_ACCOUNTS_SUBPANEL_TITLE' => '取引先',
  'LBL_CASES_SUBPANEL_TITLE' => '問合せ',
  'LBL_PROJECTS_SUBPANEL_TITLE' => 'プロジェクト',
  'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'ドキュメント',
  'LBL_SYSTEM_ID' => 'システムID',
  'LBL_LIST_ASSIGNED_TO_NAME' => '担当ユーザ',
	'LBL_ASSIGNED_TO_NAME' => '担当ユーザ',

	'LBL_BUG_INFORMATION' => '概要',

    //For export labels
	'LBL_FOUND_IN_RELEASE_NAME' => '発見リリース名',
    'LBL_PORTAL_VIEWABLE' => 'Portal Viewable',
    'LBL_EXPORT_ASSIGNED_USER_NAME' => 'アサインユーザ名',
    'LBL_EXPORT_ASSIGNED_USER_ID' => 'アサインユーザID',
    'LBL_EXPORT_FIXED_IN_RELEASE_NAMR' => '修正リリース名',
    'LBL_EXPORT_MODIFIED_USER_ID' => '最終更新者ID',
    'LBL_EXPORT_CREATED_BY' => '作成者ID',


  );
?>
