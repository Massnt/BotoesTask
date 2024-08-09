<?php if (($task['color_id'] == 'purple' || $task['color_id'] == 'pink') &&
    $task['column_id'] == ($botoesTaskConfig['column_id'] ?? '31') &&
    $task['project_id'] == ($botoesTaskConfig['project_id'] ?? '1')) :?>
    <div>
        <a id="aprovado"
           type="button"
           data-chamado="<?= $task['title'] ?>"
           class="btn-chamados btn-aprovado"
           href="<?= $this->url->href('BotoesTaskController', 'markAsReviewed', array('plugin' => 'BotoesTask', 'project_id' => $task['project_id'], 'task_id' => $task['id'])) ?>">
            <span>APROVADO PELO SUPORTE</span>
        </a>
        <?php if ($task['color_id'] != 'pink') : ?>
            <a id="reprovado"
               type="button"
               data-chamado="<?= $task['title'] ?>"
               class="btn-chamados btn-reprovado"
               href="<?= $this->url->href('BotoesTaskController', 'markAsReproved', array('plugin' => 'BotoesTask', 'project_id' => $task['project_id'], 'task_id' => $task['id'])) ?>">
                <span>REPROVADO PELO SUPORTE</span>
            </a>
        <?php endif; ?>
    </div>
<?php endif; ?>

<?php if (($task['color_id'] == 'cyan' || $task['color_id'] == 'deep_orange') &&
    $task['column_id'] == ($botoesTaskConfig['column_id'] ?? '31') &&
    $task['project_id'] == ($botoesTaskConfig['project_id'] ?? '1')) :?>
    <div>
        <a id="aprovado-prog"
           type="button"
           data-chamado="<?= $task['title'] ?>"
           class="btn-chamados btn-aprovado-prog"
           href="<?= $this->url->href('BotoesTaskController', 'markAsReviewedProg', array('plugin' => 'BotoesTask', 'project_id' => $task['project_id'], 'task_id' => $task['id'])) ?>">
            <span>APROVADO PELA PROGRAMAÇÃO</span>
        </a>
        <?php if ($task['color_id'] != 'deep_orange') : ?>
            <a id="reprovado-prog"
               type="button"
               data-chamado="<?= $task['title'] ?>"
               class="btn-chamados btn-reprovado-prog"
               href="<?= $this->url->href('BotoesTaskController', 'markAsReprovedProg', array('plugin' => 'BotoesTask', 'project_id' => $task['project_id'], 'task_id' => $task['id'])) ?>">
                <span>REPROVADO PELA PROGRAMAÇÃO</span>
            </a>
        <?php endif; ?>
    </div>
<?php endif; ?>

<?php if ($task['color_id'] == 'grey' &&
    $task['project_id'] == ($botoesTaskConfig['project_id'] ?? '1')) :?>
    <div id="reprovado-analise-div" class="hide">
        <a id="reprovado-analise"
           type="button"
           data-chamado="<?= $task['title'] ?>"
           class="btn-chamados btn-reprovado-analise"
           href="<?= $this->url->href('BotoesTaskController', 'markAsReprovedAnalise', array(
                   'plugin' => 'BotoesTask',
                   'project_id' => $task['project_id'],
                   'task_id' => $task['id'],
                   'categoria' => $botoesTaskConfig['category_id'])) ?>">
            <span>REPROVADO PELA ANALISE</span>
        </a>
    </div>
<?php endif; ?>

<?php if ($task['color_id'] == 'blue' && $task['column_id'] == ($botoesTaskConfig['column_prod_id'] ?? '22') &&
    $task['project_id'] == ($botoesTaskConfig['project_id'] ?? '1')) : ?>
    <a id="retornar"
       type="button"
       data-chamado="<?= $task['title'] ?>"
       class="btn-chamados btn-retornado"
       href="<?= $this->url->href('BotoesTaskController', 'markAsReturned', array('plugin' => 'BotoesTask', 'project_id' => $task['project_id'], 'task_id' => $task['id'])) ?>">
        <span>RETORNADO AO CLIENTE</span>
    </a>
<?php endif; ?>

<?php if ($task['color_id'] == 'green' &&
    $task['is_active'] &&
    $task['column_id'] == ($botoesTaskConfig['column_prod_id'] ?? '22') &&
    $task['project_id'] == ($botoesTaskConfig['project_id'] ?? '1')) :?>
    <div id="arquivado-div" class="hide">
        <a id="arquivado"
           type="button"
           data-chamado="<?= $task['title'] ?>"
           class="btn-chamados btn-arquivar"
           href="<?= $this->url->href('BotoesTaskController', 'markAsFinalized', array(
               'plugin' => 'BotoesTask',
               'project_id' => $task['project_id'],
               'task_id' => $task['id'])); ?>">
            <span>ARQUIVAR</span>
        </a>
    </div>
<?php endif; ?>
