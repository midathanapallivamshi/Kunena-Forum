<?php
/**
 * @version		$Id$
 * @package		Kunena
 * @subpackage	com_kunena
 * @copyright	Copyright (C) 2008 - 2009 Kunena Team. All rights reserved.
 * @license		GNU General Public License <http://www.gnu.org/copyleft/gpl.html>
 * @link		http://www.kunena.com
 */

defined('_JEXEC') or die;

$config = $this->options;

$settings  = JHtml::_('kconfig.setting', $config->get('enable_bbcode'), 'enable_bbcode', 'Enable BB-Code', 'Turns BB-Code on or off.', 'yes/no');
$settings .= JHtml::_('kconfig.setting', $config->get('enable_emoticons'), 'enable_emoticons', 'Enable Emoticons', 'Turns Emoticons on or off.', 'yes/no');
$settings .= JHtml::_('kconfig.setting', $config->get('trim_long_urls'), 'trim_long_urls', 'Trim Long URLs', 'Enable trimming of long URLs in text.', 'yes/no');
$settings .= JHtml::_('kconfig.setting', $config->get('long_urls_front'), 'long_urls_front', 'Long URLs Front', 'Length of front portion for trimmed URLs.', 'text', 4);
$settings .= JHtml::_('kconfig.setting', $config->get('long_urls_back'), 'long_urls_back', 'Long URLs Back', 'Length of back portion for trimmed URLs.', 'text', 4);
$settings .= JHtml::_('kconfig.setting', $config->get('enable_code_highlight'), 'enable_code_highlight', 'Enable Code Highlighting', 'Enable code tag highlighting - this might cause formatting in code tag to change.', 'yes/no');
$settings .= JHtml::_('kconfig.setting', $config->get('autoembed_youtube'), 'autoembed_youtube', 'Autoembed Youtube', 'Enable automatic embedding of Youtube videos.', 'yes/no');
$settings .= JHtml::_('kconfig.setting', $config->get('autoembed_ebay'), 'autoembed_ebay', 'Autoembed eBay', 'Enable automatic embedding of eBay listings.', 'yes/no');
$settings .= JHtml::_('kconfig.setting', $config->get('ebay_language_code'), 'ebay_language_code', 'eBay Language Code', 'Localization language code for embedded eBay items.', 'text', 5);

echo JHtml::_('kconfig.section', 'BB-Code', $settings );
