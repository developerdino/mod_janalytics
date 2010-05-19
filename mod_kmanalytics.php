<?php
/**
 * Kingfish Media Analytics - Google Analytics Code module for Joomla v1.5
 *
 * @version		$Id$
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

$tracking = $params->get('tracking', 'single');
$gaid = $params->get('gaid');
$domain = $params->get('domain', '.kingfishmedia.com.au');

if (!empty($gaid))
{
	require(JModuleHelper::getLayoutPath('mod_kmanalytics'));
}
?>
