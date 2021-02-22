<?php

namespace Drupal\halcyon\Theme;

use Drupal\Core\Routing\RouteMatchInterface;
use Drupal\Core\Theme\ThemeNegotiatorInterface;

class DefaultNegotiator implements ThemeNegotiatorInterface {

  public function applies(RouteMatchInterface $route_match) {
    if (
      $route_match->getRouteObject() &&
      $route_match->getRouteObject()->getOption('_admin_route')
    ) {
      return FALSE;
    }

    $node = $route_match->getParameter('node');
    return ($node && $node->getType() === 'halcyon_paragraph');
  }

  public function determineActiveTheme(RouteMatchInterface $route_match) {
    return 'halcyon_theme';
  }

}
