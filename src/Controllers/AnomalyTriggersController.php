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
use Core\Request\Parameters\TemplateParam;
use Core\Response\Types\ErrorType;
use CoreInterfaces\Core\Request\RequestMethod;
use VerizonLib\Exceptions\IntelligenceResultException;
use VerizonLib\Http\ApiResponse;
use VerizonLib\Models\AnomalyDetectionTrigger;
use VerizonLib\Models\CreateTriggerRequest;
use VerizonLib\Models\GetTriggerResponseList;
use VerizonLib\Models\UpdateTriggerRequest;
use VerizonLib\Server;

class AnomalyTriggersController extends BaseController
{
    /**
     * This corresponds to the M2M-MC SOAP interface, ```GetTriggers```.
     *
     * @return ApiResponse Response from the API call
     */
    public function listAnomalyDetectionTriggers(): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/m2m/v1/triggers')
            ->server(Server::THINGSPACE)
            ->auth('thingspace_oauth');

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('Bad request', IntelligenceResultException::class))
            ->throwErrorOn('401', ErrorType::init('Unauthorized', IntelligenceResultException::class))
            ->throwErrorOn('403', ErrorType::init('Forbidden', IntelligenceResultException::class))
            ->throwErrorOn(
                '404',
                ErrorType::init('Not Found / Does not exist', IntelligenceResultException::class)
            )
            ->throwErrorOn(
                '406',
                ErrorType::init('Format / Request Unacceptable', IntelligenceResultException::class)
            )
            ->throwErrorOn('429', ErrorType::init('Too many requests', IntelligenceResultException::class))
            ->throwErrorOn('0', ErrorType::init('Error response', IntelligenceResultException::class))
            ->type(GetTriggerResponseList::class, 1)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This corresponds to the M2M-MC SOAP interface, ```UpdateTriggerRequest```.
     *
     * @param UpdateTriggerRequest $body Update Trigger Request
     *
     * @return ApiResponse Response from the API call
     */
    public function updateAnomalyDetectionTrigger(UpdateTriggerRequest $body): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::PUT, '/m2m/v1/triggers')
            ->server(Server::THINGSPACE)
            ->auth('thingspace_oauth')
            ->parameters(HeaderParam::init('Content-Type', 'application/json'), BodyParam::init($body));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('Bad request', IntelligenceResultException::class))
            ->throwErrorOn('401', ErrorType::init('Unauthorized', IntelligenceResultException::class))
            ->throwErrorOn('403', ErrorType::init('Forbidden', IntelligenceResultException::class))
            ->throwErrorOn(
                '404',
                ErrorType::init('Not Found / Does not exist', IntelligenceResultException::class)
            )
            ->throwErrorOn(
                '406',
                ErrorType::init('Format / Request Unacceptable', IntelligenceResultException::class)
            )
            ->throwErrorOn('429', ErrorType::init('Too many requests', IntelligenceResultException::class))
            ->throwErrorOn('0', ErrorType::init('Error response', IntelligenceResultException::class))
            ->type(AnomalyDetectionTrigger::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This corresponds to the M2M-MC SOAP interface, ```CreateTrigger```.
     *
     * @param CreateTriggerRequest $body Create Trigger Request
     *
     * @return ApiResponse Response from the API call
     */
    public function createAnomalyDetectionTrigger(CreateTriggerRequest $body): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/m2m/v1/triggers')
            ->server(Server::THINGSPACE)
            ->auth('thingspace_oauth')
            ->parameters(HeaderParam::init('Content-Type', 'application/json'), BodyParam::init($body));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('Bad request', IntelligenceResultException::class))
            ->throwErrorOn('401', ErrorType::init('Unauthorized', IntelligenceResultException::class))
            ->throwErrorOn('403', ErrorType::init('Forbidden', IntelligenceResultException::class))
            ->throwErrorOn(
                '404',
                ErrorType::init('Not Found / Does not exist', IntelligenceResultException::class)
            )
            ->throwErrorOn(
                '406',
                ErrorType::init('Format / Request Unacceptable', IntelligenceResultException::class)
            )
            ->throwErrorOn('429', ErrorType::init('Too many requests', IntelligenceResultException::class))
            ->throwErrorOn('0', ErrorType::init('Error response', IntelligenceResultException::class))
            ->type(AnomalyDetectionTrigger::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This corresponds to the M2M-MC SOAP interface, ```GetTriggers```.
     *
     * @param string $triggerId trigger ID
     *
     * @return ApiResponse Response from the API call
     */
    public function listAnomalyDetectionTriggerSettings(string $triggerId): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/m2m/v1/triggers/{triggerId}')
            ->server(Server::THINGSPACE)
            ->auth('thingspace_oauth')
            ->parameters(TemplateParam::init('triggerId', $triggerId));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('Bad request', IntelligenceResultException::class))
            ->throwErrorOn('401', ErrorType::init('Unauthorized', IntelligenceResultException::class))
            ->throwErrorOn('403', ErrorType::init('Forbidden', IntelligenceResultException::class))
            ->throwErrorOn(
                '404',
                ErrorType::init('Not Found / Does not exist', IntelligenceResultException::class)
            )
            ->throwErrorOn(
                '406',
                ErrorType::init('Format / Request Unacceptable', IntelligenceResultException::class)
            )
            ->throwErrorOn('429', ErrorType::init('Too many requests', IntelligenceResultException::class))
            ->throwErrorOn('0', ErrorType::init('Error response', IntelligenceResultException::class))
            ->type(GetTriggerResponseList::class, 1)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Deletes a specific trigger ID
     *
     * @param string $triggerId The trigger ID to be deleted
     *
     * @return ApiResponse Response from the API call
     */
    public function deleteAnomalyDetectionTrigger(string $triggerId): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::DELETE, '/m2m/v1/triggers/{triggerId}')
            ->server(Server::THINGSPACE)
            ->auth('thingspace_oauth')
            ->parameters(TemplateParam::init('triggerId', $triggerId));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('0', ErrorType::init('Error response', IntelligenceResultException::class))
            ->type(AnomalyDetectionTrigger::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }
}