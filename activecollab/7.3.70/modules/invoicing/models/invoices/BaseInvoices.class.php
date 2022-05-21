<?php

/*
 * This file is part of the ActiveCollab project.
 *
 * (c) A51 doo <info@activecollab.com>. All rights reserved.
 */

declare(strict_types=1);

abstract class BaseInvoices extends DataManager
{
    /**
     * Return name of this model.
     */
    public static function getModelName(bool $underscore = false): string
    {
        return $underscore ? 'invoices' : 'Invoices';
    }

    /**
     * Return name of the table where system will persist model instances.
     */
    public static function getTableName(): string
    {
        return 'invoices';
    }

    /**
     * All table fields.
     */
    private static array $fields = [
        'id',
        'based_on_type',
        'based_on_id',
        'number',
        'purchase_order_number',
        'company_id',
        'company_name',
        'company_address',
        'currency_id',
        'language_id',
        'project_id',
        'discount_rate',
        'subtotal',
        'discount',
        'tax',
        'total',
        'balance_due',
        'paid_amount',
        'last_payment_on',
        'note',
        'private_note',
        'qr_note',
        'qr_note_content',
        'second_tax_is_enabled',
        'second_tax_is_compound',
        'created_on',
        'created_by_id',
        'created_by_name',
        'created_by_email',
        'updated_on',
        'due_on',
        'issued_on',
        'sent_on',
        'recipients',
        'email_from_id',
        'email_from_name',
        'email_from_email',
        'email_subject',
        'email_body',
        'reminder_sent_on',
        'closed_on',
        'closed_by_id',
        'closed_by_name',
        'closed_by_email',
        'is_canceled',
        'is_muted',
        'hash',
        'is_trashed',
        'trashed_on',
        'trashed_by_id',
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
        return Invoice::class;
    }

    /**
     * Return whether instance class name should be loaded from a field, or based on table name.
     */
    public static function getInstanceClassNameFrom(): int
    {
        return DataManager::CLASS_NAME_FROM_TABLE;
    }

    /**
     * Return name of the field from which we will read instance class.
     */
    public static function getInstanceClassNameFromField(): string
    {
        return '';
    }

    /**
     * Return name of this model.
     */
    public static function getDefaultOrderBy(): string
    {
        return '';
    }

    /**
     * @return Invoice[]|DbResult|null
     */
    public static function find($arguments = null): ?iterable
    {
        return parent::find($arguments);
    }

    public static function findOne($arguments = null): ?Invoice
    {
        return parent::findOne($arguments);
    }

    /**
     * @return Invoice[]|DbResult|null
     */
    public static function findBySQL(...$arguments): ?iterable
    {
        return parent::findBySQL(...$arguments);
    }

    /**
     * @return Invoice[]|DbResult|null
     */
    public static function findBy($field, $value = null): ?iterable
    {
        return parent::findBy($field, $value);
    }

    public static function findOneBy($field, $value = null): ?Invoice
    {
        return parent::findOneBy($field, $value);
    }

    /**
     * @return Invoice[]|DbResult|null
     */
    public static function findByIds(array $ids, bool $ordered_by_ids = false): ?iterable
    {
        return parent::findByIds($ids, $ordered_by_ids);
    }

    /**
     * @return Invoice[]
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
    ): Invoice
    {
        return parent::create($attributes, $save, $announce);
    }

    public static function &update(
        DataObject &$instance,
        array $attributes,
        bool $save = true
    ): Invoice
    {
        return parent::update($instance, $attributes, $save);
    }

    /**
     * @return Invoice|bool
     */
    public static function scrap(
        DataObject &$instance,
        bool $force_delete = false
    )
    {
        return parent::scrap($instance, $force_delete);
    }
}
