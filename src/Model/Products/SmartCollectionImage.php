<?php

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify\Resource\Products;

class SmartCollectionImage
{
    /**
     * @var string
     */
    protected $src;

    /**
     * @var int
     */
    protected $width;

    /**
     * @var int
     */
    protected $height;

    /**
     * @var \DateTimeInterface
     */
    protected $createdAt;

    /**
     * @return string
     */
    public function getSrc()
    {
        return $this->src;
    }

    /**
     * @param string $src
     *

     */
    public function setSrc($src)
    {
        $this->src = $src;


    }

    /**
     * @return int
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param int $width
     *

     */
    public function setWidth($width)
    {
        $this->width = $width;


    }

    /**
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param int $height
     *

     */
    public function setHeight($height)
    {
        $this->height = $height;


    }

    /**
     * @return \DateTimeInterface
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTimeInterface $createdAt
     *

     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;


    }
}