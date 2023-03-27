<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeScanning;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class Alerts implements ObjectMapper
{
    private array $hydrationStack = [];
    public function __construct() {}

    /**
     * @template T of object
     * @param class-string<T> $className
     * @return T
     */
    public function hydrateObject(string $className, array $payload): object
    {
        return match($className) {
            'ApiClients\Client\GitHubAE\Schema\CodeScanningAlertItems' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CodeScanningAlertItems($payload),
                'ApiClients\Client\GitHubAE\Schema\CodeScanningAlertRuleSummary' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CodeScanningAlertRuleSummary($payload),
                'ApiClients\Client\GitHubAE\Schema\CodeScanningAnalysisTool' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CodeScanningAnalysisTool($payload),
                'ApiClients\Client\GitHubAE\Schema\CodeScanningAlertInstance' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CodeScanningAlertInstance($payload),
                'ApiClients\Client\GitHubAE\Schema\CodeScanningAlertInstance\Message' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CodeScanningAlertInstance⚡️Message($payload),
                'ApiClients\Client\GitHubAE\Schema\CodeScanningAlertLocation' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CodeScanningAlertLocation($payload),
                'ApiClients\Client\GitHubAE\Schema\BasicError' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️BasicError($payload),
                'ApiClients\Client\GitHubAE\Schema\Operation\SecretScanning\ListAlertsForEnterprise\Response\Applicationjson\H503' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Operation⚡️SecretScanning⚡️ListAlertsForEnterprise⚡️Response⚡️Applicationjson⚡️H503($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
    private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CodeScanningAlertItems(array $payload): \ApiClients\Client\GitHubAE\Schema\CodeScanningAlertItems
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['number'] ?? null;

            if ($value === null) {
                $missingFields[] = 'number';
                goto after_number;
            }

            $properties['number'] = $value;

            after_number:

            $value = $payload['created_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'created_at';
                goto after_createdAt;
            }

            $properties['createdAt'] = $value;

            after_createdAt:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['html_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'html_url';
                goto after_htmlUrl;
            }

            $properties['htmlUrl'] = $value;

            after_htmlUrl:

            $value = $payload['instances_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'instances_url';
                goto after_instancesUrl;
            }

            $properties['instancesUrl'] = $value;

            after_instancesUrl:

            $value = $payload['state'] ?? null;

            if ($value === null) {
                $missingFields[] = 'state';
                goto after_state;
            }

            $properties['state'] = $value;

            after_state:

            $value = $payload['dismissed_by'] ?? null;

            if ($value === null) {
                $properties['dismissedBy'] = null;
                goto after_dismissedBy;
            }

            $properties['dismissedBy'] = $value;

            after_dismissedBy:

            $value = $payload['dismissed_at'] ?? null;

            if ($value === null) {
                $properties['dismissedAt'] = null;
                goto after_dismissedAt;
            }

            $properties['dismissedAt'] = $value;

            after_dismissedAt:

            $value = $payload['dismissed_reason'] ?? null;

            if ($value === null) {
                $properties['dismissedReason'] = null;
                goto after_dismissedReason;
            }

            $properties['dismissedReason'] = $value;

            after_dismissedReason:

            $value = $payload['rule'] ?? null;

            if ($value === null) {
                $missingFields[] = 'rule';
                goto after_rule;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'rule';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CodeScanningAlertRuleSummary($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['rule'] = $value;

            after_rule:

            $value = $payload['tool'] ?? null;

            if ($value === null) {
                $missingFields[] = 'tool';
                goto after_tool;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'tool';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CodeScanningAnalysisTool($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['tool'] = $value;

            after_tool:

            $value = $payload['most_recent_instance'] ?? null;

            if ($value === null) {
                $missingFields[] = 'most_recent_instance';
                goto after_mostRecentInstance;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'mostRecentInstance';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CodeScanningAlertInstance($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['mostRecentInstance'] = $value;

            after_mostRecentInstance:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\CodeScanningAlertItems', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubAE\Schema\CodeScanningAlertItems::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubAE\Schema\CodeScanningAlertItems(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\CodeScanningAlertItems', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CodeScanningAlertRuleSummary(array $payload): \ApiClients\Client\GitHubAE\Schema\CodeScanningAlertRuleSummary
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['id'] ?? null;

            if ($value === null) {
                $properties['id'] = null;
                goto after_id;
            }

            $properties['id'] = $value;

            after_id:

            $value = $payload['name'] ?? null;

            if ($value === null) {
                $properties['name'] = null;
                goto after_name;
            }

            $properties['name'] = $value;

            after_name:

            $value = $payload['severity'] ?? null;

            if ($value === null) {
                $properties['severity'] = null;
                goto after_severity;
            }

            $properties['severity'] = $value;

            after_severity:

            $value = $payload['description'] ?? null;

            if ($value === null) {
                $properties['description'] = null;
                goto after_description;
            }

            $properties['description'] = $value;

            after_description:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\CodeScanningAlertRuleSummary', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubAE\Schema\CodeScanningAlertRuleSummary::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubAE\Schema\CodeScanningAlertRuleSummary(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\CodeScanningAlertRuleSummary', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CodeScanningAnalysisTool(array $payload): \ApiClients\Client\GitHubAE\Schema\CodeScanningAnalysisTool
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['name'] ?? null;

            if ($value === null) {
                $properties['name'] = null;
                goto after_name;
            }

            $properties['name'] = $value;

            after_name:

            $value = $payload['version'] ?? null;

            if ($value === null) {
                $properties['version'] = null;
                goto after_version;
            }

            $properties['version'] = $value;

            after_version:

            $value = $payload['guid'] ?? null;

            if ($value === null) {
                $properties['guid'] = null;
                goto after_guid;
            }

            $properties['guid'] = $value;

            after_guid:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\CodeScanningAnalysisTool', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubAE\Schema\CodeScanningAnalysisTool::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubAE\Schema\CodeScanningAnalysisTool(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\CodeScanningAnalysisTool', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CodeScanningAlertInstance(array $payload): \ApiClients\Client\GitHubAE\Schema\CodeScanningAlertInstance
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['ref'] ?? null;

            if ($value === null) {
                $properties['ref'] = null;
                goto after_ref;
            }

            $properties['ref'] = $value;

            after_ref:

            $value = $payload['analysis_key'] ?? null;

            if ($value === null) {
                $properties['analysisKey'] = null;
                goto after_analysisKey;
            }

            $properties['analysisKey'] = $value;

            after_analysisKey:

            $value = $payload['environment'] ?? null;

            if ($value === null) {
                $properties['environment'] = null;
                goto after_environment;
            }

            $properties['environment'] = $value;

            after_environment:

            $value = $payload['category'] ?? null;

            if ($value === null) {
                $properties['category'] = null;
                goto after_category;
            }

            $properties['category'] = $value;

            after_category:

            $value = $payload['state'] ?? null;

            if ($value === null) {
                $properties['state'] = null;
                goto after_state;
            }

            $properties['state'] = $value;

            after_state:

            $value = $payload['commit_sha'] ?? null;

            if ($value === null) {
                $properties['commitSha'] = null;
                goto after_commitSha;
            }

            $properties['commitSha'] = $value;

            after_commitSha:

            $value = $payload['message'] ?? null;

            if ($value === null) {
                $properties['message'] = null;
                goto after_message;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'message';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CodeScanningAlertInstance⚡️Message($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['message'] = $value;

            after_message:

            $value = $payload['location'] ?? null;

            if ($value === null) {
                $properties['location'] = null;
                goto after_location;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'location';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CodeScanningAlertLocation($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['location'] = $value;

            after_location:

            $value = $payload['html_url'] ?? null;

            if ($value === null) {
                $properties['htmlUrl'] = null;
                goto after_htmlUrl;
            }

            $properties['htmlUrl'] = $value;

            after_htmlUrl:

            $value = $payload['classifications'] ?? null;

            if ($value === null) {
                $properties['classifications'] = null;
                goto after_classifications;
            }

            $properties['classifications'] = $value;

            after_classifications:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\CodeScanningAlertInstance', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubAE\Schema\CodeScanningAlertInstance::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubAE\Schema\CodeScanningAlertInstance(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\CodeScanningAlertInstance', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CodeScanningAlertInstance⚡️Message(array $payload): \ApiClients\Client\GitHubAE\Schema\CodeScanningAlertInstance\Message
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['text'] ?? null;

            if ($value === null) {
                $properties['text'] = null;
                goto after_text;
            }

            $properties['text'] = $value;

            after_text:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\CodeScanningAlertInstance\Message', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubAE\Schema\CodeScanningAlertInstance\Message::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubAE\Schema\CodeScanningAlertInstance\Message(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\CodeScanningAlertInstance\Message', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CodeScanningAlertLocation(array $payload): \ApiClients\Client\GitHubAE\Schema\CodeScanningAlertLocation
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['path'] ?? null;

            if ($value === null) {
                $properties['path'] = null;
                goto after_path;
            }

            $properties['path'] = $value;

            after_path:

            $value = $payload['start_line'] ?? null;

            if ($value === null) {
                $properties['startLine'] = null;
                goto after_startLine;
            }

            $properties['startLine'] = $value;

            after_startLine:

            $value = $payload['end_line'] ?? null;

            if ($value === null) {
                $properties['endLine'] = null;
                goto after_endLine;
            }

            $properties['endLine'] = $value;

            after_endLine:

            $value = $payload['start_column'] ?? null;

            if ($value === null) {
                $properties['startColumn'] = null;
                goto after_startColumn;
            }

            $properties['startColumn'] = $value;

            after_startColumn:

            $value = $payload['end_column'] ?? null;

            if ($value === null) {
                $properties['endColumn'] = null;
                goto after_endColumn;
            }

            $properties['endColumn'] = $value;

            after_endColumn:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\CodeScanningAlertLocation', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubAE\Schema\CodeScanningAlertLocation::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubAE\Schema\CodeScanningAlertLocation(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\CodeScanningAlertLocation', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️BasicError(array $payload): \ApiClients\Client\GitHubAE\Schema\BasicError
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['message'] ?? null;

            if ($value === null) {
                $properties['message'] = null;
                goto after_message;
            }

            $properties['message'] = $value;

            after_message:

            $value = $payload['documentation_url'] ?? null;

            if ($value === null) {
                $properties['documentationUrl'] = null;
                goto after_documentationUrl;
            }

            $properties['documentationUrl'] = $value;

            after_documentationUrl:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $properties['url'] = null;
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['status'] ?? null;

            if ($value === null) {
                $properties['status'] = null;
                goto after_status;
            }

            $properties['status'] = $value;

            after_status:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\BasicError', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubAE\Schema\BasicError::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubAE\Schema\BasicError(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\BasicError', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Operation⚡️SecretScanning⚡️ListAlertsForEnterprise⚡️Response⚡️Applicationjson⚡️H503(array $payload): \ApiClients\Client\GitHubAE\Schema\Operation\SecretScanning\ListAlertsForEnterprise\Response\Applicationjson\H503
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['code'] ?? null;

            if ($value === null) {
                $properties['code'] = null;
                goto after_code;
            }

            $properties['code'] = $value;

            after_code:

            $value = $payload['message'] ?? null;

            if ($value === null) {
                $properties['message'] = null;
                goto after_message;
            }

            $properties['message'] = $value;

            after_message:

            $value = $payload['documentation_url'] ?? null;

            if ($value === null) {
                $properties['documentationUrl'] = null;
                goto after_documentationUrl;
            }

            $properties['documentationUrl'] = $value;

            after_documentationUrl:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\Operation\SecretScanning\ListAlertsForEnterprise\Response\Applicationjson\H503', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubAE\Schema\Operation\SecretScanning\ListAlertsForEnterprise\Response\Applicationjson\H503::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubAE\Schema\Operation\SecretScanning\ListAlertsForEnterprise\Response\Applicationjson\H503(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\Operation\SecretScanning\ListAlertsForEnterprise\Response\Applicationjson\H503', $exception, stack: $this->hydrationStack);
        }
    }
    
    private function serializeViaTypeMap(string $accessor, object $object, array $payloadToTypeMap): array
    {
        foreach ($payloadToTypeMap as $payloadType => [$valueType, $method]) {
            if (is_a($object, $valueType)) {
                return [$accessor => $payloadType] + $this->{$method}($object);
            }
        }

        throw new \LogicException('No type mapped for object of class: ' . get_class($object));
    }

    public function serializeObject(object $object): mixed
    {
        return $this->serializeObjectOfType($object, get_class($object));
    }

    /**
     * @template T
     *
     * @param T               $object
     * @param class-string<T> $className
     */
    public function serializeObjectOfType(object $object, string $className): mixed
    {
        try {
            return match($className) {
                'array' => $this->serializeValuearray($object),
            'Ramsey\Uuid\UuidInterface' => $this->serializeValueRamsey⚡️Uuid⚡️UuidInterface($object),
            'DateTime' => $this->serializeValueDateTime($object),
            'DateTimeImmutable' => $this->serializeValueDateTimeImmutable($object),
            'DateTimeInterface' => $this->serializeValueDateTimeInterface($object),
            'ApiClients\Client\GitHubAE\Schema\CodeScanningAlertItems' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CodeScanningAlertItems($object),
            'ApiClients\Client\GitHubAE\Schema\CodeScanningAlertRuleSummary' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CodeScanningAlertRuleSummary($object),
            'ApiClients\Client\GitHubAE\Schema\CodeScanningAnalysisTool' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CodeScanningAnalysisTool($object),
            'ApiClients\Client\GitHubAE\Schema\CodeScanningAlertInstance' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CodeScanningAlertInstance($object),
            'ApiClients\Client\GitHubAE\Schema\CodeScanningAlertInstance\Message' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CodeScanningAlertInstance⚡️Message($object),
            'ApiClients\Client\GitHubAE\Schema\CodeScanningAlertLocation' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CodeScanningAlertLocation($object),
            'ApiClients\Client\GitHubAE\Schema\BasicError' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️BasicError($object),
            'ApiClients\Client\GitHubAE\Schema\Operation\SecretScanning\ListAlertsForEnterprise\Response\Applicationjson\H503' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Operation⚡️SecretScanning⚡️ListAlertsForEnterprise⚡️Response⚡️Applicationjson⚡️H503($object),
                default => throw new \LogicException('No serialization defined for $className'),
            };
        } catch (\Throwable $exception) {
            throw UnableToSerializeObject::dueToError($className, $exception);
        }
    }
    
    
    private function serializeValuearray(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeValueRamsey⚡️Uuid⚡️UuidInterface(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeUuidToString(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeValueDateTime(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeDateTime(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeValueDateTimeImmutable(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeDateTime(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeValueDateTimeInterface(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeDateTime(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CodeScanningAlertItems(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubAE\Schema\CodeScanningAlertItems);
        $result = [];

        $number = $object->number;
        after_number:        $result['number'] = $number;

        
        $createdAt = $object->createdAt;
        after_createdAt:        $result['created_at'] = $createdAt;

        
        $url = $object->url;
        after_url:        $result['url'] = $url;

        
        $htmlUrl = $object->htmlUrl;
        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        
        $instancesUrl = $object->instancesUrl;
        after_instancesUrl:        $result['instances_url'] = $instancesUrl;

        
        $state = $object->state;
        after_state:        $result['state'] = $state;

        
        $dismissedBy = $object->dismissedBy;

        if ($dismissedBy === null) {
            goto after_dismissedBy;
        }
        after_dismissedBy:        $result['dismissed_by'] = $dismissedBy;

        
        $dismissedAt = $object->dismissedAt;

        if ($dismissedAt === null) {
            goto after_dismissedAt;
        }
        after_dismissedAt:        $result['dismissed_at'] = $dismissedAt;

        
        $dismissedReason = $object->dismissedReason;

        if ($dismissedReason === null) {
            goto after_dismissedReason;
        }
        after_dismissedReason:        $result['dismissed_reason'] = $dismissedReason;

        
        $rule = $object->rule;
        $rule = $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CodeScanningAlertRuleSummary($rule);
        after_rule:        $result['rule'] = $rule;

        
        $tool = $object->tool;
        $tool = $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CodeScanningAnalysisTool($tool);
        after_tool:        $result['tool'] = $tool;

        
        $mostRecentInstance = $object->mostRecentInstance;
        $mostRecentInstance = $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CodeScanningAlertInstance($mostRecentInstance);
        after_mostRecentInstance:        $result['most_recent_instance'] = $mostRecentInstance;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CodeScanningAlertRuleSummary(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubAE\Schema\CodeScanningAlertRuleSummary);
        $result = [];

        $id = $object->id;

        if ($id === null) {
            goto after_id;
        }
        after_id:        $result['id'] = $id;

        
        $name = $object->name;

        if ($name === null) {
            goto after_name;
        }
        after_name:        $result['name'] = $name;

        
        $severity = $object->severity;

        if ($severity === null) {
            goto after_severity;
        }
        after_severity:        $result['severity'] = $severity;

        
        $description = $object->description;

        if ($description === null) {
            goto after_description;
        }
        after_description:        $result['description'] = $description;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CodeScanningAnalysisTool(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubAE\Schema\CodeScanningAnalysisTool);
        $result = [];

        $name = $object->name;

        if ($name === null) {
            goto after_name;
        }
        after_name:        $result['name'] = $name;

        
        $version = $object->version;

        if ($version === null) {
            goto after_version;
        }
        after_version:        $result['version'] = $version;

        
        $guid = $object->guid;

        if ($guid === null) {
            goto after_guid;
        }
        after_guid:        $result['guid'] = $guid;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CodeScanningAlertInstance(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubAE\Schema\CodeScanningAlertInstance);
        $result = [];

        $ref = $object->ref;

        if ($ref === null) {
            goto after_ref;
        }
        after_ref:        $result['ref'] = $ref;

        
        $analysisKey = $object->analysisKey;

        if ($analysisKey === null) {
            goto after_analysisKey;
        }
        after_analysisKey:        $result['analysis_key'] = $analysisKey;

        
        $environment = $object->environment;

        if ($environment === null) {
            goto after_environment;
        }
        after_environment:        $result['environment'] = $environment;

        
        $category = $object->category;

        if ($category === null) {
            goto after_category;
        }
        after_category:        $result['category'] = $category;

        
        $state = $object->state;

        if ($state === null) {
            goto after_state;
        }
        after_state:        $result['state'] = $state;

        
        $commitSha = $object->commitSha;

        if ($commitSha === null) {
            goto after_commitSha;
        }
        after_commitSha:        $result['commit_sha'] = $commitSha;

        
        $message = $object->message;

        if ($message === null) {
            goto after_message;
        }
        $message = $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CodeScanningAlertInstance⚡️Message($message);
        after_message:        $result['message'] = $message;

        
        $location = $object->location;

        if ($location === null) {
            goto after_location;
        }
        $location = $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CodeScanningAlertLocation($location);
        after_location:        $result['location'] = $location;

        
        $htmlUrl = $object->htmlUrl;

        if ($htmlUrl === null) {
            goto after_htmlUrl;
        }
        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        
        $classifications = $object->classifications;

        if ($classifications === null) {
            goto after_classifications;
        }
        static $classificationsSerializer0;

        if ($classificationsSerializer0 === null) {
            $classificationsSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $classifications = $classificationsSerializer0->serialize($classifications, $this);
        after_classifications:        $result['classifications'] = $classifications;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CodeScanningAlertInstance⚡️Message(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubAE\Schema\CodeScanningAlertInstance\Message);
        $result = [];

        $text = $object->text;

        if ($text === null) {
            goto after_text;
        }
        after_text:        $result['text'] = $text;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️CodeScanningAlertLocation(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubAE\Schema\CodeScanningAlertLocation);
        $result = [];

        $path = $object->path;

        if ($path === null) {
            goto after_path;
        }
        after_path:        $result['path'] = $path;

        
        $startLine = $object->startLine;

        if ($startLine === null) {
            goto after_startLine;
        }
        after_startLine:        $result['start_line'] = $startLine;

        
        $endLine = $object->endLine;

        if ($endLine === null) {
            goto after_endLine;
        }
        after_endLine:        $result['end_line'] = $endLine;

        
        $startColumn = $object->startColumn;

        if ($startColumn === null) {
            goto after_startColumn;
        }
        after_startColumn:        $result['start_column'] = $startColumn;

        
        $endColumn = $object->endColumn;

        if ($endColumn === null) {
            goto after_endColumn;
        }
        after_endColumn:        $result['end_column'] = $endColumn;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️BasicError(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubAE\Schema\BasicError);
        $result = [];

        $message = $object->message;

        if ($message === null) {
            goto after_message;
        }
        after_message:        $result['message'] = $message;

        
        $documentationUrl = $object->documentationUrl;

        if ($documentationUrl === null) {
            goto after_documentationUrl;
        }
        after_documentationUrl:        $result['documentation_url'] = $documentationUrl;

        
        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }
        after_url:        $result['url'] = $url;

        
        $status = $object->status;

        if ($status === null) {
            goto after_status;
        }
        after_status:        $result['status'] = $status;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Operation⚡️SecretScanning⚡️ListAlertsForEnterprise⚡️Response⚡️Applicationjson⚡️H503(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubAE\Schema\Operation\SecretScanning\ListAlertsForEnterprise\Response\Applicationjson\H503);
        $result = [];

        $code = $object->code;

        if ($code === null) {
            goto after_code;
        }
        after_code:        $result['code'] = $code;

        
        $message = $object->message;

        if ($message === null) {
            goto after_message;
        }
        after_message:        $result['message'] = $message;

        
        $documentationUrl = $object->documentationUrl;

        if ($documentationUrl === null) {
            goto after_documentationUrl;
        }
        after_documentationUrl:        $result['documentation_url'] = $documentationUrl;


        return $result;
    }
    
    

    /**
     * @template T
     *
     * @param class-string<T> $className
     * @param iterable<array> $payloads;
     *
     * @return IterableList<T>
     *
     * @throws UnableToHydrateObject
     */
    public function hydrateObjects(string $className, iterable $payloads): IterableList
    {
        return new IterableList($this->doHydrateObjects($className, $payloads));
    }

    private function doHydrateObjects(string $className, iterable $payloads): Generator
    {
        foreach ($payloads as $index => $payload) {
            yield $index => $this->hydrateObject($className, $payload);
        }
    }

    /**
     * @template T
     *
     * @param class-string<T> $className
     * @param iterable<array> $payloads;
     *
     * @return IterableList<T>
     *
     * @throws UnableToSerializeObject
     */
    public function serializeObjects(iterable $payloads): IterableList
    {
        return new IterableList($this->doSerializeObjects($payloads));
    }

    private function doSerializeObjects(iterable $objects): Generator
    {
        foreach ($objects as $index => $object) {
            yield $index => $this->serializeObject($object);
        }
    }
}
