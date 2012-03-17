<?php

namespace Abds\MaincoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Abds\MaincoreBundle\Entity\Region
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Abds\MaincoreBundle\Entity\RegionRepository")
 */
class Region
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
     * @var string $Region
     *
     * @ORM\Column(name="Region", type="string", length=50)
     */
    private $Region;


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
     * Set Region
     *
     * @param string $region
     */
    public function setRegion($region)
    {
        $this->Region = $region;
    }

    /**
     * Get Region
     *
     * @return string 
     */
    public function getRegion()
    {
        return $this->Region;
    }
}