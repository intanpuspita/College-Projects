% Author : Intan Puspitasari
% NIM    : 111511042
% Kelas  : 3B

clc;
clear;

bil_1 = input('Masukkan Bilangan : ');
depan = floor(bil_1);
belakang = bil_1 - depan;
biner = size(8);
index = 8;
bit_awal = 5;

%decimal to binary
temp = depan;
for baris = bit_awal:-1:1
    hasil = floor(temp/2);
    biner(baris) = mod(temp,2);
	temp = hasil;
end

temp = belakang;
for baris = bit_awal+1:index
    hasil = temp*2;
	hsl_depan = floor(hasil);
	hsl_belakang = hasil - hsl_depan; 
    biner(baris) = hsl_depan;
	temp = hsl_belakang;
end
biner

%binary to decimal
i = 0;
depan = 0;
for baris = bit_awal:-1:1
    depan = depan + (biner(baris)*(2^i));
    i = i+1;
end

i=1;
belakang = 0;
for baris = bit_awal+1:index
    belakang = belakang + (biner(baris)*1/(2^i));
    i = i+1;
end
bil_2 = depan + belakang;
error = bil_1-bil_2;
error