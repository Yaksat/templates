<?php
//
//interface Mediator
//{
//    public function getWorker();
//}
//
//abstract class Worker
//{
//    private string $position;
//
//    /**
//     * @param string $position
//     */
//    public function __construct(string $position)
//    {
//        $this->position = $position;
//    }
//
//    public function sayHello()
//    {
//        printf('Hello');
//    }
//
//    public function work(): string
//    {
//        return $this->position . ' is working';
//    }
//}
//
//class InfoBase
//{
//    public function printInfo(Worker $worker)
//    {
//        printf($worker->work());
//    }
//}
//
//class WorkerInfoBaseMediator implements Mediator
//{
//    private Worker $worker;
//    private InfoBase $infoBase;
//
//    /**
//     * @param Worker $worker
//     * @param InfoBase $infoBase
//     */
//    public function __construct(Worker $worker, InfoBase $infoBase)
//    {
//        $this->worker = $worker;
//        $this->infoBase = $infoBase;
//    }
//
//    public function getWorker()
//    {
//        $this->infoBase->printInfo($this->worker);
//    }
//}
//
//class Developer extends Worker
//{
//
//}
//
//class Designer extends Worker
//{
//
//}
//
//
//$developer = new Developer('developer middle');
//$designer = new Designer('designer senior');
//$infoBase = new InfoBase();
//$workerInfoBaseMediator = new WorkerInfoBaseMediator($developer, $infoBase);
//$workerInfoBaseMediator2 = new WorkerInfoBaseMediator($designer, $infoBase);
//
//$workerInfoBaseMediator2->getWorker();
