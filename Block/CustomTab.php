<?php

namespace TwentyToo\AutoTag\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\App\Helper\Context;
use Magento\Framework\App\ResourceConnection;


class CustomTab extends Template
{
    protected $resourceConnection;

    public function __construct(
        Context $context,
        ResourceConnection $resourceConnection
    ) {
        $this->resourceConnection = $resourceConnection;
    }
    public function getCustomData()
    {
        $connection = $this->resourceConnection->getConnection();
        $tableName = $this->resourceConnection->getTableName('twentytoo_tags');
        $query = $connection->select()->from($tableName)->where('order_id = ?', 'dress2');
        $data = $connection->fetchAll($query);

        $engTags = [];
        $arTags = [];
        foreach ($data as $item) {
            // Assuming the 'tag_name' column contains the tag name and the 'tag_value' column contains the tag value
            $tagName = $item['tag_name'];
            $tagValue = $item['tag_value'];
            
            // Determine language based on the tag name (e.g., if it contains Arabic characters)
            if (preg_match('/\p{Arabic}/u', $tagName)) {
                $arTags[$tagName] = $tagValue;
            } else {
                $engTags[$tagName] = $tagValue;
            }
        }

        // Return the data as separate arrays for English and Arabic tags
        return ['eng_tags' => $engTags, 'ar_tags' => $arTags];
    }
    
}
