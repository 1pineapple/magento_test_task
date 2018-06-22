<?php


namespace Learning\GreetingMessage\Controller\Page;




use Magento\Framework\Controller\ResultFactory;

class Home extends \Magento\Framework\App\Action\Action
{

    protected $resultRedirect;



    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\Controller\ResultFactory $result
    )
    {
        $this->resultRedirect = $result;
        return parent::__construct($context);
    }


    public function execute()
    {
        $post = (array) $this->getRequest()->getPost();
        $resultRedirect = $this->resultRedirect->create(ResultFactory::TYPE_REDIRECT);
        $resultRedirect->setPath('/');

        if (!empty($post["greetingMessage"])) {
            $model = $this->_objectManager->create('Learning\GreetingMessage\Model\GreetingMessageModel');
            $model->setMessage($post["greetingMessage"]);
            $model->setDateTime(date('Y-m-d H:i:s'));
            $model->setUsername($post["username"]);
            $saveData = $model->save();
            if($saveData){
                $this->messageManager->addSuccessMessage( __('Insert Greeting Successfully !') );
            } else {
                $this->messageManager->addErrorMessage( __('Insert Greeting Failed !') );
            }
        } else {
            $this->messageManager->addErrorMessage( __('Enter Greeting  !') );
        }

        return $resultRedirect;
//        return $this->_redirect('/');
    }


}