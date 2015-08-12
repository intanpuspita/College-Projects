% Author : Intan Puspitasari
% NIM    : 111511042
% Kelas  : 3B

clear;
clc;

r = 1;
x0 = 1;
while (true)
    fx0 = exp(x0) - 3*x0;
    fdx0 = exp(x0) - 3;
    xr = x0 - (fx0/fdx0);
    fprintf('%f   %f\n',r, xr);
    if(abs(xr - 0.61906129) < 0.0005)
        break;
    end
    x0 = xr;
    r = r + 1;
end
fprintf('%f   %f\n',r, xr);
fprintf('Xr = %f\n',xr);