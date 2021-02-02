<?php declare(strict_types=1);

namespace Kiboko\Contract\Mapping;

interface CompositedMapperBuilderInterface extends MapperBuilderInterface
{
    public function children(): CompositeBuilderInterface;
}
