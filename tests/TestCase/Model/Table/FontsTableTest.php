<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FontsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FontsTable Test Case
 */
class FontsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FontsTable
     */
    public $Fonts;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.fonts',
        'app.partnerships',
        'app.grants',
        'app.clients'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Fonts') ? [] : ['className' => FontsTable::class];
        $this->Fonts = TableRegistry::get('Fonts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Fonts);

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
