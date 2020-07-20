# Smartcalls\CampaignsApi

All URIs are relative to *https://kit.voximplant.com/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**attemptDownloadStatReportGet**](CampaignsApi.md#attemptdownloadstatreportget) | **GET** /attempt/downloadStatReport | 
[**attemptExportStatReportPost**](CampaignsApi.md#attemptexportstatreportpost) | **POST** /attempt/exportStatReport | 
[**attemptGetStatReportStatusPost**](CampaignsApi.md#attemptgetstatreportstatuspost) | **POST** /attempt/getStatReportStatus | 
[**attemptSearchAttemptsGet**](CampaignsApi.md#attemptsearchattemptsget) | **GET** /attempt/searchAttempts | 
[**outboundAppendToCampaignPost**](CampaignsApi.md#outboundappendtocampaignpost) | **POST** /outbound/appendToCampaign | 
[**outboundDeleteCampaignPost**](CampaignsApi.md#outbounddeletecampaignpost) | **POST** /outbound/deleteCampaign | 
[**outboundInitCampaignPost**](CampaignsApi.md#outboundinitcampaignpost) | **POST** /outbound/initCampaign | 
[**outboundPauseCampaignPost**](CampaignsApi.md#outboundpausecampaignpost) | **POST** /outbound/pauseCampaign | 
[**outboundResumeCampaignPost**](CampaignsApi.md#outboundresumecampaignpost) | **POST** /outbound/resumeCampaign | 
[**outboundSearchCampaignsGet**](CampaignsApi.md#outboundsearchcampaignsget) | **GET** /outbound/searchCampaigns | 
[**outboundStatPost**](CampaignsApi.md#outboundstatpost) | **POST** /outbound/stat | 

# **attemptDownloadStatReportGet**
> string attemptDownloadStatReportGet($report_id)



Get the download link to the stats file (.XSLS).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Smartcalls\client\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$report_id = 56; // int | Report ID. The ID can be retrieved via the **exportStatReport** method

try {
    $result = $apiInstance->attemptDownloadStatReportGet($report_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->attemptDownloadStatReportGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **report_id** | **int**| Report ID. The ID can be retrieved via the **exportStatReport** method |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **attemptExportStatReportPost**
> \Smartcalls\Model\ExportStatReportResponseType attemptExportStatReportPost($campaign_id, $locale, $format, $from, $to)



Start processing the stats of the specified campaign. To check if the processing is over, use the **getStatReportStatus**  method; use the **downloadStatReport** method to get the download link.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Smartcalls\client\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$campaign_id = 56; // int | Campaign ID. The ID can be retrieved via the **searchCampaigns** method
$locale = "locale_example"; // string | Document language (<b>example:</b> 'en' or 'ru')
$format = "format_example"; // string | Report format. The following values are possible: csv, xlsx
$from = "from_example"; // string | Start date (<b>example:</b> 'YYYY-MM-DD HH:mm:ss')
$to = "to_example"; // string | End date (<b>example:</b> 'YYYY-MM-DD HH:mm:ss')

try {
    $result = $apiInstance->attemptExportStatReportPost($campaign_id, $locale, $format, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->attemptExportStatReportPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **int**| Campaign ID. The ID can be retrieved via the **searchCampaigns** method |
 **locale** | **string**| Document language (&lt;b&gt;example:&lt;/b&gt; &#x27;en&#x27; or &#x27;ru&#x27;) |
 **format** | **string**| Report format. The following values are possible: csv, xlsx | [optional]
 **from** | **string**| Start date (&lt;b&gt;example:&lt;/b&gt; &#x27;YYYY-MM-DD HH:mm:ss&#x27;) | [optional]
 **to** | **string**| End date (&lt;b&gt;example:&lt;/b&gt; &#x27;YYYY-MM-DD HH:mm:ss&#x27;) | [optional]

### Return type

[**\Smartcalls\Model\ExportStatReportResponseType**](../Model/ExportStatReportResponseType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **attemptGetStatReportStatusPost**
> \Smartcalls\Model\GetStatReportStatusResponseType attemptGetStatReportStatusPost($report_id)



Get info about stats processing. If the response parameter \"processed\" is True, the stats can be downloaded via the downloadStatReport method.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Smartcalls\client\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$report_id = 56; // int | Report ID. The ID can be retrieved via the **exportStatReport** method

try {
    $result = $apiInstance->attemptGetStatReportStatusPost($report_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->attemptGetStatReportStatusPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **report_id** | **int**| Report ID. The ID can be retrieved via the **exportStatReport** method |

### Return type

[**\Smartcalls\Model\GetStatReportStatusResponseType**](../Model/GetStatReportStatusResponseType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **attemptSearchAttemptsGet**
> \Smartcalls\Model\SearchAttemptsResponseType attemptSearchAttemptsGet($id, $campaign_id, $datetime_start, $datetime_end, $fields, $sort, $page, $per_page)



Search for the call attempts. The method without specifying the parameters returns the last 20 call attempts performed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Smartcalls\client\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Attempt ID. The ID can be retrieved via the **searchAttempts** method
$campaign_id = 56; // int | Campaign ID. The ID can be retrieved via the **searchCampaigns** method
$datetime_start = "datetime_start_example"; // string | Start date. The format is 24-h ‘YYYY-MM-DD HH:mm:ss’
$datetime_end = "datetime_end_example"; // string | End date. The format is 24-h ‘YYYY-MM-DD HH:mm:ss’
$fields = "fields_example"; // string | List of the returned fields (comma separated). If it’s not specified, the response will contain the full list of fields. <br /><b>IMPORTANT: the parameter can be used only in GET requests</b>
$sort = "sort_example"; // string | Sorting data by field(s), add '-' to DESC sort, (<b>example:</b> ‘sort=id’ or ‘sort=-id’). <br /><b>IMPORTANT: the parameter can be used only in GET requests</b>
$page = 56; // int | Page to show as a response: the first one, second, etc. API methods return 20 records (one page) by default. <br /><b>IMPORTANT: the parameter can be used only in GET requests</b>
$per_page = 56; // int | Number of records per page (default value is 20, min = 1, max = 50). <br /><b>IMPORTANT: the parameter can be used only in GET requests</b>

try {
    $result = $apiInstance->attemptSearchAttemptsGet($id, $campaign_id, $datetime_start, $datetime_end, $fields, $sort, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->attemptSearchAttemptsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Attempt ID. The ID can be retrieved via the **searchAttempts** method | [optional]
 **campaign_id** | **int**| Campaign ID. The ID can be retrieved via the **searchCampaigns** method | [optional]
 **datetime_start** | **string**| Start date. The format is 24-h ‘YYYY-MM-DD HH:mm:ss’ | [optional]
 **datetime_end** | **string**| End date. The format is 24-h ‘YYYY-MM-DD HH:mm:ss’ | [optional]
 **fields** | **string**| List of the returned fields (comma separated). If it’s not specified, the response will contain the full list of fields. &lt;br /&gt;&lt;b&gt;IMPORTANT: the parameter can be used only in GET requests&lt;/b&gt; | [optional]
 **sort** | **string**| Sorting data by field(s), add &#x27;-&#x27; to DESC sort, (&lt;b&gt;example:&lt;/b&gt; ‘sort&#x3D;id’ or ‘sort&#x3D;-id’). &lt;br /&gt;&lt;b&gt;IMPORTANT: the parameter can be used only in GET requests&lt;/b&gt; | [optional]
 **page** | **int**| Page to show as a response: the first one, second, etc. API methods return 20 records (one page) by default. &lt;br /&gt;&lt;b&gt;IMPORTANT: the parameter can be used only in GET requests&lt;/b&gt; | [optional]
 **per_page** | **int**| Number of records per page (default value is 20, min &#x3D; 1, max &#x3D; 50). &lt;br /&gt;&lt;b&gt;IMPORTANT: the parameter can be used only in GET requests&lt;/b&gt; | [optional]

### Return type

[**\Smartcalls\Model\SearchAttemptsResponseType**](../Model/SearchAttemptsResponseType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **outboundAppendToCampaignPost**
> \Smartcalls\Model\AppendToCampaignResponseType outboundAppendToCampaignPost($campaign_id, $rows)



Append contacts to the existing campaign. It is possible to add a maximum of 100 entries in one request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Smartcalls\client\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$campaign_id = 56; // int | 
$rows = "rows_example"; // string | 

try {
    $result = $apiInstance->outboundAppendToCampaignPost($campaign_id, $rows);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->outboundAppendToCampaignPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **int**|  | [optional]
 **rows** | **string**|  | [optional]

### Return type

[**\Smartcalls\Model\AppendToCampaignResponseType**](../Model/AppendToCampaignResponseType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **outboundDeleteCampaignPost**
> \Smartcalls\Model\DeleteCampaignResponseType outboundDeleteCampaignPost($id)



Delete the specified campaign. The method only works for the campaigns with the ‘draft’ status.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Smartcalls\client\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Campaign ID. The ID can be retrieved via the **searchCampaigns** method

try {
    $result = $apiInstance->outboundDeleteCampaignPost($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->outboundDeleteCampaignPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Campaign ID. The ID can be retrieved via the **searchCampaigns** method |

### Return type

[**\Smartcalls\Model\DeleteCampaignResponseType**](../Model/DeleteCampaignResponseType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **outboundInitCampaignPost**
> \Smartcalls\Model\InitCampaignResponseType outboundInitCampaignPost($title, $max_attempts, $interval, $max_lines, $scenario_id, $phone_number_id, $caller_id, $time_start, $time_end, $date_start, $date_end, $permanent, $description)



Create a new campaign for automatic calls and start campaign. Use the **appendToCampaign** method to added contacts.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Smartcalls\client\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$title = "title_example"; // string | 
$max_attempts = 56; // int | 
$interval = 56; // int | 
$max_lines = 56; // int | 
$scenario_id = 56; // int | 
$phone_number_id = 56; // int | 
$caller_id = 56; // int | 
$time_start = "time_start_example"; // string | 
$time_end = "time_end_example"; // string | 
$date_start = "date_start_example"; // string | 
$date_end = "date_end_example"; // string | 
$permanent = true; // bool | 
$description = "description_example"; // string | 

try {
    $result = $apiInstance->outboundInitCampaignPost($title, $max_attempts, $interval, $max_lines, $scenario_id, $phone_number_id, $caller_id, $time_start, $time_end, $date_start, $date_end, $permanent, $description);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->outboundInitCampaignPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **title** | **string**|  |
 **max_attempts** | **int**|  |
 **interval** | **int**|  |
 **max_lines** | **int**|  |
 **scenario_id** | **int**|  |
 **phone_number_id** | **int**|  |
 **caller_id** | **int**|  |
 **time_start** | **string**|  |
 **time_end** | **string**|  |
 **date_start** | **string**|  |
 **date_end** | **string**|  |
 **permanent** | **bool**|  |
 **description** | **string**|  |

### Return type

[**\Smartcalls\Model\InitCampaignResponseType**](../Model/InitCampaignResponseType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **outboundPauseCampaignPost**
> \Smartcalls\Model\PauseCampaignResponseType outboundPauseCampaignPost($id)



Pause the specified campaign. You can make the campaign active again via the **resumeCampaign** method.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Smartcalls\client\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Campaign ID. The ID can be retrieved via the **searchCampaigns** method

try {
    $result = $apiInstance->outboundPauseCampaignPost($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->outboundPauseCampaignPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Campaign ID. The ID can be retrieved via the **searchCampaigns** method | [optional]

### Return type

[**\Smartcalls\Model\PauseCampaignResponseType**](../Model/PauseCampaignResponseType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **outboundResumeCampaignPost**
> \Smartcalls\Model\ResumeCampaignResponseType outboundResumeCampaignPost($id)



Resume the specified campaign which was paused via the **pauseCampaign** method.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Smartcalls\client\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Campaign ID. The ID can be retrieved via the **searchCampaigns** method

try {
    $result = $apiInstance->outboundResumeCampaignPost($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->outboundResumeCampaignPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Campaign ID. The ID can be retrieved via the **searchCampaigns** method | [optional]

### Return type

[**\Smartcalls\Model\ResumeCampaignResponseType**](../Model/ResumeCampaignResponseType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **outboundSearchCampaignsGet**
> \Smartcalls\Model\SearchCampaignsResponseType outboundSearchCampaignsGet($id, $status, $date_start, $date_end, $date_create, $title, $fields, $sort, $page, $per_page)



Search for the campaigns. The method without specifying the parameters returns the last 20 campaigns created.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Smartcalls\client\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Campaign ID. The ID can be retrieved via the **searchCampaigns** method
$status = "status_example"; // string | Campaign status. The possible values are draft, error, processing, ready, canceled, completed, paused, started
$date_start = "date_start_example"; // string | Start date. The format is 24-h ‘YYYY-MM-DD HH:mm:ss’
$date_end = "date_end_example"; // string | End date. The format is 24-h ‘YYYY-MM-DD HH:mm:ss’
$date_create = "date_create_example"; // string | Date of the campaign creation. The format is 24-h ‘YYYY-MM-DD HH:mm:ss’
$title = "title_example"; // string | Title of the campaign
$fields = "fields_example"; // string | List of the return fields (comma separated). If it’s not specified the response will contain the full list of fields. <br /><b>IMPORTANT: the parameter can be used only in GET requests</b>
$sort = "sort_example"; // string | Sorting data by field(s), add '-' to DESC sort, (<b>example:</b> ‘sort=id’ or ‘sort=-datetime_start’). <br /><b>IMPORTANT: the parameter can be used only in GET requests</b>
$page = 56; // int | Page to show as a response: the first one, second, etc. API methods return 20 records (one page) by default. <br /><b>IMPORTANT: the parameter can be used only in GET requests</b>
$per_page = 56; // int | Number of records per page (default value is 20, min = 1, max = 50). <br /><b>IMPORTANT: the parameter can be used only in GET requests</b>

try {
    $result = $apiInstance->outboundSearchCampaignsGet($id, $status, $date_start, $date_end, $date_create, $title, $fields, $sort, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->outboundSearchCampaignsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Campaign ID. The ID can be retrieved via the **searchCampaigns** method | [optional]
 **status** | **string**| Campaign status. The possible values are draft, error, processing, ready, canceled, completed, paused, started | [optional]
 **date_start** | **string**| Start date. The format is 24-h ‘YYYY-MM-DD HH:mm:ss’ | [optional]
 **date_end** | **string**| End date. The format is 24-h ‘YYYY-MM-DD HH:mm:ss’ | [optional]
 **date_create** | **string**| Date of the campaign creation. The format is 24-h ‘YYYY-MM-DD HH:mm:ss’ | [optional]
 **title** | **string**| Title of the campaign | [optional]
 **fields** | **string**| List of the return fields (comma separated). If it’s not specified the response will contain the full list of fields. &lt;br /&gt;&lt;b&gt;IMPORTANT: the parameter can be used only in GET requests&lt;/b&gt; | [optional]
 **sort** | **string**| Sorting data by field(s), add &#x27;-&#x27; to DESC sort, (&lt;b&gt;example:&lt;/b&gt; ‘sort&#x3D;id’ or ‘sort&#x3D;-datetime_start’). &lt;br /&gt;&lt;b&gt;IMPORTANT: the parameter can be used only in GET requests&lt;/b&gt; | [optional]
 **page** | **int**| Page to show as a response: the first one, second, etc. API methods return 20 records (one page) by default. &lt;br /&gt;&lt;b&gt;IMPORTANT: the parameter can be used only in GET requests&lt;/b&gt; | [optional]
 **per_page** | **int**| Number of records per page (default value is 20, min &#x3D; 1, max &#x3D; 50). &lt;br /&gt;&lt;b&gt;IMPORTANT: the parameter can be used only in GET requests&lt;/b&gt; | [optional]

### Return type

[**\Smartcalls\Model\SearchCampaignsResponseType**](../Model/SearchCampaignsResponseType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **outboundStatPost**
> \Smartcalls\Model\CampaignStatResponseType outboundStatPost($campaign_ids)



Get the statistics of the specified campaign(s). Campaign_ids is a JSON array with the campaign ID(s).  ID(s) can be retrieved via the **searchCampaigns** method (**example**: <code>[1,2,3]</code>).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Smartcalls\client\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$campaign_ids = "campaign_ids_example"; // string | 

try {
    $result = $apiInstance->outboundStatPost($campaign_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->outboundStatPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_ids** | **string**|  |

### Return type

[**\Smartcalls\Model\CampaignStatResponseType**](../Model/CampaignStatResponseType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

