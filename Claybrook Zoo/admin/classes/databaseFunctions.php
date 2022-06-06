<?php
class DatabaseFunctions{
    public $table;
    
    function __construct($table)
    {
        $this->table = $table;
    }
    
    function save($record,$pk='')
    { 
      try {
        $this->insert($record);
      } catch (Exception $e) {
        $this->edit($record,$pk);    
      }
        
    }
    function insert($record) {
        global $pdo;
        
        $keys = array_keys($record);

        $values = implode(', ', $keys);
        
        $valuesWithColon = implode(', :', $keys);
        
        $query = 'INSERT INTO ' . $this->table . ' (' . $values . ') VALUES (:' . $valuesWithColon . ')';     
      
        $stmt = $pdo->prepare($query);

        $stmt->execute($record);
        
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

    function delete($crit,$id)
    {
        global $pdo;
        $query = "DELETE FROM $this->table WHERE $crit =:id";
        $stmt = $pdo->prepare($query);

        $critero = ['id'=> $id];
        $stmt->execute($critero);
    }
    function edit($records,$pk)
    {
        global $pdo;
        $update ="UPDATE $this->table SET ";
        foreach ($records as $key => $value) {
            $paras[] = $key ." =:".$key;
        }
        $params = implode(',',$paras);
        $update .= $params;
        $update .=" WHERE $pk = :pk";
        $records['pk'] = $records[$pk]; 
        $stmt = $pdo->prepare($update);
        $stmt->execute($records);
    }

    function archive($id, $archive,$pk)
    {
        global $pdo;

        $update ="UPDATE $this->table SET archive = :archive";
        $update .=" WHERE $pk = :id";

        $critero = ['id'=> (int)$id,
                    'archive' => $archive ];

        $stmt = $pdo->prepare($update);
        $stmt->execute($critero);
    }

    function findLast($pk)
    {
        global $pdo;
        $query = 'SELECT * FROM '.$this->table.' ORDER BY '.$pk.' DESC';
        $last= $pdo->prepare($query);
        $last->execute();
        return $last;
    }

}
?>