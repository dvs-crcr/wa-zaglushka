<?php

class shopZaglushkaPluginSettingsAction extends waViewAction
{
    public function execute()
    {
        $plugin = wa('shop')->getPlugin('zaglushka');
        $settings = $plugin->getSettings(); 
        $this->view->assign('settings', $settings);
    }
}