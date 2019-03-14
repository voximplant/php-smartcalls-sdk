<?php
/**
 * NumbersApi
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

namespace Smartcalls\client;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Smartcalls\ApiException;
use Smartcalls\Configuration;
use Smartcalls\HeaderSelector;
use Smartcalls\ObjectSerializer;

/**
 * NumbersApi Class Doc Comment
 *
 * @category Class
 * @package  Smartcalls
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class NumbersApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }
    /**
     * Operation calleridSearchCallerIDsGet
*
* @param  int $id Caller ID. ID can be retrieved via the **searchCallersIDs** method. (optional)
* @param  string $sort Sorting data by field(s), add &#x27;-&#x27; to DESC sort, (&lt;b&gt;example:&lt;/b&gt; ‘sort&#x3D;id’, etc). &lt;br /&gt;&lt;b&gt;IMPORTANT: the parameter can be used only in GET requests.&lt;/b&gt; (optional)
*
     * @throws \Smartcalls\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Smartcalls\Model\SearchCallerIDsResponseType
     */
    public function calleridSearchCallerIDsGet($id = null, $sort = null)
    {
        list($response) = $this->calleridSearchCallerIDsGetWithHttpInfo($id, $sort);
        return $response;
    }

    /**
     * Operation calleridSearchCallerIDsGetWithHttpInfo
*
* @param  int $id Caller ID. ID can be retrieved via the **searchCallersIDs** method. (optional)
* @param  string $sort Sorting data by field(s), add &#x27;-&#x27; to DESC sort, (&lt;b&gt;example:&lt;/b&gt; ‘sort&#x3D;id’, etc). &lt;br /&gt;&lt;b&gt;IMPORTANT: the parameter can be used only in GET requests.&lt;/b&gt; (optional)
*
     * @throws \Smartcalls\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Smartcalls\Model\SearchCallerIDsResponseType, HTTP status code, HTTP response headers (array of strings)
     */
    public function calleridSearchCallerIDsGetWithHttpInfo($id = null, $sort = null)
    {
        $returnType = '\Smartcalls\Model\SearchCallerIDsResponseType';
        $request = $this->calleridSearchCallerIDsGetRequest($id, $sort);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

$responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];


        } catch (ApiException $e) {
            $returnType = '';
            $content = $e->getResponseBody();
            if ($returnType !== '\SplFileObject') {
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }
            switch ($e->getCode()) {
case 200:$data = ObjectSerializer::deserialize(
                        $content,
                        '\Smartcalls\Model\SearchCallerIDsResponseType',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
case 0:$data = ObjectSerializer::deserialize(
                        $content,
                        '\Smartcalls\Model\ErrorType',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
}
            throw $e;
        }
    }

    /**
     * Operation calleridSearchCallerIDsGetAsync
     *
     * 
     *
* @param  int $id Caller ID. ID can be retrieved via the **searchCallersIDs** method. (optional)
* @param  string $sort Sorting data by field(s), add &#x27;-&#x27; to DESC sort, (&lt;b&gt;example:&lt;/b&gt; ‘sort&#x3D;id’, etc). &lt;br /&gt;&lt;b&gt;IMPORTANT: the parameter can be used only in GET requests.&lt;/b&gt; (optional)
*
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function calleridSearchCallerIDsGetAsync($id = null, $sort = null)
    {
        return $this->calleridSearchCallerIDsGetAsyncWithHttpInfo($id, $sort)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation calleridSearchCallerIDsGetAsyncWithHttpInfo
     *
     * 
     *
* @param  int $id Caller ID. ID can be retrieved via the **searchCallersIDs** method. (optional)
* @param  string $sort Sorting data by field(s), add &#x27;-&#x27; to DESC sort, (&lt;b&gt;example:&lt;/b&gt; ‘sort&#x3D;id’, etc). &lt;br /&gt;&lt;b&gt;IMPORTANT: the parameter can be used only in GET requests.&lt;/b&gt; (optional)
*
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function calleridSearchCallerIDsGetAsyncWithHttpInfo($id = null, $sort = null)
    {
        $returnType = '\Smartcalls\Model\SearchCallerIDsResponseType';
        $request = $this->calleridSearchCallerIDsGetRequest($id, $sort);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
$responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'calleridSearchCallerIDsGet'
     *
* @param  int $id Caller ID. ID can be retrieved via the **searchCallersIDs** method. (optional)
* @param  string $sort Sorting data by field(s), add &#x27;-&#x27; to DESC sort, (&lt;b&gt;example:&lt;/b&gt; ‘sort&#x3D;id’, etc). &lt;br /&gt;&lt;b&gt;IMPORTANT: the parameter can be used only in GET requests.&lt;/b&gt; (optional)
*
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function calleridSearchCallerIDsGetRequest($id = null, $sort = null)
    {
$resourcePath = '/callerid/searchCallerIDs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

// query params
if ($id !== null) {
            $queryParams['id'] = ObjectSerializer::toQueryValue($id);
        }
// query params
if ($sort !== null) {
            $queryParams['sort'] = ObjectSerializer::toQueryValue($sort);
        }
// body params
        $_tempBody = null;
if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }
// this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('access_token');
        if ($apiKey !== null) {
            $queryParams['access_token'] = $apiKey;
        }
// this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('domain');
        if ($apiKey !== null) {
            $queryParams['domain'] = $apiKey;
        }
$defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation phoneSearchNumbersGet
*
* @param  int $id Phone number ID. ID can be retrieved via the **searchNumbers** method. (optional)
* @param  string $sort Sorting data by field(s), add &#x27;-&#x27; to DESC sort, (&lt;b&gt;example:&lt;/b&gt; ‘sort&#x3D;id’, etc). &lt;br /&gt;&lt;b&gt;IMPORTANT: the parameter can be used only in GET requests.&lt;/b&gt; (optional)
*
     * @throws \Smartcalls\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Smartcalls\Model\SearchNumbersResponseType
     */
    public function phoneSearchNumbersGet($id = null, $sort = null)
    {
        list($response) = $this->phoneSearchNumbersGetWithHttpInfo($id, $sort);
        return $response;
    }

    /**
     * Operation phoneSearchNumbersGetWithHttpInfo
*
* @param  int $id Phone number ID. ID can be retrieved via the **searchNumbers** method. (optional)
* @param  string $sort Sorting data by field(s), add &#x27;-&#x27; to DESC sort, (&lt;b&gt;example:&lt;/b&gt; ‘sort&#x3D;id’, etc). &lt;br /&gt;&lt;b&gt;IMPORTANT: the parameter can be used only in GET requests.&lt;/b&gt; (optional)
*
     * @throws \Smartcalls\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Smartcalls\Model\SearchNumbersResponseType, HTTP status code, HTTP response headers (array of strings)
     */
    public function phoneSearchNumbersGetWithHttpInfo($id = null, $sort = null)
    {
        $returnType = '\Smartcalls\Model\SearchNumbersResponseType';
        $request = $this->phoneSearchNumbersGetRequest($id, $sort);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

$responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];


        } catch (ApiException $e) {
            $returnType = '';
            $content = $e->getResponseBody();
            if ($returnType !== '\SplFileObject') {
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }
            switch ($e->getCode()) {
case 200:$data = ObjectSerializer::deserialize(
                        $content,
                        '\Smartcalls\Model\SearchNumbersResponseType',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
case 0:$data = ObjectSerializer::deserialize(
                        $content,
                        '\Smartcalls\Model\ErrorType',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
}
            throw $e;
        }
    }

    /**
     * Operation phoneSearchNumbersGetAsync
     *
     * 
     *
* @param  int $id Phone number ID. ID can be retrieved via the **searchNumbers** method. (optional)
* @param  string $sort Sorting data by field(s), add &#x27;-&#x27; to DESC sort, (&lt;b&gt;example:&lt;/b&gt; ‘sort&#x3D;id’, etc). &lt;br /&gt;&lt;b&gt;IMPORTANT: the parameter can be used only in GET requests.&lt;/b&gt; (optional)
*
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function phoneSearchNumbersGetAsync($id = null, $sort = null)
    {
        return $this->phoneSearchNumbersGetAsyncWithHttpInfo($id, $sort)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation phoneSearchNumbersGetAsyncWithHttpInfo
     *
     * 
     *
* @param  int $id Phone number ID. ID can be retrieved via the **searchNumbers** method. (optional)
* @param  string $sort Sorting data by field(s), add &#x27;-&#x27; to DESC sort, (&lt;b&gt;example:&lt;/b&gt; ‘sort&#x3D;id’, etc). &lt;br /&gt;&lt;b&gt;IMPORTANT: the parameter can be used only in GET requests.&lt;/b&gt; (optional)
*
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function phoneSearchNumbersGetAsyncWithHttpInfo($id = null, $sort = null)
    {
        $returnType = '\Smartcalls\Model\SearchNumbersResponseType';
        $request = $this->phoneSearchNumbersGetRequest($id, $sort);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
$responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'phoneSearchNumbersGet'
     *
* @param  int $id Phone number ID. ID can be retrieved via the **searchNumbers** method. (optional)
* @param  string $sort Sorting data by field(s), add &#x27;-&#x27; to DESC sort, (&lt;b&gt;example:&lt;/b&gt; ‘sort&#x3D;id’, etc). &lt;br /&gt;&lt;b&gt;IMPORTANT: the parameter can be used only in GET requests.&lt;/b&gt; (optional)
*
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function phoneSearchNumbersGetRequest($id = null, $sort = null)
    {
$resourcePath = '/phone/searchNumbers';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

// query params
if ($id !== null) {
            $queryParams['id'] = ObjectSerializer::toQueryValue($id);
        }
// query params
if ($sort !== null) {
            $queryParams['sort'] = ObjectSerializer::toQueryValue($sort);
        }
// body params
        $_tempBody = null;
if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }
// this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('access_token');
        if ($apiKey !== null) {
            $queryParams['access_token'] = $apiKey;
        }
// this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('domain');
        if ($apiKey !== null) {
            $queryParams['domain'] = $apiKey;
        }
$defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation phoneUpdateNumberPost
*
* @param  string $redirect_number redirect_number (optional)
* @param  int $id Phone number ID. ID can be retrieved via the **searchNumbers** method. (optional)
*
     * @throws \Smartcalls\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Smartcalls\Model\UpdateNumberResponseType
     */
    public function phoneUpdateNumberPost($redirect_number = null, $id = null)
    {
        list($response) = $this->phoneUpdateNumberPostWithHttpInfo($redirect_number, $id);
        return $response;
    }

    /**
     * Operation phoneUpdateNumberPostWithHttpInfo
*
* @param  string $redirect_number (optional)
* @param  int $id Phone number ID. ID can be retrieved via the **searchNumbers** method. (optional)
*
     * @throws \Smartcalls\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Smartcalls\Model\UpdateNumberResponseType, HTTP status code, HTTP response headers (array of strings)
     */
    public function phoneUpdateNumberPostWithHttpInfo($redirect_number = null, $id = null)
    {
        $returnType = '\Smartcalls\Model\UpdateNumberResponseType';
        $request = $this->phoneUpdateNumberPostRequest($redirect_number, $id);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

$responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];


        } catch (ApiException $e) {
            $returnType = '';
            $content = $e->getResponseBody();
            if ($returnType !== '\SplFileObject') {
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }
            switch ($e->getCode()) {
case 200:$data = ObjectSerializer::deserialize(
                        $content,
                        '\Smartcalls\Model\UpdateNumberResponseType',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
case 0:$data = ObjectSerializer::deserialize(
                        $content,
                        '\Smartcalls\Model\ErrorType',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
}
            throw $e;
        }
    }

    /**
     * Operation phoneUpdateNumberPostAsync
     *
     * 
     *
* @param  string $redirect_number (optional)
* @param  int $id Phone number ID. ID can be retrieved via the **searchNumbers** method. (optional)
*
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function phoneUpdateNumberPostAsync($redirect_number = null, $id = null)
    {
        return $this->phoneUpdateNumberPostAsyncWithHttpInfo($redirect_number, $id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation phoneUpdateNumberPostAsyncWithHttpInfo
     *
     * 
     *
* @param  string $redirect_number (optional)
* @param  int $id Phone number ID. ID can be retrieved via the **searchNumbers** method. (optional)
*
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function phoneUpdateNumberPostAsyncWithHttpInfo($redirect_number = null, $id = null)
    {
        $returnType = '\Smartcalls\Model\UpdateNumberResponseType';
        $request = $this->phoneUpdateNumberPostRequest($redirect_number, $id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
$responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'phoneUpdateNumberPost'
     *
* @param  string $redirect_number (optional)
* @param  int $id Phone number ID. ID can be retrieved via the **searchNumbers** method. (optional)
*
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function phoneUpdateNumberPostRequest($redirect_number = null, $id = null)
    {
$resourcePath = '/phone/updateNumber';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

// query params
if ($id !== null) {
            $queryParams['id'] = ObjectSerializer::toQueryValue($id);
        }
// form params
        if ($redirect_number !== null) {
            $formParams['redirect_number'] = ObjectSerializer::toFormValue($redirect_number);
        }
// body params
        $_tempBody = null;
if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/x-www-form-urlencoded']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }
// this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('access_token');
        if ($apiKey !== null) {
            $queryParams['access_token'] = $apiKey;
        }
// this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('domain');
        if ($apiKey !== null) {
            $queryParams['domain'] = $apiKey;
        }
$defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

/**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}