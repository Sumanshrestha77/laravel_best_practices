<?php

namespace App\Services;

use Illuminate\Support\Carbon;

class DateConversionService
{
    public function converttoNepaliDate($englishDate)
    {
        $date = Carbon::parse($englishDate);
        $nepaliDate = $date->addyears(56)->addMonths(8)->addDays(15);
        return $nepaliDate->format('Y-m-d');
    }
}
