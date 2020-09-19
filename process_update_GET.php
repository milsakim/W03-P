<?php
  if (isset($_GET['id'])) {
    var_dump($_GET['id']);

    $link = mysqli_connect("localhost", "root", "kimhj0314", "dbp");
    $query = "
    UPDATE book
    SET
      title={$_GET['title']},
      author={$_GET['author']},
      summary={$_GET['summary']}
    WHERE id={$_GET['id']}
    ";
    $result = mysqli_query($link, $query);

    if ($result) {
      echo "Success";
    }
  }

  if (isset($_GET['title'])) {
    var_dump($_GET['title']);
  }

  if (isset($_GET['author'])) {
    var_dump($_GET['author']);
  }

  if (isset($_GET['summary'])) {
    var_dump($_GET['summary']);
  }
?>

<!DOCTYPE html>
<html>
</html>
