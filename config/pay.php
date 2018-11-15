<?php

return [
    'alipay' => [
        'app_id'         => '2016091900547329',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAm3P3JkJjqKFClY959Lp6x27rQc3maHR9HKjZ5iZgFza8/O36SaEp+xYT+nK6iC6TXqsXTKfRtO7OEf5qky7FAOcA4BbahXHOHU8bkXR6dvJtiG/DFGj9ZS5KnkDYcyBTTSoL6zR23aGOFDg5A4+hmJnE0a4MH3EblT99zWCgaB0fwOHqzChIKxkwZrdNxTk6/HL+gHF6ZUwipnXqJmlFqv36r4ihaEheLPzjD1DQJu/qmCtqTTPxMrvgUu05z2GQni2Ld1DmtZm6fyX7k1TpyTLoW4j0PQTymVm9NN5UEqJy2MjBNx93yTA4Jc8Rhi3LHVSFkBBNdQZECuXyjivZQQIDAQAB',
        'private_key'    => 'MIIEowIBAAKCAQEAxaMbgUMC0Wjzl4APL1+T4EkI9XjoJKKga8MXs6XJ3gZ14CI9ysNG3WD3e8l3Yvv/v3LxGFkrQxeJyVWXpUZEingwhKZDr1GIPbBjig4VHIk0YI0abFsL5w8ypdfYTsnCFrl/9Tc1AuDMAnzLSCvwWIRsXVdOCeOmDDBQ+QtcnPWN4hJgpCr81nmKYUIuxJxdA0G09IreU/AZ57PcmeuRylThN8SxqFrxizOUIN+tb9gqDSY0bYrsJxFURuO6cGIg++TIRJ5zu7o7nYFcC+ugy6V8Kc2DuFCdBj/jHIZz/cQlbJwqFv4TPMYeSUkxV32mxfNrLOaaEfsqjT4+6d9QqQIDAQABAoIBAEMF4mD+qaj8j4c0LXIiVpK8Eea1Hvy1jfOdkJ8ivQenZzggRJZLjO+sX6FCHFOcJAn3390i+DHjfJ2jgi7RWpMe2U1S2SdOXgaVl9wMlIo92V5Y27odUjcEh2eIgFmPwFtWgxdUpoyYUXcSfRm3lOVf2yP4ZIWkBv6hMASVHs43O0mHCQo071rVve00P5hA8BXpIDMqwhb5NCQ3qUgqThqg+E2N6et2yLT34jALx5nbEnOMBuHfYHbcU1wsZdEdcZWgyqmbRBhif1HXheke/pz7PtJLHZ6ZPMZKT0KzxCvlNquEUNezrJ5NOSPuF+oan6rOA+Yxk0rSd31c8zvR+RUCgYEA5+asL4b6JZRim6LrFOpJpldmjdjBcJE0aQKSK39desD7x6QekSyXNm3TmvhgvlUyrF3Cptwz09Mcd5oJFgfnIeYfJBpVorX6XdE6HFAqJav3heWB9BO/mCmE+oWjI4TxQV+0ppqjna5JyoSBJtKHM+MvPHpxVPJeqITrs95Ajg8CgYEA2izm+W42brIAt04ose01GG5bJU7rD1uO3AQD4ENBPx8yqctrV5tf+mxxaRueU34XBp9E1u48AtHv+cD60z+KXZsDsDtm3zG+WW8s9Ha28cy8a4fxw27+zE/A5FDdxn66dwfEaZSPNeTOvMgYl5iwErB63sR0xOTwR2HIMsgD7ccCgYBmJhHKjaY6T3ZwH/91Iw52GyGtccEjmJKBfwRr7Jp8q+08L2rXf9DLxOzk4mua62R60IIhhfW+ZMuxU0SVU73YDMnC2WbHWWmDUdpLBnTKS0mozUPFA73thLxyrdMCnli29zVX/d38Yv1WG6/YLfwoOvZfqX+qb2iKyqIYhNniuQKBgQCBc/8gpPp7N/cgzKls2ViVxHUkb+0dUbA0b9V07bL7JyHCicaJVtHeHxYzzYVl+PzkmwAXn4fQDI0dXhn12k/ZNq87lCN372YIXuUHsKDgXCC4lRMoaOWaiP/k+O5+ZpdxJRSvqMxIqBja/sdIu/pNPJXLNDos0cKYODa3muJp5QKBgB18E/Hal9reS1n2Iir74/DijSEuPz88evQqzYLGekUcYPGmEkeV2rfCh8hcMGt0vQwFgQYxJwntew9gWGctpDa0mEAhY52pFaFlpxEdFmXeyFJfwsGhmajVapqUYcZjy/Yd9ujI/fgTMc5f40KE1kugl9hyd0Zy0O51n/GgYQl/',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];