<?php

namespace Abds\MaincoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Abds\MaincoreBundle\Entity\personal
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Abds\MaincoreBundle\Entity\personalRepository")
 */
class personal
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
     * @var integer $user_id
     *
     * @ORM\Column(name="user_id", type="integer")
     */
    private $user_id;

    /**
     * @var text $personal
     *
     * @ORM\Column(name="personal", type="text")
     */
    private $personal;

	/**
     * @var text $personal
     *
     * @ORM\Column(name="title", type="string", length="50")
     */
    private $title;

    /**
     * @var date $last_modified
     *
     * @ORM\Column(name="last_modified", type="date")
     */
    private $last_modified;


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
     * Set user_id
     *
     * @param integer $userId
     */
    public function setUserId($userId)
    {
        $this->user_id = $userId;
    }

    /**
     * Get user_id
     *
     * @return integer
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Set personal
     *
     * @param text $personal
     */
    public function setPersonal($personal)
    {
        $this->personal = $personal;
    }

    /**
     * Get personal
     *
     * @return text
     */
    public function getPersonal()
    {
        return $this->personal;
    }

    /**
     * Set last_modified
     *
     * @param date $lastModified
     */
    public function setLastModified($lastModified)
    {
        $this->last_modified = $lastModified;
    }

	public function setTitle($title)
	{
		$this->title = $title;
	}

	public function getTitle()
	{
		return $this->title;
	}

    /**
     * Get last_modified
     *
     * @return date
     */
    public function getLastModified()
    {
        return $this->last_modified;
    }
}