<?
try {
  $dsn = 'mysql:host=db;dbname=sample;';
  $db = new PDO($dsn, 'root', 'root');
  $sql = 'show databases;';
  $stmt = $db->prepare($sql);
  $stmt->execute();
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  var_dump($result);
} catch (PDOException $e) {
    echo $e->getMessage();
    exit;
}