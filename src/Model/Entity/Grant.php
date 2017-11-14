<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Grant Entity
 *
 * @property int $id
 * @property int $client_id
 * @property int $partnership_id
 * @property int $pay_id
 * @property string $receipt
 * @property \Cake\I18n\FrozenDate $granted
 * @property int $amount
 * @property string $note
 *
 * @property \App\Model\Entity\Client $client
 * @property \App\Model\Entity\Partnership $partnership
 * @property \App\Model\Entity\Pay $pay
 */
class Grant extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'client_id' => true,
        'partnership_id' => true,
        'pay_id' => true,
        'receipt' => true,
        'granted' => true,
        'amount' => true,
        'note' => true,
        'client' => true,
        'partnership' => true,
        'pay' => true
    ];
}
