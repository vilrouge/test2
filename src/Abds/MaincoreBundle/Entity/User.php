<?php

namespace Abds\MaincoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Abds\MaincoreBundle\Entity\User
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Abds\MaincoreBundle\Entity\UserRepository")
 */
class User
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
     * @var string $username
     *
     * @ORM\Column(name="username", type="string", length=22)
     */
    private $username;

    /**
     * @var string $password
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;

    /**
     * @var date $birthdate
     *
     * @ORM\Column(name="birthdate", type="date")
     */
    private $birthdate;

    /**
     * @var smallint $is_valid
     *
     * @ORM\Column(name="is_valid", type="smallint")
     */
    private $is_valid;

    /**
     * @var string $gender
     *
     * @ORM\Column(name="gender", type="string", length=20)
     */
    private $gender;

    /**
     * @var int $region
     *
     * @ORM\Column(name="region", type="integer")
     */
    private $region;

    /**
     * @var int $type
     *
     * @ORM\Column(name="type", type="integer")
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
     * Set username
     *
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set birthdate
     *
     * @param date $birthdate
     */
    public function setBirthdate($birthdate)
    {
        $this->birthdate = $birthdate;
    }

    /**
     * Get birthdate
     *
     * @return date
     */
    public function getBirthdate()
    {
        return $this->birthdate;
    }

    /**
     * Set is_valid
     *
     * @param smallint $isValid
     */
    public function setIsValid($isValid)
    {
        $this->is_valid = $isValid;
    }

    /**
     * Get is_valid
     *
     * @return smallint
     */
    public function getIsValid()
    {
        return $this->is_valid;
    }

    /**
     * Set gender
     *
     * @param string $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * Get gender
     *
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set region
     *
     * @param string $region
     */
    public function setRegion($region)
    {
        $this->region = $region;
    }

    /**
     * Get region
     *
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
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