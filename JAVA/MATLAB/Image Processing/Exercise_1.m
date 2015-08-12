clc;
clear;

B = [1 2 3; 4 5 6; 7 8 9]; % no 1 untuk mengisikan nilai array B
B(2, 3);                   % no 2 untuk menampilkan nilai B di (2, 3)
B(1, 3) = 0;               %      mengganti nilai B di (1, 3) dgn 0
C = zeros(3);              % no 3 membuat array 3x3 dengan nilai 0
D = ones(3);               % no 4 membuat array 3x3 dengan nilai 1
E = B';                    % no 5 array E = transpos dari array B
F = inv(B);                % no 6 array F = invers dari array B
G = [2 4 6; 2 4 6; 2 4 6]; % no 7 untuk mengisikan nilai array G 
H = cross(B, G);           % no 8 hasil kali cross product dari array B dan G
I = dot(B, G);             % no 9 hasil kali dot product dari array B dan G
J = B + G;                 % no 10 pertambahan matriks B dan G
Nilai = 50;                % no 11 untuk nampilin, 
if (Nilai >= 80 && Nilai <= 100)    % kalau nilainya antara 80-100 maka A
    disp('Nilai A');
else if(Nilai >= 65 && Nilai < 80)  % kalau nilainya antara 65-80 maka B
        disp('Nilai B');
    else                            % kalau nilainya antara <65 maka tidak lulus
        disp('Tidak Lulus');
    end
end
K = B(1, :);               % no 12 menampilkan baris pertama dari B
K2 = B(:, 1);              %       menampilkan kolom pertama dari B
K3 = B(2:3, :);            %       menampilkan baris ke 2 dan 3 dari B
L = 2 * B;                 % no 13 mengkalikan array B dengan 2 (tanpa loop)
for i=1:3                  % no 14 mengkalikan array B dengan 2 (menggunakan loop) 
    for j=1:3
       M(i, j) = B(i, j)*2;
    end
end
kernel = [1/9 1/9 1/9; 1/9 1/9 1/9; 1/9 1/9 1/9];               % no 15 mengisikan array kernel
N = [0 0 0 0 0; 0 100 100 100 0; 0 100 100 100 0; 0 0 0 0 0];   % no 16 mengisinkan array N
O = conv2(N, kernel)      % no 17 hasil konvolusi(?) dari N dan kernel
img = imread('cat.jpg');   % no 18 foto dimasukkan ke variabel img
%imshow(img);              %       tampilkan img

%imgR = (img(1, :));
%imshow(imgR);             % no 19 ??
%imgG = (img(1, :));
%imshow(imgG);             % no 20 ??
%imgB = (img(1, :));
%imshow(imgB);             % no 21 ??
%imgGab = union(imgR, imgG, imgB);

a = zeros(size(img, 1), size(img, 2));
imgR = (cat(3,img(:,:,1),a,a));
imgG = (cat(3,a,img(:,:,2),a));
imgB = (cat(3,a,a,img(:,:,3)));
imshow(imgB);
