<?php
namespace Nadeem\ClearCart\Plugin\Frontend\Checkout\Block\Cart;

use Magento\Framework\UrlInterface;
use Magento\Checkout\Block\Cart\Sidebar;

class SidebarPlugin
{
    /**
     * @var UrlInterface
     */
    protected $url;

    /**
     * ConfigPlugin constructor.
     * @param UrlInterface $url
     */
    public function __construct(
        UrlInterface $url
    ) {
        $this->url = $url;
    }

    /**
     * @param Sidebar $subject
     * @param array $result
     * @return array
     */
    public function afterGetConfig(
        Sidebar $subject,
        array $result
    ) {
        $result['emptyMiniCart'] = $this->url->getUrl('minicart/cart/EmptyCart');
        return $result;
    }
}
