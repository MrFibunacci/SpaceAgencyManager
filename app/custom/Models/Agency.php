<?php
    namespace app\custom\Models;

    use app\framework\Component\http\Model\Model;
    use app\framework\Component\StdLib\SingletonTrait;

    class Agency extends Model
    {
        use SingletonTrait;

        protected $table = 'agency';

        protected $connection = 'mysql';

        public function getAgencyByUserID($userID)
        {
            return $this->DB()->select('*', ['creatorId' => $userID]);
        }

        function getTransactions($agencyID)
        {
            return $this->DB()->select('*', ['agency' => $agencyID], 'transactions');
        }
    }