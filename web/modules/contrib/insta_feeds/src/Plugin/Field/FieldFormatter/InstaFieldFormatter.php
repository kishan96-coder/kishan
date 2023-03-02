<?php

namespace Drupal\insta_feeds\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FormatterBase;
use Drupal\Core\Field\FieldItemListInterface;

/**
 * Plugin implementation of the 'InstaFieldFormatter' formatter.
 *
 * @FieldFormatter(
 *   id = "InstaFieldFormatter",
 *   label = @Translation("Instagram Username Field Formatter"),
 *   field_types = {
 *     "insta_field"
 *   }
 * )
 */
class InstaFieldFormatter extends FormatterBase {

 /**
   * {@inheritdoc}
   */
  public static function defaultSettings() {
    return [
      // Implement default settings.
    ] + parent::defaultSettings();
  }

  /**
   * {@inheritdoc}
   */
  public function settingsSummary() {
    $summary = [];
    $summary[] = $this->t('Displays the random string.');
    return $summary;
  }

  /**
   * {@inheritdoc}
   */
  public function viewElements(FieldItemListInterface $items, $langcode) {

    $elements = [];
    foreach ($items as $delta => $item) {
      $elements[$delta] = [
        '#type' => 'markup',
        '#markup' => $item->insta_field
      ];
    }

    return $elements;
  }
}