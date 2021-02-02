<?php

namespace Kiboko\Contract\Mapping\Compiler;

use Kiboko\Contract\Mapping\ClassMetadataInterface;
use Symfony\Component\PropertyAccess\PropertyPathInterface;

interface CompilationContextInterface
{
    public function getPropertyPath(): PropertyPathInterface;

    public function getFilePath(): ?string;

    public function getClass(): ?ClassMetadataInterface;
    public function getNamespace(): ?string;
    public function getClassName(): ?string;
}
