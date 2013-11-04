<?php

class shopSeorangingLinksModel extends waModel
{
    protected $table = 'shop_seoranging_links';
    
    
    public function getAll($key = null, $normalize = false)
    {
        $sql = "SELECT * FROM {$this->table}";
        return $this->query($sql)->fetchAll($key, $normalize);
    }
    
    public function deleteAll()
    {
        $sql = "DELETE FROM {$this->table}";
        return $this->query($sql);
    }
    
    
}
