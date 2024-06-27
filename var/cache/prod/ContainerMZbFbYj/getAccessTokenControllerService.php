<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShopBundle\Controller\Api\OAuth2\AccessTokenController' shared service.

$a = new \League\OAuth2\Server\AuthorizationServer(new \PrestaShopBundle\Security\OAuth2\Repository\ClientRepository(($this->privates['security.user.provider.concrete.oauth2'] ?? ($this->privates['security.user.provider.concrete.oauth2'] = new \Symfony\Component\Security\Core\User\InMemoryUserProvider([]))), ($this->services['security.password_encoder'] ?? $this->load('getSecurity_PasswordEncoderService.php'))), new \PrestaShopBundle\Security\OAuth2\Repository\AccessTokenRepository(), new \PrestaShopBundle\Security\OAuth2\Repository\NullScopeRepository(), new \League\OAuth2\Server\CryptKey('-----BEGIN PRIVATE KEY-----'."\n".'MIIEvwIBADANBgkqhkiG9w0BAQEFAASCBKkwggSlAgEAAoIBAQC3HB8cCJM1pM6i'."\n".'P9+9VYbJCVSWWvAFRA4EkcrYrNyrxVpZ94vTbXGXYY/AE1VQhUIPa9iRMbRQnx+B'."\n".'5416AkKZFgzsrNEAxDEnvuqf38Gjcy8wwJ+OqmfTXhebGP/gaB4ICgnRL94O4iw2'."\n".'bBVEQr4yyZOHWAYoB09uuadeD6ODZkgYaY/QHfSnHWB0za43zI63tHO35p3x8lkZ'."\n".'6ZjjNvGU5VMe2zTBY7Usr+Erka4usV2zSPIsYajj7i3YiFrGg7PqsZX67gHh04pu'."\n".'OUK5aTYRF9o3xpg86reOs+evgenqytmylQbnugjH/26MAQmN7pQnGL2KRDp8J+4i'."\n".'Y5NhdToDAgMBAAECggEANz3NJtxxaOghDLLfcZPJV4IwmjGyIqyO3BMN0sOHyWx/'."\n".'HxA/B1iHwedFgmlyvhmNvfBHxDnuD7qJu1ubg3kGFYAhAw/599S4jaibyQKsvP5l'."\n".'eLxMBrLjItHKplhq7Y0Lrlo07v6VbAEQ3JRL8C2AivrkPpswNEhMTvfEheyK5Htm'."\n".'waP2jS7ypXYFzr6nzHZWul63VLPpwjALg+zc0ltFtvCRDI7ODgI+ezOo7VKNLHLL'."\n".'2W+XCWQG6ICdmhSmZsu6rQvDhmLV4N/4rAWa18m2H7UsimP2hV0Raa/YHJLmCmcz'."\n".'Sf6PUeFBL/EBYQvPaKEiypOaTS2tUphCp03Dj0U29QKBgQDgU2+owHXPMHJQx0pq'."\n".'OnGkAuYPrhsfjTv0jIDouivFqLdTfEDGhvdxZlknMQAVDfPmY/uI6UtJjpJ+rZWA'."\n".'NIC7Bt9FA4n8+KNtv7G9ebe3xhj0PDJaqLfdvlHTf+2ptsMy+2GvqZ7jxd9NE7GY'."\n".'nzWNGsQKZmZjvNzYVuuW07lWRwKBgQDQ9t/p4cT1K0A0eOsys+FdnCdxrGlIv7M7'."\n".'GZdeYoSuNVhEabfpW+VamkgX+XmUbYPm9O7fSgbTFMEPCB2OaU03TUbYwydyAeao'."\n".'ZygkLfeHosxYsAcg8LkwQe7iO9qGMiLpHdc7S5cgaMSKFqyLN7QEiJSgEhU17jCL'."\n".'ji5E7qBQZQKBgQC2N7BEwIkx0qWZLjkpTu4Ojvg4FnIb0Aq6nAL+iHOT7Hd2DkFD'."\n".'wlBvQfb7Wdc6QwoyxFaHIRIx3ujqk7AT4xIKWgu0sKo+3e1K8eK8CYoNcpHEmr1A'."\n".'XTp1meo3xfvU1wt6dy4jlcHmPU4k+vFRC0phozNJS2Kyc7Bk3z4hVzx+cwKBgQCR'."\n".'cxV+ZUDD6jwBih0kKKL4loW6EOkj0xN9Up3S+74gyE7NJ8z0qJtnSjZeQa8Hyobi'."\n".'TqCqWYuQh0SuItb31oIBuU9T99rP91TG6S6+qCRAi+ey36vGmOg+F9agMEs111YH'."\n".'b1buFfp2e5Y6C/hD2xz5ftv84zlSVZ4CtY+tOW/rJQKBgQCF4D6Pvi6F2rzZy2VI'."\n".'J3HqkHRup2ZO7EMRPQvT2zzDuUzSHqYcliM32BWBnGGSpmw11LOCLJ4s3hzWjGii'."\n".'UoNsF7ot2aLr8CgVMvMTzzIKfzkncXHhy88gJ1UKLaZocqJDyHUsr9dcadr1Tvor'."\n".'HeizRZYPgXLUMbOE5GtaeoIiXg=='."\n".'-----END PRIVATE KEY-----'."\n".''), 'def00000b790c0bd2ee2775e186beab345f41e919ab5130a37b908c5cd63651f9bcf243317b783743a65ef020f548d5ebb933848693abb358c75ed7165710db8655ddca6');
$a->enableGrantType(new \League\OAuth2\Server\Grant\ClientCredentialsGrant());
$b = new \Nyholm\Psr7\Factory\Psr17Factory();

return $this->services['PrestaShopBundle\\Controller\\Api\\OAuth2\\AccessTokenController'] = new \PrestaShopBundle\Controller\Api\OAuth2\AccessTokenController($a, new \Symfony\Bridge\PsrHttpMessage\Factory\PsrHttpFactory($b, $b, $b, $b), new \Symfony\Bridge\PsrHttpMessage\Factory\HttpFoundationFactory(), $b);