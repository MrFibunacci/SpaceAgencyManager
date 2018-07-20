<?php
    
    namespace app\custom\Http\Controller;

    use app\custom\Models\Agency as AgencyModel;
    use app\framework\Component\StdLib\StdObject\ArrayObject\ArrayObject;
    use app\framework\Component\StdLib\StdObject\DateTimeObject\DateTimeObject;

    class Finances
    {
        static function get(int $agencyID)
        {
            /*
            TODO: fix this method. Its shit.
            Edit: I think this is ugly code; make it beautiful.
            */
            $transactionData = AgencyModel::getInstance()->getTransactions($agencyID);
            $notEnoughData   = false;
            $dateLabels      = new ArrayObject([]);
            $financialData   = [];
            $incomeData      = [];
            $outcomeData     = [];
            $doughnutLabels  = [];

            if(count($transactionData) >= 6) {
                foreach ($transactionData as $transactionDatum) {
                    // get labels
                    $tempObj       = new DateTimeObject($transactionDatum['dateTime']);
                    $currDateLabel = $tempObj->format("M d");
                    $dateLabels->append($currDateLabel);

                    // get financial data
                    $currentDate = explode(" ", $transactionDatum['dateTime'])[0];
                    $amount      = floatval($transactionDatum['amount']);
                    $lastArrElem = 0.0;
                    foreach ($financialData as $key => $value) {
                        if($key == $currentDate ) {
                            $financialData[$key] += $lastArrElem+$amount;

                            $lastArrElem = floatval($value);
                            break;
                        }
                        $lastArrElem = floatval($value);
                    }
                    if ($key != $currentDate) $financialData[$currentDate] = $lastArrElem+$amount;

                    // get income
                    foreach ($incomeData as $key => $value) {
                        if(($key == $currentDate) && (0 < $amount)) {
                            $incomeData[$key] += $amount;
                            break;
                        }
                    }
                    if (0 < $amount) $incomeData[$currentDate] = $amount;

                    // get outcome
                    foreach ($outcomeData as $key => $value) {
                        if(($key == $currentDate) && (0 > $amount)) {
                            $outcomeData[$key] += $amount;
                            break;
                        }
                    }
                    if (0 > $amount) $outcomeData[$currentDate] = $amount;
                }
                $dateLabels->unique();

            } else { $notEnoughData = true; }

            view("finances", [
                'agencyID' => AgencyModel::getInstance()->getAgencyByUserID($_SESSION['userID'])[0]['id'],
                'notEnoughData' => $notEnoughData,
                'labels' => json_encode(array_values(array_filter($dateLabels->val()))),
                'transactions' => $transactionData,
                'financialDevGraphData' => json_encode(array_values(array_filter($financialData))),
                'incomeDevGraphData' => json_encode(array_values(array_filter($incomeData))),
                'outcomeDevGraphData' => json_encode(array_values(array_filter($outcomeData))),
                'doughnutLabels' => $doughnutLabels,
            ]);
        }
    }