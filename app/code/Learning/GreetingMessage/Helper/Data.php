<?php


namespace Learning\GreetingMessage\Helper;


use Magento\Framework\App\Helper\AbstractHelper;

class Data extends AbstractHelper
{

    private $httpContext;
    protected $objectManager;

    public function __construct(
        \Magento\Framework\App\Helper\Context $context,
        \Magento\Framework\App\Http\Context $httpContext
    ) {
        parent::__construct($context);
        $this->httpContext = $httpContext;
        $this->objectManager = \Magento\Framework\App\ObjectManager::getInstance();
    }

    public function isLoggedIn()
    {
        $isLoggedIn = $this->httpContext->getValue(\Magento\Customer\Model\Context::CONTEXT_AUTH);
        return $isLoggedIn;
    }

    public function getCustomer()
    {
        $customerObj = $this->objectManager->create('Magento\Customer\Model\Customer')
            ->load($_SESSION['customer_base']["customer_id"]);
        return $customerObj->getFirstname().' '.$customerObj->getLastname();
    }

    public function getGreetingCollection()
    {
        $post = $this->objectManager->create('Learning\GreetingMessage\Model\GreetingMessageModel');
        $collection = $post->getCollection();
        return $collection;
    }

}