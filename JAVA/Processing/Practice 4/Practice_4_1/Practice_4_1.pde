/*
  Author : Intan Puspitasari
  NIM    : 111511042
  Created: 11 Oktober 2013
  Edited : 15-18 Oktober 2013
  Description : membuat grafik sinus cosinus menggunakan matriks transformasi
*/

void setup()
{
  size(720, 400);
  background(0);
  stroke(255);
  noFill();
  drawSinCos(0, 0, 720, 400); //memasukkan letak titik yang akan dipotong, x1, x2, y1, y2
}

float[] mirror(float x, float y) // untuk membalikkan grafik
{
  float[] A = {x, y, 1};
  float[][] B = {{1, 0, 0},
       {0, -1, 0},
       {0, 0, 0}};
  float[] C = new float[3];
  for(int i=0; i<3; i++)
  {
    for(int j=0; j<3; j++)
    {
      C[i]=C[i]+(A[j] * B[j][i]);
    }
  }
  return C;
}

float[] skala(float x, float y) // untuk memperbesar grafik
{
  float[] A = {x, y, 1};
  float[][] B = {{1, 0, 0},
       {0, height/2, 0},
       {0, 0, 0}};
  float[] C = new float[3];
  for(int i=0; i<3; i++)
  {
    for(int j=0; j<3; j++)
    {
      C[i]=C[i]+(A[j] * B[j][i]);
    }
  }
  return C;
}

float[] translasi(float x, float y) // untuk memindahkan posisi grafik
{
  float[] A = {x, y, 1};
  float[][] B = {{1, 0, 0},
       {0, 1, 0},
       {0, height/2, 0}};
  float[] C = new float[3];
  for(int i=0; i<3; i++)
  {
    for(int j=0; j<3; j++)
    {
      C[i]=C[i]+(A[j] * B[j][i]);
    }
  }
  return C;
}

void drawSinCos(float x1, float y1, float x2, float y2) // modul untuk menggambar grafik
{
  float xMax = x1;
  float xMin = x2;
  float yMax = y1;
  float yMin = y2;  
  if(xMax < x2){  //mencari x yang paling besar
    xMax = x2;
    xMin = x1;
  }
  if(yMax < y2){  //mencari y yang paling besar
    yMax = y2;
    yMin = y1;
  }
  
  float[] sinus1 = new float[3];
  float[] sinus2 = new float[3];
  float[] cosinus1 = new float[3];
  float[] cosinus2 = new float[3];
  
  beginShape();
  for (float i=xMin; i<=xMax; i++){
    float x = i /( width/360 ); //nilai derajat yang akan di lihat sin atau cos nya
    sinus1=skala(i, sin(radians(x))); // titik awal untuk grafik sin
    sinus1=mirror(sinus1[0], sinus1[1]);
    sinus1=translasi(sinus1[0], sinus1[1]);

    sinus2=skala(i+1, sin(radians(x+1))); // titik akhir untuk grafik sin
    sinus2=mirror(sinus2[0], sinus2[1]);
    sinus2=translasi(sinus2[0], sinus2[1]);   
    
    stroke(255,0,0);
    line(sinus1[0], sinus1[1], sinus2[0], sinus2[1]);
    
    cosinus1=skala(i, cos(radians(x))); // titik awal untuk grafik cos
    cosinus1=mirror(cosinus1[0], cosinus1[1]);
    cosinus1=translasi(cosinus1[0], cosinus1[1]);

    cosinus2=skala(i+1, cos(radians(x+1))); // titik akhir untuk grafik cos
    cosinus2=mirror(cosinus2[0], cosinus2[1]);
    cosinus2=translasi(cosinus2[0], cosinus2[1]);   
    
    stroke(0,255,0);
    line(cosinus1[0], cosinus1[1], cosinus2[0], cosinus2[1]);
  }
  endShape(CLOSE);
}
