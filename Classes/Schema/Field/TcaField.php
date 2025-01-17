<?php

declare(strict_types=1);

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

namespace TYPO3\CMS\ContentBlocks\Schema\Field;

use TYPO3\CMS\ContentBlocks\FieldConfiguration\FieldType;

/**
 * @internal Not part of TYPO3's public API.
 */
final class TcaField implements FieldTypeInterface
{
    public function __construct(
        private readonly FieldType $fieldType,
        private readonly string $name,
        private readonly array $columnConfig,
    ) {}

    public function getType(): FieldType
    {
        return $this->fieldType;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getColumnConfig(): array
    {
        return $this->columnConfig;
    }
}
