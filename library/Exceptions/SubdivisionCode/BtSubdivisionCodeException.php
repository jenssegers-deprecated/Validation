<?php

/*
 * This file is part of Respect/Validation.
 *
 * (c) Alexandre Gomes Gaigalas <alexandre@gaigalas.net>
 *
 * For the full copyright and license information, please view the "LICENSE.md"
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Respect\Validation\Exceptions\SubdivisionCode;

use Respect\Validation\Exceptions\SubdivisionCodeException;

/**
 * Exception class for subdivision codes of Bhutan.
 *
 * ISO 3166-1 alpha-2: BT
 *
 * @author Henrique Moody <henriquemoody@gmail.com>
 */
final class BtSubdivisionCodeException extends SubdivisionCodeException
{
    /**
     * {@inheritdoc}
     */
    public static $defaultTemplates = [
        self::MODE_DEFAULT => [
            self::STANDARD => '{{name}} must be a subdivision code of Bhutan',
        ],
        self::MODE_NEGATIVE => [
            self::STANDARD => '{{name}} must not be a subdivision code of Bhutan',
        ],
    ];
}
