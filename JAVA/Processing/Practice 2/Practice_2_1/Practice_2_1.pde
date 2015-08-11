float x;
void setup(){
  size(360, 200);
  background(0);
  stroke(255);
  line(0, height/2, width, height/2);
  sinus();
  cosinus();
}

void sinus(){
  beginShape();
  stroke(255,0,0);
  for(x=0; x<360; x++)
  {
    line(x, (height/2)+((height/2)*sin(radians(180+x))), x+1, (height/2)+((height/2)*sin(radians(180+x+1))));
  }
  endShape(CLOSE);
}

void cosinus(){
  beginShape();
  stroke(0,255,0);
  for(x=0; x<360; x++)
  {
    line(x, (height/2)+((height/2)*cos(radians(180+x))), x+1, (height/2)+((height/2)*cos(radians(180+x+1))));
  }
  endShape(CLOSE);
}
