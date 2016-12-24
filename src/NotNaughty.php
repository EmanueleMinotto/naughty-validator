<?php

namespace EmanueleMinotto\NaughtyValidator;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class NotNaughty extends Constraint
{
    /**
     * Validation message for naughty strings.
     *
     * @var string
     */
    public $message = 'This value is not safe.';
}
