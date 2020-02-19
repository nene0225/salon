<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SalonusersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SalonusersTable Test Case
 */
class SalonusersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SalonusersTable
     */
    public $Salonusers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Salonusers',
        'app.Bookings',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Salonusers') ? [] : ['className' => SalonusersTable::class];
        $this->Salonusers = TableRegistry::getTableLocator()->get('Salonusers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Salonusers);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
