<?php

/**
 * @file
 * Contains \Drupal\d8e_mock_service\MockService.
 */

namespace Drupal\d8e_mock_service;

use Drupal\d8e_service_override\ServiceOverrideInterface;

class MockService implements ServiceOverrideInterface{

  /**
   * Return the name of this service.
   */
  public function getName() {
    return 'd8e Service Override: Mock Service';
  }

}