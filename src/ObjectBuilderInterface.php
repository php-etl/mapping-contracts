<?php

namespace Kiboko\Contract\Mapping;

interface ObjectBuilderInterface extends CompositedMapperBuilderInterface
{
    public function arguments(string ...$expressions): ObjectBuilderInterface;
}
