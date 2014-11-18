<?php

class Urbandecay_Catalog_Block_Product_View extends Mage_Catalog_Block_Product_View {

    /**
     * Get add a review page of the product
     *
     * @return string
     */
    public function getReviewPageUrl($id)
    {
        return Mage::getUrl('review/product/list', array('id'=> $id));
    }
    public function getDetailedRating($productId, $storeId)
    {
        $ratings = array();
        $reviews = Mage::getModel('review/review')
            ->getResourceCollection()
            ->addStoreFilter($storeId)
            ->addEntityFilter('product', $productId)
            ->addStatusFilter(Mage_Review_Model_Review::STATUS_APPROVED)
            ->setDateOrder()
            ->addRateVotes();

        foreach ($reviews->getItems() as $review) {
            foreach( $review->getRatingVotes() as $vote) {
                $ratings[$vote->getRatingCode()] += $vote->getPercent() / count($reviews);
            }
        }
        return $ratings;
    }
}
