INSERT INTO 'gs_bm_user_table'('id','name','lid','lpw','kanri_flg','life_flg') VALUES
(1, 'supervisor', 'test1', 'test1', 1, 0),
(2, 'tester', 'test2', 'test2', 0, 0),
(3, 'test 3rd', 'test3', 'test3', 1, 0);
-- ↑は使用不可

--👇こっちを使った

INSERT INTO `gs_bm_user_table` (`id`, `name`, `lid`, `lpw`, `kanri_flg`, `life_flg`) VALUES
(1, 'Supervisor', 'test1', 'test1', 1, 0),
(2, 'Tester1', 'test2', 'test2', 0, 0),
(3, 'Tester2', 'test3', 'test3', 0, 0);

