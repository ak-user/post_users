<?php

    $link = mysqli_connect("localhost", "root", "", "my_first_data");

    if (mysqli_connect_errno()) {
        echo "У Вас помилка номер(".mysqli_connect_errno().") ".mysqli_connect_error();
    }
    // POST

    $insert = mysqli_query($link,"INSERT INTO users (id, full_name, password) VALUES ('NULL', '{$_POST['full_name']}', '{$_POST['password']}')");

    if ($insert){
        echo "OK";
    } else {
        echo "NO";
        mysqli_close($link);
    };

    // GET
    function get_users () {
        global $link;
        $sql = "SELECT * FROM users";
        $result = mysqli_query($link, $sql );
        $users = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $users;
    }

    $data_users = get_users();