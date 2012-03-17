<?php

namespace Abds\MaincoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Abds\MaincoreBundle\Entity\Message
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Abds\MaincoreBundle\Entity\MessageRepository")
 */
class Message
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
     * @var integer $receiver_id
     *
     * @ORM\Column(name="receiver_id", type="integer")
     */
    private $receiver_id;

    /**
     * @var integer $sender_id
     *
     * @ORM\Column(name="sender_id", type="integer")
     */
    private $sender_id;

    /**
     * @var text $message
     *
     * @ORM\Column(name="message", type="text")
     */
    private $message;

    /**
     * @var date $date
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * @var smallint $is_read
     *
     * @ORM\Column(name="is_read", type="smallint")
     */
    private $is_read;


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
     * Set receiver_id
     *
     * @param integer $receiverId
     */
    public function setReceiverId($receiverId)
    {
        $this->receiver_id = $receiverId;
    }

    /**
     * Get receiver_id
     *
     * @return integer 
     */
    public function getReceiverId()
    {
        return $this->receiver_id;
    }

    /**
     * Set sender_id
     *
     * @param integer $senderId
     */
    public function setSenderId($senderId)
    {
        $this->sender_id = $senderId;
    }

    /**
     * Get sender_id
     *
     * @return integer 
     */
    public function getSenderId()
    {
        return $this->sender_id;
    }

    /**
     * Set message
     *
     * @param text $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    /**
     * Get message
     *
     * @return text 
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set date
     *
     * @param date $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * Get date
     *
     * @return date 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set is_read
     *
     * @param smallint $isRead
     */
    public function setIsRead($isRead)
    {
        $this->is_read = $isRead;
    }

    /**
     * Get is_read
     *
     * @return smallint 
     */
    public function getIsRead()
    {
        return $this->is_read;
    }
}