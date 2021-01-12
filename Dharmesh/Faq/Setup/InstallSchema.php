<?php

namespace Dharmesh\Faq\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\DB\Adapter\AdapterInterface;

class InstallSchema implements InstallSchemaInterface
{
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $installer = $setup;

        $installer->startSetup();

        if (version_compare($context->getVersion(), '1.0.0') < 0){
            $table = $installer->getConnection()
                ->newTable($installer->getTable('dharmeshfaq'))
                ->addColumn(
                        'id', \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER, null, ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true], 'Brand Id'
                )
                ->addColumn(
                        'question', \Magento\Framework\DB\Ddl\Table::TYPE_TEXT, null, ['nullable' => false], 'Question'
                )
                ->addColumn(
                        'answer', \Magento\Framework\DB\Ddl\Table::TYPE_TEXT, null, ['nullable' => false], 'Answer'
                )                
                ->addColumn(
                        'sort_order', \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER, null, ['nullable' => false, 'default' => '0'], 'Sort Order'
                )
                ->addColumn(
                        'status', \Magento\Framework\DB\Ddl\Table::TYPE_SMALLINT, null, ['nullable' => false, 'default' => '1'], 'Status'
                )
                ->setComment('FAQ');
            $installer->getConnection()->createTable($table);
		}

        $installer->endSetup();

    }
}