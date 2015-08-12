% Author : Intan Puspitasari
% NIM    : 111511042
% Kelas  : 3B

clear;
clc;

X = [10 227.04;
     15 362.78;
     20 517.35;
     22.5 602.97;
     30 901.67];
t = 16;
if(t >= X(1, 1) && t <= X(5, 1))
    i = 1;
    while(true)
        if(t >= X(i, 1) && t <= X(i+1, 1))
           break; 
        end
        i = i+1;
    end
    if(t == X(i, 1))
        a = X(i, 2)/X(i, 1)
    else
        if(t == X(i+1, 1))
            a = X(i+1, 2)/X(i+1, 1)    
        else
            a = ((X(i+1, 2)-X(i, 2))/(X(i+1, 1)-X(i, 1)))
        end
    end
end