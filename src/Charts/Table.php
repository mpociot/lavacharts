<?php namespace Khill\Lavacharts\Charts;

/**
 * Table Chart Class
 *
 * A vertical bar chart that is rendered within the browser using SVG or VML.
 * Displays tips when hovering over bars. For a horizontal version of this
 * chart, see the Bar Chart.
 *
 *
 * @package    Lavacharts
 * @subpackage Charts
 * @since      v1.0.0
 * @author     Kevin Hill <kevinkhill@gmail.com>
 * @copyright  (c) 2015, KHill Designs
 * @link       http://github.com/kevinkhill/lavacharts GitHub Repository Page
 * @link       http://lavacharts.com                   Official Docs Site
 * @license    http://opensource.org/licenses/MIT MIT
 */

use Khill\Lavacharts\Utils;
use Khill\Lavacharts\Configs\HorizontalAxis;
use Khill\Lavacharts\Configs\VerticalAxis;

class Table extends Chart
{
    public $type = 'Table';

    public function __construct($chartLabel)
    {
        parent::__construct($chartLabel);

        $this->defaults = array_merge(
            $this->defaults,
            array(
                //                'animation',
                'focusTarget',
                'showRowNumber',
                'width',
                'height',
                'isHtml',
            )
        );
    }



    /**
     *
     * @param  bool               $showRowNumber
     * @throws InvalidConfigValue
     * @return $this
     */
    public function showRowNumber($showRowNumber)
    {
        if (is_bool($showRowNumber)) {
            $this->addOption(array('showRowNumber' => $showRowNumber));
        } else {
            throw $this->invalidConfigValue(
                __FUNCTION__,
                'bool'
            );
        }

        return $this;
    }

    /**
     * @param string $width
     *
     * @return $this
     * @throws \Khill\Lavacharts\Exceptions\InvalidConfigValue
     */
    public function width($width)
    {
        $this->addOption(array('width' => $width));
        return $this;
    }

    /**
     * @param string $width
     *
     * @return $this
     * @throws \Khill\Lavacharts\Exceptions\InvalidConfigValue
     */
    public function height($height)
    {
        $this->addOption(array('height' => $height));
        return $this;
    }
}
