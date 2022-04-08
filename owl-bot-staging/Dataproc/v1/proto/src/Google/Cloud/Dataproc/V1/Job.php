<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1/jobs.proto

namespace Google\Cloud\Dataproc\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A Dataproc job resource.
 *
 * Generated from protobuf message <code>google.cloud.dataproc.v1.Job</code>
 */
class Job extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. The fully qualified reference to the job, which can be used to
     * obtain the equivalent REST path of the job resource. If this property
     * is not specified when a job is created, the server generates a
     * <code>job_id</code>.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.JobReference reference = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $reference = null;
    /**
     * Required. Job information, including how, when, and where to
     * run the job.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.JobPlacement placement = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $placement = null;
    /**
     * Output only. The job status. Additional application-specific
     * status information may be contained in the <code>type_job</code>
     * and <code>yarn_applications</code> fields.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.JobStatus status = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $status = null;
    /**
     * Output only. The previous job status.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataproc.v1.JobStatus status_history = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $status_history;
    /**
     * Output only. The collection of YARN applications spun up by this job.
     * **Beta** Feature: This report is available for testing purposes only. It
     * may be changed before final release.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataproc.v1.YarnApplication yarn_applications = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $yarn_applications;
    /**
     * Output only. A URI pointing to the location of the stdout of the job's
     * driver program.
     *
     * Generated from protobuf field <code>string driver_output_resource_uri = 17 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $driver_output_resource_uri = '';
    /**
     * Output only. If present, the location of miscellaneous control files
     * which may be used as part of job setup and handling. If not present,
     * control files may be placed in the same location as `driver_output_uri`.
     *
     * Generated from protobuf field <code>string driver_control_files_uri = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $driver_control_files_uri = '';
    /**
     * Optional. The labels to associate with this job.
     * Label **keys** must contain 1 to 63 characters, and must conform to
     * [RFC 1035](https://www.ietf.org/rfc/rfc1035.txt).
     * Label **values** may be empty, but, if present, must contain 1 to 63
     * characters, and must conform to [RFC
     * 1035](https://www.ietf.org/rfc/rfc1035.txt). No more than 32 labels can be
     * associated with a job.
     *
     * Generated from protobuf field <code>map<string, string> labels = 18 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $labels;
    /**
     * Optional. Job scheduling configuration.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.JobScheduling scheduling = 20 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $scheduling = null;
    /**
     * Output only. A UUID that uniquely identifies a job within the project
     * over time. This is in contrast to a user-settable reference.job_id that
     * may be reused over time.
     *
     * Generated from protobuf field <code>string job_uuid = 22 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $job_uuid = '';
    /**
     * Output only. Indicates whether the job is completed. If the value is `false`,
     * the job is still in progress. If `true`, the job is completed, and
     * `status.state` field will indicate if it was successful, failed,
     * or cancelled.
     *
     * Generated from protobuf field <code>bool done = 24 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $done = false;
    protected $type_job;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dataproc\V1\JobReference $reference
     *           Optional. The fully qualified reference to the job, which can be used to
     *           obtain the equivalent REST path of the job resource. If this property
     *           is not specified when a job is created, the server generates a
     *           <code>job_id</code>.
     *     @type \Google\Cloud\Dataproc\V1\JobPlacement $placement
     *           Required. Job information, including how, when, and where to
     *           run the job.
     *     @type \Google\Cloud\Dataproc\V1\HadoopJob $hadoop_job
     *           Optional. Job is a Hadoop job.
     *     @type \Google\Cloud\Dataproc\V1\SparkJob $spark_job
     *           Optional. Job is a Spark job.
     *     @type \Google\Cloud\Dataproc\V1\PySparkJob $pyspark_job
     *           Optional. Job is a PySpark job.
     *     @type \Google\Cloud\Dataproc\V1\HiveJob $hive_job
     *           Optional. Job is a Hive job.
     *     @type \Google\Cloud\Dataproc\V1\PigJob $pig_job
     *           Optional. Job is a Pig job.
     *     @type \Google\Cloud\Dataproc\V1\SparkRJob $spark_r_job
     *           Optional. Job is a SparkR job.
     *     @type \Google\Cloud\Dataproc\V1\SparkSqlJob $spark_sql_job
     *           Optional. Job is a SparkSql job.
     *     @type \Google\Cloud\Dataproc\V1\PrestoJob $presto_job
     *           Optional. Job is a Presto job.
     *     @type \Google\Cloud\Dataproc\V1\JobStatus $status
     *           Output only. The job status. Additional application-specific
     *           status information may be contained in the <code>type_job</code>
     *           and <code>yarn_applications</code> fields.
     *     @type \Google\Cloud\Dataproc\V1\JobStatus[]|\Google\Protobuf\Internal\RepeatedField $status_history
     *           Output only. The previous job status.
     *     @type \Google\Cloud\Dataproc\V1\YarnApplication[]|\Google\Protobuf\Internal\RepeatedField $yarn_applications
     *           Output only. The collection of YARN applications spun up by this job.
     *           **Beta** Feature: This report is available for testing purposes only. It
     *           may be changed before final release.
     *     @type string $driver_output_resource_uri
     *           Output only. A URI pointing to the location of the stdout of the job's
     *           driver program.
     *     @type string $driver_control_files_uri
     *           Output only. If present, the location of miscellaneous control files
     *           which may be used as part of job setup and handling. If not present,
     *           control files may be placed in the same location as `driver_output_uri`.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Optional. The labels to associate with this job.
     *           Label **keys** must contain 1 to 63 characters, and must conform to
     *           [RFC 1035](https://www.ietf.org/rfc/rfc1035.txt).
     *           Label **values** may be empty, but, if present, must contain 1 to 63
     *           characters, and must conform to [RFC
     *           1035](https://www.ietf.org/rfc/rfc1035.txt). No more than 32 labels can be
     *           associated with a job.
     *     @type \Google\Cloud\Dataproc\V1\JobScheduling $scheduling
     *           Optional. Job scheduling configuration.
     *     @type string $job_uuid
     *           Output only. A UUID that uniquely identifies a job within the project
     *           over time. This is in contrast to a user-settable reference.job_id that
     *           may be reused over time.
     *     @type bool $done
     *           Output only. Indicates whether the job is completed. If the value is `false`,
     *           the job is still in progress. If `true`, the job is completed, and
     *           `status.state` field will indicate if it was successful, failed,
     *           or cancelled.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataproc\V1\Jobs::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. The fully qualified reference to the job, which can be used to
     * obtain the equivalent REST path of the job resource. If this property
     * is not specified when a job is created, the server generates a
     * <code>job_id</code>.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.JobReference reference = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Dataproc\V1\JobReference|null
     */
    public function getReference()
    {
        return $this->reference;
    }

    public function hasReference()
    {
        return isset($this->reference);
    }

    public function clearReference()
    {
        unset($this->reference);
    }

    /**
     * Optional. The fully qualified reference to the job, which can be used to
     * obtain the equivalent REST path of the job resource. If this property
     * is not specified when a job is created, the server generates a
     * <code>job_id</code>.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.JobReference reference = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dataproc\V1\JobReference $var
     * @return $this
     */
    public function setReference($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataproc\V1\JobReference::class);
        $this->reference = $var;

        return $this;
    }

    /**
     * Required. Job information, including how, when, and where to
     * run the job.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.JobPlacement placement = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Dataproc\V1\JobPlacement|null
     */
    public function getPlacement()
    {
        return $this->placement;
    }

    public function hasPlacement()
    {
        return isset($this->placement);
    }

    public function clearPlacement()
    {
        unset($this->placement);
    }

    /**
     * Required. Job information, including how, when, and where to
     * run the job.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.JobPlacement placement = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Dataproc\V1\JobPlacement $var
     * @return $this
     */
    public function setPlacement($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataproc\V1\JobPlacement::class);
        $this->placement = $var;

        return $this;
    }

    /**
     * Optional. Job is a Hadoop job.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.HadoopJob hadoop_job = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Dataproc\V1\HadoopJob|null
     */
    public function getHadoopJob()
    {
        return $this->readOneof(3);
    }

    public function hasHadoopJob()
    {
        return $this->hasOneof(3);
    }

    /**
     * Optional. Job is a Hadoop job.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.HadoopJob hadoop_job = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dataproc\V1\HadoopJob $var
     * @return $this
     */
    public function setHadoopJob($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataproc\V1\HadoopJob::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Optional. Job is a Spark job.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.SparkJob spark_job = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Dataproc\V1\SparkJob|null
     */
    public function getSparkJob()
    {
        return $this->readOneof(4);
    }

    public function hasSparkJob()
    {
        return $this->hasOneof(4);
    }

    /**
     * Optional. Job is a Spark job.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.SparkJob spark_job = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dataproc\V1\SparkJob $var
     * @return $this
     */
    public function setSparkJob($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataproc\V1\SparkJob::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Optional. Job is a PySpark job.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.PySparkJob pyspark_job = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Dataproc\V1\PySparkJob|null
     */
    public function getPysparkJob()
    {
        return $this->readOneof(5);
    }

    public function hasPysparkJob()
    {
        return $this->hasOneof(5);
    }

    /**
     * Optional. Job is a PySpark job.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.PySparkJob pyspark_job = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dataproc\V1\PySparkJob $var
     * @return $this
     */
    public function setPysparkJob($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataproc\V1\PySparkJob::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Optional. Job is a Hive job.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.HiveJob hive_job = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Dataproc\V1\HiveJob|null
     */
    public function getHiveJob()
    {
        return $this->readOneof(6);
    }

    public function hasHiveJob()
    {
        return $this->hasOneof(6);
    }

    /**
     * Optional. Job is a Hive job.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.HiveJob hive_job = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dataproc\V1\HiveJob $var
     * @return $this
     */
    public function setHiveJob($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataproc\V1\HiveJob::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Optional. Job is a Pig job.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.PigJob pig_job = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Dataproc\V1\PigJob|null
     */
    public function getPigJob()
    {
        return $this->readOneof(7);
    }

    public function hasPigJob()
    {
        return $this->hasOneof(7);
    }

    /**
     * Optional. Job is a Pig job.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.PigJob pig_job = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dataproc\V1\PigJob $var
     * @return $this
     */
    public function setPigJob($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataproc\V1\PigJob::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * Optional. Job is a SparkR job.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.SparkRJob spark_r_job = 21 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Dataproc\V1\SparkRJob|null
     */
    public function getSparkRJob()
    {
        return $this->readOneof(21);
    }

    public function hasSparkRJob()
    {
        return $this->hasOneof(21);
    }

    /**
     * Optional. Job is a SparkR job.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.SparkRJob spark_r_job = 21 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dataproc\V1\SparkRJob $var
     * @return $this
     */
    public function setSparkRJob($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataproc\V1\SparkRJob::class);
        $this->writeOneof(21, $var);

        return $this;
    }

    /**
     * Optional. Job is a SparkSql job.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.SparkSqlJob spark_sql_job = 12 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Dataproc\V1\SparkSqlJob|null
     */
    public function getSparkSqlJob()
    {
        return $this->readOneof(12);
    }

    public function hasSparkSqlJob()
    {
        return $this->hasOneof(12);
    }

    /**
     * Optional. Job is a SparkSql job.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.SparkSqlJob spark_sql_job = 12 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dataproc\V1\SparkSqlJob $var
     * @return $this
     */
    public function setSparkSqlJob($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataproc\V1\SparkSqlJob::class);
        $this->writeOneof(12, $var);

        return $this;
    }

    /**
     * Optional. Job is a Presto job.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.PrestoJob presto_job = 23 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Dataproc\V1\PrestoJob|null
     */
    public function getPrestoJob()
    {
        return $this->readOneof(23);
    }

    public function hasPrestoJob()
    {
        return $this->hasOneof(23);
    }

    /**
     * Optional. Job is a Presto job.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.PrestoJob presto_job = 23 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dataproc\V1\PrestoJob $var
     * @return $this
     */
    public function setPrestoJob($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataproc\V1\PrestoJob::class);
        $this->writeOneof(23, $var);

        return $this;
    }

    /**
     * Output only. The job status. Additional application-specific
     * status information may be contained in the <code>type_job</code>
     * and <code>yarn_applications</code> fields.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.JobStatus status = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Dataproc\V1\JobStatus|null
     */
    public function getStatus()
    {
        return $this->status;
    }

    public function hasStatus()
    {
        return isset($this->status);
    }

    public function clearStatus()
    {
        unset($this->status);
    }

    /**
     * Output only. The job status. Additional application-specific
     * status information may be contained in the <code>type_job</code>
     * and <code>yarn_applications</code> fields.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.JobStatus status = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Dataproc\V1\JobStatus $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataproc\V1\JobStatus::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Output only. The previous job status.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataproc.v1.JobStatus status_history = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getStatusHistory()
    {
        return $this->status_history;
    }

    /**
     * Output only. The previous job status.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataproc.v1.JobStatus status_history = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Dataproc\V1\JobStatus[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setStatusHistory($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dataproc\V1\JobStatus::class);
        $this->status_history = $arr;

        return $this;
    }

    /**
     * Output only. The collection of YARN applications spun up by this job.
     * **Beta** Feature: This report is available for testing purposes only. It
     * may be changed before final release.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataproc.v1.YarnApplication yarn_applications = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getYarnApplications()
    {
        return $this->yarn_applications;
    }

    /**
     * Output only. The collection of YARN applications spun up by this job.
     * **Beta** Feature: This report is available for testing purposes only. It
     * may be changed before final release.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataproc.v1.YarnApplication yarn_applications = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Dataproc\V1\YarnApplication[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setYarnApplications($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dataproc\V1\YarnApplication::class);
        $this->yarn_applications = $arr;

        return $this;
    }

    /**
     * Output only. A URI pointing to the location of the stdout of the job's
     * driver program.
     *
     * Generated from protobuf field <code>string driver_output_resource_uri = 17 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getDriverOutputResourceUri()
    {
        return $this->driver_output_resource_uri;
    }

    /**
     * Output only. A URI pointing to the location of the stdout of the job's
     * driver program.
     *
     * Generated from protobuf field <code>string driver_output_resource_uri = 17 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setDriverOutputResourceUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->driver_output_resource_uri = $var;

        return $this;
    }

    /**
     * Output only. If present, the location of miscellaneous control files
     * which may be used as part of job setup and handling. If not present,
     * control files may be placed in the same location as `driver_output_uri`.
     *
     * Generated from protobuf field <code>string driver_control_files_uri = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getDriverControlFilesUri()
    {
        return $this->driver_control_files_uri;
    }

    /**
     * Output only. If present, the location of miscellaneous control files
     * which may be used as part of job setup and handling. If not present,
     * control files may be placed in the same location as `driver_output_uri`.
     *
     * Generated from protobuf field <code>string driver_control_files_uri = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setDriverControlFilesUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->driver_control_files_uri = $var;

        return $this;
    }

    /**
     * Optional. The labels to associate with this job.
     * Label **keys** must contain 1 to 63 characters, and must conform to
     * [RFC 1035](https://www.ietf.org/rfc/rfc1035.txt).
     * Label **values** may be empty, but, if present, must contain 1 to 63
     * characters, and must conform to [RFC
     * 1035](https://www.ietf.org/rfc/rfc1035.txt). No more than 32 labels can be
     * associated with a job.
     *
     * Generated from protobuf field <code>map<string, string> labels = 18 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Optional. The labels to associate with this job.
     * Label **keys** must contain 1 to 63 characters, and must conform to
     * [RFC 1035](https://www.ietf.org/rfc/rfc1035.txt).
     * Label **values** may be empty, but, if present, must contain 1 to 63
     * characters, and must conform to [RFC
     * 1035](https://www.ietf.org/rfc/rfc1035.txt). No more than 32 labels can be
     * associated with a job.
     *
     * Generated from protobuf field <code>map<string, string> labels = 18 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

    /**
     * Optional. Job scheduling configuration.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.JobScheduling scheduling = 20 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Dataproc\V1\JobScheduling|null
     */
    public function getScheduling()
    {
        return $this->scheduling;
    }

    public function hasScheduling()
    {
        return isset($this->scheduling);
    }

    public function clearScheduling()
    {
        unset($this->scheduling);
    }

    /**
     * Optional. Job scheduling configuration.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.JobScheduling scheduling = 20 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dataproc\V1\JobScheduling $var
     * @return $this
     */
    public function setScheduling($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataproc\V1\JobScheduling::class);
        $this->scheduling = $var;

        return $this;
    }

    /**
     * Output only. A UUID that uniquely identifies a job within the project
     * over time. This is in contrast to a user-settable reference.job_id that
     * may be reused over time.
     *
     * Generated from protobuf field <code>string job_uuid = 22 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getJobUuid()
    {
        return $this->job_uuid;
    }

    /**
     * Output only. A UUID that uniquely identifies a job within the project
     * over time. This is in contrast to a user-settable reference.job_id that
     * may be reused over time.
     *
     * Generated from protobuf field <code>string job_uuid = 22 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setJobUuid($var)
    {
        GPBUtil::checkString($var, True);
        $this->job_uuid = $var;

        return $this;
    }

    /**
     * Output only. Indicates whether the job is completed. If the value is `false`,
     * the job is still in progress. If `true`, the job is completed, and
     * `status.state` field will indicate if it was successful, failed,
     * or cancelled.
     *
     * Generated from protobuf field <code>bool done = 24 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getDone()
    {
        return $this->done;
    }

    /**
     * Output only. Indicates whether the job is completed. If the value is `false`,
     * the job is still in progress. If `true`, the job is completed, and
     * `status.state` field will indicate if it was successful, failed,
     * or cancelled.
     *
     * Generated from protobuf field <code>bool done = 24 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setDone($var)
    {
        GPBUtil::checkBool($var);
        $this->done = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getTypeJob()
    {
        return $this->whichOneof("type_job");
    }

}

