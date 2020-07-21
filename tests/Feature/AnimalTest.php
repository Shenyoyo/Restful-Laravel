<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AnimalTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    /**
    * 測試查看animal 列表的 json 格式
    *
    * @return void
    */
    public function testViewAllAnimal()
    {
        //請求 api/animal 結果存入 $response
        $response = $this->get('api/animal');

        //assertJsonStructure 判斷 Json 結構是否與我們下方的結構相同
        $response->assertJsonStructure([
            "current_page",
            "data" => [
                [
                    "id",
                    "type_id",
                    "name",
                    "birthday",
                    "area",
                    "fix",
                    "description",
                    "personality",
                    "created_at",
                    "updated_at",
                    "user_id"
                ]
            ],
            "first_page_url",
            "from",
            "last_page",
            "last_page_url",
            "next_page_url",
            "path",
            "per_page",
            "prev_page_url",
            "to",
            "total",
        ]);
    }
}
