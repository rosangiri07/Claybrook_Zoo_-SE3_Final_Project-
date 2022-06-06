<?php
class AnimalFunctions{
    public $table;
    
    function __construct($table)
    {
        $this->table = $table;
    }
    
    function find($field, $value) {
        global $pdo;
        $query = 'SELECT * FROM '.$this->table.' WHERE '. $field .' = :value';
        $stmt = $pdo->prepare($query);
        $criteria = [
                'value' => $value
        ];
        $stmt->execute($criteria);
        return $stmt;
    }
    
    function findAll() {
        global $pdo;
        $stmt = $pdo->prepare('SELECT * FROM ' . $this->table );

        $stmt->execute();

        return $stmt;
    }

    function archive($id, $archive,$pk)
    {
        global $pdo;

        $update ="UPDATE $this->table SET archived = :archive";
        $update .=" WHERE $pk = :id";

        $critero = ['id'=> (int)$id,
                    'archive' => $archive ];

        $stmt = $pdo->prepare($update);
        $stmt->execute($critero);
    }

    function findAllAnimals($archive) {
    	global $pdo;
        
        if ($archive == '0' || $archive == '1') {
            $query = 'SELECT * FROM animals a JOIN categories c ON c.categoryId = a.categoryId WHERE a.archived = :archive';
            $stmt = $pdo->prepare($query);
            $criteria = [ 'archive' => $archive ];
            $stmt->execute($criteria);
        } else {
            $query = 'SELECT * FROM animals a JOIN categories c ON c.categoryId = a.categoryId';
            $stmt = $pdo->prepare($query);
            $stmt->execute();
        }

        return $stmt;
    }

     function findAnimal($a_id, $c_id) {
    	global $pdo;

        $query = 'SELECT * FROM animals a JOIN categories c ON c.categoryId = a.categoryId ';

        if ($c_id == '1') {
        	$query = $query . ' JOIN mammals m ON a.animalId = m.animalId WHERE a.animalId = :animalId';
        } else if ($c_id == '2') {
        	$query = $query . ' JOIN birds b ON a.animalId = b.animalId WHERE a.animalId = :animalId';        	
        } else if ($c_id == '3') {
        	$query = $query . ' JOIN fishes f ON a.animalId = f.animalId WHERE a.animalId = :animalId';
        } else if ($c_id == '4') {
        	$query = $query . ' JOIN repamp ra ON a.animalId = ra.animalId WHERE a.animalId = :animalId';
        }

        $stmt = $pdo->prepare($query);
        $criteria = [
                'animalId' => $a_id
        ];
        $stmt->execute($criteria);
        // var_dump($stmt); die();
        return $stmt;
    }

    function searchAnimals($a_id, $c_id) {
        global $pdo;

        if ($c_id == 'all') {
            $query = 'SELECT * FROM animals a JOIN categories c ON c.categoryId = a.categoryId WHERE a.speciesName LIKE "%":animalId"%"';
        } else if ($c_id == '1') {
            $query = 'SELECT * FROM animals a JOIN categories c ON c.categoryId = a.categoryId JOIN mammals m ON a.animalId = m.animalId WHERE a.speciesName LIKE "%":animalId"%"';
        } else if ($c_id == '2') {
            $query = 'SELECT * FROM animals a JOIN categories c ON c.categoryId = a.categoryId JOIN birds b ON a.animalId = b.animalId WHERE a.speciesName LIKE "%":animalId"%"';         
        } else if ($c_id == '3') {
            $query = 'SELECT * FROM animals a JOIN categories c ON c.categoryId = a.categoryId JOIN fishes f ON a.animalId = f.animalId WHERE a.speciesName LIKE "%":animalId"%"';
        } else if ($c_id == '4') {
            $query = 'SELECT * FROM animals a JOIN categories c ON c.categoryId = a.categoryId JOIN repamp ra ON a.animalId = ra.animalId WHERE a.speciesName LIKE "%":animalId"%"';
        }

        $stmt = $pdo->prepare($query);
        $criteria = [
                'animalId' => $a_id
        ];
        $stmt->execute($criteria);
        
        return $stmt;
    }
}
?>