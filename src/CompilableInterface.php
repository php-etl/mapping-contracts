<?php declare(strict_types=1);

namespace Kiboko\Contract\Mapping;

use PhpParser\Node;

interface CompilableInterface
{
    public function addContextVariable(Node\Expr\Variable $variable): CompilableInterface;

    /**
     * @return Node[]
     */
    public function compile(Node\Expr $outputNode): array;
}
