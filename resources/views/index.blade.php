@extends('layouts.app')

@section('content')
    <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-dark rounded shadow-sm">
        <div class="lh-100">
            <h6 class="mb-0 text-white lh-100">Отзывы пользователей</h6>
        </div>
    </div>
    <div class="my-3 p-3 bg-white rounded shadow-sm">
        <h6 class="border-bottom border-gray pb-2 mb-0">Последние комментарии</h6>

        @foreach($comments as $comment)
            <div class="media text-muted pt-3">
                <img class="bd-placeholder-img mr-2 rounded" width="60" height="60"
                     src="{{$comment->user['image']}}">
                <p class="media-body pb-3 mb-0 small lh-128">
                    @if(!$comment->user_id)
                        <strong class="d-block text-gray-dark">{{$comment->email}}</strong>
                    @else
                        <strong class="d-block text-gray-dark">{{$comment->user['name']}}</strong>
                    @endif
                    {{$comment->text}}
                </p>
            </div>
        @endforeach


    </div>
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            {{$comments->links()}}
        </ul>
    </nav>
    <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-dark rounded shadow-sm">
        <div class="lh-100">
            <h6 class="mb-0 text-white lh-100">Оставте комментарий</h6>
        </div>
    </div>
    <div class="my-3 p-3 bg-white rounded shadow-sm">
        <form>
            <div class="form-group">
                <label for="exampleInputEmail">Имя</label>
                <input type="email" class="form-control" id="exampleInputEmail" placeholder="Введите имя">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Введите email">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail2">Комментарий</label>
                <textarea class="form-control" rows="3" id="exampleInputEmail2"></textarea>
            </div>
            <button type="submit" class="btn btn-dark">Отправить</button>
        </form>
    </div>
@endsection
