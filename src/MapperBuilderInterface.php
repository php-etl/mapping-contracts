<?php declare(strict_types=1);

namespace Kiboko\Contract\Mapping;

interface MapperBuilderInterface
{
    public function getMapper(): MapperInterface;
    public function end(): ?MapperBuilderInterface;
}
