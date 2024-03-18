<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models;

use Core\Utils\CoreHelper;
use Exception;
use stdClass;

/**
 * The category of application client.
 */
class ClientTypeEnum
{
    public const V2_X = 'V2X';

    public const COMPUTERVISION = 'ComputerVision';

    public const MACHINELEARNING = 'MachineLearning';

    public const IOT = 'IoT';

    public const GAMING = 'Gaming';

    public const AR = 'AR';

    public const VR = 'VR';

    public const ANALYTICS = 'Analytics';

    public const ROBOTICS = 'Robotics';

    private const _ALL_VALUES = [
        self::V2_X,
        self::COMPUTERVISION,
        self::MACHINELEARNING,
        self::IOT,
        self::GAMING,
        self::AR,
        self::VR,
        self::ANALYTICS,
        self::ROBOTICS
    ];

    /**
     * Ensures that all the given values are present in this Enum.
     *
     * @param array|stdClass|null|string $value Value or a list/map of values to be checked
     *
     * @return array|null|string Input value(s), if all are a part of this Enum
     *
     * @throws Exception Throws exception if any given value is not in this Enum
     */
    public static function checkValue($value)
    {
        $value = json_decode(json_encode($value), true); // converts stdClass into array
        if (CoreHelper::checkValueOrValuesInList($value, self::_ALL_VALUES)) {
            return $value;
        }
        throw new Exception("$value is invalid for ClientTypeEnum.");
    }
}