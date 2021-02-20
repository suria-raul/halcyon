<?php

namespace Drupal\halcyon\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Class HalcyonBlock
 *
 * @Block(
 *   id = "HalcyonBlock",
 *   admin_label = @Translation("Custom Halcyon Block")
 * )
 */
class HalcyonBlock extends BlockBase {

  /**
   * {@inheritDoc}
   */
  public function build() {
    return [
      '#type' => 'markup',
      '#markup' => 'This is the Halcyon Custom block',
    ];
  }

}
