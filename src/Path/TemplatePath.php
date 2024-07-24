<?php

declare(strict_types=1);

namespace Ghostwriter\Phtml\Path;

use Ghostwriter\Phtml\Interface\Path\TemplatePathInterface;
use Override;

final readonly class TemplatePath implements TemplatePathInterface
{
    public function __construct(
        private string $path,
    ) {
    }

    #[Override]
    public function toString(): string
    {
        return $this->path;
    }

    public static function new(string $path): self
    {
        return new self($path);
    }
}