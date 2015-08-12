clc;
clear;

I = imread('Tulips.jpg');
K = rgb2gray(I);
J = histeq(K);
%imshow(K);
%figure, imshow(J);
figure, imhist(K);
