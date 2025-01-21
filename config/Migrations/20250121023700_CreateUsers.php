<?php
declare(strict_types=1);

use Migrations\BaseMigration;

class CreateUsers extends BaseMigration
{
    public bool $autoId = false;

    /**
     * Up Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-up-method
     *
     * @return void
     */
    public function up(): void
    {
        $table = $this->table('users')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'comment' => 'Item ID',
                'default' => null,
                'limit' => null,
                'null' => false,
                'signed' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('name', 'string', [
                'comment' => 'User name',
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('account', 'string', [
                'comment' => 'Account name',
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('email', 'string', [
                'comment' => 'Account email',
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('password', 'string', [
                'comment' => 'Password',
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('is_default_password', 'boolean', [
                'comment' => 'Is default password',
                'default' => 1,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('is_admin', 'boolean', [
                'comment' => 'Is admin',
                'default' => 0,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('role', 'string', [
                'comment' => 'User role',
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('organisation_id', 'integer', [
                'comment' => 'Organisation ID',
                'default' => 0,
                'limit' => null,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('company_id', 'integer', [
                'comment' => 'Company ID',
                'default' => 0,
                'limit' => null,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('password_reset_token', 'string', [
                'comment' => 'Password reset token',
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('token_expired_at', 'datetime', [
                'comment' => 'Password reset token expiry date',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('created', 'datetime', [
                'comment' => 'Created',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created_by', 'integer', [
                'comment' => 'Created by',
                'default' => null,
                'limit' => null,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('modified', 'datetime', [
                'comment' => 'Modified',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('modified_by', 'integer', [
                'comment' => 'Modified by',
                'default' => null,
                'limit' => null,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('deleted', 'datetime', [
                'comment' => 'Deleted',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('deleted_by', 'integer', [
                'comment' => 'Deleted by',
                'default' => null,
                'limit' => null,
                'null' => true,
                'signed' => false,
            ]);

        $table->create();
    }
}
