<?php
namespace Drupal\insta_feeds\Plugin\Field\FieldType;

use Drupal\Core\Field\FieldItemBase;
use Drupal\Core\Field\FieldStorageDefinitionInterface;
use Drupal\Core\TypedData\DataDefinition;
use Drupal\Core\StringTranslation\TranslatableMarkup;

/**
 * Plugin implementation of the 'insta_field' field type.
 *
 * @FieldType(
 *   id = "insta_field",
 *   label = @Translation("Instagram username"),
 *   description = @Translation("This field is used to store alpha-numeric values."),
 *   default_widget = "InstaFieldWidget",
 *   default_formatter = "InstaFieldFormatter"
 * )
 */
class Instafield extends FieldItemBase {

 /**
  * {@inheritdoc}
  */
  public static function propertyDefinitions(FieldStorageDefinitionInterface $definition) {
    // Prevent early t() calls by using the TranslatableMarkup.
    $properties['insta_field'] = DataDefinition::create('string')
    ->setLabel(new TranslatableMarkup('Text value'));

    return $properties;
  }

  /**
   * {@inheritdoc}
   */
  public static function schema(FieldStorageDefinitionInterface $definition) {
    $schema = [
        'columns' => [
          'insta_field' => [
            'type' => 'varchar',
            'length' => 255,
          ],
        ],
    ];

    return $schema;
  }

  /**
   * {@inheritdoc}
   */
  public function isEmpty() {
    \Drupal::logger('test1')->notice('<pre>'.print_r('test',true).'</pre>');
    $value = $this->get('insta_field')->getValue();
    return $value ;
  }

}