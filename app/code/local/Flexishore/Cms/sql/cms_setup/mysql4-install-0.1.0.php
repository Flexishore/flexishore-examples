<?php
/**
 * Flexishore Cms module
 *
 * @category    Flexishore
 * @package     Flexishore_Cms
 * @author      Kos Rafał <rafal.k@flexishore.com>
 * @copyright  Copyright (c) 2011 Flexishore http://flexishore.com
 */

$installer = $this;
$setup = new Mage_Eav_Model_Entity_Setup('core_setup');
$installer->startSetup();

$installer->run('
  ALTER TABLE  `cms_page` ADD  `background` VARCHAR( 255 ) NULL;
');

$installer->endSetup();