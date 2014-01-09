<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2010 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  Paolo Battistella 2010
 * @author     Paolo Battistella <info@paolobattistella.it>
 * @link       http://www.contaocms.it
 * @package    log_accounts
 * @license    LGPL
 * @filesource
 */
 
/**
 * -------------------------------------------------------------------------
 * BACK END MODULES
 * -------------------------------------------------------------------------
 */

array_insert(
$GLOBALS['BE_MOD']['accounts'],
  2,
  array (
    'log_members'=>
    array
    (
    	'tables' => array('tl_log'),
    	'icon'   => 'system/modules/log_accounts/html/icon.png'
    )
  )
);
array_insert(
$GLOBALS['BE_MOD']['accounts'],
  5,
  array (
    'log_users'=>
    array
    (
    	'tables' => array('tl_log'),
    	'icon'   => 'system/modules/log_accounts/html/icon.png'
    )
  )
);
?>
