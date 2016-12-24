<?php

namespace EmanueleMinotto\NaughtyValidator;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

/**
 * Validator for naughty strings.
 */
class NotNaughtyValidator extends ConstraintValidator
{
    /**
     * {@inheritdoc}
     */
    public function validate($value, Constraint $constraint)
    {
        if (empty(trim($value))) {
            return;
        }

        $data = json_decode(
            file_get_contents(__DIR__.'/../data/blns.json'),
            true
        );

        if (in_array($value, $data, true)) {
            $this->context->addViolation($constraint->message);
        }
    }
}
