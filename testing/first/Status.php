<?php

namespace first;


class Status
{

    public const STATUS_PAID = "paid";
    public const STATUS_PENDING = "pending";
    public const STATUS_DECLINED = "declined";

    public const All_Status= [
        self::STATUS_PAID => "paid",
        self::STATUS_DECLINED => "Declined",
        self::STATUS_PENDING => "Pending"
    ];
}