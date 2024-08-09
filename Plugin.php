<?php

namespace Kanboard\Plugin\BotoesTask;

use Kanboard\Core\Plugin\Base;

class Plugin extends Base
{
    public function initialize()
    {
        global $botoesTaskConfig;

        if (file_exists('plugins/BotoesTask/config.php'))
        {
            require_once('plugins/BotoesTask/config.php');
        }

        $this->hook->on('template:layout:css', array('template' => 'plugins/BotoesTask/Assets/css/btns.css'));
        $this->hook->on('template:layout:js', array('template' => 'plugins/BotoesTask/Assets/js/getUser.js'));

        $this->template->hook->attach('template:task:details:bottom', 'BotoesTask:task/buttons_task', [
            'botoesTaskConfig' => $botoesTaskConfig
        ]);
    }

    public function getPluginName()
    {
        return 'BotoesTask';
    }

    public function getPluginDescription()
    {
        return t('Adiciona botões que muda a cor das tasks para a cada papel.');
    }

    public function getPluginAuthor()
    {
        return 'Mateus S.S';
    }

    public function getPluginVersion()
    {
        return '1.0.0';
    }

    public function getPluginHomepage()
    {
        return 'https://github.com/Massnt/BotoesTask.git';
    }
}

