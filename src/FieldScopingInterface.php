<?php declare(strict_types=1);

namespace Kiboko\Contract\Mapping;

/**
 * @template InputType
 * @template OutputType
 * @template ReturnType
 */
interface FieldScopingInterface
{
    /**
     * @param InputType $input
     * @param null|OutputType $output
     *
     * @return ReturnType
     */
    public function __invoke($input, $output);
}
