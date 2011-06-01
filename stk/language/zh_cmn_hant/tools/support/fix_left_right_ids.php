<?php
/**
*
* @package Support Toolkit - Fix Left/Right ID's
* @version $Id$
* @copyright (c) 2009 phpBB-TW (心靈捕手) http://phpbb-tw.net/phpbb/
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'FIX_LEFT_RIGHT_IDS'			=> '修復左/右 ID 值',
	'FIX_LEFT_RIGHT_IDS_CONFIRM'	=> '您確認要修復左/右 ID 值嗎？<br /><br /><strong>運行這個工具之前，請備份您的資料庫！</strong>',

	'LEFT_RIGHT_IDS_FIX_SUCCESS'	=> '左/右 ID 值已經成功地修復。',
	'LEFT_RIGHT_IDS_NO_CHANGE'		=> '此工具已經歷完成，所有的左/右 ID 值以及所有的列已經正確，因此沒有任何改變。',
));

?>