<?php
/**
 * CalculationApi
 * PHP version 5
 *
 * @category Class
 * @package  PIWebAPI\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * PI Web API 2017 Swagger Spec
 *
 * Swagger Spec file that describes PI Web API
 *
 * OpenAPI spec version: 1.9.0.235
 * Contact: techsupport@osisoft.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace PIWebAPI\Client\Api;

use \PIWebAPI\Client\ApiClient;
use \PIWebAPI\Client\ApiException;
use \PIWebAPI\Client\Configuration;
use \PIWebAPI\Client\ObjectSerializer;

/**
 * CalculationApi Class Doc Comment
 *
 * @category Class
 * @package  PIWebAPI\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CalculationApi
{
    /**
     * API Client
     *
     * @var \PIWebAPI\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \PIWebAPI\Client\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\PIWebAPI\Client\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://proghackuc2017.osisoft.com/piwebapi');
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \PIWebAPI\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \PIWebAPI\Client\ApiClient $apiClient set the API client
     *
     * @return CalculationApi
     */
    public function setApiClient(\PIWebAPI\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation calculationGetAtIntervals
     *
     * Returns results of evaluating the expression over the time range from the start time to the end time at a defined interval.
     *
     * @param string $end_time An optional end time. The default is &#39;*&#39; for element attributes and points. For event frame attributes, the default is the event frame&#39;s end time, or &#39;*&#39; if that is not set. Note that if endTime is earlier than startTime, the resulting values will be in time-descending order. (optional)
     * @param string $expression A string containing the expression to be evaluated. The syntax for the expression generally follows the Performance Equation syntax as described in the PI Server documentation, with the exception that expressions which target AF objects use attribute names in place of tag names in the equation. (optional)
     * @param string $sample_interval A time span specifies how often the filter expression is evaluated when computing the summary for an interval. (optional)
     * @param string $selected_fields List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. (optional)
     * @param string $start_time An optional start time. The default is &#39;*-1d&#39; for element attributes and points. For event frame attributes, the default is the event frame&#39;s start time, or &#39;*-1d&#39; if that is not set. (optional)
     * @param string $web_id The ID of the target object of the expression. A target object can be a Data Server, a database, an element, an event frame or an attribute. References to attributes or points are based on the target. If this parameter is not provided, the target object is set to null. (optional)
     * @throws \PIWebAPI\Client\ApiException on non-2xx response
     * @return \PIWebAPI\Client\Model\TimedValues
     */
    public function calculationGetAtIntervals($end_time = null, $expression = null, $sample_interval = null, $selected_fields = null, $start_time = null, $web_id = null)
    {
        list($response) = $this->calculationGetAtIntervalsWithHttpInfo($end_time, $expression, $sample_interval, $selected_fields, $start_time, $web_id);
        return $response;
    }

    /**
     * Operation calculationGetAtIntervalsWithHttpInfo
     *
     * Returns results of evaluating the expression over the time range from the start time to the end time at a defined interval.
     *
     * @param string $end_time An optional end time. The default is &#39;*&#39; for element attributes and points. For event frame attributes, the default is the event frame&#39;s end time, or &#39;*&#39; if that is not set. Note that if endTime is earlier than startTime, the resulting values will be in time-descending order. (optional)
     * @param string $expression A string containing the expression to be evaluated. The syntax for the expression generally follows the Performance Equation syntax as described in the PI Server documentation, with the exception that expressions which target AF objects use attribute names in place of tag names in the equation. (optional)
     * @param string $sample_interval A time span specifies how often the filter expression is evaluated when computing the summary for an interval. (optional)
     * @param string $selected_fields List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. (optional)
     * @param string $start_time An optional start time. The default is &#39;*-1d&#39; for element attributes and points. For event frame attributes, the default is the event frame&#39;s start time, or &#39;*-1d&#39; if that is not set. (optional)
     * @param string $web_id The ID of the target object of the expression. A target object can be a Data Server, a database, an element, an event frame or an attribute. References to attributes or points are based on the target. If this parameter is not provided, the target object is set to null. (optional)
     * @throws \PIWebAPI\Client\ApiException on non-2xx response
     * @return array of \PIWebAPI\Client\Model\TimedValues, HTTP status code, HTTP response headers (array of strings)
     */
    public function calculationGetAtIntervalsWithHttpInfo($end_time = null, $expression = null, $sample_interval = null, $selected_fields = null, $start_time = null, $web_id = null)
    {
        // parse inputs
        $resourcePath = "/calculation/intervals";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', 'text/json', 'text/html', 'application/x-ms-application']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($end_time !== null) {
            $queryParams['endTime'] = $this->apiClient->getSerializer()->toQueryValue($end_time);
        }
        // query params
        if ($expression !== null) {
            $queryParams['expression'] = $this->apiClient->getSerializer()->toQueryValue($expression);
        }
        // query params
        if ($sample_interval !== null) {
            $queryParams['sampleInterval'] = $this->apiClient->getSerializer()->toQueryValue($sample_interval);
        }
        // query params
        if ($selected_fields !== null) {
            $queryParams['selectedFields'] = $this->apiClient->getSerializer()->toQueryValue($selected_fields);
        }
        // query params
        if ($start_time !== null) {
            $queryParams['startTime'] = $this->apiClient->getSerializer()->toQueryValue($start_time);
        }
        // query params
        if ($web_id !== null) {
            $queryParams['webId'] = $this->apiClient->getSerializer()->toQueryValue($web_id);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\PIWebAPI\Client\Model\TimedValues',
                '/calculation/intervals'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\PIWebAPI\Client\Model\TimedValues', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\PIWebAPI\Client\Model\TimedValues', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 409:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\PIWebAPI\Client\Model\Errors', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation calculationGetAtRecorded
     *
     * Returns the result of evaluating the expression at each point in time over the time range from the start time to the end time where a recorded value exists for a member of the expression.
     *
     * @param string $end_time An optional end time. The default is &#39;*&#39; for element attributes and points. For event frame attributes, the default is the event frame&#39;s end time, or &#39;*&#39; if that is not set. Note that if endTime is earlier than startTime, the resulting values will be in time-descending order. (optional)
     * @param string $expression A string containing the expression to be evaluated. The syntax for the expression generally follows the Performance Equation syntax as described in the PI Server documentation, with the exception that expressions which target AF objects use attribute names in place of tag names in the equation. (optional)
     * @param string $selected_fields List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. (optional)
     * @param string $start_time An optional start time. The default is &#39;*-1d&#39; for element attributes and points. For event frame attributes, the default is the event frame&#39;s start time, or &#39;*-1d&#39; if that is not set. (optional)
     * @param string $web_id The ID of the target object of the expression. A target object can be a Data Server, a database, an element, an event frame or an attribute. References to attributes or points are based on the target. If this parameter is not provided, the target object is set to null. (optional)
     * @throws \PIWebAPI\Client\ApiException on non-2xx response
     * @return \PIWebAPI\Client\Model\TimedValues
     */
    public function calculationGetAtRecorded($end_time = null, $expression = null, $selected_fields = null, $start_time = null, $web_id = null)
    {
        list($response) = $this->calculationGetAtRecordedWithHttpInfo($end_time, $expression, $selected_fields, $start_time, $web_id);
        return $response;
    }

    /**
     * Operation calculationGetAtRecordedWithHttpInfo
     *
     * Returns the result of evaluating the expression at each point in time over the time range from the start time to the end time where a recorded value exists for a member of the expression.
     *
     * @param string $end_time An optional end time. The default is &#39;*&#39; for element attributes and points. For event frame attributes, the default is the event frame&#39;s end time, or &#39;*&#39; if that is not set. Note that if endTime is earlier than startTime, the resulting values will be in time-descending order. (optional)
     * @param string $expression A string containing the expression to be evaluated. The syntax for the expression generally follows the Performance Equation syntax as described in the PI Server documentation, with the exception that expressions which target AF objects use attribute names in place of tag names in the equation. (optional)
     * @param string $selected_fields List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. (optional)
     * @param string $start_time An optional start time. The default is &#39;*-1d&#39; for element attributes and points. For event frame attributes, the default is the event frame&#39;s start time, or &#39;*-1d&#39; if that is not set. (optional)
     * @param string $web_id The ID of the target object of the expression. A target object can be a Data Server, a database, an element, an event frame or an attribute. References to attributes or points are based on the target. If this parameter is not provided, the target object is set to null. (optional)
     * @throws \PIWebAPI\Client\ApiException on non-2xx response
     * @return array of \PIWebAPI\Client\Model\TimedValues, HTTP status code, HTTP response headers (array of strings)
     */
    public function calculationGetAtRecordedWithHttpInfo($end_time = null, $expression = null, $selected_fields = null, $start_time = null, $web_id = null)
    {
        // parse inputs
        $resourcePath = "/calculation/recorded";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', 'text/json', 'text/html', 'application/x-ms-application']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($end_time !== null) {
            $queryParams['endTime'] = $this->apiClient->getSerializer()->toQueryValue($end_time);
        }
        // query params
        if ($expression !== null) {
            $queryParams['expression'] = $this->apiClient->getSerializer()->toQueryValue($expression);
        }
        // query params
        if ($selected_fields !== null) {
            $queryParams['selectedFields'] = $this->apiClient->getSerializer()->toQueryValue($selected_fields);
        }
        // query params
        if ($start_time !== null) {
            $queryParams['startTime'] = $this->apiClient->getSerializer()->toQueryValue($start_time);
        }
        // query params
        if ($web_id !== null) {
            $queryParams['webId'] = $this->apiClient->getSerializer()->toQueryValue($web_id);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\PIWebAPI\Client\Model\TimedValues',
                '/calculation/recorded'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\PIWebAPI\Client\Model\TimedValues', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\PIWebAPI\Client\Model\TimedValues', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 409:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\PIWebAPI\Client\Model\Errors', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation calculationGetAtTimes
     *
     * Returns the result of evaluating the expression at the specified timestamps.
     *
     * @param string $expression A string containing the expression to be evaluated. The syntax for the expression generally follows the Performance Equation syntax as described in the PI Server documentation, with the exception that expressions which target AF objects use attribute names in place of tag names in the equation. (optional)
     * @param string $selected_fields List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. (optional)
     * @param string $sort_order The order that the returned collection is sorted. The default is &#39;Ascending&#39;. (optional)
     * @param string[] $time A list of timestamps at which to calculate the expression. (optional)
     * @param string $web_id The ID of the target object of the expression. A target object can be a Data Server, a database, an element, an event frame or an attribute. References to attributes or points are based on the target. If this parameter is not provided, the target object is set to null. (optional)
     * @throws \PIWebAPI\Client\ApiException on non-2xx response
     * @return \PIWebAPI\Client\Model\TimedValues
     */
    public function calculationGetAtTimes($expression = null, $selected_fields = null, $sort_order = null, $time = null, $web_id = null)
    {
        list($response) = $this->calculationGetAtTimesWithHttpInfo($expression, $selected_fields, $sort_order, $time, $web_id);
        return $response;
    }

    /**
     * Operation calculationGetAtTimesWithHttpInfo
     *
     * Returns the result of evaluating the expression at the specified timestamps.
     *
     * @param string $expression A string containing the expression to be evaluated. The syntax for the expression generally follows the Performance Equation syntax as described in the PI Server documentation, with the exception that expressions which target AF objects use attribute names in place of tag names in the equation. (optional)
     * @param string $selected_fields List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. (optional)
     * @param string $sort_order The order that the returned collection is sorted. The default is &#39;Ascending&#39;. (optional)
     * @param string[] $time A list of timestamps at which to calculate the expression. (optional)
     * @param string $web_id The ID of the target object of the expression. A target object can be a Data Server, a database, an element, an event frame or an attribute. References to attributes or points are based on the target. If this parameter is not provided, the target object is set to null. (optional)
     * @throws \PIWebAPI\Client\ApiException on non-2xx response
     * @return array of \PIWebAPI\Client\Model\TimedValues, HTTP status code, HTTP response headers (array of strings)
     */
    public function calculationGetAtTimesWithHttpInfo($expression = null, $selected_fields = null, $sort_order = null, $time = null, $web_id = null)
    {
        // parse inputs
        $resourcePath = "/calculation/times";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', 'text/json', 'text/html', 'application/x-ms-application']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($expression !== null) {
            $queryParams['expression'] = $this->apiClient->getSerializer()->toQueryValue($expression);
        }
        // query params
        if ($selected_fields !== null) {
            $queryParams['selectedFields'] = $this->apiClient->getSerializer()->toQueryValue($selected_fields);
        }
        // query params
        if ($sort_order !== null) {
            $queryParams['sortOrder'] = $this->apiClient->getSerializer()->toQueryValue($sort_order);
        }
        // query params
        if (is_array($time)) {
            $time = $this->apiClient->getSerializer()->serializeCollection($time, 'multi', true);
        }
        if ($time !== null) {
            $queryParams['time'] = $this->apiClient->getSerializer()->toQueryValue($time);
        }
        // query params
        if ($web_id !== null) {
            $queryParams['webId'] = $this->apiClient->getSerializer()->toQueryValue($web_id);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\PIWebAPI\Client\Model\TimedValues',
                '/calculation/times'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\PIWebAPI\Client\Model\TimedValues', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\PIWebAPI\Client\Model\TimedValues', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 409:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\PIWebAPI\Client\Model\Errors', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation calculationGetSummary
     *
     * Returns the result of evaluating the expression over the time range from the start time to the end time. The time range is first divided into a number of summary intervals. Then the calculation is performed for the specified summaries over each interval.
     *
     * @param string $calculation_basis Specifies the method of evaluating the data over the time range. The default is &#39;TimeWeighted&#39;. (optional)
     * @param string $end_time An optional end time. The default is &#39;*&#39; for element attributes and points. For event frame attributes, the default is the event frame&#39;s end time, or &#39;*&#39; if that is not set. Note that if endTime is earlier than startTime, the resulting values will be in time-descending order. (optional)
     * @param string $expression A string containing the expression to be evaluated. The syntax for the expression generally follows the Performance Equation syntax as described in the PI Server documentation, with the exception that expressions which target AF objects use attribute names in place of tag names in the equation. (optional)
     * @param string $sample_interval A time span specifies how often the filter expression is evaluated when computing the summary for an interval, if the sampleType is &#39;Interval&#39;. (optional)
     * @param string $sample_type A flag which specifies one or more summaries to compute for each interval over the time range. The default is &#39;ExpressionRecordedValues&#39;. (optional)
     * @param string $selected_fields List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. (optional)
     * @param string $start_time An optional start time. The default is &#39;*-1d&#39; for element attributes and points. For event frame attributes, the default is the event frame&#39;s start time, or &#39;*-1d&#39; if that is not set. (optional)
     * @param string $summary_duration The duration of each summary interval. (optional)
     * @param string[] $summary_type Specifies the kinds of summaries to produce over the range. The default is &#39;Total&#39;. Multiple summary types may be specified by using multiple instances of summaryType. (optional)
     * @param string $time_type Specifies how to calculate the timestamp for each interval. The default is &#39;Auto&#39;. (optional)
     * @param string $web_id The ID of the target object of the expression. A target object can be a Data Server, a database, an element, an event frame or an attribute. References to attributes or points are based on the target. If this parameter is not provided, the target object is set to null. (optional)
     * @throws \PIWebAPI\Client\ApiException on non-2xx response
     * @return \PIWebAPI\Client\Model\ItemsSummaryValue
     */
    public function calculationGetSummary($calculation_basis = null, $end_time = null, $expression = null, $sample_interval = null, $sample_type = null, $selected_fields = null, $start_time = null, $summary_duration = null, $summary_type = null, $time_type = null, $web_id = null)
    {
        list($response) = $this->calculationGetSummaryWithHttpInfo($calculation_basis, $end_time, $expression, $sample_interval, $sample_type, $selected_fields, $start_time, $summary_duration, $summary_type, $time_type, $web_id);
        return $response;
    }

    /**
     * Operation calculationGetSummaryWithHttpInfo
     *
     * Returns the result of evaluating the expression over the time range from the start time to the end time. The time range is first divided into a number of summary intervals. Then the calculation is performed for the specified summaries over each interval.
     *
     * @param string $calculation_basis Specifies the method of evaluating the data over the time range. The default is &#39;TimeWeighted&#39;. (optional)
     * @param string $end_time An optional end time. The default is &#39;*&#39; for element attributes and points. For event frame attributes, the default is the event frame&#39;s end time, or &#39;*&#39; if that is not set. Note that if endTime is earlier than startTime, the resulting values will be in time-descending order. (optional)
     * @param string $expression A string containing the expression to be evaluated. The syntax for the expression generally follows the Performance Equation syntax as described in the PI Server documentation, with the exception that expressions which target AF objects use attribute names in place of tag names in the equation. (optional)
     * @param string $sample_interval A time span specifies how often the filter expression is evaluated when computing the summary for an interval, if the sampleType is &#39;Interval&#39;. (optional)
     * @param string $sample_type A flag which specifies one or more summaries to compute for each interval over the time range. The default is &#39;ExpressionRecordedValues&#39;. (optional)
     * @param string $selected_fields List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. (optional)
     * @param string $start_time An optional start time. The default is &#39;*-1d&#39; for element attributes and points. For event frame attributes, the default is the event frame&#39;s start time, or &#39;*-1d&#39; if that is not set. (optional)
     * @param string $summary_duration The duration of each summary interval. (optional)
     * @param string[] $summary_type Specifies the kinds of summaries to produce over the range. The default is &#39;Total&#39;. Multiple summary types may be specified by using multiple instances of summaryType. (optional)
     * @param string $time_type Specifies how to calculate the timestamp for each interval. The default is &#39;Auto&#39;. (optional)
     * @param string $web_id The ID of the target object of the expression. A target object can be a Data Server, a database, an element, an event frame or an attribute. References to attributes or points are based on the target. If this parameter is not provided, the target object is set to null. (optional)
     * @throws \PIWebAPI\Client\ApiException on non-2xx response
     * @return array of \PIWebAPI\Client\Model\ItemsSummaryValue, HTTP status code, HTTP response headers (array of strings)
     */
    public function calculationGetSummaryWithHttpInfo($calculation_basis = null, $end_time = null, $expression = null, $sample_interval = null, $sample_type = null, $selected_fields = null, $start_time = null, $summary_duration = null, $summary_type = null, $time_type = null, $web_id = null)
    {
        // parse inputs
        $resourcePath = "/calculation/summary";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', 'text/json', 'text/html', 'application/x-ms-application']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($calculation_basis !== null) {
            $queryParams['calculationBasis'] = $this->apiClient->getSerializer()->toQueryValue($calculation_basis);
        }
        // query params
        if ($end_time !== null) {
            $queryParams['endTime'] = $this->apiClient->getSerializer()->toQueryValue($end_time);
        }
        // query params
        if ($expression !== null) {
            $queryParams['expression'] = $this->apiClient->getSerializer()->toQueryValue($expression);
        }
        // query params
        if ($sample_interval !== null) {
            $queryParams['sampleInterval'] = $this->apiClient->getSerializer()->toQueryValue($sample_interval);
        }
        // query params
        if ($sample_type !== null) {
            $queryParams['sampleType'] = $this->apiClient->getSerializer()->toQueryValue($sample_type);
        }
        // query params
        if ($selected_fields !== null) {
            $queryParams['selectedFields'] = $this->apiClient->getSerializer()->toQueryValue($selected_fields);
        }
        // query params
        if ($start_time !== null) {
            $queryParams['startTime'] = $this->apiClient->getSerializer()->toQueryValue($start_time);
        }
        // query params
        if ($summary_duration !== null) {
            $queryParams['summaryDuration'] = $this->apiClient->getSerializer()->toQueryValue($summary_duration);
        }
        // query params
        if (is_array($summary_type)) {
            $summary_type = $this->apiClient->getSerializer()->serializeCollection($summary_type, 'multi', true);
        }
        if ($summary_type !== null) {
            $queryParams['summaryType'] = $this->apiClient->getSerializer()->toQueryValue($summary_type);
        }
        // query params
        if ($time_type !== null) {
            $queryParams['timeType'] = $this->apiClient->getSerializer()->toQueryValue($time_type);
        }
        // query params
        if ($web_id !== null) {
            $queryParams['webId'] = $this->apiClient->getSerializer()->toQueryValue($web_id);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\PIWebAPI\Client\Model\ItemsSummaryValue',
                '/calculation/summary'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\PIWebAPI\Client\Model\ItemsSummaryValue', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\PIWebAPI\Client\Model\ItemsSummaryValue', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 409:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\PIWebAPI\Client\Model\Errors', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
