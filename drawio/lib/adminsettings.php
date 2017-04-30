<?php

/**
 * Copyright (c) 2017 Pawel Rojek <pawel@pawelrojek.com>
 *
 * This file is licensed under the Affero General Public License version 3 or later.
 *
 **/

namespace OCA\Drawio;

use OCP\Settings\ISettings;

use OCA\Drawio\AppInfo\Application;


class AdminSettings implements ISettings {

    public function __construct()
    {
    }

    public function getForm()
    {
        $app = new Application();
        $container = $app->getContainer();
        $response = $container->query("\OCA\Drawio\Controller\SettingsController")->index();
        return $response;
    }

    public function getSection()
    {
        return "server";
    }

    public function getPriority()
    {
        return 60;
    }
}
