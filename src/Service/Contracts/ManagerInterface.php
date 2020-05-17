<?php

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify\Service\Contracts;

use Slince\Shopify\Client;
use Slince\Shopify\Model\ModelInterface;

interface ManagerInterface
{
    /**
     * Gets the service name.
     *
     * @return string
     */
    public static function getServiceName();

    /**
     * Gets the shopify client.
     *
     * @return Client
     */
    public function getClient();

    /**
     * Create the model from an array.
     *
     * @param string $modelClass
     *
     * @return ModelInterface
     */
    public function fromArray(array $data, $modelClass = null);

    /**
     * Create many models from an array.
     *
     * @param string $modelClass
     *
     * @return ModelInterface[]
     */
    public function createMany(array $data, $modelClass = null);

    /**
     * Converts the model to array.
     *
     * @param ModelInterface $model
     *
     * @return array
     */
    public function toArray($model);
}