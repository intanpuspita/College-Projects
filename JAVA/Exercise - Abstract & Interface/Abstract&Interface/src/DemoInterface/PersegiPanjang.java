package DemoInterface;

class PersegiPanjang implements BentukGeometri
{
	private float panjang, lebar;
	
	public void setPanjang(float vPanjang){
		panjang = vPanjang;
	}
	
	public void setLebar(float vLebar){
		lebar = vLebar;
	}
	
	public float hitungLuas(){
		return(panjang*lebar);
	}
	
	public void displayLuas(){
		System.out.println("Luas Persegi Panjang = " +hitungLuas());
	}
}