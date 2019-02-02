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
                    <div class="col-lg-12">
                        <div class="alert alert-info alert-dismissable">
                            Сообщения об ошибках и другое
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 pull-lg-8 text-xs-center">
                        <img src="https://placehold.it/150" class ="img-circle" alt="avatar" />
                        <h6 class="m-t-2">Загрузить фото</h6>
                        <label class="custom-file">
                            <input type="file" id="file" class="custom-file-input">
                            <span class="custom-file-control">Выберите файл</span>
                        </label>
                    </div>

                    <div class="col-lg-8 push-lg-4">
                        <form role="form">
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Имя</label>
                                <div class="col-lg-9">
                                    <input class="form-control" type="text" value="Jane" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Фамилия</label>
                                <div class="col-lg-9">
                                    <input class="form-control" type="text" value="Bishop" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Email</label>
                                <div class="col-lg-9">
                                    <input class="form-control" type="email" value="email@gmail.com" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label"></label>
                                <div class="col-lg-9">
                                    <input type="reset" class="btn btn-secondary" value="Отмена" />
                                    <input type="button" class="btn btn-primary" value="Сохранить" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="my-3 p-3 bg-white rounded shadow-sm">
            <h6 class="border-bottom border-gray pb-2 mb-0">Мои комментарии</h6>
            <div class="media text-muted pt-3">
                <img class="bd-placeholder-img mr-2 rounded" width="60" height="60" src ="https://cdn1.flamp.ru/6e8b1e5fe1cc01a4d15e1d27c602dfa7_300_300.jpg">
                <p class="media-body pb-3 mb-0 small lh-128">
                    <strong class="d-block text-gray-dark">@admin</strong>
                    Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
                </p>
            </div>
            <div class="media text-muted pt-3">
                <img class="bd-placeholder-img mr-2 rounded" width="60" height="60" src ="https://cdn1.flamp.ru/6e8b1e5fe1cc01a4d15e1d27c602dfa7_300_300.jpg">
                <p class="media-body pb-3 mb-0 small lh-128">
                    <strong class="d-block text-gray-dark">@admin</strong>
                    Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
                </p>
            </div>
            <div class="media text-muted pt-3">
                <img class="bd-placeholder-img mr-2 rounded" width="60" height="60" src ="https://cdn1.flamp.ru/6e8b1e5fe1cc01a4d15e1d27c602dfa7_300_300.jpg">
                <p class="media-body pb-3 mb-0 small lh-128">
                    <strong class="d-block text-gray-dark">@admin</strong>
                    Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
                </p>
            </div>
            <div class="media text-muted pt-3">
                <img class="bd-placeholder-img mr-2 rounded" width="60" height="60" src ="https://cdn1.flamp.ru/6e8b1e5fe1cc01a4d15e1d27c602dfa7_300_300.jpg">
                <p class="media-body pb-3 mb-0 small lh-128">
                    <strong class="d-block text-gray-dark">@admin</strong>
                    Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
                </p>
            </div>
        </div>
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
    @endsection
