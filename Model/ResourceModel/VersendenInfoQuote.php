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
namespace Dhl\Versenden\Model\ResourceModel;

use Dhl\Versenden\Api\Data\VersendenInfoQuoteInterface;
use Dhl\Versenden\Setup\InstallSchema;
use \Magento\Framework\Model\AbstractModel;
use \Magento\Framework\Model\ResourceModel\Db\AbstractDb;

/**
 * Dhl Versenden Info Resource Model
 *
 * @category Dhl
 * @package  Dhl\Versenden
 * @author   Benjamin Heuer <benjamin.heuer@netresearch.de>
 * @license  http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     http://www.netresearch.de/
 */
class VersendenInfoQuote extends AbstractDb
{
    /**
     * Resource initialization.
     */
    protected function _construct()
    {
        $this->_init(InstallSchema::TABLE_VERSENDEN_INFO_QUOTE, VersendenInfoQuoteInterface::VERSENDEN_INFO_ID);
    }

    /**
     * @param AbstractModel $object
     *
     * @return $this
     * @throws \Exception
     */
    public function save(AbstractModel $object)
    {
        $this->_isPkAutoIncrement = false;

        parent::save($object);

        return $this;
    }

}