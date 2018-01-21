<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Bus\Commands\Incident;

final class ReportMaintenanceCommand
{
    /**
     * The maintenance name.
     *
     * @var string
     */
    public $name;

    /**
     * The maintenance message.
     *
     * @var string
     */
    public $message;

    /**
     * Whether to notify about the maintenance or not.
     *
     * @var bool
     */
    public $notify;

    /**
     * Timestamp of when the maintenance is due to start.
     *
     * @var string
     */
    public $timestamp;

    /**
     * The Maintenance component.
     *
     * @var int
     */
    public $component_id;

    /**
     * The validation rules.
     *
     * @var string[]
     */
    public $rules = [
        'name'      => 'required|string',
        'message'   => 'string',
        'notify'    => 'bool',
        'timestamp' => 'string',
        'component_id' => 'int|required_with:component_status',
    ];

    /**
     * Create a new report maintenance command instance.
     *
     * @param string $name
     * @param string $message
     * @param bool   $notify
     * @param string $timestamp
     *
     * @return void
     */
    public function __construct($name, $message, $component_id, $notify, $timestamp)
    {
        $this->name = $name;
        $this->message = $message;
        $this->notify = $notify;
        $this->timestamp = $timestamp;
        $this->component_id = $component_id;
    }
}
