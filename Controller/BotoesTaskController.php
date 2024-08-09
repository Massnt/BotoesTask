<?php

namespace Kanboard\Plugin\BotoesTask\Controller;

use Kanboard\Controller\BaseController;

class BotoesTaskController extends BaseController
{
    public function markAsReviewed()
    {
        $task_id = $this->request->getIntegerParam('task_id');
        $project_id = $this->request->getIntegerParam('project_id');

        $this->taskModificationModel->update(array('id' => $task_id, 'color_id' => 'cyan'));
        $this->response->redirect($this->helper->url->to('TaskViewController', 'show', array('task_id' => $task_id, 'project_id' => $project_id)));

    }
    public function markAsReviewedProg()
    {
        $task_id = $this->request->getIntegerParam('task_id');
        $project_id = $this->request->getIntegerParam('project_id');

        $this->taskModificationModel->update(array('id' => $task_id, 'color_id' => 'blue'));
        $this->response->redirect($this->helper->url->to('TaskViewController', 'show', array('task_id' => $task_id, 'project_id' => $project_id)));

    }
    public function markAsReproved()
    {
        $task_id = $this->request->getIntegerParam('task_id');
        $project_id = $this->request->getIntegerParam('project_id');

        $this->taskModificationModel->update(array('id' => $task_id, 'color_id' => 'pink'));
        $this->response->redirect($this->helper->url->to('TaskViewController', 'show', array('task_id' => $task_id, 'project_id' => $project_id)));

    }

    public function markAsReprovedProg()
    {
        $task_id = $this->request->getIntegerParam('task_id');
        $project_id = $this->request->getIntegerParam('project_id');

        $this->taskModificationModel->update(array('id' => $task_id, 'color_id' => 'deep_orange'));
        $this->response->redirect($this->helper->url->to('TaskViewController', 'show', array('task_id' => $task_id, 'project_id' => $project_id)));

    }

    public function markAsReturned()
    {
        $task_id = $this->request->getIntegerParam('task_id');
        $project_id = $this->request->getIntegerParam('project_id');

        $this->taskModificationModel->update(array('id' => $task_id, 'color_id' => 'green'));
        $this->response->redirect($this->helper->url->to('TaskViewController', 'show', array('task_id' => $task_id, 'project_id' => $project_id)));

    }

    public function markAsReprovedAnalise()
    {
        $task_id = $this->request->getIntegerParam('task_id');
        $project_id = $this->request->getIntegerParam('project_id');
        $categoria = $this->request->getIntegerParam('categoria');

        $this->taskModificationModel->update(array('id' => $task_id, 'color_id' => 'red', 'category_id' => $categoria));
        $this->api->getProcedureHandler()->executeProcedure('closeTask', ['task_id' => $task_id]);
        $this->response->redirect($this->helper->url->to('TaskViewController', 'show', array('task_id' => $task_id, 'project_id' => $project_id)));

    }

    public function markAsFinalized()
    {
        $task_id = $this->request->getIntegerParam('task_id');
        $project_id = $this->request->getIntegerParam('project_id');

        $this->api->getProcedureHandler()->executeProcedure('closeTask', ['task_id' => $task_id]);
        $this->response->redirect($this->helper->url->to('TaskViewController', 'show', array('task_id' => $task_id, 'project_id' => $project_id)));

    }

    public function getUserBotoes()
    {
        $this->response->json(['user' => $this->getUser()['username']]);
    }

}
