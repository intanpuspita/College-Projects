% Author : Intan Puspitasari
% NIM    : 111511042
% Kelas  : 3B

clear;
clc;

r = 2;
x0 = 0;
x1 = 1.2;
while(true)
   fx0 = exp(x0) - 3*x0;
   fx1 = exp(x1) - 3*x1;
   xr = x1 - ((fx1*(x1-x0))/(fx1-fx0));
   fprintf('%.20f   %.20f   %.20f\n',x0,x1, xr);
   if(abs(xr - 0.61906129) < 0.0005)
        break;
   end
   x0 = x1;
   x1 = xr;
   r = r+1;
end

fprintf('%.20f   %.20f   %.20f\n',x0,x1, xr);
%fprintf('Xr = %f\n',xr);