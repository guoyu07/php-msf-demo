<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : protobuf.proto
 */


namespace app\Protobuf;

/**
 * Protobuf enum : youwo.CMD_SERVICE
 */
class CMD_SERVICE extends \Protobuf\Enum
{

    /**
     * Account = 1
     */
    const Account_VALUE = 1;

    /**
     * @var \app\Protobuf\CMD_SERVICE
     */
    protected static $Account = null;

    /**
     * @param int $value
     * @return \app\Protobuf\CMD_SERVICE
     */
    public static function valueOf($value)
    {
        switch ($value) {
            case 1:
                return self::Account();
            default:
                return null;
        }
    }

    /**
     * @return \app\Protobuf\CMD_SERVICE
     */
    public static function Account()
    {
        if (self::$Account !== null) {
            return self::$Account;
        }

        return self::$Account = new self('Account', self::Account_VALUE);
    }
}