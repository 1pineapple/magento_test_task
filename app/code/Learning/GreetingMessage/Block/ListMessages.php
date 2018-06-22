<?php
/**
 * Created by PhpStorm.
 * User: Глова
 * Date: 21.06.2018
 * Time: 22:12
 */

namespace Learning\GreetingMessage\Block;


use Magento\Framework\View\Element\Template;

class ListMessages extends Template
{

    protected $model;
    public function __construct(\Magento\Framework\View\Element\Template\Context $context)
    {
        parent::__construct($context);
    }

    public function sayHello()
    {
        return __('Hello World');
    }

}