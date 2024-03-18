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
use Core\Response\Types\ErrorType;
use CoreInterfaces\Core\Request\RequestMethod;
use VerizonLib\Exceptions\ConnectivityManagementResultException;
use VerizonLib\Http\ApiResponse;
use VerizonLib\Models\DeviceManagementResult;
use VerizonLib\Models\NotificationReportStatusRequest;
use VerizonLib\Models\RetrieveMonitorsRequest;
use VerizonLib\Server;

class DeviceDiagnosticsController extends BaseController
{
    /**
     * If the devices do not already exist in the account, this API resource adds them before activation.
     *
     * @param NotificationReportStatusRequest $body Retrieve Reachability Report Status for a
     *        device.
     *
     * @return ApiResponse Response from the API call
     */
    public function deviceReachabilityStatusUsingPOST(NotificationReportStatusRequest $body): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::POST,
            '/m2m/v1/diagnostics/basic/devicereachability/status'
        )
            ->server(Server::THINGSPACE)
            ->auth('thingspace_oauth')
            ->parameters(HeaderParam::init('Content-Type', 'application/json'), BodyParam::init($body));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('Error response.', ConnectivityManagementResultException::class))
            ->type(DeviceManagementResult::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Retrieve all the active monitors.
     *
     * @param RetrieveMonitorsRequest $body Retrieve Monitor Request.
     *
     * @return ApiResponse Response from the API call
     */
    public function retrieveActiveMonitorsUsingPOST(RetrieveMonitorsRequest $body): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::POST,
            '/m2m/v1/diagnostics/basic/devicereachability/monitors'
        )
            ->server(Server::THINGSPACE)
            ->auth('thingspace_oauth')
            ->parameters(HeaderParam::init('Content-Type', 'application/json'), BodyParam::init($body));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('Error response.', ConnectivityManagementResultException::class))
            ->type(DeviceManagementResult::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
