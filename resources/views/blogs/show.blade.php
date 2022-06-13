@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-4 border bg-info text-center">
                    タイトル
                </div>
                <div class="col-md-8 border">
                    {{ $blog->title }}
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 border bg-info text-center">
                    内容
                </div>
                <div class="col-md-8 border">
                    {{ $blog->content }}
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 border bg-info text-center">
                    監督
                </div>
                <div class="col-md-8 border">
                    {{ $blog->created_user_id }}
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 border bg-info text-center">
                    作成日
                </div>
                <div class="col-md-8 border">
                    {{ $blog->created_at }}
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 border bg-info text-center">
                    更新日
                </div>
                <div class="col-md-8 border">
                    {{ $blog->updated_at }}
                </div>
            </div>
        </div>
    </div>
    <div class="mt-2" style="display:inline-flex">
        <a href="/blogs" class='btn btn-info'>一覧に戻る</a>
        <a href="/blogs/{{$blog->id}}/edit" class='btn btn-warning'>編集</a>
        <form action="/blogs/{{$blog->id}}" method='post'>
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger">削除</button>
        </form>
    </div>
</div>
@endsection