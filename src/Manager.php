<?php

namespace AsyncPHP\Doorman;

interface Manager
{
    /**
     * @todo description
     *
     * @param Task $task
     */
    public function addTask(Task $task);

    /**
     * @todo description
     *
     * @return bool
     */
    public function tick();
}
