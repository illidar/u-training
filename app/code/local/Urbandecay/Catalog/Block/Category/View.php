<?php

class Urbandecay_Catalog_Block_Category_View extends Mage_Catalog_Block_Category_View {

    /**
     * Retrieve current top parent category model object
     *
     * @return Mage_Catalog_Model_Category
     */
    public function getCurrentTopCategory()
    {
        $currentCat = $this->getCurrentCategory();
        if ( $currentCat->getParentId() == Mage::app()->getStore()->getRootCategoryId() )
        {
            $loadCategory = $currentCat;
        }
        else
        {
            $loadCategory = $currentCat->getParentCategory();
        }
        return $loadCategory;
    }

    /**
     * Get child categories list html
     *
     * @return string
     */
    public function getCategoryList()
    {
        $html = '';

        $loadCategory = $this->getCurrentTopCategory();
        $subCategories = explode(',', $loadCategory->getChildren());
        $CurrentUrl = Mage::helper('core/url')->getCurrentUrl();
        $count = count($subCategories);
        $i = 0;

        $html .= '<ul class="category-list">';
        foreach ( $subCategories as $subCategoryId )
        {
            $cat = Mage::getModel('catalog/category')->load($subCategoryId);
            if($cat->getIsActive())
            {
                $html .= '<li class="category-list-item';
                if ($cat->getURL() == $CurrentUrl)
                {
                    $html .= ' active';
                }
                $html .= '">';
                $html .= '<a class="category-list-link ';
                if ($cat->getURL() == $CurrentUrl)
                {
                    $html .= ' active';
                }
                $html .= '" ';
                $html .= 'href="' . $cat->getURL() . '">'. $cat->getName(). '</a>';
                $html .= '</li>';
                if ($i == $count - 1)
                {
                    $html .= '<li class="category-list-item';
                    if ($loadCategory->getURL() == $CurrentUrl)
                    {
                        $html .= ' active';
                    }
                    $html .= '">';
                    $html .= '<a class="category-list-link';
                    if ($loadCategory->getURL() == $CurrentUrl)
                    {
                        $html .= ' active';
                    }
                    $html .= '" ';
                    $html .= 'href="' . $loadCategory->getURL() . '">' . $this->__('View All') . '</a>';
                    $html .= '</li>';
                }
                $i++;
            }
        }
        $html .= '</ul>';

        return $html;
    }
}