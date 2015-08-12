% Author : Intan Puspitasari
% NIM    : 111511042
% Kelas  : 3B

clc;
clear;
r = 0;
Ar = 0;
Br = 1;
x = 0.0005;
s = 0.61906129;
%b = true;
while (true)
    Xr = (Ar + Br)/2;
    if(((exp(Ar)-3*Ar)*(exp(Xr)-3*Xr))<0)
        Br = Xr;
        else Ar = Xr;
    end
    fprintf('%f   %f   %f   %f\n', r, Ar, Br, Xr);
    r=r+1;
    if(abs(Xr-s)<x)
        break;
    end
end
fprintf('\nXr = %f\n', Xr);