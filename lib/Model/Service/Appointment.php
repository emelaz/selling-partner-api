<?php
/**
 * Appointment
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Evers\SellingPartnerApi
 */

/**
 * Selling Partner API for Services
 *
 * With the Services API, you can build applications that help service providers get and modify their service orders.
 *
 * The version of the OpenAPI document: v1
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Evers\SellingPartnerApi\Model\Service;

use \ArrayAccess;
use \Evers\SellingPartnerApi\ObjectSerializer;
use \Evers\SellingPartnerApi\Model\ModelInterface;

/**
 * Appointment Class Doc Comment
 *
 * @category Class
 * @description The details of an appointment.
 * @package  Evers\SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class Appointment implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Appointment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'appointment_id' => 'string',
        'appointment_status' => 'string',
        'appointment_time' => '\Evers\SellingPartnerApi\Model\Service\AppointmentTime',
        'assigned_technicians' => '\Evers\SellingPartnerApi\Model\Service\Technician[]',
        'rescheduled_appointment_id' => 'string',
        'poa' => '\Evers\SellingPartnerApi\Model\Service\Poa'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'appointment_id' => null,
        'appointment_status' => null,
        'appointment_time' => null,
        'assigned_technicians' => null,
        'rescheduled_appointment_id' => null,
        'poa' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'appointment_id' => 'appointmentId',
        'appointment_status' => 'appointmentStatus',
        'appointment_time' => 'appointmentTime',
        'assigned_technicians' => 'assignedTechnicians',
        'rescheduled_appointment_id' => 'rescheduledAppointmentId',
        'poa' => 'poa'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'appointment_id' => 'setAppointmentId',
        'appointment_status' => 'setAppointmentStatus',
        'appointment_time' => 'setAppointmentTime',
        'assigned_technicians' => 'setAssignedTechnicians',
        'rescheduled_appointment_id' => 'setRescheduledAppointmentId',
        'poa' => 'setPoa'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'appointment_id' => 'getAppointmentId',
        'appointment_status' => 'getAppointmentStatus',
        'appointment_time' => 'getAppointmentTime',
        'assigned_technicians' => 'getAssignedTechnicians',
        'rescheduled_appointment_id' => 'getRescheduledAppointmentId',
        'poa' => 'getPoa'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    const APPOINTMENT_STATUS_ACTIVE = 'ACTIVE';
    const APPOINTMENT_STATUS_CANCELLED = 'CANCELLED';
    const APPOINTMENT_STATUS_COMPLETED = 'COMPLETED';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAppointmentStatusAllowableValues()
    {
        return [
            self::APPOINTMENT_STATUS_ACTIVE,
            self::APPOINTMENT_STATUS_CANCELLED,
            self::APPOINTMENT_STATUS_COMPLETED,
        ];
    }
    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['appointment_id'] = $data['appointment_id'] ?? null;
        $this->container['appointment_status'] = $data['appointment_status'] ?? null;
        $this->container['appointment_time'] = $data['appointment_time'] ?? null;
        $this->container['assigned_technicians'] = $data['assigned_technicians'] ?? null;
        $this->container['rescheduled_appointment_id'] = $data['rescheduled_appointment_id'] ?? null;
        $this->container['poa'] = $data['poa'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['appointment_id']) && (mb_strlen($this->container['appointment_id']) > 100)) {
            $invalidProperties[] = "invalid value for 'appointment_id', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['appointment_id']) && (mb_strlen($this->container['appointment_id']) < 5)) {
            $invalidProperties[] = "invalid value for 'appointment_id', the character length must be bigger than or equal to 5.";
        }

        $allowedValues = $this->getAppointmentStatusAllowableValues();
        if (!is_null($this->container['appointment_status']) && !in_array($this->container['appointment_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'appointment_status', must be one of '%s'",
                $this->container['appointment_status'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['assigned_technicians']) && (count($this->container['assigned_technicians']) < 1)) {
            $invalidProperties[] = "invalid value for 'assigned_technicians', number of items must be greater than or equal to 1.";
        }

        if (!is_null($this->container['rescheduled_appointment_id']) && (mb_strlen($this->container['rescheduled_appointment_id']) > 100)) {
            $invalidProperties[] = "invalid value for 'rescheduled_appointment_id', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['rescheduled_appointment_id']) && (mb_strlen($this->container['rescheduled_appointment_id']) < 5)) {
            $invalidProperties[] = "invalid value for 'rescheduled_appointment_id', the character length must be bigger than or equal to 5.";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets appointment_id
     *
     * @return string|null
     */
    public function getAppointmentId()
    {
        return $this->container['appointment_id'];
    }

    /**
     * Sets appointment_id
     *
     * @param string|null $appointment_id The appointment identifier.
     *
     * @return self
     */
    public function setAppointmentId($appointment_id)
    {
        if (!is_null($appointment_id) && (mb_strlen($appointment_id) > 100)) {
            throw new \InvalidArgumentException('invalid length for $appointment_id when calling Appointment., must be smaller than or equal to 100.');
        }
        if (!is_null($appointment_id) && (mb_strlen($appointment_id) < 5)) {
            throw new \InvalidArgumentException('invalid length for $appointment_id when calling Appointment., must be bigger than or equal to 5.');
        }

        $this->container['appointment_id'] = $appointment_id;

        return $this;
    }

    /**
     * Gets appointment_status
     *
     * @return string|null
     */
    public function getAppointmentStatus()
    {
        return $this->container['appointment_status'];
    }

    /**
     * Sets appointment_status
     *
     * @param string|null $appointment_status The status of the appointment.
     *
     * @return self
     */
    public function setAppointmentStatus($appointment_status)
    {
        $allowedValues = $this->getAppointmentStatusAllowableValues();
        if (!is_null($appointment_status) && !in_array($appointment_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'appointment_status', must be one of '%s'",
                    $appointment_status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['appointment_status'] = $appointment_status;

        return $this;
    }

    /**
     * Gets appointment_time
     *
     * @return \Evers\SellingPartnerApi\Model\Service\AppointmentTime|null
     */
    public function getAppointmentTime()
    {
        return $this->container['appointment_time'];
    }

    /**
     * Sets appointment_time
     *
     * @param \Evers\SellingPartnerApi\Model\Service\AppointmentTime|null $appointment_time appointment_time
     *
     * @return self
     */
    public function setAppointmentTime($appointment_time)
    {
        $this->container['appointment_time'] = $appointment_time;

        return $this;
    }

    /**
     * Gets assigned_technicians
     *
     * @return \Evers\SellingPartnerApi\Model\Service\Technician[]|null
     */
    public function getAssignedTechnicians()
    {
        return $this->container['assigned_technicians'];
    }

    /**
     * Sets assigned_technicians
     *
     * @param \Evers\SellingPartnerApi\Model\Service\Technician[]|null $assigned_technicians A list of technicians assigned to the service job.
     *
     * @return self
     */
    public function setAssignedTechnicians($assigned_technicians)
    {


        if (!is_null($assigned_technicians) && (count($assigned_technicians) < 1)) {
            throw new \InvalidArgumentException('invalid length for $assigned_technicians when calling Appointment., number of items must be greater than or equal to 1.');
        }
        $this->container['assigned_technicians'] = $assigned_technicians;

        return $this;
    }

    /**
     * Gets rescheduled_appointment_id
     *
     * @return string|null
     */
    public function getRescheduledAppointmentId()
    {
        return $this->container['rescheduled_appointment_id'];
    }

    /**
     * Sets rescheduled_appointment_id
     *
     * @param string|null $rescheduled_appointment_id The appointment identifier.
     *
     * @return self
     */
    public function setRescheduledAppointmentId($rescheduled_appointment_id)
    {
        if (!is_null($rescheduled_appointment_id) && (mb_strlen($rescheduled_appointment_id) > 100)) {
            throw new \InvalidArgumentException('invalid length for $rescheduled_appointment_id when calling Appointment., must be smaller than or equal to 100.');
        }
        if (!is_null($rescheduled_appointment_id) && (mb_strlen($rescheduled_appointment_id) < 5)) {
            throw new \InvalidArgumentException('invalid length for $rescheduled_appointment_id when calling Appointment., must be bigger than or equal to 5.');
        }

        $this->container['rescheduled_appointment_id'] = $rescheduled_appointment_id;

        return $this;
    }

    /**
     * Gets poa
     *
     * @return \Evers\SellingPartnerApi\Model\Service\Poa|null
     */
    public function getPoa()
    {
        return $this->container['poa'];
    }

    /**
     * Sets poa
     *
     * @param \Evers\SellingPartnerApi\Model\Service\Poa|null $poa poa
     *
     * @return self
     */
    public function setPoa($poa)
    {
        $this->container['poa'] = $poa;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

