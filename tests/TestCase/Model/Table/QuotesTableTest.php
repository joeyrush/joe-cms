<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\QuotesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\QuotesTable Test Case
 */
class QuotesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\QuotesTable
     */
    public $Quotes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.quotes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Quotes') ? [] : ['className' => 'App\Model\Table\QuotesTable'];
        $this->Quotes = TableRegistry::get('Quotes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Quotes);

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
