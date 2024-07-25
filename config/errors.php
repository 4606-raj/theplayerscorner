<?php

return [
    'auth' => [
        'invalid_credentials' => 'Invalid username or password.',
        'account_locked' => 'Your account is locked. Please contact the administrator.',
        'account_disabled' => 'Your account is disabled. Please contact the administrator.',
    ],
    'validation' => [
        'required' => 'The :attribute field is required.',
        'email' => 'The :attribute field must be a valid email address.',
        'min' => 'The :attribute field must be at least :min characters.',
        'max' => 'The :attribute field must not be greater than :max characters.',
    ],
    'database' => [
        'duplicate_entry' => 'A record with the same :attribute already exists.',
        'record_not_found' => 'The requested record was not found.',
    ],
    'general' => [
        'something_went_wrong' => 'Something went wrong. Please try again later.',
        'unauthorized' => 'You are not authorized to perform this action.',
    ],
];