clc;
clear;

a = 2;
b = 4;
n = 6;

odd = 0;
even = 0;
for i = 1:1:n+1
    h = i-1;
    X(1, i) = a + (h*(b-a)/n);
    X(2, i) = X(1, i)^(2/3);
    if(i > 1 && i < n+1 && mod(i-1, 2) == 1)
       odd = odd + X(2, i); 
    else
        if(i > 1 && i < n+1 && mod(i-1, 2) == 0)
            even = even + X(2, i);
        end
    end
end
X
ASimpson = (h/3) * (X(2,1) + X(2,n) + (4*odd) + (2*even))

a = 1;
b = 4;
n = 6;

odd = 0;
even = 0;
for i = 1:1:n+1
    h = i-1;
    X(1, i) = a + (h*(b-a)/n);
    X(2, i) = 5*exp(-2*X(1,i));
    if(i > 1 && i < n+1 && mod(i-1, 2) == 1)
       odd = odd + X(2, i); 
    else
        if(i > 1 && i < n+1 && mod(i-1, 2) == 0)
            even = even + X(2, i);
        end
    end
end
X
ASimpson = (h/3) * (X(2,1) + X(2,n) + (4*odd) + (2*even))

a = 90;
b = 180;
n = 6;

odd = 0;
even = 0;
for i = 1:1:n+1
    h = i-1;
    X(1, i) = a + (h*(b-a)/n);
    X(2, i) = sind(X(1,i));
    if(i > 1 && i < n+1 && mod(i-1, 2) == 1)
       odd = odd + X(2, i); 
    else
        if(i > 1 && i < n+1 && mod(i-1, 2) == 0)
            even = even + X(2, i);
        end
    end
end
X
ASimpson = (h/3) * (X(2,1) + X(2,n) + (4*odd) + (2*even))