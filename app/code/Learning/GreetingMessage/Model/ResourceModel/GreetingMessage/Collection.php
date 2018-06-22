<?php


namespace Learning\GreetingMessage\Model\ResourceModel\GreetingMessage;


use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{

    protected $_idFieldName = 'greeting_id';
    protected $_eventPrefix = 'greeting_message_collection';
    protected $_eventObject = 'message_collection';

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Learning\GreetingMessage\Model\GreetingMessageModel', 'Learning\GreetingMessage\Model\ResourceModel\GreetingMessage');
    }

}