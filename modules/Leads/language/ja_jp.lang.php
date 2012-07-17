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
    //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_last_name' => 'LBL_LIST_LAST_NAME',
    'db_first_name' => 'LBL_LIST_FIRST_NAME',
    'db_title' => 'LBL_LIST_TITLE',
    'db_email1' => 'LBL_LIST_EMAIL_ADDRESS',
    'db_account_name' => 'LBL_LIST_ACCOUNT_NAME',
    'db_email2' => 'LBL_LIST_EMAIL_ADDRESS',

    //END DON'T CONVERT
    'ERR_DELETE_RECORD' => 'リードを削除するにはレコード番号を指定する必要があります。',
    'LBL_ACCOUNT_DESCRIPTION'=> '取引先情報',
    'LBL_ACCOUNT_ID'=>'取引先ID',
    'LBL_ACCOUNT_NAME' => '取引先:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE'=>'活動予定',
    'LBL_ADD_BUSINESSCARD' => '名刺から追加',
    'LBL_ADDRESS_INFORMATION' => '住所情報',
    'LBL_ALT_ADDRESS_CITY' => '別の市区町村:',
    'LBL_ALT_ADDRESS_COUNTRY' => '別の国:',
    'LBL_ALT_ADDRESS_POSTALCODE' => '別の郵便番号:',
    'LBL_ALT_ADDRESS_STATE' => '別の都道府県:',
    'LBL_ALT_ADDRESS_STREET_2' => '別の住所 2:',
    'LBL_ALT_ADDRESS_STREET_3' => '別の住所 3:',
    'LBL_ALT_ADDRESS_STREET' => '別の番地その他:',
    'LBL_ALTERNATE_ADDRESS' => '別の住所:',
    'LBL_ALT_ADDRESS' => '別の住所:',
    'LBL_ANY_ADDRESS' => '住所:',
    'LBL_ANY_EMAIL' => '電子メール:',
    'LBL_ANY_PHONE' => '電話:',
    'LBL_ASSIGNED_TO_NAME' => '担当ユーザ',
    'LBL_ASSIGNED_TO_ID' => '担当ユーザ:',
    'LBL_BACKTOLEADS' => 'リードへ戻る',
    'LBL_BUSINESSCARD' => 'リードのコンバート',
    'LBL_CITY' => '市区町村:',
    'LBL_CONTACT_ID' => '取引先担当者ID',
    'LBL_CONTACT_INFORMATION' => 'リード情報',
    'LBL_CONTACT_NAME' => 'リード名:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'リード-商談:',
    'LBL_CONTACT_ROLE' => '役割:',
    'LBL_CONTACT' => 'リード:',
    'LBL_CONVERTED_ACCOUNT' => 'コンバート済み取引先:',
    'LBL_CONVERTED_CONTACT' => 'コンバート済み取引先担当者:',
    'LBL_CONVERTED_OPP'=>'コンバート済み商談:',
    'LBL_CONVERTED'=> 'コンバート済',
    'LBL_CONVERTLEAD_BUTTON_KEY' => 'V',
    'LBL_CONVERTLEAD_TITLE' => 'リードをコンバート',
    'LBL_CONVERTLEAD' => 'リードのコンバート',
    'LBL_CONVERTLEAD_WARNING' => '警告: コンバートしようとしているリードのステータスが「コンバート済」です。取引先担当者または取引先がすでに作成されている可能性があります。もしコンバートを続行したい場合は保存をクリックしてください。コンバートしないで戻りたい場合にはキャンセルをクリックしてください。',
    'LBL_CONVERTLEAD_WARNING_INTO_RECORD' => ' Possible Contact: ',
    'LBL_COUNTRY' => '国:',
    'LBL_CREATED_NEW' => '新規に作成されました',
	'LBL_CREATED_ACCOUNT' => '新しい取引先が作成されました',
    'LBL_CREATED_CALL' => '新しい電話が作成されました',
    'LBL_CREATED_CONTACT' => '新しい取引先担当者が作成されました',
    'LBL_CREATED_MEETING' => '新しい会議が作成されました',
    'LBL_CREATED_OPPORTUNITY' => '新しい商談が作成されました',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'リード',
    'LBL_DEPARTMENT' => '部署:',
    'LBL_DESCRIPTION_INFORMATION' => '詳細情報',
    'LBL_DESCRIPTION' => '詳細:',
    'LBL_DO_NOT_CALL' => '電話不可:',
    'LBL_DUPLICATE' => '類似のリード',
    'LBL_EMAIL_ADDRESS' => '電子メール:',
    'LBL_EMAIL_OPT_OUT' => 'メール送信除外:',
    'LBL_EXISTING_ACCOUNT' => '既存の取引先を使用',
    'LBL_EXISTING_CONTACT' => '既存の取引先担当者を使用',
    'LBL_EXISTING_OPPORTUNITY' => '既存の商談を使用',
    'LBL_FAX_PHONE' => 'ファックス:',
    'LBL_FIRST_NAME' => '名:',
    'LBL_FULL_NAME' => 'フルネーム:',
    'LBL_HISTORY_SUBPANEL_TITLE' => '活動履歴',
    'LBL_HOME_PHONE' => '自宅電話:',
    'LBL_IMPORT_VCARD' => 'vCardインポート',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => 'vCardをインポートすることによって新規リードを作成します。',
    'LBL_INVALID_EMAIL'=>'無効な電子メール:',
    'LBL_INVITEE' => '直属の部下',
    'LBL_LAST_NAME' => '姓:',
    'LBL_LEAD_SOURCE_DESCRIPTION' => 'リードソース詳細:',
    'LBL_LEAD_SOURCE' => 'リードソース:',
    'LBL_LIST_ACCEPT_STATUS' => '受け入れステータス',
    'LBL_LIST_ACCOUNT_NAME' => '取引先',
    'LBL_LIST_CONTACT_NAME' => '名前',
    'LBL_LIST_CONTACT_ROLE' => '役割',
    'LBL_LIST_DATE_ENTERED' => '入力日',
    'LBL_LIST_EMAIL_ADDRESS' => '電子メール',
    'LBL_LIST_FIRST_NAME' => '名',
    'LBL_VIEW_FORM_TITLE' => 'リードビュー',    
    'LBL_LIST_FORM_TITLE' => 'リード一覧',
    'LBL_LIST_LAST_NAME' => '姓',
    'LBL_LIST_LEAD_SOURCE_DESCRIPTION' => 'リードソース詳細',
    'LBL_LIST_LEAD_SOURCE' => 'リードソース',
    'LBL_LIST_MY_LEADS' => '私のリード',
    'LBL_LIST_NAME' => '名前',
    'LBL_LIST_PHONE' => '電話',
    'LBL_LIST_REFERED_BY' => '紹介元',
    'LBL_LIST_STATUS' => 'ステータス',
    'LBL_LIST_TITLE' => '職位',
    'LBL_MOBILE_PHONE' => '携帯電話:',
    'LBL_MODULE_NAME' => 'リード',
    'LBL_MODULE_TITLE' => 'リード: ホーム',
    'LBL_NAME' => '名前:',
    'LBL_NEW_FORM_TITLE' => 'リード作成',
    'LBL_NEW_PORTAL_PASSWORD' => '新ポータルパスワード作成:',
    'LBL_OFFICE_PHONE' => '会社電話:',
    'LBL_OPP_NAME' => '商談名:',
    'LBL_OPPORTUNITY_AMOUNT' => '商談規模:',
    'LBL_OPPORTUNITY_ID'=>'商談ID',
    'LBL_OPPORTUNITY_NAME' => '商談名:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'その他電子メール:',
    'LBL_OTHER_PHONE' => 'その他電話:',
    'LBL_PHONE' => '電話:',
    'LBL_PORTAL_ACTIVE' => 'ポータルアクティブ:',
    'LBL_PORTAL_APP'=> 'ポータルアプリケーション',
    'LBL_PORTAL_INFORMATION' => 'ポータル情報',
    'LBL_PORTAL_NAME' => 'ポータルユーザ名:',
    'LBL_PORTAL_PASSWORD_ISSET' => 'ポータルパスワード設定:',
    'LBL_POSTAL_CODE' => '郵便番号:',
    'LBL_STREET' => '住所',
    'LBL_PRIMARY_ADDRESS_CITY' => '市区町村:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => '国:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => '郵便番号:',
    'LBL_PRIMARY_ADDRESS_STATE' => '都道府県:',
    'LBL_PRIMARY_ADDRESS_STREET_2'=>'住所 2:',
    'LBL_PRIMARY_ADDRESS_STREET_3'=>'住所 3:',   
    'LBL_PRIMARY_ADDRESS_STREET' => '番地その他:',
    'LBL_PRIMARY_ADDRESS' => '住所:',
    'LBL_REFERED_BY' => '紹介元:',
    'LBL_REPORTS_TO_ID'=>'上司ID',
    'LBL_REPORTS_TO' => '上司:',
    'LBL_SALUTATION' => '敬称',
    'LBL_MODIFIED'=>'更新者',
	'LBL_MODIFIED_ID'=>'更新者ID',
	'LBL_CREATED'=>'作成者',
	'LBL_CREATED_ID'=>'作成者ID',    
    'LBL_SEARCH_FORM_TITLE' => 'リード検索',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'チェック済みリードの選択',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'チェック済みリードの選択',
    'LBL_STATE' => '都道府県:',
    'LBL_STATUS_DESCRIPTION' => 'ステータス詳細:',
    'LBL_STATUS' => 'ステータス:',
    'LBL_TITLE' => '職位:',
    'LNK_IMPORT_VCARD' => 'vCardから作成',
    'LNK_LEAD_LIST' => 'リード',
    'LNK_NEW_ACCOUNT' => '取引先作成',
    'LNK_NEW_APPOINTMENT' => 'アポイント作成',
    'LNK_NEW_CONTACT' => '取引先担当者作成',
    'LNK_NEW_LEAD' => 'リード作成',
    'LNK_NEW_NOTE' => 'メモ/添付作成',
    'LNK_NEW_TASK' => 'タスクを作成',
    'LNK_NEW_CASE' => '問合せを作成',
    'LNK_NEW_CALL' => '電話履歴を作成',
    'LNK_NEW_MEETING' => '会議の予定',
    'LNK_NEW_OPPORTUNITY' => '商談作成',
    'LNK_SELECT_ACCOUNT' => ' <b>または</b> 取引先を選択',
	'LNK_SELECT_ACCOUNTS' => ' <b>または</b> 取引先を選択',
    'MSG_DUPLICATE' => '類似のリードが見つかりました。このコンバージョンから作成されるレコードに関連するリードを確認してください。このままでよければ次に進んでください。',
    'NTC_COPY_ALTERNATE_ADDRESS' => '別の住所を主な住所にコピー',
    'NTC_COPY_PRIMARY_ADDRESS' => '主な住所を別の住所にコピー',
    'NTC_DELETE_CONFIRMATION' => '本当にこのレコードを削除して良いですか？',
    'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => '\n商談を作成するためには取引先が必要です。\n新しい取引先を作成するか、既存の取引先を選択してください。',
    'NTC_REMOVE_CONFIRMATION' => '本当にこのリードをこの問合せから削除して良いですか？',
    'NTC_REMOVE_DIRECT_REPORT_CONFIRMATION' => '本当にダイレクトレポートしてのこのレポートを削除して良いですか？',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE'=>'キャンペーン',
    'LBL_TARGET_OF_CAMPAIGNS'=>'成功したキャンペーン:',
    'LBL_TARGET_BUTTON_LABEL'=>'開拓顧客',
    'LBL_TARGET_BUTTON_TITLE'=>'開拓顧客',
    'LBL_TARGET_BUTTON_KEY'=>'T',
    'LBL_CAMPAIGN_ID'=>'キャンペーンID',
    'LBL_CAMPAIGN' => 'キャンペーン:',
  	'LBL_LIST_ASSIGNED_TO_NAME' => '担当ユーザ',
    'LBL_PROSPECT_LIST' => '送付対象者リスト',
    'LBL_CAMPAIGN_LEAD' => 'キャンペーン',
    'LBL_BIRTHDATE' => '誕生日:',
    'LBL_THANKS_FOR_SUBMITTING_LEAD' =>'お申し込み頂きありがとうございます。',
    'LBL_SERVER_IS_CURRENTLY_UNAVAILABLE' =>'申し訳ありません。サーバに接続できません。後ほど再度お申し込みください。',
    'LBL_ASSISTANT_PHONE' => 'アシスタント電話番号',
    'LBL_ASSISTANT' => 'アシスタント',
    'LBL_REGISTRATION' => '登録',
    'LBL_MESSAGE' => '以下の情報を入力してください。承認後、情報と/かアカウントが作成されます。',
    'LBL_SAVED' => '登録ありがとうございます。近日中にあなたのアカウントは作成され、担当者からコンタクトがあると思います。',
    'LBL_CLICK_TO_RETURN' => 'ポータルに戻る',
    'LBL_CREATED_USER' => '作成者',
    'LBL_MODIFIED_USER' => '更新者',
    'LBL_CAMPAIGNS' => 'キャンペーン',
    'LBL_CAMPAIGNS_SUBPANEL_TITLE' => 'キャンペーン',
    'LBL_CONVERT_MODULE_NAME' => 'モジュール',
    'LBL_CONVERT_REQUIRED' => '必須',
    'LBL_CONVERT_SELECT' => '選択許可',
    'LBL_CONVERT_COPY' => 'データをコピー',
    'LBL_CONVERT_EDIT' => '編集',
    'LBL_CONVERT_DELETE' => '削除',
    'LBL_CONVERT_ADD_MODULE' => 'モジュールの追加',
    'LBL_CREATE' => '作成',
    'LBL_SELECT' => ' <b>または</b> 選択',
	'LBL_WEBSITE' => 'Webサイト',
	'LNK_IMPORT_LEADS' => 'リードのインポート',
	'LBL_NOTICE_OLD_LEAD_CONVERT_OVERRIDE' => '注意: コンバート画面はカスタムフィールとが含まれています。スタジオで初めてコンバート画面をカスタマイズしたカスタムフィールドを追加する必要があります。 カスタムフィールドは自動的に表示はされません。',
//Convert lead tooltips
	'LBL_MODULE_TIP' 	=> '新しいレコードを作成するモジュール',
	'LBL_REQUIRED_TIP' 	=> 'リードを変換する前に必要なモジュールを作成または選択する必要があります。',
	'LBL_COPY_TIP'		=> 'チェックした場合、リードからのフィールドが同じ名前のフィールドにコピーされます。',
	'LBL_SELECTION_TIP' => '取引先担当者に関連するフィールドを持つモジュールをコンバート中に作成するのではなく選択することができます。',
	'LBL_EDIT_TIP'		=> 'モジュールのコンバートレイアウトを変更してください。',
	'LBL_DELETE_TIP'	=> 'コンバートレイアウトからこのモジュールを削除してください。',

    'LBL_ACTIVITIES_MOVE'   => '活動を移動する',
    'LBL_ACTIVITIES_COPY'   => '活動をコピーする',
    'LBL_ACTIVITIES_MOVE_HELP'   => "リードの活動を移動を選択：タスク、電話、会議、メモ/添付、電子メールを選択したモジュールのレコードへ移動します。",
    'LBL_ACTIVITIES_COPY_HELP'   => "リードの活動をコピーを選択： タスク、電話、会議、メモ/添付を作成したレコードに新規作成します。 電子メールはレコードと関連されます。",
    //For export labels
    'LBL_PHONE_HOME' => '自宅電話',
    'LBL_PHONE_MOBILE' => '携帯電話',
    'LBL_PHONE_WORK' => '電話',
    'LBL_PHONE_OTHER' => 'その他電話',
    'LBL_PHONE_FAX' => 'Fax',
    'LBL_CAMPAIGN_ID' => 'キャンペーンID',
    'LBL_EXPORT_ASSIGNED_USER_NAME' => 'アサインユーザ名',
    'LBL_EXPORT_ASSIGNED_USER_ID' => 'アサインユーザ ID',
    'LBL_EXPORT_MODIFIED_USER_ID' => '最終更新者 ID',
    'LBL_EXPORT_CREATED_BY' => '作成者 ID',
    'LBL_EXPORT_PHONE_MOBILE' => '携帯電話',
    'LBL_EXPORT_EMAIL2'=>'その他電子メールアドレス',
	'LBL_EDITLAYOUT' => '編集' /*for 508 compliance fix*/,
	'LBL_ENTERDATE' => '日付入力' /*for 508 compliance fix*/,
	'LBL_LOADING' => '読み込み' /*for 508 compliance fix*/,
	'LBL_EDIT_INLINE' => '編集' /*for 508 compliance fix*/,
);


?>
