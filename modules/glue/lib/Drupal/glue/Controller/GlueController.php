<?php
/**
 * @file
 * Contains \Drupal\foobar\Controller\GlueController.
 */
namespace Drupal\glue\Controller;

use Drupal\Core\Controller\ControllerInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class GlueController implements ControllerInterface {

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('module_handler')
    );
  }

  public function helloWorldPage() {
    return array(
      '#markup' => t('<p> Hello World !! page content.'),
      );
  }
}
