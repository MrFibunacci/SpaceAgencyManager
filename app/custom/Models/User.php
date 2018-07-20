<?php

    namespace app\custom\Models;

    use app\framework\Component\http\Model\Model;
    use app\framework\Component\StdLib\SingletonTrait;

    class User extends Model
    {
        use SingletonTrait;

        protected $table = 'user';

        protected $connection = 'mysql';

        public function getByEmail(string $email)
        {
            return $this->select('*', ['email' => $email]);
        }
    }