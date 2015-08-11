float[] values = {25.0, 45.0, 5.0, 15.0, 10.0};

void setup()
{
  size(500, 500);
  barChart();
}

void barChart()
{
  float max = nilaiMax();
  float bar;
  for(int i=0; i<values.length; i++)
  {
    fill(random(255), random(255), random(255));
    bar = values[i]/max*height;
    beginShape();
      vertex(i*width/values.length, height);
      vertex(i*width/values.length, height-bar);
      vertex((i+1)*width/values.length, height-bar);
      vertex((i+1)*width/values.length, height);
    endShape(CLOSE);
  }
}

float nilaiMax()
{
  float max = 0;
  for(int i = 0; i<values.length; i++){
    if(max < values[i]){
      max = values[i];
    }
  }
  return max;
}
