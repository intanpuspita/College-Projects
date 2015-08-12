% Author : Intan Puspitasari
% NIM    : 111511042
% Kelas  : 3B

clear;
clc;

t0 = 10.0;
t1 = 15.0;
t2 = 20.0;
t3 = 22.5;
t4 = 30.0;
t = [1 t0 t0^2 t0^3 t0^4; 
    1 t1 t1^2 t1^3 t1^4; 
    1 t2 t2^2 t2^3 t2^4; 
    1 t3 t3^2 t3^3 t3^4;
    1 t4 t4^2 t4^3 t4^4];

Vt = [227.04;
      362.78;
      517.35;
      602.97;
      901.67];
  
mtimes(inv(t), Vt)