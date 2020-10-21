<?php

namespace Core;

class Route
{
  private $routingTable = [];

  public function get(string $url, string $controller_action)
  {
    $controller_action_arr = explode("@", $controller_action);

    $this->routingTable[$url] =
      [
        'method' => 'GET',
        'controller' => $controller_action_arr[0],
        'action' => $controller_action_arr[1]
      ];
  }

  public function post(string $url, string $controller_action)
  {
    $controller_action_arr = explode("@", $controller_action);

    $this->routingTable[$url] =
      [
        'method' => 'POST',
        'controller' => $controller_action_arr[0],
        'action' => $controller_action_arr[1]
      ];
  }

  public function getRoutingTable()
  {
    return $this->routingTable;
  }
}
