<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\Endpoint;

class ContainerChanges extends \Jane\OpenApiRuntime\Client\BaseEndpoint
{
    protected $id;

    /**
     * Returns which files in a container's filesystem have been added, deleted,.
    or modified. The `Kind` of modification can be one of:

    - `0`: Modified
    - `1`: Added
    - `2`: Deleted

     *
     * @param string $id ID or name of the container
     */
    public function __construct(string $id)
    {
        $this->id = $id;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/containers/{id}/changes');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null)
    {
        return [[], null];
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Docker\API\Exception\ContainerChangesNotFoundException
     * @throws \Docker\API\Exception\ContainerChangesInternalServerErrorException
     *
     * @return null|\Docker\API\Model\ContainersIdChangesGetResponse200Item[]
     */
    public function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Docker\\API\\Model\\ContainersIdChangesGetResponse200Item[]', 'json');
        }
        if (404 === $status) {
            throw new \Docker\API\Exception\ContainerChangesNotFoundException($serializer->deserialize($body, 'Docker\\API\\Model\\ErrorResponse', 'json'));
        }
        if (500 === $status) {
            throw new \Docker\API\Exception\ContainerChangesInternalServerErrorException($serializer->deserialize($body, 'Docker\\API\\Model\\ErrorResponse', 'json'));
        }
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
}