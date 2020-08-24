<?php
// This file was auto-generated from sdk-root/src/data/license-manager/2018-08-01/docs-2.json
return [ 'version' => '2.0', 'service' => '<fullname> AWS License Manager </fullname> <p>AWS License Manager makes it easier to manage licenses from software vendors across multiple AWS accounts and on-premises servers.</p>', 'operations' => [ 'CreateLicenseConfiguration' => '<p>Creates a license configuration.</p> <p>A license configuration is an abstraction of a customer license agreement that can be consumed and enforced by License Manager. Components include specifications for the license type (licensing by instance, socket, CPU, or vCPU), allowed tenancy (shared tenancy, Dedicated Instance, Dedicated Host, or all of these), license affinity to host (how long a license must be associated with a host), and the number of licenses purchased and used.</p>', 'DeleteLicenseConfiguration' => '<p>Deletes the specified license configuration.</p> <p>You cannot delete a license configuration that is in use.</p>', 'GetLicenseConfiguration' => '<p>Gets detailed information about the specified license configuration.</p>', 'GetServiceSettings' => '<p>Gets the License Manager settings for the current Region.</p>', 'ListAssociationsForLicenseConfiguration' => '<p>Lists the resource associations for the specified license configuration.</p> <p>Resource associations need not consume licenses from a license configuration. For example, an AMI or a stopped instance might not consume a license (depending on the license rules).</p>', 'ListFailuresForLicenseConfigurationOperations' => '<p>Lists the license configuration operations that failed.</p>', 'ListLicenseConfigurations' => '<p>Lists the license configurations for your account.</p>', 'ListLicenseSpecificationsForResource' => '<p>Describes the license configurations for the specified resource.</p>', 'ListResourceInventory' => '<p>Lists resources managed using Systems Manager inventory.</p>', 'ListTagsForResource' => '<p>Lists the tags for the specified license configuration.</p>', 'ListUsageForLicenseConfiguration' => '<p>Lists all license usage records for a license configuration, displaying license consumption details by resource at a selected point in time. Use this action to audit the current license consumption for any license inventory and configuration.</p>', 'TagResource' => '<p>Adds the specified tags to the specified license configuration.</p>', 'UntagResource' => '<p>Removes the specified tags from the specified license configuration.</p>', 'UpdateLicenseConfiguration' => '<p>Modifies the attributes of an existing license configuration.</p>', 'UpdateLicenseSpecificationsForResource' => '<p>Adds or removes the specified license configurations for the specified AWS resource.</p> <p>You can update the license specifications of AMIs, instances, and hosts. You cannot update the license specifications for launch templates and AWS CloudFormation templates, as they send license configurations to the operation that creates the resource.</p>', 'UpdateServiceSettings' => '<p>Updates License Manager settings for the current Region.</p>', ], 'shapes' => [ 'AccessDeniedException' => [ 'base' => '<p>Access to resource denied.</p>', 'refs' => [], ], 'AuthorizationException' => [ 'base' => '<p>The AWS user account does not have permission to perform the action. Check the IAM policy associated with this account.</p>', 'refs' => [], ], 'AutomatedDiscoveryInformation' => [ 'base' => '<p>Describes automated discovery.</p>', 'refs' => [ 'GetLicenseConfigurationResponse$AutomatedDiscoveryInformation' => '<p>Automated discovery information.</p>', 'LicenseConfiguration$AutomatedDiscoveryInformation' => '<p>Automated discovery information.</p>', ], ], 'Boolean' => [ 'base' => NULL, 'refs' => [ 'OrganizationConfiguration$EnableIntegration' => '<p>Enables AWS Organization integration.</p>', ], ], 'BoxBoolean' => [ 'base' => NULL, 'refs' => [ 'CreateLicenseConfigurationRequest$LicenseCountHardLimit' => '<p>Indicates whether hard or soft license enforcement is used. Exceeding a hard limit blocks the launch of new instances.</p>', 'GetLicenseConfigurationResponse$LicenseCountHardLimit' => '<p>Sets the number of available licenses as a hard limit.</p>', 'GetServiceSettingsResponse$EnableCrossAccountsDiscovery' => '<p>Indicates whether cross-account discovery has been enabled.</p>', 'LicenseConfiguration$LicenseCountHardLimit' => '<p>Number of available licenses as a hard limit.</p>', 'UpdateLicenseConfigurationRequest$LicenseCountHardLimit' => '<p>New hard limit of the number of available licenses.</p>', 'UpdateServiceSettingsRequest$EnableCrossAccountsDiscovery' => '<p>Activates cross-account discovery.</p>', ], ], 'BoxInteger' => [ 'base' => NULL, 'refs' => [ 'ListAssociationsForLicenseConfigurationRequest$MaxResults' => '<p>Maximum number of results to return in a single call.</p>', 'ListFailuresForLicenseConfigurationOperationsRequest$MaxResults' => '<p>Maximum number of results to return in a single call.</p>', 'ListLicenseConfigurationsRequest$MaxResults' => '<p>Maximum number of results to return in a single call.</p>', 'ListLicenseSpecificationsForResourceRequest$MaxResults' => '<p>Maximum number of results to return in a single call.</p>', 'ListResourceInventoryRequest$MaxResults' => '<p>Maximum number of results to return in a single call.</p>', 'ListUsageForLicenseConfigurationRequest$MaxResults' => '<p>Maximum number of results to return in a single call.</p>', ], ], 'BoxLong' => [ 'base' => NULL, 'refs' => [ 'ConsumedLicenseSummary$ConsumedLicenses' => '<p>Number of licenses consumed by the resource.</p>', 'CreateLicenseConfigurationRequest$LicenseCount' => '<p>Number of licenses managed by the license configuration.</p>', 'GetLicenseConfigurationResponse$LicenseCount' => '<p>Number of available licenses.</p>', 'GetLicenseConfigurationResponse$ConsumedLicenses' => '<p>Number of licenses assigned to resources.</p>', 'LicenseConfiguration$LicenseCount' => '<p>Number of licenses managed by the license configuration.</p>', 'LicenseConfiguration$ConsumedLicenses' => '<p>Number of licenses consumed. </p>', 'LicenseConfigurationUsage$ConsumedLicenses' => '<p>Number of licenses consumed by the resource.</p>', 'ManagedResourceSummary$AssociationCount' => '<p>Number of resources associated with licenses.</p>', 'UpdateLicenseConfigurationRequest$LicenseCount' => '<p>New number of licenses managed by the license configuration.</p>', ], ], 'ConsumedLicenseSummary' => [ 'base' => '<p>Details about license consumption.</p>', 'refs' => [ 'ConsumedLicenseSummaryList$member' => NULL, ], ], 'ConsumedLicenseSummaryList' => [ 'base' => NULL, 'refs' => [ 'GetLicenseConfigurationResponse$ConsumedLicenseSummaryList' => '<p>Summaries of the licenses consumed by resources.</p>', 'LicenseConfiguration$ConsumedLicenseSummaryList' => '<p>Summaries for licenses consumed by various resources.</p>', ], ], 'CreateLicenseConfigurationRequest' => [ 'base' => NULL, 'refs' => [], ], 'CreateLicenseConfigurationResponse' => [ 'base' => NULL, 'refs' => [], ], 'DateTime' => [ 'base' => NULL, 'refs' => [ 'AutomatedDiscoveryInformation$LastRunTime' => '<p>Time that automated discovery last ran.</p>', 'LicenseConfigurationAssociation$AssociationTime' => '<p>Time when the license configuration was associated with the resource.</p>', 'LicenseConfigurationUsage$AssociationTime' => '<p>Time when the license configuration was initially associated with the resource.</p>', 'LicenseOperationFailure$FailureTime' => '<p>Failure time.</p>', ], ], 'DeleteLicenseConfigurationRequest' => [ 'base' => NULL, 'refs' => [], ], 'DeleteLicenseConfigurationResponse' => [ 'base' => NULL, 'refs' => [], ], 'FailedDependencyException' => [ 'base' => '<p>A dependency required to run the API is missing.</p>', 'refs' => [], ], 'Filter' => [ 'base' => '<p>A filter name and value pair that is used to return more specific results from a describe operation. Filters can be used to match a set of resources by specific criteria, such as tags, attributes, or IDs.</p>', 'refs' => [ 'Filters$member' => NULL, ], ], 'FilterLimitExceededException' => [ 'base' => '<p>The request uses too many filters or too many filter values.</p>', 'refs' => [], ], 'FilterName' => [ 'base' => NULL, 'refs' => [ 'Filter$Name' => '<p>Name of the filter. Filter names are case-sensitive.</p>', ], ], 'FilterValue' => [ 'base' => NULL, 'refs' => [ 'FilterValues$member' => NULL, ], ], 'FilterValues' => [ 'base' => NULL, 'refs' => [ 'Filter$Values' => '<p>Filter values. Filter values are case-sensitive.</p>', ], ], 'Filters' => [ 'base' => NULL, 'refs' => [ 'ListLicenseConfigurationsRequest$Filters' => '<p>Filters to scope the results. The following filters and logical operators are supported:</p> <ul> <li> <p> <code>licenseCountingType</code> - The dimension on which licenses are counted. Possible values are <code>vCPU</code> | <code>Instance</code> | <code>Core</code> | <code>Socket</code>. Logical operators are <code>EQUALS</code> | <code>NOT_EQUALS</code>.</p> </li> <li> <p> <code>enforceLicenseCount</code> - A Boolean value that indicates whether hard license enforcement is used. Logical operators are <code>EQUALS</code> | <code>NOT_EQUALS</code>.</p> </li> <li> <p> <code>usagelimitExceeded</code> - A Boolean value that indicates whether the available licenses have been exceeded. Logical operators are <code>EQUALS</code> | <code>NOT_EQUALS</code>.</p> </li> </ul>', 'ListUsageForLicenseConfigurationRequest$Filters' => '<p>Filters to scope the results. The following filters and logical operators are supported:</p> <ul> <li> <p> <code>resourceArn</code> - The ARN of the license configuration resource. Logical operators are <code>EQUALS</code> | <code>NOT_EQUALS</code>.</p> </li> <li> <p> <code>resourceType</code> - The resource type (EC2_INSTANCE | EC2_HOST | EC2_AMI | SYSTEMS_MANAGER_MANAGED_INSTANCE). Logical operators are <code>EQUALS</code> | <code>NOT_EQUALS</code>.</p> </li> <li> <p> <code>resourceAccount</code> - The ID of the account that owns the resource. Logical operators are <code>EQUALS</code> | <code>NOT_EQUALS</code>.</p> </li> </ul>', ], ], 'GetLicenseConfigurationRequest' => [ 'base' => NULL, 'refs' => [], ], 'GetLicenseConfigurationResponse' => [ 'base' => NULL, 'refs' => [], ], 'GetServiceSettingsRequest' => [ 'base' => NULL, 'refs' => [], ], 'GetServiceSettingsResponse' => [ 'base' => NULL, 'refs' => [], ], 'InvalidParameterValueException' => [ 'base' => '<p>One or more parameter values are not valid.</p>', 'refs' => [], ], 'InvalidResourceStateException' => [ 'base' => '<p>License Manager cannot allocate a license to a resource because of its state. </p> <p>For example, you cannot allocate a license to an instance in the process of shutting down.</p>', 'refs' => [], ], 'InventoryFilter' => [ 'base' => '<p>An inventory filter.</p>', 'refs' => [ 'InventoryFilterList$member' => NULL, ], ], 'InventoryFilterCondition' => [ 'base' => NULL, 'refs' => [ 'InventoryFilter$Condition' => '<p>Condition of the filter.</p>', ], ], 'InventoryFilterList' => [ 'base' => NULL, 'refs' => [ 'ListResourceInventoryRequest$Filters' => '<p>Filters to scope the results. The following filters and logical operators are supported:</p> <ul> <li> <p> <code>account_id</code> - The ID of the AWS account that owns the resource. Logical operators are <code>EQUALS</code> | <code>NOT_EQUALS</code>.</p> </li> <li> <p> <code>application_name</code> - The name of the application. Logical operators are <code>EQUALS</code> | <code>BEGINS_WITH</code>.</p> </li> <li> <p> <code>license_included</code> - The type of license included. Logical operators are <code>EQUALS</code> | <code>NOT_EQUALS</code>. Possible values are <code>sql-server-enterprise</code> | <code>sql-server-standard</code> | <code>sql-server-web</code> | <code>windows-server-datacenter</code>.</p> </li> <li> <p> <code>platform</code> - The platform of the resource. Logical operators are <code>EQUALS</code> | <code>BEGINS_WITH</code>.</p> </li> <li> <p> <code>resource_id</code> - The ID of the resource. Logical operators are <code>EQUALS</code> | <code>NOT_EQUALS</code>.</p> </li> </ul>', ], ], 'LicenseConfiguration' => [ 'base' => '<p>A license configuration is an abstraction of a customer license agreement that can be consumed and enforced by License Manager. Components include specifications for the license type (licensing by instance, socket, CPU, or vCPU), allowed tenancy (shared tenancy, Dedicated Instance, Dedicated Host, or all of these), host affinity (how long a VM must be associated with a host), and the number of licenses purchased and used.</p>', 'refs' => [ 'LicenseConfigurations$member' => NULL, ], ], 'LicenseConfigurationAssociation' => [ 'base' => '<p>Describes an association with a license configuration.</p>', 'refs' => [ 'LicenseConfigurationAssociations$member' => NULL, ], ], 'LicenseConfigurationAssociations' => [ 'base' => NULL, 'refs' => [ 'ListAssociationsForLicenseConfigurationResponse$LicenseConfigurationAssociations' => '<p>Information about the associations for the license configuration.</p>', ], ], 'LicenseConfigurationStatus' => [ 'base' => NULL, 'refs' => [ 'UpdateLicenseConfigurationRequest$LicenseConfigurationStatus' => '<p>New status of the license configuration.</p>', ], ], 'LicenseConfigurationUsage' => [ 'base' => '<p>Details about the usage of a resource associated with a license configuration.</p>', 'refs' => [ 'LicenseConfigurationUsageList$member' => NULL, ], ], 'LicenseConfigurationUsageList' => [ 'base' => NULL, 'refs' => [ 'ListUsageForLicenseConfigurationResponse$LicenseConfigurationUsageList' => '<p>Information about the license configurations.</p>', ], ], 'LicenseConfigurations' => [ 'base' => NULL, 'refs' => [ 'ListLicenseConfigurationsResponse$LicenseConfigurations' => '<p>Information about the license configurations.</p>', ], ], 'LicenseCountingType' => [ 'base' => NULL, 'refs' => [ 'CreateLicenseConfigurationRequest$LicenseCountingType' => '<p>Dimension used to track the license inventory.</p>', 'GetLicenseConfigurationResponse$LicenseCountingType' => '<p>Dimension on which the licenses are counted.</p>', 'LicenseConfiguration$LicenseCountingType' => '<p>Dimension to use to track the license inventory.</p>', ], ], 'LicenseOperationFailure' => [ 'base' => '<p>Describes the failure of a license operation.</p>', 'refs' => [ 'LicenseOperationFailureList$member' => NULL, ], ], 'LicenseOperationFailureList' => [ 'base' => NULL, 'refs' => [ 'ListFailuresForLicenseConfigurationOperationsResponse$LicenseOperationFailureList' => '<p>License configuration operations that failed.</p>', ], ], 'LicenseSpecification' => [ 'base' => '<p>Details for associating a license configuration with a resource.</p>', 'refs' => [ 'LicenseSpecifications$member' => NULL, ], ], 'LicenseSpecifications' => [ 'base' => NULL, 'refs' => [ 'ListLicenseSpecificationsForResourceResponse$LicenseSpecifications' => '<p>License configurations associated with a resource.</p>', 'UpdateLicenseSpecificationsForResourceRequest$AddLicenseSpecifications' => '<p>ARNs of the license configurations to add.</p>', 'UpdateLicenseSpecificationsForResourceRequest$RemoveLicenseSpecifications' => '<p>ARNs of the license configurations to remove.</p>', ], ], 'LicenseUsageException' => [ 'base' => '<p>You do not have enough licenses available to support a new resource launch.</p>', 'refs' => [], ], 'ListAssociationsForLicenseConfigurationRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListAssociationsForLicenseConfigurationResponse' => [ 'base' => NULL, 'refs' => [], ], 'ListFailuresForLicenseConfigurationOperationsRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListFailuresForLicenseConfigurationOperationsResponse' => [ 'base' => NULL, 'refs' => [], ], 'ListLicenseConfigurationsRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListLicenseConfigurationsResponse' => [ 'base' => NULL, 'refs' => [], ], 'ListLicenseSpecificationsForResourceRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListLicenseSpecificationsForResourceResponse' => [ 'base' => NULL, 'refs' => [], ], 'ListResourceInventoryRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListResourceInventoryResponse' => [ 'base' => NULL, 'refs' => [], ], 'ListTagsForResourceRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListTagsForResourceResponse' => [ 'base' => NULL, 'refs' => [], ], 'ListUsageForLicenseConfigurationRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListUsageForLicenseConfigurationResponse' => [ 'base' => NULL, 'refs' => [], ], 'ManagedResourceSummary' => [ 'base' => '<p>Summary information about a managed resource.</p>', 'refs' => [ 'ManagedResourceSummaryList$member' => NULL, ], ], 'ManagedResourceSummaryList' => [ 'base' => NULL, 'refs' => [ 'GetLicenseConfigurationResponse$ManagedResourceSummaryList' => '<p>Summaries of the managed resources.</p>', 'LicenseConfiguration$ManagedResourceSummaryList' => '<p>Summaries for managed resources.</p>', ], ], 'Message' => [ 'base' => NULL, 'refs' => [ 'AccessDeniedException$Message' => NULL, 'AuthorizationException$Message' => NULL, 'FailedDependencyException$Message' => NULL, 'FilterLimitExceededException$Message' => NULL, 'InvalidParameterValueException$Message' => NULL, 'InvalidResourceStateException$Message' => NULL, 'LicenseUsageException$Message' => NULL, 'RateLimitExceededException$Message' => NULL, 'ResourceLimitExceededException$Message' => NULL, 'ServerInternalException$Message' => NULL, ], ], 'Metadata' => [ 'base' => '<p>Reserved.</p>', 'refs' => [ 'MetadataList$member' => NULL, ], ], 'MetadataList' => [ 'base' => NULL, 'refs' => [ 'LicenseOperationFailure$MetadataList' => '<p>Reserved.</p>', ], ], 'OrganizationConfiguration' => [ 'base' => '<p>Configuration information for AWS Organizations.</p>', 'refs' => [ 'GetServiceSettingsResponse$OrganizationConfiguration' => '<p>Indicates whether AWS Organizations has been integrated with License Manager for cross-account discovery.</p>', 'UpdateServiceSettingsRequest$OrganizationConfiguration' => '<p>Enables integration with AWS Organizations for cross-account discovery.</p>', ], ], 'ProductInformation' => [ 'base' => '<p>Describes product information for a license configuration.</p>', 'refs' => [ 'ProductInformationList$member' => NULL, ], ], 'ProductInformationFilter' => [ 'base' => '<p>Describes product information filters.</p>', 'refs' => [ 'ProductInformationFilterList$member' => NULL, ], ], 'ProductInformationFilterList' => [ 'base' => NULL, 'refs' => [ 'ProductInformation$ProductInformationFilterList' => '<p>Product information filters.</p> <p>The following filters and logical operators are supported when the resource type is <code>SSM_MANAGED</code>:</p> <ul> <li> <p> <code>Application Name</code> - The name of the application. Logical operator is <code>EQUALS</code>.</p> </li> <li> <p> <code>Application Publisher</code> - The publisher of the application. Logical operator is <code>EQUALS</code>.</p> </li> <li> <p> <code>Application Version</code> - The version of the application. Logical operator is <code>EQUALS</code>.</p> </li> <li> <p> <code>Platform Name</code> - The name of the platform. Logical operator is <code>EQUALS</code>.</p> </li> <li> <p> <code>Platform Type</code> - The platform type. Logical operator is <code>EQUALS</code>.</p> </li> <li> <p> <code>License Included</code> - The type of license included. Logical operators are <code>EQUALS</code> and <code>NOT_EQUALS</code>. Possible values are: <code>sql-server-enterprise</code> | <code>sql-server-standard</code> | <code>sql-server-web</code> | <code>windows-server-datacenter</code>.</p> </li> </ul> <p>The following filters and logical operators are supported when the resource type is <code>RDS</code>:</p> <ul> <li> <p> <code>Engine Edition</code> - The edition of the database engine. Logical operator is <code>EQUALS</code>. Possible values are: <code>oracle-ee</code> | <code>oracle-se</code> | <code>oracle-se1</code> | <code>oracle-se2</code>.</p> </li> <li> <p> <code>License Pack</code> - The license pack. Logical operator is <code>EQUALS</code>. Possible values are: <code>data guard</code> | <code>diagnostic pack sqlt</code> | <code>tuning pack sqlt</code> | <code>ols</code> | <code>olap</code>.</p> </li> </ul>', ], ], 'ProductInformationList' => [ 'base' => NULL, 'refs' => [ 'CreateLicenseConfigurationRequest$ProductInformationList' => '<p>Product information.</p>', 'GetLicenseConfigurationResponse$ProductInformationList' => '<p>Product information.</p>', 'LicenseConfiguration$ProductInformationList' => '<p>Product information.</p>', 'UpdateLicenseConfigurationRequest$ProductInformationList' => '<p>New product information.</p>', ], ], 'RateLimitExceededException' => [ 'base' => '<p>Too many requests have been submitted. Try again after a brief wait.</p>', 'refs' => [], ], 'ResourceInventory' => [ 'base' => '<p>Details about a resource.</p>', 'refs' => [ 'ResourceInventoryList$member' => NULL, ], ], 'ResourceInventoryList' => [ 'base' => NULL, 'refs' => [ 'ListResourceInventoryResponse$ResourceInventoryList' => '<p>Information about the resources.</p>', ], ], 'ResourceLimitExceededException' => [ 'base' => '<p>Your resource limits have been exceeded.</p>', 'refs' => [], ], 'ResourceType' => [ 'base' => NULL, 'refs' => [ 'ConsumedLicenseSummary$ResourceType' => '<p>Resource type of the resource consuming a license.</p>', 'LicenseConfigurationAssociation$ResourceType' => '<p>Type of server resource.</p>', 'LicenseConfigurationUsage$ResourceType' => '<p>Type of resource.</p>', 'LicenseOperationFailure$ResourceType' => '<p>Resource type.</p>', 'ManagedResourceSummary$ResourceType' => '<p>Type of resource associated with a license.</p>', 'ResourceInventory$ResourceType' => '<p>Type of resource.</p>', ], ], 'ServerInternalException' => [ 'base' => '<p>The server experienced an internal error. Try again.</p>', 'refs' => [], ], 'String' => [ 'base' => NULL, 'refs' => [ 'CreateLicenseConfigurationRequest$Name' => '<p>Name of the license configuration.</p>', 'CreateLicenseConfigurationRequest$Description' => '<p>Description of the license configuration.</p>', 'CreateLicenseConfigurationResponse$LicenseConfigurationArn' => '<p>Amazon Resource Name (ARN) of the license configuration.</p>', 'DeleteLicenseConfigurationRequest$LicenseConfigurationArn' => '<p>ID of the license configuration.</p>', 'GetLicenseConfigurationRequest$LicenseConfigurationArn' => '<p>Amazon Resource Name (ARN) of the license configuration.</p>', 'GetLicenseConfigurationResponse$LicenseConfigurationId' => '<p>Unique ID for the license configuration.</p>', 'GetLicenseConfigurationResponse$LicenseConfigurationArn' => '<p>Amazon Resource Name (ARN) of the license configuration.</p>', 'GetLicenseConfigurationResponse$Name' => '<p>Name of the license configuration.</p>', 'GetLicenseConfigurationResponse$Description' => '<p>Description of the license configuration.</p>', 'GetLicenseConfigurationResponse$Status' => '<p>License configuration status.</p>', 'GetLicenseConfigurationResponse$OwnerAccountId' => '<p>Account ID of the owner of the license configuration.</p>', 'GetServiceSettingsResponse$S3BucketArn' => '<p>Regional S3 bucket path for storing reports, license trail event data, discovery data, and so on.</p>', 'GetServiceSettingsResponse$SnsTopicArn' => '<p>SNS topic configured to receive notifications from License Manager.</p>', 'GetServiceSettingsResponse$LicenseManagerResourceShareArn' => '<p>Amazon Resource Name (ARN) of the AWS resource share. The License Manager master account will provide member accounts with access to this share.</p>', 'InventoryFilter$Name' => '<p>Name of the filter.</p>', 'InventoryFilter$Value' => '<p>Value of the filter.</p>', 'LicenseConfiguration$LicenseConfigurationId' => '<p>Unique ID of the license configuration.</p>', 'LicenseConfiguration$LicenseConfigurationArn' => '<p>Amazon Resource Name (ARN) of the license configuration.</p>', 'LicenseConfiguration$Name' => '<p>Name of the license configuration.</p>', 'LicenseConfiguration$Description' => '<p>Description of the license configuration.</p>', 'LicenseConfiguration$Status' => '<p>Status of the license configuration.</p>', 'LicenseConfiguration$OwnerAccountId' => '<p>Account ID of the license configuration\'s owner.</p>', 'LicenseConfigurationAssociation$ResourceArn' => '<p>Amazon Resource Name (ARN) of the resource.</p>', 'LicenseConfigurationAssociation$ResourceOwnerId' => '<p>ID of the AWS account that owns the resource consuming licenses.</p>', 'LicenseConfigurationUsage$ResourceArn' => '<p>Amazon Resource Name (ARN) of the resource.</p>', 'LicenseConfigurationUsage$ResourceStatus' => '<p>Status of the resource.</p>', 'LicenseConfigurationUsage$ResourceOwnerId' => '<p>ID of the account that owns the resource.</p>', 'LicenseOperationFailure$ResourceArn' => '<p>Amazon Resource Name (ARN) of the resource.</p>', 'LicenseOperationFailure$ErrorMessage' => '<p>Error message.</p>', 'LicenseOperationFailure$OperationName' => '<p>Name of the operation.</p>', 'LicenseOperationFailure$ResourceOwnerId' => '<p>ID of the AWS account that owns the resource.</p>', 'LicenseOperationFailure$OperationRequestedBy' => '<p>The requester is "License Manager Automated Discovery".</p>', 'LicenseSpecification$LicenseConfigurationArn' => '<p>Amazon Resource Name (ARN) of the license configuration.</p>', 'ListAssociationsForLicenseConfigurationRequest$LicenseConfigurationArn' => '<p>Amazon Resource Name (ARN) of a license configuration.</p>', 'ListAssociationsForLicenseConfigurationRequest$NextToken' => '<p>Token for the next set of results.</p>', 'ListAssociationsForLicenseConfigurationResponse$NextToken' => '<p>Token for the next set of results.</p>', 'ListFailuresForLicenseConfigurationOperationsRequest$LicenseConfigurationArn' => '<p>Amazon Resource Name of the license configuration.</p>', 'ListFailuresForLicenseConfigurationOperationsRequest$NextToken' => '<p>Token for the next set of results.</p>', 'ListFailuresForLicenseConfigurationOperationsResponse$NextToken' => '<p>Token for the next set of results.</p>', 'ListLicenseConfigurationsRequest$NextToken' => '<p>Token for the next set of results.</p>', 'ListLicenseConfigurationsResponse$NextToken' => '<p>Token for the next set of results.</p>', 'ListLicenseSpecificationsForResourceRequest$ResourceArn' => '<p>Amazon Resource Name (ARN) of a resource that has an associated license configuration.</p>', 'ListLicenseSpecificationsForResourceRequest$NextToken' => '<p>Token for the next set of results.</p>', 'ListLicenseSpecificationsForResourceResponse$NextToken' => '<p>Token for the next set of results.</p>', 'ListResourceInventoryRequest$NextToken' => '<p>Token for the next set of results.</p>', 'ListResourceInventoryResponse$NextToken' => '<p>Token for the next set of results.</p>', 'ListTagsForResourceRequest$ResourceArn' => '<p>Amazon Resource Name (ARN) of the license configuration.</p>', 'ListUsageForLicenseConfigurationRequest$LicenseConfigurationArn' => '<p>Amazon Resource Name (ARN) of the license configuration.</p>', 'ListUsageForLicenseConfigurationRequest$NextToken' => '<p>Token for the next set of results.</p>', 'ListUsageForLicenseConfigurationResponse$NextToken' => '<p>Token for the next set of results.</p>', 'Metadata$Name' => '<p>Reserved.</p>', 'Metadata$Value' => '<p>Reserved.</p>', 'ProductInformation$ResourceType' => '<p>Resource type. The possible values are <code>SSM_MANAGED</code> | <code>RDS</code>.</p>', 'ProductInformationFilter$ProductInformationFilterName' => '<p>Filter name.</p>', 'ProductInformationFilter$ProductInformationFilterComparator' => '<p>Logical operator.</p>', 'ResourceInventory$ResourceId' => '<p>ID of the resource.</p>', 'ResourceInventory$ResourceArn' => '<p>Amazon Resource Name (ARN) of the resource.</p>', 'ResourceInventory$Platform' => '<p>Platform of the resource.</p>', 'ResourceInventory$PlatformVersion' => '<p>Platform version of the resource in the inventory.</p>', 'ResourceInventory$ResourceOwningAccountId' => '<p>ID of the account that owns the resource.</p>', 'StringList$member' => NULL, 'Tag$Key' => '<p>Tag key.</p>', 'Tag$Value' => '<p>Tag value.</p>', 'TagKeyList$member' => NULL, 'TagResourceRequest$ResourceArn' => '<p>Amazon Resource Name (ARN) of the license configuration.</p>', 'UntagResourceRequest$ResourceArn' => '<p>Amazon Resource Name (ARN) of the license configuration.</p>', 'UpdateLicenseConfigurationRequest$LicenseConfigurationArn' => '<p>Amazon Resource Name (ARN) of the license configuration.</p>', 'UpdateLicenseConfigurationRequest$Name' => '<p>New name of the license configuration.</p>', 'UpdateLicenseConfigurationRequest$Description' => '<p>New description of the license configuration.</p>', 'UpdateLicenseSpecificationsForResourceRequest$ResourceArn' => '<p>Amazon Resource Name (ARN) of the AWS resource.</p>', 'UpdateServiceSettingsRequest$S3BucketArn' => '<p>Amazon Resource Name (ARN) of the Amazon S3 bucket where the License Manager information is stored.</p>', 'UpdateServiceSettingsRequest$SnsTopicArn' => '<p>Amazon Resource Name (ARN) of the Amazon SNS topic used for License Manager alerts.</p>', ], ], 'StringList' => [ 'base' => NULL, 'refs' => [ 'CreateLicenseConfigurationRequest$LicenseRules' => '<p>License rules. The syntax is #name=value (for example, #allowedTenancy=EC2-DedicatedHost). The available rules vary by dimension, as follows.</p> <ul> <li> <p> <code>Cores</code> dimension: <code>allowedTenancy</code> | <code>licenseAffinityToHost</code> | <code>maximumCores</code> | <code>minimumCores</code> </p> </li> <li> <p> <code>Instances</code> dimension: <code>allowedTenancy</code> | <code>maximumCores</code> | <code>minimumCores</code> | <code>maximumSockets</code> | <code>minimumSockets</code> | <code>maximumVcpus</code> | <code>minimumVcpus</code> </p> </li> <li> <p> <code>Sockets</code> dimension: <code>allowedTenancy</code> | <code>licenseAffinityToHost</code> | <code>maximumSockets</code> | <code>minimumSockets</code> </p> </li> <li> <p> <code>vCPUs</code> dimension: <code>allowedTenancy</code> | <code>honorVcpuOptimization</code> | <code>maximumVcpus</code> | <code>minimumVcpus</code> </p> </li> </ul> <p>The unit for <code>licenseAffinityToHost</code> is days and the range is 1 to 180. The possible values for <code>allowedTenancy</code> are <code>EC2-Default</code>, <code>EC2-DedicatedHost</code>, and <code>EC2-DedicatedInstance</code>. The possible values for <code>honorVcpuOptimization</code> are <code>True</code> and <code>False</code>.</p>', 'GetLicenseConfigurationResponse$LicenseRules' => '<p>License rules.</p>', 'LicenseConfiguration$LicenseRules' => '<p>License rules.</p>', 'ListLicenseConfigurationsRequest$LicenseConfigurationArns' => '<p>Amazon Resource Names (ARN) of the license configurations.</p>', 'ProductInformationFilter$ProductInformationFilterValue' => '<p>Filter value.</p>', 'UpdateLicenseConfigurationRequest$LicenseRules' => '<p>New license rule. The only rule that you can add after you create a license configuration is licenseAffinityToHost.</p>', ], ], 'Tag' => [ 'base' => '<p>Details about a tag for a license configuration.</p>', 'refs' => [ 'TagList$member' => NULL, ], ], 'TagKeyList' => [ 'base' => NULL, 'refs' => [ 'UntagResourceRequest$TagKeys' => '<p>Keys identifying the tags to remove.</p>', ], ], 'TagList' => [ 'base' => NULL, 'refs' => [ 'CreateLicenseConfigurationRequest$Tags' => '<p>Tags to add to the license configuration.</p>', 'GetLicenseConfigurationResponse$Tags' => '<p>Tags for the license configuration.</p>', 'ListTagsForResourceResponse$Tags' => '<p>Information about the tags.</p>', 'TagResourceRequest$Tags' => '<p>One or more tags.</p>', ], ], 'TagResourceRequest' => [ 'base' => NULL, 'refs' => [], ], 'TagResourceResponse' => [ 'base' => NULL, 'refs' => [], ], 'UntagResourceRequest' => [ 'base' => NULL, 'refs' => [], ], 'UntagResourceResponse' => [ 'base' => NULL, 'refs' => [], ], 'UpdateLicenseConfigurationRequest' => [ 'base' => NULL, 'refs' => [], ], 'UpdateLicenseConfigurationResponse' => [ 'base' => NULL, 'refs' => [], ], 'UpdateLicenseSpecificationsForResourceRequest' => [ 'base' => NULL, 'refs' => [], ], 'UpdateLicenseSpecificationsForResourceResponse' => [ 'base' => NULL, 'refs' => [], ], 'UpdateServiceSettingsRequest' => [ 'base' => NULL, 'refs' => [], ], 'UpdateServiceSettingsResponse' => [ 'base' => NULL, 'refs' => [], ], ],];
