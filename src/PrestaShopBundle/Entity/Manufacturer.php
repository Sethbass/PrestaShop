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
 * @ORM\Entity(repositoryClass="PrestaShopBundle\Entity\Repository\ManufacturerRepository")
 */
class Manufacturer
{
    /**
     * @var integer
     *
     * @ORM\Id
     * @ORM\Column(name="id_manufacturer", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * Name
     *
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=64)
     */
    protected $name;

    /**
     * Activation Status
     *
     * @var boolean
     *
     * @ORM\Column(name="active", type="boolean")
     */
    protected $active;

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
     * @return Manufacturer
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
     * @return Manufacturer
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
     * @return Manufacturer
     */
    public function setModificationDate($modificationDate)
    {
        $this->modificationDate = $modificationDate;

        return $this;
    }
}
