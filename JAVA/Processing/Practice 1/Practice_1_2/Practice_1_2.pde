void setup()
{
  int width = 300;
  int height = 300;  
  size(width, height); //windows size
  int r1 = 255;
  int g1 = 255;
  int b1 = 0;
  int r2 = 0;
  int g2 = 0;
  int b2 = 0;
  gradient(r1, g1, b1, r2, g2, b2);
}

void gradient(int r1, int g1, int b1, int r2, int g2, int b2)
{
  for(int y=0; y<=height; y++){
    stroke(r1, g1, b1);
    line(0, y, width, y);
    if(r2>r1){
      r1++;
    }
    else{
      r1--;
    }
    /*if(g2>g1){
      g1++;
    }
    else{
      g1--;
    }*/
    if(b2>b1){
      b1++;
    }
    else{
      b1--;
    }
  }
}
