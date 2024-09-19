<?php

namespace Exceedone\Exment\Services\ViewFilter\Items\DayOn;

use Exceedone\Exment\Enums\FilterOption;

class DayToday extends DayOnBase
{
    public static function getFilterOption()
    {
        return FilterOption::DAY_TODAY;
    }

    protected function getTargetDay($query_value)
    {
        return \Carbon\Carbon::today();
    }


    /**
     * compare 2 value
     *
     * @param mixed $value
     * @param mixed $conditionValue condition value. Sometimes, this value is not set(Ex. check value is not null)
     * @return boolean is match, return true
     */
    protected function _compareValue($value, $conditionValue): bool
    {
        return \Carbon\Carbon::parse($value)->isToday();
    }
}
