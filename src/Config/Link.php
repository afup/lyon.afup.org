<?php

declare(strict_types=1);

namespace Afup\Antenne\Config;

final readonly class Link
{
    public function __construct(
        public string $name,
        public string $url,
        public string $icon,
    ) {}
}
