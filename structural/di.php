<?php

//Снизить монолитность приложения
//class ControllerConfiguration
//{
//    private string $name;
//    private string $action;
//
//    /**
//     * @param string $name
//     * @param string $action
//     */
//    public function __construct(string $name, string $action)
//    {
//        $this->name = $name;
//        $this->action = $action;
//    }
//
//    public function getName(): string
//    {
//        return $this->name;
//    }
//
//    public function getAction(): string
//    {
//        return $this->action;
//    }
//}
//
//class Controller
//{
//    private ControllerConfiguration $configuration;
//
//    /**
//     * @param ControllerConfiguration $configuration
//     */
//    public function __construct(ControllerConfiguration $configuration)
//    {
//        $this->configuration = $configuration;
//    }
//
//    public function getConfiguration(): string
//    {
//        return $this->configuration->getName() . '@' . $this->configuration->getAction();
//    }
//}
//
//$configuration = new ControllerConfiguration('paypal', '1000');
//$configuration1 = new ControllerConfiguration('TestController', 'show');
//$controller = new Controller($configuration);
//$controller1 = new Controller($configuration1);

var_export($controller->getConfiguration());
echo '<br>';
var_export($controller1->getConfiguration());


