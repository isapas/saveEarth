<?php
  function getUserMessages() {
    $db = dbconnect();
    $query = $db->query('SELECT * FROM messages WHERE userID =? ');
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    $query->closeCursor();
    return $result;
  }

  function getMessagebyId($id) {
    $db = dbconnect();
    $query = $db->query('SELECT * FROM messages WHERE id =? ');
    $result = $query->fetchall(PDO::FETCH_ASSOC);
    $query->closeCursor();
    return $result;
  }

   function addMessage() {
     $db = dbconnect();
     $query = $db-> prepare('INSERT INTO messages (date, object, senderPseudo, getterPseudo, content) VALUES (NOW(), :object, :senderPseudo, :getterPseudo, :content)');
     $result = $query->execute(
       array(
         'date' => $message['date'],
         'object' => $message['object'],
         'senderPseudo' => $message['senderPseudo'],
         'getterPseudo' => $message['getterPseudo'],
         'content' => $message['content']
         )
       );
      $query-> closeCursor();
      return $result;
    }

    function deleteMessage() {
      $db = dbconnect();
      $query = $db->prepare('DELETE FROM messages WHERE messageID= ?');
      $result = $query->execute(array($message));
      $query -> closeCursor();
      return $result;
      }

 ?>
