@extends('layouts.account')
@section('content')
    @include('inc.message')
    <br>
    <h1 style="text-align: center">Личный кабинет</h1>
    <div class="container marketing">
        <hr class="featurette-divider">
        @if ($user)
            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading fw-normal lh-1">
                        @if($user->profile)
                            <div class="col-md-5">
                                <img class="market_image" src="{{ Storage::disk('public')->url($user->profile->image) }}" alt="img">
                            </div>
                        {{ $user->profile->first_name }}
                        {{ $user->profile->father_name }}
                        {{ $user->profile->last_name }}</h2>
                    <p class="lead">Возраст: {{ $user->profile->age }}</p>
                    @else
                        <a class="btn btn-secondary mb-2 me-2"
                           href="{{ route('account.profiles.create', ['profile'=> Auth::user()->id]) }}">
                            Профиль не заполнен
                        </a>
                    @endif
                    <p class="lead">Телефон: {{ $user->phone }}</p>
                    <p class="lead">Email: {{ $user->email }}</p>
                    <div class="d-flex flex-wrap align-items-start">
                        @forelse($user->tags as $key => $tagItem)
                            <a class="btn btn-secondary mb-2 me-2"
                               href="">
                                {{ $tagItem->tag }}
                            </a>
                        @empty
                            <a class="btn btn-secondary mb-2 me-2"
                               href="">
                                Профиль тренировок не указан
                            </a>
                        @endforelse
                    </div>
                </div>
            </div>
            @if($user->skill)
            <div class="row featurette">
                <hr class="featurette-divider">
                <h3>Опыт</h3>
                <p class="lead">{{ $user->skill->experience }}</p>
                <h3>Город</h3>
                <p class="lead">{{ $user->skill->location }}</p>
                <h3>Образование</h3>
                <p>{{ $user->skill->education }}</p>
                <h3>Навыки</h3>
                <p>{{ $user->skill->skills_list }}</p>
                <h3>Достижения</h3>
                <p>{{ $user->skill->achievements }}</p>
                <h3>О себе</h3>
                <p>{{ $user->skill->description }}</p>
            </div>
                @else
                    <a class="btn btn-secondary mb-2 me-2"
                       href="{{ route('account.skills.create', ['skill'=> Auth::user()->id]) }}">
                        Навыки не указаны
                    </a>
            @endif
        @else
            <hr class="featurette-divider">
            <h1>Искомый тренер у нас не зарегистрирован...</h1>
            <hr class="featurette-divider">
        @endif
        <hr class="featurette-divider">
    </div>



@endsection

