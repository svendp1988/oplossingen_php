<?php 

namespace entities;

use model\ModelException;

class Message{
	private $id;
	private $contents;

    /**
     * Message constructor.
     * @param $id
     * @param $contents
     * @throws \model\ModelException
     */
    private function __construct($id, $contents)
    {
        if ($id <= 0 || "" === $contents) {
            throw new ModelException("Wrong input");
        }
        $this->id = $id;
        $this->contents = $contents;
    }

    /**
     * @throws ModelException
     */
    public static function make($id, $contents): Message
    {
        return new self($id, $contents);
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
    public function getContents()
    {
        return $this->contents;
    }


}
