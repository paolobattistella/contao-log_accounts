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

class logAccounts extends Backend {
  
	public function setLog(DataContainer $objDc)
	{
	
    $do = strlen($this->Input->get('do')) ? $this->Input->get('do') : '';
    
    if ($do=='log_users' || $do=='log_members'){
      /**
       * Table tl_log
       */
      $GLOBALS['TL_DCA']['tl_log'] = array
      (
      	// Config
      	'config' => array
      	(
      		'dataContainer'               => 'Table',
      		'closed'                      => true,
      		'notEditable'                 => true
      	),
      	// List
      	'list'  => array
      	(
      		'sorting' => array
      		(
      			'mode'                    => 2,
      			'fields'                  => array('tstamp DESC', 'id DESC'),
      			'panelLayout'             => 'filter;sort,search,limit'
      		),
      		'label' => array
      		(
      			'fields'                  => array('tstamp', 'text'),
      			'format'                  => '<span style="color:#b3b3b3; padding-right:3px;">[%s]</span> %s',
      			'maxCharacters'           => 96
      		),
      		'operations' => array
      		(
      			'show' => array
      			(
      				'label'               => &$GLOBALS['TL_LANG']['tl_log']['show'],
      				'href'                => 'act=show',
      				'icon'                => 'show.gif'
      			)
      		)
      	),
      	// Fields
      	'fields' => array
      	(
      		'tstamp' => array
      		(
      			'label'                   => &$GLOBALS['TL_LANG']['tl_log']['tstamp'],
      			'filter'                  => true,
      			'sorting'                 => true,
      			'flag'                    => 6
      		),
      		'source' => array
      		(
      			'label'                   => &$GLOBALS['TL_LANG']['tl_log']['source'],
      			'reference'               => &$GLOBALS['TL_LANG']['tl_log']
      		),
      		'action' => array
      		(
      			'label'                   => &$GLOBALS['TL_LANG']['tl_log']['action']
      		),
      		'username' => array
      		(
      			'label'                   => &$GLOBALS['TL_LANG']['tl_log']['username'],
      			'search'                  => true,
      			'filter'                  => true,
      			'sorting'                 => true
      		),
      		'text' => array
      		(
      			'label'                   => &$GLOBALS['TL_LANG']['tl_log']['text'],
      			'search'                  => true
      		),
      		'func' => array
      		(
      			'label'                   => &$GLOBALS['TL_LANG']['tl_log']['func']
      		),
      		'ip' => array
      		(
      			'label'                   => &$GLOBALS['TL_LANG']['tl_log']['ip'],
      			'sorting'                 => true,
      			'filter'                  => true,
      			'search'                  => true
      		),
      		'browser' => array
      		(
      			'label'                   => &$GLOBALS['TL_LANG']['tl_log']['browser'],
      			'sorting'                 => true,
      			'search'                  => true
      		)
      	)
      );
    
    }
	
  	/**
     * Users
     */
    if ($do=='log_users'){
      
      $GLOBALS['TL_DCA']['tl_log']['list']['sorting']['filter'] = array
      (
          array('source=?', 'BE'),
          array('action=?', 'ACCESS')
      );    
      
    /**
     * Members
     */
    }else if ($do=='log_members'){

      $GLOBALS['TL_DCA']['tl_log']['list']['sorting']['filter'] = array
      (
          array('source=?', 'FE'),
          array('action=?', 'ACCESS')
      );    
 
    }

  }  

	
}
?>
