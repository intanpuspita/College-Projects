clc;
clear;

X = [10,20,30,40,50];
Y = [15.1,39.9,75.2,120.5,175.9];
n = 4;
m = n+1; 
M = size(m,m);
x = [22.5,37.8];

for i=1:m
    for j=i:m
        if(i==1)
            M(j,i) = Y(j);
        else
            M(j,i) = (M(j,i-1) - M(j-1,i-1))/(X(j)-X(j-(i-1)));
        end
    end
end

P = [M(1,1),M(1,1)];
for k=1:2
    for i=2:m
        Q = 1;
        for j=1:(i-1)
            Q = Q * (x(k) - X(j));
        end
        P(k) = P(k) + M(i,i) * Q;
    end
end
M
P
