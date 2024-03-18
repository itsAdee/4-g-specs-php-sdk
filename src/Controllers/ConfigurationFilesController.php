<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Controllers;

use Core\Request\Parameters\FormParam;
use Core\Request\Parameters\QueryParam;
use Core\Request\Parameters\TemplateParam;
use Core\Response\Types\ErrorType;
use CoreInterfaces\Core\Request\RequestMethod;
use VerizonLib\Exceptions\FotaV2ResultException;
use VerizonLib\Http\ApiResponse;
use VerizonLib\Models\RetrievesAvailableFilesResponseList;
use VerizonLib\Models\UploadConfigurationFilesResponse;
use VerizonLib\Server;
use VerizonLib\Utils\FileWrapper;

class ConfigurationFilesController extends BaseController
{
    /**
     * You can retrieve a list of configuration or supplementary of files for an account.
     *
     * @param string $acc Account identifier.
     * @param string $distributionType Filter the distributionType to only retrieve files for a
     *        specific distribution type.
     *
     * @return ApiResponse Response from the API call
     */
    public function getListOfFiles(string $acc, string $distributionType): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/files/{acc}')
            ->server(Server::SOFTWARE_MANAGEMENT_V2)
            ->auth('oAuth2')
            ->parameters(TemplateParam::init('acc', $acc), QueryParam::init('distributionType', $distributionType));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('Unexpected error.', FotaV2ResultException::class))
            ->type(RetrievesAvailableFilesResponseList::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Uploads a configuration/supplementary file for an account. ThingSpace generates a fileName after the
     * upload and is returned in the response.
     *
     * @param string $acc Account identifier.
     * @param FileWrapper|null $fileupload The file to upload.
     * @param string|null $fileVersion Version of the file.
     * @param string|null $make The software-applicable device make.
     * @param string|null $model The software-applicable device model.
     * @param string|null $localTargetPath Local target path on the device.
     *
     * @return ApiResponse Response from the API call
     */
    public function uploadConfigFile(
        string $acc,
        ?FileWrapper $fileupload = null,
        ?string $fileVersion = null,
        ?string $make = null,
        ?string $model = null,
        ?string $localTargetPath = null
    ): ApiResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/files/{acc}')
            ->server(Server::SOFTWARE_MANAGEMENT_V2)
            ->auth('oAuth2')
            ->parameters(
                TemplateParam::init('acc', $acc),
                FormParam::init('fileupload', $fileupload),
                FormParam::init('fileVersion', $fileVersion),
                FormParam::init('make', $make),
                FormParam::init('model', $model),
                FormParam::init('localTargetPath', $localTargetPath)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('Unexpected error.', FotaV2ResultException::class))
            ->type(UploadConfigurationFilesResponse::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
