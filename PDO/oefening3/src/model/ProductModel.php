<?php 
namespace model;
use \PDO;
use \Exception;
class ProductModel{
    private $pdo;
    public function __construct(PDO $pdo){
        $this->pdo=$pdo;
    }

    public function getAllProducts(){
        try{
            $statement = $this->pdo->query('select * from product');
            $resultSet = array();
            while ($row = $statement->fetch()) {
                $result = array('id' => $row['id'], 'name' => $row['name'], 'weight' => $row['weight']);
                $resultSet[] = $result;
            }
        } catch(Exception $e){
            throw new ModelException();
        }
        return $resultSet;
    }

    public function deleteProduct($id){
        try{
            $statement = $this->pdo->prepare('delete from product where id = :id');
            $statement->bindParam(':id', $id, PDO::PARAM_STR);
            return $statement->execute();
        } catch(Exception $e){
            throw new ModelException();
        }
    }
}
