<?php

use Carbon\Carbon;

if(!function_exists('carbon')) {

    /**
     * Create a carbon instance from a string.
     *
     * Alias of {@see Carbon::parse()}.
     *
     * @param string|null               $time
     * @param \DateTimeZone|string|null $tz
     *
     * @return \Carbon\Carbon
     */
    function carbon($time = null, $tz = null)
    {
        return Carbon::parse($time, $tz);
    }

}