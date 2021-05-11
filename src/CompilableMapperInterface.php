<?php declare(strict_types=1);

namespace Kiboko\Contract\Mapping;

use PhpParser\Node;

interface CompilableMapperInterface extends MapperInterface, CompilableInterface
{
    public function addContextVariable(Node\Expr\Variable $variable): CompilableInterface;
}
