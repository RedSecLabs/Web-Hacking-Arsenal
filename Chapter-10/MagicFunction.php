<!-- page # 380 -->
public function __destruct() 
{
    parent::__destruct(); 
    if ($this->_cacheChanged)      
        sugar_file_put_contents(sugar_cached($this->_cacheFileName), serialize($this->_localStore)); 
}