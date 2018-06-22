<?php


namespace Learning\GreetingMessage\Setup;


use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface
{
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $datetime = new \DateTime('2018-01-01T13:59:19+03:00', new \DateTimeZone('Europe/London'));
        $data = [
            ['message' => 'Happy New Year','date'=>$datetime->format('Y-m-d H:i:s (e)')]
        ];
        foreach ($data as $bind) {
            $setup->getConnection()
                ->insertForce($setup->getTable('greeting_message'), $bind);
        }
    }
}