<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Slack\Api\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ConversationsListGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'JoliCode\\Slack\\Api\\Model\\ConversationsListGetResponse200';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'JoliCode\\Slack\\Api\\Model\\ConversationsListGetResponse200';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \JoliCode\Slack\Api\Model\ConversationsListGetResponse200();
        $data = clone $data;
        if (property_exists($data, 'channels') && $data->{'channels'} !== null) {
            $values = [];
            foreach ($data->{'channels'} as $value) {
                $values[] = $value;
            }
            $object->setChannels($values);
            unset($data->{'channels'});
        }
        if (property_exists($data, 'ok') && $data->{'ok'} !== null) {
            $object->setOk($data->{'ok'});
            unset($data->{'ok'});
        }
        if (property_exists($data, 'response_metadata') && $data->{'response_metadata'} !== null) {
            $object->setResponseMetadata($this->denormalizer->denormalize($data->{'response_metadata'}, 'JoliCode\\Slack\\Api\\Model\\ConversationsListGetResponse200ResponseMetadata', 'json', $context));
            unset($data->{'response_metadata'});
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', $key)) {
                $object[$key] = $value_1;
            }
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getChannels()) {
            $values = [];
            foreach ($object->getChannels() as $value) {
                $values[] = $value;
            }
            $data->{'channels'} = $values;
        }
        if (null !== $object->getOk()) {
            $data->{'ok'} = $object->getOk();
        }
        if (null !== $object->getResponseMetadata()) {
            $data->{'response_metadata'} = $this->normalizer->normalize($object->getResponseMetadata(), 'json', $context);
        }
        foreach ($object as $key => $value_1) {
            if (preg_match('/.*/', $key)) {
                $data->{$key} = $value_1;
            }
        }

        return $data;
    }
}
