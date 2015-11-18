<?php 
class Yli_ImageResize_Model_Product_Image extends Mage_Catalog_Model_Product_Image
{
    protected $_paddingWidth;
    protected $_paddingHeight;
    
    public function setPaddingWidth($paddingWidth)
    {
        $this->_paddingWidth = $paddingWidth;
        return $this;
    }
    
    public function setPaddingHeight($paddingHeight)
    {
        $this->_paddingHeight = $paddingHeight;
        return $this;
    }
    
    public function resize()
    {
        if (is_null($this->getWidth()) && is_null($this->getHeight())) {
            return $this;
        }
        $this->getImageProcessor()->resize($this->_width, $this->_height,$this->_paddingWidth,$this->_paddingHeight);
        return $this;
    }
    
    public function getImageProcessor()
    {
        if( !$this->_processor ) {
            $this->_processor = new Yli_ImageResize_Model_Varien_Image($this->getBaseFile());
        }
        $this->_processor->keepAspectRatio($this->_keepAspectRatio);
        $this->_processor->keepFrame($this->_keepFrame);
        $this->_processor->keepTransparency($this->_keepTransparency);
        $this->_processor->constrainOnly($this->_constrainOnly);
        $this->_processor->backgroundColor($this->_backgroundColor);
        $this->_processor->quality($this->_quality);
        return $this->_processor;
    }
}