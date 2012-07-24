<?php
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
	/*'ADMIN_EXPORT_ONLY'=>'Admin export only',*/
	'ADVANCED'=>'高度な設定',
	'DEFAULT_CURRENCY_ISO4217'=>'ISO 4217通貨コード',
	'DEFAULT_CURRENCY_NAME'=>'通貨名',
	'DEFAULT_CURRENCY_SYMBOL'=>'通貨シンボル',
	'DEFAULT_CURRENCY'=>'通貨',
	'DEFAULT_DATE_FORMAT'=>'デフォルトの日付フォーマット',
	'DEFAULT_DECIMAL_SEP'					=> '小数点シンボル',
	'DEFAULT_LANGUAGE'=>'デフォルト言語',
	'DEFAULT_NUMBER_GROUPING_SEP'			=> '1000位セパレータ',
	'DEFAULT_SYSTEM_SETTINGS'=>'ユーザインターフェース',
	'DEFAULT_THEME'=> 'デフォルトテーマ',
	'DEFAULT_TIME_FORMAT'=>'デフォルトの時間フォーマット',
/*	'DISABLE_EXPORT'=>'Disable export',*/
	'DISPLAY_RESPONSE_TIME'=>'サーバ応答時間の表示',
	/*'EXPORT'=>'Export',
	'EXPORT_CHARSET' => 'Default Export Character Set',
	'EXPORT_DELIMITER' => 'Export Delimiter',*/
	'IMAGES'=>'ロゴ',
	'LBL_ADMIN_WIZARD' => 'Admin Wizard',
	'LBL_ALLOW_USER_TABS' => 'Allow users to hide tabs',
	'LBL_CONFIGURE_SETTINGS_TITLE' => 'システム設定',
	'LBL_ENABLE_MAILMERGE' => 'メールマージ',
	'LBL_LOGVIEW' => 'ログ設定',
	'LBL_MAIL_SMTPAUTH_REQ'				=> 'SMTP認証を使用？',
	'LBL_MAIL_SMTPPASS'					=> 'SMTP パスワード:',
	'LBL_MAIL_SMTPPORT'					=> 'SMTP ポート番号:',
	'LBL_MAIL_SMTPSERVER'				=> 'SMTP サーバ:',
	'LBL_MAIL_SMTPUSER'					=> 'SMTP ユーザ名:',
	'LBL_MAIL_SMTPTYPE'                => 'SMTP サーバタイプ:',
	'LBL_MAIL_SMTP_SETTINGS'           => 'SMTP サーバ仕様',
	'LBL_CHOOSE_EMAIL_PROVIDER'        => '電子メールプロバイダを選択してください:',
	'LBL_YAHOOMAIL_SMTPPASS'					=> 'Yahoo! Mail パスワード:',
	'LBL_YAHOOMAIL_SMTPUSER'					=> 'Yahoo! Mail ID:',
	'LBL_GMAIL_SMTPPASS'					=> 'Gmail パスワード:',
	'LBL_GMAIL_SMTPUSER'					=> 'Gmail 電子メールアドレス:',
	'LBL_EXCHANGE_SMTPPASS'					=> 'Exchange パスワード:',
	'LBL_EXCHANGE_SMTPUSER'					=> 'Exchange ユーザ名:',
	'LBL_EXCHANGE_SMTPPORT'					=> 'Exchange ポート番号:',
	'LBL_EXCHANGE_SMTPSERVER'				=> 'Exchange サーバ:',
    'LBL_ALLOW_DEFAULT_SELECTION'           => 'ユーザがこのアカウントを利用してメールを送信することを許可する:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP'          => 'このオプションが選択されている場合、すべてのユーザがシステムの通知および警告を送信するために使用される同一の送信メールのアカウントを使用して電子メールを送信することができます。オプションが選択されていない場合、ユーザは自分のアカウント情報を設定した後、送信メールサーバーを使用することができます。',
	'LBL_MAILMERGE_DESC' => 'この機能を利用するためには、個々のユーザがSugar Plug-in for Microsoft&reg; Word&reg;をインストールし、かつ、このチェックボックスを有効にする必要があります。',
	'LBL_MAILMERGE' => 'メールマージ',
	'LBL_MIN_AUTO_REFRESH_INTERVAL' => 'ダッシュレット自動更新の最短間隔',
	'LBL_MIN_AUTO_REFRESH_INTERVAL_HELP' => 'ダッシュレットを自動更新する最短の間隔を設定します。\'自動更新しない\'を選択すると自動更新を無効にすることができます。',
	'LBL_MODULE_FAVICON'               => 'Faviconにモジュールのアイコンを利用',
    'LBL_MODULE_FAVICON_HELP'   => 'Faviconにモジュールのアイコンを利用を選択した場合、テーマのFaviconの代わりにモジュールのアイコンがブラウザのタブに表示されます。',
	'LBL_MODULE_NAME'=>'システム設定',
    'LBL_MODULE_ID'  => '設定',
	'LBL_MODULE_TITLE'=>'ユーザインターフェイス',
	'LBL_NOTIFY_FROMADDRESS' => '"From" アドレス:',
	'LBL_NOTIFY_SUBJECT' => '電子メール 件名:',
	'LBL_PORTAL_ON_DESC' => 'ユーザが取引先担当者レコード内のポータルユーザ情報を管理することができます。ポータルユーザは、ポータルアプリケーションを介して問合せ、バグ、サポート技術情報の記事や他のデータにアクセスすることができます。',
	'LBL_PORTAL_ON' => 'ポータルユーザ管理を利用',
	'LBL_PORTAL_TITLE' => 'セルフサービスポータル',
	'LBL_PROXY_AUTH'=>'認証?',
	'LBL_PROXY_HOST'=>'プロキシ ホスト',
	'LBL_PROXY_ON_DESC'=>'プロキシサーバのアドレスおよび認証情報を設定してください。',
	'LBL_PROXY_ON'=>'プロキシサーバを利用しますか?',
	'LBL_PROXY_PASSWORD'=>'パスワード',
	'LBL_PROXY_PORT'=>'ポート',
	'LBL_PROXY_TITLE'=>'プロキシ設定',
	'LBL_PROXY_USERNAME'=>'ユーザ名',
	'LBL_RESTORE_BUTTON_LABEL'=>'リストア',
	'LBL_SYSTEM_SETTINGS' => 'システム設定',
	'LBL_SKYPEOUT_ON_DESC' => 'SkypeOut&reg;を利用して、電話番号をクリックすると電話がかけられるように設定します。この機能を利用するためには、電話番号が正しく設定されている必要があります。番号は、+〔国番号〕〔電話番号〕です。例えば +1 (555) 555-1234 です。詳細は<a href="http://www.skype.com/help/faq/skypeout.html#calling" target="skype">SkypeOut&reg; faq</a>を参照してください。',
	'LBL_SKYPEOUT_ON' => 'SkypeOut&reg;統合を有効',
	'LBL_SKYPEOUT_TITLE' => 'SkypeOut&reg;',
	'LBL_USE_REAL_NAMES'	=> 'フルネームの表示（ログイン以外）',
	'LBL_USE_REAL_NAMES_DESC'			=> '担当ユーザのフィールドなどでユーザIDの代わりにフルネーム(姓 名)を表示します。',
    'LBL_DISALBE_CONVERT_LEAD' => 'Disable convert lead action for converted leads',
    'LBL_DISALBE_CONVERT_LEAD_DESC' => 'If a lead has already been converted, enabling this option will remove the convert lead action.',
    'LBL_ENABLE_ACTION_MENU' => 'Display actions within menus',
    'LBL_ENABLE_ACTION_MENU_DESC' => 'Select to display DetailView and subpanel actions within a dropdown menu. If un-selected, the actions will display as separate buttons.',
	'LIST_ENTRIES_PER_LISTVIEW'=>'一覧ページに表示するレコードの数',
	'LIST_ENTRIES_PER_SUBPANEL'=>'サブパネルに表示するレコードの数',
	'LOG_MEMORY_USAGE'=>'メモリ使用状況のログ',
	'LOG_SLOW_QUERIES'=>'遅延クエリのログ',
    'LOCK_HOMEPAGE_HELP'=>'この設定は以下を回避します。<BR> 1) ホームモジュールで新規ホームページとダッシュレットを追加 <BR>2) ドラグ＆ドロップによるホームページ上のダッシュレットの配置のカスタマイズ',
    'CURRENT_LOGO'=>'ロゴ:',
    'CURRENT_LOGO_HELP'=>'このロゴはSugarアプリケーションのフッターの左端に表示されます。',
    'NEW_LOGO'=>'ロゴをアップロード:',
	'NEW_LOGO_HELP'=>'画像ファイルのフォーマットは.pngか.jpgのどちらかです。最大の高さは17px、最大の幅は450pxです。いずれかの寸法を越えた画像をアップロードすると、これらの最大の寸法に縮小します。',
    'NEW_QUOTE_LOGO'=>'見積用の新たなロゴをアップロード',
    'NEW_QUOTE_LOGO_HELP'=>'画像フォーマットはJPEGである必要があります。<br>推奨サイズは 867x74pxです。',
    'QUOTES_CURRENT_LOGO'=>'見積で使用されるロゴ (85%)',
	'SLOW_QUERY_TIME_MSEC'=>'遅延クエリの閾値（ミリ秒）',
	'STACK_TRACE_ERRORS'=>'エラースタックトレースの表示',
	'UPLOAD_MAX_SIZE'=>'最大アップロードサイズ(バイト)',
	'VERIFY_CLIENT_IP'=>'ユーザのIPアドレスの正当性を確認',
    'LOCK_HOMEPAGE' => 'ユーザがホームをカスタマイズすることを禁止',
    'LOCK_SUBPANELS' => 'ユーザがサブパネルをカスタマイズすることを禁止',
    'MAX_DASHLETS' => 'ホームに表示するダッシュレットの最大数',
	'SYSTEM_NAME'=>'システム名:',
	'SYSTEM_NAME_WIZARD'=>'名前:',
	'SYSTEM_NAME_HELP'=>'この名前はブラウザのタイトルバーに表示されます。',
    'LBL_LDAP_TITLE'=>'LDAP認証',
    'LBL_LDAP_ENABLE'=>'LDAPを利用',
    'LBL_LDAP_SERVER_HOSTNAME'=> 'サーバ:',
    'LBL_LDAP_SERVER_PORT'=> 'ポート番号:',
    'LBL_LDAP_ADMIN_USER'=> 'ユーザ名:',
    'LBL_LDAP_ADMIN_USER_DESC'=>'LDAPの読み取りアクセスが可能なユーザを入力してください。',
    'LBL_LDAP_ADMIN_PASSWORD'=> 'パスワード:',
	'LBL_LDAP_AUTHENTICATION'=> '認証バインド:',
	'LBL_LDAP_AUTHENTICATION_DESC'=>'LDAPサーバにバインドしてユーザの資格情報を取得します。',
    'LBL_LDAP_AUTO_CREATE_USERS'=>'ユーザ自動作成:',
    'LBL_LDAP_USER_DN'=>'User DN:',
	'LBL_LDAP_GROUP_DN'=>'Group DN:',
	'LBL_LDAP_GROUP_DN_DESC'=>'例: <em>ou=groups,dc=example,dc=com</em>',
	'LBL_LDAP_USER_FILTER'=>'ユーザフィルタ:',
	'LBL_LDAP_GROUP_MEMBERSHIP'=>'グループ指定:',
	'LBL_LDAP_GROUP_MEMBERSHIP_DESC'=>'特定グループを指定する。',
	'LBL_LDAP_GROUP_USER_ATTR'=>'ユーザ属性:',
	'LBL_LDAP_GROUP_USER_ATTR_DESC'=>'その人がグループのメンバーかどうか識別するために利用するID 例: <em>uid</em>',
	'LBL_LDAP_GROUP_ATTR_DESC'=>'ユーザ属性に対してフィルタリングするグループ属性 例: <em>memberUid</em>',
	'LBL_LDAP_GROUP_ATTR'=>'グループ属性:',
	'LBL_LDAP_USER_FILTER_DESC'=>'ユーザ認証のためのパラメータフィルタを追加します。 例:\nis_sugar_user=1 or (is_sugar_user=1)(is_sales=1)',
    'LBL_LDAP_LOGIN_ATTRIBUTE'=>'ログイン属性:',
    'LBL_LDAP_BIND_ATTRIBUTE'=>'バインド属性:',
    'LBL_LDAP_BIND_ATTRIBUTE_DESC'=>'LDAPユーザをバインドするため<br>例:&nbsp;<b>AD:</b>&nbsp;userPrincipalName,&nbsp;<b>openLDAP:</b>&nbsp;userPrincipalName,&nbsp;<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;uid ',
    'LBL_LDAP_LOGIN_ATTRIBUTE_DESC'=>'LDAPユーザを検索するため<br>例:<b>AD:</b>&nbsp;userPrincipalName,&nbsp;<b>openLDAP:</b>&nbsp;dn,&nbsp;<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;dn ',
    'LBL_LDAP_SERVER_HOSTNAME_DESC'=>'例: ldap.example.com or ldaps://ldap.example.com for SSL',
    'LBL_LDAP_SERVER_PORT_DESC'=>'例: 389 or 636 for SSL',
	'LBL_LDAP_GROUP_NAME'=>'グループ名:',
	'LBL_LDAP_GROUP_NAME_DESC'=>'例: cn=sugarcrm',
    'LBL_LDAP_USER_DN_DESC'=>'例: ou=people,dc=example,dc=com',
    'LBL_LDAP_AUTO_CREATE_USERS_DESC'=> 'もし認証されたユーザがSugarCRMに存在しない場合には新規ユーザを自動作成します。',
    'LBL_LDAP_ENC_KEY'	=> '暗号化キー:',
    'DEVELOPER_MODE'=>'開発者モード',

	'SHOW_DOWNLOADS_TAB' =>'ダウンロードタブを表示',
	'SHOW_DOWNLOADS_TAB_HELP' =>'選択すると、ダウンロードタブがユーザ設定に表示され、Sugarのプラグインや他の利用可能なファイルへのアクセスをユーザに提供します',
    'LBL_LDAP_ENC_KEY_DESC'	=> 'LDAP使用時のSOAP認証用',
    'LDAP_ENC_KEY_NO_FUNC_DESC' => 'php.iniファイルのphp_mcryptエクステンションを有効にする必要があります。',
    'LBL_ALL' => 'すべての',
    'LBL_MARK_POINT' => 'ポイントをマーク',
    'LBL_NEXT_' => '次へ>>',
    'LBL_REFRESH_FROM_MARK' => 'マークから再表示',
    'LBL_SEARCH' => '検索:',
    'LBL_REG_EXP' => '正規表現:',
    'LBL_IGNORE_SELF' => 'それ自身を無視する:',
    'LBL_MARKING_WHERE_START_LOGGING'=>'どこからログをスタートするかマークする',
    'LBL_DISPLAYING_LOG'=>'ログの表示',
    'LBL_YOUR_PROCESS_ID'=>'あなたのプロセスID',
    'LBL_YOUR_IP_ADDRESS'=>'あなたのIPアドレスは',
    'LBL_IT_WILL_BE_IGNORED'=>'破棄されました ',
    'LBL_LOG_NOT_CHANGED'=>'ログに変更はありません',
    'LBL_ALERT_JPG_IMAGE' => '画像フォーマットはJPEGである必要があります。拡張子が.jpgのファイルを新たにアップロードしてください。',
    'LBL_ALERT_TYPE_IMAGE' => '画像ファイルのフォーマットはJPEGかPNGである必要があります。拡張子が.jpgか.pngのファイルを新しくアップロードしてください。',
    'LBL_ALERT_SIZE_RATIO' => '画像の縦横比は1:1と10:1の間になければなりません。画像のサイズは自動的に変更されます。',
    'LBL_ALERT_SIZE_RATIO_QUOTES' => '画像の縦横比は3:1と20:1の間になければなりません。この比率で新しいファイルをアップロードしてください。',
    'ERR_ALERT_FILE_UPLOAD' => 'イメージをアップロード中にエラーが発生しました',
    'LBL_LOGGER'=>'ログ設定',
	'LBL_LOGGER_FILENAME'=>'ログファイル名',
	'LBL_LOGGER_FILE_EXTENSION'=>'拡張子',
	'LBL_LOGGER_MAX_LOG_SIZE'=>'ログファイルの最大サイズ',
	'LBL_LOGGER_DEFAULT_DATE_FORMAT'=>'デフォルトの日付出力形式',
	'LBL_LOGGER_LOG_LEVEL'=>'ログレベル',
        'LBL_LEAD_CONV_OPTION' => 'リードコンバート　オプション',
        'LEAD_CONV_OPT_HELP' => "<b>コピー</b> - リードの活動をすべてコピーして新しいレコードに関連付けます。 コピーは選択されたレコードごとに作成されます。<br><br><b>移動</b> - すべてのリードの活動を新しいレコードに移動します。<br><br><b>何もしない</b> - リードの活動をそのまま残します。 新しく作成されたレコードには関連付ません。",
        'LBL_CONFIG_AJAX' => 'AJAX UI 設定',
        'LBL_CONFIG_AJAX_DESC' => 'AJAX UIの有効/無効を設定',
	'LBL_LOGGER_MAX_LOGS'=>'ログファイルの最大数 (ローテーション前)',
	'LBL_LOGGER_FILENAME_SUFFIX' =>'ファイル名に追加するサフィックス',
	'LBL_VCAL_PERIOD' => 'vCal更新の周期:',
    'LBL_IMPORT_MAX_RECORDS' => 'インポート - 最大行数:',
    'LBL_IMPORT_MAX_RECORDS_HELP' => 'インポートファイルで許可する行数を指定します。<br>インポートファイルがこの行数を超える場合、ユーザに警告が表示されます。<br>数値が入力されていない場合、行数は無制限となります。',
	'vCAL_HELP' => 'この設定は、現在に日付から何か月先までの電話および会議の空き状況を公開かを決定する際に利用されます。</BR>空き状況を公開しない場合は、"0"を入力してください。最低期間は1ヶ月です。最大期間は12ヶ月です。',
    'LBL_PDFMODULE_NAME' => 'PDF Settings',
    'SUGARPDF_BASIC_SETTINGS' => 'Document Properties',
    'SUGARPDF_ADVANCED_SETTINGS' => 'Advanced Settings',
    'SUGARPDF_LOGO_SETTINGS' => 'Images',

    'PDF_CREATOR' => 'PDF Creator',
    'PDF_CREATOR_INFO' => 'Defines the creator of the document. <br>This is typically the name of the application that generates the PDF.',

    'PDF_AUTHOR' => 'Author',
    'PDF_AUTHOR_INFO' => 'The Author appears in the document properties.',

    'PDF_HEADER_LOGO' => 'For Quotes PDF Documents',
    'PDF_HEADER_LOGO_INFO' => 'This image appears in the default Header in Quotes PDF Documents.',

    'PDF_NEW_HEADER_LOGO' => 'Select New Image for Quotes',
    'PDF_NEW_HEADER_LOGO_INFO' => 'The file format can be either .jpg or .png. (Only .jpg for EZPDF)<BR>The recommended size is 867x60 px.',

    'PDF_HEADER_LOGO_WIDTH' => 'Quotes Image Width',
    'PDF_HEADER_LOGO_WIDTH_INFO' => 'Change the scale of the uploaded image that appears in Quotes PDF Documents. (TCPDF only)',

    'PDF_SMALL_HEADER_LOGO' => 'For Reports PDF Documents',
    'PDF_SMALL_HEADER_LOGO_INFO' => 'This image appears in the default Header in Reports PDF Documents.<br> This image also appears in the top left-hand corner of the Sugar application.',

    'PDF_NEW_SMALL_HEADER_LOGO' => 'Select New Image for Reports',
    'PDF_NEW_SMALL_HEADER_LOGO_INFO' => 'The file format can be either .jpg or .png. (Only .jpg for EZPDF)<BR>The recommended size is 212x40 px.',

    'PDF_SMALL_HEADER_LOGO_WIDTH' => 'Reports Image Width',
    'PDF_SMALL_HEADER_LOGO_WIDTH_INFO' => 'Change the scale of the uploaded image that appears in Reports PDF Documents. (TCPDF only)',


    'PDF_HEADER_STRING' => 'Header String',
    'PDF_HEADER_STRING_INFO' => 'Header description string',

    'PDF_HEADER_TITLE' => 'Header Title',
    'PDF_HEADER_TITLE_INFO' => 'String to print as title on document header',

    'PDF_FILENAME' => 'Default Filename',
    'PDF_FILENAME_INFO' => 'Default filename for the generated PDF files',

    'PDF_TITLE' => 'Title',
    'PDF_TITLE_INFO' => 'The Title appears in the document properties.',

    'PDF_SUBJECT' => 'Subject',
    'PDF_SUBJECT_INFO' => 'The Subject appears in the document properties.',

    'PDF_KEYWORDS' => 'Keyword(s)',
    'PDF_KEYWORDS_INFO' => 'Associate Keywords with the document, generally in the form "keyword1 keyword2..."',

    'PDF_COMPRESSION' => 'Compression',
    'PDF_COMPRESSION_INFO' => 'Activates or deactivates page compression. <br>When activated, the internal representation of each page is compressed, which leads to a compression ratio of about 2 for the resulting document.',

    'PDF_JPEG_QUALITY' => 'JPEG Quality (1-100)',
    'PDF_JPEG_QUALITY_INFO' => 'Set the default JPEG compression quality (1-100)',

    'PDF_PDF_VERSION' => 'PDF Version',
    'PDF_PDF_VERSION_INFO' => 'Set the PDF version (check PDF reference for valid values).',

    'PDF_PROTECTION' => 'Document Protection',
    'PDF_PROTECTION_INFO' => 'Set document protection<br>- copy: copy text and images to the clipboard<br>- print: print the document<br>- modify: modify it (except for annotations and forms)<br>- annot-forms: add annotations and forms<br>Note: the protection against modification is for people who have the full Acrobat product.',

    'PDF_USER_PASSWORD' => 'User Password',
    'PDF_USER_PASSWORD_INFO' => 'If you don\\\'t set any password, the document will open as usual. <br>If you set a user password, the PDF viewer will ask for it before displaying the document. <br>The master password, if different from the user one, can be used to get full access.',

    'PDF_OWNER_PASSWORD' => 'Owner Password',
    'PDF_OWNER_PASSWORD_INFO' => 'If you don\\\'t set any password, the document will open as usual. <br>If you set a user password, the PDF viewer will ask for it before displaying the document. <br>The master password, if different from the user one, can be used to get full access.',

    'PDF_ACL_ACCESS' => 'Access Control',
    'PDF_ACL_ACCESS_INFO' => 'Default Access Control for the PDF generation.',

    'K_CELL_HEIGHT_RATIO' => 'Cell Height Ratio',
    'K_CELL_HEIGHT_RATIO_INFO' => 'If the height of a cell is smaller than (Font Height x Cell Height Ratio), then (Font Height x Cell Height Ratio) is used as the cell height.<br>(Font Height x Cell Height Ratio) is also used as the height of the cell when no height is define.',

    'K_TITLE_MAGNIFICATION' => 'Title Magnification',
    'K_TITLE_MAGNIFICATION_INFO' => 'Title magnification respect main font size.',

    'K_SMALL_RATIO' => 'Small Font Factor',
    'K_SMALL_RATIO_INFO' => 'Reduction factor for small font.',

    'HEAD_MAGNIFICATION' => 'Head Magnification',
    'HEAD_MAGNIFICATION_INFO' => 'Magnification factor for titles.',

    'PDF_IMAGE_SCALE_RATIO' => 'Image scale ratio',
    'PDF_IMAGE_SCALE_RATIO_INFO' => 'Ratio used to scale the images',

    'PDF_UNIT' => 'Unit',
    'PDF_UNIT_INFO' => 'document unit of measure',
	'PDF_GD_WARNING'=>'You do not have the GD library installed for PHP. Without the GD library installed, only JPEG logos can be displayed in PDF documents.',
    'ERR_EZPDF_DISABLE'=>'Warning : The EZPDF class is disabled from the config table and it set as the PDF class. Please "Save" this form to set TCPDF as the PDF Class and return in a stable state.',
    'LBL_IMG_RESIZED'=>"(resized for display)",


    'LBL_FONTMANAGER_BUTTON' => 'PDF Font Manager',
    'LBL_FONTMANAGER_TITLE' => 'PDF Font Manager',
    'LBL_FONT_BOLD' => 'Bold',
    'LBL_FONT_ITALIC' => 'Italic',
    'LBL_FONT_BOLDITALIC' => 'Bold/Italic',
    'LBL_FONT_REGULAR' => 'Regular',

    'LBL_FONT_TYPE_CID0' => 'CID-0',
    'LBL_FONT_TYPE_CORE' => 'Core',
    'LBL_FONT_TYPE_TRUETYPE' => 'TrueType',
    'LBL_FONT_TYPE_TYPE1' => 'Type1',
    'LBL_FONT_TYPE_TRUETYPEU' => 'TrueTypeUnicode',

    'LBL_FONT_LIST_NAME' => 'Name',
    'LBL_FONT_LIST_FILENAME' => 'Filename',
    'LBL_FONT_LIST_TYPE' => 'Type',
    'LBL_FONT_LIST_STYLE' => 'Style',
    'LBL_FONT_LIST_STYLE_INFO' => 'Style of the font',
    'LBL_FONT_LIST_ENC' => 'Encoding',
    'LBL_FONT_LIST_EMBEDDED' => 'Embedded',
    'LBL_FONT_LIST_EMBEDDED_INFO' => 'Check to embed the font into the PDF file',
    'LBL_FONT_LIST_CIDINFO' => 'CID Information',
    'LBL_FONT_LIST_CIDINFO_INFO' => "Examples :".
"<ul><li>".
"Chinese Traditional :<br>".
"<pre>\$enc=\'UniCNS-UTF16-H\';<br>".
"\$cidinfo=array(\'Registry\'=>\'Adobe\', \'Ordering\'=>\'CNS1\',\'Supplement\'=>0);<br>".
"include(\'include/tcpdf/fonts/uni2cid_ac15.php\');</pre>".
"</li><li>".
"Chinese Simplified :<br>".
"<pre>\$enc=\'UniGB-UTF16-H\';<br>".
"\$cidinfo=array(\'Registry\'=>\'Adobe\', \'Ordering\'=>\'GB1\',\'Supplement\'=>2);<br>".
"include(\'include/tcpdf/fonts/uni2cid_ag15.php\');</pre>".
"</li><li>".
"Korean :<br>".
"<pre>\$enc=\'UniKS-UTF16-H\';<br>".
"\$cidinfo=array(\'Registry\'=>\'Adobe\', \'Ordering\'=>\'Korea1\',\'Supplement\'=>0);<br>".
"include(\'include/tcpdf/fonts/uni2cid_ak12.php\');</pre>".
"</li><li>".
"Japanese :<br>".
"<pre>\$enc=\'UniJIS-UTF16-H\';<br>".
"\$cidinfo=array(\'Registry\'=>\'Adobe\', \'Ordering\'=>\'Japan1\',\'Supplement\'=>5);<br>".
"include(\'include/tcpdf/fonts/uni2cid_aj16.php\');</pre>".
"</li></ul>".
"More help : www.tcpdf.org",
    'LBL_FONT_LIST_FILESIZE' => 'Font Size (KB)',
    'LBL_ADD_FONT' => 'Add a font',
    'LBL_BACK' => 'Back',
    'LBL_REMOVE' => 'rem',
    'LBL_JS_CONFIRM_DELETE_FONT' => 'Are you sure that you want to delete this font?',

    'LBL_ADDFONT_TITLE' => 'Add a PDF Font',
    'LBL_PDF_PATCH' => 'Patch',
    'LBL_PDF_PATCH_INFO' => 'Custom modification of the encoding. Write a PHP array.<br>Example :<br>ISO-8859-1 does not contain the euro symbol. To add it at position 164, write "array(164=>\\\'Euro\\\')".',
    'LBL_PDF_ENCODING_TABLE' => 'Encoding Table',
    'LBL_PDF_ENCODING_TABLE_INFO' => 'Name of the encoding table.<br>This option is ignored for TrueType Unicode, OpenType Unicode and symbolic fonts.<br>The encoding defines the association between a code (from 0 to 255) and a character contained in the font.<br>The first 128 are fixed and correspond to ASCII.',
    'LBL_PDF_FONT_FILE' => 'Font File',
    'LBL_PDF_FONT_FILE_INFO' => '.ttf or .otf or .pfb file',
    'LBL_PDF_METRIC_FILE' => 'Metric File',
    'LBL_PDF_METRIC_FILE_INFO' => '.afm or .ufm file',
    'LBL_ADD_FONT_BUTTON' => 'Add',
    'JS_ALERT_PDF_WRONG_EXTENSION' => 'This file do not have a good file extension.',
    'LBL_PDF_INSTRUCTIONS' => 'Instructions',
    'PDF_INSTRUCTIONS_ADD_FONT' => <<<BSOFR
Fonts supported by SugarPDF :
<ul>
<li>TrueTypeUnicode (UTF-8 Unicode)</li>
<li>OpenTypeUnicode</li>
<li>TrueType</li>
<li>OpenType</li>
<li>Type1</li>
<li>CID-0</li>
</ul>
<br>
If you choose to not embed your font in the PDF, the generated PDF file will be lighter but a substitution will be use if the font is not available in the system of your reader.
<br><br>
Adding a PDF font to SugarCRM requires to follow steps 1 and 2 of the TCPDF Fonts documentation available in the "DOCS" section of the <a href="http://www.tcpdf.org" target="_blank">TCPDF website</a>.
<br><br>The pfm2afm and ttf2ufm utils are available in fonts/utils in the TCPDF package that you can download on the "DOWNLOAD" section of the <a href="http://www.tcpdf.org" target="_blank">TCPDF website</a>.
<br><br>Load the metric file generated in step 2 and your font file below.
BSOFR
,
    'ERR_MISSING_CIDINFO' => 'The field CID Information cannot be empty.',
    'LBL_ADDFONTRESULT_TITLE' => 'Result of the add font process',
    'LBL_STATUS_FONT_SUCCESS' => 'SUCCESS : The font has been added to SugarCRM.',
    'LBL_STATUS_FONT_ERROR' => 'ERROR : The font has not been added. Look at the log below.',
    'LBL_FONT_MOVE_DEFFILE' => 'Font definition file move to : ',
    'LBL_FONT_MOVE_FILE' => 'Font file move to : ',

// Font manager
    'ERR_LOADFONTFILE' => 'ERROR: LoadFontFile error!',
    'ERR_FONT_EMPTYFILE' => 'ERROR: Empty filename!',
    'ERR_FONT_UNKNOW_TYPE' => 'ERROR: Unknow font type:',
    'ERR_DELETE_CORE_FILE' => 'ERROR: It is not possible to delete a core font.',
    'ERR_NO_FONT_PATH' => 'ERROR: No font path available!',
    'ERR_NO_CUSTOM_FONT_PATH' => 'ERROR: No custom font path available!',
    'ERR_FONT_NOT_WRITABLE' => 'is not writable.',
    'ERR_FONT_FILE_DO_NOT_EXIST' => 'doesn\'t exist or is not a directory.',
    'ERR_FONT_MAKEFONT' => 'ERROR: MakeFont error',
    'ERR_FONT_ALREADY_EXIST' => 'ERROR : This font already exist. Rollback...',
    'ERR_PDF_NO_UPLOAD' => 'Error during the upload of the font or metric file.',

// Wizard
    'LBL_WIZARD_TITLE' => '管理者ウィザード',
    'LBL_WIZARD_WELCOME_TAB' => 'ようこそ',
    'LBL_WIZARD_WELCOME_TITLE' => 'Sugarへようこそ!',
    'LBL_WIZARD_WELCOME' => '<b>次へ</b>をクリックするとSugarの基本設定を行うことができます。 必要ない場合には<b>スキップ</b>をクリックしてください。',
    'LBL_WIZARD_NEXT_BUTTON' => '次へ >',
    'LBL_WIZARD_BACK_BUTTON' => '< 戻る',
    'LBL_WIZARD_SKIP_BUTTON' => 'スキップ',
    'LBL_WIZARD_FINISH_BUTTON' => '完了',
    'LBL_WIZARD_CONTINUE_BUTTON' => '続行',
    'LBL_WIZARD_FINISH_TAB' => '完了',
    'LBL_WIZARD_FINISH_TITLE' => '基本設定が完了しました。',
    'LBL_WIZARD_FINISH' => '<b>続行</b>をクリックするとユーザ設定を行うことができます。<br/><br />
その他のシステム設定を行いたい場合には<a href="index.php?module=Administration&action=index" target="_blank">管理</a>をクリックしてください。',
    'LBL_WIZARD_SYSTEM_TITLE' => '基本設定',
    'LBL_WIZARD_SYSTEM_DESC' => '組織名やロゴを変更します。',
    'LBL_WIZARD_LOCALE_DESC' => 'Sugarに保存したデータを表示する際に表示される時間などに利用するシステム標準のロケールを選択します。ユーザごとに設定の必要がある場合には、ユーザ設定から行うことが可能です。',
    'LBL_WIZARD_SMTP_DESC' => 'アサイン情報を送信やユーザのパスワードを通知するために送信用の電子メールが必要です。ユーザはここで指定したアカウントから送信されたメールを受信することができます。',
    'LBL_MOBILE_MOD_REPORTS_RESTRICTION' => '* レポートモジュールはSugar純正のモバイルクライアントでのみ利用可能です。',
);


?>
