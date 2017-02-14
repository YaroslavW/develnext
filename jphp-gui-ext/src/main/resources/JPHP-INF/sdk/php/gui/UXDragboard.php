<?php
namespace php\gui;

/**
 * Class UXDragboard
 * @package php\gui
 *
 * @packages gui, javafx
 */
class UXDragboard
{

    /** @var UXImage */
    public $dragView = null;

    /** @var double */
    public $dragViewOffsetX = 0;

    /** @var double */
    public $dragViewOffsetY = 0;

    /** @var array */
    public $transferModes = [];

    /**
     * @var string
     */
    public $string;

    /**
     * @var UXImage
     */
    public $image;

    public function __construct(UXDragboard $origin)
    {
    }
}