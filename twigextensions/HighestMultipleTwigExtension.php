<?php 
namespace Craft;

use Twig_Extension;
use Twig_Filter_Method;

class HighestMultipleTwigExtension extends \Twig_Extension
{

    public function getName()
    {
        return 'HighestMultiple';
    }

    public function getFilters()
    {
        return array(
            'highestMultiple' => new Twig_Filter_Method($this, 'highestMultiple'),
        );
    }

    public function highestMultiple($number, $multiple_of)
    {
        return $number -= ($number % $multiple_of);
    }
}
