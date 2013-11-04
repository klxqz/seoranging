<?php

  
return array(
    'shop_seoranging' => array(
        'link' => array('varchar', 255, 'null' => 0, 'default' => ''),
        'keywords' => array('text', 'null' => 0),
        'count' => array('int', 11, 'null' => 0),
    ),
    
    'shop_seoranging_links' => array(
        'link' => array('varchar', 255, 'null' => 0, 'default' => ''),
        'page' => array('varchar', 255, 'null' => 0, 'default' => ''),
        'keywords' => array('text', 'null' => 0),
        ':keys' => array(
            'page' => 'page',
        ),
    ),
);
