<?php

namespace Abds\MaincoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Abds\MaincoreBundle\Entity\Album_Photo
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Abds\MaincoreBundle\Entity\Album_PhotoRepository")
 */
class Album_Photo
{
    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Abds\MaincoreBundle\Entity\Album")
     */
    private $album;

	/**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Abds\MaincoreBundle\Entity\Picture")
     */
    private $picture;


	public function getAlbum()
	{
		return $this->album;
	}

	public function setAlbum(Abds\MaincoreBundle\Entity\Album $album)
	{
		$this->album = $album;
	}

	public function getPicture()
	{
		return $this->picture;
	}

	public function setPicture(Abds\MaincoreBundle\Entity\Picture $picture)
	{
		$this->picture = $picture;
	}
}