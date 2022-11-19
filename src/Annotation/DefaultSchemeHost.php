<?php

declare(strict_types=1);

namespace BEAR\Sunday\Annotation;

use Attribute;
use Doctrine\Common\Annotations\Annotation\NamedArgumentConstructor;
use Ray\Di\Di\Qualifier;

/**
 * @Annotation
 * @Target("METHOD")
 * @Qualifier
 * @NamedArgumentConstructor
 */
#[Attribute(Attribute::TARGET_METHOD | Attribute::TARGET_PARAMETER | Attribute::TARGET_PROPERTY), Qualifier]
final class DefaultSchemeHost
{
    /** @var ?string */
    public $value;

    public function __construct(string|null $value = null)
    {
        $this->value = $value;
    }
}
