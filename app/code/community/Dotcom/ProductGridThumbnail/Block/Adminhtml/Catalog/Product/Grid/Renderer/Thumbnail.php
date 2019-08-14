<?php
/**
 * Dotcom S.r.l.
 * User: Diego Zerjal
 * Date: 17/12/2015
 * Time: 12:32
 */

class Dotcom_ProductGridThumbnail_Block_Adminhtml_Catalog_Product_Grid_Renderer_Thumbnail extends Mage_Adminhtml_Block_Widget_Grid_Column_Renderer_Abstract
{
    public function render(\Varien_Object $row)
    {
        return $this->_getValue($row);
    }

    public function _getValue(\Varien_Object $row)
    {
        $width = Mage::getStoreConfig('product_grid_thumbnail/settings/image_size',Mage::app()->getStore());
        $val = str_replace("no_selection", "", $row->getData($this->getColumn()->getIndex())) ?: '/default/default.jpg';
        $url = Mage::getBaseUrl('media') . 'catalog/product' . $val;
        $out = "<img src=". $url ." width='{$width}px'/>";
        return $out;
    }
}