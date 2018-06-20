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

    'accepted'             => 'Поле ":attribute" должно быть подтверждено.',
    'active_url'           => 'Поле ":attribute" должно содержать корректный URL.',
    'after'                => 'Поле ":attribute" должно содержать дату после :date.',
    'after_or_equal'       => 'Поле ":attribute" должно содержать дату после или равную :date.',
    'alpha'                => 'Поле ":attribute" может содержать только буквы.',
    'alpha_dash'           => 'Поле ":attribute" может содержать только буквы, цифры и тире.',
    'alpha_num'            => 'Поле ":attribute" может содержать только буквы и цифры .',
    'array'                => 'Поле ":attribute" должно содердать массив.',
    'before'               => 'Поле ":attribute" должно содержать дату до :date.',
    'before_or_equal'      => 'Поле ":attribute" должно содержать дату до или равную :date.',
    'between'              => [
        'numeric' => 'Поле ":attribute" должно содержать число между :min и :max.',
        'file'    => 'Размер файла в поле ":attribute" должен быть от :min до :max Кб.',
        'string'  => 'Длина поля ":attribute" должна быть между :min и :max символов.',
        'array'   => 'Поле ":attribute" должно содержать от :min до :max значений.',
    ],
    'boolean'              => 'Поле ":attribute" должно содержать "Да" или "Нет".',
    'confirmed'            => 'Значение поля ":attribute" не совпадает с подтверждением.',
    'date'                 => 'Поле ":attribute" должно содержать дату.',
    'date_format'          => 'Поле ":attribute" не соответствует формату :format.',
    'different'            => 'Поля ":attribute" и ":other" должны отличаться.',
    'digits'               => 'Поле ":attribute" должно содержать :digits знаков.',
    'digits_between'       => 'Поле ":attribute" должно содержать от :min до :max знаков.',
    'dimensions'           => 'Изображение в поле ":attribute" имеет неверное разрешение.',
    'distinct'             => 'Поле ":attribute" не уникально.',
    'email'                => 'Поле ":attribute" должно содержать корректный e-mail.',
    'exists'               => 'The selected :attribute is invalid.',
    'file'                 => 'Поле ":attribute" должно содержать файл.',
    'filled'               => 'Поле ":attribute" должно быть заполнено.',
    'image'                => 'Поле ":attribute" должно содержать изображение.',
    'in'                   => 'The selected :attribute is invalid.',
    'in_array'             => 'Значение поля ":attribute" не найдено в ":other".',
    'integer'              => 'Поле ":attribute" должно содержать целое число.',
    'ip'                   => 'Поле ":attribute" должно содержать корректный IP-адрес.',
    'ipv4'                 => 'Поле ":attribute" должно содержать корректный IPv4-адрес.',
    'ipv6'                 => 'Поле ":attribute" должно содержать корректный IPv6-адрес.',
    'json'                 => 'Поле ":attribute" должно содержать корректную строку в формате JSON.',
    'max'                  => [
        'numeric' => 'Значение поля ":attribute" не может быть больше :max.',
        'file'    => 'Размер файла в поле ":attribute" не может быть больше :max Кб.',
        'string'  => 'Длина поля ":attribute" не может быть больше :max символов.',
        'array'   => 'Поле ":attribute" не может содержать больше :max значений.',
    ],
    'mimes'                => 'Поле ":attribute" должно содержать файл с типом: :values.',
    'mimetypes'            => 'Поле ":attribute" должно содержать файл с типом: :values.',
    'min'                  => [
        'numeric' => 'Значение поля ":attribute" не может быть меньше :max.',
        'file'    => 'Размер файла в поле ":attribute" не может быть меньше :max Кб.',
        'string'  => 'Длина поля ":attribute" не может быть меньше :max символов.',
        'array'   => 'Поле ":attribute" не может содержать меньше :max значений.',
    ],
    'not_in'               => 'The selected :attribute is invalid.',
    'numeric'              => 'Поле ":attribute" должно содержать число.',
    'present'              => 'Поле ":attribute" должно быть заполнено.',
    'regex'                => 'Поле ":attribute" имеет неверный формат.',
    'required'             => 'Поле ":attribute" обязательно для заполнения.',
    'required_if'          => 'Поле ":attribute" обязательно для заполнения, когда поле ":other" имеет значение :value.',
    'required_unless'      => 'Поле ":attribute" обязательно для заполнения, когда поле ":other" имеет значение, отличное от :values.',
    'required_with'        => 'Поле ":attribute" обязательно для заполнения, когда :values is present.',
    'required_with_all'    => 'Поле ":attribute" обязательно для заполнения, когда :values is present.',
    'required_without'     => 'Поле ":attribute" обязательно для заполнения, когда :values is not present.',
    'required_without_all' => 'Поле ":attribute" обязательно для заполнения, когда ни одно из полей :values не заполнено.',
    'same'                 => 'Значения полей ":attribute" и ":other" должны совпадать.',
    'size'                 => [
        'numeric' => 'Поле ":attribute" должно иметь размер :size.',
        'file'    => 'Поле ":attribute" должно иметь размер :size Кб.',
        'string'  => 'Поле ":attribute" должно иметь длину :size символов.',
        'array'   => 'Поле ":attribute" должно содержать :size значений.',
    ],
    'string'               => 'Поле ":attribute" должно содержать строку.',
    'timezone'             => 'Поле ":attribute" должно содержать корректную временную зону.',
    'unique'               => 'Значение поля ":attribute" уже используется.',
    'uploaded'             => 'Не удалось загрузить ":attribute".',
    'url'                  => 'Поле ":attribute" имеет неверный URL.',

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
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
