                    -- 課題：SQL作成 --

-- 1. SELECT文を使って、"id" 「1,3,5」だけ抽出するSQLを作る
SELECT * FROM gs_an_table WHERE id = 1 or id = 3 or id = 5;

-- 2. SELECT文を使って、"id" 「4〜8」を抽出するSQLを作る
SELECT * FROM gs_an_table LIMIT 3,5;

-- 3. SELECT文を使って、"email"「 test1」を抽出するあいまい検索を作る
SELECT * FROM gs_an_table WHERE email LIKE '%1@test.jp';

-- 4. SELECT文を使って、"新しい日付順"にソートするSQLを作る。
SELECT * FROM gs_an_table ORDER BY indate DESC;

-- 5. SELECT文を使って、"age"「20」で"indate"「2017-05-26%」のデータを抽出するSQLを作る(ageカラムが無ければ作る[値：10,20,30,40]をテストデータとして入れる)
-- NO ANSWER

-- 6. SELECT文を使って、"新しい日付順"で、「5個」だけ取得するSQLを作る
SELECT * FROM gs_an_table ORDER BY indate DESC LIMIT 5;

-- 7. （難問題） "age"で「GROUP BY 」使い10,20,30,40歳が各何人知るか抽出するSQLを作る
-- NO ANSWER



                　-- 課題テーブル仕様 --
INSERT INTO gs_bm_table(book_name,book_url,comments,indate)Value(:book_name,:book_url,:comments,sysdate())
INSERT INTO gs_bm_table(book_name,book_url,comments,indate)Value('GRIT','https://www.amazon.co.jp/やり抜く力-GRIT-グリット-――人生のあらゆる成功を決める「究極の能力」を身につける-アンジェラ・ダックワース','成功への鍵は、才能と努力ではなく『やり抜く力』',sysdate())
INSERT INTO gs_bm_table(book_name,book_url,comments,indate)Value('ZERO to ONE','https://www.amazon.co.jp/Zero-One-Notes-Startups-Future','Paypal創業者兼投資家ピーター・ティールによるゼロイチビジネス書',sysdate())
INSERT INTO gs_bm_table(book_name,book_url,comments,indate)Value('','','',sysdate())

INSERT INTO gs_bm_user_table(name,lid,lpw,indate)Value(:book_name,:book_url,:comments,sysdate())