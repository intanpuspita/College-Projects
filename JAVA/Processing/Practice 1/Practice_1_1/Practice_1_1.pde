void setup()
{
  size(500, 500); //windows size
  int centerx = 150;
  int centery = 150;
  int n = 6;
  int radius = 30;
  poligon(centerx, centery, n, radius);
}

void poligon(int centerx, int centery, int n, int radius)
{
  int i;
  float x0, y0, x1, y1;
  for (i=1; i<=n+1; i++){
    x0 = (radius * cos(radians(0)+(TWO_PI/n)*(i-1)))+centerx;
    y0 = (radius * sin(radians(0)+(TWO_PI/n)*(i-1)))+centery;
    x1 = (radius * cos(radians(0)+(TWO_PI/n)*((i+1)-1)))+centerx;
    y1 = (radius * sin(radians(0)+(TWO_PI/n)*((i+1)-1)))+centery;    
    line(x0, y0, x1, y1);
  }
}
