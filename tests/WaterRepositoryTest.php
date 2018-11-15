<?php

use App\Models\Water;
use App\Repositories\WaterRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class WaterRepositoryTest extends TestCase
{
    use MakeWaterTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var WaterRepository
     */
    protected $waterRepo;

    public function setUp()
    {
        parent::setUp();
        $this->waterRepo = App::make(WaterRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateWater()
    {
        $water = $this->fakeWaterData();
        $createdWater = $this->waterRepo->create($water);
        $createdWater = $createdWater->toArray();
        $this->assertArrayHasKey('id', $createdWater);
        $this->assertNotNull($createdWater['id'], 'Created Water must have id specified');
        $this->assertNotNull(Water::find($createdWater['id']), 'Water with given id must be in DB');
        $this->assertModelData($water, $createdWater);
    }

    /**
     * @test read
     */
    public function testReadWater()
    {
        $water = $this->makeWater();
        $dbWater = $this->waterRepo->find($water->id);
        $dbWater = $dbWater->toArray();
        $this->assertModelData($water->toArray(), $dbWater);
    }

    /**
     * @test update
     */
    public function testUpdateWater()
    {
        $water = $this->makeWater();
        $fakeWater = $this->fakeWaterData();
        $updatedWater = $this->waterRepo->update($fakeWater, $water->id);
        $this->assertModelData($fakeWater, $updatedWater->toArray());
        $dbWater = $this->waterRepo->find($water->id);
        $this->assertModelData($fakeWater, $dbWater->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteWater()
    {
        $water = $this->makeWater();
        $resp = $this->waterRepo->delete($water->id);
        $this->assertTrue($resp);
        $this->assertNull(Water::find($water->id), 'Water should not exist in DB');
    }
}
