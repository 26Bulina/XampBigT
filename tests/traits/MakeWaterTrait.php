<?php

use Faker\Factory as Faker;
use App\Models\Water;
use App\Repositories\WaterRepository;

trait MakeWaterTrait
{
    /**
     * Create fake instance of Water and save it in database
     *
     * @param array $waterFields
     * @return Water
     */
    public function makeWater($waterFields = [])
    {
        /** @var WaterRepository $waterRepo */
        $waterRepo = App::make(WaterRepository::class);
        $theme = $this->fakeWaterData($waterFields);
        return $waterRepo->create($theme);
    }

    /**
     * Get fake instance of Water
     *
     * @param array $waterFields
     * @return Water
     */
    public function fakeWater($waterFields = [])
    {
        return new Water($this->fakeWaterData($waterFields));
    }

    /**
     * Get fake data of Water
     *
     * @param array $postFields
     * @return array
     */
    public function fakeWaterData($waterFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'quantity' => $fake->word,
            'description' => $fake->word,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $waterFields);
    }
}
