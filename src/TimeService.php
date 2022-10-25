<?php

/**
 * @file providing the service that gives time.
 *
 */

namespace  Drupal\site_location_details;


class TimeService {

  /**
   * to get current time from timezone
   *
   * @param string $zone
   * @return void
   */
  public function  get_current_time_for_location($zone = '') {
    $date = new \DateTime("now", new \DateTimeZone($zone));
    $date_output = $date->format('dS M Y h:i A');
    return $date_output;
  }

}
