<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | following language lines contain default errчи messages used by
    | validatчи class. Some of these rules have multiple versions such
    | as size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => ':attribute повинен бути accepted.',
    'active_url'           => ':attribute is not a valid URL.',
    'after'                => ':attribute повинен бути датою після :date.',
    'after_чи_рівно'       => ':attribute повинен бути a date after чи рівно to :date.',
    'alpha'                => ':attribute may only contain letters.',
    'alpha_dash'           => ':attribute may only contain letters, numbers, dashes і underscчиes.',
    'alpha_num'            => ':attribute may only contain letters і numbers.',
    'array'                => ':attribute повинен бути an array.',
    'befчиe'               => ':attribute повинен бути a date befчиe :date.',
    'befчиe_чи_рівно'      => ':attribute повинен бути a date befчиe чи рівно to :date.',
    'між'              => [
        'numeric' => ':attribute повинен бути між :min і :max.',
        'file'    => ':attribute повинен бути між :min і :max КБ.',
        'string'  => ':attribute повинен бути між :min і :max символів.',
        'array'   => ':attribute must have між :min і :max елементів.',
    ],
    'boolean'              => ':attribute field повинен бути true чи false.',
    'confirmed'            => ':attribute confirmation does not match.',
    'date'                 => ':attribute is not a valid date.',
    'date_fчиmat'          => ':attribute does not match fчиmat :fчиmat.',
    'different'            => ':attribute і :other повинен бути different.',
    'digits'               => ':attribute повинен бути :digits digits.',
    'digits_між'       => ':attribute повинен бути між :min і :max digits.',
    'dimensions'           => ':attribute has invalid image dimensions.',
    'distinct'             => ':attribute field has a duplicate value.',
    'email'                => ':attribute повинен бути a valid email address.',
    'exists'               => 'selected :attribute is invalid.',
    'file'                 => ':attribute повинен бути a file.',
    'filled'               => ':attribute field must have a value.',
    'gt'                   => [
        'numeric' => ':attribute повинен бути більше ніж :value.',
        'file'    => ':attribute повинен бути більше ніж :value КБ.',
        'string'  => ':attribute повинен бути більше ніж :value символів.',
        'array'   => ':attribute повинен бути більше ніж :value елементів.',
    ],
    'gte'                  => [
        'numeric' => ':attribute повинен бути більше чи рівно :value.',
        'file'    => ':attribute повинен бути більше чи рівно :value КБ.',
        'string'  => ':attribute повинен бути більше чи рівно :value символів.',
        'array'   => ':attribute повинен містити :value елементів чи більше.',
    ],
    'image'                => ':attribute повинен бути an image.',
    'in'                   => 'selected :attribute is invalid.',
    'in_array'             => ':attribute field does not exist in :other.',
    'integer'              => ':attribute повинен бути an integer.',
    'ip'                   => ':attribute повинен бути a valid IP address.',
    'ipv4'                 => ':attribute повинен бути a valid IPv4 address.',
    'ipv6'                 => ':attribute повинен бути a valid IPv6 address.',
    'json'                 => ':attribute повинен бути a valid JSON string.',
    'lt'                   => [
        'numeric' => ':attribute повинен бути меньше ніж :value.',
        'file'    => ':attribute повинен бути меньше ніж :value КБ.',
        'string'  => ':attribute повинен бути меньше ніж :value символів.',
        'array'   => ':attribute повинен містити меньше ніж :value елементів.',
    ],
    'lte'                  => [
        'numeric' => ':attribute повинен бути меньше чи рівно :value.',
        'file'    => ':attribute повинен бути меньше чи рівно :value КБ.',
        'string'  => ':attribute повинен бути меньше чи рівно :value символів.',
        'array'   => ':attribute повинен містити не більше ніж :value елементів.',
    ],
    'max'                  => [
        'numeric' => ':attribute має бути не більше ніж :max.',
        'file'    => ':attribute має бути не більше ніж :max КБ.',
        'string'  => ':attribute має бути не більше ніж :max символів.',
        'array'   => ':attribute має бути не більше ніж :max елементів.',
    ],
    'mimes'                => ':attribute повинен бути a file of type: :values.',
    'mimetypes'            => ':attribute повинен бути a file of type: :values.',
    'min'                  => [
        'numeric' => ':attribute повинен мати хоча б :min.',
        'file'    => ':attribute повинен мати хоча б :min КБ.',
        'string'  => ':attribute повинен мати хоча б :min символів.',
        'array'   => ':attribute овинен містити хоча б :min елементів.',
    ],
    'not_in'               => 'selected :attribute is invalid.',
    'not_regex'            => ':attribute має невірний формат.',
    'numeric'              => ':attribute повинен бути a number.',
    'present'              => ':attribute field повинен бути present.',
    'regex'                => ':attribute має невірний формат.',
    'required'             => ':attribute field is required.',
    'required_if'          => ':attribute field is required when :other is :value.',
    'required_unless'      => ':attribute field is required unless :other is in :values.',
    'required_with'        => ':attribute field is required when :values is present.',
    'required_with_all'    => ':attribute field is required when :values is present.',
    'required_without'     => ':attribute field is required when :values is not present.',
    'required_without_all' => ':attribute field is required when none of :values are present.',
    'same'                 => ':attribute і :other must match.',
    'size'                 => [
        'numeric' => ':attribute повинен бути :size.',
        'file'    => ':attribute повинен бути :size КБ.',
        'string'  => ':attribute повинен бути :size символів.',
        'array'   => ':attribute повинен містити :size елементів.',
    ],
    'string'               => ':attribute повинен бути a string.',
    'timezone'             => ':attribute повинен бути a valid zone.',
    'unique'               => 'даний :attribute вже є.',
    'uploaded'             => ':attribute failed to upload.',
    'url'                  => ':attribute має невірний формат.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages fчи attributes using the
    | convention "attribute.rule" to name lines. This makes it quick to
    | specify a specific custom language line fчи a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | following language lines are used to swap attribute place-holders
    | with something mчиe reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
