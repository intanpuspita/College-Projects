CREATE TABLE request(
	kd_req		CHAR(4) PRIMARY KEY, /* karakter awal jdl_lagu + urutan lagu ex: B018 */
	jdl_lagu	VARCHAR(50) NOT NULL,
	musisi		VARCHAR(50) NOT NULL
);
CREATE TABLE akun(
	username	VARCHAR(10) PRIMARY KEY, /* username minimal memiliki 4 karakter dan maksimal 10 karakter. karakter yang dapat digunakan merupakan alphanumerik, numerik */
	email		VARCHAR(50) UNIQUE NOT NULL,
	password	VARCHAR(20) NOT NULL,
	ban_poin	INT(1) DEFAULT 0
);
CREATE TABLE profil(
	username	VARCHAR(10) PRIMARY KEY NOT NULL, /* diambil dari tabel akun */
	fullname	VARCHAR(50),
	DoB			DATE,
	JK_user		BOOLEAN,
	photo		CHAR(27), /* USER_PHOTOS/[[username]].(jpeg|jpg) */
	fav_musisi	TEXT,
	fav_genre	TEXT,
	bio			TEXT,
	
	CONSTRAINT profil_fk1 FOREIGN KEY(username) REFERENCES akun(username)
);
CREATE TABLE album(
	kd_album	VARCHAR(4) PRIMARY KEY, /* karakter awal nama_album + urutan ex: H018 */
	nama_album	VARCHAR(50) NOT NULL,
	foto_album	CHAR(22) /* ALBUM_PHOTOS/[[kd_album]].(jpeg|jpg) */
);
CREATE TABLE lagu(
	kd_lagu			VARCHAR(6) PRIMARY KEY, /* karakter awal judul_lagu + urutan ex: F18594 */
	judul_lagu		VARCHAR(50) NOT NULL,
	file_lagu		CHAR(18) NOT NULL, /* FILE_MP3/[[kd_lagu]].mp3 */
	lirik			TEXT,
	durasi			TIME,
	ukuran			VARCHAR(6),
	link_vid		VARCHAR(100), /* youtube.com/[[video_lagu]] */
	album			VARCHAR(4), /* diambil dari tabel album */
	jml_download	INT DEFAULT 0,
	jml_like		INT DEFAULT 0,
	jml_dislike		INT DEFAULT 0,
	
	CONSTRAINT lagu_fk1 FOREIGN KEY(album) REFERENCES album(kd_album)
);
CREATE TABLE ranking(
	kd_rank		CHAR(3) PRIMARY KEY, /* (TM(1|2|3)|TD(1|2|3)|TL(1|2|3)|TH(1|2|3)|) */
	jenis_rank	VARCHAR(50) NOT NULL /* TM = TOP MUSIC, TD = TOP DOWNLOAD, TL = TOP LIKE, TH = TOP DISLIKE */
);
CREATE TABLE musisi(
	kd_musisi	VARCHAR(4) PRIMARY KEY, /* karakter awal nama_musisi + urutan ex: R004 */
	nama_musisi	VARCHAR(50) NOT NULL,
	foto_musisi	CHAR(23) /* MUSISI_PHOTOS/[[kd_musisi]].(jpeg|jpg) */
);
CREATE TABLE genre(
	kd_genre	VARCHAR(3) PRIMARY KEY, /* karakter awal nama_genre + urutan ex: P02 */
	nama_genre	VARCHAR(10) UNIQUE NOT NULL
);

CREATE TABLE user_request(
	username		VARCHAR(10), /* diambil dari tabel akun */
	kd_req			CHAR(4), /* diambil dari tabel request */
	tanggal_req		DATE NOT NULL, /* diisi menggunakan tanggal hari ini (dari sistem) */
	status_notif	BOOLEAN DEFAULT "0", /* berisi 1 jika sudah diberi notifikasi dan 0 jika belum */
	
	CONSTRAINT user_request_pk1 PRIMARY KEY(username, kd_req),
	CONSTRAINT user_request_fk1 FOREIGN KEY(username) REFERENCES akun(username),
	CONSTRAINT user_request_fk2 FOREIGN KEY(kd_req) REFERENCES request(kd_req)
);
CREATE TABLE laporan_user(
	pelapor			VARCHAR(10), /* diambil dari tabel akun */
	terlapor		VARCHAR(10), /* diambil dari tabel akun */
	tanggal_lapor	DATE NOT NULL, /* diisi menggunakan tanggal hari ini (dari sistem) */
	laporan			VARCHAR(255) NOT NULL,
	
	CONSTRAINT laporan_user_pk1 PRIMARY KEY(pelapor, terlapor, tanggal_lapor),
	CONSTRAINT laporan_user_fk1 FOREIGN KEY(pelapor) REFERENCES akun(username),
	CONSTRAINT laporan_user_fk2 FOREIGN KEY(terlapor) REFERENCES akun(username)
);
CREATE TABLE like_dislike(
	username		VARCHAR(10), /* diambil dari tabel akun */
	kd_lagu			VARCHAR(6), /* diambil dari tabel lagu */
	tanggal			DATE NOT NULL, /* diisi menggunakan tanggal hari ini (dari sistem) */
	like_dislike	BOOLEAN DEFAULT "1", /* berisi 1 jika like dan 0 jika dislike */
	
	CONSTRAINT like_dislike_pk1 PRIMARY KEY(username, kd_lagu, tanggal),
	CONSTRAINT like_dislike_fk1 FOREIGN KEY(username) REFERENCES akun(username),
	CONSTRAINT like_dislike_fk2 FOREIGN KEY(kd_lagu) REFERENCES lagu(kd_lagu)
);
CREATE TABLE komentar(
	username	VARCHAR(10), /* diambil dari tabel akun */
	kd_lagu		VARCHAR(6), /* diambil dari tabel lagu */
	waktu		TIMESTAMP NOT NULL, /* diisi menggunakan timestamp dari sistem */
	komen		TEXT NOT NULL,
	
	CONSTRAINT komentar_pk1 PRIMARY KEY(username, kd_lagu, waktu),
	CONSTRAINT komentar_fk1 FOREIGN KEY(username) REFERENCES akun(username),
	CONSTRAINT komentar_fk2 FOREIGN KEY(kd_lagu) REFERENCES lagu(kd_lagu)
);
CREATE TABLE ranking_lagu(
	jns_ranking		CHAR(3), /* diambil dari tabel ranking */
	kd_lagu			VARCHAR(6), /* diambil dari tabel lagu */
	ranking_ke		INT NOT NULL,
	
	CONSTRAINT ranking_lagu_pk1 PRIMARY KEY(jns_ranking, kd_lagu),
	CONSTRAINT ranking_lagu_fk1 FOREIGN KEY(jns_ranking) REFERENCES ranking(kd_rank),
	CONSTRAINT ranking_lagu_fk2 FOREIGN KEY(kd_lagu) REFERENCES lagu(kd_lagu)
);
CREATE TABLE lagu_musisi(
	kd_lagu			VARCHAR(6), /* diambil dari tabel lagu */
	kd_musisi		VARCHAR(4), /* diambil dari tabel musisi */
	tanggal_upload	DATE NOT NULL, /* diisi menggunakan tanggal hari ini (dari sistem) */
	penyanyi_utama	BOOLEAN DEFAULT "1", /* berisi 1 jika penyanyi utama, dan 0 jika hanya featuring */
	
	CONSTRAINT lagu_musisi_pk1 PRIMARY KEY(kd_lagu, kd_musisi),
	CONSTRAINT lagu_musisi_fk1 FOREIGN KEY(kd_lagu) REFERENCES lagu(kd_lagu),
	CONSTRAINT lagu_musisi_fk2 FOREIGN KEY(kd_musisi) REFERENCES musisi(kd_musisi)
);
CREATE TABLE lagu_genre(
	kd_lagu		VARCHAR(6), /* diambil dari tabel lagu */
	kd_genre	VARCHAR(3), /* diambil dari tabel genre */
	
	CONSTRAINT lagu_genre_pk1 PRIMARY KEY(kd_lagu, kd_genre),
	CONSTRAINT lagu_genre_fk1 FOREIGN KEY(kd_lagu) REFERENCES lagu(kd_lagu),
	CONSTRAINT lagu_genre_fk2 FOREIGN KEY(kd_genre) REFERENCES genre(kd_genre)
);
CREATE TABLE user_download(
	username	VARCHAR(10), /* diambil dari tabel akun */
	kd_lagu		VARCHAR(6), /* diambil dari tabel lagu */
	tanggal		DATE NOT NULL, /* diambil dari tanggal sistem */
	
	CONSTRAINT user_download_pk1 PRIMARY KEY(username, kd_lagu),
	CONSTRAINT user_download_fk1 FOREIGN KEY(username) REFERENCES akun(username),
	CONSTRAINT user_download_fk2 FOREIGN KEY(kd_lagu) REFERENCES lagu(kd_lagu)
);

CREATE TABLE admin_tab(
	username		VARCHAR(16) PRIMARY KEY,
	password		VARCHAR(20)
);

CREATE TABLE insert_lagu(
	username		VARCHAR(16), /* diambil dari tabel admin_tab */
	kd_lagu			VARCHAR(6), /* diambil dari tabel lagu */
	tanggal_insert	DATE NOT NULL, /* diambil dari tanggal sistem */
	
	CONSTRAINT insert_lagu_pk1 PRIMARY KEY(username, kd_lagu),
	CONSTRAINT insert_lagu_fk1 FOREIGN KEY(username) REFERENCES admin_tab(username),
	CONSTRAINT insert_lagu_fk2 FOREIGN KEY(kd_lagu) REFERENCES lagu(kd_lagu)
);
CREATE TABLE update_lagu(
	username		VARCHAR(16), /* diambil dari tabel admin_tab */
	kd_lagu			VARCHAR(6), /* diambil dari tabel lagu */
	tanggal_update	DATE NOT NULL, /* diambil dari tanggal sistem */
	
	CONSTRAINT update_lagu_pk1 PRIMARY KEY(username, kd_lagu),
	CONSTRAINT update_lagu_fk1 FOREIGN KEY(username) REFERENCES admin_tab(username),
	CONSTRAINT update_lagu_fk2 FOREIGN KEY(kd_lagu) REFERENCES lagu(kd_lagu)
);
CREATE TABLE delete_lagu(
	username		VARCHAR(16), /* diambil dari tabel admin_tab */
	kd_lagu			VARCHAR(6), /* diambil dari tabel lagu */
	tanggal_delete	DATE NOT NULL, /* diambil dari tanggal sistem */
	
	CONSTRAINT delete_lagu_pk1 PRIMARY KEY(username, kd_lagu),
	CONSTRAINT delete_lagu_fk1 FOREIGN KEY(username) REFERENCES admin_tab(username),
	CONSTRAINT delete_lagu_fk2 FOREIGN KEY(kd_lagu) REFERENCES lagu(kd_lagu)
);
CREATE TABLE delete_user(
	username		VARCHAR(16), /* diambil dari tabel admin_tab */
	user_akun		VARCHAR(10), /* diambil dari tabel lagu */
	tanggal_delete	DATE NOT NULL, /* diambil dari tanggal sistem */
	
	CONSTRAINT delete_user_pk1 PRIMARY KEY(username, user_akun, tanggal_delete),
	CONSTRAINT delete_user_fk1 FOREIGN KEY(username) REFERENCES admin_tab(username),
	CONSTRAINT delete_user_fk2 FOREIGN KEY(user_akun) REFERENCES akun(username)
);
