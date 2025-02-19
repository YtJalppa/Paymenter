<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => ':attribute tulee olla hyv&auml;ksytty.',
    'active_url' => ':attribute ei ole URL-osoite.',
    'after' => ':attribute tulee olla p&auml;iv&auml;m&auml;&auml;r&auml;n j&auml;lkeen p&auml;iv&auml;n :date.',
    'after_or_equal' => ':attribute tulee olla t&auml;m&auml; p&auml;iv&auml; tai sen j&auml;lkeen: :date.',
    'alpha' => ':attribute voi sis&auml;lt&auml;&auml; vain kirjaimia.',
    'alpha_dash' => ':attribute voi sis&auml;lt&auml;&auml; vain kirjaimia, numeroita, viivoja (-) ja alaviivoja.',
    'alpha_num' => ':attribute voi sis&auml;lt&auml;&auml; vain kirjaimia ja numeroita.',
    'array' => 'The :attribute must be an array.',
    'before' => ':attribute tulee olla p&auml;iv&auml;m&auml;&auml;r&auml; ennen p&auml;iv&auml;&auml; :date.',
    'before_or_equal' => ':attribute tulee olla t&auml;m&auml; p&auml;iv&auml; tai ennen sit&auml;: :date.',
    'between' => [
        'numeric' => ':attribute tulee olla v&auml;lill&auml; :min - :max.',
        'file' => ':attribute tulee olla v&auml;lill&auml; :min - :max kilobitti&auml;.',
        'string' => ':attribute tulee olla v&auml;lill&auml; :min - :max merkki&auml;.',
        'array' => ':attribute tulee olla v&auml;lill&auml; :min and :max tavaraa.',
    ],
    'boolean' => ':attribute tulee olla joko true (oikea) tai false (v&auml;&auml;r&auml;).',
    'confirmed' => 'The :attribute confirmation does not match.',
    'date' => ':attribute ei ole hyv&auml;ksytt&auml;v&auml; p&auml;iv&auml;m&auml;&auml;r&auml;muoto.',
    'date_equals' => ':attribute tulee olla sama kuin :date.',
    'date_format' => ':attribute ei ole seuraavaa muotoa: :format.',
    'different' => ':attribute ja :other tulee olla eri.',
    'digits' => 'The :attribute must be :digits digits.',
    'digits_between' => 'The :attribute must be between :min and :max digits.',
    'dimensions' => 'The :attribute has invalid image dimensions.',
    'distinct' => ':attribute on sama sis&auml;lt&ouml;inen.',
    'email' => ':attribute tulee olla oikea s&auml;hk&ouml;postiosoite.',
    'ends_with' => ':attribute tulee loppua yhteen seuraavista: :values.',
    'exists' => 'Valittu :attribute on v&auml;&auml;rin kirjoitettu.',
    'file' => ':attribute tulee olla tiedosto.',
    'filled' => 'The :attribute field must have a value.',
    'gt' => [
        'numeric' => 'The :attribute must be greater than :value.',
        'file' => 'The :attribute must be greater than :value kilobytes.',
        'string' => 'The :attribute must be greater than :value characters.',
        'array' => 'The :attribute must have more than :value items.',
    ],
    'gte' => [
        'numeric' => 'The :attribute must be greater than or equal :value.',
        'file' => 'The :attribute must be greater than or equal :value kilobytes.',
        'string' => 'The :attribute must be greater than or equal :value characters.',
        'array' => 'The :attribute must have :value items or more.',
    ],
    'image' => 'The :attribute must be an image.',
    'in' => 'The selected :attribute is invalid.',
    'in_array' => 'The :attribute field does not exist in :other.',
    'integer' => 'The :attribute must be an integer.',
    'ip' => 'The :attribute must be a valid IP address.',
    'ipv4' => 'The :attribute must be a valid IPv4 address.',
    'ipv6' => 'The :attribute must be a valid IPv6 address.',
    'json' => 'The :attribute must be a valid JSON string.',
    'lt' => [
        'numeric' => 'The :attribute must be less than :value.',
        'file' => 'The :attribute must be less than :value kilobytes.',
        'string' => 'The :attribute must be less than :value characters.',
        'array' => 'The :attribute must have less than :value items.',
    ],
    'lte' => [
        'numeric' => 'The :attribute must be less than or equal :value.',
        'file' => 'The :attribute must be less than or equal :value kilobytes.',
        'string' => 'The :attribute must be less than or equal :value characters.',
        'array' => 'The :attribute must not have more than :value items.',
    ],
    'max' => [
        'numeric' => 'The :attribute may not be greater than :max.',
        'file' => 'The :attribute may not be greater than :max kilobytes.',
        'string' => 'The :attribute may not be greater than :max characters.',
        'array' => 'The :attribute may not have more than :max items.',
    ],
    'mimes' => 'The :attribute must be a file of type: :values.',
    'mimetypes' => 'The :attribute must be a file of type: :values.',
    'min' => [
        'numeric' => 'The :attribute must be at least :min.',
        'file' => 'The :attribute must be at least :min kilobytes.',
        'string' => 'The :attribute must be at least :min characters.',
        'array' => 'The :attribute must have at least :min items.',
    ],
    'multiple_of' => 'The :attribute must be a multiple of :value.',
    'not_in' => 'The selected :attribute is invalid.',
    'not_regex' => 'The :attribute format is invalid.',
    'numeric' => ':attribute tulee olla numero.',
    'password' => 'Salasana on v&auml;&auml;rin',
    'present' => 'The :attribute field must be present.',
    'regex' => 'The :attribute format is invalid.',
    'required' => 'The :attribute field is required.',
    'required_if' => 'The :attribute field is required when :other is :value.',
    'required_unless' => 'The :attribute field is required unless :other is in :values.',
    'required_with' => 'The :attribute field is required when :values is present.',
    'required_with_all' => 'The :attribute field is required when :values are present.',
    'required_without' => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same' => 'The :attribute and :other must match.',
    'size' => [
        'numeric' => 'The :attribute must be :size.',
        'file' => 'The :attribute must be :size kilobytes.',
        'string' => 'The :attribute must be :size characters.',
        'array' => 'The :attribute must contain :size items.',
    ],
    'starts_with' => 'The :attribute must start with one of the following: :values.',
    'string' => 'The :attribute must be a string.',
    'timezone' => 'The :attribute must be a valid zone.',
    'unique' => 'The :attribute has already been taken.',
    'uploaded' => 'The :attribute failed to upload.',
    'url' => 'The :attribute format is invalid.',
    'uuid' => 'The :attribute must be a valid UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
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
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],
];
