<?php

namespace Abds\MaincoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Abds\MaincoreBundle\Entity\Game_User
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Abds\MaincoreBundle\Entity\Game_UserRepository")
 */
class Game_User
{
	/**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Abds\MaincoreBundle\Entity\Game")
     */
    private $game;

	/**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Abds\MaincoreBundle\Entity\User")
     */
    private $user;

	/**
     *
     * @ORM\ManyToOne(targetEntity="Abds\MaincoreBundle\Entity\Enjoy")
     */
	private $enjoy;



	public function getGame()
	{
		return $this->game;
	}

	public function setGame(Abds\MaincoreBundle\Entity\Game $game)
	{
		$this->game = $game;
	}

	public function getUser()
	{
		return $this->user;
	}

	public function setUser(Abds\MaincoreBundle\Entity\User $user)
	{
		$this->user = $user;
	}

	public function getEnjoy()
	{
		return $this->enjoy;
	}

	public function setEnjoy(Abds\MaincoreBundle\Entity\Enjoy $enjoy)
	{
		$this->enjoy = $enjoy;
	}
}