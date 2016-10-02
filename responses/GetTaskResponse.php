<?php

/* 
 * 
 */

namespace iRAP\JobScheduler\Responses;


class GetTaskResponse extends BaseResponse
{
    public function getTask()
    {
        $cargo = $this->getCargo();
        $task = \iRAP\JobScheduler\Task::createFromArray($cargo['task']);
        return $task;
    }
}