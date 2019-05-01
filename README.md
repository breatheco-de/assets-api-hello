# ![alt text](https://assets.breatheco.de/apis/img/images.php?blob&random&cat=icon&tags=breathecode,32) Instructions for creating BreatheCode's Assets API's

This is the ideal boilerplate to create API's for BreatheCode.

## Start coding

To start coding your API open the src/routes.php file and start adding your endpoints.

Breathecode's API rely heavily on the following [SlimAPI Package](https://github.com/alesanchezr/slim-api-wrapper/blob/master/README.md) that is also based on [Slim PHP v3](http://www.slimframework.com/docs/):
Read the [SlimAPI Package documentation](https://github.com/alesanchezr/slim-api-wrapper/blob/master/README.md) for more details on how to create your API endpoints.

## Do you need to store information?

The BreatheCode API does not uses SQL, we prefer to store in the following ways:
- Using local json files and the [Json-Orm Package](https://github.com/alesanchezr/json-orm) and [here is an example api using Json-Orm](https://github.com/breatheco-de/assets/tree/master/apis/replit).
- Using Google Datastore (here is an [example API using datastore](https://github.com/breatheco-de/assets/blob/master/apis/activity/routes.php)).
- Using other 3rd part services.

## Please document your API

After you finish the API this README.md file should be deleted and the SAMPLE_README.md should be used instead, including the documentation of your API.
