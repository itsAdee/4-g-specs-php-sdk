<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Controllers;

use Core\Request\Parameters\BodyParam;
use Core\Request\Parameters\HeaderParam;
use Core\Request\Parameters\QueryParam;
use Core\Response\Types\ErrorType;
use CoreInterfaces\Core\Request\RequestMethod;
use VerizonLib\Exceptions\RestErrorResponseException;
use VerizonLib\Http\ApiResponse;
use VerizonLib\Models\NotificationReportRequest;
use VerizonLib\Models\RequestResponse;
use VerizonLib\Server;

class DeviceMonitoringController extends BaseController
{
    /**
     * @param NotificationReportRequest $body Create Reachability Report Request
     *
     * @return ApiResponse Response from the API call
     */
    public function deviceReachability(NotificationReportRequest $body): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/m2m/v1/diagnostics/basic/devicereachability')
            ->server(Server::THINGSPACE)
            ->auth('thingspace_oauth')
            ->parameters(HeaderParam::init('Content-Type', 'application/json'), BodyParam::init($body));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('Error Response', RestErrorResponseException::class))
            ->type(RequestResponse::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * @param string $accountName The numeric name of the account.
     * @param string[] $monitorIds The array contains the monitorIDs (UUID) for which the monitor is
     *        to be deleted.
     *
     * @return ApiResponse Response from the API call
     */
    public function stopDeviceReachability(string $accountName, array $monitorIds): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::DELETE, '/m2m/v1/diagnostics/basic/devicereachability')
            ->server(Server::THINGSPACE)
            ->auth('thingspace_oauth')
            ->parameters(
                QueryParam::init('accountName', $accountName),
                QueryParam::init('monitorIds', $monitorIds)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('Error Response', RestErrorResponseException::class))
            ->type(RequestResponse::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
