<?php

namespace Vormkracht10\MinifyHtml\Middleware;

use Illuminate\Http\Request;

class MinifyHtml
{
    public function handle($request, $next)
    {
        if (! $this->shouldMinifyHtml($request)) {
            return $next($request);
        }

        $response = $next($request);

        foreach (config('minify-html.transformers') as $x => $transformer) {
            $response = (new $transformer)->transform($response);
        }

        return $response;
    }

    public function shouldMinifyHtml(Request $request)
    {
        if (! config('minify-html.enabled')) {
            return false;
        }

        if (! in_array($request->method(), ['GET', 'HEAD'])) {
            return false;
        }

        if ($request->isJson() || $request->isXml()) {
            return false;
        }

        if (! str_contains($request->header('Accept'), 'html')) {
            return false;
        }

        if ($request->ajax()) {
            return false;
        }

        return true;
    }
}
