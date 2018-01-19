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
 * @ORM\Entity(repositoryClass="PrestaShopBundle\Entity\Repository\FeatureRepository")
 */
class Feature
{
    /**
     * @var integer
     *
     * @ORM\Id
     * @ORM\Column(name="id_lang", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="position", type="integer")
     */
    protected $position;

    /**
     * Stores the feature name in several languages
     *
     * @ORM\OneToMany(targetEntity="PrestaShopBundle\Entity\FeatureLanguage", mappedBy="feature")
     */
    protected $featureLanguages;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets the position
     *
     * @param integer $position
     *
     * @return Feature
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Gets the position
     *
     * @return integer
     */
    public function getPosition()
    {
        return $this->position;
    }
}
