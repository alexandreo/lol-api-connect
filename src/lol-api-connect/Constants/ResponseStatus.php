<?php

namespace Alexandreo\LolApiConnect\Constants;

use Alexandreo\LolApiConnect\ConstantTrait;

class ResponseStatus
{

    use ConstantTrait;

    CONST HTTP_400 = 'Bad request';

    CONST HTTP_401 = 'Unauthorized';

    CONST HTTP_403 = 'Forbidden';

    CONST HTTP_404 = 'Data not found';

    CONST HTTP_405 = 'Method not allowed';

    CONST HTTP_415 = 'Unsupported media type';

    CONST HTTP_422 = 'Player exists, but hasn\'t played since match history collection began';

    CONST HTTP_429 = 'Rate limit exceeded';

    CONST HTTP_500 = 'Internal server error';

    CONST HTTP_502 = 'Bad gateway';

    CONST HTTP_503 = 'Service unavailable';

    CONST HTTP_504 = 'Gateway timeout';

}