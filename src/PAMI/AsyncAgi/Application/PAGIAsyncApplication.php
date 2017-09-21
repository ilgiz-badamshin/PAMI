<?php

namespace PAMI\AsyncAgi\Application;

use PAGI\Application\PAGIApplication;

/**
 * Parent class for all async PAGIApplications.
 *
 */
abstract class PAGIAsyncApplication extends PAGIApplication
{

    /**
     * Returns AGI Client.
     *
     * @return \PAMI\AsyncAgi\IAsyncClient
     */
    public function getAgi()
    {
        return parent::getAgi();
    }
}