<?php
/**
 * The performance schema storage engine
 *
 * @package PhpMyAdmin-Engines
 */
declare(strict_types=1);

namespace PhpMyAdmin\Engines;

use PhpMyAdmin\StorageEngine;

/**
 * The performance schema storage engine
 *
 * @package PhpMyAdmin-Engines
 */
class PerformanceSchema extends StorageEngine
{
    /**
     * Returns string with filename for the MySQL helppage
     * about this storage engine
     *
     * @return string  mysql helppage filename
     */
    public function getMysqlHelpPage()
    {
        return 'performance-schema';
    }
}