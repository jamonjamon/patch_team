<?php
    require_once __DIR__ . '/database.php';
    require_once __DIR__ . '/functions.php';
    $patch_id = $_POST['patch_id'] ?? '';
    $team_id = $_POST['team'];
    

    $sql = "UPDATE patches SET team = '$team_id' WHERE patch_id = '$patch_id';";

    if ($db->query($sql) === TRUE) {
     //   $last_id = $db->insert_id;
    //    header('Location: in_patch.php?id=' . $last_id); 
        header('Location: ../pages/compile-team.php?id='.$patch_id);
        echo "returned";
      //  echo "Error: " . $sql . "<br>" . $db->error;
    }
    else{
        echo "That didn't save to the database";
    }
    $db->close();
?>