<?php declare(strict_types=1);

namespace Kiboko\Contract\Mapping;

use Symfony\Component\PropertyAccess\PropertyPathInterface;

interface MapperInterface
{
    public function __invoke($input, $output, PropertyPathInterface $outputPath);
}
