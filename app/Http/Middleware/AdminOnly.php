<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminOnly
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): \Symfony\Component\HttpFoundation\Response  $next
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = $request->user();

        // تأكد من تعديل الخاصية is_admin لتتناسب مع طريقة تعريف صلاحياتك
        if (!$user || !$user->is_admin) {
            // يمكنك إعادة التوجيه لصفحة معينة أو عرض رسالة خطأ
            return redirect()->route('home')->with('error', 'غير مصرح لك بالدخول إلى لوحة الإدارة.');
        }

        return $next($request);
    }
}
