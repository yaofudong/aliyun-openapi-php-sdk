<?php

namespace Rds\Request\V20140815;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of RestoreTable
 *
 * @method string getResourceOwnerId()
 * @method string getRestoreTime()
 * @method string getResourceOwnerAccount()
 * @method string getClientToken()
 * @method string getBackupId()
 * @method string getOwnerAccount()
 * @method string getTableMeta()
 * @method string getDBInstanceId()
 * @method string getOwnerId()
 */
class RestoreTableRequest extends \RpcAcsRequest
{

    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Rds',
            '2014-08-15',
            'RestoreTable',
            'Rds'
        );
    }

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function setResourceOwnerId($resourceOwnerId)
    {
        $this->requestParameters['ResourceOwnerId'] = $resourceOwnerId;
        $this->queryParameters['ResourceOwnerId'] = $resourceOwnerId;

        return $this;
    }

    /**
     * @param string $restoreTime
     *
     * @return $this
     */
    public function setRestoreTime($restoreTime)
    {
        $this->requestParameters['RestoreTime'] = $restoreTime;
        $this->queryParameters['RestoreTime'] = $restoreTime;

        return $this;
    }

    /**
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function setResourceOwnerAccount($resourceOwnerAccount)
    {
        $this->requestParameters['ResourceOwnerAccount'] = $resourceOwnerAccount;
        $this->queryParameters['ResourceOwnerAccount'] = $resourceOwnerAccount;

        return $this;
    }

    /**
     * @param string $clientToken
     *
     * @return $this
     */
    public function setClientToken($clientToken)
    {
        $this->requestParameters['ClientToken'] = $clientToken;
        $this->queryParameters['ClientToken'] = $clientToken;

        return $this;
    }

    /**
     * @param string $backupId
     *
     * @return $this
     */
    public function setBackupId($backupId)
    {
        $this->requestParameters['BackupId'] = $backupId;
        $this->queryParameters['BackupId'] = $backupId;

        return $this;
    }

    /**
     * @param string $ownerAccount
     *
     * @return $this
     */
    public function setOwnerAccount($ownerAccount)
    {
        $this->requestParameters['OwnerAccount'] = $ownerAccount;
        $this->queryParameters['OwnerAccount'] = $ownerAccount;

        return $this;
    }

    /**
     * @param string $tableMeta
     *
     * @return $this
     */
    public function setTableMeta($tableMeta)
    {
        $this->requestParameters['TableMeta'] = $tableMeta;
        $this->queryParameters['TableMeta'] = $tableMeta;

        return $this;
    }

    /**
     * @param string $dBInstanceId
     *
     * @return $this
     */
    public function setDBInstanceId($dBInstanceId)
    {
        $this->requestParameters['DBInstanceId'] = $dBInstanceId;
        $this->queryParameters['DBInstanceId'] = $dBInstanceId;

        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        $this->requestParameters['OwnerId'] = $ownerId;
        $this->queryParameters['OwnerId'] = $ownerId;

        return $this;
    }
}
