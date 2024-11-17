<?php
// This file was auto-generated from sdk-root/src/data/ssm-sap/2018-05-10/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2018-05-10', 'endpointPrefix' => 'ssm-sap', 'jsonVersion' => '1.1', 'protocol' => 'rest-json', 'serviceAbbreviation' => 'SsmSap', 'serviceFullName' => 'AWS Systems Manager for SAP', 'serviceId' => 'Ssm Sap', 'signatureVersion' => 'v4', 'signingName' => 'ssm-sap', 'uid' => 'ssm-sap-2018-05-10', ], 'operations' => [ 'DeleteResourcePermission' => [ 'name' => 'DeleteResourcePermission', 'http' => [ 'method' => 'POST', 'requestUri' => '/delete-resource-permission', 'responseCode' => 200, ], 'input' => [ 'shape' => 'DeleteResourcePermissionInput', ], 'output' => [ 'shape' => 'DeleteResourcePermissionOutput', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], ], ], 'DeregisterApplication' => [ 'name' => 'DeregisterApplication', 'http' => [ 'method' => 'POST', 'requestUri' => '/deregister-application', 'responseCode' => 200, ], 'input' => [ 'shape' => 'DeregisterApplicationInput', ], 'output' => [ 'shape' => 'DeregisterApplicationOutput', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], ], ], 'GetApplication' => [ 'name' => 'GetApplication', 'http' => [ 'method' => 'POST', 'requestUri' => '/get-application', 'responseCode' => 200, ], 'input' => [ 'shape' => 'GetApplicationInput', ], 'output' => [ 'shape' => 'GetApplicationOutput', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], ], ], 'GetComponent' => [ 'name' => 'GetComponent', 'http' => [ 'method' => 'POST', 'requestUri' => '/get-component', 'responseCode' => 200, ], 'input' => [ 'shape' => 'GetComponentInput', ], 'output' => [ 'shape' => 'GetComponentOutput', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], ], ], 'GetDatabase' => [ 'name' => 'GetDatabase', 'http' => [ 'method' => 'POST', 'requestUri' => '/get-database', 'responseCode' => 200, ], 'input' => [ 'shape' => 'GetDatabaseInput', ], 'output' => [ 'shape' => 'GetDatabaseOutput', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], ], ], 'GetOperation' => [ 'name' => 'GetOperation', 'http' => [ 'method' => 'POST', 'requestUri' => '/get-operation', 'responseCode' => 200, ], 'input' => [ 'shape' => 'GetOperationInput', ], 'output' => [ 'shape' => 'GetOperationOutput', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], ], ], 'GetResourcePermission' => [ 'name' => 'GetResourcePermission', 'http' => [ 'method' => 'POST', 'requestUri' => '/get-resource-permission', 'responseCode' => 200, ], 'input' => [ 'shape' => 'GetResourcePermissionInput', ], 'output' => [ 'shape' => 'GetResourcePermissionOutput', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], ], ], 'ListApplications' => [ 'name' => 'ListApplications', 'http' => [ 'method' => 'POST', 'requestUri' => '/list-applications', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListApplicationsInput', ], 'output' => [ 'shape' => 'ListApplicationsOutput', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], ], ], 'ListComponents' => [ 'name' => 'ListComponents', 'http' => [ 'method' => 'POST', 'requestUri' => '/list-components', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListComponentsInput', ], 'output' => [ 'shape' => 'ListComponentsOutput', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], ], ], 'ListDatabases' => [ 'name' => 'ListDatabases', 'http' => [ 'method' => 'POST', 'requestUri' => '/list-databases', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListDatabasesInput', ], 'output' => [ 'shape' => 'ListDatabasesOutput', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], ], ], 'ListOperations' => [ 'name' => 'ListOperations', 'http' => [ 'method' => 'POST', 'requestUri' => '/list-operations', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListOperationsInput', ], 'output' => [ 'shape' => 'ListOperationsOutput', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], ], ], 'ListTagsForResource' => [ 'name' => 'ListTagsForResource', 'http' => [ 'method' => 'GET', 'requestUri' => '/tags/{resourceArn}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListTagsForResourceRequest', ], 'output' => [ 'shape' => 'ListTagsForResourceResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ConflictException', ], ], ], 'PutResourcePermission' => [ 'name' => 'PutResourcePermission', 'http' => [ 'method' => 'POST', 'requestUri' => '/put-resource-permission', 'responseCode' => 200, ], 'input' => [ 'shape' => 'PutResourcePermissionInput', ], 'output' => [ 'shape' => 'PutResourcePermissionOutput', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], ], ], 'RegisterApplication' => [ 'name' => 'RegisterApplication', 'http' => [ 'method' => 'POST', 'requestUri' => '/register-application', 'responseCode' => 200, ], 'input' => [ 'shape' => 'RegisterApplicationInput', ], 'output' => [ 'shape' => 'RegisterApplicationOutput', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'InternalServerException', ], ], ], 'StartApplicationRefresh' => [ 'name' => 'StartApplicationRefresh', 'http' => [ 'method' => 'POST', 'requestUri' => '/start-application-refresh', 'responseCode' => 200, ], 'input' => [ 'shape' => 'StartApplicationRefreshInput', ], 'output' => [ 'shape' => 'StartApplicationRefreshOutput', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'InternalServerException', ], ], ], 'TagResource' => [ 'name' => 'TagResource', 'http' => [ 'method' => 'POST', 'requestUri' => '/tags/{resourceArn}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'TagResourceRequest', ], 'output' => [ 'shape' => 'TagResourceResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ConflictException', ], ], ], 'UntagResource' => [ 'name' => 'UntagResource', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/tags/{resourceArn}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'UntagResourceRequest', ], 'output' => [ 'shape' => 'UntagResourceResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ConflictException', ], ], 'idempotent' => true, ], 'UpdateApplicationSettings' => [ 'name' => 'UpdateApplicationSettings', 'http' => [ 'method' => 'POST', 'requestUri' => '/update-application-settings', 'responseCode' => 200, ], 'input' => [ 'shape' => 'UpdateApplicationSettingsInput', ], 'output' => [ 'shape' => 'UpdateApplicationSettingsOutput', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'InternalServerException', ], ], ], ], 'shapes' => [ 'AppRegistryArn' => [ 'type' => 'string', 'pattern' => 'arn:aws:servicecatalog:[a-z0-9:\\/-]+', ], 'Application' => [ 'type' => 'structure', 'members' => [ 'Id' => [ 'shape' => 'ApplicationId', ], 'Type' => [ 'shape' => 'ApplicationType', ], 'Arn' => [ 'shape' => 'SsmSapArn', ], 'AppRegistryArn' => [ 'shape' => 'AppRegistryArn', ], 'Status' => [ 'shape' => 'ApplicationStatus', ], 'DiscoveryStatus' => [ 'shape' => 'ApplicationDiscoveryStatus', ], 'Components' => [ 'shape' => 'ComponentIdList', ], 'LastUpdated' => [ 'shape' => 'Timestamp', ], 'StatusMessage' => [ 'shape' => 'String', ], ], ], 'ApplicationCredential' => [ 'type' => 'structure', 'required' => [ 'DatabaseName', 'CredentialType', 'SecretId', ], 'members' => [ 'DatabaseName' => [ 'shape' => 'DatabaseName', ], 'CredentialType' => [ 'shape' => 'CredentialType', ], 'SecretId' => [ 'shape' => 'SecretId', ], ], ], 'ApplicationCredentialList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ApplicationCredential', ], 'max' => 20, 'min' => 1, ], 'ApplicationDiscoveryStatus' => [ 'type' => 'string', 'enum' => [ 'SUCCESS', 'REGISTRATION_FAILED', 'REFRESH_FAILED', 'REGISTERING', 'DELETING', ], ], 'ApplicationId' => [ 'type' => 'string', 'pattern' => '[\\w\\d]{1,50}', ], 'ApplicationStatus' => [ 'type' => 'string', 'enum' => [ 'ACTIVATED', 'STARTING', 'STOPPED', 'STOPPING', 'FAILED', 'REGISTERING', 'DELETING', 'UNKNOWN', ], ], 'ApplicationSummary' => [ 'type' => 'structure', 'members' => [ 'Id' => [ 'shape' => 'ApplicationId', ], 'Type' => [ 'shape' => 'ApplicationType', ], 'Arn' => [ 'shape' => 'SsmSapArn', ], 'Tags' => [ 'shape' => 'TagMap', ], ], ], 'ApplicationSummaryList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ApplicationSummary', ], ], 'ApplicationType' => [ 'type' => 'string', 'enum' => [ 'HANA', ], ], 'Arn' => [ 'type' => 'string', 'pattern' => 'arn:(.+:){2,4}.+$|^arn:(.+:){1,3}.+\\/.+', ], 'AssociatedHost' => [ 'type' => 'structure', 'members' => [ 'Hostname' => [ 'shape' => 'String', ], 'Ec2InstanceId' => [ 'shape' => 'String', ], 'OsVersion' => [ 'shape' => 'String', ], ], ], 'BackintConfig' => [ 'type' => 'structure', 'required' => [ 'BackintMode', 'EnsureNoBackupInProcess', ], 'members' => [ 'BackintMode' => [ 'shape' => 'BackintMode', ], 'EnsureNoBackupInProcess' => [ 'shape' => 'Boolean', ], ], ], 'BackintMode' => [ 'type' => 'string', 'enum' => [ 'AWSBackup', ], ], 'Boolean' => [ 'type' => 'boolean', 'box' => true, ], 'ClusterStatus' => [ 'type' => 'string', 'enum' => [ 'ONLINE', 'STANDBY', 'MAINTENANCE', 'OFFLINE', 'NONE', ], ], 'Component' => [ 'type' => 'structure', 'members' => [ 'ComponentId' => [ 'shape' => 'ComponentId', ], 'ParentComponent' => [ 'shape' => 'ComponentId', ], 'ChildComponents' => [ 'shape' => 'ComponentIdList', ], 'ApplicationId' => [ 'shape' => 'ApplicationId', ], 'ComponentType' => [ 'shape' => 'ComponentType', ], 'Status' => [ 'shape' => 'ComponentStatus', ], 'SapHostname' => [ 'shape' => 'String', ], 'SapKernelVersion' => [ 'shape' => 'String', ], 'HdbVersion' => [ 'shape' => 'String', ], 'Resilience' => [ 'shape' => 'Resilience', ], 'AssociatedHost' => [ 'shape' => 'AssociatedHost', ], 'Databases' => [ 'shape' => 'DatabaseIdList', ], 'Hosts' => [ 'shape' => 'HostList', 'deprecated' => true, 'deprecatedMessage' => 'This shape is no longer used. Please use AssociatedHost.', ], 'PrimaryHost' => [ 'shape' => 'String', 'deprecated' => true, 'deprecatedMessage' => 'This shape is no longer used. Please use AssociatedHost.', ], 'LastUpdated' => [ 'shape' => 'Timestamp', ], 'Arn' => [ 'shape' => 'SsmSapArn', ], ], ], 'ComponentId' => [ 'type' => 'string', 'pattern' => '[\\w\\d-]+', ], 'ComponentIdList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ComponentId', ], ], 'ComponentStatus' => [ 'type' => 'string', 'enum' => [ 'ACTIVATED', 'STARTING', 'STOPPED', 'STOPPING', 'RUNNING', 'RUNNING_WITH_ERROR', 'UNDEFINED', ], ], 'ComponentSummary' => [ 'type' => 'structure', 'members' => [ 'ApplicationId' => [ 'shape' => 'ApplicationId', ], 'ComponentId' => [ 'shape' => 'ComponentId', ], 'ComponentType' => [ 'shape' => 'ComponentType', ], 'Tags' => [ 'shape' => 'TagMap', ], 'Arn' => [ 'shape' => 'SsmSapArn', ], ], ], 'ComponentSummaryList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ComponentSummary', ], ], 'ComponentType' => [ 'type' => 'string', 'enum' => [ 'HANA', 'HANA_NODE', ], ], 'ConflictException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 409, 'senderFault' => true, ], 'exception' => true, ], 'CredentialType' => [ 'type' => 'string', 'enum' => [ 'ADMIN', ], ], 'Database' => [ 'type' => 'structure', 'members' => [ 'ApplicationId' => [ 'shape' => 'ApplicationId', ], 'ComponentId' => [ 'shape' => 'ComponentId', ], 'Credentials' => [ 'shape' => 'ApplicationCredentialList', ], 'DatabaseId' => [ 'shape' => 'DatabaseId', ], 'DatabaseName' => [ 'shape' => 'String', ], 'DatabaseType' => [ 'shape' => 'DatabaseType', ], 'Arn' => [ 'shape' => 'SsmSapArn', ], 'Status' => [ 'shape' => 'DatabaseStatus', ], 'PrimaryHost' => [ 'shape' => 'String', ], 'SQLPort' => [ 'shape' => 'Integer', ], 'LastUpdated' => [ 'shape' => 'Timestamp', ], ], ], 'DatabaseId' => [ 'type' => 'string', 'pattern' => '.*[\\w\\d]+', ], 'DatabaseIdList' => [ 'type' => 'list', 'member' => [ 'shape' => 'DatabaseId', ], ], 'DatabaseName' => [ 'type' => 'string', 'max' => 100, 'min' => 1, ], 'DatabaseStatus' => [ 'type' => 'string', 'enum' => [ 'RUNNING', 'STARTING', 'STOPPED', 'WARNING', 'UNKNOWN', 'ERROR', ], ], 'DatabaseSummary' => [ 'type' => 'structure', 'members' => [ 'ApplicationId' => [ 'shape' => 'ApplicationId', ], 'ComponentId' => [ 'shape' => 'ComponentId', ], 'DatabaseId' => [ 'shape' => 'DatabaseId', ], 'DatabaseType' => [ 'shape' => 'DatabaseType', ], 'Arn' => [ 'shape' => 'SsmSapArn', ], 'Tags' => [ 'shape' => 'TagMap', ], ], ], 'DatabaseSummaryList' => [ 'type' => 'list', 'member' => [ 'shape' => 'DatabaseSummary', ], ], 'DatabaseType' => [ 'type' => 'string', 'enum' => [ 'SYSTEM', 'TENANT', ], ], 'DeleteResourcePermissionInput' => [ 'type' => 'structure', 'required' => [ 'ResourceArn', ], 'members' => [ 'ActionType' => [ 'shape' => 'PermissionActionType', ], 'SourceResourceArn' => [ 'shape' => 'Arn', ], 'ResourceArn' => [ 'shape' => 'Arn', ], ], ], 'DeleteResourcePermissionOutput' => [ 'type' => 'structure', 'members' => [ 'Policy' => [ 'shape' => 'String', ], ], ], 'DeregisterApplicationInput' => [ 'type' => 'structure', 'required' => [ 'ApplicationId', ], 'members' => [ 'ApplicationId' => [ 'shape' => 'ApplicationId', ], ], ], 'DeregisterApplicationOutput' => [ 'type' => 'structure', 'members' => [], ], 'Filter' => [ 'type' => 'structure', 'required' => [ 'Name', 'Value', 'Operator', ], 'members' => [ 'Name' => [ 'shape' => 'FilterName', ], 'Value' => [ 'shape' => 'FilterValue', ], 'Operator' => [ 'shape' => 'FilterOperator', ], ], ], 'FilterList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], 'max' => 10, 'min' => 1, ], 'FilterName' => [ 'type' => 'string', 'max' => 32, 'min' => 1, ], 'FilterOperator' => [ 'type' => 'string', 'enum' => [ 'Equals', 'GreaterThanOrEquals', 'LessThanOrEquals', ], ], 'FilterValue' => [ 'type' => 'string', 'max' => 64, 'min' => 1, ], 'GetApplicationInput' => [ 'type' => 'structure', 'members' => [ 'ApplicationId' => [ 'shape' => 'ApplicationId', ], 'ApplicationArn' => [ 'shape' => 'SsmSapArn', ], 'AppRegistryArn' => [ 'shape' => 'AppRegistryArn', ], ], ], 'GetApplicationOutput' => [ 'type' => 'structure', 'members' => [ 'Application' => [ 'shape' => 'Application', ], 'Tags' => [ 'shape' => 'TagMap', ], ], ], 'GetComponentInput' => [ 'type' => 'structure', 'required' => [ 'ApplicationId', 'ComponentId', ], 'members' => [ 'ApplicationId' => [ 'shape' => 'ApplicationId', ], 'ComponentId' => [ 'shape' => 'ComponentId', ], ], ], 'GetComponentOutput' => [ 'type' => 'structure', 'members' => [ 'Component' => [ 'shape' => 'Component', ], 'Tags' => [ 'shape' => 'TagMap', ], ], ], 'GetDatabaseInput' => [ 'type' => 'structure', 'members' => [ 'ApplicationId' => [ 'shape' => 'ApplicationId', ], 'ComponentId' => [ 'shape' => 'ComponentId', ], 'DatabaseId' => [ 'shape' => 'DatabaseId', ], 'DatabaseArn' => [ 'shape' => 'SsmSapArn', ], ], ], 'GetDatabaseOutput' => [ 'type' => 'structure', 'members' => [ 'Database' => [ 'shape' => 'Database', ], 'Tags' => [ 'shape' => 'TagMap', ], ], ], 'GetOperationInput' => [ 'type' => 'structure', 'required' => [ 'OperationId', ], 'members' => [ 'OperationId' => [ 'shape' => 'OperationId', ], ], ], 'GetOperationOutput' => [ 'type' => 'structure', 'members' => [ 'Operation' => [ 'shape' => 'Operation', ], ], ], 'GetResourcePermissionInput' => [ 'type' => 'structure', 'required' => [ 'ResourceArn', ], 'members' => [ 'ActionType' => [ 'shape' => 'PermissionActionType', ], 'ResourceArn' => [ 'shape' => 'Arn', ], ], ], 'GetResourcePermissionOutput' => [ 'type' => 'structure', 'members' => [ 'Policy' => [ 'shape' => 'String', ], ], ], 'Host' => [ 'type' => 'structure', 'members' => [ 'HostName' => [ 'shape' => 'String', ], 'HostIp' => [ 'shape' => 'String', ], 'EC2InstanceId' => [ 'shape' => 'String', ], 'InstanceId' => [ 'shape' => 'String', ], 'HostRole' => [ 'shape' => 'HostRole', ], 'OsVersion' => [ 'shape' => 'String', ], ], ], 'HostList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Host', ], ], 'HostRole' => [ 'type' => 'string', 'enum' => [ 'LEADER', 'WORKER', 'STANDBY', 'UNKNOWN', ], ], 'InstanceId' => [ 'type' => 'string', 'pattern' => 'i-[\\w\\d]{8}$|^i-[\\w\\d]{17}', ], 'InstanceList' => [ 'type' => 'list', 'member' => [ 'shape' => 'InstanceId', ], 'max' => 1, 'min' => 1, ], 'Integer' => [ 'type' => 'integer', 'box' => true, ], 'InternalServerException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 500, ], 'exception' => true, 'fault' => true, ], 'ListApplicationsInput' => [ 'type' => 'structure', 'members' => [ 'NextToken' => [ 'shape' => 'NextToken', ], 'MaxResults' => [ 'shape' => 'MaxResults', 'box' => true, ], ], ], 'ListApplicationsOutput' => [ 'type' => 'structure', 'members' => [ 'Applications' => [ 'shape' => 'ApplicationSummaryList', ], 'NextToken' => [ 'shape' => 'NextToken', ], ], ], 'ListComponentsInput' => [ 'type' => 'structure', 'members' => [ 'ApplicationId' => [ 'shape' => 'ApplicationId', ], 'NextToken' => [ 'shape' => 'NextToken', ], 'MaxResults' => [ 'shape' => 'MaxResults', 'box' => true, ], ], ], 'ListComponentsOutput' => [ 'type' => 'structure', 'members' => [ 'Components' => [ 'shape' => 'ComponentSummaryList', ], 'NextToken' => [ 'shape' => 'NextToken', ], ], ], 'ListDatabasesInput' => [ 'type' => 'structure', 'members' => [ 'ApplicationId' => [ 'shape' => 'ApplicationId', ], 'ComponentId' => [ 'shape' => 'ComponentId', ], 'NextToken' => [ 'shape' => 'NextToken', ], 'MaxResults' => [ 'shape' => 'MaxResults', 'box' => true, ], ], ], 'ListDatabasesOutput' => [ 'type' => 'structure', 'members' => [ 'Databases' => [ 'shape' => 'DatabaseSummaryList', ], 'NextToken' => [ 'shape' => 'NextToken', ], ], ], 'ListOperationsInput' => [ 'type' => 'structure', 'required' => [ 'ApplicationId', ], 'members' => [ 'ApplicationId' => [ 'shape' => 'ApplicationId', ], 'MaxResults' => [ 'shape' => 'MaxResults', 'box' => true, ], 'NextToken' => [ 'shape' => 'NextToken', ], 'Filters' => [ 'shape' => 'FilterList', ], ], ], 'ListOperationsOutput' => [ 'type' => 'structure', 'members' => [ 'Operations' => [ 'shape' => 'OperationList', ], 'NextToken' => [ 'shape' => 'NextToken', ], ], ], 'ListTagsForResourceRequest' => [ 'type' => 'structure', 'required' => [ 'resourceArn', ], 'members' => [ 'resourceArn' => [ 'shape' => 'SsmSapArn', 'location' => 'uri', 'locationName' => 'resourceArn', ], ], ], 'ListTagsForResourceResponse' => [ 'type' => 'structure', 'members' => [ 'tags' => [ 'shape' => 'TagMap', ], ], ], 'MaxResults' => [ 'type' => 'integer', 'max' => 50, 'min' => 1, ], 'NextToken' => [ 'type' => 'string', 'pattern' => '.{16,1024}', ], 'Operation' => [ 'type' => 'structure', 'members' => [ 'Id' => [ 'shape' => 'OperationId', ], 'Type' => [ 'shape' => 'OperationType', ], 'Status' => [ 'shape' => 'OperationStatus', ], 'StatusMessage' => [ 'shape' => 'String', ], 'Properties' => [ 'shape' => 'OperationProperties', ], 'ResourceType' => [ 'shape' => 'ResourceType', ], 'ResourceId' => [ 'shape' => 'ResourceId', ], 'ResourceArn' => [ 'shape' => 'Arn', ], 'StartTime' => [ 'shape' => 'Timestamp', ], 'EndTime' => [ 'shape' => 'Timestamp', ], 'LastUpdatedTime' => [ 'shape' => 'Timestamp', ], ], ], 'OperationId' => [ 'type' => 'string', 'pattern' => '[{]?[0-9a-fA-F]{8}-([0-9a-fA-F]{4}-){3}[0-9a-fA-F]{12}[}]?', ], 'OperationIdList' => [ 'type' => 'list', 'member' => [ 'shape' => 'OperationId', ], ], 'OperationList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Operation', ], ], 'OperationMode' => [ 'type' => 'string', 'enum' => [ 'PRIMARY', 'LOGREPLAY', 'DELTA_DATASHIPPING', 'LOGREPLAY_READACCESS', 'NONE', ], ], 'OperationProperties' => [ 'type' => 'map', 'key' => [ 'shape' => 'String', ], 'value' => [ 'shape' => 'String', ], ], 'OperationStatus' => [ 'type' => 'string', 'enum' => [ 'INPROGRESS', 'SUCCESS', 'ERROR', ], ], 'OperationType' => [ 'type' => 'string', ], 'PermissionActionType' => [ 'type' => 'string', 'enum' => [ 'RESTORE', ], ], 'PutResourcePermissionInput' => [ 'type' => 'structure', 'required' => [ 'ActionType', 'SourceResourceArn', 'ResourceArn', ], 'members' => [ 'ActionType' => [ 'shape' => 'PermissionActionType', ], 'SourceResourceArn' => [ 'shape' => 'Arn', ], 'ResourceArn' => [ 'shape' => 'Arn', ], ], ], 'PutResourcePermissionOutput' => [ 'type' => 'structure', 'members' => [ 'Policy' => [ 'shape' => 'String', ], ], ], 'RegisterApplicationInput' => [ 'type' => 'structure', 'required' => [ 'ApplicationId', 'ApplicationType', 'Instances', 'Credentials', ], 'members' => [ 'ApplicationId' => [ 'shape' => 'ApplicationId', ], 'ApplicationType' => [ 'shape' => 'ApplicationType', ], 'Instances' => [ 'shape' => 'InstanceList', ], 'SapInstanceNumber' => [ 'shape' => 'SAPInstanceNumber', ], 'Sid' => [ 'shape' => 'SID', ], 'Tags' => [ 'shape' => 'TagMap', ], 'Credentials' => [ 'shape' => 'ApplicationCredentialList', ], ], ], 'RegisterApplicationOutput' => [ 'type' => 'structure', 'members' => [ 'Application' => [ 'shape' => 'Application', ], 'OperationId' => [ 'shape' => 'OperationId', ], ], ], 'ReplicationMode' => [ 'type' => 'string', 'enum' => [ 'PRIMARY', 'NONE', 'SYNC', 'SYNCMEM', 'ASYNC', ], ], 'Resilience' => [ 'type' => 'structure', 'members' => [ 'HsrTier' => [ 'shape' => 'String', ], 'HsrReplicationMode' => [ 'shape' => 'ReplicationMode', ], 'HsrOperationMode' => [ 'shape' => 'OperationMode', ], 'ClusterStatus' => [ 'shape' => 'ClusterStatus', ], ], ], 'ResourceId' => [ 'type' => 'string', 'max' => 64, 'min' => 1, ], 'ResourceNotFoundException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 404, 'senderFault' => true, ], 'exception' => true, ], 'ResourceType' => [ 'type' => 'string', 'max' => 64, 'min' => 1, ], 'SAPInstanceNumber' => [ 'type' => 'string', 'pattern' => '[0-9]{2}', ], 'SID' => [ 'type' => 'string', 'pattern' => '[A-Z][A-Z0-9]{2}', ], 'SecretId' => [ 'type' => 'string', 'max' => 100, 'min' => 1, 'sensitive' => true, ], 'SsmSapArn' => [ 'type' => 'string', 'pattern' => 'arn:(.+:){2,4}.+$|^arn:(.+:){1,3}.+\\/.+', ], 'StartApplicationRefreshInput' => [ 'type' => 'structure', 'required' => [ 'ApplicationId', ], 'members' => [ 'ApplicationId' => [ 'shape' => 'ApplicationId', ], ], ], 'StartApplicationRefreshOutput' => [ 'type' => 'structure', 'members' => [ 'OperationId' => [ 'shape' => 'OperationId', ], ], ], 'String' => [ 'type' => 'string', ], 'TagKey' => [ 'type' => 'string', 'pattern' => '(?!aws:)[a-zA-Z+-=._:/]+', ], 'TagKeyList' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagKey', ], ], 'TagMap' => [ 'type' => 'map', 'key' => [ 'shape' => 'TagKey', ], 'value' => [ 'shape' => 'TagValue', ], ], 'TagResourceRequest' => [ 'type' => 'structure', 'required' => [ 'resourceArn', 'tags', ], 'members' => [ 'resourceArn' => [ 'shape' => 'SsmSapArn', 'location' => 'uri', 'locationName' => 'resourceArn', ], 'tags' => [ 'shape' => 'TagMap', ], ], ], 'TagResourceResponse' => [ 'type' => 'structure', 'members' => [], ], 'TagValue' => [ 'type' => 'string', 'max' => 256, 'min' => 1, ], 'Timestamp' => [ 'type' => 'timestamp', ], 'UntagResourceRequest' => [ 'type' => 'structure', 'required' => [ 'resourceArn', 'tagKeys', ], 'members' => [ 'resourceArn' => [ 'shape' => 'SsmSapArn', 'location' => 'uri', 'locationName' => 'resourceArn', ], 'tagKeys' => [ 'shape' => 'TagKeyList', 'location' => 'querystring', 'locationName' => 'tagKeys', ], ], ], 'UntagResourceResponse' => [ 'type' => 'structure', 'members' => [], ], 'UpdateApplicationSettingsInput' => [ 'type' => 'structure', 'required' => [ 'ApplicationId', ], 'members' => [ 'ApplicationId' => [ 'shape' => 'ApplicationId', ], 'CredentialsToAddOrUpdate' => [ 'shape' => 'ApplicationCredentialList', ], 'CredentialsToRemove' => [ 'shape' => 'ApplicationCredentialList', ], 'Backint' => [ 'shape' => 'BackintConfig', ], ], ], 'UpdateApplicationSettingsOutput' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'String', ], 'OperationIds' => [ 'shape' => 'OperationIdList', ], ], ], 'ValidationException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], ],];
