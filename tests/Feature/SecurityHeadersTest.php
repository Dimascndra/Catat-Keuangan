<?php

namespace Tests\Feature;

use Tests\TestCase;

class SecurityHeadersTest extends TestCase
{
    /**
     * Test that HSTS header is present.
     */
    public function test_hsts_header_is_present(): void
    {
        $response = $this->get('/');

        if (env('SECURITY_HSTS_ENABLED', true)) {
            $response->assertHeader('Strict-Transport-Security');

            $header = $response->headers->get('Strict-Transport-Security');
            $this->assertStringContainsString('max-age=', $header);
        }
    }

    /**
     * Test that X-Frame-Options header is present.
     */
    public function test_x_frame_options_header_is_present(): void
    {
        $response = $this->get('/');

        $response->assertHeader('X-Frame-Options', 'SAMEORIGIN');
    }

    /**
     * Test that X-Content-Type-Options header is present.
     */
    public function test_x_content_type_options_header_is_present(): void
    {
        $response = $this->get('/');

        $response->assertHeader('X-Content-Type-Options', 'nosniff');
    }

    /**
     * Test that Permissions-Policy header is present.
     */
    public function test_permissions_policy_header_is_present(): void
    {
        $response = $this->get('/');

        $response->assertHeader('Permissions-Policy');

        $header = $response->headers->get('Permissions-Policy');
        $this->assertStringContainsString('camera=', $header);
    }

    /**
     * Test that Referrer-Policy header is present.
     */
    public function test_referrer_policy_header_is_present(): void
    {
        $response = $this->get('/');

        $response->assertHeader('Referrer-Policy');
    }

    /**
     * Test that X-XSS-Protection header is present.
     */
    public function test_x_xss_protection_header_is_present(): void
    {
        $response = $this->get('/');

        $response->assertHeader('X-XSS-Protection', '1; mode=block');
    }

    /**
     * Test that all security headers are present together.
     */
    public function test_all_security_headers_are_present(): void
    {
        $response = $this->get('/');

        $response->assertHeader('X-Frame-Options');
        $response->assertHeader('X-Content-Type-Options');
        $response->assertHeader('Permissions-Policy');
        $response->assertHeader('Referrer-Policy');
        $response->assertHeader('X-XSS-Protection');
    }
}
