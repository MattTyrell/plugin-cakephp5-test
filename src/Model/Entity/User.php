<?php
declare(strict_types=1);

namespace TsUserBtoB\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $name
 * @property string $account
 * @property string $email
 * @property string $password
 * @property bool|null $is_default_password
 * @property bool|null $is_admin
 * @property string|null $role
 * @property int $organisation_id
 * @property int $company_id
 * @property string|null $password_reset_token
 * @property \Cake\I18n\DateTime|null $token_expired_at
 * @property \Cake\I18n\DateTime $created
 * @property int|null $created_by
 * @property \Cake\I18n\DateTime $modified
 * @property int|null $modified_by
 * @property \Cake\I18n\DateTime|null $deleted
 * @property int|null $deleted_by
 */
class User extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected array $_accessible = [
        'name' => true,
        'account' => true,
        'email' => true,
        'password' => true,
        'is_default_password' => true,
        'is_admin' => true,
        'role' => true,
        'organisation_id' => true,
        'company_id' => true,
        'password_reset_token' => true,
        'token_expired_at' => true,
        'created' => true,
        'created_by' => true,
        'modified' => true,
        'modified_by' => true,
        'deleted' => true,
        'deleted_by' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var list<string>
     */
    protected array $_hidden = [
        'password',
    ];
}
