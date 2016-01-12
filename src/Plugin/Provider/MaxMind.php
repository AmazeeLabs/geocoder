<?php
/**
 * @file
 * The MaxMind plugin.
 */

namespace Drupal\geocoder\Plugin\Provider;

use Drupal\geocoder\GeocoderProvider\GeocoderProvider;
use Geocoder\Geocoder;
use Geocoder\Provider\Provider;

/**
 * Class MaxMind.
 *
 * @GeocoderProviderPlugin(
 *  id = "MaxMind",
 *  arguments = {
 *    "@geocoder.http_adapter"
 *  }
 * )
 */

class MaxMind extends GeocoderProvider {
    /**
     * @inheritdoc
     */
    public function init() {
        $configuration = $this->getConfiguration();
        $this->setHandler(new \Geocoder\Provider\MaxMind($this->getAdapter(), $configuration['apiKey']));

        return parent::init();
    }

}