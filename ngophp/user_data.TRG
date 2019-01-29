TYPE=TRIGGERS
triggers='CREATE DEFINER=`root`@`localhost` TRIGGER ` reg_time` BEFORE INSERT ON `user_data` FOR EACH ROW INSERT INTO trigger_time VALUES(NOW())'
sql_modes=1342177280
definers='root@localhost'
client_cs_names='utf8mb4'
connection_cl_names='utf8mb4_unicode_ci'
db_cl_names='latin1_swedish_ci'
