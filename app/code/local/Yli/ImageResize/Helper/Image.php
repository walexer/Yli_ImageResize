<?php 

class Yli_ImageResize_Helper_Image extends Mage_Catalog_Helper_Image
{
    public function resize($width, $height = null)
    {
        $this->_getModel()->setWidth($width)->setHeight($height);
        $padding = $this->getProduct()->getData('padding');
        if($padding){
            $height = $height?$height:$width;
            $this->_getModel()->setPaddingWidth($width*$padding)->setPaddingHeight($height*$padding);
        }
        $this->_scheduleResize = true;
        return $this;
    }
}