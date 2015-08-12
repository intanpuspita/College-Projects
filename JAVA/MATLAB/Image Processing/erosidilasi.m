
clear;
clc;

originalBW = imread('Dots and Stripes.png');
se = strel('disk',4);
erodedBW = imerode(originalBW,se);
imshow(originalBW), figure, imshow(erodedBW)


originalBW = imread('Dots and Stripes.png');
se = strel('line',15,40);
erodedBW = imerode(originalBW,se);
figure, imshow(erodedBW)


originalBW = imread('Dots and Stripes.png');
se = strel('arbitrary',eye (10));
erodedBW = imerode(originalBW,se);
figure, imshow(erodedBW)


originalBW = imread('Dots and Stripes.png');
se = strel('line',8,180);
erodedBW = imerode(originalBW,se);
figure, imshow(erodedBW)
