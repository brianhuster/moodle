<?php
// This file was auto-generated from sdk-root/src/data/personalize-runtime/2018-05-22/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2018-05-22', 'endpointPrefix' => 'personalize-runtime', 'jsonVersion' => '1.1', 'protocol' => 'rest-json', 'protocols' => [ 'rest-json', ], 'serviceFullName' => 'Amazon Personalize Runtime', 'serviceId' => 'Personalize Runtime', 'signatureVersion' => 'v4', 'signingName' => 'personalize', 'uid' => 'personalize-runtime-2018-05-22', ], 'operations' => [ 'GetActionRecommendations' => [ 'name' => 'GetActionRecommendations', 'http' => [ 'method' => 'POST', 'requestUri' => '/action-recommendations', ], 'input' => [ 'shape' => 'GetActionRecommendationsRequest', ], 'output' => [ 'shape' => 'GetActionRecommendationsResponse', ], 'errors' => [ [ 'shape' => 'InvalidInputException', ], [ 'shape' => 'ResourceNotFoundException', ], ], 'idempotent' => true, ], 'GetPersonalizedRanking' => [ 'name' => 'GetPersonalizedRanking', 'http' => [ 'method' => 'POST', 'requestUri' => '/personalize-ranking', ], 'input' => [ 'shape' => 'GetPersonalizedRankingRequest', ], 'output' => [ 'shape' => 'GetPersonalizedRankingResponse', ], 'errors' => [ [ 'shape' => 'InvalidInputException', ], [ 'shape' => 'ResourceNotFoundException', ], ], 'idempotent' => true, ], 'GetRecommendations' => [ 'name' => 'GetRecommendations', 'http' => [ 'method' => 'POST', 'requestUri' => '/recommendations', ], 'input' => [ 'shape' => 'GetRecommendationsRequest', ], 'output' => [ 'shape' => 'GetRecommendationsResponse', ], 'errors' => [ [ 'shape' => 'InvalidInputException', ], [ 'shape' => 'ResourceNotFoundException', ], ], 'idempotent' => true, ], ], 'shapes' => [ 'ActionID' => [ 'type' => 'string', 'max' => 256, ], 'ActionList' => [ 'type' => 'list', 'member' => [ 'shape' => 'PredictedAction', ], ], 'Arn' => [ 'type' => 'string', 'max' => 256, 'pattern' => 'arn:([a-z\\d-]+):personalize:.*:.*:.+', ], 'AttributeName' => [ 'type' => 'string', 'max' => 150, 'pattern' => '[A-Za-z\\d_]+', ], 'AttributeValue' => [ 'type' => 'string', 'max' => 1000, 'sensitive' => true, ], 'ColumnName' => [ 'type' => 'string', 'max' => 150, ], 'ColumnNamesList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ColumnName', ], 'max' => 99, ], 'ColumnValue' => [ 'type' => 'string', 'max' => 20000, ], 'Context' => [ 'type' => 'map', 'key' => [ 'shape' => 'AttributeName', ], 'value' => [ 'shape' => 'AttributeValue', ], 'max' => 150, ], 'DatasetType' => [ 'type' => 'string', 'max' => 256, ], 'ErrorMessage' => [ 'type' => 'string', ], 'FilterAttributeName' => [ 'type' => 'string', 'max' => 50, 'pattern' => '[A-Za-z0-9_]+', ], 'FilterAttributeValue' => [ 'type' => 'string', 'max' => 1000, 'sensitive' => true, ], 'FilterValues' => [ 'type' => 'map', 'key' => [ 'shape' => 'FilterAttributeName', ], 'value' => [ 'shape' => 'FilterAttributeValue', ], 'max' => 25, ], 'GetActionRecommendationsRequest' => [ 'type' => 'structure', 'members' => [ 'campaignArn' => [ 'shape' => 'Arn', ], 'userId' => [ 'shape' => 'UserID', ], 'numResults' => [ 'shape' => 'NumResults', ], 'filterArn' => [ 'shape' => 'Arn', ], 'filterValues' => [ 'shape' => 'FilterValues', ], ], ], 'GetActionRecommendationsResponse' => [ 'type' => 'structure', 'members' => [ 'actionList' => [ 'shape' => 'ActionList', ], 'recommendationId' => [ 'shape' => 'RecommendationID', ], ], ], 'GetPersonalizedRankingRequest' => [ 'type' => 'structure', 'required' => [ 'campaignArn', 'inputList', 'userId', ], 'members' => [ 'campaignArn' => [ 'shape' => 'Arn', ], 'inputList' => [ 'shape' => 'InputList', ], 'userId' => [ 'shape' => 'UserID', ], 'context' => [ 'shape' => 'Context', ], 'filterArn' => [ 'shape' => 'Arn', ], 'filterValues' => [ 'shape' => 'FilterValues', ], 'metadataColumns' => [ 'shape' => 'MetadataColumns', ], ], ], 'GetPersonalizedRankingResponse' => [ 'type' => 'structure', 'members' => [ 'personalizedRanking' => [ 'shape' => 'ItemList', ], 'recommendationId' => [ 'shape' => 'RecommendationID', ], ], ], 'GetRecommendationsRequest' => [ 'type' => 'structure', 'members' => [ 'campaignArn' => [ 'shape' => 'Arn', ], 'itemId' => [ 'shape' => 'ItemID', ], 'userId' => [ 'shape' => 'UserID', ], 'numResults' => [ 'shape' => 'NumResults', ], 'context' => [ 'shape' => 'Context', ], 'filterArn' => [ 'shape' => 'Arn', ], 'filterValues' => [ 'shape' => 'FilterValues', ], 'recommenderArn' => [ 'shape' => 'Arn', ], 'promotions' => [ 'shape' => 'PromotionList', ], 'metadataColumns' => [ 'shape' => 'MetadataColumns', ], ], ], 'GetRecommendationsResponse' => [ 'type' => 'structure', 'members' => [ 'itemList' => [ 'shape' => 'ItemList', ], 'recommendationId' => [ 'shape' => 'RecommendationID', ], ], ], 'InputList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ItemID', ], ], 'InvalidInputException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'error' => [ 'httpStatusCode' => 400, ], 'exception' => true, ], 'ItemID' => [ 'type' => 'string', 'max' => 256, ], 'ItemList' => [ 'type' => 'list', 'member' => [ 'shape' => 'PredictedItem', ], ], 'Metadata' => [ 'type' => 'map', 'key' => [ 'shape' => 'ColumnName', ], 'value' => [ 'shape' => 'ColumnValue', ], 'sensitive' => true, ], 'MetadataColumns' => [ 'type' => 'map', 'key' => [ 'shape' => 'DatasetType', ], 'value' => [ 'shape' => 'ColumnNamesList', ], 'max' => 1, ], 'Name' => [ 'type' => 'string', 'max' => 63, 'min' => 1, 'pattern' => '^[a-zA-Z0-9][a-zA-Z0-9\\-_]*', ], 'NumResults' => [ 'type' => 'integer', 'min' => 0, ], 'PercentPromotedItems' => [ 'type' => 'integer', 'max' => 100, 'min' => 1, ], 'PredictedAction' => [ 'type' => 'structure', 'members' => [ 'actionId' => [ 'shape' => 'ActionID', ], 'score' => [ 'shape' => 'Score', ], ], ], 'PredictedItem' => [ 'type' => 'structure', 'members' => [ 'itemId' => [ 'shape' => 'ItemID', ], 'score' => [ 'shape' => 'Score', ], 'promotionName' => [ 'shape' => 'Name', ], 'metadata' => [ 'shape' => 'Metadata', ], 'reason' => [ 'shape' => 'ReasonList', ], ], ], 'Promotion' => [ 'type' => 'structure', 'members' => [ 'name' => [ 'shape' => 'Name', ], 'percentPromotedItems' => [ 'shape' => 'PercentPromotedItems', ], 'filterArn' => [ 'shape' => 'Arn', ], 'filterValues' => [ 'shape' => 'FilterValues', ], ], ], 'PromotionList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Promotion', ], 'max' => 1, ], 'Reason' => [ 'type' => 'string', 'max' => 256, ], 'ReasonList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Reason', ], ], 'RecommendationID' => [ 'type' => 'string', ], 'ResourceNotFoundException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'error' => [ 'httpStatusCode' => 404, ], 'exception' => true, ], 'Score' => [ 'type' => 'double', ], 'UserID' => [ 'type' => 'string', 'max' => 256, ], ],];