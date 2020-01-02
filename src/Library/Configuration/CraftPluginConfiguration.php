<?php
/**
 * Freeform for Craft
 *
 * @package       Solspace:Freeform
 * @author        Solspace, Inc.
 * @copyright     Copyright (c) 2008-2020, Solspace, Inc.
 * @link          https://docs.solspace.com/craft/freeform
 * @license       https://docs.solspace.com/license-agreement
 */

namespace Solspace\Freeform\Library\Configuration;

use Solspace\Freeform\Freeform;

class CraftPluginConfiguration implements ConfigurationInterface
{
    const CONTEXT = 'freeform';

    /**
     * @param string $key
     *
     * @return mixed|null
     */
    public function get($key)
    {
        $settings = Freeform::getInstance()->getSettings();

        return $settings->$key ?? null;
    }
}
