clc;
clear;

A = [1 2 3 4 5 6; 
    -3 0 15 48 105 192];
x = 3.5;
n = 5;
matriks = size(n+1, n+1);
       
for i = 1:n+1
   matriks(i, 1) = A(2, i); 
end

s = 1;
for i = 2:n+1
   for j = 1:n+1
      matriks(j, i) = 0;
      if(j >= i)
        matriks(j, i) = matriks(j, i)+((matriks(j, i-1)-matriks(j-s, i-1))/(A(1, j)-A(1, j-s)));
      end
   end
   s = s+1;
end
matriks