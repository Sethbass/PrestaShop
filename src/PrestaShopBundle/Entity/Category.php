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
 * @ORM\Entity(repositoryClass="PrestaShopBundle\Entity\Repository\CategoryRepository")
 */
class Category
{
    /**
     * @var integer
     *
     * @ORM\Id
     * @ORM\Column(name="id_category", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * Parent category
     *
     * @var Category
     *
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="PrestaShopBundle\Entity\Category", inversedBy="childCategories")
     * @ORM\JoinColumn(name="id_parent", referencedColumnName="id_category", nullable=true)
     */
    protected $parent;

    /**
     * Activation Status
     *
     * @var Shop
     *
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="PrestaShopBundle\Entity\Shop")
     * @ORM\JoinColumn(name="id_shop_default", referencedColumnName="id_shop", nullable=true)
     */
    protected $shopDefault;

    /**
     * Category level depth
     *
     * @var integer
     *
     * @ORM\Column(name="level_depth", type="integer")
     */
    protected $levelDepth;

    /**
     * TODO: Verify what it is about
     *
     * @var integer
     *
     * @ORM\Column(name="nleft", type="integer")
     */
    protected $nLeft;

    /**
     * TODO: Verify what it is about
     *
     * @var integer
     *
     * @ORM\Column(name="nright", type="integer")
     */
    protected $nRight;

    /**
     * Category position in the list
     *
     * @var integer
     *
     * @ORM\Column(name="position", type="integer")
     */
    protected $position;

    /**
     * Is the root category?
     *
     * @var boolean
     *
     * @ORM\Column(name="is_root_category", type="boolean")
     */
    protected $isRootCategory;

    /**
     * Creation date
     *
     * @var \DateTime
     *
     * @ORM\Column(name="date_add", type="datetime")
     */
    protected $creationDate;

    /**
     * Modification date
     *
     * @var \DateTime
     *
     * @ORM\Column(name="date_upd", type="datetime")
     */
    protected $modificationDate;

    /**
     * Activation status
     *
     * @var boolean
     *
     * @ORM\Column(name="active", type="boolean")
     */
    protected $active;

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
     * Gets the activation status
     *
     * @return bool
     */
    public function isActive()
    {
        return $this->active;
    }

    /**
     * Sets the activation status
     *
     * @param bool $active
     * @return Category
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Gets the creation date
     *
     * @return \DateTime
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * Sets the creation date
     *
     * @param \DateTime $creationDate
     * @return Category
     */
    public function setCreationDate($creationDate)
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    /**
     * Gets the modification date
     *
     * @return \DateTime
     */
    public function getModificationDate()
    {
        return $this->modificationDate;
    }

    /**
     * Sets the modification date
     *
     * @param \DateTime $modificationDate
     * @return Category
     */
    public function setModificationDate($modificationDate)
    {
        $this->modificationDate = $modificationDate;

        return $this;
    }

    /**
     * Gets the parent category
     *
     * @return Category
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Sets the parent category
     *
     * @param Category $parent
     * @return Category
     */
    public function setParent($parent)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Gets the default shop
     *
     * @return Shop
     */
    public function getShopDefault()
    {
        return $this->shopDefault;
    }

    /**
     * Sets the default shop
     *
     * @param Shop $shopDefault
     * @return Category
     */
    public function setShopDefault($shopDefault)
    {
        $this->shopDefault = $shopDefault;

        return $this;
    }

    /**
     * Gets the category level depth
     *
     * @return int
     */
    public function getLevelDepth()
    {
        return $this->levelDepth;
    }

    /**
     * Sets the category level depth
     *
     * @param int $levelDepth
     * @return Category
     */
    public function setLevelDepth($levelDepth)
    {
        $this->levelDepth = $levelDepth;

        return $this;
    }

    /**
     * Gets the n left
     *
     * @return int
     */
    public function getNLeft()
    {
        return $this->nLeft;
    }

    /**
     * Sets the n left
     *
     * @param int $nLeft
     * @return Category
     */
    public function setNLeft($nLeft)
    {
        $this->nLeft = $nLeft;

        return $this;
    }

    /**
     * Gets the n right
     *
     * @return int
     */
    public function getNRight()
    {
        return $this->nRight;
    }

    /**
     * Sets the n right
     *
     * @param int $nRight
     * @return Category
     */
    public function setNRight($nRight)
    {
        $this->nRight = $nRight;

        return $this;
    }

    /**
     * Gets the position
     *
     * @return int
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Sets the position
     *
     * @param int $position
     * @return Category
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Gets the root category status
     *
     * @return bool
     */
    public function isRootCategory()
    {
        return $this->isRootCategory;
    }

    /**
     * Sets as root category
     *
     * @param bool $isRootCategory
     * @return Category
     */
    public function setIsRootCategory($isRootCategory)
    {
        $this->isRootCategory = $isRootCategory;

        return $this;
    }
}
