# language: ja
フィーチャ: グーグル検索

    シナリオ: recursionを検索
        前提 ホームページを表示している
        もし "q" フィールドに "recursion" と入力する
            かつ "btnK" ボタンをクリックする
	    かつ 1 秒待つ
        ならば "もしかして: recursion" と表示されていること

