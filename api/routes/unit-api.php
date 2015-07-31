<?php

/**
 * @api {GET} /unit/:id 	Fetch a Unit by Id
 * @apiName fetchUnitById
 * @apiGroup Unit
 *
 * @apiParam {Number} id 	Units unique ID.
 *
 * @apiSuccess {Unit} Unit 	Unit and its Overlays
 *
 */
$app->get('/unit/:id(/:folder)', function ($id, $folder = 0) {
	include_once 'libs/unit.php';
	echo json_encode(getUnit($id, $folder));
});

/**
 * @api {POST} /unit/	 	Create a Unit
 * @apiName createUnit
 * @apiGroup Unit
 *
 *
 * @apiSuccess {Unit} Unit 	Unit
 * @apiPermission Author of the Unit
 *
 */
$app->post('/unit/', function ($id) {
	include_once 'libs/unit.php';
	create_unit();
});

/**
 * @api {PUT} /unit/	 	Update a Unit
 * @apiName updateUnit
 * @apiGroup Unit
 *
 *
 * @apiSuccess {Unit} Unit 	Unit
 * @apiPermission Author of the Unit
 * @apiDescription Here you can describe the function.
 *
 */
$app->put('/unit/', function ($id) {
	include_once 'libs/unit.php';
	update_unit();
});
