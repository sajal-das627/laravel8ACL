<?php

return [

    /*
     * Is email activation required
     */
    'app_project_version' => env('APP_PROJECT_VERSION'),

    /*
     * Is email activation required
     */
    'activation' => env('ACTIVATION', false),

    /*
     * Is email activation required
     */
    'timePeriod' => env('ACTIVATION_LIMIT_TIME_PERIOD', 24),

    /*
     * Is email activation required
     */
    'maxAttempts' => env('ACTIVATION_LIMIT_MAX_ATTEMPTS', 3),

    /*
     * NULL Ip to enter to match database schema
     */
    'nullIpAddress' => env('NULL_IP_ADDRESS', '0.0.0.0'),

    /*
     * User restore encryption type
     */
    'restoreUserEncType' => 'AES-256-ECB',

    /*
     * User restore days past cutoff
     */
    'restoreUserCutoff' => env('USER_RESTORE_CUTOFF_DAYS', 31),

    /*
     * User list pagination size
     */
    'userListPaginationSize' => env('USER_LIST_PAGINATION_SIZE', 50),

    /*
     * User restore encryption key
     */
    'restoreKey' => env('USER_RESTORE_ENCRYPTION_KEY', 'sup3rS3cr3tR35t0r3K3y21!'),

    /*
     * ReCaptcha Status
     */
    'reCaptchStatus' => env('ENABLE_RECAPTCHA', true),

    /*
     * ReCaptcha Site Key
     */
    'reCaptchSite'   => env('RE_CAP_SITE', '6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI'),

    /*
     * ReCaptcha Secret
     */
    'reCaptchSecret' => env('RE_CAP_SECRET', '6LeIxAcTAAAAAGG-vFI1TnRWxMZNFuojJ4WifJWe'),

    /*
     * Google Maps API V3 Status
     */
    'googleMapsAPIStatus' => env('GOOGLEMAPS_API_STATUS', true),

    /*
     * Google Maps API Key
     */
    'googleMapsAPIKey'    => env('GOOGLEMAPS_API_KEY', 'AIzaSyAyyV1c0JngpUmyGNbK1y67XnTIKhvaQ2U'),

    /*
     * DropZone CDN
     */
    'dropZoneJsCDN'    => env('DROPZONE_JS_CDN', 'https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js'),

    /*
     * Google Analytics
     */
    'googleanalyticsId' => env('GOOGLE_ANALYTICS_ID', false),
];
