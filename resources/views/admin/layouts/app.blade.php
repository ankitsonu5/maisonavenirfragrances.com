@include('admin.layouts.head')
@include('admin.layouts.navigation')
<main class="page-content">
{{ $slot }}
</main>
@include('admin.layouts.footer')
