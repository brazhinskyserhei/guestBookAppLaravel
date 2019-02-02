@extends('layouts.admin')
    @section('content')
        <div class="d-flex align-items-center p-3 my-3 text-white-7 bg-dark rounded shadow-sm">
            <div class="lh-100">
                <h6 class="mb-0 text-white lh-100">Информация о комментариях</h6>
            </div>
        </div>
        <div class="my-5 p-3 bg-white rounded shadow-sm">
            <h6 class="border-bottom border-gray pb-2 mb-3">Список пользователей</h6>
            <table class="table table-striped table-hover">
                <thead>
                <tr>
                    <th>Имя</th>
                    <th>Дата</th>
                    <th>Роль</th>
                    <th>Действие</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><img src="https://www.tutorialrepublic.com/examples/images/avatar/2.jpg" class="avatar"
                             alt="Avatar">Michael Holz
                    </td>
                    <td>04/10/2013 23:00</td>
                    <td>Ниже представлены требования, обязательные к исполнению в целях обеспечения совместимости механизмов
                        автозагрузки.
                    </td>
                    <td>
                        <a href="#" class="delete" title="Удалить" data-toggle="tooltip"><i class='fas fa-trash'
                                                                                            style='font-size:18px;color:red'></i></a>
                    </td>
                </tr>
                </tbody>
            </table>
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
