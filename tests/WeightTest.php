<?php

use Faruk\WeightConversions\Weight;

it('Weight conversions test correctly', function () {
    $pounds = Weight::kilograms(110)->toPounds();

    expect($pounds)->toEqual(242.506);
});
