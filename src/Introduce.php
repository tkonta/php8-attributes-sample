<?php declare(strict_types=1);

namespace tkonta\Php8AttributesSample;

use ReflectionClass;

class Introduce
{
    /**
     * @param Family $family
     */
    public function __construct(
        private readonly Family $family,
    )
    {
    }

    /**
     * @param string $context
     * @return void
     * @throws \ReflectionException
     */
    public function talk(string $context): void
    {
        $ref = new ReflectionClass($this->family);
        foreach ($ref->getMethods() as $method) {
            $attributes = $method->getAttributes(MyAttribute::class);
            if (!$attributes) {
                continue;
            }

            foreach ($attributes as $attribute) {
                /** @var MyAttribute $myAttribute */
                $myAttribute = $attribute->newInstance();
                if ($myAttribute->getContext() == $context) {
                    $value = $method->invokeArgs($this->family, []);
                    print("こんにちは。{$value}です\n");
                }
            }
        }
    }
}
