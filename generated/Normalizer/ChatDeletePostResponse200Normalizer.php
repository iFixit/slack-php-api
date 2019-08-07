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

class ChatDeletePostResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'JoliCode\\Slack\\Api\\Model\\ChatDeletePostResponse200';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'JoliCode\\Slack\\Api\\Model\\ChatDeletePostResponse200';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \JoliCode\Slack\Api\Model\ChatDeletePostResponse200();
        $data = clone $data;
        if (property_exists($data, 'channel') && $data->{'channel'} !== null) {
            $object->setChannel($data->{'channel'});
            unset($data->{'channel'});
        }
        if (property_exists($data, 'ok') && $data->{'ok'} !== null) {
            $object->setOk($data->{'ok'});
            unset($data->{'ok'});
        }
        if (property_exists($data, 'ts') && $data->{'ts'} !== null) {
            $value = $data->{'ts'};
            if (is_string($data->{'ts'})) {
                $value = $data->{'ts'};
            }
            $object->setTs($value);
            unset($data->{'ts'});
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
        if (null !== $object->getChannel()) {
            $data->{'channel'} = $object->getChannel();
        }
        if (null !== $object->getOk()) {
            $data->{'ok'} = $object->getOk();
        }
        if (null !== $object->getTs()) {
            $value = $object->getTs();
            if (is_string($object->getTs())) {
                $value = $object->getTs();
            }
            $data->{'ts'} = $value;
        }
        foreach ($object as $key => $value_1) {
            if (preg_match('/.*/', $key)) {
                $data->{$key} = $value_1;
            }
        }

        return $data;
    }
}
