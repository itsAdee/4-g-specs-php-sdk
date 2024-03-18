<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Controllers;

use Core\Request\Parameters\QueryParam;
use Core\Response\Types\ErrorType;
use CoreInterfaces\Core\Request\RequestMethod;
use VerizonLib\Exceptions\EdgeDiscoveryResultException;
use VerizonLib\Http\ApiResponse;
use VerizonLib\Models\ListMECPlatformsResult;
use VerizonLib\Models\ListRegionsResult;
use VerizonLib\Models\UserEquipmentIdentityTypeEnum;

class M5gEdgePlatformsController extends BaseController
{
    /**
     * Returns a list of optimal MEC Platforms where you can register your deployed application. **Note:**
     * If a query is sent with all of the parameters, it will fail with a "400" error. You can search based
     * on the following parameter combinations - region plus Service Profile ID and subscriber density
     * (density is optional but recommended), region plus UEIdentity(Including UEIdentity Type) or Service
     * Profile ID plus UEIdentity(Including UEIdentity Type).
     *
     * @param string|null $region MEC region name. Current valid values are US_WEST_2 and US_EAST_1.
     * @param string|null $serviceProfileId Unique identifier of the service profile.
     * @param int|null $subscriberDensity Minimum number of 4G/5G subscribers per square kilometer.
     * @param string|null $uEIdentityType Type of User Equipment identifier used in `UEIdentity`.
     * @param string|null $uEIdentity The identifier value for User Equipment. The type of
     *        identifier is defined by the 'UEIdentityType' parameter. The`IPAddress`format can be
     *        IPv4 or IPv6.
     *
     * @return ApiResponse Response from the API call
     */
    public function listMECPlatforms(
        ?string $region = null,
        ?string $serviceProfileId = null,
        ?int $subscriberDensity = null,
        ?string $uEIdentityType = null,
        ?string $uEIdentity = null
    ): ApiResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/mecplatforms')
            ->auth('oAuth2')
            ->parameters(
                QueryParam::init('region', $region),
                QueryParam::init('serviceProfileId', $serviceProfileId),
                QueryParam::init('subscriberDensity', $subscriberDensity),
                QueryParam::init('UEIdentityType', $uEIdentityType)
                    ->serializeBy([UserEquipmentIdentityTypeEnum::class, 'checkValue']),
                QueryParam::init('UEIdentity', $uEIdentity)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('HTTP 400 Bad Request.', EdgeDiscoveryResultException::class))
            ->throwErrorOn('401', ErrorType::init('HTTP 401 Unauthorized.', EdgeDiscoveryResultException::class))
            ->throwErrorOn(
                '0',
                ErrorType::init('HTTP 500 Internal Server Error.', EdgeDiscoveryResultException::class)
            )
            ->type(ListMECPlatformsResult::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * List the geographical regions available, based on the user's bearer token. **Note:** Country code,
     * Metropolitan area, Area and Zone are future functionality and will currently return a "null" value.
     *
     * @return ApiResponse Response from the API call
     */
    public function listRegions(): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/regions')->auth('oAuth2');

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('HTTP 400 Bad Request.', EdgeDiscoveryResultException::class))
            ->throwErrorOn('401', ErrorType::init('HTTP 401 Unauthorized.', EdgeDiscoveryResultException::class))
            ->throwErrorOn(
                '0',
                ErrorType::init('HTTP 500 Internal Server Error.', EdgeDiscoveryResultException::class)
            )
            ->type(ListRegionsResult::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
