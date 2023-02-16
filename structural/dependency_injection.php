<?php
//
//class ControllerConfiguration
//{
//    private string $name;
//    private string $action;
//
//    /**
//     * @return mixed
//     */
//    public function getName(): string
//    {
//        return $this->name;
//    }
//
//    /**
//     * @return mixed
//     */
//    public function getAction(): string
//    {
//        return $this->action;
//    }
//
//    /**
//     * @param $name
//     * @param $action
//     */
//    public function __construct(string $name, string $action)
//    {
//        $this->name = $name;
//        $this->action = $action;
//    }
//}
//
//class Controller
//{
//    private ControllerConfiguration $controllerConfiguration;
//
//    /**
//     * @param ControllerConfiguration $controllerConfiguration
//     */
//    public function __construct(ControllerConfiguration $controllerConfiguration)
//    {
//        $this->controllerConfiguration = $controllerConfiguration;
//    }
//
//    public function getConfiguration(): string
//    {
//        return $this->controllerConfiguration->getName() . '@' . $this->controllerConfiguration->getAction() . PHP_EOL;
//    }
//}
//
//$controllerConfiguration = new ControllerConfiguration('Post', 'Index');
//$controllerConfiguration1 = new ControllerConfiguration('Post', 'Show');
//$controllerConfiguration2 = new ControllerConfiguration('User', 'Index');
//$controller = new Controller($controllerConfiguration);
//$controller1 = new Controller($controllerConfiguration1);
//$controller2 = new Controller($controllerConfiguration2);
//var_dump($controller->getConfiguration());
//var_dump($controller1->getConfiguration());
//var_dump($controller2->getConfiguration());