<?php declare(strict_types=1);

namespace Kiboko\Contract\Mapping;

use Symfony\Component\PropertyAccess\PropertyPathInterface;

/**
 * @template InputType
 * @template OutputType
 * @template ReturnType
 */
interface ObjectInitializerInterface
{
    /**
     * @param InputType $input
     * @param null|OutputType $output
     * @param PropertyPathInterface<string> $propertyPath
     *
     * @return ReturnType
     */
    public function __invoke($input, $output, PropertyPathInterface $propertyPath);
}
