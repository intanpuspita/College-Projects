/*
  Author     : Intan Puspitasari
  Date       : 04 October 2013  
  Desciption : Practice 3-2 membuat histogram dari gambar
*/
int[] histogram = new int [256];
void setup()
{
  size(217,500);
  background(0);
  PImage im = loadImage("contoh.jpg");
  im.filter(GRAY);
  image(im, 0,0, 217, 250);
  for(int x=0; x<im.width; x++)
  {
    for(int y=0; y<im.height; y++)
    {
      histogram[int(red(im.get(x, y)))]++;
    }
  }
  /*for(int x=0; x<256; x++)
  {
      println(histogram[x]);
  }*/
  
  int maxHistogram = max(histogram);
  //println(maxHistogram);
  for(int x=0; x<256; x++)
  {
    histogram[x]=int(histogram[x]*100/maxHistogram);
  }
  
  for(int x=0; x<256; x++)
  {
    stroke(255);
    line(x, height, x, height-histogram[x]);
  }
}
