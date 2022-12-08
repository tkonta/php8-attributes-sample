<?php declare(strict_types=1);

namespace tkonta\Php8AttributesSample;

class Family
{
    /**
     * @param string $parentUserName 親の名前
     * @param string $userName 自分の名前
     */
    public function __construct(
        private readonly string $parentUserName,
        private readonly string $userName,
    )
    {
    }

    /**
     * @return string
     */
    #[MyAttribute(context: '家族紹介')]
    public function getParentUserName(): string
    {
        return $this->parentUserName;
    }

    /**
     * @return string
     */
    #[MyAttribute(context: '自己紹介')]
    #[MyAttribute(context: '家族紹介')]
    public function getUserName(): string
    {
        return $this->userName;
    }
}
