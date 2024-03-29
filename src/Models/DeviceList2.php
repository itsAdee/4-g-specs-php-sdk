<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models;

use stdClass;

class DeviceList2 implements \JsonSerializable
{
    /**
     * @var ESIMDeviceId[]|null
     */
    private $ids;

    /**
     * Returns Ids.
     *
     * @return ESIMDeviceId[]|null
     */
    public function getIds(): ?array
    {
        return $this->ids;
    }

    /**
     * Sets Ids.
     *
     * @maps ids
     *
     * @param ESIMDeviceId[]|null $ids
     */
    public function setIds(?array $ids): void
    {
        $this->ids = $ids;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        if (isset($this->ids)) {
            $json['ids'] = $this->ids;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
