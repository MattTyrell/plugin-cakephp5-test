<?php
declare(strict_types=1);

use Migrations\BaseSeed;

/**
 * Users seed.
 */
class UsersSeed extends BaseSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/migrations/4/en/seeding.html
     *
     * @return void
     */
    public function run(): void
    {
        $data = [
            [
                'id' => 1,
                'name' => 'Admin',
                'account' => 'admin',
                'email' => 'admin@example.com',
                'password' => 'password',
                'is_default_password' => 0,
                'is_admin' => 1,
                'role' => 'admin',
                'organisation_id' => 0,
                'company_id' => 0,
                'password_reset_token' => null,
                'token_expired_at' => null,
                'created' => '2022-01-01 00:00:00',
                'created_by' => null,
                'modified' => '2022-01-01 00:00:00',
                'modified_by' => null,
                'deleted' => null,
                'deleted_by' => null,
            ],
        ];

        $table = $this->table('users');
        $table->insert($data)->save();
    }
}
