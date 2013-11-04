<?php
$plugin_id = array('shop', 'seoranging');
$app_settings_model = new waAppSettingsModel();
$app_settings_model->set($plugin_id, 'default_output', '1');
$app_settings_model->set($plugin_id, 'tpl_link', '<a href="{link}">{keywords}</a>');