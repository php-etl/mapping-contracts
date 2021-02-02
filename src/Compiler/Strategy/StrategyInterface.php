<?php

namespace Kiboko\Contract\Mapping\Compiler\Strategy;

use Kiboko\Contract\Mapping\CompilableMapperInterface;
use Kiboko\Contract\Metadata\ClassMetadataInterface;
use Symfony\Component\PropertyAccess\PropertyPathInterface;

interface StrategyInterface
{
    public function buildTree(PropertyPathInterface $outputPath, ClassMetadataInterface $class, CompilableMapperInterface ...$mappers): array;
}
