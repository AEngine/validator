<?php

namespace AEngine\Validator\Lead;

use AEngine\Validator\FilterRule;

class Escape extends FilterRule
{
    /**
     * Sanitizes escapes a string
     */
    public function __construct()
    {
    }

    public function __invoke(&$data, $field)
    {
        $value = &$data[$field];

        if (is_string($value)) {
            $value = str_replace(
                ['\'', '"', '>', '<', '`', '\\'],
                ['&#039;', '&#34;', '&#62;', '&#60;', '&#96;', '&#92;'],
                $value
            );
        }

        return true;
    }
}
