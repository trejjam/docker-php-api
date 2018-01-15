<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\Endpoint;

class ContainerList extends \Jane\OpenApiRuntime\Client\BaseEndpoint
{
    /**
     * Returns a list of containers. For details on the format, see [the inspect endpoint](#operation/ContainerInspect).

    Note that it uses a different, smaller representation of a container than inspecting a single container. For example,
    the list of linked containers is not propagated .

     *
     * @param array $queryParameters {
     *
     *     @var bool $all Return all containers. By default, only running containers are shown
     *     @var int $limit return this number of most recently created containers, including non-running ones
     *     @var bool $size return the size of container as fields `SizeRw` and `SizeRootFs`
     *     @var string $filters Filters to process on the container list, encoded as JSON (a `map[string][]string`). For example, `{"status": ["paused"]}` will only return paused containers. Available filters:

    - `ancestor`=(`<image-name>[:<tag>]`, `<image id>`, or `<image@digest>`)
    - `before`=(`<container id>` or `<container name>`)
    - `expose`=(`<port>[/<proto>]`|`<startport-endport>/[<proto>]`)
    - `exited=<int>` containers with exit code of `<int>`
    - `health`=(`starting`|`healthy`|`unhealthy`|`none`)
    - `id=<ID>` a container's ID
    - `isolation=`(`default`|`process`|`hyperv`) (Windows daemon only)
    - `is-task=`(`true`|`false`)
    - `label=key` or `label="key=value"` of a container label
    - `name=<name>` a container's name
    - `network`=(`<network id>` or `<network name>`)
    - `publish`=(`<port>[/<proto>]`|`<startport-endport>/[<proto>]`)
    - `since`=(`<container id>` or `<container name>`)
    - `status=`(`created`|`restarting`|`running`|`removing`|`paused`|`exited`|`dead`)
    - `volume`=(`<volume name>` or `<mount point destination>`)

     * }
     */
    public function __construct(array $queryParameters = [])
    {
        $this->queryParameters = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return '/containers/json';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null)
    {
        return [[], null];
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Docker\API\Exception\ContainerListBadRequestException
     * @throws \Docker\API\Exception\ContainerListInternalServerErrorException
     *
     * @return null|\Docker\API\Model\ContainerSummaryItem[]
     */
    public function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Docker\\API\\Model\\ContainerSummaryItem[]', 'json');
        }
        if (400 === $status) {
            throw new \Docker\API\Exception\ContainerListBadRequestException($serializer->deserialize($body, 'Docker\\API\\Model\\ErrorResponse', 'json'));
        }
        if (500 === $status) {
            throw new \Docker\API\Exception\ContainerListInternalServerErrorException($serializer->deserialize($body, 'Docker\\API\\Model\\ErrorResponse', 'json'));
        }
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['all', 'limit', 'size', 'filters']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['all' => false, 'size' => false]);
        $optionsResolver->setAllowedTypes('all', ['bool']);
        $optionsResolver->setAllowedTypes('limit', ['int']);
        $optionsResolver->setAllowedTypes('size', ['bool']);
        $optionsResolver->setAllowedTypes('filters', ['string']);

        return $optionsResolver;
    }
}