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
 * ProductLanguage
 *
 * The aim of this entity is to store product properties that should be translated in different languages.
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="PrestaShopBundle\Entity\Repository\ProductLanguageRepository")
 */
class ProductLanguage
{
    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="PrestaShopBundle\Entity\Product", inversedBy="productLanguages")
     * @ORM\JoinColumn(name="id_product", referencedColumnName="id_product", nullable=false)
     */
    protected $product;

    /**
     * @ORM\Id
     * @ORM\Column(name="id_lang", type="integer")
     * @ORM\ManyToOne(targetEntity="PrestaShopBundle\Entity\Lang")
     * @ORM\JoinColumn(name="id_lang", referencedColumnName="id_lang", nullable=false, onDelete="CASCADE")
     */
    protected $language;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=128)
     */
    protected $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    protected $description;

    /**
     * @var string
     *
     * @ORM\Column(name="description_short", type="text")
     */
    protected $descriptionShort;

    /**
     * @var string
     *
     * @ORM\Column(name="link_rewrite", type="string", length=128)
     */
    protected $linkRewrite;

    /**
     * @var string
     *
     * @ORM\Column(name="meta_description", type="string", length=255)
     */
    protected $metaDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="meta_keywords", type="string", length=255)
     */
    protected $metaKeywords;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=128)
     */
    protected $metaTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="available_now", type="string", length=255)
     */
    protected $availableNow;

    /**
     * @var string
     *
     * @ORM\Column(name="available_later", type="string", length=255)
     */
    protected $availableLater;

    /**
     * @var string
     *
     * @ORM\Column(name="delivery_in_stock", type="string", length=255)
     */
    protected $deliveryInStock;

    /**
     * @var string
     *
     * @ORM\Column(name="delivery_out_stock", type="string", length=255)
     */
    protected $deliveryOutStock;


    /**
     * Gets the id will return the full product
     *
     * @return integer
     */
    public function getId()
    {
        return $this->product;
    }

    /**
     * Gets the translation language
     *
     * @return Lang
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Sets the translation language
     *
     * @param Lang $lang
     */
    public function setLang(Lang $lang)
    {
        $this->language = $lang;
    }

    /**
     * Gets the name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Gets the description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the description
     *
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Gets the short description
     *
     * @return string
     */
    public function getDescriptionShort()
    {
        return $this->descriptionShort;
    }

    /**
     * Sets the short description
     *
     * @param string $descriptionShort
     */
    public function setDescriptionShort($descriptionShort)
    {
        $this->descriptionShort = $descriptionShort;
    }

    /**
     * Gets the link rewrite
     *
     * @return string
     */
    public function getLinkRewrite()
    {
        return $this->linkRewrite;
    }

    /**
     * Sets the link rewrite
     *
     * @param string $linkRewrite
     */
    public function setLinkRewrite($linkRewrite)
    {
        $this->linkRewrite = $linkRewrite;
    }

    /**
     * Gets the meta description
     *
     * @return string
     */
    public function getMetaDescription()
    {
        return $this->metaDescription;
    }

    /**
     * Sets the meta description
     *
     * @param string $metaDescription
     */
    public function setMetaDescription($metaDescription)
    {
        $this->metaDescription = $metaDescription;
    }

    /**
     * Gets the meta keywords
     *
     * @return string
     */
    public function getMetaKeywords()
    {
        return $this->metaKeywords;
    }

    /**
     * Sets the meta keywords
     *
     * @param string $metaKeywords
     */
    public function setMetaKeywords($metaKeywords)
    {
        $this->metaKeywords = $metaKeywords;
    }

    /**
     * Gets the meta title
     *
     * @return string
     */
    public function getMetaTitle()
    {
        return $this->metaTitle;
    }

    /**
     * Sets the meta title
     *
     * @param string $metaTitle
     */
    public function setMetaTitle($metaTitle)
    {
        $this->metaTitle = $metaTitle;
    }

    /**
     * Gets the available now message
     *
     * @return string
     */
    public function getAvailableNow()
    {
        return $this->availableNow;
    }

    /**
     * Sets the available now message
     *
     * @param string $availableNow
     */
    public function setAvailableNow($availableNow)
    {
        $this->availableNow = $availableNow;
    }

    /**
     * Gets the available later message
     *
     * @return string
     */
    public function getAvailableLater()
    {
        return $this->availableLater;
    }

    /**
     * Sets the available later message
     *
     * @param string $availableLater
     */
    public function setAvailableLater($availableLater)
    {
        $this->availableLater = $availableLater;
    }

    /**
     * Gets the "in stock" message
     *
     * @return string
     */
    public function getDeliveryInStock()
    {
        return $this->deliveryInStock;
    }

    /**
     * Sets the "in stock" message
     *
     * @param string $deliveryInStock
     */
    public function setDeliveryInStock($deliveryInStock)
    {
        $this->deliveryInStock = $deliveryInStock;
    }

    /**
     * Gets the "out of stock" message
     *
     * @return string
     */
    public function getDeliveryOutStock()
    {
        return $this->deliveryOutStock;
    }

    /**
     * Sets the "out of stock" message
     *
     * @param string $deliveryOutStock
     */
    public function setDeliveryOutStock($deliveryOutStock)
    {
        $this->deliveryOutStock = $deliveryOutStock;
    }
}
