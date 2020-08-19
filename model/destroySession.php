<?php


// $_SESSION = array();

// if (ini_get("session.use_cookies")) {
//     $params = session_get_cookie_params();
//     setcookie(session_name(), '', time() - 42000,
//         $params["path"], $params["domain"],
//         $params["secure"], $params["httponly"]
//     );
// }


// $PDO = db_connect();

// $_SESSION['logged_in'] = false;

// $sql = "UPDATE usuarios SET sessionLogin = 0 WHERE id = :id";
// $stmt = $PDO->prepare($sql);
// $stmt->bindParam(':id', $_SESSION['user_id']);
// $stmt->execute();


// session_destroy();







// require 'init.php';

// $PDO = db_connect();

// if(session_cache_expire(200)){
//     $_SESSION['logged_in'] = false;

//     $sql = "UPDATE usuarios SET sessionLogin = 0 WHERE id = :id";
//     $stmt = $PDO->prepare($sql);
//     $stmt->bindParam(':id', $_SESSION['user_id']);
//     $stmt->execute();

//     session_destroy();

//     header('Location: ../');
   
// }






// if($cache_expire == 0)
//     $PDO = db_connect();

//     $_SESSION['logged_in'] = false;

//     $sql = "UPDATE usuarios SET sessionLogin = 0 WHERE id = :id";
//     $stmt = $PDO->prepare($sql);
//     $stmt->bindParam(':id', $_SESSION['user_id']);
//     $stmt->execute();

//     session_destroy();

//     header('Location: ../');
// 



