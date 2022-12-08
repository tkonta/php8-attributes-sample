<?php
declare(strict_types=1);

use tkonta\Php8AttributesSample\Family;
use tkonta\Php8AttributesSample\Introduce;

require __DIR__ . '/vendor/autoload.php';

function main()
{
    $family = new Family('山田父', '山田息子');
    $introduce = new Introduce($family);

    print_r("context: 自己紹介\n");
    $introduce->talk("自己紹介");

    print_r("------\n");

    print_r("context: 家族紹介\n");
    $introduce->talk("家族紹介");
}

if (basename(__FILE__) == basename($_SERVER['PHP_SELF'])) {
    main();
}
