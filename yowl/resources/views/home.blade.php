@extends('layouts.app')

@section('content')
<br>
<br>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <html>
            @if (session()->has('success'))
<div class="alert alert-success">
{{ session()->get("success") }}
</div>
@endif
                         <a href="{{ route('rdgavis') }}" class="nav-link">Je rédige mon avis</a>
            </html>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

