@extends('layouts.app')
@section('content')
    <!-- Header del cuestionario-->
    @include('layouts.formHeader', ['currentCategory' => $currentCategory])
    @php
        $modifi = 0;
    @endphp
    @foreach ($modifications as $modification)
        @php
            $modifi++;
            $user = $users->where('id', $modification->user_id)->first();
            $entity = $entities->where('id', $user->entity_id)->first();
        @endphp
        <div class="history-card">
            <div>
                <h3>{{ $user->name . ': ' . ($user->role === 'user' ? $entity->name : 'Administrador') }}</h3>
                {{ $modification->message }}
            </div>
            <div class="history-card__date">
                {{ $modification->created_at }}
            </div>
        </div>
    @endforeach
@endsection

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
