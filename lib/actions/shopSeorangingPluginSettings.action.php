<?php

class shopSeorangingPluginSettingsAction extends waViewAction
{

    public function execute()
    {
        $seoranging = wa()->getPlugin('seoranging');
        $urls = $seoranging->getSiteMap();
        
        $seoranging_model = new shopSeorangingPluginModel();
        $rows = $seoranging_model->getAll();
        
        $settings = $seoranging->getSettings();
        
        $this->view->assign('count_page', count($urls));
        $this->view->assign('rows', $rows);
        $this->view->assign('settings', $settings);
    }
}