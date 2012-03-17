<?php

namespace Abds\MaincoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Abds\MaincoreBundle\Entity\Picture
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Abds\MaincoreBundle\Entity\PictureRepository")
 */
class Picture
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
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=50)
     */
    private $name;

    /**
     * @var integer $user_id
     *
     * @ORM\Column(name="user_id", type="integer")
     */
    private $user_id;

    /**
     * @var date $upload_date
     *
     * @ORM\Column(name="upload_date", type="date")
     */
    private $upload_date;

    /**
     * @var smallint $is_private
     *
     * @ORM\Column(name="is_private", type="smallint")
     */
    private $is_private;


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
     */
    public function setName($name)
    {
        $this->name = $name;
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
     * Set upload_date
     *
     * @param date $uploadDate
     */
    public function setUploadDate($uploadDate)
    {
        $this->upload_date = $uploadDate;
    }

    /**
     * Get upload_date
     *
     * @return date 
     */
    public function getUploadDate()
    {
        return $this->upload_date;
    }

    /**
     * Set is_private
     *
     * @param smallint $isPrivate
     */
    public function setIsPrivate($isPrivate)
    {
        $this->is_private = $isPrivate;
    }

    /**
     * Get is_private
     *
     * @return smallint 
     */
    public function getIsPrivate()
    {
        return $this->is_private;
    }
}