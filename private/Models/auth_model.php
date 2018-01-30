<?
function authUser($user_data) {
        session_start();
        $all_users = getAllUsers();

        foreach($all_users as $value) {
           if ($value['login'] == $user_data['login']) {
                if (password_verify($user_data['pwd'], $value['pwd'])) {
                    $_SESSION['auth'] = $value['state'];
                    $_SESSION['login'] = $value['login'];
                    return $value['state'];
                }
               
                return 'pwd is wrong';
            }
        }
        return 'user not found';
    }
?>