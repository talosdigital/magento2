<?php
/**
 * Created by PhpStorm.
 * User: ignaciopascual
 * Date: 3/25/16
 * Time: 4:06 PM
 */
namespace BigHippo\Plugin\Block;

class ProductPlugin
{
    protected $_logger;
    public function __construct(\Psr\Log\LoggerInterface $logger)
    {
        $this->_logger = $logger;
    }

    public function beforeGetReviewsSummaryHtml($subject,
                                                \Magento\Catalog\Model\Product $product,
                                                $templateType = false,
                                                $displayIfNoReviews = false
    ) {
        $this->_logger->debug('BigHippo_Plugin - beforex');
    }

    public function afterGetReviewsSummaryHtml($subject, $result) {
        $this->_logger->debug('BigHippo_Plugin - after');
        return "<b>" . $result . "</b>";
    }

    public function aroundGetReviewsSummaryHtml($subject,
                                                \Closure $proceed,
                                                \Magento\Catalog\Model\Product $product,
                                                $templateType = false,
                                                $displayIfNoReviews = false
    ) {
        $this->_logger->debug('BigHippo_Plugin - around');
        return $proceed($product, true, true);
    }

}