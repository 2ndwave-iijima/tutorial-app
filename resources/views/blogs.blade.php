@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1>ブログ一覧</h1>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col" class="w-25">タイトル</th>
                  <th scope="col" class="w-auto">内容</th>
                  <th scope="col" class="w-15">監督</th>
                  <th scope="col" class="w-10">米公開日</th>
                  <th scope="col" class="w-10">世界興行収入</th>
                  <th scope="col" class="w-10">ボタン</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>ハリーポッターと賢者の石</td>
                  <td>普通の男の子ハリーがある日突然魔法界の学校に入学することになる。 魔法界には悪のボスが存在し、そのボスは不死の石を狙っていて...！？ ハリー魔法界1年目。</td>
                  <td>クリス・コロンバス</td>
                  <td>2001年11月16日</td>
                  <td>約1,302億</td>
                  <td>
                      <a href="/blogs/1">
                         <button type="button" class="btn btn-primary">詳細</button>
                      </a>
                  </td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>ハリーポッターと秘密の部屋</td>
                  <td>なんとか魔法界1年目を乗り越えたハリー。しかし魔法界の悪のボスの関係者だと疑われてしまって...！？ ハリー魔法界2年目。</td>
                  <td>クリス・コロンバス</td>
                  <td>2002年11月14日</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>ハリーポッターとアズカバンの囚人</td>
                  <td>悪のボスの関係者ではないと疑いが晴れたハリー。なんとか平穏が訪れたと思ったら学校に囚人が...！？しかも名付け親...！？ ハリー魔法界3年目。</td>
                  <td>アルフォンソ・キュアロン</td>
                  <td>2004年5月31日</td>
                </tr>
              </tbody>
            </table>
	</div>
    </div>
</div>
@endsection
