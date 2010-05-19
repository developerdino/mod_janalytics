<?php
/**
 * Kingfish Media Analytics - Google Analytics Code module for Joomla v1.5
 *
 * @version		$Id:$
 * @author		Dean Tedesco <dino@kingfishmedia.com.au>
 * @link		http://www.kingfishmedia.com.au
 * @copyright 	Copyright (C) 2010 Kingfish Media Pty Ltd. All rights reserved.
 * @license 	http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * 
 * This file is part of Kingfish Media Analytics.
 *
 * Kingfish Media Analytics is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Kingfish Media Analytics is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Kingfish Media Analytics.  If not, see <http://www.gnu.org/licenses/>.
 */

// no direct access
defined('_JEXEC') or die('Restricted access');

?>
<script type="text/javascript">

var _gaq = _gaq || [];
_gaq.push(['_setAccount', '<?php echo $gaid; ?>']);
<?php if ($tracking == 'multisub' || $tracking == 'multitop') : ?>
_gaq.push(['_setDomainName', '<?php echo ($tracking == 'multisub') ? $domain : 'none'; ?>']);
<?php endif; ?>
<?php if ($tracking == 'multitop') : ?>
_gaq.push(['_setAllowLinker', true]);
<?php endif; ?>
_gaq.push(['_trackPageview']);

(function() {
  var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
  ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();

</script>