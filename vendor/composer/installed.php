<?php return array(
    'root' => array(
        'name' => '__root__',
        'pretty_version' => '1.0.0+no-version-set',
        'version' => '1.0.0.0',
        'reference' => NULL,
        'type' => 'library',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => true,
    ),
    'versions' => array(
        '__root__' => array(
            'pretty_version' => '1.0.0+no-version-set',
            'version' => '1.0.0.0',
            'reference' => NULL,
            'type' => 'library',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'laravel/pint' => array(
            'pretty_version' => 'dev-main',
            'version' => 'dev-main',
            'reference' => 'b370dafeefcf11f13a8f323da6dfed5b389d7adc',
            'type' => 'project',
            'install_path' => __DIR__ . '/../laravel/pint',
            'aliases' => array(
                0 => '9999999-dev',
            ),
            'dev_requirement' => true,
        ),
        'symfony/deprecation-contracts' => array(
            'pretty_version' => 'dev-main',
            'version' => 'dev-main',
            'reference' => '7c3aff79d10325257a001fcf92d991f24fc967cf',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/deprecation-contracts',
            'aliases' => array(
                0 => '3.4.x-dev',
            ),
            'dev_requirement' => true,
        ),
        'symfony/polyfill-mbstring' => array(
            'pretty_version' => '1.x-dev',
            'version' => '1.9999999.9999999.9999999-dev',
            'reference' => '42292d99c55abe617799667f454222c54c60e229',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/polyfill-mbstring',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'symfony/var-dumper' => array(
            'pretty_version' => 'v6.3.6',
            'version' => '6.3.6.0',
            'reference' => '999ede244507c32b8e43aebaa10e9fce20de7c97',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/var-dumper',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
    ),
);
