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

namespace TYPO3\CMS\ContentBlocks\FieldConfiguration;

/**
 * @internal Not part of TYPO3's public API.
 */
trait WithLabelAndDescription
{
    private ?string $label = null;
    private ?string $description = null;

    protected function setLabelAndDescription(array $tca = []): array
    {
        if ($this->label !== null && $this->label !== '') {
            $tca['label'] = $this->label;
        }
        if ($this->description !== null) {
            $tca['description'] = $this->description;
        }
        return $tca;
    }
}
