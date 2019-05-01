<?php
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

return function($api){

    // add this if you want to enable autentication
	$api->addTokenGenerationPath();

	//get all cohorts and its replits
	$api->get('/path', function (Request $request, Response $response, array $args) use ($api) {

        // Throw exception with 400 code if there is a validation error
        // throw new Exception('Image could not be generated', 400);

        return $response->withJson('Hello World');

	});


	//create user activity
	return $api;
};