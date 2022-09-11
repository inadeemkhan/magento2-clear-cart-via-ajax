# Mage2 Module Nadeem ClearCart

    ``nadeem/module-clearcart``

 - [Main Functionalities](#markdown-header-main-functionalities)
 - [Installation](#markdown-header-installation)
 - [Configuration](#markdown-header-configuration)
 - [Specifications](#markdown-header-specifications)
 - [Attributes](#markdown-header-attributes)


## Main Functionalities
Magento2 extension to do cart empty on one button click | NadeemKhan

## Installation
\* = in production please use the `--keep-generated` option

### Type 1: Zip file

 - Unzip the zip file in `app/code/Nadeem`
 - Enable the module by running `php bin/magento module:enable Nadeem_ClearCart`
 - Apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`

### Type 2: Composer

 - Make the module available in a composer repository for example:
    - private repository `repo.magento.com`
    - public repository `packagist.org`
    - public github repository as vcs
 - Add the composer repository to the configuration by running `composer config repositories.repo.magento.com composer https://repo.magento.com/`
 - Install the module composer by running `composer require nadeem/module-clearcart`
 - enable the module by running `php bin/magento module:enable Nadeem_ClearCart`
 - apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`


## Configuration

 - is_enable (cart/general/is_enable)


## Specifications

 - Helper
	- Nadeem\ClearCart\Helper\Data

 - Plugin
	- afterGetConfig - Magento\Checkout\Block\Cart\Sidebar > Nadeem\ClearCart\Plugin\Frontend\Magento\Checkout\Block\Cart\Sidebar


## Attributes