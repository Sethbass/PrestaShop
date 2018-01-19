<?php
/**
 * 2007-2017 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2017 PrestaShop SA
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 */


namespace PrestaShopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="PrestaShopBundle\Entity\Repository\FeatureValueRepository")
 */
class FeatureValue
{
    /**
     * @var integer
     *
     * @ORM\Id
     * @ORM\Column(name="id_feature_value", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="PrestaShopBundle\Entity\Feature")
     * @ORM\JoinColumn(name="id_feature", referencedColumnName="id_feature", nullable=false)
     */
    protected $feature;

    /**
     * Is the value custom
     *
     * @var boolean
     */
    protected $custom;

    /**
     * Gets the id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets the feature
     *
     * @param Feature $feature
     *
     * @return FeatureValue
     */
    public function setFeature($feature)
    {
        $this->feature = $feature;

        return $this;
    }

    /**
     * Gets the feature
     *
     * @return Feature
     */
    public function getFeature()
    {
        return $this->feature;
    }

    /**
     * Sets as a custom value
     *
     * @param boolean $custom
     * @return FeatureValue
     */
    public function setCustom($custom)
    {
        $this->custom = $custom;

        return $this;
    }

    /**
     * Gets the customization status
     *
     * @return bool
     */
    public function getCustom()
    {
        return $this->custom;
    }
}
