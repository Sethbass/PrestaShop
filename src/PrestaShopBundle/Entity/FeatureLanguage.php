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
 * @ORM\Entity(repositoryClass="PrestaShopBundle\Entity\Repository\FeatureLanguageRepository")
 */
class FeatureLanguage
{
    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="PrestaShopBundle\Entity\Feature", inversedBy="featureLanguages")
     * @ORM\JoinColumn(name="id_feature", referencedColumnName="id_feature", nullable=false)
     */
    protected $feature;

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
     * Gets the id will return the full feature
     *
     * @return integer
     */
    public function getId()
    {
        return $this->feature;
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
}
