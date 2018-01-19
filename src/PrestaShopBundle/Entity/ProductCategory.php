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
 * ProductFeature
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="PrestaShopBundle\Entity\Repository\ProductCategoryRepository")
 */
class ProductCategory
{
    /**
     * Product
     *
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="PrestaShopBundle\Entity\Product", inversedBy="productFeatures")
     * @ORM\JoinColumn(name="id_feature", referencedColumnName="id_feature", nullable=false)
     */
    protected $product;

    /**
     * Category
     *
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="PrestaShopBundle\Entity\Category")
     * @ORM\JoinColumn(name="id_category", referencedColumnName="id_category", nullable=false)
     */
    protected $category;

    /**
     * Position
     *
     * @var integer
     *
     * @ORM\Column(name="position", type="integer")
     */
    protected $position;

    /**
     * Gets the id will return the full feature
     *
     * @return integer
     */
    public function getId()
    {
        return $this->category;
    }

    /**
     * Sets the category
     *
     * @param Category $category
     * @return ProductCategory
     */
    public function setCategory(Category $category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Gets the product
     *
     * @return Product
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Sets the product
     *
     * @param Product $product
     * @return ProductCategory
     */
    public function setProduct(Product $product)
    {
        $this->product = $product;

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

    /**
     * Sets the position
     *
     * @param integer $position
     * @return ProductCategory
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }
}
