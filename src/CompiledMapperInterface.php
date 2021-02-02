<?php declare(strict_types=1);

namespace Kiboko\Contract\Mapping;

interface CompiledMapperInterface
{
    public function __invoke($input, $output = null);
}
