<?php

return array(
    'name' => 'Ссылочное ранжирование',
    'description' => 'Проводит Seo оптимизацию',
    'img' => 'img/seoranging.png',
    'vendor' => 903438,
    'version' => '1.0.0',
    'rights' => false,
    'shop_settings' => true,
    'handlers' => array(
        'frontend_footer' => 'frontendFooter',
    )
);