<?php
/**
 * ApiException
 * PHP version 5
 *
 * @category Class
 * @package  Smartcalls
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
* SmartCalls IO API Documentation
 *
* <h1>Basic description</h1> <p>HTTP API is available via the <u>https://smartcalls.io/api/v2/<b>{method}</b></u> endpoint. To use the methods marked with the LOCK symbol, you need to generate an access_token via the <b>getAccessToken</b> method. Pass this access token to each HTTP API call.</p> <h1>Authentication</h1> <p>This API uses Custom Query Parameter for its authentication.</p> <p>The parameters that are needed to be sent for this type of authentication are as follows:</p> <ul>   <li><strong>access_token</strong></li>   <li><strong>domain</strong></li> </ul>
 *
* OpenAPI spec version: 2.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.2
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Smartcalls;

use \Exception;

/**
 * ApiException Class Doc Comment
 *
 * @category Class
 * @package  Smartcalls
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class HeaderSelector
{

    /**
     * @param string[] $accept
     * @param string[] $contentTypes
     * @return array
     */
    public function selectHeaders($accept, $contentTypes)
    {
        $headers = [];

        $accept = $this->selectAcceptHeader($accept);
        if ($accept !== null) {
            $headers['Accept'] = $accept;
        }

        $headers['Content-Type'] = $this->selectContentTypeHeader($contentTypes);
        return $headers;
    }

    /**
     * @param string[] $accept
     * @return array
     */
    public function selectHeadersForMultipart($accept)
    {
        $headers = $this->selectHeaders($accept, []);

        unset($headers['Content-Type']);
        return $headers;
    }

    /**
     * Return the header 'Accept' based on an array of Accept provided
     *
     * @param string[] $accept Array of header
     *
     * @return string Accept (e.g. application/json)
     */
    private function selectAcceptHeader($accept)
    {
        if (count($accept) === 0 || (count($accept) === 1 && $accept[0] === '')) {
            return null;
        } elseif (preg_grep("/application\/json/i", $accept)) {
            return 'application/json';
        } else {
            return implode(',', $accept);
        }
    }

    /**
     * Return the content type based on an array of content-type provided
     *
     * @param string[] $contentType Array fo content-type
     *
     * @return string Content-Type (e.g. application/json)
     */
    private function selectContentTypeHeader($contentType)
    {
        if (count($contentType) === 0 || (count($contentType) === 1 && $contentType[0] === '')) {
            return 'application/json';
        } elseif (preg_grep("/application\/json/i", $contentType)) {
            return 'application/json';
        } else {
            return implode(',', $contentType);
        }
    }
}

