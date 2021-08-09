@extends('layout')

@section('content')
    <h1>予約一覧</h1>
    <table>
        <tr>
            <th>名前</th>
            <th>メールアドレス</th>
            <th>電話番号</th>
            <th>自由覧</th>
            <th>予約希望日</th>
        </tr>
    </table>

    @foreach ($reserves as $reserve)
    <table>
        <tr>
            <td>{{ $reserve->name }}</td>
            <td>{{ $reserve->mail }}</td>
            <td>{{ $reserve->telephone }}</td>
            <td>{{ $reserve->message }}</td>
            <td>{{ $reserve->preferred_date }}</td>
            <td><button class="favorite styled" type="button" onclick="location.href='{{ url('/reserve/edit', $reserve->id) }}'">更新</button></td>
            <td>
                <form method="post" action="{{ route('reserve.destroy', $reserve->id) }}">
                {{ csrf_field() }}
               <button type="submit" class="">削除</button>
            </form></td>
        </tr>
    </table>
     @endforeach
@endsection