<?php namespace repositories;

require_once "vendor/autoload.php";
use entities\Message;
use entities\Sender;
use model\ModelException;
use PDO;

class SenderRepository
{
    private $pdo;

    /**
     * SenderRepository constructor.
     * @param $pdo
     */
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getSenderById($id): ?Sender
    {
        try {
            $statement = $this->pdo->query("SELECT sender.name, message.id, message.contents FROM sender, message WHERE sender.id = message.sender_id and sender.id=" . $id);
            $result = array();
            while ($row = $statement->fetch()) {
                $result[] = $row;
            }
            $sender = Sender::make($id, $result[0]['name']);
            foreach ($result as $key => $value) {
                $message = Message::make($value['id'], $value['contents']);
                $sender->addMessage($message);
            }
            return $sender;
        } catch (\PDOException $exception) {
            throw new ModelException("PdoException occurred and caught", 0, $exception);
        }
        return null;
    }


}
