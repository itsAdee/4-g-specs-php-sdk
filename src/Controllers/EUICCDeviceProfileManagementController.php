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
use VerizonLib\Exceptions\RestErrorResponseException;
use VerizonLib\Http\ApiResponse;
use VerizonLib\Models\DeviceManagementResult;
use VerizonLib\Models\ProfileChangeStateRequest;
use VerizonLib\Models\RequestResponse;
use VerizonLib\Server;

class EUICCDeviceProfileManagementController extends BaseController
{
    /**
     * Downloads an eUICC local profile to devices and enables the profile.
     *
     * @param ProfileChangeStateRequest $body Device Profile Query
     *
     * @return ApiResponse Response from the API call
     */
    public function downloadLocalProfileToEnable(ProfileChangeStateRequest $body): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::POST,
            '/m2m/v1/devices/profile/actions/download_enable'
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
     * Downloads an eUICC local profile to devices and leaves the profile disabled.
     *
     * @param ProfileChangeStateRequest $body Device Profile Query
     *
     * @return ApiResponse Response from the API call
     */
    public function downloadLocalProfileToDisable(ProfileChangeStateRequest $body): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::POST,
            '/m2m/v1/devices/profile/actions/download_disable'
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
     * Enable a local profile that has been downloaded to eUICC devices.
     *
     * @param ProfileChangeStateRequest $body Update state
     *
     * @return ApiResponse Response from the API call
     */
    public function enableLocalProfile(ProfileChangeStateRequest $body): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/m2m/v1/devices/profile/actions/enable')
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
     * Disable a local profile on eUICC devices. The default or boot profile will become the enabled
     * profile.
     *
     * @param ProfileChangeStateRequest $body Update state
     *
     * @return ApiResponse Response from the API call
     */
    public function disableLocalProfile(ProfileChangeStateRequest $body): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/m2m/v1/devices/profile/actions/disable')
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
     * Delete a local profile from eUICC devices. If the local profile is enabled, it will first be
     * disabled and the boot or default profile will be enabled.
     *
     * @param ProfileChangeStateRequest $body Update state
     *
     * @return ApiResponse Response from the API call
     */
    public function deleteLocalProfile(ProfileChangeStateRequest $body): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/m2m/v1/devices/profile/actions/delete')
            ->server(Server::THINGSPACE)
            ->auth('thingspace_oauth')
            ->parameters(HeaderParam::init('Content-Type', 'application/json'), BodyParam::init($body));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('Error Response', RestErrorResponseException::class))
            ->type(RequestResponse::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
