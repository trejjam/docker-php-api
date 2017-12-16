<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\Resource;

use Jane\OpenApiRuntime\Client\QueryParam;

trait NodeAsyncResourceTrait
{
    /**
     * @param array $parameters {
     *
     *     @var string $filters filters to process on the nodes list, encoded as JSON (a `map[string][]string`)

     * }
     * @param string                 $fetch             Fetch mode (object or response)
     * @param \Amp\CancellationToken $cancellationToken Token to cancel the request
     *
     * @throws \Docker\API\Exception\NodeListInternalServerErrorException
     *
     * @return \Amp\Promise<\Amp\Artax\Response|\Docker\API\Model\Node>
     */
    public function nodeList(array $parameters = [], string $fetch = self::FETCH_OBJECT, \Amp\CancellationToken $cancellationToken = null): \Amp\Promise
    {
        return \Amp\call(function () use ($parameters, $fetch, $cancellationToken) {
            $queryParam = new QueryParam();
            $queryParam->setDefault('filters', null);
            $url = '/v1.25/nodes';
            $url = $url . ('?' . $queryParam->buildQueryString($parameters));
            $headers = array_merge(['Host' => 'localhost'], $queryParam->buildHeaders($parameters));
            $body = $queryParam->buildFormDataString($parameters);
            $request = new \Amp\Artax\Request($url, 'GET');
            $request = $request->withHeaders($headers);
            $request = $request->withBody($body);
            $response = (yield $this->httpClient->request($request, [], $cancellationToken));
            if (self::FETCH_OBJECT === $fetch) {
                if (200 === $response->getStatusCode()) {
                    return $this->serializer->deserialize((yield $response->getBody()), 'Docker\\API\\Model\\Node[]', 'json');
                }
                if (500 === $response->getStatusCode()) {
                    throw new \Docker\API\Exception\NodeListInternalServerErrorException($this->serializer->deserialize((yield $response->getBody()), 'Docker\\API\\Model\\ErrorResponse', 'json'));
                }
            }

            return $response;
        });
    }

    /**
     * @param string $id         The ID or name of the node
     * @param array  $parameters {
     *
     *     @var bool $force Force remove a node from the swarm
     * }
     *
     * @param string                 $fetch             Fetch mode (object or response)
     * @param \Amp\CancellationToken $cancellationToken Token to cancel the request
     *
     * @throws \Docker\API\Exception\NodeDeleteNotFoundException
     * @throws \Docker\API\Exception\NodeDeleteInternalServerErrorException
     *
     * @return \Amp\Promise<\Amp\Artax\Response|null>
     */
    public function nodeDelete(string $id, array $parameters = [], string $fetch = self::FETCH_OBJECT, \Amp\CancellationToken $cancellationToken = null): \Amp\Promise
    {
        return \Amp\call(function () use ($id, $parameters, $fetch, $cancellationToken) {
            $queryParam = new QueryParam();
            $queryParam->setDefault('force', false);
            $url = '/v1.25/nodes/{id}';
            $url = str_replace('{id}', urlencode($id), $url);
            $url = $url . ('?' . $queryParam->buildQueryString($parameters));
            $headers = array_merge(['Host' => 'localhost'], $queryParam->buildHeaders($parameters));
            $body = $queryParam->buildFormDataString($parameters);
            $request = new \Amp\Artax\Request($url, 'DELETE');
            $request = $request->withHeaders($headers);
            $request = $request->withBody($body);
            $response = (yield $this->httpClient->request($request, [], $cancellationToken));
            if (self::FETCH_OBJECT === $fetch) {
                if (200 === $response->getStatusCode()) {
                    return null;
                }
                if (404 === $response->getStatusCode()) {
                    throw new \Docker\API\Exception\NodeDeleteNotFoundException($this->serializer->deserialize((yield $response->getBody()), 'Docker\\API\\Model\\ErrorResponse', 'json'));
                }
                if (500 === $response->getStatusCode()) {
                    throw new \Docker\API\Exception\NodeDeleteInternalServerErrorException($this->serializer->deserialize((yield $response->getBody()), 'Docker\\API\\Model\\ErrorResponse', 'json'));
                }
            }

            return $response;
        });
    }

    /**
     * @param string                 $id                The ID or name of the node
     * @param array                  $parameters        List of parameters
     * @param string                 $fetch             Fetch mode (object or response)
     * @param \Amp\CancellationToken $cancellationToken Token to cancel the request
     *
     * @throws \Docker\API\Exception\NodeInspectNotFoundException
     * @throws \Docker\API\Exception\NodeInspectInternalServerErrorException
     *
     * @return \Amp\Promise<\Amp\Artax\Response|\Docker\API\Model\Node>
     */
    public function nodeInspect(string $id, array $parameters = [], string $fetch = self::FETCH_OBJECT, \Amp\CancellationToken $cancellationToken = null): \Amp\Promise
    {
        return \Amp\call(function () use ($id, $parameters, $fetch, $cancellationToken) {
            $queryParam = new QueryParam();
            $url = '/v1.25/nodes/{id}';
            $url = str_replace('{id}', urlencode($id), $url);
            $url = $url . ('?' . $queryParam->buildQueryString($parameters));
            $headers = array_merge(['Host' => 'localhost'], $queryParam->buildHeaders($parameters));
            $body = $queryParam->buildFormDataString($parameters);
            $request = new \Amp\Artax\Request($url, 'GET');
            $request = $request->withHeaders($headers);
            $request = $request->withBody($body);
            $response = (yield $this->httpClient->request($request, [], $cancellationToken));
            if (self::FETCH_OBJECT === $fetch) {
                if (200 === $response->getStatusCode()) {
                    return $this->serializer->deserialize((yield $response->getBody()), 'Docker\\API\\Model\\Node', 'json');
                }
                if (404 === $response->getStatusCode()) {
                    throw new \Docker\API\Exception\NodeInspectNotFoundException($this->serializer->deserialize((yield $response->getBody()), 'Docker\\API\\Model\\ErrorResponse', 'json'));
                }
                if (500 === $response->getStatusCode()) {
                    throw new \Docker\API\Exception\NodeInspectInternalServerErrorException($this->serializer->deserialize((yield $response->getBody()), 'Docker\\API\\Model\\ErrorResponse', 'json'));
                }
            }

            return $response;
        });
    }

    /**
     * @param string                     $id         The ID of the node
     * @param \Docker\API\Model\NodeSpec $body
     * @param array                      $parameters {
     *
     *     @var int $version The version number of the node object being updated. This is required to avoid conflicting writes.
     * }
     *
     * @param string                 $fetch             Fetch mode (object or response)
     * @param \Amp\CancellationToken $cancellationToken Token to cancel the request
     *
     * @throws \Docker\API\Exception\NodeUpdateNotFoundException
     * @throws \Docker\API\Exception\NodeUpdateInternalServerErrorException
     *
     * @return \Amp\Promise<\Amp\Artax\Response|null>
     */
    public function nodeUpdate(string $id, \Docker\API\Model\NodeSpec $body, array $parameters = [], string $fetch = self::FETCH_OBJECT, \Amp\CancellationToken $cancellationToken = null): \Amp\Promise
    {
        return \Amp\call(function () use ($id, $body, $parameters, $fetch, $cancellationToken) {
            $queryParam = new QueryParam();
            $queryParam->setRequired('version');
            $url = '/v1.25/nodes/{id}/update';
            $url = str_replace('{id}', urlencode($id), $url);
            $url = $url . ('?' . $queryParam->buildQueryString($parameters));
            $headers = array_merge(['Host' => 'localhost'], $queryParam->buildHeaders($parameters));
            $body = $this->serializer->serialize($body, 'json');
            $request = new \Amp\Artax\Request($url, 'POST');
            $request = $request->withHeaders($headers);
            $request = $request->withBody($body);
            $response = (yield $this->httpClient->request($request, [], $cancellationToken));
            if (self::FETCH_OBJECT === $fetch) {
                if (200 === $response->getStatusCode()) {
                    return null;
                }
                if (404 === $response->getStatusCode()) {
                    throw new \Docker\API\Exception\NodeUpdateNotFoundException($this->serializer->deserialize((yield $response->getBody()), 'Docker\\API\\Model\\ErrorResponse', 'json'));
                }
                if (500 === $response->getStatusCode()) {
                    throw new \Docker\API\Exception\NodeUpdateInternalServerErrorException($this->serializer->deserialize((yield $response->getBody()), 'Docker\\API\\Model\\ErrorResponse', 'json'));
                }
            }

            return $response;
        });
    }
}