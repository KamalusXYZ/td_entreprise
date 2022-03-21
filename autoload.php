<?php

declare(strict_types=1);

spl_autoload_register(
    fn (string $className): int => require $className . '.php'
);