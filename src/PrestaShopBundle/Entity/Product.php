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

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="PrestaShopBundle\Entity\Repository\ProductRepository")
 */
class Product
{
    /**
     * @var integer
     *
     * @ORM\Id
     * @ORM\Column(name="id_product", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * Enumerated (enum) product condition (new, used, refurbished)
     *
     * @var string
     *
     * @ORM\Column(type="enumProductCondition")
     */
    protected $condition;

    /**
     * All the product properties that should be translated such as :
     * - Description
     * - Description Short
     * - Link rewrite
     * - Meta Description
     * - Meta keywords
     * - Meta title
     * - Name
     * - Available now
     * - Available later
     * - Delivery in stock
     * - Delivery out of stock
     *
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="PrestaShopBundle\Entity\ProductLanguage", mappedBy="product")
     */
    protected $productLanguages;

    /**
     * Product features
     *
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="PrestaShopBundle\Entity\ProductFeature", mappedBy="product")
     */
    protected $productFeatures;

    /**
     * Product categories
     *
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="PrestaShopBundle\Entity\ProductCategory", mappedBy="product")
     */
    protected $categories;

    /**
     * Product accessories
     *
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="PrestaShopBundle\Entity\ProductAccessory", mappedBy="product")
     */
    protected $accessories;

    /**
     * Product Manufacturer
     *
     * @var Manufacturer
     *
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="PrestaShopBundle\Entity\Manufacturer")
     * @ORM\JoinColumn(name="id_manufacturer", referencedColumnName="id_manufacturer", nullable=true)
     */
    protected $manufacturer;

    /**
     * Product activation status
     *
     * @var boolean
     *
     * @ORM\Column(name="active", type="boolean")
     */
    protected $active;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->productLanguages = new ArrayCollection();
        $this->productFeatures = new ArrayCollection();
        $this->categories = new ArrayCollection();
        $this->accessories = new ArrayCollection();
    }
}
