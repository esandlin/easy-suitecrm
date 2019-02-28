<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2018 SalesAgility Ltd.
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
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
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
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$mod_strings = array(
    'LBL_BASIC_SEARCH' => 'クイックフィルター',
    'LBL_ADVANCED_SEARCH' => '高度なフィルター',
    'LBL_BASIC_TYPE' => '基本のタイプ',
    'LBL_ADVANCED_TYPE' => 'アドバンストタイプ',
    'LBL_SYSOPTS_2' => 'インストールしようとしているEasy-SuiteCRMインスタンスにはどのタイプのデータベースが使用されますか？',
    'LBL_SYSOPTS_DB' => 'データベースの種類を指定する',
    'LBL_SYSOPTS_DB_TITLE' => 'データベースの種類',
    'LBL_SYSOPTS_ERRS_TITLE' => '先に進む前に、次のエラーを修正してください。',
    'ERR_DB_VERSION_FAILURE' => 'データベースのバージョンを確認できません。',
    'DEFAULT_CHARSET' => 'UTF-8',
    'ERR_ADMIN_USER_NAME_BLANK' => 'Easy-SuiteCRM管理者ユーザーのユーザー名を入力します。 ',
    'ERR_ADMIN_PASS_BLANK' => 'Easy-SuiteCRM管理者ユーザーのパスワードを入力します。 ',

    'ERR_CHECKSYS' => '互換性チェック中にエラーが検出されました。 Easy-SuiteCRMのインストールが正しく機能するためには、以下の問題に対処するための適切な手順を実行し、再確認ボタンを押すか、またはインストールをやり直してください。',
    'ERR_CHECKSYS_CALL_TIME' => '通話時間パスの参照を許可する（これはphp.iniでOffに設定する必要があります）',
    'ERR_CHECKSYS_CURL' => '見つかりません：Easy-SuiteCRM Schedulerは限られた機能で動作します。',
    'ERR_CHECKSYS_IMAP' => '見つかりません：InboundEmailとCampaigns（Email）にはIMAPライブラリが必要です。どちらも機能しません。',
    'ERR_CHECKSYS_MEM_LIMIT_1' => ' （これを ',
    'ERR_CHECKSYS_MEM_LIMIT_2' => 'php.iniファイルでM以上)',
    'ERR_CHECKSYS_NOT_WRITABLE' => '警告：書き込み不可',
    'ERR_CHECKSYS_PHP_INVALID_VER' => 'お使いのPHPのバージョンは、Easy-SuiteCRMではサポートされていません。 Easy-SuiteCRMアプリケーションと互換性のあるバージョンをインストールする必要があります。サポートされているPHPのバージョンについては、リリースノートの互換性マトリックスを参照してください。',
    'ERR_CHECKSYS_IIS_INVALID_VER' =>  'Easy-SuiteCRMではサポートされていません。 Easy-SuiteCRMアプリケーションと互換性のあるバージョンをインストールする必要があります。サポートされているIISのバージョンについては、リリースノートの互換性マトリックスを参照してください。あなたのバージョンはIISのバージョンです',
    'ERR_CHECKSYS_FASTCGI' => 'あなたがPHP用のFastCGIハンドラマッピングを使用していないことを検出しました。 Easy-SuiteCRMアプリケーションと互換性のあるバージョンをインストール/設定する必要があります。サポートされているバージョンについては、リリースノートの互換性マトリックスを参照してください。詳細については<a href="http://www.iis.net/php/" target="_blank"> http://www.iis.net/php/ </a>をご覧ください。',
    'ERR_CHECKSYS_FASTCGI_LOGGING' => 'IIS / FastCGI sapiを最大限に活用するには、php.iniファイルでfastcgi.loggingを0に設定してください。',
    'LBL_DB_UNAVAILABLE' => 'データベースが利用不可',
    'LBL_CHECKSYS_DB_SUPPORT_NOT_AVAILABLE' => 'データベースのサポートが見つかりませんでした。サポートされている次のデータベースタイプのいずれかに必要なドライバがあることを確認してください。MySQLまたはMS SQLServer。 PHPのバージョンによっては、php.iniファイルの拡張子をコメント解除するか、正しいバイナリファイルで再コンパイルする必要があります。データベースサポートを有効にする方法についてはPHPマニュアルを参照してください。',
    'LBL_CHECKSYS_XML_NOT_AVAILABLE' => 'Easy-SuiteCRMアプリケーションに必要なXMLパーサーライブラリに関連する関数が見つかりませんでした。 PHPのバージョンによっては、php.iniファイルの拡張子をコメント解除するか、正しいバイナリファイルで再コンパイルする必要があります。詳細はPHPのマニュアルを参照してください。',
    'ERR_CHECKSYS_MBSTRING' => 'asy-SuiteCRMアプリケーションに必要なMultibyte Strings PHP拡張（mbstring）に関連する関数が見つかりませんでした。 <br/> <br/>通常、mbstringモジュールはPHPではデフォルトで有効になっていません。PHPバイナリがビルドされるときには--enable-mbstringで有効にする必要があります。 mbstringサポートを有効にする方法についてはPHPマニュアルを参照してください。',
    'ERR_CHECKSYS_CONFIG_NOT_WRITABLE' => '成ファイルは存在しますが、書き込み可能ではありません。ファイルを書き込み可能にするために必要な手順を実行してください。オペレーティングシステムによっては、chmod 766を実行してアクセス許可を変更するか、ファイル名を右クリックしてプロパティにアクセスし、読み取り専用オプションをオフにする必要があります。',
    'ERR_CHECKSYS_CONFIG_OVERRIDE_NOT_WRITABLE' => '設定変更ファイルは存在しますが、書き込み可能ではありません。ファイルを書き込み可能にするために必要な手順を実行してください。オペレーティングシステムによっては、chmod 766を実行してアクセス許可を変更するか、ファイル名を右クリックしてプロパティにアクセスし、読み取り専用オプションをオフにする必要があります。',
    'ERR_CHECKSYS_CUSTOM_NOT_WRITABLE' => 'カスタムディレクトリは存在しますが、書き込みはできません。オペレーティングシステムによっては、アクセス権を変更するか（chmod 766）、右クリックして読み取り専用オプションのチェックを外してください。ファイルを書き込み可能にするために必要な手順を実行してください.',
    'ERR_CHECKSYS_FILES_NOT_WRITABLE' => "以下にリストされているファイルまたはディレクトリーは書き込み可能ではないか、欠落しているため作成できません。オペレーティングシステムによっては、これを修正するには、ファイルまたは親ディレクトリ（chmod 755）のアクセス権を変更するか、親ディレクトリを右クリックして[読み取り専用]オプションをオフにし、すべてのサブフォルダに適用する必要があります。",
    'LBL_CHECKSYS_OVERRIDE_CONFIG' => '設定の上書き',
    'ERR_CHECKSYS_SAFE_MODE' => 'セーフモードがオンになっています（php.iniで無効にしたい場合があります）)',
    'ERR_CHECKSYS_ZLIB' => 'ZLibのサポートが見つかりません：SuiteCRMはzlib圧縮によりパフォーマンス上の大きな利点を享受します。',
    'ERR_CHECKSYS_ZIP' => 'ZIPサポートが見つかりません：SuiteCRMは圧縮ファイルを処理するためにZIPサポートが必要です。',
    'ERR_CHECKSYS_PCRE' => 'PCREライブラリが見つかりません：SuiteCRMはPerl形式の正規表現パターンマッチングを処理するためにPCREライブラリを必要とします。',
    'ERR_CHECKSYS_PCRE_VER' => 'PCREライブラリのバージョン：SuiteCRMはPerl形式の正規表現パターンマッチングを処理するためにPCREライブラリ7.0以上を必要とします。',
    'ERR_DB_ADMIN' => '提供されたデータベース管理者のユーザー名および/またはパスワードが無効であり、データベースへの接続を確立できませんでした。有効なユーザー名とパスワードを入力してください。 （エラー： ',
    'ERR_DB_ADMIN_MSSQL' => '提供されたデータベース管理者のユーザー名および/またはパスワードが無効であり、データベースへの接続を確立できませんでした。有効なユーザー名とパスワードを入力してください。',
    'ERR_DB_EXISTS_NOT' => '指定されたデータベースは存在しません。',
    'ERR_DB_EXISTS_WITH_CONFIG' => 'データベースは既に構成データを持っています。選択したデータベースでインストールを実行するには、インストールを再実行して「既存のSuiteCRMテーブルを削除して再作成しますか？」を選択してください。アップグレードするには、管理コンソールのアップグレードウィザードを使用してください。 <a href="https://suitecrm.com/wiki/index.php/Upgrade" target="_new">こちら</a>にあるアップグレードドキュメントをお読みください。',
    'ERR_DB_EXISTS' => '指定されたデータベース名は既に存在します - 同じ名前の別のデータベース名を作成することはできません。',
    'ERR_DB_EXISTS_PROCEED' => '指定されたデータベース名は既に存在します。 <br> 1戻るボタンを押して新しいデータベース名を選択してください。 [次へ]をクリックして続行します。ただし、このデータベースの既存のテーブルはすべて削除されます。 <strong>これにより、テーブルとデータが消去されます。</strong>',
    'ERR_DB_HOSTNAME' => 'ホスト名は空白にできません。',
    'ERR_DB_INVALID' => '無効なデータベースタイプが選択されました。',
    'ERR_DB_LOGIN_FAILURE' => '提供されたデータベースホスト、ユーザー名、またはパスワードが無効で、データベースへの接続を確立できませんでした。有効なホスト、ユーザー名、パスワードを入力してください',
    'ERR_DB_LOGIN_FAILURE_MYSQL' => '提供されたデータベースホスト、ユーザー名、またはパスワードが無効で、データベースへの接続を確立できませんでした。有効なホスト、ユーザー名、パスワードを入力してください',
    'ERR_DB_LOGIN_FAILURE_MSSQL' => '提供されたデータベースホスト、ユーザー名、またはパスワードが無効で、データベースへの接続を確立できませんでした。有効なホスト、ユーザー名、パスワードを入力してください',
    'ERR_DB_MYSQL_VERSION' => '使用のMySQLのバージョン（％s）はSuiteCRMではサポートされていません。 SuiteCRMアプリケーションと互換性のあるバージョンをインストールする必要があります。サポートされているMySQLのバージョンについては、リリースノートの互換性マトリックスを参照してください。',
    'ERR_DB_NAME' => 'データベース名は空白にできません。',
    'ERR_DB_MYSQL_DB_NAME_INVALID' => "データベース名に '\\'、 '/'、または '。'を含めることはできません。",
    'ERR_DB_MSSQL_DB_NAME_INVALID' => "データベース名は数字、 '＃'、または '@'で始めることはできず、スペースを含めることはできません。 ： '、' <'、'> '、'＆ '、'！ '、または'  -  '",
    'ERR_DB_OCI8_DB_NAME_INVALID' => "データベース名は、英数字と記号'＃'_'、または「$」のみで構成できます。",
    'ERR_DB_PASSWORD' => 'SuiteCRMデータベース管理者に提供されたパスワードが一致しません。パスワード欄に同じパスワードを再入力してください。',
    'ERR_DB_PRIV_USER' => 'データベース管理者のユーザー名を入力します。ユーザーはデータベースへの初期接続に必要です。',
    'ERR_DB_USER_EXISTS' => 'SuiteCRMデータベースユーザーのユーザー名は既に存在します - 同じ名前の別のユーザーを作成することはできません。新しいユーザー名を入力してください。',
    'ERR_DB_USER' => 'SuiteCRMデータベース管理者のユーザー名を入力してください。',
    'ERR_DBCONF_VALIDATION' => '先に進む前に、次のエラーを修正してください。',
    'ERR_DBCONF_PASSWORD_MISMATCH' => 'SuiteCRMデータベースユーザーに提供されたパスワードが一致しません。パスワード欄に同じパスワードを再入力してください。',
    'ERR_ERROR_GENERAL' => '以下のエラーが発生しました。',
    'ERR_LANG_CANNOT_DELETE_FILE' => 'ファイルを削除できません。',
    'ERR_LANG_MISSING_FILE' => 'ファイルが見つかりません。 ',
    'ERR_LANG_NO_LANG_FILE' => 'include / languageの内側に言語パックファイルが見つかりません。',
    'ERR_LANG_UPLOAD_1' => 'アップロードに問題がありました。もう一度やり直してください。',
    'ERR_LANG_UPLOAD_2' => '言語パックはZIPアーカイブにする必要があります。',
    'ERR_LANG_UPLOAD_3' => 'PHPは一時ファイルをアップグレードディレクトリに移動できませんでした。',
    'ERR_LOG_DIRECTORY_NOT_EXISTS' => '指定されたログディレクトリは有効なディレクトリではありません。',
    'ERR_LOG_DIRECTORY_NOT_WRITABLE' => '提供されたログディレクトリは書き込み可能なディレクトリではありません。',
    'ERR_NO_DIRECT_SCRIPT' => 'スクリプトを直接処理できません。',
    'ERR_NO_SINGLE_QUOTE' => 'のために単一引用符を使用することはできません',
    'ERR_PASSWORD_MISMATCH' => 'SuiteCRM管理ユーザーに提供されたパスワードが一致しません。パスワード欄に同じパスワードを再入力してください。',
    'ERR_PERFORM_CONFIG_PHP_1' => 'に書き込めません<span class=stop>config.php</span>ファイル。',
    'ERR_PERFORM_CONFIG_PHP_2' => '手動でconfig.phpファイルを作成し、以下の設定情報をconfig.phpファイルに貼り付けることでこのインストールを続けることができます。ただし、次の手順に進む前に<strong> config.phpファイルを作成する必要があります</strong>。',
    'ERR_PERFORM_CONFIG_PHP_3' => 'config.phpファイルを忘れずに作成しましたか？',
    'ERR_PERFORM_CONFIG_PHP_4' => '警告：config.phpファイルに書き込めませんでした。存在することを確認してください。',
    'ERR_PERFORM_HTACCESS_1' => 'に書き込めません',
    'ERR_PERFORM_HTACCESS_2' => 'ファイル',
    'ERR_PERFORM_HTACCESS_3' => 'ログファイルをブラウザからアクセスできないようにするには、ログディレクトリに.htaccessファイルを次の行で作成します。',
    'ERR_PERFORM_NO_TCPIP' => '<b>インターネット接続を検出できませんでした。</b>接続が確立したら、<a href="http://www.suitecrm.com/"> http://www.suitecrm.comにアクセスしてください。 Easy-SuiteCRMに登録するには/ </a>貴社がEasy-SuiteCRMの使用をどのように計画しているかについて少し私たちに知らせることによって、私たちはあなたのビジネスニーズに合った正しいアプリケーションを常に提供していることを保証することができます。',
    'ERR_SESSION_DIRECTORY_NOT_EXISTS' => '提供されたセッションディレクトリは有効なディレクトリではありません。',
    'ERR_SESSION_DIRECTORY' => '提供されたセッションディレクトリは書き込み可能なディレクトリではありません。',
    'ERR_SESSION_PATH' => 'あなたがあなた自身を指定したいのであれば、セッションパスが必要です。',
    'ERR_SI_NO_CONFIG' => 'ドキュメントルートにconfig_si.phpを含めなかったか、config.phpに$ sugar_config_siを定義しませんでした',
    'ERR_SITE_GUID' => '自分の名前を指定したい場合は、アプリケーションIDが必要です。',
    'ERROR_SPRITE_SUPPORT' => "現在のところ、GDライブラリを見つけることができません。その結果、CSS Sprite機能を使用することはできません。",
    'ERR_UPLOAD_MAX_FILESIZE' => '警告：あなたのPHP設定は少なくとも6MBのファイルをアップロードできるように変更されるべきです。',
    'LBL_UPLOAD_MAX_FILESIZE_TITLE' => 'アップロードファイルサイズ',
    'ERR_URL_BLANK' => 'Easy-SuiteCRMインスタンスのベースURLを入力します。',
    'ERR_UW_NO_UPDATE_RECORD' => 'のインストール記録が見つかりませんでした',
    'ERROR_MANIFEST_TYPE' => 'マニフェストファイルでパッケージタイプを指定する必要があります。',
    'ERROR_PACKAGE_TYPE' => 'マニフェストファイルで認識できないパッケージタイプが指定されています',
    'ERROR_VERSION_INCOMPATIBLE' => 'アップロードされたファイルは、このバージョンのEasy-SuiteCRMと互換性がありません。',

    'LBL_BACK' => 'バック',
    'LBL_CANCEL' => '取り消し',
    'LBL_ACCEPT' => '承諾します',
    'LBL_CHECKSYS_CACHE' => '書き込み可能キャッシュサブディレクトリ',
    'LBL_DROP_DB_CONFIRM' => '指定されたデータベース名は既に存在します。<br>次のいずれかを実行できます。 [キャンセル]ボタンをクリックして、新しいデータベース名を選択するか、<br> 2を選択します。 [同意する]ボタンをクリックして続行します。データベース内の既存のテーブルはすべて削除されます。 <strong>これは、すべてのテーブルと既存のデータが削除されることを意味します。</strong>',
    'LBL_CHECKSYS_COMPONENT' => '成分',
    'LBL_CHECKSYS_CONFIG' => '書き込み可能Easy-SuiteCRM設定ファイル（config.php）',
    'LBL_CHECKSYS_CURL' => 'cURLモジュール',
    'LBL_CHECKSYS_CUSTOM' => '書き込み可能なカスタムディレクトリ',
    'LBL_CHECKSYS_DATA' => '書き込み可能データサブディレクトリ',
    'LBL_CHECKSYS_IMAP' => 'IMAPモジュール',
    'LBL_CHECKSYS_FASTCGI' => 'FastCGI',
    'LBL_CHECKSYS_MBSTRING' => 'MB文字列モジュール',
    'LBL_CHECKSYS_MEM_OK' => 'OK（制限なし）',
    'LBL_CHECKSYS_MEM_UNLIMITED' => 'OK（無制限）',
    'LBL_CHECKSYS_MEM' => 'PHPのメモリ制限',
    'LBL_CHECKSYS_MODULE' => '書き込み可能モジュールのサブディレクトリとFilest',
    'LBL_CHECKSYS_NOT_AVAILABLE' => '利用不可',
    'LBL_CHECKSYS_OK' => 'OK',
    'LBL_CHECKSYS_PHP_INI' => 'あなたのPHP設定ファイル（php.ini）の場所：',
    'LBL_CHECKSYS_PHP_OK' => 'OK (ver ',
    'LBL_CHECKSYS_PHPVER' => 'PHPのバージョン',
    'LBL_CHECKSYS_IISVER' => 'IISのバージョン',
    'LBL_CHECKSYS_RECHECK' => '再確認',
    'LBL_CHECKSYS_STATUS' => '状態',
    'LBL_CHECKSYS_TITLE' => 'システムチェックの受け入れ',
    'LBL_CHECKSYS_XML' => 'XML解析',
    'LBL_CHECKSYS_ZLIB' => 'ZLIB圧縮モジュール',
    'LBL_CHECKSYS_ZIP' => 'ZIP処理モジュール',
    'LBL_CHECKSYS_PCRE' => 'PCREライブラリー',
    'LBL_CHECKSYS_FIX_FILES' => '先に進む前に、次のファイルまたはディレクトリを修正してください。',
    'LBL_CHECKSYS_FIX_MODULE_FILES' => '先に進む前に、以下のモジュールディレクトリとその下のファイルを修正してください。',
    'LBL_CHECKSYS_UPLOAD' => '書き込み可能なアップロードディレクトリ',
    'LBL_CLOSE' => '閉じる',
    'LBL_THREE' => '3',
    'LBL_CONFIRM_BE_CREATED' => '作成される',
    'LBL_CONFIRM_DB_TYPE' => 'データベースの種類',
    'LBL_CONFIRM_NOT' => 'ではない',
    'LBL_CONFIRM_TITLE' => '設定を確認',
    'LBL_CONFIRM_WILL' => '意志',
    'LBL_DBCONF_DB_DROP' => 'ドロップテーブル',
    'LBL_DBCONF_DB_NAME' => 'データベース名',
    'LBL_DBCONF_DB_PASSWORD' => 'Easy-SuiteCRMデータベースユーザパスワード',
    'LBL_DBCONF_DB_PASSWORD2' => 'Easy-SuiteCRMデータベースユーザパスワードを再入力してください',
    'LBL_DBCONF_DB_USER' => 'Easy-SuiteCRMデータベースユーザ',
    'LBL_DBCONF_SUITE_DB_USER' => 'Easy-SuiteCRMデータベースユーザ',
    'LBL_DBCONF_DB_ADMIN_USER' => 'データベース管理者のユーザー名',
    'LBL_DBCONF_DB_ADMIN_PASSWORD' => 'データベース管理者パスワード',
    'LBL_DBCONF_DEMO_DATA' => 'デモデータをデータベースに追加する',
    'LBL_DBCONF_DEMO_DATA_TITLE' => 'デモデータを選択',
    'LBL_DBCONF_HOST_NAME' => 'ホスト名',
    'LBL_DBCONF_HOST_INSTANCE' => 'ホストインスタンス',
    'LBL_DBCONFIG_SECURITY' => 'セキュリティ上の理由から、Easy-SuiteCRMデータベースに接続するための専用データベースユーザを指定できます。このユーザーは、このインスタンス用に作成されるEasy-SuiteCRMデータベースでデータを書き込み、更新、および取得できる必要があります。このユーザーは、上記で指定したデータベース管理者にすることも、新規または既存のデータベースユーザー情報を指定することもできます。',
    'LBL_DBCONFIG_PROVIDE_DD' => '既存のユーザーを提供',
    'LBL_DBCONFIG_CREATE_DD' => '作成するユーザーを定義する',
    'LBL_DBCONFIG_SAME_DD' => '管理者ユーザーと同じ',
    'LBL_DBCONF_TITLE' => 'データベース構成',
    'LBL_DBCONF_TITLE_NAME' => 'データベース名を入力してください',
    'LBL_DBCONF_TITLE_USER_INFO' => 'データベースユーザー情報を提供する',
    'LBL_DBCONF_TITLE_PSWD_INFO_LABEL' => 'パスワード',
    'LBL_DISABLED_DESCRIPTION_2' => 'この変更が行われた後、あなたはインストールを始めるために下の「スタート」ボタンをクリックすることができます。 <i>インストールが完了したら、\'installer_locked \'の値を\'true \'に変更します。</i>',
    'LBL_DISABLED_DESCRIPTION' => 'インストーラはすでに1回実行されています。安全対策として、2回目の実行が無効になっています。本当にそれを実行したいのであれば、config.phpファイルに行き、\'installer_locked\'と呼ばれる変数を見つけて（または追加して）\'false \'に設定してください。行は次のようになります。',
    'LBL_DISABLED_HELP_1' => 'インストールのヘルプについては、Easy-SuiteCRMをご覧ください。',
    'LBL_DISABLED_HELP_LNK' => 'https://suitecrm.com/suitecrm/forum/suite-forum',
    'LBL_DISABLED_HELP_2' => 'サポートフォーラム',
    'LBL_DISABLED_TITLE_2' => 'Easy-SuiteCRMのインストールが無効になっています',
    'LBL_HELP' => '助けて',
    'LBL_INSTALL' => '据え付ける',
    'LBL_INSTALL_TYPE_TITLE' => 'インストールオプション',
    'LBL_INSTALL_TYPE_SUBTITLE' => 'インストールタイプを選択',
    'LBL_INSTALL_TYPE_TYPICAL' => ' <b>典型的なインストール</b>',
    'LBL_INSTALL_TYPE_CUSTOM' => ' <b>カスタムインストール</b>',
    'LBL_INSTALL_TYPE_MSG2' => 'インストールに最小限の情報が必要です。新規ユーザーにお勧めします。',
    'LBL_INSTALL_TYPE_MSG3' => 'インストール中に設定する追加オプションを提供します。これらのオプションのほとんどは、インストール後に管理画面でも利用できます。上級ユーザーにお勧めします。',
    'LBL_LANG_1' => 'Easy-SuiteCRMでデフォルトの言語（米国英語）以外の言語を使用するには、この時点で言語パックをアップロードしてインストールします。 SuiteCRMアプリケーション内から言語パックをアップロードしてインストールすることもできます。この手順をスキップしたい場合は、[次へ]をクリックしてください。',
    'LBL_LANG_BUTTON_COMMIT' => '据え付ける',
    'LBL_LANG_BUTTON_REMOVE' => '削除する',
    'LBL_LANG_BUTTON_UNINSTALL' => 'アンインストール',
    'LBL_LANG_BUTTON_UPLOAD' => 'アップロードする',
    'LBL_LANG_NO_PACKS' => '無し',
    'LBL_LANG_PACK_INSTALLED' => '次の言語パックがインストールされています。',
    'LBL_LANG_PACK_READY' => '次の言語パックをインストールする準備ができています。',
    'LBL_LANG_SUCCESS' => '言語パックは正常にアップロードされました。',
    'LBL_LANG_TITLE' => '言語パック',
    'LBL_LAUNCHING_SILENT_INSTALL' => 'Easy-SuiteCRMを今すぐインストールします。これには数分かかる場合があります。',
    'LBL_LANG_UPLOAD' => '言語パックをアップロードする',
    'LBL_LICENSE_ACCEPTANCE' => 'ライセンス受諾',
    'LBL_LICENSE_CHECKING' => 'システムの互換性をチェックします。',
    'LBL_LICENSE_CHKENV_HEADER' => '環境チェック',
    'LBL_LICENSE_CHKDB_HEADER' => 'DBクレデンシャルの確認',
    'LBL_LICENSE_CHECK_PASSED' => 'システムは互換性のチェックに合格しました。',
    'LBL_CREATE_CACHE' => 'インストールの準備をしています...',
    'LBL_LICENSE_REDIRECT' => 'にリダイレクトする',
    'LBL_LICENSE_I_ACCEPT' => '承諾します',
    'LBL_LICENSE_PRINTABLE' => '印刷可能ビュー',
    'LBL_PRINT_SUMM' => '印刷サマリー',
    'LBL_LICENSE_TITLE_2' => 'Easy-SuiteCRMライセンス',

	// information on server
    'LBL_LOCALE_NAME_FIRST' => 'Etsuko',
    'LBL_LOCALE_NAME_LAST' => 'Hosono',
    'LBL_LOCALE_NAME_SALUTATION' => 'Dr.',
    'LBL_ML_ACTION' => 'アクション',
    'LBL_ML_DESCRIPTION' => '説明',
    'LBL_ML_INSTALLED' => 'インストール日',
    'LBL_ML_NAME' => '名',
    'LBL_ML_PUBLISHED' => '公開日',
    'LBL_ML_TYPE' => '種類',
    'LBL_ML_UNINSTALLABLE' => 'インストール不可能',
    'LBL_ML_VERSION' => '稿',
    'LBL_MSSQL' => 'SQLサーバー',
    'LBL_MSSQL2' => 'SQLサーバー (FreeTDS)',
    'LBL_MSSQL_SQLSRV' => 'SQLサーバー（PHP用Microsoft SQL Serverドライバ）',
    'LBL_MYSQL' => 'MySQL',
    'LBL_MYSQLI' => 'MySQL（mysqli拡張）',
    'LBL_NEXT' => '次に',
    'LBL_NO' => 'いいえ',
    'LBL_PERFORM_ADMIN_PASSWORD' => 'サイト管理者パスワードを設定する',
    'LBL_PERFORM_CONFIG_PHP' => 'SuiteCRM設定ファイルの作成',
    'LBL_PERFORM_CREATE_DB_1' => '<b>データベースを作成する</b> ',
    'LBL_PERFORM_CREATE_DB_2' => ' <b>で</b> ',
    'LBL_PERFORM_CREATE_DB_USER' => 'データベースのユーザー名とパスワードを作成しています...',
    'LBL_PERFORM_CREATE_DEFAULT' => 'デフォルトのSuiteCRMデータを作成する',
    'LBL_PERFORM_DEFAULT_SCHEDULER' => 'デフォルトのスケジューラジョブを作成する',
    'LBL_PERFORM_DEFAULT_USERS' => 'デフォルトユーザーの作成',
    'LBL_PERFORM_DEMO_DATA' => 'データベーステーブルにデモデータを入力する（これには少し時間がかかります）',
    'LBL_PERFORM_DONE' => '終わった<br>',
    'LBL_PERFORM_FINISH' => '仕上がり',
    'LBL_PERFORM_OUTRO_1' => 'SuiteCRMのセットアップ',
    'LBL_PERFORM_OUTRO_2' => 'これで完成です！',
    'LBL_PERFORM_OUTRO_3' => '合計時間:',
    'LBL_PERFORM_OUTRO_4' => '秒',
    'LBL_PERFORM_OUTRO_5' => 'おおよその使用メモリ： ',
    'LBL_PERFORM_OUTRO_6' => 'バイト',
    'LBL_PERFORM_SUCCESS' => '成功！',
    'LBL_PERFORM_TABLES' => 'SuiteCRMアプリケーションテーブル、監査テーブル、および関係メタデータの作成',
    'LBL_PERFORM_TITLE' => 'セットアップを実行する',
    'LBL_PRINT' => '刷る',
    'LBL_REG_CONF_1' => 'SuiteCRMからの製品発表、トレーニングニュース、特別オファー、特別イベントの招待状を受け取るには、以下の短いフォームに記入してください。当社は、ここで収集した情報を第三者に販売、賃貸、共有、またはその他の方法で配布しません。',
    'LBL_REG_CONF_3' => 'ご登録ありがとうございます。 FinishボタンをクリックしてSuiteCRMにログインします。ユーザー名 "admin"と手順2で入力したパスワードを使用して、初めてログインする必要があります。',
    'LBL_REG_TITLE' => '登録',
    'LBL_REQUIRED' => '* 必須フィールド',
    'LBL_SITECFG_ADMIN_Name' => 'SuiteCRMアプリケーション管理者名',
    'LBL_SITECFG_ADMIN_PASS_2' => 'SuiteCRM管理者ユーザーパスワードを再入力してください',
    'LBL_SITECFG_ADMIN_PASS' => 'SuiteCRM管理者ユーザーパスワード',
    'LBL_SITECFG_APP_ID' => 'アプリケーションID',
    'LBL_SITECFG_CUSTOM_ID_DIRECTIONS' => '選択した場合は、自動生成されたIDを上書きするためのアプリケーションIDを指定する必要があります。このIDにより、1つのSuiteCRMインスタンスのセッションが他のインスタンスによって使用されないようにします。 SuiteCRMインストールのクラスタがある場合、それらはすべて同じアプリケーションIDを共有する必要があります。',
    'LBL_SITECFG_CUSTOM_ID' => '独自のアプリケーションIDを入力してください',
    'LBL_SITECFG_CUSTOM_LOG_DIRECTIONS' => '選択した場合は、SuiteCRMログのデフォルトディレクトリを上書きするログディレクトリを指定する必要があります。ログファイルの場所に関係なく、Webブラウザからのログファイルへのアクセスは.htaccessリダイレクトによって制限されます。',
    'LBL_SITECFG_CUSTOM_LOG' => 'カスタムログディレクトリを使用する',
    'LBL_SITECFG_CUSTOM_SESSION_DIRECTIONS' => '選択した場合、SuiteCRMセッション情報を保存するための安全なフォルダを指定する必要があります。これは、セッションデータが共有サーバー上で脆弱になるのを防ぐために行うことができます。',
    'LBL_SITECFG_CUSTOM_SESSION' => 'SuiteCRMにカスタムセッションディレクトリを使用する',
    'LBL_SITECFG_FIX_ERRORS' => '<b>先に進む前に、次のエラーを修正してください。</b>',
    'LBL_SITECFG_LOG_DIR' => 'ログディレクトリ',
    'LBL_SITECFG_SESSION_PATH' => 'セッションディレクトリへのパス<br>（書き込み可能である必要があります）',
    'LBL_SITECFG_SITE_SECURITY' => 'セキュリティオプションを選択する',
    'LBL_SITECFG_SUITE_UP_DIRECTIONS' => '選択すると、システムは定期的にアプリケーションの更新バージョンを確認します。',
    'LBL_SITECFG_SUITE_UP' => '更新を自動的に確認しますか',
    'LBL_SITECFG_TITLE' => 'サイト構成',
    'LBL_SITECFG_TITLE2' => '管理ユーザーを識別する',
    'LBL_SITECFG_SECURITY_TITLE' => 'サイトセキュリティ',
    'LBL_SITECFG_URL' => 'SuiteCRMインスタンスのURL',
    'LBL_SITECFG_ANONSTATS' => '匿名の使用統計情報を送信しますか',
    'LBL_SITECFG_ANONSTATS_DIRECTIONS' => '選択すると、システムが新しいバージョンをチェックするたびに、SuiteCRMはインストールに関する<b>匿名</b>の統計情報をSuiteCRM Inc.に送信します。この情報は、アプリケーションがどのように使用されているかをよりよく理解し、製品の改善を導くのに役立ちます。',
    'LBL_SITECFG_URL_MSG' => 'インストール後にSuiteCRMインスタンスへのアクセスに使用されるURLを入力します。このURLは、SuiteCRMアプリケーションページのURLのベースとしても使用されます。 URLにはWebサーバー、マシン名、またはIPアドレスを含める必要があります。',
    'LBL_SITECFG_SYS_NAME_MSG' => 'システムの名前を入力してください。この名前は、ユーザーがSuiteCRMアプリケーションにアクセスしたときにブラウザのタイトルバーに表示されます。',
    'LBL_SITECFG_PASSWORD_MSG' => 'インストール後、SuiteCRMインスタンスにログインするには、SuiteCRM管理ユーザー（デフォルトのユーザー名= admin）を使用する必要があります。この管理者ユーザーのパスワードを入力してください。このパスワードは初回ログイン後に変更できます。提供されているデフォルト値以外に、使用する別の管理ユーザー名を入力することもできます。',
    'LBL_SITECFG_COLLATION_MSG' => 'システムの照合（ソート）設定を選択してください。この設定はあなたが使用する特定の言語でテーブルを作成します。あなたの言語が特別な設定を必要としない場合にはデフォルト値を使用してください。',
    'LBL_SPRITE_SUPPORT' => 'スプライトサポート',
    'LBL_SYSTEM_CREDS' => 'システム資格情報',
    'LBL_SYSTEM_ENV' => 'システム環境',
    'LBL_SHOW_PASS' => 'パスワードを表示',
    'LBL_HIDE_PASS' => 'パスワードを隠す',
    'LBL_HIDDEN' => '<i>(韜晦)</i>',
    'LBL_STEP1' => 'ステップ1/2  - インストール前の要件',
    'LBL_STEP2' => 'ステップ2/2  - 設定',
    'LBL_STEP' => '第一歩',
    'LBL_TITLE_WELCOME' => 'Easy-SuiteCRMへようこそ',
    
    //welcome page variables
    'LBL_TITLE_ARE_YOU_READY' => 'インストールする準備はできましたか？',
    'REQUIRED_SYS_COMP' => '必要なシステム構成要素',
    'REQUIRED_SYS_COMP_MSG' => '始める前に、次のシステムコンポーネントのサポートされているバージョンがあることを確認してください。<br>
                      <ul>
                      <li>データベース/データベース管理システム（例：MariaDB、MySQL、またはSQL Server）</li>
                      <li>Webサーバー（Apache、IIS）</li>
                      </ul>
                      以下のリリースノートの互換性マトリックスを参照してください。
                      インストールしているSuiteCRMバージョン用の互換性のあるシステムコンポーネント。<br>',
    'REQUIRED_SYS_CHK' => '初期システムチェック',
    'REQUIRED_SYS_CHK_MSG' => 'インストールプロセスを開始すると、SuiteCRMファイルが配置されているWebサーバーでシステムチェックが実行されます。
                      システムが正しく設定され、必要なコンポーネントがすべて揃っていることを確認してください。
                      インストールを正常に完了します。 <br> <br>
                      以下のすべてがチェックされます。<br>
                      <ul>
                      <li> <b> PHPバージョン</b>＆＃8211;アプリケーションと互換性がある必要があります</li>
                      <li> <b>セッション変数</b>＆＃8211;正常に機能している必要があります。</li>
                      <li> <b> MBの文字列</b>＆＃8211; php.iniにインストールして有効にする必要があります。</li>
                      <li> <b>データベースのサポート</b>＆＃8211; MariaDB、MySQL、またはSQL Serverに存在する必要があります。</li>
                      <li> <b> Config.php </b>＆＃8211;書き込み可能にするには、存在し、適切な権限が必要です。</li>
                      <li>次のSuiteCRMファイルは書き込み可能である必要があります。<ul> <li> <b> / custom </li>
                      <li> / cache </li>
                      <li> / modules </li>
                      <li> /アップロード</b></li></ul></li></ul>
                                  チェックに失敗した場合は、インストールを続行できません。
                                  システムがチェックに合格しなかった理由を説明するエラーメッセージが表示されます。
                                  必要な変更を加えた後は、システムチェックをもう一度行ってインストールを続行できます。<br>',
    'REQUIRED_INSTALLTYPE' => '標準インストールまたはカスタムインストール',
    'REQUIRED_INSTALLTYPE_MSG' => 'システムチェックが実行された後、どちらかを選択できます。
                      標準インストールまたはカスタムインストール。<br> <br>
                      <b>標準</b>インストールと<b>カスタム</b>インストールの両方について、次のことを知っておく必要があります。<br>
                      <ul>
                      <li> SuiteCRMデータを格納する<b>データベースの種類</b> <ul> <li>互換性のあるデータベース
                      タイプ：MariaDB、MySQL、またはSQL Server。<br> <br> </li></ul> </li>
                      <li> <b> Webサーバーの名前</b>またはデータベースが配置されているマシン（ホスト）
                      <ul> <li>データベースがローカルコンピュータにある場合、またはSuiteCRMファイルと同じWebサーバーまたはコンピュータにある場合は、<i> localhost </i>になります。<br> <br> </li> < / ul> </li>
                      <li> <b> SuiteCRMデータを格納するために使用する<b>データベースの名前</b> </li>
                        <ul>
                          <li>すでに使用したい既存のデータベースがあるかもしれません。もし
                          既存のデータベースの名前を指定すると、データベース内のテーブルは
                          SuiteCRMデータベースのスキーマが定義されている場合は、インストール中に削除されます。</li>
                          <li>まだデータベースを持っていない場合は、指定した名前が使用されます。
                          インストール中にインスタンス用に作成される新しいデータベース。<br> <br> </li>
                        </ul>
                      <li> <b>データベース管理者のユーザー名とパスワード</b> <ul> <li>データベース管理者はテーブルとユーザーを作成してデータベースに書き込むことができるはずです。</li> <li>
                      データベースが
                      ローカルコンピュータに存在しない場合や、データベース管理者ではない場合、あるいはその両方。<br> <br> </ul></li> </li>
                      <li> <b> SuiteCRMデータベースのユーザー名とパスワード</b>
                      </li>
                        <ul>
                          <li>ユーザーはデータベース管理者かもしれませんが、あなたは
                          別の既存のデータベースユーザー</li>
                          <li>この目的で新しいデータベースユーザーを作成したい場合は、
                          インストールプロセス中に新しいユーザー名とパスワードを入力できるようにする。
                          インストール中にユーザーが作成されます。 </li>
                        </ul></ul> <p>
					<b>カスタム</b>設定の場合は、次のことも知っておく必要があります。<br>
                      <ul>                      
					<li> <b>インストール後のSuiteCRMインスタンスへのアクセスに使用されるURL </b>。
                      このURLには、ウェブサーバー、コンピュータ名、またはIPアドレスを含める必要があります。<br> <br> </li>
                                  <li>（オプション）カスタムを使用する場合は<b>セッションディレクトリへのパス</b>
                                  からのセッションデータを防ぐためのSuiteCRM情報のセッションディレクトリ
                                  共有サーバーに対して脆弱です。<br> <br> </li>
                                  <li>（オプション）SuiteCRMログのデフォルトディレクトリを上書きする場合は、<b>カスタムログディレクトリへのパス</b> <br> <br> </li>
                                  <li>自動生成を上書きする場合は[オプション] <b>アプリケーションID </b>
                                  1つのSuiteCRMインスタンスのセッションが他のインスタンスによって使用されないようにするためのID。<br> <br> </li>
                                  <li> <b>文字セット</b>は、ご使用の地域で最も一般的に使用されています。<br> <br> </li> </ul>
                                  詳細については、インストールガイドを参照してください。',
    'LBL_WELCOME_PLEASE_READ_BELOW' => 'インストールを進める前に、以下の重要な情報をお読みください。この情報は、この時点でアプリケーションをインストールする準備ができているかどうかを判断するのに役立ちます。',
    'LBL_WELCOME_CHOOSE_LANGUAGE' => '<b>言語を選んでください</b>',
    'LBL_WELCOME_SETUP_WIZARD' => 'セットアップウィザード',
    'LBL_WIZARD_TITLE' => 'SuiteCRMセットアップウィザード：',
    'LBL_YES' => 'はい',
    'LBL_PATCHES_TITLE' => '最新のパッチをインストールする',
    'LBL_MODULE_TITLE' => '言語パックをインストールする',
    'LBL_PATCH_1' => 'この手順をスキップしたい場合は、[次へ]をクリックしてください。',
    'LBL_PATCH_TITLE' => 'システムパッチ',
    'LBL_PATCH_READY' => '次のパッチをインストールする準備ができています。',
    'LBL_SESSION_ERR_DESCRIPTION' => "SuiteCRMは、このWebサーバーに接続している間、重要な情報を保存するためにPHPセッションに依存しています。 PHPのインストールにセッション情報が正しく設定されていません。
											<br><br>よくある設定ミスは、<b>'session.save_path'</b> 指令が有効なディレクトリを指していません。<br>
											<br>修正してください <a target=_new href='http://us2.php.net/manual/en/ref.session.php'>PHPの設定</a>以下のphp.iniファイルにあります。",
    'LBL_SESSION_ERR_TITLE' => 'PHPセッション設定エラー',
    'LBL_SYSTEM_NAME' => 'システム名',
    'LBL_COLLATION' => '照合設定',
    'LBL_REQUIRED_SYSTEM_NAME' => 'SuiteCRMインスタンスのシステム名を入力します。',
    'LBL_PATCH_UPLOAD' => 'ローカルコンピュータからパッチファイルを選択します',
    'LBL_INCOMPATIBLE_PHP_VERSION' => 'PHPバージョン5以降が必要です。',
    'LBL_MINIMUM_PHP_VERSION' => '最低限必要なPhpのバージョンは5.1.0です。推奨Phpバージョンは5.2.xです。',
    'LBL_YOUR_PHP_VERSION' => 'あなたの現在のPHPバージョンは',
    'LBL_RECOMMENDED_PHP_VERSION' => '推奨phpバージョンは5.2.xです',
    'LBL_BACKWARD_COMPATIBILITY_ON' => 'Php下位互換モードがオンになっています。先に進むにはzend.ze1_compatibility_modeをOffに設定します。',
    'LBL_STREAM' => 'PHPはストリームを使用することができます',
    
    'advanced_password_new_account_email' => array(
        'subject' => '新しいアカウント情報',
        'type' => 'システム',
        'description' => 'このテンプレートは、システム管理者が新しいパスワードをユーザーに送信するときに使用されます。',
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>アカウントのユーザー名と一時パスワードは次のとおりです。</p><p>Username : $contact_user_user_name </p><p>パスワード : $contact_user_user_hash </p><br><p>$config_site_url</p><br><p>上記のパスワードを使用してログインした後、パスワードを自分の選択したパスワードに再設定する必要があります。</p>   </td>         </tr><tr><td colspan=\"2\"></td>         </tr> </tbody></table> </div>',
        'txt_body' => '
アカウントのユーザー名と一時パスワードは次のとおりです。
ユーザー名: $contact_user_user_name
パスワード: $contact_user_user_hash

$config_site_url

上記のパスワードを使用してログインした後、パスワードを自分の選択したパスワードに再設定する必要があります。',
        'name' => 'システム生成パスワードEメール',
    ),
    'advanced_password_forgot_password_email' => array(
        'subject' => 'アカウントのパスワードをリセットする',
        'type' => 'システム',
        'description' => "このテンプレートは、クリックしてユーザーのアカウントパスワードをリセットするためのリンクをユーザーに送信するために使用されます。",
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>あなたは最近$ contact_user_pwd_last_changedであなたのアカウントパスワードをリセットできるように要求しました。 </p> <p>下のリンクをクリックしてパスワードを再設定してください。</p> <p> $ contact_user_link_guid </p>  </td>         </tr><tr><td colspan=\"2\"></td>         </tr> </tbody></table> </div>',
        'txt_body' => 'あなたは最近$ contact_user_pwd_last_changedであなたのアカウントパスワードをリセットできるように要求しました。下のリンクをクリックしてパスワードを再設定してください。$ contact_user_link_guid',
        'name' => 'パスワードを忘れた場合のEメール',
    ),
    
    'two_factor_auth_email' => array(
        'subject' => '二要素認証コード',
        'type' => 'システム',
        'description' => "このテンプレートは、Two Factor Authenticationのコードをユーザに送信するために使用されます。",
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>二要素認証コードは <b>$code</b>.</p>  </td>         </tr><tr><td colspan=\"2\"></td>         </tr> </tbody></table> </div>',
        'txt_body' => 'Two Factor認証コードは$ codeです。',
        'name' => '二要素認証メール',
    ),

    // SMTP settings
    'LBL_FROM_NAME' => '"名前から：',
    'LBL_FROM_ADDR' => '"から"住所：',
    'LBL_WIZARD_SMTP_DESC' => '割り当て通知や新しいユーザーパスワードなど、電子メールの送信に使用される電子メールアカウントを入力します。指定されたEメールアカウントから送信されたとおりに、ユーザーはSuiteCRMからEメールを受信します。',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'メールプロバイダを選択してください。',
    'LBL_SMTPTYPE_GMAIL' => 'Gmail',
    'LBL_SMTPTYPE_YAHOO' => 'Yahoo!郵便物',
    'LBL_SMTPTYPE_EXCHANGE' => 'マイクロソフトエクスチェンジ',
    'LBL_SMTPTYPE_OTHER' => '別の',
    'LBL_MAIL_SMTP_SETTINGS' => 'SMTPサーバの仕様',
    'LBL_MAIL_SMTPSERVER' => 'SMTPサーバー:',
    'LBL_MAIL_SMTPPORT' => 'SMTPポート',
    'LBL_MAIL_SMTPAUTH_REQ' => 'SMTP認証を使用しますか？',
    'LBL_EMAIL_SMTP_SSL_OR_TLS' => 'SMTP over SSLまたはTLSを有効にしますか？',
    'LBL_GMAIL_SMTPUSER' => 'Gmailのメールアドレス：',
    'LBL_GMAIL_SMTPPASS' => 'Gmailのパスワード：',
    'LBL_ALLOW_DEFAULT_SELECTION' => 'ユーザーがこのアカウントを送信メールに使用することを許可します。',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'このオプションを選択すると、すべてのユーザーがシステム通知と警告の送信に使用されたのと同じ送信メールアカウントを使用してEメールを送信できます。このオプションが選択されていない場合でも、ユーザーは自分のアカウント情報を入力した後も送信メールサーバーを使用できます。',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo!メールパスワード：',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo!メールID：',
    'LBL_EXCHANGE_SMTPPASS' => '交換パスワード：',
    'LBL_EXCHANGE_SMTPUSER' => '交換ユーザー名:',
    'LBL_EXCHANGE_SMTPPORT' => '交換サーバーポート:',
    'LBL_EXCHANGE_SMTPSERVER' => '交換サーバー:',
    'LBL_MAIL_SMTPUSER' => 'SMTPユーザー名：',
    'LBL_MAIL_SMTPPASS' => 'SMTPパスワード:',

    // Branding
    'LBL_WIZARD_SYSTEM_TITLE' => '焼き',
    'LBL_WIZARD_SYSTEM_DESC' => 'SuiteCRMをブランド化するために、組織の名前とロゴを入力してください。',
    'SYSTEM_NAME_WIZARD' => '名：',
    'SYSTEM_NAME_HELP' => 'これは、ブラウザのタイトルバーに表示される名前です。',
    'NEW_LOGO' => 'ロゴを選択してください：',
    'NEW_LOGO_HELP' => '画像ファイルの形式は、.pngまたは.jpgです。最大の高さは170ピクセル、最大の幅は450ピクセルです。アップロードされた画像のうち、任意の方向に大きいものは、これらの最大サイズに合わせて拡大縮小されます。',
    'COMPANY_LOGO_UPLOAD_BTN' => 'アップロードする',
    'CURRENT_LOGO' => '現在のロゴ：',
    'CURRENT_LOGO_HELP' => 'このロゴは、SuiteCRMアプリケーションのフッターの左隅に表示されます。',

    //Scenario selection of modules
    'LBL_WIZARD_SCENARIO_TITLE' => 'シナリオ選択',
    'LBL_WIZARD_SCENARIO_DESC' => 'これはあなたの要求に基づいて表示されたモジュールを調整することを可能にするためです。各モジュールはインストール後に管理ページを使って有効にできます。',
    'LBL_WIZARD_SCENARIO_EMPTY' => '現在設定ファイル（config.php）に設定されているシナリオはありません',

    // System Local Settings
    'LBL_LOCALE_TITLE' => 'システムロケール設定',
    'LBL_WIZARD_LOCALE_DESC' => '地理的な場所に基づいて、SuiteCRM内のデータをどのように表示するかを指定します。ここで指定した設定がデフォルト設定になります。ユーザーは自分の好みを設定できます。',
    'LBL_DATE_FORMAT' => '日付フォーマット：',
    'LBL_TIME_FORMAT' => '時間フォーマット:',
    'LBL_TIMEZONE' => '時間帯:',
    'LBL_LANGUAGE' => '言語：',
    'LBL_CURRENCY' => '通貨：',
    'LBL_CURRENCY_SYMBOL' => '通貨記号：',
    'LBL_CURRENCY_ISO4217' => 'ISO 4217通貨コード：',
    'LBL_NUMBER_GROUPING_SEP' => '1000年代の区切り文字',
    'LBL_DECIMAL_SEP' => '小数点記号',
    'LBL_NAME_FORMAT' => '名前の形式：',
    'UPLOAD_LOGO' => 'ロゴをアップロードしています...お待ちください。',
    'ERR_UPLOAD_FILETYPE' => 'ファイルタイプは許可されていません。jpegまたはpngをアップロードしてください。',
    'ERR_LANG_UPLOAD_UNKNOWN' => '不明なファイルのアップロードエラーが発生しました。',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_INI_SIZE' => 'アップロードされたファイルがphp.iniのupload_max_filesizeディレクティブを超えています。',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_FORM_SIZE' => 'アップロードされたファイルは、HTMLフォームで指定されたMAX_FILE_SIZEディレクティブを超えています。',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_PARTIAL' => 'アップロードされたファイルは部分的にしかアップロードされていません。',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_NO_FILE' => 'ファイルがアップロードされていません。',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_NO_TMP_DIR' => '一時フォルダがありません。',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_CANT_WRITE' => 'ファイルをディスクに書き込めませんでした。',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_EXTENSION' => 'PHP拡張モジュールがファイルのアップロードを停止しました。 PHPは、どの拡張子がファイルのアップロードを停止させたかを確認する方法を提供しません。',
    'LBL_INSTALL_PROCESS' => 'インストール...',
    'LBL_EMAIL_ADDRESS' => '電子メールアドレス：',
    'ERR_ADMIN_EMAIL' => '管理者のメールアドレスが正しくありません。',
    'ERR_SITE_URL' => 'サイトのURLが必要です。',
    'STAT_CONFIGURATION' => '構成の関係...',
    'STAT_CREATE_DB' => 'データベースを作成しています...',
    'STAT_CREATE_DEFAULT_SETTINGS' => 'デフォルト設定を作成...',
    'STAT_INSTALL_FINISH' => 'インストールを完了...',
    'STAT_INSTALL_FINISH_LOGIN' => 'インストールプロセスが完了しました。<a href="%s">ログインしてください... </a>',
    'LBL_LICENCE_TOOLTIP' => '最初にライセンスを受け入れてください',
    'LBL_MORE_OPTIONS_TITLE' => 'より多くのオプション',
    'LBL_START' => '',
    'LBL_DB_CONN_ERR' => 'データベースエラー',
    'LBL_OLD_PHP' => '古いPHPバージョンが検出されました。',
    'LBL_OLD_PHP_MSG' => 'SuiteCRMをインストールするために推奨されるPHPバージョンは％sです。<br/>最低限必要なPHPバージョンは％sですが、最新のバージョンでリリースされたセキュリティ修正を含む多数のバグ修正のため推奨されません。<br/> PHPバージョン％sを使用していますが、これはEOLです：<a href="http://php.net/eol.php"> http://php.net/eol.php </a>。<br/> PHPのバージョンアップを検討してください。 <a href="http://php.net/migration70"> http://php.net/migration70 </a>に関する説明。',
    'LBL_OLD_PHP_OK' => 'リスクを認識しており、継続したいと考えています。',
    'LBL_DBCONF_TITLE_USER_INFO_LABEL' => 'ユーザー',
    'LBL_DBCONFIG_MSG3_LABEL' => 'データベース名',
    'LBL_DBCONFIG_MSG3' => 'インストールしようとしているSuiteCRMインスタンスのデータを含むデータベースの名前。',
    'LBL_DBCONFIG_MSG2_LABEL' => 'ホスト名',
    'LBL_DBCONFIG_MSG2' => 'データベースが配置されているWebサーバーまたはマシン（ホスト）の名前（www.mydomain.comなど）。ローカルにインストールする場合は、パフォーマンス上の理由から、「127.0.0.1」よりも「localhost」を使用する方が適切です。',
    'LBL_DBCONFIG_B_MSG1_LABEL' => '',
    'LBL_DBCONFIG_B_MSG1' => 'SuiteCRMデータベースを設定するには、データベーステーブルとユーザーを作成でき、データベースに書き込むことができるデータベース管理者のユーザー名とパスワードが必要です。'
);
