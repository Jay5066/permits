<?php

namespace Drupal\dot_permits_migrate\Plugin\migrate\source;

use Drupal\migrate\Plugin\migrate\source\SqlBase;

/**
 * Provides a 'DotPermitsMigrate' migrate source.
 *
 * @MigrateSource(
 *  id = "custom_db_source",
 *  source_module = "dot_permits_migrate"
 * )
 */
class DotPermitsMigrate extends SqlBase {

  /**
   * {@inheritdoc}
   */
  public function query() {
    return $this->select('test', 't')
      ->fields('t')
;
  }

  /**
   * {@inheritdoc}
   */
  public function fields() {
    $fields = [
    ];
    return $fields;
  }

  /**
   * {@inheritdoc}
   */
  public function getIds() {
    return [];
  }

}
