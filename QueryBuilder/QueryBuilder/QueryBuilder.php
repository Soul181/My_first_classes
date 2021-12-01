<?php
class QueryBuilder{
	
	protected $pdo;
	
	public function __construct($pdo)
	{
		$this->pdo = $pdo;
	}
	
	public function getAll($table)
	{
		$sql = "SELECT * FROM $table"; // формируем запрос
		$statement = $this->pdo->prepare($sql); // метод подготовки запроса
		$statement -> execute(); // выполнить запрос
		return $statement -> fetchAll(PDO::FETCH_ASSOC); // только ассоциативный массив
	}
	
	public function getOne($table, $id)
	{
		$sql = "SELECT * FROM $table WHERE id=:id "; // формируем запрос
		$statement = $this->pdo->prepare($sql); // метод подготовки запроса
		$statement -> bindValue(':id', $id);
		$statement -> execute(); // выполнить запрос
		return $statement -> fetch(PDO::FETCH_ASSOC); // только ассоциативный массив
	}
	
	public function create($table, $data)
	{
		$keys = implode(', ', array_keys($data));
		$tags = ":".implode(', :', array_keys($data));
		$sql = "INSERT INTO {$table} ({$keys}) VALUES ({$tags})";
		$statement = $this->pdo->prepare($sql);
		$statement -> execute($data);
	}
	
	public function update($table, $data, $id)
	{
		$keys = array_keys($data);
		foreach ($keys as $key){
			$result = $key.'=:'.$key.',';
			}
		$keys = rtrim($result, ",");
		$data['id'] = $id;
		$sql = "UPDATE {$table} SET {$keys} WHERE id=:id";
		$statement = $this->pdo->prepare($sql);
		$statement -> execute($data);
	}
	
	public function delete($table, $id)
	{
		$sql = "DELETE FROM {$table} WHERE id=:id";
		$statement = $this->pdo->prepare($sql);
		$statement -> execute(['id' => $id]);
	}
}
?>