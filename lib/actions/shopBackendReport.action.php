<?php

class shopBackendReportAction extends waViewAction
{

    public function execute()
    {
        $seoranginglinks_model = new shopSeorangingLinksModel();
        $seoranginglinks = $seoranginglinks_model->getAll();
        $this->view->assign('seoranginglinks', $seoranginglinks);
    }
}