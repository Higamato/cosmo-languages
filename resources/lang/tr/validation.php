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

    'accepted' => ':attribute kabul edilmelidir.',
    'active_url' => ':attribute URL\'si geçerli değil.',
    'after' => ':attribute, :date tarihinden sonraki bir tarih olmalıdır.',
    'after_or_equal' => ':attribute, :date\'den sonraki veya buna eşit bir tarih olmalıdır. ',
    'alpha' => ':attribute sadece harflerden oluşmalıdır.',
    'alpha_dash' => ':attribute sadece harfler, rakamlar, kısa ve alt çizgiden oluşmalıdır.',
    'alpha_num' => ':attribute sadece harfler ve rakamlardan oluşmalıdır.',
    'array' => ':attribute bir dizi olmalıdır.',
    'before' => ':attribute, :date\'den önceki bir tarih olmalıdır. ',
    'before_or_equal' => ':attribute, :date tarihinden önce veya buna eşit bir tarih olmalıdır. ',
    'between' => [
        'numeric' => ':attribute :min ve :max arasında olmalıdır.',
        'file' => ':attribute :min ve :max kilobayt arasında olmalıdır.',
        'string' => ':attribute :min ve :max karakter arasında olmalıdır.',
        'array' => ':attribute :min ve :max öğe arasında olmalıdır.',
    ],
    'boolean' => ':attribute alanı doğru veya yanlış olmalıdır.',
    'confirmed' => ':attribute onayı eşleşmiyor.',
    'date' => ':attribute geçerli bir tarih değil.',
    'date_equals' => ':attribute, :date tarihine eşit olmalıdır.',
    'date_format' => ':attribute, :format formatına uymuyor .',
    'different' => ':attribute ve :other farklı olmalıdır.',
    'digits' => ':attribute :digits rakamlarında olmalıdır.',
    'digits_between' => ':attribute :min ve :max rakamları arasında olmalıdır.',
    'dimensions' => ':attribute geçersiz resim boyutlarına sahip.',
    'distinct' => ':attribute alanında yinelenen bir değer var.',
    'email' => ':attribute geçerli bir email adresi olmalı.',
    'ends_with' => ':attribute sonu :values ile bitmelidir.',
    'exists' => 'Seçilen :attribute geçerli değil.',
    'file' => ':attribute dosya olmalıdır.',
    'filled' => ':attribute alanında bir değer olmalıdır.',
    'gt' => [
        'numeric' => ':attribute, :value değerinden büyük olmalıdır.',
        'file' => ':attribute, :value kilobayt değerinden büyük olmalıdır.',
        'string' => ':attribute, :value karakterinden büyük olmalıdır.',
        'array' => ':attribute, :value öğelerinden daha fazlasına sahip olmalıdır.',
    ],
    'gte' => [
        'numeric' => ':attribute, :value değerinden büyük veya ona eşit olmalıdır.',
        'file' => ':attribute, :value kilobayttan büyük veya ona eşit olmalıdır.',
        'string' => ':attribute, :value karakterlerinden büyük veya ona eşit olmalıdır.',
        'array' => ':attribute, :value öğelerine veya daha fazlasına sahip olmalıdır.',
    ],
    'image' => ':attribute resim olmalıdır.',
    'in' => 'Seçili :attribute geçerli değil.',
    'in_array' => ':attribute alanı :other içinde mevcut değil.',
    'integer' => ':attribute tam sayı olmalıdır.',
    'ip' => ':attribute geçerli bir IP adresi olmalıdır.',
    'ipv4' => ':attribute geçerli bir IPv4 adresi olmalıdır.',
    'ipv6' => ':attribute geçerli bir IPv6 adresi olmalıdır.',
    'json' => ':attribute geçerli bir JSON string olmalıdır.',
    'lt' => [
        'numeric' => ':attribute, :value değerinden küçük olmalıdır.',
        'file' => ':attribute, :value kilobayttan küçük olmalıdır.',
        'string' => ':attribute, :value karakterlerinden daha az olmalıdır.',
        'array' => ':attribute, :value öğelerinden daha azına sahip olmalıdır.',
    ],
    'lte' => [
        'numeric' => ':attribute, :value değerinden küçük veya ona eşit olmalıdır.',
        'file' => ':attribute, :value kilobayttan küçük veya ona eşit olmalıdır.',
        'string' => ':attribute, :value karakterlerinden küçük veya ona eşit olmalıdır.',
        'array' => ':attribute, :value öğelerinden daha fazlasına sahip olmamalıdır.', 
    ],
    'max' => [
        'numeric' => ':attribute, :max değerinden büyük olamaz.',
        'file' => ':attribute, :max kilobayttan büyük olamaz.',
        'string' => ':attribute, :max karakterden büyük olamaz.',
        'array' => ':attribute, :max öğesinden fazla öğesi olamaz.',
    ],
    'mimes' => ':attribute :values türünde bir dosya olmalıdır.',
    'mimetypes' => ':attribute :values türünde bir dosya olmalıdır.',
    'min' => [
        'numeric' => ':attribute en az :min olmalıdır.',
        'file' => ':attribute en az :min kilobayt olmalıdır.',
        'string' => ':attribute en az :min karakter olmalıdır.',
        'array' => ':attribute en az :min öğe içermelidir.',
    ],
    'not_in' => 'Seçilen :attribute geçersiz.',
    'not_regex' => ':attribute formatı geçersiz.',
    'numeric' => ':attribute sayı olmalıdır.',
    'password' => 'Şifre yanlış.',
    'present' => ':attribute alanı mevcut olmalıdır.',
    'regex' => ':attribute formatı geçersiz.',
    'required' => ':attribute alanı gereklidir.',
    'required_if' => ':attribute alanı, :other :value olduğunda gereklidir.',
    'required_unless' => ':attribute alanı, :other :values içinde olmadığı sürece gereklidir. ',
    'required_with' => ':values mevcut olduğunda :attribute alanı gereklidir.',
    'required_with_all' => ':attribute alanı :values mevcut olduğunda gereklidir.',
    'required_without' => ':attribute alanı :values olmadığında gereklidir.',
    'required_without_all' => ':attribute alanı, :values değerlerinden hiçbiri mevcut olmadığında gereklidir.', 
    'same' => ':attribute ve :other eşleşmelidir.',
    'size' => [
        'numeric' => ':attribute :size boyutunda olmalıdır.',
        'file' => ':attribute :size kilobayt olmalıdır.',
        'string' => ':attribute :size karakter olmalıdır.',
        'array' => ':attribute :size öğe içermelidir.',
    ],
    'starts_with' => ':attribute, :values değerlerinden biriyle başlamalıdır.',
    'string' => ':attribute harflerden oluşmalıdır.',
    'timezone' => ':attribute geçerli bir dilim olmalıdır.',
    'unique' => ':attribute çoktan alındı.',
    'uploaded' => ':attribute yüklenemedi.',
    'url' => ':attribute formatı geçersiz.',
    'uuid' => ':attribute geçerli bir UUID olmalıdır.',

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
            'rule-name' => 'özelleştirilmiş-mesaj',
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
