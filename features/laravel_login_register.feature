# language: ja
フィーチャ: laravelログイン

    シナリオ: laravelログイン
        # 前提 ホームページを表示している
        前提 "/register" を表示している
        もし "email" フィールドに "test@example.com" と入力する
            かつ "name" フィールドに "joy" と入力する
            かつ "password" フィールドに "passpass" と入力する
            かつ "password-confirm" フィールドに "passpass" と入力する
            かつ "submitBtn" ボタンをクリックする
	    かつ 1 秒待つ
        ならば "Dashboard" と表示されていること

