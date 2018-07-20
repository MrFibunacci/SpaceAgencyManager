<?php
    namespace app\custom\Http\Controller;

    use app\framework\Component\Validation\ValidationTrait;
    use app\custom\Models\Agency;

    /**
     * The general controller for the web page stuff. So every
     * thing that got nothing to do with the game it self
     * @package app\custom\Http\Controller
     */
    class SAM
    {
        use ValidationTrait;

        static function index()
        {
            view("index", [
                // there should never be more than one result, so we just hard code this
                'agencyID' => Agency::getInstance()->getAgencyByUserID($_SESSION['userID'])[0]['id']
            ]);
        }

        public function registerUser(array $userData)
        {
            //TODO: add logic to register user
            //dd($userData);
        }

        public static function login()
        {
            $_SESSION['is_loggedIn'] = true;
            $_SESSION['userID'] = 1;
            $_SESSION['name'] = 'MrFibunacci';
            $_SESSION['email'] = 'mrfibunacci@gmail.com';

            header('Location: /');exit();
        }

        public static function logout()
        {
            if($_SESSION['is_loggedIn']) {
                $_SESSION['is_loggedIn'] = false;
                unset($_SESSION['userID']);
                unset($_SESSION['name']);
                unset($_SESSION['email']);
            }

            header('Location: /');exit();
        }
    }