CREATE TABLE users (
	id_user           	int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nama				varchar(50) not null,
    username	     	varchar(50) not null,
    pasword				varchar(255) not null,
    gender				enum('laki-laki', 'perempuan') not null,
    peran				enum('customer','admin')
);


CREATE TABLE lapangan (
	id_lapangan         int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nama_lapangan		varchar(50) not null,
    deskripsi	     	text,
    harga		double not null
);


CREATE TABLE booking (
	id_booking           	int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    tanggal					date not null,
    jam				    	set('07.00 - 08.00', '08.00 - 09.00', '09.00 - 10.00', '10.00 - 11.00', '11.00 - 12.00', '12.00 - 13.00', '13.00 - 14.00', '14.00 - 15.00', '15.00 - 16.00', '16.00 - 17.00', '17.00 - 18.00', '18.00 - 19.00', '19.00 - 20.00', '20.00 - 21.00', '21.00 - 22.00', '22.00 - 23.00'),
    nama				varchar(50) not null,
    no_hp				varchar(50) not null,
    lapangan_id				int not null,
    pemesan					int not null,
    img						text,
    last_create				datetime not null,
    statuss					varchar(50) not null,
    
    foreign key (pemesan) REFERENCES users (id_user),
    foreign key (lapangan_id) REFERENCES lapangan (id_lapangan)
);
