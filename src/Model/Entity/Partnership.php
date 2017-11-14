<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Partnership Entity
 *
 * @property int $id
 * @property int $font_id
 * @property string $title
 * @property string $code
 * @property int $grants_need
 * @property int $granted_counts
 * @property bool $finished
 *
 * @property \App\Model\Entity\Font $font
 * @property \App\Model\Entity\Grant[] $grants
 */
class Partnership extends Entity
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
        'font_id' => true,
        'title' => true,
        'code' => true,
        'grants_need' => true,
        'granted_counts' => true,
        'finished' => true,
        'font' => true,
        'grants' => true
    ];
}
