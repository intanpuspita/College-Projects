// Press 'w' to start wiggling, space to restore
// original positions.

PShape cube;
float cubeSize = 320;
float circleRad = 100;
int circleRes = 40;
float noiseMag = 1;
float radius = sqrt(2*pow(cubeSize/2,2));

boolean wiggling = false;

void setup() {
  size(800, 700, P3D);    

  createCube();
}

void draw() {
  background(0);

  translate(width/2, height/2);
  rotateX(frameCount * 0.01f);
  rotateY(frameCount * 0.01f);

  shape(cube);

  if (wiggling) {
    PVector pos = null;
    for (int i = 0; i < cube.getChildCount(); i++) {
      PShape face = cube.getChild(i);
      for (int j = 0; j < face.getVertexCount(); j++) {
        pos = face.getVertex(j, pos);
        pos.x += random(-noiseMag/2, +noiseMag/2);
        pos.y += random(-noiseMag/2, +noiseMag/2);
        pos.z += random(-noiseMag/2, +noiseMag/2);
        face.setVertex(j, pos.x, pos.y, pos.z);
      }
    }
  }

  //println(frameRate);
}

public void keyPressed() {
  if (key == 'w') {
    wiggling = !wiggling;
  } else if (key == ' ') {
    createCube();
  } else if (key == '1') {
    cube.strokeWeight(1);
  } else if (key == '2') {
    cube.strokeWeight(5);
  } else if (key == '3') {
    cube.strokeWeight(10);
  }
}

void createCube() {
  cube = createShape(GROUP);  
  
  PShape face;
  int[] shade = {THRESHOLD,GRAY,INVERT,THRESHOLD,DILATE,BLUR};
  for (int j = 0; j < 6; j++) { 
    PImage image = loadImage("coba.jpg");
    face = createShape();    
    face.beginShape(POLYGON);
    face.stroke(255, 0, 0);
    face.fill(255);
    face.beginContour();
    if(shade[j] != BLUR) image.filter(shade[j]);
    else image.filter(shade[j], 10);
    face.texture(image);
    face.vertex(-cubeSize/2, -cubeSize/2, +cubeSize/2,0,0);
    face.vertex(+cubeSize/2, -cubeSize/2, +cubeSize/2,image.width,0);
    face.vertex(+cubeSize/2, +cubeSize/2, +cubeSize/2,image.width,image.height);
    face.vertex(-cubeSize/2, +cubeSize/2, +cubeSize/2,0,image.height);
    /*for (int i = 0; i < 4 ; i++) {
      face.vertex(radius*cos(PI/4+TWO_PI/4*i), radius*sin(PI/4+TWO_PI/4*i), +cubeSize/2);
    }*/
    face.endContour();
    face.endShape(CLOSE);
    cube.addChild(face);
    if (j < 4) {
      face.rotateY(TWO_PI/4 * j);
      } else {
      face.rotateX(PI/2+PI*(j-4));
      }
  }  
}
