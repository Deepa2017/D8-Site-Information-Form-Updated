<?php

namespace Drupal\site_api_information\Routing;

use Drupal\Core\Routing\RouteSubscriberBase;
use Symfony\Component\Routing\RouteCollection;

/**
 * Listens to the dynamic route events.
 */
class SiteApiKeyRouteSubscriber extends RouteSubscriberBase
{
    /**
     * {@inheritdoc}
     */
    protected function alterRoutes(RouteCollection $collection)
    {
        // Alter form for the system.site_information_settings route
        // to Drupal\site_api_information\Form\SiteApiKeySiteInformationForm
        if($route = $collection->get('system.site_information_settings'))
        {
            $route->setDefault('_form', 'Drupal\site_api_information\Form\SiteApiKeySiteInformationForm');
        }
    }
}
?>
