# Welcome in Graphicode Standard Package
- <a href="#installation">Installation Stepts</a>
- <a href="#apiResponses">ApiResponses Trait</a>

<br>
---
<br>

### requirements

- php >=8.0
- laravel framework >=10.10 

<br>
----
<br>


### installation
<div id="installation"></div>

Use this command to try the package now:
```
    composer require graphicode/standard v3.0
```
<br>

publish lang files:
```
    php artisan vendor:publish --tag="gcstandard-lang"
```

<br>
---
<br>

###ApiResponse Trait
this trait used to make cleen api responses.

<div id="apiResponses"></div>


preparing your controller to use the trait:
```php
    <?php

namespace App\Http\Controllers;

use Graphicode\Standard\Traits\ApiResponses;

class TestController extends Controller
{
    use ApiResponses;

    public function index()
    {
        return $this->okResponse(data: [], message: "hello, api");
    }
}
```

<br><br>

Available methods:
```php
    /**
    * 200 Ok response
    *
    * @param $data
    * @param $message
    **/
    return $this->okResponse(data: "data", message: "message");

    /**
    * 201 resource created
    *
    * @param $data
    * @param $message
    **/
    return $this->createdResponse(data: "data", message: "message");

    /**
    * 400 bad response
    *
    * @param $data
    * @param $message
    **/
    return $this->badResponse(data: "data", message: "message");

    /**
    * 201 unauthorized
    *
    * @param $data
    * @param $message
    **/
    return $this->unauthenticatedResponse(data: "data", message: "message");
```
