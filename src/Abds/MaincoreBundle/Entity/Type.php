<?php

namespace Abds\MaincoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Abds\MaincoreBundle\Entity\Type
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Abds\MaincoreBundle\Entity\TypeRepository")
 */
class Type
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $type
     *
     * @ORM\Column(name="type", type="string", length=50)
     */
    private $type;


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
     * Set type
     *
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
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
}