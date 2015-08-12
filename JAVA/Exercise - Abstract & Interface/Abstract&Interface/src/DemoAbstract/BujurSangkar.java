package DemoAbstract;

class BujurSangkar extends Bentuk
{
	private int sisi;
	
	BujurSangkar(int s){
		sisi = s;
	}
	
	public int luas(){
		System.out.println("Pada Bujur Sangkar : ");
		return(sisi*sisi);
	}
}
