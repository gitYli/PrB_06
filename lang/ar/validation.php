<?php
//
//return [
//
//    /*
//    |--------------------------------------------------------------------------
//    | Validation Language Lines
//    |--------------------------------------------------------------------------
//    |
//    | The following language lines contain the default error messages used by
//    | the validator class. Some of these rules have multiple versions such
//    | as the size rules. Feel free to tweak each of these messages here.
//    |
//    */
//
//    'accepted' => 'The :attribute field must be accepted.',
//    'accepted_if' => 'The :attribute field must be accepted when :other is :value.',
//    'active_url' => 'The :attribute field must be a valid URL.',
//    'after' => 'The :attribute field must be a date after :date.',
//    'after_or_equal' => 'The :attribute field must be a date after or equal to :date.',
//    'alpha' => 'The :attribute field must only contain letters.',
//    'alpha_dash' => 'The :attribute field must only contain letters, numbers, dashes, and underscores.',
//    'alpha_num' => 'The :attribute field must only contain letters and numbers.',
//    'array' => 'The :attribute field must be an array.',
//    'ascii' => 'The :attribute field must only contain single-byte alphanumeric characters and symbols.',
//    'before' => 'The :attribute field must be a date before :date.',
//    'before_or_equal' => 'The :attribute field must be a date before or equal to :date.',
//    'between' => [
//        'array' => 'The :attribute field must have between :min and :max items.',
//        'file' => 'The :attribute field must be between :min and :max kilobytes.',
//        'numeric' => 'The :attribute field must be between :min and :max.',
//        'string' => 'The :attribute field must be between :min and :max characters.',
//    ],
//    'boolean' => 'The :attribute field must be true or false.',
//    'can' => 'The :attribute field contains an unauthorized value.',
//    'confirmed' => 'The :attribute field confirmation does not match.',
//    'contains' => 'The :attribute field is missing a required value.',
//    'current_password' => 'The password is incorrect.',
//    'date' => 'The :attribute field must be a valid date.',
//    'date_equals' => 'The :attribute field must be a date equal to :date.',
//    'date_format' => 'The :attribute field must match the format :format.',
//    'decimal' => 'The :attribute field must have :decimal decimal places.',
//    'declined' => 'The :attribute field must be declined.',
//    'declined_if' => 'The :attribute field must be declined when :other is :value.',
//    'different' => 'The :attribute field and :other must be different.',
//    'digits' => 'The :attribute field must be :digits digits.',
//    'digits_between' => 'The :attribute field must be between :min and :max digits.',
//    'dimensions' => 'The :attribute field has invalid image dimensions.',
//    'distinct' => 'The :attribute field has a duplicate value.',
//    'doesnt_end_with' => 'The :attribute field must not end with one of the following: :values.',
//    'doesnt_start_with' => 'The :attribute field must not start with one of the following: :values.',
//    'email' => 'The :attribute field must be a valid email address.',
//    'ends_with' => 'The :attribute field must end with one of the following: :values.',
//    'enum' => 'The selected :attribute is invalid.',
//    'exists' => 'The selected :attribute is invalid.',
//    'extensions' => 'The :attribute field must have one of the following extensions: :values.',
//    'file' => 'The :attribute field must be a file.',
//    'filled' => 'The :attribute field must have a value.',
//    'gt' => [
//        'array' => 'The :attribute field must have more than :value items.',
//        'file' => 'The :attribute field must be greater than :value kilobytes.',
//        'numeric' => 'The :attribute field must be greater than :value.',
//        'string' => 'The :attribute field must be greater than :value characters.',
//    ],
//    'gte' => [
//        'array' => 'The :attribute field must have :value items or more.',
//        'file' => 'The :attribute field must be greater than or equal to :value kilobytes.',
//        'numeric' => 'The :attribute field must be greater than or equal to :value.',
//        'string' => 'The :attribute field must be greater than or equal to :value characters.',
//    ],
//    'hex_color' => 'The :attribute field must be a valid hexadecimal color.',
//    'image' => 'The :attribute field must be an image.',
//    'in' => 'The selected :attribute is invalid.',
//    'in_array' => 'The :attribute field must exist in :other.',
//    'integer' => 'The :attribute field must be an integer.',
//    'ip' => 'The :attribute field must be a valid IP address.',
//    'ipv4' => 'The :attribute field must be a valid IPv4 address.',
//    'ipv6' => 'The :attribute field must be a valid IPv6 address.',
//    'json' => 'The :attribute field must be a valid JSON string.',
//    'list' => 'The :attribute field must be a list.',
//    'lowercase' => 'The :attribute field must be lowercase.',
//    'lt' => [
//        'array' => 'The :attribute field must have less than :value items.',
//        'file' => 'The :attribute field must be less than :value kilobytes.',
//        'numeric' => 'The :attribute field must be less than :value.',
//        'string' => 'The :attribute field must be less than :value characters.',
//    ],
//    'lte' => [
//        'array' => 'The :attribute field must not have more than :value items.',
//        'file' => 'The :attribute field must be less than or equal to :value kilobytes.',
//        'numeric' => 'The :attribute field must be less than or equal to :value.',
//        'string' => 'The :attribute field must be less than or equal to :value characters.',
//    ],
//    'mac_address' => 'The :attribute field must be a valid MAC address.',
//    'max' => [
//        'array' => 'The :attribute field must not have more than :max items.',
//        'file' => 'The :attribute field must not be greater than :max kilobytes.',
//        'numeric' => 'The :attribute field must not be greater than :max.',
//        'string' => 'The :attribute field must not be greater than :max characters.',
//    ],
//    'max_digits' => 'The :attribute field must not have more than :max digits.',
//    'mimes' => 'The :attribute field must be a file of type: :values.',
//    'mimetypes' => 'The :attribute field must be a file of type: :values.',
//    'min' => [
//        'array' => 'The :attribute field must have at least :min items.',
//        'file' => 'The :attribute field must be at least :min kilobytes.',
//        'numeric' => 'The :attribute field must be at least :min.',
//        'string' => 'The :attribute field must be at least :min characters.',
//    ],
//    'min_digits' => 'The :attribute field must have at least :min digits.',
//    'missing' => 'The :attribute field must be missing.',
//    'missing_if' => 'The :attribute field must be missing when :other is :value.',
//    'missing_unless' => 'The :attribute field must be missing unless :other is :value.',
//    'missing_with' => 'The :attribute field must be missing when :values is present.',
//    'missing_with_all' => 'The :attribute field must be missing when :values are present.',
//    'multiple_of' => 'The :attribute field must be a multiple of :value.',
//    'not_in' => 'The selected :attribute is invalid.',
//    'not_regex' => 'The :attribute field format is invalid.',
//    'numeric' => 'The :attribute field must be a number.',
//    'password' => [
//        'letters' => 'The :attribute field must contain at least one letter.',
//        'mixed' => 'The :attribute field must contain at least one uppercase and one lowercase letter.',
//        'numbers' => 'The :attribute field must contain at least one number.',
//        'symbols' => 'The :attribute field must contain at least one symbol.',
//        'uncompromised' => 'The given :attribute has appeared in a data leak. Please choose a different :attribute.',
//    ],
//    'present' => 'The :attribute field must be present.',
//    'present_if' => 'The :attribute field must be present when :other is :value.',
//    'present_unless' => 'The :attribute field must be present unless :other is :value.',
//    'present_with' => 'The :attribute field must be present when :values is present.',
//    'present_with_all' => 'The :attribute field must be present when :values are present.',
//    'prohibited' => 'The :attribute field is prohibited.',
//    'prohibited_if' => 'The :attribute field is prohibited when :other is :value.',
//    'prohibited_unless' => 'The :attribute field is prohibited unless :other is in :values.',
//    'prohibits' => 'The :attribute field prohibits :other from being present.',
//    'regex' => 'The :attribute field format is invalid.',
//    'required' => 'The :attribute field is required.',
//    'required_array_keys' => 'The :attribute field must contain entries for: :values.',
//    'required_if' => 'The :attribute field is required when :other is :value.',
//    'required_if_accepted' => 'The :attribute field is required when :other is accepted.',
//    'required_if_declined' => 'The :attribute field is required when :other is declined.',
//    'required_unless' => 'The :attribute field is required unless :other is in :values.',
//    'required_with' => 'The :attribute field is required when :values is present.',
//    'required_with_all' => 'The :attribute field is required when :values are present.',
//    'required_without' => 'The :attribute field is required when :values is not present.',
//    'required_without_all' => 'The :attribute field is required when none of :values are present.',
//    'same' => 'The :attribute field must match :other.',
//    'size' => [
//        'array' => 'The :attribute field must contain :size items.',
//        'file' => 'The :attribute field must be :size kilobytes.',
//        'numeric' => 'The :attribute field must be :size.',
//        'string' => 'The :attribute field must be :size characters.',
//    ],
//    'starts_with' => 'The :attribute field must start with one of the following: :values.',
//    'string' => 'The :attribute field must be a string.',
//    'timezone' => 'The :attribute field must be a valid timezone.',
//    'unique' => 'The :attribute has already been taken.',
//    'uploaded' => 'The :attribute failed to upload.',
//    'uppercase' => 'The :attribute field must be uppercase.',
//    'url' => 'The :attribute field must be a valid URL.',
//    'ulid' => 'The :attribute field must be a valid ULID.',
//    'uuid' => 'The :attribute field must be a valid UUID.',
//
//    /*
//    |--------------------------------------------------------------------------
//    | Custom Validation Language Lines
//    |--------------------------------------------------------------------------
//    |
//    | Here you may specify custom validation messages for attributes using the
//    | convention "attribute.rule" to name the lines. This makes it quick to
//    | specify a specific custom language line for a given attribute rule.
//    |
//    */
//
//    'custom' => [
//        'attribute-name' => [
//            'rule-name' => 'custom-message',
//        ],
//    ],
//
//    /*
//    |--------------------------------------------------------------------------
//    | Custom Validation Attributes
//    |--------------------------------------------------------------------------
//    |
//    | The following language lines are used to swap our attribute placeholder
//    | with something more reader friendly such as "E-Mail Address" instead
//    | of "email". This simply helps us make our message more expressive.
//    |
//    */
//
//    'attributes' => [],
//
//];


return [
    'accepted' => 'يجب قبول :attribute.',
    'active_url' => 'الـ :attribute ليس عنوان URL صحيح.',
    'after' => 'يجب أن يكون الـ :attribute تاريخاً بعد :date.',
    'alpha' => 'يجب أن يحتوي الـ :attribute على أحرف فقط.',
    'alpha_dash' => 'يجب أن يحتوي الـ :attribute على أحرف وأرقام وشرطات فقط.',
    'alpha_num' => 'يجب أن يحتوي الـ :attribute على أحرف وأرقام فقط.',
    'array' => 'يجب أن يكون الـ :attribute مصفوفة.',
    'before' => 'يجب أن يكون الـ :attribute تاريخاً قبل :date.',
    'between' => [
        'numeric' => 'يجب أن يكون الـ :attribute بين :min و :max.',
        'file' => 'يجب أن يكون حجم الـ :attribute بين :min و :max كيلوبايت.',
        'string' => 'يجب أن يكون طول الـ :attribute بين :min و :max حرف.',
        'array' => 'يجب أن تحتوي الـ :attribute على بين :min و :max عنصر.',
    ],
    'boolean' => 'يجب أن يكون حقل الـ :attribute صحيح أو خطأ.',
    'confirmed' => 'تأكيد الـ :attribute لا يتطابق.',
    'date' => 'الـ :attribute ليس تاريخاً صحيحاً.',
    'date_format' => 'الـ :attribute لا يتطابق مع الصيغة :format.',
    'different' => 'يجب أن يكون الـ :attribute و :other مختلفين.',
    'digits' => 'يجب أن يكون الـ :attribute مكوناً من :digits رقم.',
    'digits_between' => 'يجب أن يكون الـ :attribute بين :min و :max رقم.',
    'dimensions' => 'الـ :attribute له أبعاد صورة غير صالحة.',
    'distinct' => 'حقل الـ :attribute يحتوي على قيمة مكررة.',
    'email' => 'يجب أن يكون الـ :attribute عنوان بريد إلكتروني صحيح.',
    'exists' => 'الـ :attribute المختار غير صحيح.',
    'file' => 'يجب أن يكون الـ :attribute ملفاً.',
    'filled' => 'يجب أن يحتوي حقل الـ :attribute على قيمة.',
    'image' => 'يجب أن يكون :attribute صورة.',
    'in' => 'الـ :attribute المختار غير صحيح.',
    'in_array' => 'حقل الـ :attribute غير موجود في :other.',
    'integer' => 'يجب أن يكون الـ :attribute عدد صحيح.',
    'ip' => 'يجب أن يكون الـ :attribute عنوان IP صحيح.',
    'json' => 'يجب أن يكون الـ :attribute سلسلة JSON صحيحة.',
    'max' => [
        'numeric' => 'يجب أن لا يكون الـ :attribute أكبر من :max.',
        'file' => 'يجب أن لا يكون حجم الـ :attribute أكبر من :max كيلوبايت.',
        'string' => 'يجب أن لا يكون طول الـ :attribute أكبر من :max حرف.',
        'array' => 'يجب أن لا تحتوي الـ :attribute على أكثر من :max عنصر.',
    ],
    'mimes' => 'يجب أن يكون الـ :attribute ملفاً من نوع: :values.',
    'mimetypes' => 'يجب أن يكون الـ :attribute ملفاً من نوع: :values.',
    'min' => [
        'numeric' => 'يجب أن يكون الـ :attribute على الأقل :min.',
        'file' => 'يجب أن يكون حجم الـ :attribute على الأقل :min كيلوبايت.',
        'string' => 'يجب أن يكون طول :attribute على الأقل :min حرف.',
        'array' => 'يجب أن تحتوي الـ :attribute على الأقل :min عنصر.',
    ],
    'not_in' => 'الـ :attribute المختار غير صحيح.',
    'numeric' => 'يجب أن يكون الـ :attribute رقماً.',
    'present' => 'يجب أن يكون حقل الـ :attribute موجوداً.',
    'regex' => 'صيغة الـ :attribute غير صحيحة.',
    'required' => 'حقل الـ :attribute مطلوب.',
    'required_if' => 'حقل الـ :attribute مطلوب عندما يكون :other هو :value.',
    'required_unless' => 'حقل الـ :attribute مطلوب ما لم يكن :other في :values.',
    'required_with' => 'حقل الـ :attribute مطلوب عندما يكون :values موجوداً.',
    'required_with_all' => 'حقل الـ :attribute مطلوب عندما تكون :values موجودة.',
    'required_without' => 'حقل الـ :attribute مطلوب عندما لا يكون :values موجوداً.',
    'required_without_all' => 'حقل الـ :attribute مطلوب عندما لا تكون أي من :values موجودة.',
    'same' => 'يجب أن يتطابق الـ :attribute و :other.',
    'size' => [
        'numeric' => 'يجب أن يكون الـ :attribute :size.',
        'file' => 'يجب أن يكون حجم الـ :attribute :size كيلوبايت.',
        'string' => 'يجب أن يكون طول الـ :attribute :size حرف.',
        'array' => 'يجب أن تحتوي الـ :attribute على :size عنصر.',
    ],
    'string' => 'يجب أن يكون الـ :attribute نصاً.',
    'timezone' => 'يجب أن يكون الـ :attribute منطقة زمنية صحيحة.',
    'unique' => 'تم أخذ :attribute بالفعل.',
    'url' => 'صيغة الـ :attribute غير صحيحة.',
    'uuid' => 'يجب أن يكون الـ :attribute UUID صحيحاً.',

    'attributes' => [
        'name'                  => 'إسم المستخدم',
        'email'                 => 'البريد الإلكتروني',
        'password'              => 'كلمة المرور',
        'password_confirmation' => 'تأكيد كلمة المرور',
        'address'               => 'العنوان',
        'Client_name'         => 'اسم العميل',
        'Client_description'  => 'وصف العميل',
        'Client_img'           => 'الملف من نوع',
        'Services_name'       => 'اسم الخدمة',
        'Services_description' => 'وصف الخدمة',
        'Services_img'         => 'الملف من نوع',
        // Add other attribute translations here
    ],
];
