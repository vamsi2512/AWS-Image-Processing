<?php
require 'vendor/autoload.php';

use Aws\S3\S3Client;
use Aws\S3\Exception\S3Exception;

// AWS Credentials
$bucketName = 'techfest-iitb-vamsi-krishna';
$IAM_KEY = 'AKIAUTG2PW7XMXOKME4Y';
$IAM_SECRET = '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';

try {
    $s3 = S3Client::factory(
        array(
            'credentials' => array(
                'key' => $IAM_KEY,
                'secret' => $IAM_SECRET,
                'ACL'    => 'public-read'
            ),
            'version' => 'latest',
            'region'  => 'ap-south-1'
        )
    );
} catch (Exception $e) {
    die("Error: " . $e->getMessage());
}
