% Author : Intan Puspitasari
% NIM    : 111511042
% Kelas  : 3B

clear;
clc;

x0 = 1;
r = 1;
while (true)
    xr = exp(x0)/3;
    if(abs(xr - 0.61906129) < 0.0005)
        break;
    end
    fprintf('%f   %f\n',r, xr);
    x0 = xr;
    r = r + 1;
end
fprintf('%f   %f\n',r, xr);
fprintf('Xr = %f\n',xr);