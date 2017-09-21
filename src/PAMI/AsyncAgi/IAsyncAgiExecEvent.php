<?php
namespace PAMI\AsyncAgi;

/**
 * Async AGI Event interface.
 */
interface IAsyncAgiExecEvent
{
    /**
     * Returns key: 'Privilege'.
     *
     * @return string
     */
    public function getPrivilege();

    /**
     * Returns key: 'Channel'.
     *
     * @return string
     */
    public function getChannel();

    /**
     * Returns key: 'CommandID'.
     *
     * @return string
     */
    public function getCommandID();

    /**
     * Returns key: 'Result'.
     *
     * @return string
     */
    public function getResult();

}