<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2012 SugarCRM Inc.
 * 
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
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
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 * 
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 * 
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by SugarCRM".
 ********************************************************************************/

/*********************************************************************************

 * Description:
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc. All Rights
 * Reserved. Contributor(s): ______________________________________..
 * *******************************************************************************/

$mod_strings = array(
    'LBL_BASIC_SEARCH' => '検索',
    'LBL_ADVANCED_SEARCH' => '詳細検索',
    'LBL_BASIC_TYPE' => '基本型',
    'LBL_ADVANCED_TYPE' => '詳細な型',
    'LBL_SYSOPTS_1' => '以下のシステム構成のオプションから選択してください。',
    'LBL_SYSOPTS_2' => 'Sugarインスタンスで使用するデータベースの種類は何ですか?',
    'LBL_SYSOPTS_CONFIG' => 'システム構成',
    'LBL_SYSOPTS_DB_TYPE' => '',
    'LBL_SYSOPTS_DB' => 'データベースの種類の指定',
    'LBL_SYSOPTS_DB_TITLE' => 'データベースの種類',
    'LBL_SYSOPTS_ERRS_TITLE' => '進める前に以下のエラーを修正してください:',
    'LBL_MAKE_DIRECTORY_WRITABLE' => '以下のディレクトリを書き込み可能にしてください:',


    'ERR_DB_VERSION_FAILURE' => 'データベースのバージョンを確認できません。',


    'DEFAULT_CHARSET' => 'UTF-8',
    'ERR_ADMIN_USER_NAME_BLANK' => 'Sugarの管理者ユーザーの名前を入力してください。 ',
    'ERR_ADMIN_PASS_BLANK' => 'SugarCRM管理者のパスワードを入力してください。 ',

    'ERR_CHECKSYS' => '互換性の検査の際にエラーを検出しました。SugarCRMを正常に動作させるためには、以下に一覧している問題に適切な対応を行ってから再検査ボタンを押すか、インストールし直してください。',
    'ERR_CHECKSYS_CALL_TIME' => '(php.iniでオフにすべき)allow_call_time_pass_reference設定がオンになっています。',
    'ERR_CHECKSYS_CURL' => '見つかりません: Sugarスケジューラの機能は制限付きで動作します。',
    'ERR_CHECKSYS_FASTCGI_LOGGING' => 'IIS/FastCGI sapiを使用して最適な動作をさせるには、fastcgi.loggingを0にphp.iniファイルで設定してください。',
    'ERR_CHECKSYS_IMAP' => '見つかりません: インバウンド電子メールとキャンペーン電子メールを利用するためにはIMAPライブラリが必要です。いずれも動作しないでしょう。',
    'ERR_CHECKSYS_MSSQL_MQGPC' => 'MS SQL Serverを使用する場合はmagic_quotes_gpcの設定をOnにしてはなりません。',
    'ERR_CHECKSYS_MEM_LIMIT_0' => '警告: ',
    'ERR_CHECKSYS_MEM_LIMIT_1' => ' (php.iniファイルで',
    'ERR_CHECKSYS_MEM_LIMIT_2' => 'M以上にしてください)',
    'ERR_CHECKSYS_MYSQL_VERSION' => '最小のバージョン4.1.2 - 見つかりました: ',
    'ERR_CHECKSYS_NO_SESSIONS' => 'セッション変数に読み書きできませんでした。インストールを進めることができません。',
    'ERR_CHECKSYS_NOT_VALID_DIR' => '有効なディレクトリではありません',
    'ERR_CHECKSYS_NOT_WRITABLE' => '警告: 書き込み不可',
    'ERR_CHECKSYS_PHP_INVALID_VER' => 'サポートしていないのバージョンのPHPです。SugarCRMと互換性のあるバージョンのインストールが必要です。サポートしているPHPのバージョンはリリースノートから、サポートするプラットフォームを調べてください。現在のバージョン: ',
    'ERR_CHECKSYS_IIS_INVALID_VER' => 'サポートしていないバージョンのIISです。SugarCRMと互換性のあるバージョンのインストールが必要です。サポートしているIISのバージョンはリリースノートから、サポートしているプラットフォームを調べてください。現在のバージョン: ',
    'ERR_CHECKSYS_FASTCGI' => 'PHPにFastCGIのハンドラーを使用していないと検出しました。SugarCRMと互換性のあるバージョンのインストールと構成が必要です。サポートしているバージョンはリリースノートから、サポートしているプラットフォームを調べてください。詳細は<a href="http://www.iis.net/php/" target="_blank">http://www.iis.net/php/</a>を参照してください。',
    'ERR_CHECKSYS_FASTCGI_LOGGING' => 'IIS/FastCGI sapiを使用して最適な動作をさせるには、php.iniファイルでfastcgi.loggingを0に設定してください。',
    'ERR_CHECKSYS_PHP_UNSUPPORTED' => 'インストールしてあるPHPはサポートしていないバージョン:  (バージョン',
    'LBL_DB_UNAVAILABLE' => 'データベースを利用できません。',
    'LBL_CHECKSYS_DB_SUPPORT_NOT_AVAILABLE' => 'データベースのサポートがありません。サポートしているデータベースの種類のMySQLやMS SQLサーバーに必要なドライバーのインストールを確認してください。インストールしているPHPのバージョンによりますが、php.iniの拡張のコメントを外したり、正しいバイナリファイルでPHPを再コンパイルしたり、といったことが必要となります。データベースのサポートを有効にする方法の、さらに詳しい情報はPHPのマニュアルを参照してください。',
    'LBL_CHECKSYS_XML_NOT_AVAILABLE' => 'SugarCRMに必要なXML解析ライブラリに関連した関数がありません。インストールしているPHPのバージョンによりますが、php.iniの拡張のコメントを外したり、正しいバイナリファイルでPHPを再コンパイルしたり、といったことが必要となります。より詳細な情報はPHPのマニュアルを参照してください。',
    'ERR_CHECKSYS_MBSTRING' => 'SugarCRMに必要なマルチバイト文字列のPHP拡張(mbstring)に関連した関数がありません。<br/><br/>一般にmbstringモジュールはPHPの初期設定では有効ではなく、PHPのバイナリを作成するときに --enable-mbstring を指定して有効にしなければなりません。mbstringのサポートを有効にする方法の、より詳細な情報はPHPのマニュアルを参照してください。',
    'ERR_CHECKSYS_SESSION_SAVE_PATH_NOT_SET' => 'PHPの構成ファイル(php.ini)にsession.save_pathを設定していないか、設定したフォルダーが存在しません。session.save_pathに正しいフォルダーを指定してください。',
    'ERR_CHECKSYS_SESSION_SAVE_PATH_NOT_WRITABLE' => 'PHPの設定ファイル(php.ini)のsession.save_pathに設定したフォルダーに書き込みができません。フォルダーを書き込み可能にする必要な処置を行ってください。<br>オペレーティングシステムに依存しますが、chmod 766を実行したり、ファイル名を右ボタンでクリックして表示したプロパティで読み込み専用のオプションを外したり、といったことが必要になるでしょう。',
    'ERR_CHECKSYS_CONFIG_NOT_WRITABLE' => '構成ファイルは存在しますが、書き込みができません。ファイルを書き込みに可能する必要な処置を行ってください。オペレーティングシステムに依存しますが、chmod 766を実行したり、ファイル名を右ボタンでクリックして表示したプロパティで読み込み専用のオプションを外したり、といったことが必要となるでしょう。',
    'ERR_CHECKSYS_CONFIG_OVERRIDE_NOT_WRITABLE' => '構成を上書きするファイルは存在しますが、書き込みができません。ファイルを書き込み可能にする必要な処置を行ってください。オペレーティングシステムに依存しますが、chmod 766を実行したり、ファイル名を右ボタンでクリックして表示したプロパティで読み込み専用のオプションを外したり、といったことが必要となるでしょう。',
    'ERR_CHECKSYS_CUSTOM_NOT_WRITABLE' => 'customのディレクトリは存在しますが、書き込みができません。オペレーティングシステムに依存しますが、chmod 766を実行したり、ファイル名を右ボタンでクリックして表示したプロパティで読み込み専用のオプションを外したり、といったことが必要となるでしょう。ファイルを書き込めるようにする必要な処置を行ってください。',
    'ERR_CHECKSYS_FILES_NOT_WRITABLE' => '以下のファイルやディレクトリに書き込みができないか存在しないため、作成できません。オペレーティングシステムに依存しますが、ファイルや親のディレクトリの権限を変更(chmod 766)したり、親のディレクトリを右ボタンでクリックして表示されたプロパティで読み込み専用のオプションを外して、すべての下位のフォルダーに適用したり、といったことが必要となるでしょう。',
    'ERR_CHECKSYS_SAFE_MODE' => 'Safe Modeはオン(php.iniで無効にしても良いでしょう)',
    'ERR_CHECKSYS_ZLIB' => 'ZLibのサポートがありません: SugarCRMはzlib圧縮によって多大に性能が向上します。',
    'ERR_CHECKSYS_ZIP' => 'ZIPのサポートがありません: SugarCRMは圧縮したファイルを扱うためにZIPのサポートが必要です。',
    'ERR_DB_ADMIN' => '入力したデータベース管理者のユーザ名とパスワードのどちらか、または両方が正しくなく、データベースに接続できませんでした。正しいユーザ名とパスワードを入力してください。(エラー: ',
    'ERR_DB_ADMIN_MSSQL' => '入力したデータベース管理者のユーザ名とパスワードのどちらか、または両方が正しくなく、データベースに接続できませんでした。正しいユーザ名とパスワードを入力してください。',
    'ERR_DB_EXISTS_NOT' => '指定したデータベースは存在しません。',
    'ERR_DB_EXISTS_WITH_CONFIG' => '構成済みのデータを含んだデータベースが既に存在します。選択したデータベースにインストールするには、インストールを再実行して「既存のSugarのテーブルを削除して再作成しますか?」を選択してください。アップグレードするには、管理コンソールからアップグレードウィザードを使用してください。<a href="http://www.sugarforge.org/content/downloads/" target="_new">こちら</a>にあるアップグレードの文書を読んでください。',
    'ERR_DB_EXISTS' => '入力した名前のデータベースが既に存在します。同じ名前で別のデータベースは作成できません。',
    'ERR_DB_EXISTS_PROCEED' => '入力した名前のデータベースが既に存在します。次のどちらかを行ってください。<br>1. 戻るボタンをクリックして、データベースの新しい名前を選びます。<br>2. 次へをクリックして続けます。この場合、このデータベースのすべての既存のテーブルを削除します。<strong>これは今までのテーブルとデータを吹き飛ばすことを意味します。</strong>',
    'ERR_DB_HOSTNAME' => 'ホスト名の入力が必要です。',
    'ERR_DB_INVALID' => '正しくないデータベースの種類を選択しています。',
    'ERR_DB_LOGIN_FAILURE' => 'データベースのホスト、ユーザー名、パスワードに正しくないものがあり、データベースに接続できませんでした。正しいホスト、ユーザー名、パスワードを入力してください',
    'ERR_DB_LOGIN_FAILURE_MYSQL' => '入力したデータベースのホスト、ユーザー名、パスワードに正しくないものがあり、データベースに接続できませんでした。正しいホスト、ユーザー名、パスワードを入力してください。',
    'ERR_DB_LOGIN_FAILURE_MSSQL' => '入力したデータベースのホスト、ユーザー名、パスワードに正しくないものがあり、データベースに接続できませんでした。正しいホスト、ユーザー名、パスワードを入力してください。',
    'ERR_DB_MYSQL_VERSION' => 'SugarCRMがサポートしていないMySQLのバージョン(%s)です。SugarCRMと互換のあるバージョンのインストールが必要です。サポートしているMySQLのバージョンはリリースノートから、サポートするプラットフォームを調べてください。',
    'ERR_DB_NAME' => 'データベース名の入力が必要です。',
    'ERR_DB_NAME2' => "データベース名に'\\'、'/'、'.'は含めてはなりません。",
    'ERR_DB_MYSQL_DB_NAME_INVALID' => "データベース名に'\\'、'/'、'.'は含めてはなりません。",
    'ERR_DB_MSSQL_DB_NAME_INVALID' => "データベース名は数字、'#'、'@'で始めてはならず、スペース、'\"'、\"'\"、'*'、'/'、'\'、'?'、':'、'<'、'>'、'&'、'!'、'-'を含めてはなりません。",
    'ERR_DB_OCI8_DB_NAME_INVALID' => "データベース名は英数字と記号の'#'、'_'、'$'だけを含めることができます。",
    'ERR_DB_PASSWORD' => 'Sugarのデータベースの管理者のパスワードが一致しません。パスワードの欄に同じパスワードを再入力してください。',
    'ERR_DB_PRIV_USER' => 'データベースの管理者のユーザ名を入力してください。このユーザーは最初のデータベースとの接続に必要です。',
    'ERR_DB_USER_EXISTS' => 'SugarCRMのデータベースのユーザが既に存在します。同じ名前で別のユーザーは作成できません。新しいユーザー名を入力してください。',
    'ERR_DB_USER' => 'SugarCRMのデータベースの管理者のユーザ名を入力してください。',
    'ERR_DBCONF_VALIDATION' => '進める前に以下のエラーを修正してください:',
    'ERR_DBCONF_PASSWORD_MISMATCH' => 'Sugarのデータベースのユーザのパスワードが一致しません。パスワードの欄に同じパスワードを再入力してください。',
    'ERR_ERROR_GENERAL' => '以下のエラーが発生しました:',
    'ERR_LANG_CANNOT_DELETE_FILE' => 'ファイルを削除できません: ',
    'ERR_LANG_MISSING_FILE' => 'ファイルがありません: ',
    'ERR_LANG_NO_LANG_FILE' => 'include/languageの中に言語パックのファイルがありません: ',
    'ERR_LANG_UPLOAD_1' => 'アップロードした内容に問題があります。もう一度実行してください。',
    'ERR_LANG_UPLOAD_2' => '言語パックはZIPアーカイブでなければなりません。',
    'ERR_LANG_UPLOAD_3' => 'PHPは一時ファイルをアップグレードのディレクトリに移動できませんでした。',
    'ERR_LICENSE_MISSING' => '入力されていない必須の項目があります。',
    'ERR_LICENSE_NOT_FOUND' => 'ライセンスファイルが見つかりません!',
    'ERR_LOG_DIRECTORY_NOT_EXISTS' => '指定したログのディレクトリは正しいディレクトリではありません。',
    'ERR_LOG_DIRECTORY_NOT_WRITABLE' => '指定したログのディレクトリは書き込みができないディレクトリです。',
    'ERR_LOG_DIRECTORY_REQUIRED' => '独自のディレクトリを使用したい場合は、ログのディレクトリの指定が必要です。',
    'ERR_NO_DIRECT_SCRIPT' => 'スクリプトを直接処理できません。',
    'ERR_NO_SINGLE_QUOTE' => 'ここに一重引用符は使用できません: ',
    'ERR_PASSWORD_MISMATCH' => 'SugarCRMの管理者ユーザーののパスワードが一致しません。パスワードの欄に同じパスワードを再入力してください。',
    'ERR_PERFORM_CONFIG_PHP_1' => '<span class=stop>config.php</span>ファイルに書き込みできません。',
    'ERR_PERFORM_CONFIG_PHP_2' => '手作業でconfig.phpファイルを作成して、以下の構成情報をconfig.phpファイルに貼り付けてインストールを継続できます。しかし、次の段階に進める前にconfig.phpファイルを<strong>作成しなければなりません</strong>。',
    'ERR_PERFORM_CONFIG_PHP_3' => 'config.phpファイルの作成を忘れていませんか?',
    'ERR_PERFORM_CONFIG_PHP_4' => '警告: config.phpファイルに書き込みできませんでした。config.phpが存在することを確認してください。',
    'ERR_PERFORM_HTACCESS_1' => '次のファイルに書き込みができません: ',
    'ERR_PERFORM_HTACCESS_2' => '。',
    'ERR_PERFORM_HTACCESS_3' => 'ブラウザーからログファイルがアクセス可能な状態となるのを避けて安全したい場合は、ログのディレクトリに以下の行の.htaccessファイルを作成してください:',
    'ERR_PERFORM_NO_TCPIP' => '<b>インターネットと接続できませんでした。</b>接続が可能になったときに<a href="http://www.sugarcrm.com/home/index.php?option=com_extended_registration&task=register">http://www.sugarcrm.com/home/index.php?option=com_extended_registration&task=register</a>をアクセスして、SugarCRMの登録をしてください。SugarCRMを使用する計画を少しお知らせいただくと、ご要望に沿ったアプリケーションの今後の提供のために参考とさせていただきます。',
    'ERR_SESSION_DIRECTORY_NOT_EXISTS' => '指定しセッションのディレクトリは正しいディレクトリではありません。',
    'ERR_SESSION_DIRECTORY' => '指定したセッションのディレクトリは書き込みできないディレクトリです。',
    'ERR_SESSION_PATH' => '独自のセッションのディレクトリを使用したい場合は、そのディレクトリの指定が必要です。',
    'ERR_SI_NO_CONFIG' => 'config_si.phpがドキュメントルートにないか、config.php内で$sugar_config_siを設定していません。',
    'ERR_SITE_GUID' => '固有のアプリケーションIDを使用したい場合は、その入力が必要です。',
    'ERROR_SPRITE_SUPPORT' => "現在GDライブラリを使用できないため、その結果CSSスプライトの機能を使用できません。",
    'ERR_UPLOAD_MAX_FILESIZE' => '警告: PHPの構成で少なくとも6MBのファイルのアップロードできるように変更しなければなりません。',
    'LBL_UPLOAD_MAX_FILESIZE_TITLE' => 'アップロードするファイルの大きさ',
    'ERR_URL_BLANK' => 'Sugarインスタンスの基準のURLを入力してください。',
    'ERR_UW_NO_UPDATE_RECORD' => 'インストールの記録の場所が不明: ',
    'ERROR_FLAVOR_INCOMPATIBLE' => 'アップロードしたファイルは、このSugarのエディション(コミュニティ版、プロフェッショナル、エンタープライズ)と互換性がありません。',
    'ERROR_LICENSE_EXPIRED' => 'エラー: ライセンスの期限は',
    'ERROR_LICENSE_EXPIRED2' => "日前に切れています。管理メニューの<a href='index.php?action=LicenseSettings&module=Administration'>'\"ライセンス管理\"</a>に進んで、新しいライセンスキーを入力してください。ライセンスの期限切れてから30日以内に新しいライセンスキーを入力しないと、このアプリケーションにアクセスできなくなります。" ,
    'ERROR_MANIFEST_TYPE' => 'マニフェストファイルはパッケージの種類を指定していなければなりません。',
    'ERROR_PACKAGE_TYPE' => 'マニフェストファイルは認識できないパッケージの種類を指定しています。',
    'ERROR_VALIDATION_EXPIRED' => 'エラー: 認証キーの期限が',
    'ERROR_VALIDATION_EXPIRED2' => "日前に切れています。管理メニューの<a href=\'index.php?action=LicenseSettings&module=Administration\'>ライセンス管理</a>に進んで、新しい認証キーを入力してください。認証が切れてから30日以内に新しい認証キーを入力しないと、このアプリケーションにログインできなくなります。" ,
    'ERROR_VERSION_INCOMPATIBLE' => 'アップロードしたファイルは、このSugarのバージョンと互換性がありません: ',
    'LBL_BACK' => '戻る',
    'LBL_CANCEL' => '取り消し',
    'LBL_ACCEPT' => '許可',
    'LBL_CHECKSYS_1' => 'インストールするSugarCRMが適切に動作するには、以下のすべてのシステム検査の一覧の項目が緑色であることを確認してください。いずれかが赤色の場合は、修正するために適切な処置を行ってください。<br><br>これらのシステム検査のヘルプは、<a href="http://www.sugarcrm.com/crm/installation" target="_blank">Sugar Wiki</a>を参照してください。',
    'LBL_CHECKSYS_CACHE' => '書き込み可能なキャッシュ下位ディレクトリ',
    'LBL_DROP_DB_CONFIRM' => '入力した名前のデータベースが既に存在します。<br>次のどちらかを行ってください。<br>1. 戻るボタンをクリックして、データベースの新しい名前を選びます。<br>2. 次へをクリックして続けます。この場合、このデータベースのすべての既存のテーブルを削除します。<strong>これは今までのテーブルとデータを吹き飛ばすことを意味します。</strong>',
    'LBL_CHECKSYS_CALL_TIME' => 'PHPのallow_call_time_pass_referenceはオフ',
    'LBL_CHECKSYS_COMPONENT' => '構成要素',
    'LBL_CHECKSYS_COMPONENT_OPTIONAL' => 'オプションの構成要素',
    'LBL_CHECKSYS_CONFIG' => '書き込み可能な構成ファイル(config.php)',
    'LBL_CHECKSYS_CONFIG_OVERRIDE' => '書き込み可能な構成ファイル(config_override.php)',
    'LBL_CHECKSYS_CURL' => 'cURLモジュール',
    'LBL_CHECKSYS_SESSION_SAVE_PATH' => 'セッションの保存パスの設定',
    'LBL_CHECKSYS_CUSTOM' => '書き込み可能なCustomディレクトリ',
    'LBL_CHECKSYS_DATA' => '書き込み可能なData下位ディレクトリ',
    'LBL_CHECKSYS_IMAP' => 'IMAPモジュール',
    'LBL_CHECKSYS_FASTCGI' => 'FastCGI',
    'LBL_CHECKSYS_MQGPC' => 'Magic Quotes GPC',
    'LBL_CHECKSYS_MBSTRING' => 'mbstringsモジュール',
    'LBL_CHECKSYS_MEM_OK' => 'OK(制限なし)',
    'LBL_CHECKSYS_MEM_UNLIMITED' => 'OK(無制限)',
    'LBL_CHECKSYS_MEM' => 'PHPのメモリー制限',
    'LBL_CHECKSYS_MODULE' => '書き込み可能なModules下位ディレクトリとファイル',
    'LBL_CHECKSYS_MYSQL_VERSION' => 'MySQLのバージョン',
    'LBL_CHECKSYS_NOT_AVAILABLE' => '利用不可',
    'LBL_CHECKSYS_OK' => 'OK',
    'LBL_CHECKSYS_PHP_INI' => 'PHPの構成ファイル(php.ini)の場所:',
    'LBL_CHECKSYS_PHP_OK' => 'OK (バージョン',
    'LBL_CHECKSYS_PHPVER' => 'PHPのバージョン',
    'LBL_CHECKSYS_IISVER' => 'IISのバージョン',
    'LBL_CHECKSYS_RECHECK' => '再検査',
    'LBL_CHECKSYS_SAFE_MODE' => 'PHPのセーフモードはオフ',
    'LBL_CHECKSYS_SESSION' => '書き込み可能なセッションの保存パス (',
    'LBL_CHECKSYS_STATUS' => '状態',
    'LBL_CHECKSYS_TITLE' => 'システム検査の結果',
    'LBL_CHECKSYS_VER' => '発見: (バージョン ',
    'LBL_CHECKSYS_XML' => 'XML解析',
    'LBL_CHECKSYS_ZLIB' => 'ZLIB圧縮モジュール',
    'LBL_CHECKSYS_ZIP' => 'ZIP処理モジュール',
    'LBL_CHECKSYS_FIX_FILES' => '進める前に以下のファイルやディレクトリを修正してください:',
    'LBL_CHECKSYS_FIX_MODULE_FILES' => '処理を進める前に以下のモジュール内のディレクトリとファイルを修正してください:',
    'LBL_CHECKSYS_UPLOAD' => '書き込み可能なアップロードディレクトリ',
    'LBL_CLOSE' => '閉じる',
    'LBL_THREE' => '3',
    'LBL_CONFIRM_BE_CREATED' => 'を作成',
    'LBL_CONFIRM_DB_TYPE' => 'データベースの種類',
    'LBL_CONFIRM_DIRECTIONS' => '以下の設定を確認してください。設定を変更したい場合は「戻る」をクリックしてください。「次へ」をクリックしますとインストールが開始されます。',
    'LBL_CONFIRM_LICENSE_TITLE' => 'ライセンス情報',
    'LBL_CONFIRM_NOT' => '未',
    'LBL_CONFIRM_TITLE' => '設定の確認',
    'LBL_CONFIRM_WILL' => 'を',
    'LBL_DBCONF_CREATE_DB' => 'データベースの作成',
    'LBL_DBCONF_CREATE_USER' => 'ユーザの作成',
    'LBL_DBCONF_DB_DROP_CREATE_WARN' => '警告(重要): これチェックしていると、すべてのSugarデータを削除します。',
    'LBL_DBCONF_DB_DROP_CREATE' => '既存のSugarテーブルを削除して新しく作成しますか?',
    'LBL_DBCONF_DB_DROP' => 'テーブルの削除',
    'LBL_DBCONF_DB_NAME' => 'データベース名',
    'LBL_DBCONF_DB_PASSWORD' => 'Sugarデータベースのユーザのパスワード',
    'LBL_DBCONF_DB_PASSWORD2' => 'Sugarデータベースのユーザのパスワードの再入力',
    'LBL_DBCONF_DB_USER' => 'Sugarデータベースのユーザ名',
    'LBL_DBCONF_SUGAR_DB_USER' => 'Sugarデータベースのユーザ名',
    'LBL_DBCONF_DB_ADMIN_USER' => 'データベースの管理者のユーザ名',
    'LBL_DBCONF_DB_ADMIN_PASSWORD' => 'データベースの管理者のパスワード',
    'LBL_DBCONF_DEMO_DATA' => 'デモのデータをデータベースに追加しますか?',
    'LBL_DBCONF_DEMO_DATA_TITLE' => 'デモのデータの選択',
    'LBL_DBCONF_HOST_NAME' => 'ホスト名',
    'LBL_DBCONF_HOST_INSTANCE' => 'ホストのインスタンス',
    'LBL_DBCONF_HOST_PORT' => 'ポート',
    'LBL_DBCONF_INSTRUCTIONS' => '以下のデータベースの構成情報を入力してください。入力する内容が不確かな場合は、初期値を使用することをお勧めします。',
    'LBL_DBCONF_MB_DEMO_DATA' => 'デモのデータのテキストにマルチバイトを使用しますか?',
    'LBL_DBCONFIG_MSG2' => 'データベースを置いているウェブサーバーの名前やマシン(ホスト)の名前(localhostやwww.mydomain.com):',
    'LBL_DBCONFIG_MSG3' => 'インストールしようとしているSugarインスタンスのデータを含むことになるデータベースの名前:',
    'LBL_DBCONFIG_B_MSG1' => 'データベースのテーブルとユーザの作成ができて、データベースに書き込みができるユーザ名とパスワードがSugarデータベースを設定するために必要です。',
    'LBL_DBCONFIG_SECURITY' => 'セキュリティ上の目的で、Sugarデータベースに接続できる専用のデータベースユーザーを指定できます。このインスタンスのために作成するSugarデータベースで、このユーザーはデータを書き込み、更新、取得できなければなりません。このユーザーは先に指定したデータベース管理者を使用することもできますが、新しいまたは既存のデータベースユーザーの情報を入力することもできます。',
    'LBL_DBCONFIG_AUTO_DD' => '任せます',
    'LBL_DBCONFIG_PROVIDE_DD' => '既存のユーザを入力',
    'LBL_DBCONFIG_CREATE_DD' => '作成するユーザを定義',
    'LBL_DBCONFIG_SAME_DD' => '管理者ユーザと同じ',
    'LBL_FTS' => '全文検索',
    'LBL_FTS_INSTALLED' => 'インストール済み',
    'LBL_FTS_INSTALLED_ERR1' => '全文検索の機能はインストールされていません。',
    'LBL_FTS_INSTALLED_ERR2' => 'このままインストールを続けられますが、全文検索の機能を使用できません。解決するにはデータベースサーバーのインストールガイドを参照するか、管理者に連絡してください。',
    'LBL_DBCONF_PRIV_PASS' => '特権的なデータベースユーザーのパスワード',
    'LBL_DBCONF_PRIV_USER_2' => '上のデータベースのアカウントは特権的なユーザーですか?',
    'LBL_DBCONF_PRIV_USER_DIRECTIONS' => 'この特権的なデータベースユーザーにはデータベースの作成、テーブルの作成と削除、ユーザーの作成を行う適切な権限がなければなりません。この特権的なユーザーはインストールの処理の過程で必要となる、これらの作業のためだけに使用します。上記と同じデータベースユーザーが十分な特権があるなら、同じデータベースユーザーも使用できます。',
    'LBL_DBCONF_PRIV_USER' => '特権的なデータベースユーザー名',
    'LBL_DBCONF_TITLE' => 'データベースの構成',
    'LBL_DBCONF_TITLE_NAME' => 'データベースの名前の入力',
    'LBL_DBCONF_TITLE_USER_INFO' => 'データベースユーザの情報の入力',
    'LBL_DISABLED_DESCRIPTION_2' => 'この変更を行った後で、下の「開始」のボタンをクリックしてインストールを開始できます。<i>インストールを完了した後で、\'installer_locked\'の値を\'true\'に変更したくなるでしょう。</i>',
    'LBL_DISABLED_DESCRIPTION' => '既にインストーラーを以前に実行しています。安全対策として、二回目からの実行は無効にしています。再び実行ことが確かな場合は、config.phpのファイルを編集して、\'installer_locked\'という名前の変数を見つけて(または追加して)、その値を\'false\'に設定してください。この行は次のように見えるはずです:',
    'LBL_DISABLED_HELP_1' => 'インストールのヘルプは、SugarCRMの',
    'LBL_DISABLED_HELP_LNK' => 'http://forum.sugarforum.jp/',
    'LBL_DISABLED_HELP_2' => 'サポートフォーラムを参照してください。',
    'LBL_DISABLED_TITLE_2' => 'SugarCRMはインストールできないように設定されています。',
    'LBL_DISABLED_TITLE' => 'SugarCRMはインストールできないように設定されています。',
    'LBL_EMAIL_CHARSET_DESC' => 'このロケールでもっとも一般的な文字セット',
    'LBL_EMAIL_CHARSET_TITLE' => 'アウトバウンド電子メールの送信の設定',
    'LBL_EMAIL_CHARSET_CONF' => 'アウトバウンド電子メールの文字セット ',
    'LBL_HELP' => 'ヘルプ',
    'LBL_INSTALL' => 'インストール',
    'LBL_INSTALL_TYPE_TITLE' => 'インストールのオプション',
    'LBL_INSTALL_TYPE_SUBTITLE' => 'インストールの種類の選択',
    'LBL_INSTALL_TYPE_TYPICAL' => ' <b>通常インストール</b>',
    'LBL_INSTALL_TYPE_CUSTOM' => ' <b>カスタムインストール</b>',
    'LBL_INSTALL_TYPE_MSG1' => '一般的なアプリケーションの機能にキーが必要ですが、インストールには不要です。この段階でキーを入力する必要はありませんが、アプリケーションをインストールした後でキーを入力する必要があります。',
    'LBL_INSTALL_TYPE_MSG2' => 'インストールに最小限の情報が必要です。新しい利用者にお勧めします。',
    'LBL_INSTALL_TYPE_MSG3' => 'インストールの過程で追加のオプションを入力します。これらのオプションのほとんどは管理画面でインストールした後でも設定できます。熟達した利用者にお勧めします。',
    'LBL_LANG_1' => 'SugarCRMで初期の言語(米国英語)以外の言語を使用するには、この段階で言語パックをアップロードしてインストールできます。後でSugarCRMの管理メニューからも言語パックのアップロードとインストールはできます。この段階では飛ばしたいときは、次へをクリックしてください。',
    'LBL_LANG_BUTTON_COMMIT' => 'インストール',
    'LBL_LANG_BUTTON_REMOVE' => '削除',
    'LBL_LANG_BUTTON_UNINSTALL' => 'アンインストール',
    'LBL_LANG_BUTTON_UPLOAD' => 'アップロード',
    'LBL_LANG_NO_PACKS' => 'なし',
    'LBL_LANG_PACK_INSTALLED' => '以下の言語パックをインストールしています: ',
    'LBL_LANG_PACK_READY' => '以下の言語パックをインストールできる状態です: ',
    'LBL_LANG_SUCCESS' => '言語パックをアップロードしました。',
    'LBL_LANG_TITLE' => '言語パック',
    'LBL_LAUNCHING_SILENT_INSTALL' => 'さあ、Sugarをインストールします。これは数分かかるかもしれません。',
    'LBL_LANG_UPLOAD' => '言語パックをアップロード',
    'LBL_LICENSE_ACCEPTANCE' => '使用許諾の承認',
    'LBL_LICENSE_CHECKING' => 'システムの互換性を検査中',
    'LBL_LICENSE_CHKENV_HEADER' => '環境を検査',
    'LBL_LICENSE_CHKDB_HEADER' => 'データベースの認証情報を検証中です。',
    'LBL_LICENSE_CHECK_PASSED' => 'システムは互換性の検査に合格しました。',
    'LBL_LICENSE_REDIRECT' => '次の秒数の後に移動: ',
    'LBL_LICENSE_DIRECTIONS' => 'ライセンス情報がある場合は、下の欄に入力してください。',
    'LBL_LICENSE_DOWNLOAD_KEY' => 'ダウンロードキーの入力',
    'LBL_LICENSE_EXPIRY' => '有効期限の日付',
    'LBL_LICENSE_I_ACCEPT' => '使用許諾を承認します',
    'LBL_LICENSE_NUM_USERS' => 'ユーザの数',
    'LBL_LICENSE_OC_DIRECTIONS' => '購入したオフラインクライアントの数を入力してください。',
    'LBL_LICENSE_OC_NUM' => 'オフラインクライアントのライセンスの数',
    'LBL_LICENSE_OC' => 'オフラインクライアントのライセンス',
    'LBL_LICENSE_PRINTABLE' => '印刷用の表示',
    'LBL_PRINT_SUMM' => '概要を印刷',
    'LBL_LICENSE_TITLE_2' => 'SugarCRMん|お!|ライセンス',
    'LBL_LICENSE_TITLE' => 'ライセンス情報',
    'LBL_LICENSE_USERS' => 'ライセンスされたユーザー',

    'LBL_LOCALE_CURRENCY' => '通貨の設定',
    'LBL_LOCALE_CURR_DEFAULT' => '初期設定の通貨',
    'LBL_LOCALE_CURR_SYMBOL' => '通貨の記号',
    'LBL_LOCALE_CURR_ISO' => '通貨コード(ISO 4217)',
    'LBL_LOCALE_CURR_1000S' => '1000の桁の区切り文字',
    'LBL_LOCALE_CURR_DECIMAL' => '小数点の記号',
    'LBL_LOCALE_CURR_EXAMPLE' => '例',
    'LBL_LOCALE_CURR_SIG_DIGITS' => '有効数字',
    'LBL_LOCALE_DATEF' => '初期設定の日付の書式',
    'LBL_LOCALE_DESC' => '指定されたロケールの設定はSugarインスタンスで全体的に反映します。',
    'LBL_LOCALE_EXPORT' => 'インポートとエクスポートの文字セット<br><i>(電子メール、.csv、vCard、PDF、データのインポート)</i>',
    'LBL_LOCALE_EXPORT_DELIMITER' => 'エクスポート(.csv)の区切り記号',
    'LBL_LOCALE_EXPORT_TITLE' => 'インポートとエクスポート設定',
    'LBL_LOCALE_LANG' => '初期設定の言語言語',
    'LBL_LOCALE_NAMEF' => '名前の書式の初期値',
    'LBL_LOCALE_NAMEF_DESC' => 's = 敬称<br />f = 名<br />l = 姓',
    'LBL_LOCALE_NAME_FIRST' => '太郎',
    'LBL_LOCALE_NAME_LAST' => '山田',
    'LBL_LOCALE_NAME_SALUTATION' => 'Dr.',  //use key. do not translate
    'LBL_LOCALE_TIMEF' => '初期設定の時刻の書式',
    'LBL_LOCALE_TITLE' => 'ロケールの設定',
    'LBL_CUSTOMIZE_LOCALE' => 'ロケールの設定のカスタマイズ',
    'LBL_LOCALE_UI' => 'ユーザインターフェース',

    'LBL_ML_ACTION' => '処理',
    'LBL_ML_DESCRIPTION' => '説明',
    'LBL_ML_INSTALLED' => 'インストールした日時',
    'LBL_ML_NAME' => '名前',
    'LBL_ML_PUBLISHED' => '公開した日付',
    'LBL_ML_TYPE' => '種類',
    'LBL_ML_UNINSTALLABLE' => 'アンインストール不可',
    'LBL_ML_VERSION' => 'バージョン',
    'LBL_MSSQL' => 'SQLサーバー',
    'LBL_MSSQL2' => 'SQLサーバー(FreeTDS)',
    'LBL_MSSQL_SQLSRV' => 'SQLサーバー(PHP用Microsoft SQLサーバーのドライバー)',
    'LBL_MYSQL' => 'MySQL',
    'LBL_MYSQLI' => 'MySQL(mysqli拡張)',
    'LBL_IBM_DB2' => 'IBM DB2',
    'LBL_NEXT' => '次へ',
    'LBL_NO' => 'いいえ',
    'LBL_ORACLE' => 'Oracle',
    'LBL_PERFORM_ADMIN_PASSWORD' => 'サイト管理者のパスワードを設定中',
    'LBL_PERFORM_AUDIT_TABLE' => '監査テーブル / ',
    'LBL_PERFORM_CONFIG_PHP' => 'Sugarの構成ファイルを作成中',
    'LBL_PERFORM_CREATE_DB_1' => '<b>データベースの作成中</b> ',
    'LBL_PERFORM_CREATE_DB_2' => '<b>作成先</b> ',
    'LBL_PERFORM_CREATE_DB_USER' => 'データベースユーザー名とパスワードを作成中...',
    'LBL_PERFORM_CREATE_DEFAULT' => '初期のSugarのデータを作成中',
    'LBL_PERFORM_CREATE_LOCALHOST' => 'localhost用のデータベースユーザー名とパスワードを作成中',
    'LBL_PERFORM_CREATE_RELATIONSHIPS' => 'Sugarの関係テーブルを作成中',
    'LBL_PERFORM_CREATING' => '作成中 / ',
    'LBL_PERFORM_DEFAULT_REPORTS' => 'レポートの初期値を作成中',
    'LBL_PERFORM_DEFAULT_SCHEDULER' => 'スケジューラーのジョブの初期値を作成中',
    'LBL_PERFORM_DEFAULT_SETTINGS' => '初期設定を挿入中',
    'LBL_PERFORM_DEFAULT_USERS' => '初期ユーザーを作成中',
    'LBL_PERFORM_DEMO_DATA' => 'デモのデータをデータベースに追加中(これはしばらくかかるかもしれません)',
    'LBL_PERFORM_DONE' => '終了<br>',
    'LBL_PERFORM_DROPPING' => '削除中 / ',
    'LBL_PERFORM_FINISH' => '完了',
    'LBL_PERFORM_LICENSE_SETTINGS' => 'ライセンス情報を更新中',
    'LBL_PERFORM_OUTRO_1' => 'Sugar ',
    'LBL_PERFORM_OUTRO_2' => 'の設定を完了しました。',
    'LBL_PERFORM_OUTRO_3' => '合計時間: ',
    'LBL_PERFORM_OUTRO_4' => '秒',
    'LBL_PERFORM_OUTRO_5' => '概算の使用したメモリー: 約',
    'LBL_PERFORM_OUTRO_6' => 'バイト',
    'LBL_PERFORM_OUTRO_7' => 'システムのインストールと使用するための構成を完了しました。',
    'LBL_PERFORM_REL_META' => '関連メタ情報 ...',
    'LBL_PERFORM_SUCCESS' => '成功!',
    'LBL_PERFORM_TABLES' => 'SugarCRMのテーブル、監査テーブル、関連メタテーブルを作成中',
    'LBL_PERFORM_TITLE' => '設定を実行',
    'LBL_PRINT' => '印刷',
    'LBL_REG_CONF_1' => '下の短いフォームに入力してください。SugarCRMより、製品に関するご案内、トレーニングクラスに関するニュース、特別なイベントへのご招待などをお送りします。ここで収集した情報を第三者に販売、貸与、または別の方法で配布することはありません。',
    'LBL_REG_CONF_2' => '登録には、あなたの氏名と電子メールアドレスだけが必要です。他のすべての欄への入力は任意ですが、入力いただけると助かります。ここで収集した情報を私たちは第三者に販売、貸与、共有、または別の方法で配布することはありません。',
    'LBL_REG_CONF_3' => 'ご登録ありがとうございました。SugarCRMにログインするには完了ボタンをクリックしてください。最初のログインではユーザー名に"admin"を、パスワードはステップ2で入力したパスワードが必要です。',
    'LBL_REG_TITLE' => '登録',
    'LBL_REG_NO_THANKS' => '登録しません',
    'LBL_REG_SKIP_THIS_STEP' => '今は登録しません',
    'LBL_REQUIRED' => '* 必須の項目',

    'LBL_SITECFG_ADMIN_Name' => 'SugarCRM管理者ユーザーの名前',
    'LBL_SITECFG_ADMIN_PASS_2' => 'SugarCRM管理者ユーザーのパスワード(再入力)',
    'LBL_SITECFG_ADMIN_PASS_WARN' => '注意: 以前にインストールした管理者のパスワードを上書きします。',
    'LBL_SITECFG_ADMIN_PASS' => 'SugarCRM管理者ユーザーのパスワード',

    'LBL_SITECFG_APP_ID' => 'アプリケーションID',
    'LBL_SITECFG_CUSTOM_ID_DIRECTIONS' => '選択すると、自動生成されるIDを上書きするアプリケーションIDを入力しなければなりません。このIDでSugarインスタンスのセッションを他のインスタンスから使用されないようにします。Sugarインスタンスのクラスター構成する場合は、それらはすべて同一のアプリケーションIDを共有しなければなりません。',
    'LBL_SITECFG_CUSTOM_ID' => '固有のアプリケーションIDを入力',
    'LBL_SITECFG_CUSTOM_LOG_DIRECTIONS' => '選択すると、SugarCRMの初期設定のログのディレクトリを上書きするディレクトリを入力しなければなりません。ログのディレクトリの場所によらず、ウェブブラウザーからのアクセスは .htaccess によるリダイレクトで制限します。',
    'LBL_SITECFG_CUSTOM_LOG' => '独自のログのディレクトリを使用',
    'LBL_SITECFG_CUSTOM_SESSION_DIRECTIONS' => '選択すると、Sugarのセッション情報を保持する安全なフォルダーを入力しなければなりません。これを指定して共用サーバーでセッションデータが脆弱となるのを避けることができます。',
    'LBL_SITECFG_CUSTOM_SESSION' => '独自のセッションのディレクトリを使用',
    'LBL_SITECFG_DIRECTIONS' => 'サイトの構成情報を入力してください。入力欄の意味が不確かに思える場合は、初期値のままで使用することをお勧めします。',
    'LBL_SITECFG_FIX_ERRORS' => '<b>進める前に以下のエラーを修復してください：</b>',
    'LBL_SITECFG_LOG_DIR' => 'ログのディレクトリ',
    'LBL_SITECFG_SESSION_PATH' => 'セッションのディレクトリのパス<br>(書き込み可でなければなりません) ',
    'LBL_SITECFG_SITE_SECURITY' => 'セキュリティオプションを選択',
    'LBL_SITECFG_SUGAR_UP_DIRECTIONS' => '選択すると、システムはアプリケーションのアップデートされたバージョンを定期的に確認します。',
    'LBL_SITECFG_SUGAR_UP' => 'アップデートを自動的に確認しますか?',
    'LBL_SITECFG_SUGAR_UPDATES' => 'SugarCRMのアップデートの設定',
    'LBL_SITECFG_TITLE' => 'サイトの構成',
    'LBL_SITECFG_TITLE2' => '管理者ユーザーの識別情報',
    'LBL_SITECFG_SECURITY_TITLE' => 'サイトのセキュリティ',
    'LBL_SITECFG_URL' => 'SugarインスタンスのURL',
    'LBL_SITECFG_USE_DEFAULTS' => '初期値を使用?',
    'LBL_SITECFG_ANONSTATS' => '匿名の利用統計を送信しますか?',
    'LBL_SITECFG_ANONSTATS_DIRECTIONS' => '選択すると、新しいバージョンをシステムが確認する度に、インストールしたSugarの統計を<b>匿名で</b>SugarCRM社に送信します。この情報はより、SugarCRM社はアプリケーションが使用状況を得て、よりよい製品の開発と改善に利用します。',
    'LBL_SITECFG_URL_MSG' => 'インストール後に、Sugarインスタンスにアクセスするのに使用するURLを入力してください。このURLはSugarアプリケーションのページのURLの基準としても使用します。URLにはウェブサーバー、マシン名、IPアドレスのいずれかを含んでいなければなりません。',
    'LBL_SITECFG_SYS_NAME_MSG' => 'システムの名前を入力してください。この名前はSugarアプリケーションをユーザーがアクセスしたときに、ブラウザーのタイトルバーに表示されます。',
    'LBL_SITECFG_PASSWORD_MSG' => 'インストール後、SugarインスタンスにログインするにはSugarの管理者ユーザー(ユーザー名の初期値 = admin)を使用しなければなりません。管理者ユーザーのパスワードを入力してください。このパスワードは最初のログインの後で変更できます。また、初期設定で提供している値以外に、使用する他の管理者ユーザー名も入力できます。',
    'LBL_SITECFG_COLLATION_MSG' => 'システムに設定する照合順序(並べ替え)を選択してください。この設定は使用する言語に特有の表を作成しします。言語が特別な設定を必要賭しない場合は初期値を使用してください。',
    'LBL_SPRITE_SUPPORT' => 'Spriteのサポート',
    'LBL_SYSTEM_CREDS' => 'システムの認証情報',
    'LBL_SYSTEM_ENV' => 'システム環境',
    'LBL_START' => '開始',
    'LBL_SHOW_PASS' => 'パスワードを表示',
    'LBL_HIDE_PASS' => 'パスワードを隠す',
    'LBL_HIDDEN' => '<i>(非表示)</i>',
    'LBL_CHOOSE_LANG' => '<b>言語の選択</b>',
    'LBL_STEP' => 'ステップ',
    'LBL_TITLE_WELCOME' => 'SugarCRMへようこそ ',
    'LBL_WELCOME_1' => 'このインストーラーはSugarCRMのデータベースのテーブルを作成し、開始するのに必要な構成変数を設定します。この処理は全体で10分程かかります。',
    'LBL_WELCOME_2' => 'インストールの文書については、<a href="http://www.sugarcrm.com/crm/installation" target="_blank">Sugar Wiki</a>を参照してください。<br><br>また、<a href="http://www.sugarcrm.com/forums/" target="_blank">Sugarフォーラム</a>でSugarコミュニティから支援を得られるでしょう。',
    //welcome page variables
    'LBL_TITLE_ARE_YOU_READY' => 'インストールの準備はできましたか?',
    'REQUIRED_SYS_COMP' => '必要なシステムの構成要素',
    'REQUIRED_SYS_COMP_MSG' =>
                    '開始する前に、以下のサポートしているシステムの構成要素があることを確かめてください:<br>
<ul>
<li> データベース/データベース管理システム(例: MySQL、SQLサーバー、Oracle、DB2)</li>
<li> ウェブサーバー(Apache, IIS)</li>
</ul>
インストールしようとしているバージョンのSugarと互換性のある構成要素は、リリースノートの互換性の表を調べてください。<br>',
    'REQUIRED_SYS_CHK' => '最初のシステム検査',
    'REQUIRED_SYS_CHK_MSG' => 'インストールの処理を開始すると、システムが適切に構成されていて、インストールを完了するのに必要な必要な構成要素がすべて用意できていることを確認するために、Sugarのファイルが配置されているウェブサーバーでシステム検査を実行します。<br><br>
システム検査は以下のすべてが対象です:<br>
<ul>
<li><b>PHPのバージョン</b> ― アプリケーションと互換がなければなりません。</li>
<li><b>セッション変数</b> ― 適切に動作しなければなりません。</li>
<li><b>mbstrings</b> ― インストールしてphp.iniで有効でなければなりません。</li>
<li><b>データベースサポート</b> ― 使用するMySQL、SQLサーバー、Oracle、DB2が存在しなければなりません。</li>
<li><b>config.php</b> ― ファイルが存在して書き込み可能な適切なアクセス権の設定が必要です。</li>
<li>以下のSugarのファイルは書き込みができなければなりません:
<ul><li><b>/custom</li>
<li>/cache</li>
<li>/modules</li>
<li>/upload</b></li></ul></li></ul>
検査で問題を検出すると、インストールを進めることができません。検査に通らなかった理由を説明する、エラーメッセージが表示されます。必要な変更を行った後でシステム検査を再び行い、インストールを続けられます。<br>',

    'REQUIRED_INSTALLTYPE' => '標準またはカスタムインストール',
    'REQUIRED_INSTALLTYPE_MSG' => 'システム検査の実行後、標準かカスタムインストールを選択できます。<br><br>
<b>標準</b>と<b>カスタム</b>のインストールの両方で、以下の情報が必要です:<br>
<ul>
<li>Sugarのデータを保管する<b>データベースの種類</b>
<ul>
<li>互換のあるデータベースの種類: MySQL、MS SQLサーバー、Oracle、DB2<br><br></li>
</ul></li>
<li><b>ウェブサーバーの名前</b>またはマシン(ホスト)は、データベースのあるホスト
<ul>
<li>データベースがローカルのコンピューターや、Sugarのファイルがあるウェブサーバーやマシンと同じホストの場合は<i>localhost</i>とできます。<br><br></li>
</ul></li>
<li>Sugarのデータを保管するのに使用する<b>データベースの名前</b></li>
<ul>
<li>既に存在するデータベース使用したい場合があるかもしれません。既存のデータベースの名前を入力すると、データベースの中のテーブルはSugarのデータベース用のスキーマを定義する際に削除します。</li>
<li>まだデータベースを作成していない場合は、入力した名前を使用して新しいデータベースをインストール中に作成します。<br><br></li>
</ul>
<li><b>データベース管理者の名前とパスワード</b>
<ul>
<li>データベース管理者はテーブルとユーザーの作成、データベースへの書き込みができなければなりません。</li>
<li>データベースがローカルのコンピューターにない、またはデータベースの管理者でない、またはその両方に該当する場合は、この情報をデータベースの管理者から得る必要があります。<br><br></ul></li></li>
<li><b>Sugarのデータベースのユーザ名とパスワード</b>
</li>
<ul>
<li>このユーザーはデータベース管理者でも、他の既存のデータベースユーザーを入力しても構いません。</li>
<li>新しいデータベースユーザーをこのために作成したい場合は、新しいユーザー名とパスワードをインストールの過程で入力でき、ユーザーはインストール中に作成されます。</li>
</ul></ul>
<p><b>カスタム</b>の設定では、以下の情報が必要です:<br>
<ul>
<li>インストールした後に<b>Sugarインスタンスにアクセスするのに使用するするURL</b>は、ウェブサーバーやマシン名やIPアドレスを含んでいなければなりません。<br><br></li>
<li>[任意] <b>セッションのディレクトリのパス</b> 共用サーバーでセッションデータが脆弱となるのを避けるために、デフォルトのディレクトリから変更したい場合に入力します。<br><br></li>
<li>[任意] <b>カスタマイズしたログディレクトリのパス</b>は、Sugarのログのデフォルトのディレクトリから変更したい場合に入力します。<br><br></li>
<li>[任意] <b>アプリケーションID</b>は、Sugarインスタンスのセッションを他のインスタンスから使用されないことを確実にするためのもので、自動生成されるIDを変更したい場合に入力します。<br><br></li>
<li><b>文字セット</b>は、利用するロケールでもっとも一般に使用するものです。<br><br></li></ul>
さらに詳しい情報は、インストールガイドを参照してください。',
    'LBL_WELCOME_PLEASE_READ_BELOW' => 'インストールを進める前に、以下の重要な情報を読んでください。この時点でアプリケーションをインストールする準備ができているかどうか判断するのに、この情報が役立つでしょう。',

    'LBL_WELCOME_CHOOSE_LANGUAGE' => '<b>言語を選択してください</b>',
    'LBL_WELCOME_SETUP_WIZARD' => '設定ウィザード',
    'LBL_WELCOME_TITLE_WELCOME' => 'SugarCRMにようこそ ',
    'LBL_WELCOME_TITLE' => 'SugarCRM設定ウィザード',
    'LBL_WIZARD_TITLE' => 'SugarCRM設定ウィザード: ',
    'LBL_YES' => 'はい',
    'LBL_YES_MULTI' => 'はい - マルチバイト',
    // OOTB Scheduler Job Names:
    'LBL_OOTB_WORKFLOW' => 'ワークフローのタスクを処理',
    'LBL_OOTB_REPORTS' => 'スケジュールされているレポート生成のタスクを実行',
    'LBL_OOTB_IE' => 'インバウンドのメールボックスを確認',
    'LBL_OOTB_BOUNCE' => 'キャンペーンメールのエラーメールの夜間処理を実行',
    'LBL_OOTB_CAMPAIGN' => 'キャンペーンメールの大量配信の夜間処理を実行',
    'LBL_OOTB_PRUNE' => '月の1日にデータベースを切り詰め',
    'LBL_OOTB_TRACKER' => 'トラッカーのテーブルを切り詰め',
    'LBL_OOTB_SEND_EMAIL_REMINDERS' => '電子メールの備忘通知を実行',
    'LBL_UPDATE_TRACKER_SESSIONS' => 'tracker_sessionsのテーブルを更新',
    'LBL_OOTB_CLEANUP_QUEUE' => 'Clean Jobs Queue', /* 6.5.2 */


    'LBL_PATCHES_TITLE' => '最新のパッチをインストール',
    'LBL_MODULE_TITLE' => '言語パックをインストール',
    'LBL_PATCH_1' => 'このステップを飛ばしたい場合は次へをクリックしてください。',
    'LBL_PATCH_TITLE' => 'システムパッチ',
    'LBL_PATCH_READY' => '以下のパッチをインストールする準備ができました:',
    'LBL_SESSION_ERR_DESCRIPTION' => "このウェブサーバーに接続している間、SugarCRMは重要な情報の保持にPHPのセッションに依存しています。インストールしてあるPHPには正しく構成されたセッション情報がありません。<br><br>
一般的な構成の誤りは<b>'session.save_path'</b>の指示が正しいディレクトリを指していない場合です。<br>
<br>以下の場所にあるphp.iniファイルで<a target=_new href='http://php.net/manual/ref.session.php'>PHPの構成</a>を修正してください。",
    'LBL_SESSION_ERR_TITLE' => 'PHPのセッション構成のエラー',
    'LBL_SYSTEM_NAME' => 'システム名',
    'LBL_COLLATION' => '照合順序の設定',
    'LBL_REQUIRED_SYSTEM_NAME' => 'Sugarインスタンスのシステム名を入力してください。',
    'LBL_PATCH_UPLOAD' => 'ローカルコンピューターからパッチファイルを選択してください。',
    'LBL_INCOMPATIBLE_PHP_VERSION' => 'PHPバージョン5以降が必要です。',
    'LBL_MINIMUM_PHP_VERSION' => '必要なPHPの最小のバージョンは5.1.0です。推奨するPHPのバージョンは5.2.xです。',
    'LBL_YOUR_PHP_VERSION' => '(現在のPHPのバージョンは ',
    'LBL_RECOMMENDED_PHP_VERSION' =>' 推奨するPHPのバージョンは5.2.x)',
    'LBL_BACKWARD_COMPATIBILITY_ON' => 'PHPの後方互換モードが有効です。さらに進めるには zend.ze1_compatibility_mode を Off に設定してください。',

    'advanced_password_new_account_email' => array(
        'subject' => '新しいアカウントの情報',
        'description' => 'このテンプレートは、ユーザーに新しいパスワードをシステム管理者が送信するときに使用します。',
        'body' => '<div>
<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\">
<tbody>
<tr>
<td colspan=\"2\"><p>あなたのユーザ名と一時的なパスワードが以下にあります:</p>
<p>ユーザー名 : $contact_user_user_name </p>
<p>パスワード : $contact_user_user_hash </p>
<br>
<p>$config_site_url</p>
<br>
<p>このパスワードを使用してログインした後で、独自に選んだパスワードで再設定する必要があるでしょう。</p></td>
</tr><tr><td colspan=\"2\"></td>
</tr>
</tbody>
</table>
</div>',
        'txt_body' =>
'
あなたのユーザ名と一時的なパスワードが以下にあります:
ユーザー名: $contact_user_user_name
パスワード: $contact_user_user_hash

$config_site_url

このパスワードを使用してログインした後で、独自に選んだパスワードで再設定する必要があるでしょう。',
        'name' => 'システムが生成したパスワード通知の電子メール',
        ),
    'advanced_password_forgot_password_email' => array(
        'subject' => 'アカウントのパスワードの再設定',
        'description' => "このテンプレートは、アカウントのパスワードを再設定するリンクをユーザーがクリックしたときに使用します。",
        'body' => '<div>
<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\">
<tbody>
<tr>
<td colspan=\"2\"><p>あなたは$contact_user_pwd_last_changedで、アカウントのパスワードを再設定するように要求されました。</p>
<p>以下のリンクをクリックしてパスワードを再設定してください:</p>
<p>$contact_user_link_guid</p>
</td>
</tr>
<tr><td colspan=\"2\"></td></tr>
</tbody>
</table>
</div>',
        'txt_body' =>
'
あなたは$contact_user_pwd_last_changedで、アカウントのパスワードを再設定するように要求されました。

以下のリンクをクリックしてパスワードを再設定してください:

$contact_user_link_guid',
        'name' => 'パスワード忘れの電子メール',
        ),
);
