<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PaypingsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PaypingsTable Test Case
 */
class PaypingsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PaypingsTable
     */
    public $Paypings;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.paypings'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Paypings') ? [] : ['className' => PaypingsTable::class];
        $this->Paypings = TableRegistry::get('Paypings', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Paypings);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
