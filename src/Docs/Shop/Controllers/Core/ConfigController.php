<?php

namespace Webkul\RestApi\Docs\Shop\Controllers\Core;

class ConfigController
{
    /**
     * @OA\Get(
     *      path="/api/v1/core-configs",
     *      operationId="getCoreConfig",
     *      tags={"Configs"},
     *      summary="Get Core Config Value",
     *      description="Get core config field value by id",
     *
     *      @OA\Parameter(
     *          name="_config[]",
     *          description="Config id",
     *          required=true,
     *          in="query",
     *
     *          @OA\Schema(
     *              type="array",
     *
     *              @OA\Items(type="string")
     *          ),
     *          example={"general.general.locale_options.weight_unit"}
     *      ),
     *
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *
     *          @OA\JsonContent(
     *
     *              @OA\Property(
     *                  property="data",
     *                  type="object",
     *                  ref="#/components/schemas/ConfigValue"
     *              )
     *          )
     *      ),
     *
     *      @OA\Response(
     *          response=404,
     *          description="Resource Not Found"
     *      )
     * )
     */
    public function getCoreConfigs()
    {
    }
    /**
     * @OA\Get(
     *      path="/api/v1/mobile-configs",
     *      operationId="mobileConfigs",
     *      tags={"Configs"},
     *      summary="Get mobile Configs",
     *      description="Get mobile application configs for splash, intro and main screens",
     *
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *
     *          @OA\JsonContent(
     *              @OA\Examples(
     *                  example="result",
     *                  value={"splash-logo":{"white":"http://localhost:81/mobile/Logo.png","dark":"http://localhost:81/mobile/Logo.png"},"splash-background":{"white":"http://localhost:81/mobile/sanabel-pattern.png","dark":"http://localhost:81/mobile/sanabel-pattern.png"},"onboarding":{"screen-1":{"title":{"content":"title1","color":"#562abe"},"subtitle":{"content":"subtitle1","color":"#562abe"},"body":{"content":"body1","color":"#562abe"},"image":"http://localhost:81/mobile/screen1.png"},"screen-2":{"title":{"content":"title2","color":"#562abe"},"subtitle":{"content":"subtitle2","color":"#562abe"},"body":{"content":"body2","color":"#562abe"},"image":"http://localhost:81/mobile/screen2.png"},"screen-3":{"title":{"content":"title3","color":"#562abe"},"subtitle":{"content":"subtitle3","color":"#562abe"},"body":{"content":"body3","color":"#562abe"},"image":"http://localhost:81/mobile/screen3.png"},"background":"http://localhost:81/mobile/sanabel-pattern.png","dots-color":"#4790af","skip-color":"#4790af","next-color":"#4790af"},"login":{"white":{"image":"http://localhost:81/mobile/Logo.png","background":"http://localhost:81/mobile/sanabel-pattern.png","text":{"content":"login text","color":"#eee"},"button":{"background-color":"#dfaf52","text-color":"#000"}},"dark":{"image":"http://localhost:81/mobile/Logo.png","background":"http://localhost:81/mobile/sanabel-pattern.png","text":{"content":"login text","color":"#eee"},"button":{"background-color":"#dfaf52","text-color":"#000"}}},"main":{"white":{"background":"http://localhost:81/mobile/sanabel-pattern.png","title-color":"#fab256","subtitle-color":"#f23890","button-color":"#fa7834","button-text":"#135567","nav-colors":{"selected":"#a345671","unselected":"#a09423"}}}},
     *                  summary="An result object."
     *              )
     *          )
     *      )
     * )
     */
    public function mobileConfigs()
    {
    }

    /**
     * @OA\Get(
     *      path="/api/v1/core-config-fields",
     *      operationId="getCoreConfigList",
     *      tags={"Configs"},
     *      summary="Get config records list",
     *      description="Returns config list, if you want to retrieve all config records at once pass pagination=0 otherwise ignore this parameter",
     *
     *      @OA\Parameter(
     *          name="id",
     *          description="Config Record id",
     *          required=false,
     *          in="query",
     *
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *
     *      @OA\Parameter(
     *          name="sort",
     *          description="Sort column",
     *          example="id",
     *          required=false,
     *          in="query",
     *
     *          @OA\Schema(
     *              type="string"
     *          )
     *      ),
     *
     *      @OA\Parameter(
     *          name="order",
     *          description="Sort order",
     *          required=false,
     *          in="query",
     *
     *          @OA\Schema(
     *              type="string",
     *              enum={"desc", "asc"}
     *          )
     *      ),
     *
     *      @OA\Parameter(
     *          name="page",
     *          description="Page number",
     *          required=false,
     *          in="query",
     *
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *
     *      @OA\Parameter(
     *          name="limit",
     *          description="Limit",
     *          in="query",
     *
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *
     *          @OA\JsonContent(
     *
     *              @OA\Property(
     *                  property="data",
     *                  type="array",
     *
     *                  @OA\Items(ref="#/components/schemas/Config")
     *              ),
     *
     *              @OA\Property(
     *                  property="meta",
     *                  ref="#/components/schemas/Pagination"
     *              )
     *          )
     *      )
     * )
     */
    public function list()
    {
    }

    /**
     * @OA\Get(
     *      path="/api/v1/core-config-fields/{id}",
     *      operationId="getCoreConfigDetail",
     *      tags={"Configs"},
     *      summary="Get config's record by id",
     *      description="Returns config's record by id",
     *
     *      @OA\Parameter(
     *          name="id",
     *          description="Config id",
     *          required=true,
     *          in="path",
     *
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *
     *          @OA\JsonContent(
     *
     *              @OA\Property(
     *                  property="data",
     *                  type="object",
     *                  ref="#/components/schemas/Config"
     *              )
     *          )
     *      ),
     *
     *      @OA\Response(
     *          response=404,
     *          description="Resource Not Found"
     *      )
     * )
     */
    public function get()
    {
    }
}
