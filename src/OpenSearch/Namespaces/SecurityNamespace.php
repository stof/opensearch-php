<?php
/**
 * Elasticsearch PHP client
 *
 * @link      https://github.com/elastic/elasticsearch-php/
 * @copyright Copyright (c) Elasticsearch B.V (https://www.elastic.co)
 * @license   http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @license   https://www.gnu.org/licenses/lgpl-2.1.html GNU Lesser General Public License, Version 2.1 
 * 
 * Licensed to Elasticsearch B.V under one or more agreements.
 * Elasticsearch B.V licenses this file to you under the Apache 2.0 License or
 * the GNU Lesser General Public License, Version 2.1, at your option.
 * See the LICENSE file in the project root for more information.
 */
declare(strict_types = 1);

namespace OpenSearch\Namespaces;

use OpenSearch\Namespaces\AbstractNamespace;

/**
 * Class SecurityNamespace
 *
 */
class SecurityNamespace extends AbstractNamespace
{

    /**
     *
     * @param array $params Associative array of parameters
     * @return array
     * @see https://www.elastic.co/guide/en/elasticsearch/reference/current/security-api-authenticate.html
     */
    public function authenticate(array $params = [])
    {

        $endpointBuilder = $this->endpoints;
        $endpoint = $endpointBuilder('Security\Authenticate');
        $endpoint->setParams($params);

        return $this->performRequest($endpoint);
    }
    /**
     * $params['username'] = (string) The username of the user to change the password for
     * $params['refresh']  = (enum) If `true` (the default) then refresh the affected shards to make this operation visible to search, if `wait_for` then wait for a refresh to make this operation visible to search, if `false` then do nothing with refreshes. (Options = true,false,wait_for)
     * $params['body']     = (array) the new password for the user (Required)
     *
     * @param array $params Associative array of parameters
     * @return array
     * @see https://www.elastic.co/guide/en/elasticsearch/reference/current/security-api-change-password.html
     */
    public function changePassword(array $params = [])
    {
        $username = $this->extractArgument($params, 'username');
        $body = $this->extractArgument($params, 'body');

        $endpointBuilder = $this->endpoints;
        $endpoint = $endpointBuilder('Security\ChangePassword');
        $endpoint->setParams($params);
        $endpoint->setUsername($username);
        $endpoint->setBody($body);

        return $this->performRequest($endpoint);
    }
    /**
     * $params['ids'] = (list) A comma-separated list of IDs of API keys to clear from the cache
     *
     * @param array $params Associative array of parameters
     * @return array
     * @see https://www.elastic.co/guide/en/elasticsearch/reference/current/security-api-clear-api-key-cache.html
     */
    public function clearApiKeyCache(array $params = [])
    {
        $ids = $this->extractArgument($params, 'ids');

        $endpointBuilder = $this->endpoints;
        $endpoint = $endpointBuilder('Security\ClearApiKeyCache');
        $endpoint->setParams($params);
        $endpoint->setIds($ids);

        return $this->performRequest($endpoint);
    }
    /**
     * $params['application'] = (list) A comma-separated list of application names
     *
     * @param array $params Associative array of parameters
     * @return array
     * @see https://www.elastic.co/guide/en/elasticsearch/reference/current/security-api-clear-privilege-cache.html
     */
    public function clearCachedPrivileges(array $params = [])
    {
        $application = $this->extractArgument($params, 'application');

        $endpointBuilder = $this->endpoints;
        $endpoint = $endpointBuilder('Security\ClearCachedPrivileges');
        $endpoint->setParams($params);
        $endpoint->setApplication($application);

        return $this->performRequest($endpoint);
    }
    /**
     * $params['realms']    = (list) Comma-separated list of realms to clear
     * $params['usernames'] = (list) Comma-separated list of usernames to clear from the cache
     *
     * @param array $params Associative array of parameters
     * @return array
     * @see https://www.elastic.co/guide/en/elasticsearch/reference/current/security-api-clear-cache.html
     */
    public function clearCachedRealms(array $params = [])
    {
        $realms = $this->extractArgument($params, 'realms');

        $endpointBuilder = $this->endpoints;
        $endpoint = $endpointBuilder('Security\ClearCachedRealms');
        $endpoint->setParams($params);
        $endpoint->setRealms($realms);

        return $this->performRequest($endpoint);
    }
    /**
     * $params['name'] = (list) Role name
     *
     * @param array $params Associative array of parameters
     * @return array
     * @see https://www.elastic.co/guide/en/elasticsearch/reference/current/security-api-clear-role-cache.html
     */
    public function clearCachedRoles(array $params = [])
    {
        $name = $this->extractArgument($params, 'name');

        $endpointBuilder = $this->endpoints;
        $endpoint = $endpointBuilder('Security\ClearCachedRoles');
        $endpoint->setParams($params);
        $endpoint->setName($name);

        return $this->performRequest($endpoint);
    }
    /**
     * $params['refresh'] = (enum) If `true` (the default) then refresh the affected shards to make this operation visible to search, if `wait_for` then wait for a refresh to make this operation visible to search, if `false` then do nothing with refreshes. (Options = true,false,wait_for)
     * $params['body']    = (array) The api key request to create an API key (Required)
     *
     * @param array $params Associative array of parameters
     * @return array
     * @see https://www.elastic.co/guide/en/elasticsearch/reference/current/security-api-create-api-key.html
     */
    public function createApiKey(array $params = [])
    {
        $body = $this->extractArgument($params, 'body');

        $endpointBuilder = $this->endpoints;
        $endpoint = $endpointBuilder('Security\CreateApiKey');
        $endpoint->setParams($params);
        $endpoint->setBody($body);

        return $this->performRequest($endpoint);
    }
    /**
     * $params['application'] = (string) Application name
     * $params['name']        = (string) Privilege name
     * $params['refresh']     = (enum) If `true` (the default) then refresh the affected shards to make this operation visible to search, if `wait_for` then wait for a refresh to make this operation visible to search, if `false` then do nothing with refreshes. (Options = true,false,wait_for)
     *
     * @param array $params Associative array of parameters
     * @return array
     * @see https://www.elastic.co/guide/en/elasticsearch/reference/current/security-api-delete-privilege.html
     */
    public function deletePrivileges(array $params = [])
    {
        $application = $this->extractArgument($params, 'application');
        $name = $this->extractArgument($params, 'name');

        $endpointBuilder = $this->endpoints;
        $endpoint = $endpointBuilder('Security\DeletePrivileges');
        $endpoint->setParams($params);
        $endpoint->setApplication($application);
        $endpoint->setName($name);

        return $this->performRequest($endpoint);
    }
    /**
     * $params['name']    = (string) Role name
     * $params['refresh'] = (enum) If `true` (the default) then refresh the affected shards to make this operation visible to search, if `wait_for` then wait for a refresh to make this operation visible to search, if `false` then do nothing with refreshes. (Options = true,false,wait_for)
     *
     * @param array $params Associative array of parameters
     * @return array
     * @see https://www.elastic.co/guide/en/elasticsearch/reference/current/security-api-delete-role.html
     */
    public function deleteRole(array $params = [])
    {
        $name = $this->extractArgument($params, 'name');

        $endpointBuilder = $this->endpoints;
        $endpoint = $endpointBuilder('Security\DeleteRole');
        $endpoint->setParams($params);
        $endpoint->setName($name);

        return $this->performRequest($endpoint);
    }
    /**
     * $params['name']    = (string) Role-mapping name
     * $params['refresh'] = (enum) If `true` (the default) then refresh the affected shards to make this operation visible to search, if `wait_for` then wait for a refresh to make this operation visible to search, if `false` then do nothing with refreshes. (Options = true,false,wait_for)
     *
     * @param array $params Associative array of parameters
     * @return array
     * @see https://www.elastic.co/guide/en/elasticsearch/reference/current/security-api-delete-role-mapping.html
     */
    public function deleteRoleMapping(array $params = [])
    {
        $name = $this->extractArgument($params, 'name');

        $endpointBuilder = $this->endpoints;
        $endpoint = $endpointBuilder('Security\DeleteRoleMapping');
        $endpoint->setParams($params);
        $endpoint->setName($name);

        return $this->performRequest($endpoint);
    }
    /**
     * $params['username'] = (string) username
     * $params['refresh']  = (enum) If `true` (the default) then refresh the affected shards to make this operation visible to search, if `wait_for` then wait for a refresh to make this operation visible to search, if `false` then do nothing with refreshes. (Options = true,false,wait_for)
     *
     * @param array $params Associative array of parameters
     * @return array
     * @see https://www.elastic.co/guide/en/elasticsearch/reference/current/security-api-delete-user.html
     */
    public function deleteUser(array $params = [])
    {
        $username = $this->extractArgument($params, 'username');

        $endpointBuilder = $this->endpoints;
        $endpoint = $endpointBuilder('Security\DeleteUser');
        $endpoint->setParams($params);
        $endpoint->setUsername($username);

        return $this->performRequest($endpoint);
    }
    /**
     * $params['username'] = (string) The username of the user to disable
     * $params['refresh']  = (enum) If `true` (the default) then refresh the affected shards to make this operation visible to search, if `wait_for` then wait for a refresh to make this operation visible to search, if `false` then do nothing with refreshes. (Options = true,false,wait_for)
     *
     * @param array $params Associative array of parameters
     * @return array
     * @see https://www.elastic.co/guide/en/elasticsearch/reference/current/security-api-disable-user.html
     */
    public function disableUser(array $params = [])
    {
        $username = $this->extractArgument($params, 'username');

        $endpointBuilder = $this->endpoints;
        $endpoint = $endpointBuilder('Security\DisableUser');
        $endpoint->setParams($params);
        $endpoint->setUsername($username);

        return $this->performRequest($endpoint);
    }
    /**
     * $params['username'] = (string) The username of the user to enable
     * $params['refresh']  = (enum) If `true` (the default) then refresh the affected shards to make this operation visible to search, if `wait_for` then wait for a refresh to make this operation visible to search, if `false` then do nothing with refreshes. (Options = true,false,wait_for)
     *
     * @param array $params Associative array of parameters
     * @return array
     * @see https://www.elastic.co/guide/en/elasticsearch/reference/current/security-api-enable-user.html
     */
    public function enableUser(array $params = [])
    {
        $username = $this->extractArgument($params, 'username');

        $endpointBuilder = $this->endpoints;
        $endpoint = $endpointBuilder('Security\EnableUser');
        $endpoint->setParams($params);
        $endpoint->setUsername($username);

        return $this->performRequest($endpoint);
    }
    /**
     * $params['id']         = (string) API key id of the API key to be retrieved
     * $params['name']       = (string) API key name of the API key to be retrieved
     * $params['username']   = (string) user name of the user who created this API key to be retrieved
     * $params['realm_name'] = (string) realm name of the user who created this API key to be retrieved
     * $params['owner']      = (boolean) flag to query API keys owned by the currently authenticated user (Default = false)
     *
     * @param array $params Associative array of parameters
     * @return array
     * @see https://www.elastic.co/guide/en/elasticsearch/reference/current/security-api-get-api-key.html
     */
    public function getApiKey(array $params = [])
    {

        $endpointBuilder = $this->endpoints;
        $endpoint = $endpointBuilder('Security\GetApiKey');
        $endpoint->setParams($params);

        return $this->performRequest($endpoint);
    }
    /**
     *
     * @param array $params Associative array of parameters
     * @return array
     * @see https://www.elastic.co/guide/en/elasticsearch/reference/current/security-api-get-builtin-privileges.html
     */
    public function getBuiltinPrivileges(array $params = [])
    {

        $endpointBuilder = $this->endpoints;
        $endpoint = $endpointBuilder('Security\GetBuiltinPrivileges');
        $endpoint->setParams($params);

        return $this->performRequest($endpoint);
    }
    /**
     * $params['application'] = (string) Application name
     * $params['name']        = (string) Privilege name
     *
     * @param array $params Associative array of parameters
     * @return array
     * @see https://www.elastic.co/guide/en/elasticsearch/reference/current/security-api-get-privileges.html
     */
    public function getPrivileges(array $params = [])
    {
        $application = $this->extractArgument($params, 'application');
        $name = $this->extractArgument($params, 'name');

        $endpointBuilder = $this->endpoints;
        $endpoint = $endpointBuilder('Security\GetPrivileges');
        $endpoint->setParams($params);
        $endpoint->setApplication($application);
        $endpoint->setName($name);

        return $this->performRequest($endpoint);
    }
    /**
     * $params['name'] = (list) A comma-separated list of role names
     *
     * @param array $params Associative array of parameters
     * @return array
     * @see https://www.elastic.co/guide/en/elasticsearch/reference/current/security-api-get-role.html
     */
    public function getRole(array $params = [])
    {
        $name = $this->extractArgument($params, 'name');

        $endpointBuilder = $this->endpoints;
        $endpoint = $endpointBuilder('Security\GetRole');
        $endpoint->setParams($params);
        $endpoint->setName($name);

        return $this->performRequest($endpoint);
    }
    /**
     * $params['name'] = (list) A comma-separated list of role-mapping names
     *
     * @param array $params Associative array of parameters
     * @return array
     * @see https://www.elastic.co/guide/en/elasticsearch/reference/current/security-api-get-role-mapping.html
     */
    public function getRoleMapping(array $params = [])
    {
        $name = $this->extractArgument($params, 'name');

        $endpointBuilder = $this->endpoints;
        $endpoint = $endpointBuilder('Security\GetRoleMapping');
        $endpoint->setParams($params);
        $endpoint->setName($name);

        return $this->performRequest($endpoint);
    }
    /**
     * $params['body'] = (array) The token request to get (Required)
     *
     * @param array $params Associative array of parameters
     * @return array
     * @see https://www.elastic.co/guide/en/elasticsearch/reference/current/security-api-get-token.html
     */
    public function getToken(array $params = [])
    {
        $body = $this->extractArgument($params, 'body');

        $endpointBuilder = $this->endpoints;
        $endpoint = $endpointBuilder('Security\GetToken');
        $endpoint->setParams($params);
        $endpoint->setBody($body);

        return $this->performRequest($endpoint);
    }
    /**
     * $params['username'] = (list) A comma-separated list of usernames
     *
     * @param array $params Associative array of parameters
     * @return array
     * @see https://www.elastic.co/guide/en/elasticsearch/reference/current/security-api-get-user.html
     */
    public function getUser(array $params = [])
    {
        $username = $this->extractArgument($params, 'username');

        $endpointBuilder = $this->endpoints;
        $endpoint = $endpointBuilder('Security\GetUser');
        $endpoint->setParams($params);
        $endpoint->setUsername($username);

        return $this->performRequest($endpoint);
    }
    /**
     *
     * @param array $params Associative array of parameters
     * @return array
     * @see https://www.elastic.co/guide/en/elasticsearch/reference/current/security-api-get-privileges.html
     */
    public function getUserPrivileges(array $params = [])
    {

        $endpointBuilder = $this->endpoints;
        $endpoint = $endpointBuilder('Security\GetUserPrivileges');
        $endpoint->setParams($params);

        return $this->performRequest($endpoint);
    }
    /**
     * $params['refresh'] = (enum) If `true` (the default) then refresh the affected shards to make this operation visible to search, if `wait_for` then wait for a refresh to make this operation visible to search, if `false` then do nothing with refreshes. (Options = true,false,wait_for)
     * $params['body']    = (array) The api key request to create an API key (Required)
     *
     * @param array $params Associative array of parameters
     * @return array
     * @see https://www.elastic.co/guide/en/elasticsearch/reference/current/security-api-grant-api-key.html
     */
    public function grantApiKey(array $params = [])
    {
        $body = $this->extractArgument($params, 'body');

        $endpointBuilder = $this->endpoints;
        $endpoint = $endpointBuilder('Security\GrantApiKey');
        $endpoint->setParams($params);
        $endpoint->setBody($body);

        return $this->performRequest($endpoint);
    }
    /**
     * $params['user'] = (string) Username
     * $params['body'] = (array) The privileges to test (Required)
     *
     * @param array $params Associative array of parameters
     * @return array
     * @see https://www.elastic.co/guide/en/elasticsearch/reference/current/security-api-has-privileges.html
     */
    public function hasPrivileges(array $params = [])
    {
        $user = $this->extractArgument($params, 'user');
        $body = $this->extractArgument($params, 'body');

        $endpointBuilder = $this->endpoints;
        $endpoint = $endpointBuilder('Security\HasPrivileges');
        $endpoint->setParams($params);
        $endpoint->setUser($user);
        $endpoint->setBody($body);

        return $this->performRequest($endpoint);
    }
    public function invalidateApiKey(array $params = [])
    {
        $body = $this->extractArgument($params, 'body');

        $endpointBuilder = $this->endpoints;
        $endpoint = $endpointBuilder('Security\InvalidateApiKey');
        $endpoint->setParams($params);
        $endpoint->setBody($body);

        return $this->performRequest($endpoint);
    }
    /**
     * $params['body'] = (array) The token to invalidate (Required)
     *
     * @param array $params Associative array of parameters
     * @return array
     * @see https://www.elastic.co/guide/en/elasticsearch/reference/current/security-api-invalidate-token.html
     */
    public function invalidateToken(array $params = [])
    {
        $body = $this->extractArgument($params, 'body');

        $endpointBuilder = $this->endpoints;
        $endpoint = $endpointBuilder('Security\InvalidateToken');
        $endpoint->setParams($params);
        $endpoint->setBody($body);

        return $this->performRequest($endpoint);
    }
    /**
     * $params['refresh'] = (enum) If `true` (the default) then refresh the affected shards to make this operation visible to search, if `wait_for` then wait for a refresh to make this operation visible to search, if `false` then do nothing with refreshes. (Options = true,false,wait_for)
     * $params['body']    = (array) The privilege(s) to add (Required)
     *
     * @param array $params Associative array of parameters
     * @return array
     * @see https://www.elastic.co/guide/en/elasticsearch/reference/current/security-api-put-privileges.html
     */
    public function putPrivileges(array $params = [])
    {
        $body = $this->extractArgument($params, 'body');

        $endpointBuilder = $this->endpoints;
        $endpoint = $endpointBuilder('Security\PutPrivileges');
        $endpoint->setParams($params);
        $endpoint->setBody($body);

        return $this->performRequest($endpoint);
    }
    /**
     * $params['name']    = (string) Role name
     * $params['refresh'] = (enum) If `true` (the default) then refresh the affected shards to make this operation visible to search, if `wait_for` then wait for a refresh to make this operation visible to search, if `false` then do nothing with refreshes. (Options = true,false,wait_for)
     * $params['body']    = (array) The role to add (Required)
     *
     * @param array $params Associative array of parameters
     * @return array
     * @see https://www.elastic.co/guide/en/elasticsearch/reference/current/security-api-put-role.html
     */
    public function putRole(array $params = [])
    {
        $name = $this->extractArgument($params, 'name');
        $body = $this->extractArgument($params, 'body');

        $endpointBuilder = $this->endpoints;
        $endpoint = $endpointBuilder('Security\PutRole');
        $endpoint->setParams($params);
        $endpoint->setName($name);
        $endpoint->setBody($body);

        return $this->performRequest($endpoint);
    }
    /**
     * $params['name']    = (string) Role-mapping name
     * $params['refresh'] = (enum) If `true` (the default) then refresh the affected shards to make this operation visible to search, if `wait_for` then wait for a refresh to make this operation visible to search, if `false` then do nothing with refreshes. (Options = true,false,wait_for)
     * $params['body']    = (array) The role mapping to add (Required)
     *
     * @param array $params Associative array of parameters
     * @return array
     * @see https://www.elastic.co/guide/en/elasticsearch/reference/current/security-api-put-role-mapping.html
     */
    public function putRoleMapping(array $params = [])
    {
        $name = $this->extractArgument($params, 'name');
        $body = $this->extractArgument($params, 'body');

        $endpointBuilder = $this->endpoints;
        $endpoint = $endpointBuilder('Security\PutRoleMapping');
        $endpoint->setParams($params);
        $endpoint->setName($name);
        $endpoint->setBody($body);

        return $this->performRequest($endpoint);
    }
    /**
     * $params['username'] = (string) The username of the User
     * $params['refresh']  = (enum) If `true` (the default) then refresh the affected shards to make this operation visible to search, if `wait_for` then wait for a refresh to make this operation visible to search, if `false` then do nothing with refreshes. (Options = true,false,wait_for)
     * $params['body']     = (array) The user to add (Required)
     *
     * @param array $params Associative array of parameters
     * @return array
     * @see https://www.elastic.co/guide/en/elasticsearch/reference/current/security-api-put-user.html
     */
    public function putUser(array $params = [])
    {
        $username = $this->extractArgument($params, 'username');
        $body = $this->extractArgument($params, 'body');

        $endpointBuilder = $this->endpoints;
        $endpoint = $endpointBuilder('Security\PutUser');
        $endpoint->setParams($params);
        $endpoint->setUsername($username);
        $endpoint->setBody($body);

        return $this->performRequest($endpoint);
    }
}
