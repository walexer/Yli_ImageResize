<?php 

class Yli_ImageResize_Model_Varien_Image extends Varien_Image
{
    public function resize($width, $height = null,$paddingWidth = null,$paddingHeight = null)
    {        
        $this->_getAdapter()->resize($width, $height,$paddingWidth,$paddingHeight);
    }
    
    protected function _getAdapter($adapter=null)
    {
        if( !isset($this->_adapter) ) {
            //$this->_adapter = new Varien_Image_Adapter_Gd2();
            $this->_adapter = new Yli_ImageResize_Model_Varien_Image_Adapter_Gd2();            
        }
        return $this->_adapter;
    }
}