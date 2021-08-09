@extends('layout')

@section('content')
    <div class="conteiner">
            <h1>新しい投稿</h1>
            <form method="post" action="{{ url('/reserve/store') }}">
                {{ csrf_field() }}
                <p><input type="text" name="name" placeholder="名前を入力してください" value="{{ old('name') }}"></p>
                <p><input type="text" name="mail" placeholder="メールアドレスを入力してください" value="{{ old('mail') }}"></p>
                <p><input type="text" name="telephone" placeholder="電話番号を入力してください" value="{{ old('telephone') }}"></p>
                <p><textarea name="message" cols="40" rows="10" placeholder="その他に何かございましたらご自由に入力ください" value="{{ old('message') }}"></textarea></p>
                <p><input type="text" name="preferred_date" placeholder="希望日を入力してください" value="{{ old('text') }}"></p>
                <p><input type="submit" value="送信する"></p>
            </form>

            <div>
                <a href={{ route('reserve.list') }}>一覧に戻る</a>
            </div>
    </div>
@endsection
