<?php
/**
 * ItemSummaryByMarketplace
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Catalog Items
 *
 * The Selling Partner API for Catalog Items provides programmatic access to information about items in the Amazon catalog. For more information, see the [Catalog Items API Use Case Guide](https://developer-docs.amazon.com/sp-api/docs/catalog-items-api-v2020-12-01-use-case-guide).
 *
 * The version of the OpenAPI document: 2020-12-01
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\CatalogItemsV20201201;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;
use SellingPartnerApi\ObjectSerializer;

/**
 * ItemSummaryByMarketplace Class Doc Comment
 *
 * @category Class
 * @description Summary details of an Amazon catalog item for the indicated Amazon marketplace.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ItemSummaryByMarketplace extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ItemSummaryByMarketplace';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'marketplace_id' => 'string',
        'brand_name' => 'string',
        'browse_node' => 'string',
        'color_name' => 'string',
        'item_name' => 'string',
        'manufacturer' => 'string',
        'model_number' => 'string',
        'size_name' => 'string',
        'style_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'marketplace_id' => null,
        'brand_name' => null,
        'browse_node' => null,
        'color_name' => null,
        'item_name' => null,
        'manufacturer' => null,
        'model_number' => null,
        'size_name' => null,
        'style_name' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'marketplace_id' => 'marketplaceId',
        'brand_name' => 'brandName',
        'browse_node' => 'browseNode',
        'color_name' => 'colorName',
        'item_name' => 'itemName',
        'manufacturer' => 'manufacturer',
        'model_number' => 'modelNumber',
        'size_name' => 'sizeName',
        'style_name' => 'styleName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'marketplace_id' => 'setMarketplaceId',
        'brand_name' => 'setBrandName',
        'browse_node' => 'setBrowseNode',
        'color_name' => 'setColorName',
        'item_name' => 'setItemName',
        'manufacturer' => 'setManufacturer',
        'model_number' => 'setModelNumber',
        'size_name' => 'setSizeName',
        'style_name' => 'setStyleName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'marketplace_id' => 'getMarketplaceId',
        'brand_name' => 'getBrandName',
        'browse_node' => 'getBrowseNode',
        'color_name' => 'getColorName',
        'item_name' => 'getItemName',
        'manufacturer' => 'getManufacturer',
        'model_number' => 'getModelNumber',
        'size_name' => 'getSizeName',
        'style_name' => 'getStyleName'
    ];


    
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
        $this->container['marketplace_id'] = $data['marketplace_id'] ?? null;
        $this->container['brand_name'] = $data['brand_name'] ?? null;
        $this->container['browse_node'] = $data['browse_node'] ?? null;
        $this->container['color_name'] = $data['color_name'] ?? null;
        $this->container['item_name'] = $data['item_name'] ?? null;
        $this->container['manufacturer'] = $data['manufacturer'] ?? null;
        $this->container['model_number'] = $data['model_number'] ?? null;
        $this->container['size_name'] = $data['size_name'] ?? null;
        $this->container['style_name'] = $data['style_name'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['marketplace_id'] === null) {
            $invalidProperties[] = "'marketplace_id' can't be null";
        }
        return $invalidProperties;
    }


    /**
     * Gets marketplace_id
     *
     * @return string
     */
    public function getMarketplaceId()
    {
        return $this->container['marketplace_id'];
    }

    /**
     * Sets marketplace_id
     *
     * @param string $marketplace_id Amazon marketplace identifier.
     *
     * @return self
     */
    public function setMarketplaceId($marketplace_id)
    {
        $this->container['marketplace_id'] = $marketplace_id;

        return $this;
    }
    /**
     * Gets brand_name
     *
     * @return string|null
     */
    public function getBrandName()
    {
        return $this->container['brand_name'];
    }

    /**
     * Sets brand_name
     *
     * @param string|null $brand_name Name of the brand associated with an Amazon catalog item.
     *
     * @return self
     */
    public function setBrandName($brand_name)
    {
        $this->container['brand_name'] = $brand_name;

        return $this;
    }
    /**
     * Gets browse_node
     *
     * @return string|null
     */
    public function getBrowseNode()
    {
        return $this->container['browse_node'];
    }

    /**
     * Sets browse_node
     *
     * @param string|null $browse_node Identifier of the browse node associated with an Amazon catalog item.
     *
     * @return self
     */
    public function setBrowseNode($browse_node)
    {
        $this->container['browse_node'] = $browse_node;

        return $this;
    }
    /**
     * Gets color_name
     *
     * @return string|null
     */
    public function getColorName()
    {
        return $this->container['color_name'];
    }

    /**
     * Sets color_name
     *
     * @param string|null $color_name Name of the color associated with an Amazon catalog item.
     *
     * @return self
     */
    public function setColorName($color_name)
    {
        $this->container['color_name'] = $color_name;

        return $this;
    }
    /**
     * Gets item_name
     *
     * @return string|null
     */
    public function getItemName()
    {
        return $this->container['item_name'];
    }

    /**
     * Sets item_name
     *
     * @param string|null $item_name Name, or title, associated with an Amazon catalog item.
     *
     * @return self
     */
    public function setItemName($item_name)
    {
        $this->container['item_name'] = $item_name;

        return $this;
    }
    /**
     * Gets manufacturer
     *
     * @return string|null
     */
    public function getManufacturer()
    {
        return $this->container['manufacturer'];
    }

    /**
     * Sets manufacturer
     *
     * @param string|null $manufacturer Name of the manufacturer associated with an Amazon catalog item.
     *
     * @return self
     */
    public function setManufacturer($manufacturer)
    {
        $this->container['manufacturer'] = $manufacturer;

        return $this;
    }
    /**
     * Gets model_number
     *
     * @return string|null
     */
    public function getModelNumber()
    {
        return $this->container['model_number'];
    }

    /**
     * Sets model_number
     *
     * @param string|null $model_number Model number associated with an Amazon catalog item.
     *
     * @return self
     */
    public function setModelNumber($model_number)
    {
        $this->container['model_number'] = $model_number;

        return $this;
    }
    /**
     * Gets size_name
     *
     * @return string|null
     */
    public function getSizeName()
    {
        return $this->container['size_name'];
    }

    /**
     * Sets size_name
     *
     * @param string|null $size_name Name of the size associated with an Amazon catalog item.
     *
     * @return self
     */
    public function setSizeName($size_name)
    {
        $this->container['size_name'] = $size_name;

        return $this;
    }
    /**
     * Gets style_name
     *
     * @return string|null
     */
    public function getStyleName()
    {
        return $this->container['style_name'];
    }

    /**
     * Sets style_name
     *
     * @param string|null $style_name Name of the style associated with an Amazon catalog item.
     *
     * @return self
     */
    public function setStyleName($style_name)
    {
        $this->container['style_name'] = $style_name;

        return $this;
    }
}


