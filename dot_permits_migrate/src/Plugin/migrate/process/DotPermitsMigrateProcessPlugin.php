<?php

namespace Drupal\dot_permits_migrate\Plugin\migrate\process;

use Drupal\migrate\ProcessPluginBase;
use Drupal\migrate\MigrateExecutableInterface;
use Drupal\migrate\Row;

/**
 * Provides a 'DotPermitsMigrateProcessPlugin' migrate process plugin.
 *
 * @MigrateProcessPlugin(
 *  id = "dot_permits_migrate_process_plugin"
 * )
 */
class DotPermitsMigrateProcessPlugin extends ProcessPluginBase {

  /**
   * {@inheritdoc}
   */
  public function transform($value, MigrateExecutableInterface $migrate_executable, Row $row, $destination_property) {
    // Plugin logic goes here.
  }

}
