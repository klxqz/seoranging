<?php

class shopSeorangingPluginBackendReportAction extends waViewAction
{

    public function execute()
    {
        $seoranginglinks_model = new shopSeorangingPluginLinksModel();
        $seoranginglinks = $seoranginglinks_model->getAll();
        $this->view->assign('seoranginglinks', $seoranginglinks);
    }
}