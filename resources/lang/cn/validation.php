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

    'accepted' => ':attribute 必须被接受。',
    'accepted_if' => '当 :other 为 :value 时，:attribute 必须被接受。',
    'active_url' => ':attribute 不是有效的URL。',
    'after' => ':attribute 必须是 :date 之后的日期。',
    'after_or_equal' => ':attribute 必须是 :date 之后或相等的日期。',
    'alpha' => ':attribute 只能包含字母。',
    'alpha_dash' => ':attribute 只能包含字母、数字、破折号和下划线。',
    'alpha_num' => ':attribute 只能包含字母和数字。',
    'array' => ':attribute 必须是一个数组。',
    'ascii' => ':attribute 只能包含单字节的字母数字字符和符号。',
    'before' => ':attribute 必须是 :date 之前的日期。',
    'before_or_equal' => ':attribute 必须是 :date 之前或相等的日期。',
    'between' => [
        'array' => ':attribute 必须有 :min 到 :max 项。',
        'file' => ':attribute 必须介于 :min 到 :max KB 之间。',
        'numeric' => ':attribute 必须介于 :min 到 :max 之间。',
        'string' => ':attribute 必须介于 :min 到 :max 个字符之间。',
    ],
    'boolean' => ':attribute 字段必须为 true 或 false。',
    'confirmed' => ':attribute 确认不匹配。',
    'current_password' => '密码不正确。',
    'date' => ':attribute 不是有效日期。',
    'date_equals' => ':attribute 必须是等于 :date 的日期。',
    'date_format' => ':attribute 与格式 :format 不匹配。',
    'decimal' => ':attribute 必须有 :decimal 位小数。',
    'declined' => ':attribute 必须被拒绝。',
    'declined_if' => '当 :other 为 :value 时，:attribute 必须被拒绝。',
    'different' => ':attribute 和 :other 必须不同。',
    'digits' => ':attribute 必须是 :digits 位数字。',
    'digits_between' => ':attribute 必须介于 :min 和 :max 位数字之间。',
    'dimensions' => ':attribute 图片尺寸无效。',
    'distinct' => ':attribute 字段有重复值。',
    'doesnt_end_with' => ':attribute 不能以以下之一结尾：:values。',
    'doesnt_start_with' => ':attribute 不能以以下之一开始：:values。',
    'email' => ':attribute 必须是有效的电子邮件地址。',
    'ends_with' => ':attribute 必须以以下之一结尾：:values。',
    'enum' => '所选的 :attribute 无效。',
    'exists' => '所选的 :attribute 无效。',
    'file' => ':attribute 必须是一个文件。',
    'filled' => ':attribute 字段必须有一个值。',
    'gt' => [
        'array' => ':attribute 必须有超过 :value 项。',
        'file' => ':attribute 必须大于 :value KB。',
        'numeric' => ':attribute 必须大于 :value。',
        'string' => ':attribute 必须大于 :value 个字符。',
    ],
    'gte' => [
        'array' => ':attribute 必须有 :value 项或更多。',
        'file' => ':attribute 必须大于或等于 :value KB。',
        'numeric' => ':attribute 必须大于或等于 :value。',
        'string' => ':attribute 必须大于或等于 :value 个字符。',
    ],
    'image' => ':attribute 必须是图片。',
    'in' => '所选的 :attribute 无效。',
    'in_array' => ':attribute 字段在 :other 中不存在。',
    'integer' => ':attribute 必须是整数。',
    'ip' => ':attribute 必须是有效的 IP 地址。',
    'ipv4' => ':attribute 必须是有效的 IPv4 地址。',
    'ipv6' => ':attribute 必须是有效的 IPv6 地址。',
    'json' => ':attribute 必须是有效的 JSON 字符串。',
    'lowercase' => ':attribute 必须是小写字母。',
    'lt' => [
        'array' => ':attribute 必须少于 :value 项。',
        'file' => ':attribute 必须小于 :value KB。',
        'numeric' => ':attribute 必须小于 :value。',
        'string' => ':attribute 必须小于 :value 个字符。',
    ],
    'lte' => [
        'array' => ':attribute 不能多于 :value 项。',
        'file' => ':attribute 必须小于或等于 :value KB。',
        'numeric' => ':attribute 必须小于或等于 :value。',
        'string' => ':attribute 必须小于或等于 :value 个字符。',
    ],
    'mac_address' => ':attribute 必须是有效的 MAC 地址。',
    'max' => [
        'array' => ':attribute 不能多于 :max 项。',
        'file' => ':attribute 不能大于 :max KB。',
        'numeric' => ':attribute 不能大于 :max。',
        'string' => ':attribute 不能大于 :max 个字符。',
    ],
    'max_digits' => ':attribute 不能多于 :max 位数字。',
    'mimes' => ':attribute 必须是类型为 :values 的文件。',
    'mimetypes' => ':attribute 必须是类型为 :values 的文件。',
    'min' => [
        'array' => ':attribute 至少有 :min 项。',
        'file' => ':attribute 至少为 :min KB。',
        'numeric' => ':attribute 至少为 :min。',
        'string' => ':attribute 至少为 :min 个字符。',
    ],
    'min_digits' => ':attribute 至少有 :min 位数字。',
    'multiple_of' => ':attribute 必须是 :value 的倍数。',
    'not_in' => '所选的 :attribute 无效。',
    'not_regex' => ':attribute 格式无效。',
    'numeric' => ':attribute 必须是数字。',
    'password' => [
        'letters' => ':attribute 必须包含至少一个字母。',
        'mixed' => ':attribute 必须包含至少一个大写和一个小写字母。',
        'numbers' => ':attribute 必须包含至少一个数字。',
        'symbols' => ':attribute 必须包含至少一个符号。',
        'uncompromised' => '给定的 :attribute 出现在数据泄露中。请选择不同的 :attribute。',
    ],
    'present' => ':attribute 字段必须存在。',
    'prohibited' => ':attribute 字段被禁止。',
    'prohibited_if' => '当 :other 为 :value 时，:attribute 字段被禁止。',
    'prohibited_unless' => '除非 :other 在 :values 中，否则 :attribute 字段被禁止。',
    'prohibits' => ':attribute 字段禁止 :other 存在。',
    'regex' => ':attribute 格式无效。',
    'required' => ':attribute 字段是必需的。',
    'required_array_keys' => ':attribute 字段必须包含以下条目：:values。',
    'required_if' => '当 :other 为 :value 时，:attribute 字段是必需的。',
    'required_if_accepted' => '当 :other 被接受时，:attribute 字段是必需的。',
    'required_unless' => '除非 :other 在 :values 中，否则 :attribute 字段是必需的。',
    'required_with' => '当 :values 存在时，:attribute 字段是必需的。',
    'required_with_all' => '当 :values 存在时，:attribute 字段是必需的。',
    'required_without' => '当 :values 不存在时，:attribute 字段是必需的。',
    'required_without_all' => '当 :values 都不存在时，:attribute 字段是必需的。',
    'same' => ':attribute 和 :other 必须匹配。',
    'size' => [
        'array' => ':attribute 必须包含 :size 项。',
        'file' => ':attribute 必须为 :size KB。',
        'numeric' => ':attribute 必须为 :size。',
        'string' => ':attribute 必须为 :size 个字符。',
    ],
    'starts_with' => ':attribute 必须以以下之一开头：:values。',
    'string' => ':attribute 必须是字符串。',
    'timezone' => ':attribute 必须是有效的时区。',
    'unique' => ':attribute 已经被占用。',
    'uploaded' => ':attribute 上传失败。',
    'uppercase' => ':attribute 必须是大写字母。',
    'url' => ':attribute 必须是有效的URL。',
    'ulid' => ':attribute 必须是有效的ULID。',
    'uuid' => ':attribute 必须是有效的UUID。',

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
