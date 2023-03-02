<?php
namespace Drupal\insta_feeds\Plugin\Field\FieldWidget;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\WidgetBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Plugin implementation of the 'InstaFieldWidget' widget.
 *
 * @FieldWidget(
 *   id = "InstaFieldWidget",
 *   label = @Translation("Instagram Username Field widget"),
 *   field_types = {
 *     "insta_field"
 *   }
 * )
 */
class InstaFieldWidget extends WidgetBase {

 /**
   * {@inheritdoc}
   */
  public function formElement(FieldItemListInterface $items, $delta, array $element, array &$form, FormStateInterface $form_state) {
    \Drupal::logger('delta_value')->notice('<pre>'.print_r($items[$delta]->title,true).'</pre>');
    $element['insta_field'] =  [
      '#type' => 'textfield',
      '#title' => 'Instagram username Field',
      '#description' => 'Instagram username field to be used for alpha-numeric values',
      '#default_value' => isset($items[$delta]->title) ? $items[$delta]->title:NULL,
      '#weight' => 0,
    ];

    return $element;
  }

}