<?php
/**
 *
 * purge_cache [English]
 *
 * @package language
 * @copyright (c) 2012 phpBB Group
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
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
	'TOOL_ADMIN_PURGE_CACHE'	=> 'Purge cache',

	'PURGE_CACHE_CONFIRM'		=> 'Are you sure that you want to purge the board’s cache?',
	'PURGE_CACHE_DESCRIPTION'	=> 'This tool allows you to purge the board’s cache. When ran any cached information will be removed.',
	'PURGE_CACHE_SUCCESS'		=> 'The board’s cache was purged successfully.',
	'PURGE_CACHE_TITLE'			=> 'Purge cache',
));
