<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Morning Happy</title>
    <link rel="stylesheet" href="/css/styles.css">
</head>

<body>
    <header>
        <nav class="my-navbar">
            <a class="my-navbar-brand" href="/">Morning Happy</a>
        </nav>
    </header>
    <main>
        <div class="container">
            <div class="row">
            <div class="column col-md-8">
                    <!-- ここにタスクが表示される -->
                    <div class="panel panel-default">
                        <div class="panel-heading">タスク</div>
                        <div class="panel-body">
                            <div class="text-right">
                                <a href="{{route('todos.create')}}" class="btn btn-default btn-block">
                                    タスクを追加する
                                </a>
                            </div>
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>タイトル</th>
                                    <th>状態</th>
                                    <th>期限</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($todos as $todo)
                                <tr>
                                    <td>{{ $todo->content }}</td>
                                    <td>
                                        <span class="label {{ $todo->status_class }}">{{ $todo->status_label }}</span>
                                    </td>
                                    <td>{{ $todo->formatted_due_date }}</td>
                                    <td><a href="{{ route('todos.edit', ['todo_id' => $todo->id]) }}">編集</a></td>
                                    <td>
                                        <form method="post" action="/todos/delete/{{$todo->id}}">
{{ csrf_field() }}
<input type="submit" value="削除" class="btn btn-danger btn-sm" onclick='return confirm("削除してもよろしいですか？");'>
</form></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col col-md-4">
                    <nav class="panel panel-default">
                        <div class="panel-heading">完了済みタスク</div>
                        <div class="panel-body">
                        </div>
                        
                        <div class="list-group">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>タイトル</th>
                                    <th>状態</th>
                                    <th>期限</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($todo_done as $td)
                                <tr>
                                    <td>{{ $td->content }}</td>
                                    <td>
                                        <span class="label {{ $td->status_class }}">{{ $td->status_label }}</span>
                                    </td>
                                    <td>{{ $td->formatted_due_date }}</td>
                                    <td><a href="{{ route('todos.edit', ['todo_id' => $td->id]) }}">編集</a></td>
                                    <td>
                                        <form method="post" action="/todos/delete/{{$td->id}}">
{{ csrf_field() }}
<input type="submit" value="削除" class="btn btn-danger btn-sm" onclick='return confirm("削除してもよろしいですか？");'>
</form></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        </div>
                    </nav>
                </div>
           
            </div>
        </div>
    </main>
</body>

</html>

<style>
    @import url('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
    @import url('https://cdnjs.cloudflare.com/ajax/libs/bootflat/2.0.4/css/bootflat.min.css');

    body {
        background-color: #EFEDE3;
    }

    .navbar {
        margin: 2rem 0 2.5rem 0;
    }

    .navbar a{
        margin-left: 2rem;
    }

    .my-navbar {
        align-items: center;
        background: #ffc107;
        display: flex;
        height: 56px;
        justify-content: space-between;
        padding: 0 2%;
        margin-bottom: 3rem;
    }

    .my-navbar-brand {
        font-size: 18px;
    }

    .my-navbar-brand,
    .my-navbar-item {
        color: #f4f7f8;
        font-size: 20px;
    }

    .my-navbar-brand:hover,
    a.my-navbar-item:hover {
        color: #ffffff;
    }

    .table td:nth-child(2),
    .table td:nth-child(3),
    .table td:nth-child(4) {
        white-space: nowrap;
        width: 1px;
    }

    .form-control[disabled],
    .form-control[readonly] {
        background-color: #fff;
    }

    .panel .panel-heading {
  background-color: #FEF2C7;
}
</style>