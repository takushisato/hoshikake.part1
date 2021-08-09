@extends('layout')

@section('content')
    <div class="conteiner">
            <h1>予約状況を編集する</h1>
            <form method="post" action="{{ url('/reserve/update', $reserve->id) }}">
                {{ csrf_field() }}
                <p><input type="text" name="name" placeholder="名前" value="{{ old('name', $reserve->name) }}"></p>
                <p><input type="text" name="mail" placeholder="メールアドレス" value="{{ old('mail', $reserve->mail) }}"></p>
                <p><input type="text" name="telephone" placeholder="電話番号" value="{{ old('telephone', $reserve->telephone) }}"></p>
                <p><textarea name="message" placeholder="自由覧">{{ old('message', $reserve->message) }}</textarea></p>
                <p><input type="text" name="preferred_date" placeholder="希望日" value="{{ old('preferred_date', $reserve->preferred_date) }}"></p>
                <p><input type="submit" value="更新する"></p>
            </form>

            <div>
                <a href={{ route('reserve.list') }}>一覧に戻る</a>
            </div>
    </div>
@endsection
