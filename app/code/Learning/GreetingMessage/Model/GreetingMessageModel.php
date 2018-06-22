<?php


namespace Learning\GreetingMessage\Model;


use Magento\Framework\DataObject\IdentityInterface;
use Magento\Framework\Model\AbstractModel;

class GreetingMessageModel extends AbstractModel implements IdentityInterface,\Learning\GreetingMessage\Api\Data\GreetingMessage
{

    const CACHE_TAG = 'greeting_message';

    protected $_cacheTag = 'greeting_message';

    protected $_eventPrefix = 'greeting_message';

    protected function _construct()
    {
        $this->_init('Learning\GreetingMessage\Model\ResourceModel\GreetingMessage');
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    public function getDefaultValues()
    {
        $values = [];

        return $values;
    }

    public function getDateTime()
    {
        return $this->getData(self::DATETIME);
    }

    public function getGreetingId()
    {
        return $this->getData(self::GREETING_ID);
    }

    public function getMessage()
    {
        return $this->getData(self::MESSAGE);
    }

    public function getUsername()
    {
        return $this->getData(self::USERNAME);
    }

    public function setUsername($username)
    {
        return $this->setData(self::USERNAME,$username);
    }

    public function setDateTime($date)
    {
        return $this->setData(self::DATETIME,$date);
    }

    public function setMessage($message)
    {
        return $this->setData(self::MESSAGE,$message);
    }

}