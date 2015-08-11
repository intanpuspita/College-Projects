void setup()
{
  size(500, 500);
  int centerx = 150;
  int centery = 150;
  int n = 5;
  int radius = 100;
  poligon(centerx, centery, n, radius);
}

void poligon(int centerx, int centery, int n, int radius)
{
  int i;
  float x, y;
  beginShape();
  for (i=1; i<=n+1; i++){
    x = (radius * cos(radians(0)+(TWO_PI/n)*(i-1)))+centerx;
    y = (radius * sin(radians(0)+(TWO_PI/n)*(i-1)))+centery;
    vertex(x, y);
  }
  endShape(CLOSE);
}
