<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="https://laravel.com/img/notification-logo.png" class="logo" alt="Laravel Logo">
@else
{{-- {{ $slot }} --}}
{{-- <img src="{{ asset('images/logo/logo-koi.png') }}" class="logo" alt="Bubblix Logo" style="width: 100%;"> --}}
<img src="{{ asset('images/logo/logo-koi.png') }}" class="logo" alt="Bubblix Logo" style="width: 100%;">
@endif
</a>
</td>
</tr>
