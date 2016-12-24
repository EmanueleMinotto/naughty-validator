<?php

namespace EmanueleMinotto\NaughtyValidator;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

class NotNaughtyValidatorTest extends TestCase
{
    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        $this->executionContext = $this->createMock(ExecutionContextInterface::class);

        $this->validator = new NotNaughtyValidator();
        $this->validator->initialize($this->executionContext);
    }

    /**
     * @param string $value
     * @param bool   $expected
     *
     * @dataProvider valuesDataProvider
     */
    public function testValidate($value, $expected)
    {
        $constraint = new NotNaughty();

        $this->executionContext
            ->expects($this->exactly($expected ? 1 : 0))
            ->method('addViolation')
            ->with($constraint->message, []);

        $this->validator->validate($value, $constraint);
    }

    public static function valuesDataProvider()
    {
        yield [null, false];
        yield ['', false];
        yield ['true', true];
        yield ['test', false];

        $values = json_decode(
            file_get_contents(__DIR__.'/../data/blns.json'),
            true
        );

        foreach ($values as $value) {
            yield [$value, !empty(trim($value))];
        }
    }
}
