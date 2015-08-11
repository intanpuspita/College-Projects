/*
  Author     : Intan Puspitasari
  NIM        : 111511042
  Date       : 04 October 2013  
  Desciption : Practice 3-1 image proportional
*/
float skalawidth, skalaheight;

void setup()
{
  size(300,200);
  tampil();
}

void tampil()
{
 PImage im = loadImage("contoh.jpg"); //memas
 cariskala(im.width, im.height);
 
 float x = 0, y = 0;
 float widthimage = 0;
 float heightimage = 0;
 
 if(skalawidth > skalaheight){  //membandingkan skala yang lebih besar
     widthimage = width;        
     heightimage = widthimage/skalawidth*skalaheight;
     y = (height - heightimage)/2;
 }
 else
 {  
     heightimage = height;
     widthimage = heightimage/skalaheight*skalawidth;
     x = (width - widthimage)/2;
 }
 image(im, x,y,widthimage,heightimage);
}

void cariskala(float widthgambar, float heightgambar) // untuk mencari skala gambar
{
  float min = widthgambar;
  if(min > heightgambar){
    min = heightgambar;
  }
  skalawidth = widthgambar/min;
  skalaheight = heightgambar/min;
}
