@extends('layouts.master')

@section('content')

<div class="container">

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Utilisateur</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Vous êtes connectés!
                </div>
            </div>
        </div>

</div>



<script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('js/multiple-select/dist/multiple-select.js') }}" defer></script>
@endsection
