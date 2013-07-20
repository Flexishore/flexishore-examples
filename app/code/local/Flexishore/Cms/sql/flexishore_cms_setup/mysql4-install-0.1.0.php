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
$installer->startSetup();

$conn = $installer->getConnection();
$table = $installer->getTable('cms_page');
$conn->addColumn($table, 'background', 'varchar(255)');

$installer->endSetup();
