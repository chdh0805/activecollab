<?php

/*
 * This file is part of the ActiveCollab project.
 *
 * (c) A51 doo <info@activecollab.com>. All rights reserved.
 */

declare(strict_types=1);

abstract class BasePaymentGateways extends DataManager
{
    /**
     * Return name of this model.
     */
    public static function getModelName(bool $underscore = false): string
    {
        return $underscore ? 'payment_gateways' : 'PaymentGateways';
    }

    /**
     * Return name of the table where system will persist model instances.
     */
    public static function getTableName(): string
    {
        return 'payment_gateways';
    }

    /**
     * All table fields.
     */
    private static array $fields = [
        'id',
        'type',
        'raw_additional_properties',
        'is_enabled',
    ];

    /**
     * Return a list of model fields.
     */
    public static function getFields(): array
    {
        return self::$fields;
    }

    /**
     * Return class name of a single instance.
     */
    public static function getInstanceClassName(): string
    {
        return PaymentGateway::class;
    }

    /**
     * Return whether instance class name should be loaded from a field, or based on table name.
     */
    public static function getInstanceClassNameFrom(): int
    {
        return DataManager::CLASS_NAME_FROM_FIELD;
    }

    /**
     * Return name of the field from which we will read instance class.
     */
    public static function getInstanceClassNameFromField(): string
    {
        return 'type';
    }

    /**
     * Return name of this model.
     */
    public static function getDefaultOrderBy(): string
    {
        return '';
    }

    /**
     * @return PaymentGateway[]|DbResult|null
     */
    public static function find($arguments = null): ?iterable
    {
        return parent::find($arguments);
    }

    public static function findOne($arguments = null): ?PaymentGateway
    {
        return parent::findOne($arguments);
    }

    /**
     * @return PaymentGateway[]|DbResult|null
     */
    public static function findBySQL(...$arguments): ?iterable
    {
        return parent::findBySQL(...$arguments);
    }

    /**
     * @return PaymentGateway[]|DbResult|null
     */
    public static function findBy($field, $value = null): ?iterable
    {
        return parent::findBy($field, $value);
    }

    public static function findOneBy($field, $value = null): ?PaymentGateway
    {
        return parent::findOneBy($field, $value);
    }

    /**
     * @return PaymentGateway[]|DbResult|null
     */
    public static function findByIds(array $ids, bool $ordered_by_ids = false): ?iterable
    {
        return parent::findByIds($ids, $ordered_by_ids);
    }

    /**
     * @return PaymentGateway[]
     */
    public static function createMany(
        array $records,
        bool $save = true,
        bool $announce = true
    ): iterable
    {
        return parent::createMany($records, $save, $announce);
    }

    public static function create(
        array $attributes,
        bool $save = true,
        bool $announce = true
    ): PaymentGateway
    {
        return parent::create($attributes, $save, $announce);
    }

    public static function &update(
        DataObject &$instance,
        array $attributes,
        bool $save = true
    ): PaymentGateway
    {
        return parent::update($instance, $attributes, $save);
    }

    /**
     * @return PaymentGateway|bool
     */
    public static function scrap(
        DataObject &$instance,
        bool $force_delete = false
    )
    {
        return parent::scrap($instance, $force_delete);
    }
}
