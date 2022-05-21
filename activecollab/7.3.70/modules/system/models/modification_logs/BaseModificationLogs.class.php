<?php

/*
 * This file is part of the ActiveCollab project.
 *
 * (c) A51 doo <info@activecollab.com>. All rights reserved.
 */

declare(strict_types=1);

abstract class BaseModificationLogs extends DataManager
{
    /**
     * Return name of this model.
     */
    public static function getModelName(bool $underscore = false): string
    {
        return $underscore ? 'modification_logs' : 'ModificationLogs';
    }

    /**
     * Return name of the table where system will persist model instances.
     */
    public static function getTableName(): string
    {
        return 'modification_logs';
    }

    /**
     * All table fields.
     */
    private static array $fields = [
        'id',
        'parent_type',
        'parent_id',
        'created_on',
        'created_by_id',
        'created_by_name',
        'created_by_email',
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
        return ModificationLog::class;
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
        return 'created_on';
    }

    /**
     * @return ModificationLog[]|DbResult|null
     */
    public static function find($arguments = null): ?iterable
    {
        return parent::find($arguments);
    }

    public static function findOne($arguments = null): ?ModificationLog
    {
        return parent::findOne($arguments);
    }

    /**
     * @return ModificationLog[]|DbResult|null
     */
    public static function findBySQL(...$arguments): ?iterable
    {
        return parent::findBySQL(...$arguments);
    }

    /**
     * @return ModificationLog[]|DbResult|null
     */
    public static function findBy($field, $value = null): ?iterable
    {
        return parent::findBy($field, $value);
    }

    public static function findOneBy($field, $value = null): ?ModificationLog
    {
        return parent::findOneBy($field, $value);
    }

    /**
     * @return ModificationLog[]|DbResult|null
     */
    public static function findByIds(array $ids, bool $ordered_by_ids = false): ?iterable
    {
        return parent::findByIds($ids, $ordered_by_ids);
    }

    /**
     * @return ModificationLog[]
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
    ): ModificationLog
    {
        return parent::create($attributes, $save, $announce);
    }

    public static function &update(
        DataObject &$instance,
        array $attributes,
        bool $save = true
    ): ModificationLog
    {
        return parent::update($instance, $attributes, $save);
    }

    /**
     * @return ModificationLog|bool
     */
    public static function scrap(
        DataObject &$instance,
        bool $force_delete = false
    )
    {
        return parent::scrap($instance, $force_delete);
    }
}
