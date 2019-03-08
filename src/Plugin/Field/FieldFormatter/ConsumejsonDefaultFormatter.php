<?php

namespace Drupal\consumejson\Plugin\Field\FieldFormatter;

use Drupal\Core\Annotation\Translation;
use Drupal\Core\Field\Annotation\FieldFormatter;
use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\FormatterBase;


/**
 * @FieldFormatter(
 *     id = "consumejson_default",
 *     label = @Translation("Element"),
 *     field_types = {
 *          "consumejson"
 *     }
 * )
 */
class ConsumejsonDefaultFormatter extends FormatterBase {

    /**
     * Builds a renderable array for a field value.
     *
     * @param \Drupal\Core\Field\FieldItemListInterface $items
     *   The field values to be rendered.
     * @param string $langcode
     *   The language that should be used to render the field.
     *
     * @return array
     *   A renderable array for $items, as an array of child elements keyed by
     *   consecutive numeric indexes starting from 0.
     */
    public function viewElements(FieldItemListInterface $items, $langcode)
    {
        $elements = [];

     

       // $countries = \Drupal::service('country_manager')->getList();
        foreach ($items as $delta => $item){
       
                $elements[$delta] = [
                    '#type' => 'markup',
                    '#markup' => '<h1>'.$item->value.'</h1>',
                ];
            
        }

        return $elements;
    }
}