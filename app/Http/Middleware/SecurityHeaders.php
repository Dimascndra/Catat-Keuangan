<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SecurityHeaders
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        // HSTS - HTTP Strict Transport Security
        if (env('SECURITY_HSTS_ENABLED', true)) {
            $maxAge = env('SECURITY_HSTS_MAX_AGE', 31536000); // 1 year default
            $includeSubDomains = env('SECURITY_HSTS_SUBDOMAINS', true) ? '; includeSubDomains' : '';
            $response->headers->set(
                'Strict-Transport-Security',
                "max-age={$maxAge}{$includeSubDomains}"
            );
        }

        // X-Frame-Options - Prevent clickjacking
        $response->headers->set('X-Frame-Options', 'SAMEORIGIN');

        // X-Content-Type-Options - Prevent MIME-type sniffing
        $response->headers->set('X-Content-Type-Options', 'nosniff');

        // Permissions-Policy - Restrict browser features
        $permissionsPolicy = env(
            'SECURITY_PERMISSIONS_POLICY',
            'camera=(), microphone=(), geolocation=()'
        );
        $response->headers->set('Permissions-Policy', $permissionsPolicy);

        // Referrer-Policy - Control referrer information
        $referrerPolicy = env(
            'SECURITY_REFERRER_POLICY',
            'strict-origin-when-cross-origin'
        );
        $response->headers->set('Referrer-Policy', $referrerPolicy);

        // X-XSS-Protection - Legacy XSS protection for older browsers
        $response->headers->set('X-XSS-Protection', '1; mode=block');

        // Content-Security-Policy (optional, can be customized)
        if (env('SECURITY_CSP_ENABLED', false)) {
            $csp = env(
                'SECURITY_CSP',
                "default-src 'self'; script-src 'self' 'unsafe-inline' 'unsafe-eval'; style-src 'self' 'unsafe-inline';"
            );
            $response->headers->set('Content-Security-Policy', $csp);
        }

        return $response;
    }
}
