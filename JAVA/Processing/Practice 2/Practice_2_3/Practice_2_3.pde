float[] values = {25.0, 45.0, 5.0, 15.0, 10.0};

void setup()
{
  size(500, 500);
  colorMode(HSB, values.length);
  pieChart();
}

void pieChart()
{
  float sum = 0;
  for(int i=0; i<values.length; i++)
  {
    sum = sum+values[i];
  }
  sum = 360/sum;
  
  float radian1, radian2 = 0;
  for(int i=0; i<values.length; i++)
  {
    fill(i, 255, 255);
    radian1 = radian2; //radian awal
    radian2 = radian2 + values[i] * sum;
    arc(width/2, height/2, width, height, radians(radian1), radians(radian2));
  }
}
