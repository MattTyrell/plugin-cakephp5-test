<?php
declare(strict_types=1);

namespace TsUserBtoB\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsersFixture
 */
class UsersFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'name' => 'Lorem ipsum dolor sit amet',
                'account' => 'Lorem ipsum dolor sit amet',
                'email' => 'Lorem ipsum dolor sit amet',
                'password' => 'Lorem ipsum dolor sit amet',
                'is_default_password' => 1,
                'is_admin' => 1,
                'role' => 'Lorem ipsum dolor sit amet',
                'organisation_id' => 1,
                'company_id' => 1,
                'password_reset_token' => 'Lorem ipsum dolor sit amet',
                'token_expired_at' => '2025-01-21 02:51:43',
                'created' => '2025-01-21 02:51:43',
                'created_by' => 1,
                'modified' => '2025-01-21 02:51:43',
                'modified_by' => 1,
                'deleted' => '2025-01-21 02:51:43',
                'deleted_by' => 1,
            ],
        ];
        parent::init();
    }
}
