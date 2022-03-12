<?php

namespace Drupal\diarefresh2022\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class to return contents of '/Moderating'.
 */
class Moderating extends ControllerBase {

  /**
   * Returns Page Markup.
   *
   * @return array
   *   Markup.
   */
  public function content(): array {
    return [
      '#markup' => $this->t("Contents of Page '/Moderating'."),
    ];
  }

}
