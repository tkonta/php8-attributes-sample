<?php declare(strict_types=1);

namespace tkonta\Php8AttributesSample;

use Attribute;

#[Attribute(Attribute::IS_REPEATABLE | Attribute::TARGET_METHOD)]
class MyAttribute
{
    /**
     * @param string $context 場面ごとの使い分け
     */
    public function __construct(
        private readonly string $context,
    )
    {
    }

    /**
     * @return string
     */
    public function getContext(): string
    {
        return $this->context;
    }
}
