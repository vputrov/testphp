<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose">
 *   Copyright (c) 2018 Aspose.Slides for Cloud
 * </copyright>
 * <summary>
 *   Permission is hereby granted, free of charge, to any person obtaining a copy
 *  of this software and associated documentation files (the "Software"), to deal
 *  in the Software without restriction, including without limitation the rights
 *  to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 *  copies of the Software, and to permit persons to whom the Software is
 *  furnished to do so, subject to the following conditions:
 * 
 *  The above copyright notice and this permission notice shall be included in all
 *  copies or substantial portions of the Software.
 * 
 *  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 *  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 *  FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 *  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 *  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 *  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 *  SOFTWARE.
 * </summary>
 * --------------------------------------------------------------------------------------------------------------------
 */


namespace Aspose\Slides\Cloud\Sdk\Model\Requests;
/*
 * Request model for getShapeWithFormat operation.
 */
class GetShapeWithFormatRequest
{
    /*
     * Presentation name.
     */
    public $name;

    /*
     * Slide index.
     */
    public $slideIndex;

    /*
     * Index of shape starting from 1
     */
    public $shapeIndex;

    /*
     * Export picture format.
     */
    public $format;

    /*
     * Presentation folder.
     */
    public $folder;

    /*
     * Presentation storage.
     */
    public $storage;

    /*
     * X scale ratio.
     */
    public $scaleX;

    /*
     * Y scale ratio.
     */
    public $scaleY;

    /*
     * Shape thumbnail bounds type.
     */
    public $bounds;

    /*
     * Output path.
     */
    public $outPath;

    /*
     * Fonts folder.
     */
    public $fontsFolder;

    /*
     * Initializes a new instance of the GetShapeWithFormatRequest class.
     *  
     * @param string $name Presentation name.
     * @param int $slideIndex Slide index.
     * @param int $shapeIndex Index of shape starting from 1
     * @param int $format Export picture format.
     * @param string $folder Presentation folder.
     * @param string $storage Presentation storage.
     * @param double $scaleX X scale ratio.
     * @param double $scaleY Y scale ratio.
     * @param string $bounds Shape thumbnail bounds type.
     * @param string $outPath Output path.
     * @param string $fontsFolder Fonts folder.
     */
    public function __construct($name, $slideIndex, $shapeIndex, $format, $folder = null, $storage = null, $scaleX = null, $scaleY = null, $bounds = null, $outPath = null, $fontsFolder = null)
    {
        $this->name = $name;
        $this->slideIndex = $slideIndex;
        $this->shapeIndex = $shapeIndex;
        $this->format = $format;
        $this->folder = $folder;
        $this->storage = $storage;
        $this->scaleX = $scaleX;
        $this->scaleY = $scaleY;
        $this->bounds = $bounds;
        $this->outPath = $outPath;
        $this->fontsFolder = $fontsFolder;
    }

    /*
     * Presentation name.
     */
    public function get_name()
    {
        return $this->name;
    }

    /*
     * Presentation name.
     */
    public function set_name($value)
    {
        $this->name = $value;
        return $this;
    }
    /*
     * Slide index.
     */
    public function get_slideIndex()
    {
        return $this->slideIndex;
    }

    /*
     * Slide index.
     */
    public function set_slideIndex($value)
    {
        $this->slideIndex = $value;
        return $this;
    }
    /*
     * Index of shape starting from 1
     */
    public function get_shapeIndex()
    {
        return $this->shapeIndex;
    }

    /*
     * Index of shape starting from 1
     */
    public function set_shapeIndex($value)
    {
        $this->shapeIndex = $value;
        return $this;
    }
    /*
     * Export picture format.
     */
    public function get_format()
    {
        return $this->format;
    }

    /*
     * Export picture format.
     */
    public function set_format($value)
    {
        $this->format = $value;
        return $this;
    }
    /*
     * Presentation folder.
     */
    public function get_folder()
    {
        return $this->folder;
    }

    /*
     * Presentation folder.
     */
    public function set_folder($value)
    {
        $this->folder = $value;
        return $this;
    }
    /*
     * Presentation storage.
     */
    public function get_storage()
    {
        return $this->storage;
    }

    /*
     * Presentation storage.
     */
    public function set_storage($value)
    {
        $this->storage = $value;
        return $this;
    }
    /*
     * X scale ratio.
     */
    public function get_scaleX()
    {
        return $this->scaleX;
    }

    /*
     * X scale ratio.
     */
    public function set_scaleX($value)
    {
        $this->scaleX = $value;
        return $this;
    }
    /*
     * Y scale ratio.
     */
    public function get_scaleY()
    {
        return $this->scaleY;
    }

    /*
     * Y scale ratio.
     */
    public function set_scaleY($value)
    {
        $this->scaleY = $value;
        return $this;
    }
    /*
     * Shape thumbnail bounds type.
     */
    public function get_bounds()
    {
        return $this->bounds;
    }

    /*
     * Shape thumbnail bounds type.
     */
    public function set_bounds($value)
    {
        $this->bounds = $value;
        return $this;
    }
    /*
     * Output path.
     */
    public function get_outPath()
    {
        return $this->outPath;
    }

    /*
     * Output path.
     */
    public function set_outPath($value)
    {
        $this->outPath = $value;
        return $this;
    }
    /*
     * Fonts folder.
     */
    public function get_fontsFolder()
    {
        return $this->fontsFolder;
    }

    /*
     * Fonts folder.
     */
    public function set_fontsFolder($value)
    {
        $this->fontsFolder = $value;
        return $this;
    }
}
