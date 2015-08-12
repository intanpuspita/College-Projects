% Author : Intan Puspitasari
% NIM    : 111511042
% Kelas  : 3B

clear;
clc;

deltax = 1;
x = 2;
fx = 2 * exp(1.5*x);
fdx = 3 * exp(1.5*x);

while(true)
   c = x-deltax;
   fc = 2 * exp(1.5*c);
   dfx = (fx - fc)/deltax;
   %dfx
   if(dfx >= fdx)
     break;
   end;
   z = dfx;
   deltax = deltax/2;
end
fprintf('%.15f %.15f %.15f\n', deltax, z, fdx);