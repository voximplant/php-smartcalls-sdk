# Smartcalls\AccountApi

All URIs are relative to *https://smartcalls.io/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountGetAccountInfoGet**](AccountApi.md#accountgetaccountinfoget) | **GET** /account/getAccountInfo | 
[**authGetAccessTokenGet**](AccountApi.md#authgetaccesstokenget) | **GET** /auth/getAccessToken | 
[**notificationGetNotificationsGet**](AccountApi.md#notificationgetnotificationsget) | **GET** /notification/getNotifications | 
[**passwordChangeByTokenPost**](AccountApi.md#passwordchangebytokenpost) | **POST** /password/changeByToken | 
[**passwordRecoveryByEmailPost**](AccountApi.md#passwordrecoverybyemailpost) | **POST** /password/recoveryByEmail | 
[**settingSearchSettingsGet**](AccountApi.md#settingsearchsettingsget) | **GET** /setting/searchSettings | 

# **accountGetAccountInfoGet**
> \Smartcalls\Model\GetAccountInfoResponseType accountGetAccountInfoGet()



Get info about your account, such as account name, currency etc.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: AccessTokenAuth
$config = Smartcalls\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Smartcalls\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');// Configure API key authorization: Domain
$config = Smartcalls\Configuration::getDefaultConfiguration()->setApiKey('domain', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Smartcalls\Configuration::getDefaultConfiguration()->setApiKeyPrefix('domain', 'Bearer');

$apiInstance = new Smartcalls\client\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->accountGetAccountInfoGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->accountGetAccountInfoGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Smartcalls\Model\GetAccountInfoResponseType**](../Model/GetAccountInfoResponseType.md)

### Authorization

[AccessTokenAuth](../../README.md#AccessTokenAuth), [Domain](../../README.md#Domain)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **authGetAccessTokenGet**
> \Smartcalls\Model\GetAccessTokenResponseType authGetAccessTokenGet($domain, $username, $password)



Get the unique access token which will be used in all HTTP requests. The token expires in 24 hours.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Smartcalls\client\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$domain = "domain_example"; // string | The 1st part of your account name.
$username = "username_example"; // string | User name that was created during registration a new account.
$password = "password_example"; // string | Password that was sent on user’s email.

try {
    $result = $apiInstance->authGetAccessTokenGet($domain, $username, $password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->authGetAccessTokenGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **domain** | **string**| The 1st part of your account name. |
 **username** | **string**| User name that was created during registration a new account. |
 **password** | **string**| Password that was sent on user’s email. |

### Return type

[**\Smartcalls\Model\GetAccessTokenResponseType**](../Model/GetAccessTokenResponseType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **notificationGetNotificationsGet**
> \Smartcalls\Model\GetNotificationsResponseType notificationGetNotificationsGet()



Get current notifications settings.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: AccessTokenAuth
$config = Smartcalls\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Smartcalls\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');// Configure API key authorization: Domain
$config = Smartcalls\Configuration::getDefaultConfiguration()->setApiKey('domain', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Smartcalls\Configuration::getDefaultConfiguration()->setApiKeyPrefix('domain', 'Bearer');

$apiInstance = new Smartcalls\client\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->notificationGetNotificationsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->notificationGetNotificationsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Smartcalls\Model\GetNotificationsResponseType**](../Model/GetNotificationsResponseType.md)

### Authorization

[AccessTokenAuth](../../README.md#AccessTokenAuth), [Domain](../../README.md#Domain)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **passwordChangeByTokenPost**
> \Smartcalls\Model\ChangeByTokenResponseType passwordChangeByTokenPost($token, $new_password)



Change password using a generated disposable token. The method is used in the password recovery link.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Smartcalls\client\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | A unique token which can be retrieved via the **RecoveryByEmail** method. Maximum length is 255.
$new_password = "new_password_example"; // string | New password to set. Minimum length is 6 characters, only latin characters are allowed.

try {
    $result = $apiInstance->passwordChangeByTokenPost($token, $new_password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->passwordChangeByTokenPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| A unique token which can be retrieved via the **RecoveryByEmail** method. Maximum length is 255. |
 **new_password** | **string**| New password to set. Minimum length is 6 characters, only latin characters are allowed. |

### Return type

[**\Smartcalls\Model\ChangeByTokenResponseType**](../Model/ChangeByTokenResponseType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **passwordRecoveryByEmailPost**
> \Smartcalls\Model\RecoveryByEmailResponseType passwordRecoveryByEmailPost($email)



Recover your password by email. You will receive a letter with a recovery link. The link expires in 2 hours. The method also provides a token for the **ChangeByToken** method.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: AccessTokenAuth
$config = Smartcalls\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Smartcalls\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');// Configure API key authorization: Domain
$config = Smartcalls\Configuration::getDefaultConfiguration()->setApiKey('domain', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Smartcalls\Configuration::getDefaultConfiguration()->setApiKeyPrefix('domain', 'Bearer');

$apiInstance = new Smartcalls\client\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email = "email_example"; // string | 

try {
    $result = $apiInstance->passwordRecoveryByEmailPost($email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->passwordRecoveryByEmailPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**|  |

### Return type

[**\Smartcalls\Model\RecoveryByEmailResponseType**](../Model/RecoveryByEmailResponseType.md)

### Authorization

[AccessTokenAuth](../../README.md#AccessTokenAuth), [Domain](../../README.md#Domain)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **settingSearchSettingsGet**
> \Smartcalls\Model\SearchSettingsResponseType settingSearchSettingsGet()



Get current account settings.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: AccessTokenAuth
$config = Smartcalls\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Smartcalls\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');// Configure API key authorization: Domain
$config = Smartcalls\Configuration::getDefaultConfiguration()->setApiKey('domain', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Smartcalls\Configuration::getDefaultConfiguration()->setApiKeyPrefix('domain', 'Bearer');

$apiInstance = new Smartcalls\client\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->settingSearchSettingsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->settingSearchSettingsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Smartcalls\Model\SearchSettingsResponseType**](../Model/SearchSettingsResponseType.md)

### Authorization

[AccessTokenAuth](../../README.md#AccessTokenAuth), [Domain](../../README.md#Domain)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

