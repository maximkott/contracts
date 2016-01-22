<?php

namespace Weew\Contracts;

interface IUnJsonable {
    /**
     * @param $json
     */
    function fromJson($json);
}
