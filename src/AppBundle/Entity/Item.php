<?php

namespace AppBundle\Entity;

/**
 * Created by
 * User: Natalia Y. Chilikina
 * Date: 22/04/2017
 * Time: 15:09
 */

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="item")
 */
class Item
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $name;

    /**
     * @ORM\Column(type="decimal", scale=2)
     */
    private $type;

    /**
     * @ORM\Column(type="decimal", scale=2)
     */
    private $style;

    /**
     * @ORM\Column(type="decimal", scale=2)
     */
    private $color;

    /**
     * @ORM\Column(type="text")
     */
    private $tags;

    /**
     * @ORM\Column(type="boolean")
     */
    private $is_base;

    /**
     * @ORM\Column(type="boolean")
     */
    private $is_washing;

    /**
     * @ORM\Column(type="boolean")
     */
    private $is_delete;

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
     * Set name
     *
     * @param string $name
     *
     * @return Item
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Item
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set style
     *
     * @param string $style
     *
     * @return Item
     */
    public function setStyle($style)
    {
        $this->style = $style;

        return $this;
    }

    /**
     * Get style
     *
     * @return string
     */
    public function getStyle()
    {
        return $this->style;
    }

    /**
     * Set color
     *
     * @param string $color
     *
     * @return Item
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get color
     *
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set tags
     *
     * @param string $tags
     *
     * @return Item
     */
    public function setTags($tags)
    {
        $this->tags = $tags;

        return $this;
    }

    /**
     * Get tags
     *
     * @return string
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Set isBase
     *
     * @param boolean $isBase
     *
     * @return Item
     */
    public function setIsBase($isBase)
    {
        $this->is_base = $isBase;

        return $this;
    }

    /**
     * Get isBase
     *
     * @return boolean
     */
    public function getIsBase()
    {
        return $this->is_base;
    }

    /**
     * Set isWashing
     *
     * @param boolean $isWashing
     *
     * @return Item
     */
    public function setIsWashing($isWashing)
    {
        $this->is_washing = $isWashing;

        return $this;
    }

    /**
     * Get isWashing
     *
     * @return boolean
     */
    public function getIsWashing()
    {
        return $this->is_washing;
    }

    /**
     * Set isDelete
     *
     * @param boolean $isDelete
     *
     * @return Item
     */
    public function setIsDelete($isDelete)
    {
        $this->is_delete = $isDelete;

        return $this;
    }

    /**
     * Get isDelete
     *
     * @return boolean
     */
    public function getIsDelete()
    {
        return $this->is_delete;
    }
}
