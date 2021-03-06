<?php
/**
 * Represents a process being managed by the server directory.
 *
 * Copyright (c) 2011 Eric Barr <eb@anhstudios.com>
 */

namespace Anh\SwgManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="entity")
 */
class Entity
{
    /**
     * @ORM\Id
     * @ORM\Column(type="bigint")
     * @ORM\generatedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\OneToOne(targetEntity="EntityTemplate")
     * @ORM\JoinColumn(name="template_id", referencedColumnName="id")
     */
    protected $template;
    
    /**
     * @ORM\Column(type="bigint")
     */
    protected $parent_id;

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
     * Set template
     *
     * @param Anh\SwgManagerBundle\Entity\EntityTemplate $template
     */
    public function setTemplate(\Anh\SwgManagerBundle\Entity\EntityTemplate $template)
    {
        $this->template = $template;
    }

    /**
     * Get template
     *
     * @return Anh\SwgManagerBundle\Entity\EntityTemplate 
     */
    public function getTemplate()
    {
        return $this->template;
    }

    /**
     * Set parent_id
     *
     * @param bigint $parentId
     */
    public function setParentId($parentId)
    {
        $this->parent_id = $parentId;
    }

    /**
     * Get parent_id
     *
     * @return bigint 
     */
    public function getParentId()
    {
        return $this->parent_id;
    }
}