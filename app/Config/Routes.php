<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

foreach (Config\Navigation::MENU_ITEMS as $item) {
  $routes->get('/' . $item['route'], $item['controller'] . '::index');
}
