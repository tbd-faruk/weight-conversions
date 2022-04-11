<?php

use Faruk\WeightConversions\Weight;

it('Weight conversions test', function () {
    $pounds = Weight::kilograms(110)->toPounds();

    expect($pounds)->toEqual(242.506);
});
