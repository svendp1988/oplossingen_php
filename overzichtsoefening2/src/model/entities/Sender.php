<?php namespace entities;

use model\ModelException;

class Sender{
	private $id;
	private $name;
	private $messages;

    /**
     * Sender constructor.
     * @param $id
     * @param $name
     * @param $messages
     * @throws ModelException
     */
    private function __construct($id, $name)
    {
        if ($id <= 0 || "" === $name) {
            throw new ModelException("Invalid input");
        }
        $this->id = $id;
        $this->name = $name;
        $this->messages = array();
    }

    /**
     * @throws ModelException
     */
    public static function make($id, $name): Sender
    {
        return new self($id, $name);
    }

    public function addMessage(Message $message)
    {
        $this->messages[] = $message;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    public function countNumberOfMessages(): int
    {
        return count($this->messages);
    }

    public function getMessageByIndex($index): Message
    {
        return $this->messages[$index];
    }
}
