<?php

namespace App\Controller\Component;

use Cake\Controller\Component;
use DateTime;

class DataComponent extends Component
{
    public function CorrigeData($data)
    {
        if (empty($data)) {
            return null;
        } else {
            $datetime = DateTime::createFromFormat('d/m/Y', $data);
            if ($datetime instanceof DateTime) {
                return $datetime->format('Y-m-d');
            } else {
                return null;
            }
        }
    }
}
