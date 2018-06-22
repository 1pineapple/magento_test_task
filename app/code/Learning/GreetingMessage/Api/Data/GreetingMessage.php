<?php


namespace Learning\GreetingMessage\Api\Data;


interface GreetingMessage
{
    const GREETING_ID               = 'greeting_id';
    const MESSAGE                   = 'message';
    const DATETIME                  = 'date';
    const USERNAME                  = 'username';


    /**
     * Get GREETING_ID
     *
     * @return int|null
     */
    public function getGreetingId();

    /**
     * Get ListMessages
     *
     * @return string|null
     */
    public function getMessage();

    /**
     * Get Date time
     *
     * @return string|null
     */
    public function getDateTime();

    /**
     * Get Username
     *
     * @return string|null
     */
    public function getUsername();


    /**
     * Set ListMessages
     *
     * @param string $message
     * @return $this
     */
    public function setMessage($message);

    /**
     * Set Date time
     *
     * @param string $date
     * @return $this
     */
    public function setDateTime($date);

    /**
     * Set Username
     *
     * @param int $username
     * @return $this
     */
    public function setUsername($username);




}