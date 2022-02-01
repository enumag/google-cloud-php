<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/admin/v2/bigtable_table_admin.proto

namespace Google\Cloud\Bigtable\Admin\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for
 * [google.bigtable.admin.v2.BigtableTableAdmin.ListSnapshots][google.bigtable.admin.v2.BigtableTableAdmin.ListSnapshots]
 * Note: This is a private alpha release of Cloud Bigtable snapshots. This
 * feature is not currently available to most Cloud Bigtable customers. This
 * feature might be changed in backward-incompatible ways and is not recommended
 * for production use. It is not subject to any SLA or deprecation policy.
 *
 * Generated from protobuf message <code>google.bigtable.admin.v2.ListSnapshotsResponse</code>
 */
class ListSnapshotsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The snapshots present in the requested cluster.
     *
     * Generated from protobuf field <code>repeated .google.bigtable.admin.v2.Snapshot snapshots = 1;</code>
     */
    private $snapshots;
    /**
     * Set if not all snapshots could be returned in a single response.
     * Pass this value to `page_token` in another request to get the next
     * page of results.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Bigtable\Admin\V2\Snapshot[]|\Google\Protobuf\Internal\RepeatedField $snapshots
     *           The snapshots present in the requested cluster.
     *     @type string $next_page_token
     *           Set if not all snapshots could be returned in a single response.
     *           Pass this value to `page_token` in another request to get the next
     *           page of results.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Bigtable\Admin\V2\BigtableTableAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * The snapshots present in the requested cluster.
     *
     * Generated from protobuf field <code>repeated .google.bigtable.admin.v2.Snapshot snapshots = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSnapshots()
    {
        return $this->snapshots;
    }

    /**
     * The snapshots present in the requested cluster.
     *
     * Generated from protobuf field <code>repeated .google.bigtable.admin.v2.Snapshot snapshots = 1;</code>
     * @param \Google\Cloud\Bigtable\Admin\V2\Snapshot[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSnapshots($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Bigtable\Admin\V2\Snapshot::class);
        $this->snapshots = $arr;

        return $this;
    }

    /**
     * Set if not all snapshots could be returned in a single response.
     * Pass this value to `page_token` in another request to get the next
     * page of results.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * Set if not all snapshots could be returned in a single response.
     * Pass this value to `page_token` in another request to get the next
     * page of results.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

