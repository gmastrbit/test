<?php

// виведення даних з форми
// if ($_POST) {
//     echo '<pre>';
//     echo htmlspecialchars(print_r($_POST, true));
//     echo '</pre>';
// }

// кукіси
// if (isset($_COOKIE['count'])) {
//     $count = $_COOKIE['count'] + 1;
// } else {
//     $count = 1;
// }
// setcookie('count', $count, time()+3600);
// setcookie("Cart[$count]", $item, time()+3600);

// виведення даних із форми автентифікації
// if (!isset($_SERVER['PHP_AUTH_USER'])) {
//     header('WWW-Authenticate: Basic realm="My Realm"');
//     header('HTTP/1.0 401 Unauthorized');
//     echo 'Текст, отправляемый в том случае,
//     если пользователь нажал кнопку Cancel';
//     exit;
// } else {
//     echo "<p>Hello, {$_SERVER['PHP_AUTH_USER']}.</p>";
//     echo "<p>Вы ввели пароль {$_SERVER['PHP_AUTH_PW']}.</p>";
// }


// авторизація за допомогою HTTP
// $realm = 'Запретная зона';
//user => password
// $users = array('admin' => 'mypass', 'guest' => 'guest');
// if (empty($_SERVER['PHP_AUTH_DIGEST'])) {
//     header('HTTP/1.1 401 Unauthorized');
//     header('WWW-Authenticate: Digest realm="'.$realm.
//            '",qop="auth",nonce="'.uniqid().'",opaque="'.md5($realm).'"');
//     die('Текст, отправляемый в том случае, если пользователь нажал кнопку Cancel');
// }
// // анализируем переменную PHP_AUTH_DIGEST
// if (!($data = http_digest_parse($_SERVER['PHP_AUTH_DIGEST'])) ||
//     !isset($users[$data['username']]))
//     die('Неправильные данные!');
// // генерируем корректный ответ
// $A1 = md5($data['username'] . ':' . $realm . ':' . $users[$data['username']]);
// $A2 = md5($_SERVER['REQUEST_METHOD'].':'.$data['uri']);
// $valid_response = md5($A1.':'.$data['nonce'].':'.$data['nc'].':'.$data['cnonce'].':'.$data['qop'].':'.$A2);
// if ($data['response'] != $valid_response)
//     die('Неправильные данные!');
// // все хорошо, логин и пароль верны
// echo 'Вы вошли как: ' . $data['username'];
// // функция разбора заголовка http auth
// function http_digest_parse($txt)
// {
//     // защита от отсутствующих данных
//     $needed_parts = array('nonce'=>1, 'nc'=>1, 'cnonce'=>1, 'qop'=>1, 'username'=>1, 'uri'=>1, 'response'=>1);
//     $data = array();
//     $keys = implode('|', array_keys($needed_parts));
//     preg_match_all('@(' . $keys . ')=(?:([\'"])([^\2]+?)\2|([^\s,]+))@', $txt, $matches, PREG_SET_ORDER);
//     foreach ($matches as $m) {
//         $data[$m[1]] = $m[3] ? $m[3] : $m[4];
//         unset($needed_parts[$m[1]]);
//     }
//     return $needed_parts ? false : $data;
// }

// echo "Привет, $_GET[name]!"; // Первый вариант
// $name = $_GET[name];
// echo "<br>".$name;

 if (!empty($_GET["name"])&&!empty($_GET["age"])) 
 { echo " Получены новые вводные: имя - ".$_GET["name"].", возраст - ".$_GET["age"]." лет";} 
 else { echo "Переменные не дошли. Проверьте все еще раз."; }
?>

<!DOCTYPE html>
<html>
    <head> 
        <title> Test </title>
        <link rel="stylesheet" href="style.css">
        <!-- <link rel="shortcut icon" href="ico.ico" type="image/x-icon"> -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <br><br><br><br>
        <form action="" method="post">
            Имя:  <input type="text" name="personal[name]" /><br />
            Email: <input type="text" name="personal[email]" /><br />
            Пиво: <br />
            <select multiple name="beer[]">
                <option value="warthog">Warthog</option>
                <option value="guinness">Guinness</option>
                <option value="stuttgarter">Stuttgarter Schwabenbräu</option>
            </select><br />
            <input type="submit" value="Отправь меня!" />
        </form>
    </body>
</html>