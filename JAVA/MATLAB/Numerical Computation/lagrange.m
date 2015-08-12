% Author : Intan Puspitasari
% NIM : 111511042
% Kelas : 3B

clc;
clear;

A = [1 4 6; 
    1.5709 1.5721 1.5751];
x = 3.5;
n = 2
L = size(n+1);
P = 0;

for i = 1:n+1
    L(i) = 1;
    for j = 1:n+1
       if(j ~= i)
           L(i) = L(i)*((x-A(1,j))/(A(1,i)-A(1,j)));
       end
    end
    P = P+(A(2,i)*L(i));
end
L
fprintf('%.5f', P);