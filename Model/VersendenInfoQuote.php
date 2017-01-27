<?php
/**
 * Dhl Versenden
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to
 * newer versions in the future.
 *
 * PHP version 7
 *
 * @category  Dhl
 * @package   Dhl\Versenden
 * @author    Benjamin Heuer <benjamin.heuer@netresearch.de>
 * @copyright 2017 Netresearch GmbH & Co. KG
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      http://www.netresearch.de/
 */
namespace Dhl\Versenden\Model;

use \Dhl\Versenden\Api\Data\VersendenInfoQuoteInterface;
use \Magento\Framework\Model\AbstractModel;

/**
 * Dhl Versenden Info Model
 *
 * @category Dhl
 * @package  Dhl\Versenden
 * @author   Benjamin Heuer <benjamin.heuer@netresearch.de>
 * @license  http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     http://www.netresearch.de/
 */
class VersendenInfoQuote extends AbstractModel implements VersendenInfoQuoteInterface
{
    protected $_cacheTag = 'dhl_versenden_info_quote';
    protected $_eventPrefix = 'dhl_versenden_info_quote';

    /**
     * Init resource model.
     */
    protected function _construct()
    {
        parent::_construct();

        $this->_init(\Dhl\Versenden\Model\ResourceModel\VersendenInfoQuote::class);
    }

    /**
     * @return int
     */
    public function getQuoteAddressId()
    {
        return (int)$this->getData(self::VERSENDEN_INFO_ID);
    }

    /**
     * @param int $quoteAddressId
     *
     * @return self
     */
    public function setQuoteAddressId($quoteAddressId)
    {
        return $this->setData(self::VERSENDEN_INFO_ID, $quoteAddressId);
    }

    /**
     * @return string
     */
    public function getDhlVersendenInfo()
    {
        return $this->getData(self::VERSENDEN_INFO_FIELD);
    }

    /**
     * @param string $dhlVersendenInfo
     *
     * @return self
     */
    public function setDhlVersendenInfo($dhlVersendenInfo)
    {
        return $this->setData(self::VERSENDEN_INFO_FIELD, $dhlVersendenInfo);
    }
}