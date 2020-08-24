<?php
// This file was auto-generated from sdk-root/src/data/ram/2018-01-04/docs-2.json
return [ 'version' => '2.0', 'service' => '<p>Use AWS Resource Access Manager to share AWS resources between AWS accounts. To share a resource, you create a resource share, associate the resource with the resource share, and specify the principals that can access the resources associated with the resource share. The following principals are supported: AWS accounts, organizational units (OU) from AWS Organizations, and organizations from AWS Organizations.</p> <p>For more information, see the <a href="https://docs.aws.amazon.com/ram/latest/userguide/">AWS Resource Access Manager User Guide</a>.</p>', 'operations' => [ 'AcceptResourceShareInvitation' => '<p>Accepts an invitation to a resource share from another AWS account.</p>', 'AssociateResourceShare' => '<p>Associates the specified resource share with the specified principals and resources.</p>', 'AssociateResourceSharePermission' => '<p>Associates a permission with a resource share.</p>', 'CreateResourceShare' => '<p>Creates a resource share.</p>', 'DeleteResourceShare' => '<p>Deletes the specified resource share.</p>', 'DisassociateResourceShare' => '<p>Disassociates the specified principals or resources from the specified resource share.</p>', 'DisassociateResourceSharePermission' => '<p>Disassociates an AWS RAM permission from a resource share.</p>', 'EnableSharingWithAwsOrganization' => '<p>Enables resource sharing within your AWS Organization.</p> <p>The caller must be the master account for the AWS Organization.</p>', 'GetPermission' => '<p>Gets the contents of an AWS RAM permission in JSON format.</p>', 'GetResourcePolicies' => '<p>Gets the policies for the specified resources that you own and have shared.</p>', 'GetResourceShareAssociations' => '<p>Gets the resources or principals for the resource shares that you own.</p>', 'GetResourceShareInvitations' => '<p>Gets the invitations for resource sharing that you\'ve received.</p>', 'GetResourceShares' => '<p>Gets the resource shares that you own or the resource shares that are shared with you.</p>', 'ListPendingInvitationResources' => '<p>Lists the resources in a resource share that is shared with you but that the invitation is still pending for.</p>', 'ListPermissions' => '<p>Lists the AWS RAM permissions.</p>', 'ListPrincipals' => '<p>Lists the principals that you have shared resources with or that have shared resources with you.</p>', 'ListResourceSharePermissions' => '<p>Lists the AWS RAM permissions that are associated with a resource share.</p>', 'ListResourceTypes' => '<p>Lists the shareable resource types supported by AWS RAM.</p>', 'ListResources' => '<p>Lists the resources that you added to a resource shares or the resources that are shared with you.</p>', 'PromoteResourceShareCreatedFromPolicy' => '<p>Resource shares that were created by attaching a policy to a resource are visible only to the resource share owner, and the resource share cannot be modified in AWS RAM.</p> <p>Use this API action to promote the resource share. When you promote the resource share, it becomes:</p> <ul> <li> <p>Visible to all principals that it is shared with.</p> </li> <li> <p>Modifiable in AWS RAM.</p> </li> </ul>', 'RejectResourceShareInvitation' => '<p>Rejects an invitation to a resource share from another AWS account.</p>', 'TagResource' => '<p>Adds the specified tags to the specified resource share that you own.</p>', 'UntagResource' => '<p>Removes the specified tags from the specified resource share that you own.</p>', 'UpdateResourceShare' => '<p>Updates the specified resource share that you own.</p>', ], 'shapes' => [ 'AcceptResourceShareInvitationRequest' => [ 'base' => NULL, 'refs' => [], ], 'AcceptResourceShareInvitationResponse' => [ 'base' => NULL, 'refs' => [], ], 'AssociateResourceSharePermissionRequest' => [ 'base' => NULL, 'refs' => [], ], 'AssociateResourceSharePermissionResponse' => [ 'base' => NULL, 'refs' => [], ], 'AssociateResourceShareRequest' => [ 'base' => NULL, 'refs' => [], ], 'AssociateResourceShareResponse' => [ 'base' => NULL, 'refs' => [], ], 'Boolean' => [ 'base' => NULL, 'refs' => [ 'AssociateResourceSharePermissionRequest$replace' => '<p>Indicates whether the permission should replace the permissions that are currently associated with the resource share. Use <code>true</code> to replace the current permissions. Use <code>false</code> to add the permission to the current permission.</p>', 'AssociateResourceSharePermissionResponse$returnValue' => '<p>Indicates whether the request succeeded.</p>', 'CreateResourceShareRequest$allowExternalPrincipals' => '<p>Indicates whether principals outside your AWS organization can be associated with a resource share.</p>', 'DeleteResourceShareResponse$returnValue' => '<p>Indicates whether the request succeeded.</p>', 'DisassociateResourceSharePermissionResponse$returnValue' => '<p>Indicates whether the request succeeded.</p>', 'EnableSharingWithAwsOrganizationResponse$returnValue' => '<p>Indicates whether the request succeeded.</p>', 'Principal$external' => '<p>Indicates whether the principal belongs to the same AWS organization as the AWS account that owns the resource share.</p>', 'PromoteResourceShareCreatedFromPolicyResponse$returnValue' => '<p>Indicates whether the request succeeded.</p>', 'ResourceShare$allowExternalPrincipals' => '<p>Indicates whether principals outside your AWS organization can be associated with a resource share.</p>', 'ResourceShareAssociation$external' => '<p>Indicates whether the principal belongs to the same AWS organization as the AWS account that owns the resource share.</p>', 'ResourceSharePermissionDetail$defaultVersion' => '<p>The identifier for the version of the permission that is set as the default version.</p>', 'ResourceSharePermissionSummary$defaultVersion' => '<p>The identifier for the version of the permission that is set as the default version.</p>', 'UpdateResourceShareRequest$allowExternalPrincipals' => '<p>Indicates whether principals outside your AWS organization can be associated with a resource share.</p>', ], ], 'CreateResourceShareRequest' => [ 'base' => NULL, 'refs' => [], ], 'CreateResourceShareResponse' => [ 'base' => NULL, 'refs' => [], ], 'DateTime' => [ 'base' => NULL, 'refs' => [ 'Principal$creationTime' => '<p>The time when the principal was associated with the resource share.</p>', 'Principal$lastUpdatedTime' => '<p>The time when the association was last updated.</p>', 'Resource$creationTime' => '<p>The time when the resource was associated with the resource share.</p>', 'Resource$lastUpdatedTime' => '<p>The time when the association was last updated.</p>', 'ResourceShare$creationTime' => '<p>The time when the resource share was created.</p>', 'ResourceShare$lastUpdatedTime' => '<p>The time when the resource share was last updated.</p>', 'ResourceShareAssociation$creationTime' => '<p>The time when the association was created.</p>', 'ResourceShareAssociation$lastUpdatedTime' => '<p>The time when the association was last updated.</p>', 'ResourceShareInvitation$invitationTimestamp' => '<p>The date and time when the invitation was sent.</p>', 'ResourceSharePermissionDetail$creationTime' => '<p>The date and time when the permission was created.</p>', 'ResourceSharePermissionDetail$lastUpdatedTime' => '<p>The date and time when the permission was last updated.</p>', 'ResourceSharePermissionSummary$creationTime' => '<p>The date and time when the permission was created.</p>', 'ResourceSharePermissionSummary$lastUpdatedTime' => '<p>The date and time when the permission was last updated.</p>', ], ], 'DeleteResourceShareRequest' => [ 'base' => NULL, 'refs' => [], ], 'DeleteResourceShareResponse' => [ 'base' => NULL, 'refs' => [], ], 'DisassociateResourceSharePermissionRequest' => [ 'base' => NULL, 'refs' => [], ], 'DisassociateResourceSharePermissionResponse' => [ 'base' => NULL, 'refs' => [], ], 'DisassociateResourceShareRequest' => [ 'base' => NULL, 'refs' => [], ], 'DisassociateResourceShareResponse' => [ 'base' => NULL, 'refs' => [], ], 'EnableSharingWithAwsOrganizationRequest' => [ 'base' => NULL, 'refs' => [], ], 'EnableSharingWithAwsOrganizationResponse' => [ 'base' => NULL, 'refs' => [], ], 'GetPermissionRequest' => [ 'base' => NULL, 'refs' => [], ], 'GetPermissionResponse' => [ 'base' => NULL, 'refs' => [], ], 'GetResourcePoliciesRequest' => [ 'base' => NULL, 'refs' => [], ], 'GetResourcePoliciesResponse' => [ 'base' => NULL, 'refs' => [], ], 'GetResourceShareAssociationsRequest' => [ 'base' => NULL, 'refs' => [], ], 'GetResourceShareAssociationsResponse' => [ 'base' => NULL, 'refs' => [], ], 'GetResourceShareInvitationsRequest' => [ 'base' => NULL, 'refs' => [], ], 'GetResourceShareInvitationsResponse' => [ 'base' => NULL, 'refs' => [], ], 'GetResourceSharesRequest' => [ 'base' => NULL, 'refs' => [], ], 'GetResourceSharesResponse' => [ 'base' => NULL, 'refs' => [], ], 'IdempotentParameterMismatchException' => [ 'base' => '<p>A client token input parameter was reused with an operation, but at least one of the other input parameters is different from the previous call to the operation.</p>', 'refs' => [], ], 'Integer' => [ 'base' => NULL, 'refs' => [ 'GetPermissionRequest$permissionVersion' => '<p>The identifier for the version of the permission.</p>', ], ], 'InvalidClientTokenException' => [ 'base' => '<p>A client token is not valid.</p>', 'refs' => [], ], 'InvalidMaxResultsException' => [ 'base' => '<p>The specified value for MaxResults is not valid.</p>', 'refs' => [], ], 'InvalidNextTokenException' => [ 'base' => '<p>The specified value for NextToken is not valid.</p>', 'refs' => [], ], 'InvalidParameterException' => [ 'base' => '<p>A parameter is not valid.</p>', 'refs' => [], ], 'InvalidResourceTypeException' => [ 'base' => '<p>The specified resource type is not valid.</p>', 'refs' => [], ], 'InvalidStateTransitionException' => [ 'base' => '<p>The requested state transition is not valid.</p>', 'refs' => [], ], 'ListPendingInvitationResourcesRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListPendingInvitationResourcesResponse' => [ 'base' => NULL, 'refs' => [], ], 'ListPermissionsRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListPermissionsResponse' => [ 'base' => NULL, 'refs' => [], ], 'ListPrincipalsRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListPrincipalsResponse' => [ 'base' => NULL, 'refs' => [], ], 'ListResourceSharePermissionsRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListResourceSharePermissionsResponse' => [ 'base' => NULL, 'refs' => [], ], 'ListResourceTypesRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListResourceTypesResponse' => [ 'base' => NULL, 'refs' => [], ], 'ListResourcesRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListResourcesResponse' => [ 'base' => NULL, 'refs' => [], ], 'MalformedArnException' => [ 'base' => '<p>The format of an Amazon Resource Name (ARN) is not valid.</p>', 'refs' => [], ], 'MaxResults' => [ 'base' => NULL, 'refs' => [ 'GetResourcePoliciesRequest$maxResults' => '<p>The maximum number of results to return with a single call. To retrieve the remaining results, make another call with the returned <code>nextToken</code> value.</p>', 'GetResourceShareAssociationsRequest$maxResults' => '<p>The maximum number of results to return with a single call. To retrieve the remaining results, make another call with the returned <code>nextToken</code> value.</p>', 'GetResourceShareInvitationsRequest$maxResults' => '<p>The maximum number of results to return with a single call. To retrieve the remaining results, make another call with the returned <code>nextToken</code> value.</p>', 'GetResourceSharesRequest$maxResults' => '<p>The maximum number of results to return with a single call. To retrieve the remaining results, make another call with the returned <code>nextToken</code> value.</p>', 'ListPendingInvitationResourcesRequest$maxResults' => '<p>The maximum number of results to return with a single call. To retrieve the remaining results, make another call with the returned <code>nextToken</code> value.</p>', 'ListPermissionsRequest$maxResults' => '<p>The maximum number of results to return with a single call. To retrieve the remaining results, make another call with the returned <code>nextToken</code> value.</p>', 'ListPrincipalsRequest$maxResults' => '<p>The maximum number of results to return with a single call. To retrieve the remaining results, make another call with the returned <code>nextToken</code> value.</p>', 'ListResourceSharePermissionsRequest$maxResults' => '<p>The maximum number of results to return with a single call. To retrieve the remaining results, make another call with the returned <code>nextToken</code> value.</p>', 'ListResourceTypesRequest$maxResults' => '<p>The maximum number of results to return with a single call. To retrieve the remaining results, make another call with the returned <code>nextToken</code> value.</p>', 'ListResourcesRequest$maxResults' => '<p>The maximum number of results to return with a single call. To retrieve the remaining results, make another call with the returned <code>nextToken</code> value.</p>', ], ], 'MissingRequiredParameterException' => [ 'base' => '<p>A required input parameter is missing.</p>', 'refs' => [], ], 'OperationNotPermittedException' => [ 'base' => '<p>The requested operation is not permitted.</p>', 'refs' => [], ], 'PermissionArnList' => [ 'base' => NULL, 'refs' => [ 'CreateResourceShareRequest$permissionArns' => '<p>The ARNs of the permissions to associate with the resource share. If you do not specify an ARN for the permission, AWS RAM automatically attaches the default version of the permission for each resource type.</p>', ], ], 'Policy' => [ 'base' => NULL, 'refs' => [ 'PolicyList$member' => NULL, ], ], 'PolicyList' => [ 'base' => NULL, 'refs' => [ 'GetResourcePoliciesResponse$policies' => '<p>A key policy document, in JSON format.</p>', ], ], 'Principal' => [ 'base' => '<p>Describes a principal for use with AWS Resource Access Manager.</p>', 'refs' => [ 'PrincipalList$member' => NULL, ], ], 'PrincipalArnOrIdList' => [ 'base' => NULL, 'refs' => [ 'AssociateResourceShareRequest$principals' => '<p>The principals.</p>', 'CreateResourceShareRequest$principals' => '<p>The principals to associate with the resource share. The possible values are IDs of AWS accounts, the ARN of an OU or organization from AWS Organizations.</p>', 'DisassociateResourceShareRequest$principals' => '<p>The principals.</p>', 'ListPrincipalsRequest$principals' => '<p>The principals.</p>', ], ], 'PrincipalList' => [ 'base' => NULL, 'refs' => [ 'ListPrincipalsResponse$principals' => '<p>The principals.</p>', ], ], 'PromoteResourceShareCreatedFromPolicyRequest' => [ 'base' => NULL, 'refs' => [], ], 'PromoteResourceShareCreatedFromPolicyResponse' => [ 'base' => NULL, 'refs' => [], ], 'RejectResourceShareInvitationRequest' => [ 'base' => NULL, 'refs' => [], ], 'RejectResourceShareInvitationResponse' => [ 'base' => NULL, 'refs' => [], ], 'Resource' => [ 'base' => '<p>Describes a resource associated with a resource share.</p>', 'refs' => [ 'ResourceList$member' => NULL, ], ], 'ResourceArnList' => [ 'base' => NULL, 'refs' => [ 'AssociateResourceShareRequest$resourceArns' => '<p>The Amazon Resource Names (ARN) of the resources.</p>', 'CreateResourceShareRequest$resourceArns' => '<p>The Amazon Resource Names (ARN) of the resources to associate with the resource share.</p>', 'DisassociateResourceShareRequest$resourceArns' => '<p>The Amazon Resource Names (ARNs) of the resources.</p>', 'GetResourcePoliciesRequest$resourceArns' => '<p>The Amazon Resource Names (ARN) of the resources.</p>', 'ListResourcesRequest$resourceArns' => '<p>The Amazon Resource Names (ARN) of the resources.</p>', ], ], 'ResourceArnNotFoundException' => [ 'base' => '<p>An Amazon Resource Name (ARN) was not found.</p>', 'refs' => [], ], 'ResourceList' => [ 'base' => NULL, 'refs' => [ 'ListPendingInvitationResourcesResponse$resources' => '<p>Information about the resources included the resource share.</p>', 'ListResourcesResponse$resources' => '<p>Information about the resources.</p>', ], ], 'ResourceOwner' => [ 'base' => NULL, 'refs' => [ 'GetResourceSharesRequest$resourceOwner' => '<p>The type of owner.</p>', 'ListPrincipalsRequest$resourceOwner' => '<p>The type of owner.</p>', 'ListResourcesRequest$resourceOwner' => '<p>The type of owner.</p>', ], ], 'ResourceShare' => [ 'base' => '<p>Describes a resource share.</p>', 'refs' => [ 'CreateResourceShareResponse$resourceShare' => '<p>Information about the resource share.</p>', 'ResourceShareList$member' => NULL, 'UpdateResourceShareResponse$resourceShare' => '<p>Information about the resource share.</p>', ], ], 'ResourceShareArnList' => [ 'base' => NULL, 'refs' => [ 'GetResourceShareAssociationsRequest$resourceShareArns' => '<p>The Amazon Resource Names (ARN) of the resource shares.</p>', 'GetResourceShareInvitationsRequest$resourceShareArns' => '<p>The Amazon Resource Names (ARN) of the resource shares.</p>', 'GetResourceSharesRequest$resourceShareArns' => '<p>The Amazon Resource Names (ARN) of the resource shares.</p>', 'ListPrincipalsRequest$resourceShareArns' => '<p>The Amazon Resource Names (ARN) of the resource shares.</p>', 'ListResourcesRequest$resourceShareArns' => '<p>The Amazon Resource Names (ARN) of the resource shares.</p>', ], ], 'ResourceShareAssociation' => [ 'base' => '<p>Describes an association with a resource share.</p>', 'refs' => [ 'ResourceShareAssociationList$member' => NULL, ], ], 'ResourceShareAssociationList' => [ 'base' => NULL, 'refs' => [ 'AssociateResourceShareResponse$resourceShareAssociations' => '<p>Information about the associations.</p>', 'DisassociateResourceShareResponse$resourceShareAssociations' => '<p>Information about the associations.</p>', 'GetResourceShareAssociationsResponse$resourceShareAssociations' => '<p>Information about the associations.</p>', 'ResourceShareInvitation$resourceShareAssociations' => '<p>To view the resources associated with a pending resource share invitation, use <a href="https://docs.aws.amazon.com/ram/latest/APIReference/API_ListPendingInvitationResources.html"> ListPendingInvitationResources</a>.</p>', ], ], 'ResourceShareAssociationStatus' => [ 'base' => NULL, 'refs' => [ 'GetResourceShareAssociationsRequest$associationStatus' => '<p>The association status.</p>', 'ResourceShareAssociation$status' => '<p>The status of the association.</p>', ], ], 'ResourceShareAssociationType' => [ 'base' => NULL, 'refs' => [ 'GetResourceShareAssociationsRequest$associationType' => '<p>The association type. Specify <code>PRINCIPAL</code> to list the principals that are associated with the specified resource share. Specify <code>RESOURCE</code> to list the resources that are associated with the specified resource share.</p>', 'ResourceShareAssociation$associationType' => '<p>The association type.</p>', ], ], 'ResourceShareFeatureSet' => [ 'base' => NULL, 'refs' => [ 'ResourceShare$featureSet' => '<p>Indicates how the resource share was created. Possible values include:</p> <ul> <li> <p> <code>CREATED_FROM_POLICY</code> - Indicates that the resource share was created from an AWS Identity and Access Management (AWS IAM) policy attached to a resource. These resource shares are visible only to the AWS account that created it. They cannot be modified in AWS RAM.</p> </li> <li> <p> <code>PROMOTING_TO_STANDARD</code> - The resource share is in the process of being promoted. For more information, see <a>PromoteResourceShareCreatedFromPolicy</a>.</p> </li> <li> <p> <code>STANDARD</code> - Indicates that the resource share was created in AWS RAM using the console or APIs. These resource shares are visible to all principals. They can be modified in AWS RAM.</p> </li> </ul>', ], ], 'ResourceShareInvitation' => [ 'base' => '<p>Describes an invitation to join a resource share.</p>', 'refs' => [ 'AcceptResourceShareInvitationResponse$resourceShareInvitation' => '<p>Information about the invitation.</p>', 'RejectResourceShareInvitationResponse$resourceShareInvitation' => '<p>Information about the invitation.</p>', 'ResourceShareInvitationList$member' => NULL, ], ], 'ResourceShareInvitationAlreadyAcceptedException' => [ 'base' => '<p>The invitation was already accepted.</p>', 'refs' => [], ], 'ResourceShareInvitationAlreadyRejectedException' => [ 'base' => '<p>The invitation was already rejected.</p>', 'refs' => [], ], 'ResourceShareInvitationArnList' => [ 'base' => NULL, 'refs' => [ 'GetResourceShareInvitationsRequest$resourceShareInvitationArns' => '<p>The Amazon Resource Names (ARN) of the invitations.</p>', ], ], 'ResourceShareInvitationArnNotFoundException' => [ 'base' => '<p>The Amazon Resource Name (ARN) for an invitation was not found.</p>', 'refs' => [], ], 'ResourceShareInvitationExpiredException' => [ 'base' => '<p>The invitation is expired.</p>', 'refs' => [], ], 'ResourceShareInvitationList' => [ 'base' => NULL, 'refs' => [ 'GetResourceShareInvitationsResponse$resourceShareInvitations' => '<p>Information about the invitations.</p>', ], ], 'ResourceShareInvitationStatus' => [ 'base' => NULL, 'refs' => [ 'ResourceShareInvitation$status' => '<p>The status of the invitation.</p>', ], ], 'ResourceShareLimitExceededException' => [ 'base' => '<p>The requested resource share exceeds the limit for your account.</p>', 'refs' => [], ], 'ResourceShareList' => [ 'base' => NULL, 'refs' => [ 'GetResourceSharesResponse$resourceShares' => '<p>Information about the resource shares.</p>', ], ], 'ResourceSharePermissionDetail' => [ 'base' => '<p>Information about an AWS RAM permission.</p>', 'refs' => [ 'GetPermissionResponse$permission' => '<p>Information about the permission.</p>', ], ], 'ResourceSharePermissionList' => [ 'base' => NULL, 'refs' => [ 'ListPermissionsResponse$permissions' => '<p>Information about the permissions.</p>', 'ListResourceSharePermissionsResponse$permissions' => '<p>The permissions associated with the resource share.</p>', ], ], 'ResourceSharePermissionSummary' => [ 'base' => '<p>Information about a permission that is associated with a resource share.</p>', 'refs' => [ 'ResourceSharePermissionList$member' => NULL, ], ], 'ResourceShareStatus' => [ 'base' => NULL, 'refs' => [ 'GetResourceSharesRequest$resourceShareStatus' => '<p>The status of the resource share.</p>', 'ResourceShare$status' => '<p>The status of the resource share.</p>', ], ], 'ResourceStatus' => [ 'base' => NULL, 'refs' => [ 'Resource$status' => '<p>The status of the resource.</p>', ], ], 'ServerInternalException' => [ 'base' => '<p>The service could not respond to the request due to an internal problem.</p>', 'refs' => [], ], 'ServiceNameAndResourceType' => [ 'base' => '<p>Information about the shareable resource types and the AWS services to which they belong.</p>', 'refs' => [ 'ServiceNameAndResourceTypeList$member' => NULL, ], ], 'ServiceNameAndResourceTypeList' => [ 'base' => NULL, 'refs' => [ 'ListResourceTypesResponse$resourceTypes' => '<p>The shareable resource types supported by AWS RAM.</p>', ], ], 'ServiceUnavailableException' => [ 'base' => '<p>The service is not available.</p>', 'refs' => [], ], 'String' => [ 'base' => NULL, 'refs' => [ 'AcceptResourceShareInvitationRequest$resourceShareInvitationArn' => '<p>The Amazon Resource Name (ARN) of the invitation.</p>', 'AcceptResourceShareInvitationRequest$clientToken' => '<p>A unique, case-sensitive identifier that you provide to ensure the idempotency of the request.</p>', 'AcceptResourceShareInvitationResponse$clientToken' => '<p>A unique, case-sensitive identifier that you provide to ensure the idempotency of the request.</p>', 'AssociateResourceSharePermissionRequest$resourceShareArn' => '<p>The Amazon Resource Name (ARN) of the resource share.</p>', 'AssociateResourceSharePermissionRequest$permissionArn' => '<p>The ARN of the AWS RAM permission to associate with the resource share.</p>', 'AssociateResourceSharePermissionRequest$clientToken' => '<p>A unique, case-sensitive identifier that you provide to ensure the idempotency of the request.</p>', 'AssociateResourceSharePermissionResponse$clientToken' => '<p>A unique, case-sensitive identifier that you provide to ensure the idempotency of the request.</p>', 'AssociateResourceShareRequest$resourceShareArn' => '<p>The Amazon Resource Name (ARN) of the resource share.</p>', 'AssociateResourceShareRequest$clientToken' => '<p>A unique, case-sensitive identifier that you provide to ensure the idempotency of the request.</p>', 'AssociateResourceShareResponse$clientToken' => '<p>A unique, case-sensitive identifier that you provide to ensure the idempotency of the request.</p>', 'CreateResourceShareRequest$name' => '<p>The name of the resource share.</p>', 'CreateResourceShareRequest$clientToken' => '<p>A unique, case-sensitive identifier that you provide to ensure the idempotency of the request.</p>', 'CreateResourceShareResponse$clientToken' => '<p>A unique, case-sensitive identifier that you provide to ensure the idempotency of the request.</p>', 'DeleteResourceShareRequest$resourceShareArn' => '<p>The Amazon Resource Name (ARN) of the resource share.</p>', 'DeleteResourceShareRequest$clientToken' => '<p>A unique, case-sensitive identifier that you provide to ensure the idempotency of the request.</p>', 'DeleteResourceShareResponse$clientToken' => '<p>A unique, case-sensitive identifier that you provide to ensure the idempotency of the request.</p>', 'DisassociateResourceSharePermissionRequest$resourceShareArn' => '<p>The Amazon Resource Name (ARN) of the resource share.</p>', 'DisassociateResourceSharePermissionRequest$permissionArn' => '<p>The ARN of the permission to disassociate from the resource share.</p>', 'DisassociateResourceSharePermissionRequest$clientToken' => '<p>A unique, case-sensitive identifier that you provide to ensure the idempotency of the request.</p>', 'DisassociateResourceSharePermissionResponse$clientToken' => '<p>A unique, case-sensitive identifier that you provide to ensure the idempotency of the request.</p>', 'DisassociateResourceShareRequest$resourceShareArn' => '<p>The Amazon Resource Name (ARN) of the resource share.</p>', 'DisassociateResourceShareRequest$clientToken' => '<p>A unique, case-sensitive identifier that you provide to ensure the idempotency of the request.</p>', 'DisassociateResourceShareResponse$clientToken' => '<p>A unique, case-sensitive identifier that you provide to ensure the idempotency of the request.</p>', 'GetPermissionRequest$permissionArn' => '<p>The ARN of the permission.</p>', 'GetResourcePoliciesRequest$principal' => '<p>The principal.</p>', 'GetResourcePoliciesRequest$nextToken' => '<p>The token for the next page of results.</p>', 'GetResourcePoliciesResponse$nextToken' => '<p>The token to use to retrieve the next page of results. This value is <code>null</code> when there are no more results to return.</p>', 'GetResourceShareAssociationsRequest$resourceArn' => '<p>The Amazon Resource Name (ARN) of the resource. You cannot specify this parameter if the association type is <code>PRINCIPAL</code>.</p>', 'GetResourceShareAssociationsRequest$principal' => '<p>The principal. You cannot specify this parameter if the association type is <code>RESOURCE</code>.</p>', 'GetResourceShareAssociationsRequest$nextToken' => '<p>The token for the next page of results.</p>', 'GetResourceShareAssociationsResponse$nextToken' => '<p>The token to use to retrieve the next page of results. This value is <code>null</code> when there are no more results to return.</p>', 'GetResourceShareInvitationsRequest$nextToken' => '<p>The token for the next page of results.</p>', 'GetResourceShareInvitationsResponse$nextToken' => '<p>The token to use to retrieve the next page of results. This value is <code>null</code> when there are no more results to return.</p>', 'GetResourceSharesRequest$name' => '<p>The name of the resource share.</p>', 'GetResourceSharesRequest$nextToken' => '<p>The token for the next page of results.</p>', 'GetResourceSharesResponse$nextToken' => '<p>The token to use to retrieve the next page of results. This value is <code>null</code> when there are no more results to return.</p>', 'IdempotentParameterMismatchException$message' => NULL, 'InvalidClientTokenException$message' => NULL, 'InvalidMaxResultsException$message' => NULL, 'InvalidNextTokenException$message' => NULL, 'InvalidParameterException$message' => NULL, 'InvalidResourceTypeException$message' => NULL, 'InvalidStateTransitionException$message' => NULL, 'ListPendingInvitationResourcesRequest$resourceShareInvitationArn' => '<p>The Amazon Resource Name (ARN) of the invitation.</p>', 'ListPendingInvitationResourcesRequest$nextToken' => '<p>The token for the next page of results.</p>', 'ListPendingInvitationResourcesResponse$nextToken' => '<p>The token to use to retrieve the next page of results. This value is <code>null</code> when there are no more results to return.</p>', 'ListPermissionsRequest$resourceType' => '<p>Specifies the resource type for which to list permissions. For example, to list only permissions that apply to EC2 subnets, specify <code>ec2:Subnet</code>.</p>', 'ListPermissionsRequest$nextToken' => '<p>The token for the next page of results.</p>', 'ListPermissionsResponse$nextToken' => '<p>The token to use to retrieve the next page of results. This value is <code>null</code> when there are no more results to return.</p>', 'ListPrincipalsRequest$resourceArn' => '<p>The Amazon Resource Name (ARN) of the resource.</p>', 'ListPrincipalsRequest$resourceType' => '<p>The resource type.</p> <p>Valid values: <code>codebuild:Project</code> | <code>codebuild:ReportGroup</code> | <code>ec2:CapacityReservation</code> | <code>ec2:DedicatedHost</code> | <code>ec2:Subnet</code> | <code>ec2:TrafficMirrorTarget</code> | <code>ec2:TransitGateway</code> | <code>imagebuilder:Component</code> | <code>imagebuilder:Image</code> | <code>imagebuilder:ImageRecipe</code> | <code>license-manager:LicenseConfiguration</code> I <code>resource-groups:Group</code> | <code>rds:Cluster</code> | <code>route53resolver:ResolverRule</code> </p>', 'ListPrincipalsRequest$nextToken' => '<p>The token for the next page of results.</p>', 'ListPrincipalsResponse$nextToken' => '<p>The token to use to retrieve the next page of results. This value is <code>null</code> when there are no more results to return.</p>', 'ListResourceSharePermissionsRequest$resourceShareArn' => '<p>The Amazon Resource Name (ARN) of the resource share.</p>', 'ListResourceSharePermissionsRequest$nextToken' => '<p>The token for the next page of results.</p>', 'ListResourceSharePermissionsResponse$nextToken' => '<p>The token to use to retrieve the next page of results. This value is <code>null</code> when there are no more results to return.</p>', 'ListResourceTypesRequest$nextToken' => '<p>The token for the next page of results.</p>', 'ListResourceTypesResponse$nextToken' => '<p>The token to use to retrieve the next page of results. This value is <code>null</code> when there are no more results to return.</p>', 'ListResourcesRequest$principal' => '<p>The principal.</p>', 'ListResourcesRequest$resourceType' => '<p>The resource type.</p> <p>Valid values: <code>codebuild:Project</code> | <code>codebuild:ReportGroup</code> | <code>ec2:CapacityReservation</code> | <code>ec2:DedicatedHost</code> | <code>ec2:Subnet</code> | <code>ec2:TrafficMirrorTarget</code> | <code>ec2:TransitGateway</code> | <code>imagebuilder:Component</code> | <code>imagebuilder:Image</code> | <code>imagebuilder:ImageRecipe</code> | <code>license-manager:LicenseConfiguration</code> I <code>resource-groups:Group</code> | <code>rds:Cluster</code> | <code>route53resolver:ResolverRule</code> </p>', 'ListResourcesRequest$nextToken' => '<p>The token for the next page of results.</p>', 'ListResourcesResponse$nextToken' => '<p>The token to use to retrieve the next page of results. This value is <code>null</code> when there are no more results to return.</p>', 'MalformedArnException$message' => NULL, 'MissingRequiredParameterException$message' => NULL, 'OperationNotPermittedException$message' => NULL, 'PermissionArnList$member' => NULL, 'Principal$id' => '<p>The ID of the principal.</p>', 'Principal$resourceShareArn' => '<p>The Amazon Resource Name (ARN) of the resource share.</p>', 'PrincipalArnOrIdList$member' => NULL, 'PromoteResourceShareCreatedFromPolicyRequest$resourceShareArn' => '<p>The ARN of the resource share to promote.</p>', 'RejectResourceShareInvitationRequest$resourceShareInvitationArn' => '<p>The Amazon Resource Name (ARN) of the invitation.</p>', 'RejectResourceShareInvitationRequest$clientToken' => '<p>A unique, case-sensitive identifier that you provide to ensure the idempotency of the request.</p>', 'RejectResourceShareInvitationResponse$clientToken' => '<p>A unique, case-sensitive identifier that you provide to ensure the idempotency of the request.</p>', 'Resource$arn' => '<p>The Amazon Resource Name (ARN) of the resource.</p>', 'Resource$type' => '<p>The resource type.</p>', 'Resource$resourceShareArn' => '<p>The Amazon Resource Name (ARN) of the resource share.</p>', 'Resource$resourceGroupArn' => '<p>The ARN of the resource group. This value is returned only if the resource is a resource group.</p>', 'Resource$statusMessage' => '<p>A message about the status of the resource.</p>', 'ResourceArnList$member' => NULL, 'ResourceArnNotFoundException$message' => NULL, 'ResourceShare$resourceShareArn' => '<p>The Amazon Resource Name (ARN) of the resource share.</p>', 'ResourceShare$name' => '<p>The name of the resource share.</p>', 'ResourceShare$owningAccountId' => '<p>The ID of the AWS account that owns the resource share.</p>', 'ResourceShare$statusMessage' => '<p>A message about the status of the resource share.</p>', 'ResourceShareArnList$member' => NULL, 'ResourceShareAssociation$resourceShareArn' => '<p>The Amazon Resource Name (ARN) of the resource share.</p>', 'ResourceShareAssociation$resourceShareName' => '<p>The name of the resource share.</p>', 'ResourceShareAssociation$associatedEntity' => '<p>The associated entity. For resource associations, this is the ARN of the resource. For principal associations, this is the ID of an AWS account or the ARN of an OU or organization from AWS Organizations.</p>', 'ResourceShareAssociation$statusMessage' => '<p>A message about the status of the association.</p>', 'ResourceShareInvitation$resourceShareInvitationArn' => '<p>The Amazon Resource Name (ARN) of the invitation.</p>', 'ResourceShareInvitation$resourceShareName' => '<p>The name of the resource share.</p>', 'ResourceShareInvitation$resourceShareArn' => '<p>The Amazon Resource Name (ARN) of the resource share.</p>', 'ResourceShareInvitation$senderAccountId' => '<p>The ID of the AWS account that sent the invitation.</p>', 'ResourceShareInvitation$receiverAccountId' => '<p>The ID of the AWS account that received the invitation.</p>', 'ResourceShareInvitationAlreadyAcceptedException$message' => NULL, 'ResourceShareInvitationAlreadyRejectedException$message' => NULL, 'ResourceShareInvitationArnList$member' => NULL, 'ResourceShareInvitationArnNotFoundException$message' => NULL, 'ResourceShareInvitationExpiredException$message' => NULL, 'ResourceShareLimitExceededException$message' => NULL, 'ResourceSharePermissionDetail$arn' => '<p>The ARN of the permission.</p>', 'ResourceSharePermissionDetail$version' => '<p>The identifier for the version of the permission.</p>', 'ResourceSharePermissionDetail$name' => '<p>The name of the permission.</p>', 'ResourceSharePermissionDetail$resourceType' => '<p>The resource type to which the permission applies.</p>', 'ResourceSharePermissionDetail$permission' => '<p>The permission\'s effect and actions in JSON format. The <code>effect</code> indicates whether the actions are allowed or denied. The <code>actions</code> list the API actions to which the principal is granted or denied access.</p>', 'ResourceSharePermissionSummary$arn' => '<p>The ARN of the permission.</p>', 'ResourceSharePermissionSummary$version' => '<p>The identifier for the version of the permission.</p>', 'ResourceSharePermissionSummary$name' => '<p>The name of the permission.</p>', 'ResourceSharePermissionSummary$resourceType' => '<p>The type of resource to which the permission applies.</p>', 'ResourceSharePermissionSummary$status' => '<p>The current status of the permission.</p>', 'ServerInternalException$message' => NULL, 'ServiceNameAndResourceType$resourceType' => '<p>The shareable resource types.</p>', 'ServiceNameAndResourceType$serviceName' => '<p>The name of the AWS services to which the resources belong.</p>', 'ServiceUnavailableException$message' => NULL, 'TagLimitExceededException$message' => NULL, 'TagPolicyViolationException$message' => NULL, 'TagResourceRequest$resourceShareArn' => '<p>The Amazon Resource Name (ARN) of the resource share.</p>', 'UnknownResourceException$message' => NULL, 'UntagResourceRequest$resourceShareArn' => '<p>The Amazon Resource Name (ARN) of the resource share.</p>', 'UpdateResourceShareRequest$resourceShareArn' => '<p>The Amazon Resource Name (ARN) of the resource share.</p>', 'UpdateResourceShareRequest$name' => '<p>The name of the resource share.</p>', 'UpdateResourceShareRequest$clientToken' => '<p>A unique, case-sensitive identifier that you provide to ensure the idempotency of the request.</p>', 'UpdateResourceShareResponse$clientToken' => '<p>A unique, case-sensitive identifier that you provide to ensure the idempotency of the request.</p>', ], ], 'Tag' => [ 'base' => '<p>Information about a tag.</p>', 'refs' => [ 'TagList$member' => NULL, ], ], 'TagFilter' => [ 'base' => '<p>Used to filter information based on tags.</p>', 'refs' => [ 'TagFilters$member' => NULL, ], ], 'TagFilters' => [ 'base' => NULL, 'refs' => [ 'GetResourceSharesRequest$tagFilters' => '<p>One or more tag filters.</p>', ], ], 'TagKey' => [ 'base' => NULL, 'refs' => [ 'Tag$key' => '<p>The key of the tag.</p>', 'TagFilter$tagKey' => '<p>The tag key.</p>', 'TagKeyList$member' => NULL, ], ], 'TagKeyList' => [ 'base' => NULL, 'refs' => [ 'UntagResourceRequest$tagKeys' => '<p>The tag keys of the tags to remove.</p>', ], ], 'TagLimitExceededException' => [ 'base' => '<p>The requested tags exceed the limit for your account.</p>', 'refs' => [], ], 'TagList' => [ 'base' => NULL, 'refs' => [ 'CreateResourceShareRequest$tags' => '<p>One or more tags.</p>', 'ResourceShare$tags' => '<p>The tags for the resource share.</p>', 'TagResourceRequest$tags' => '<p>One or more tags.</p>', ], ], 'TagPolicyViolationException' => [ 'base' => '<p>The specified tag is a reserved word and cannot be used.</p>', 'refs' => [], ], 'TagResourceRequest' => [ 'base' => NULL, 'refs' => [], ], 'TagResourceResponse' => [ 'base' => NULL, 'refs' => [], ], 'TagValue' => [ 'base' => NULL, 'refs' => [ 'Tag$value' => '<p>The value of the tag.</p>', 'TagValueList$member' => NULL, ], ], 'TagValueList' => [ 'base' => NULL, 'refs' => [ 'TagFilter$tagValues' => '<p>The tag values.</p>', ], ], 'UnknownResourceException' => [ 'base' => '<p>A specified resource was not found.</p>', 'refs' => [], ], 'UntagResourceRequest' => [ 'base' => NULL, 'refs' => [], ], 'UntagResourceResponse' => [ 'base' => NULL, 'refs' => [], ], 'UpdateResourceShareRequest' => [ 'base' => NULL, 'refs' => [], ], 'UpdateResourceShareResponse' => [ 'base' => NULL, 'refs' => [], ], ],];
