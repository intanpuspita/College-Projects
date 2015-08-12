clc;
clear;

B = imread('Tulips.jpg');
G = rgb2gray(B); %mengubah  warna gambar Tulips.jpg menjadi grayscale
sz = [1 256]; % menentukan ordo matrik 1 x 256
arr = zeros(sz); %membuat matrik nol dengan ordo 1 x 256

for i = 1:size(G,1) %loop dari 1 sampai ukuran panjang gambar dalam variabel G
    for j = 1:size(G,2) %loop dari 1 sampai ukuran lebar gambar dalam variabel G
        arr(G(i,j)+1) = arr(G(i,j)+1) + 1; %pengisian matriks arr dengan jumlah kemunculan nilai per pixel gambar G
    end
end


x = 0:1:255; %mengisi nilai x dengan nilai 0 sampai 255
subplot(2,1,1);plot(x, arr); %menampilkan grafik (histogram) dengan subplot
subplot(2,1,2);imhist(G); %menampilkan histogram asli gambar G dengan fungsi imhist()