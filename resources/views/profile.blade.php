@extends('layouts.app')

@section('content')
    <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-dark rounded shadow-sm">
        <div class="lh-100">
            <h6 class="mb-0 text-white lh-100">Информация о пользователе</h6>
        </div>
    </div>
    <div class="my-3 p-3 bg-white rounded shadow-sm">
        <h6 class="border-bottom border-gray pb-2 mb-3">Редактировать пользователя</h6>
        <div class="container">
            <div class="row">
                    @include('errors')
            </div>
            <div class="row">
                <div class="col-lg-12 text-xs-center">
                    <form role="form" action="{{route('profile.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <img width ="105" height="100" src="{{$user->image}}" class="img-circle" alt="avatar"/>
                        <h6 class="m-t-2">Загрузить фото</h6>
                        <label class="custom-file ">
                            <input type="file" id="file" name ="file" class="custom-file-input">
                            <span class="custom-file-control m-t-2">Выберите файл</span>
                        </label>

                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Имя</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" name="name" value="{{$user->name}}"/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Email</label>
                            <div class="col-lg-9">
                                <input class="form-control" name="email" type="email" value="{{$user->email}}"/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Пароль</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="password" name="password" value=""/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-12 col-form-label form-control-label"></label>
                            <div class="col-lg-12">
                                <input type="submit" class="btn btn-primary" value="Сохранить"/>
                            </div>
                        </div>
                </form>

            </div>
        </div>
    </div>
    <div class="my-3 p-3 bg-white rounded shadow-sm">
        <h6 class="border-bottom border-gray pb-2 mb-0">Мои комментарии</h6>

        @foreach($comments->comments as $comment)
            <div class="media text-muted pt-3">
                <img class="bd-placeholder-img mr-2 rounded" width="60" height="60"
                     src="{{$user->image}}">
                <p class="media-body pb-3 mb-0 small lh-128">
                    <strong class="d-block text-gray-dark">{{$user->name}}</strong>
                    {{$comment->text}}
                    <strong class="d-block text-gray-dark">{{$comment->created_at}}</strong>
                </p>
            </div>
        @endforeach

    </div>
    <nav aria-label="paginate">
        <ul class="pagination justify-content-center">
            {{$comments->comments->links()}}
        </ul>
    </nav>
@endsection
